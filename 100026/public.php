<?php
        include_once('websections/JaduHomepageWidgetSettings.php');
        include_once('ext/json.php');

        $allWidgetLinks = array();

        if (isset($_POST['preview'])) {
                $newSettings = array();

                $j = 0;

                if (!empty($settings)) {
                        foreach ($settings as $name => $value) {
                                $newSettings[$j] = new stdClass();
                                $newSettings[$j]->name = $name;
                                $newSettings[$j]->value = $value;

                                $newSettings[$j]->value = str_replace('_apos_', "'", $newSettings[$j]->value);
                                $newSettings[$j]->value = str_replace('_amp_', "&", $newSettings[$j]->value);
                                $newSettings[$j]->value = str_replace('_eq_', '=', $newSettings[$j]->value);
                                $newSettings[$j]->value = str_replace('_hash_', '#', $newSettings[$j]->value);
                                $newSettings[$j]->value = str_replace('_ques_', '?', $newSettings[$j]->value);
                                $newSettings[$j]->value = str_replace('_perc_', '%', $newSettings[$j]->value);

                                $j++;
                        }
                }

                $settings = $newSettings;
        }
        else {
                if (isset($widget) && !is_array($widget)) {
                        if (isset($_POST['homepageContent'])) {
                                $settings = array();
                                foreach ($widgetSettings[$widget->id] as $setting) {
                                        $newSetting = new WidgetSetting();
                                        $newSetting->name = $setting->name;
                                        $newSetting->value = $setting->value;

                                        $newSetting->value = str_replace('_apos_', "'", $newSetting->value);
                                        $newSetting->value = str_replace('_amp_', "&", $newSetting->value);
                                        $newSetting->value = str_replace('_eq_', '=', $newSetting->value);
                                        $newSetting->value = str_replace('_hash_', '#', $newSetting->value);
                                        $newSetting->value = str_replace('_ques_', '?', $newSetting->value);
                                        $newSetting->value = str_replace('_perc_', '%', $newSetting->value);

                                        $settings[] = $newSetting;
                                }
                        }
                        else if (isset($_POST['action']) && $_POST['action'] == 'getPreviews') {
                                $settings = getAllSettingsForHomepageWidget($aWidget->id);
                        }
                        else if (isset($preview) && $preview == true){
                                $settings = getAllSettingsForHomepageWidget($widget->id, false);
                        }
                        else {
                                $settings = getAllSettingsForHomepageWidget($widget->id, true);
                        }
                }
                else {
                        if (isset($_POST['homepageContent'])) {
                                $settings = array();
                                foreach ($widgetSettings[$stack->id] as $setting) {
                                        $newSetting = new WidgetSetting();
                                        $newSetting->name = $setting->name;
                                        $newSetting->value = $setting->value;
                                        $settings[] = $newSetting;
                                }
                        }
                        else if (isset($_POST['getPreviews'])) {
                                $settings = getAllSettingsForHomepageWidget($aWidget->id);
                        }
                        else if (isset($preview) && $preview == true){
                                $settings = getAllSettingsForHomepageWidget($stack->id, false);
                        }
                        else {
                                $settings = getAllSettingsForHomepageWidget($stack->id, true);
                        }
                }
        }

        $tempLinks = array();
        $tempTitles = array();
        $tempButtons = array();
        $tempAligns = array();
        $nav_widget_title = '';
        $tempHTML = array();

        if (!empty($settings)) {
                foreach ($settings as $value) {
                        if (preg_match('/image([0-9]+)title/i', $value->name, $matches)) {
                                $tempTitles[$matches[1]] = stripslashes($value->value);
                        }
                        if (preg_match('/image([0-9]+)slide_title/i', $value->name, $matches)) {
                                $tempSlideTitles[$matches[1]] = stripslashes($value->value);
                        }
                        if (preg_match('/image([0-9]+)link/i', $value->name, $matches)) {
                                $tempLinks[$matches[1]] = $value->value;
                        }
                        if (preg_match('/image([0-9]+)description/i', $value->name, $matches)) {
                                $tempDescription[$matches[1]] = $value->value;
                        }
                        if (preg_match('/image([0-9]+)button/i', $value->name, $matches)) {
                                $tempButtons[$matches[1]] = $value->value;
                        }
                        if (preg_match('/image([0-9]+)align/i', $value->name, $matches)) {
                                $tempAligns[$matches[1]] = $value->value;
                        }
                        if (preg_match('/image([0-9]+)imageSrc/i', $value->name, $matches)) {
                                $tempImageSrc[$matches[1]] = $value->value;
                        }
                        if (preg_match('/image([0-9]+)imageOverlaySrc/i', $value->name, $matches)) {
                                $tempImageOverlaySrc[$matches[1]] = $value->value;
                        }
                        if (preg_match('/image([0-9]+)html/i', $value->name, $matches)) {
                                $tempHTML[$matches[1]] = $value->value;
                                
                        }

                        if ($value->name == 'nav_widget_title') {
                                $nav_widget_title = $value->value;
                        }
                }
        }

        // Sort into correct positions using index
        ksort($tempLinks);
        foreach ($tempLinks as $index => $link) {
                $allWidgetLinks[] = array($tempTitles[$index], $tempLinks[$index], $tempDescription[$index], $tempImageSrc[$index], $tempButtons[$index], $tempAligns[$index],$tempSlideTitles[$index], $tempImageOverlaySrc[$index], $tempHTML[$index]);
        }
?>
<div class="gallery gallery-01 ie-fix">
        <ul class="slides">
<?php
    $imgcount = 0;
    foreach ($allWidgetLinks as $wKey => $wValue) {
        $imgcount++;

        // get image height/width for $wValue[3]
        list($img_width, $img_height) = getimagesize('/var/www/jadu/public_html/images/' . $wValue[3]);
?>
            <li class="slide-0<?php print $imgcount;?> <?php print $wValue[6]; ?>">
<?php if ($wValue[1] != "") { ?>
                <a class="<?php print $wValue[6]; ?> link gtm-carousel-link" href="<?php print $wValue[1]; ?>">
<?php } ?>
<?php if ($imgcount < 2) { ?>
                    <img src="/images/<?php print $wValue[3]; ?>" alt="image" >
<?php } else { ?>
                    <img class='lazy' data-src="/images/<?php print $wValue[3]; ?>" alt="image" />
<?php } ?>
<div class="gradient">                                       
</div>

                    <div class="holder">
                        <div class="container">
<?php if (!empty($wValue[8])       ) {
?>                        
                  <div class='html'>
                        <?php print $wValue[8]; ?>
                  </div>
<?php } ?>

<?php
                    if (!empty($wValue[0]) || !empty($wValue[2]) || !empty($wValue[4]) ) {
?>
                            <div class="inner">
<?php
                                if (!empty($wValue[7])) {
?>
                                    <img src="/images/<?php print $wValue[7]; ?>" alt="overlay image" class='slide_overlay'>
<?php
                                }
?>

                                <div class="caption <?php print $wValue[5]; ?>">

<?php
                                if (!empty($wValue[0])) {
?>
                                    <h2><?php print $wValue[0]; ?></h2>
<?php
                                }
?>
                                    <p><?php print $wValue[2]; ?></p>
                                    <div class="gallery-more">
                                        <span class="ie-fix"><?php print $wValue[4]; ?></span>
                                    </div>
                                </div>
                            </div>
<?php
                    }
?>
                        </div>
                    </div>
<?php if ($wValue[1] != "") { ?>
                </a>
<?php } ?>
            </li>
<?php
    }
?>
        </ul>
    </div><!-- / gallery -->