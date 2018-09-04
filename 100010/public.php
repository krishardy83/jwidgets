<style>
@font-face {
	font-family: 'aptifer-sans-thin';
	src: url('../fonts/raleway-thin-webfont.eot');
	src: url('../fonts/raleway-thin-webfont.eot?#iefix') format('embedded-opentype'),
		url('../fonts/raleway-thin-webfont.woff') format('woff'),
		url('../fonts/raleway-thin-webfont.ttf') format('truetype'),
		url('../fonts/raleway-thin-webfont.svg#ralewaythin') format('svg');
	font-weight: normal;
	font-style: normal;
}
/* search-box */
.search-box {
	background:#f0f0f0;
	font:18px/24px 'aptifer-sans', sans-serif;
	color:#2c4263;
	padding:19px 29px 22px 27px;
	margin:20px 0 35px;
}
.search-box.bottom { margin:20px 0 -15px; }
.search-box .intro { margin:0 0 16px; }
.search-box .intro span { font-family:'aptifer-sans-medium', sans-serif; }
.search-box .block {
	overflow:hidden;
	position:relative;
	background:#fff url(http://www.messiah.edu/new/final/majors/images/ico-001.png) no-repeat 10px 11px;
	padding:7px 6px 7px 36px;
	margin:0 0 19px;
	-webkit-border-radius:6px;
	-moz-border-radius:6px;
	border-radius:6px;
	-webkit-box-shadow:2px 2px 3px rgba(2,2,2,0.2);
	-moz-box-shadow:2px 2px 3px rgba(2,2,2,0.2);
	box-shadow:2px 2px 3px rgba(2,2,2,0.2);
}
.search-box .block .txt {
	float:left;
	width:100%;
	height:25px;
	font:15px/19px 'aptifer-sans', sans-serif;
	color:#848486;
	border:0;
	padding:3px 40px 3px 0;
	background:transparent;
	box-sizing:border-box;
	-moz-box-sizing:border-box;
	-webkit-box-sizing:border-box;
}
.search-box .block .btn-submit {
	float:left;
	position:relative;
	width:29px;
	height:25px;
	margin:1px 0 0 -29px;
	padding:0;
	border:0;
	background:#2c4263;
	font:15px/18px 'aptifer-sans', sans-serif;
	color:#fff;
	cursor:pointer;
	text-transform:uppercase;
	-webkit-border-radius:3px;
	-moz-border-radius:3px;
	border-radius:3px;
}
.search-box .row:after{
	clear:both;
	content:'';
	display:block;
}
.search-box .row .wrap {
	float:left;
	max-width:50%;
}
.search-box .row .wrap + .wrap { float:right; }
.search-box .row .wrap label {
	float:left;
	font:24px/26px 'aptifer-sans', sans-serif;
	color:#2c4263;
	padding:5px 11px 0 7px;
}
.search-box .sel-02 { width:257px; }
.search-box .select-sel-02 {
	font:18px/20px 'aptifer-sans', sans-serif;
	float:right;
	height:38px;
	overflow:visible;
	background:#fff;
	-webkit-border-radius:6px;
	-moz-border-radius:6px;
	border-radius:6px;
	-webkit-box-shadow:2px 2px 3px rgba(2,2,2,0.2);
	-moz-box-shadow:2px 2px 3px rgba(2,2,2,0.2);
	box-shadow:2px 2px 3px rgba(2,2,2,0.2);
}
.search-box .select-sel-02 .center {
	color:#363637;
	padding:9px 37px 9px 12px;
	background:none;
	-webkit-box-shadow:none;
	-moz-box-shadow:none;
	box-shadow:none;
}
.search-box .select-sel-02.select-active {
	-webkit-border-radius:6px 6px 0 0;
	-moz-border-radius:6px 6px 0 0;
	border-radius:6px 6px 0 0;
}
.search-box .select-sel-02 .select-opener {
	width:34px;
	border-left:1px solid #ccc;
	background:#fff url(http://www.messiah.edu/new/final/majors/images/ico-002.png) no-repeat 10px 16px;
}
.select-options.drop-sel-02 { background:none; }
.select-options.drop-sel-02 ul {
	font:18px/20px 'aptifer-sans', sans-serif;
	background:#fff;
	border-top:1px solid #ccc;
	padding:10px 0;
	-webkit-border-radius:0 0 6px 6px;
	-moz-border-radius:0 0 6px 6px;
	border-radius:0 0 6px 6px;
	-webkit-box-shadow:2px 2px 3px rgba(2, 2, 2, 0.2);
	-moz-box-shadow:2px 2px 3px rgba(2, 2, 2, 0.2);
	box-shadow:2px 2px 3px rgba(2, 2, 2, 0.2);
}
.select-options.drop-sel-02 ul li {
	width:auto;
	float:none;
	padding:0 12px 7px;
}
.select-options.drop-sel-02 ul a {
	display:inline;
	color:#000;
}
.select-options.drop-sel-02 .item-selected a {
	background:none;
	color:#75adcf;
}
.search-box .btn-holder {
	text-align:center;
	margin:-1px 0 4px;
}
.search-box .btn-info {
	font:15px/18px 'aptifer-sans', sans-serif;
	color:#363637;
	padding:7px 13px 8px;
}
.search-box .btn-info:hover { color:#fff; }
.search-box .btn-info .mobile-txt { display:none; }
/* alphabet-list */
.alphabet-list {
	list-style:none;
	margin:0;
	padding:0 7px 15px;
	text-transform:uppercase;
	font-size:0;
	line-height:0;
	letter-spacing:-0.31em;
	word-spacing:-0.43em;
}
.alphabet-list li {
	display:inline-block;
	vertical-align:top;
	margin:0 10px 0 0;
	padding:0 0 3px;
	border-bottom:1px solid transparent;
	font:26px/28px 'priori-sans-bold', sans-serif;
	letter-spacing:normal;
	white-space:normal;
}
.alphabet-list li a { color:#9c9c9c; }
.alphabet-list li a:hover { text-decoration:none; }
.alphabet-list .active,
.alphabet-list li:hover { border-color:#b0b0b0; }
/* table-holder */
.table-holder {
	position:relative;
	margin:0 0 26px;
	border:1px solid #ccc;
	-webkit-border-radius:6px;
	-moz-border-radius:6px;
	border-radius:6px;
}
/* info-table */
.info-table {
	border-collapse:collapse;
	width:100%;
	border:0;
	font:15px/17px 'aptifer-sans', sans-serif;
	color:#424242;
}
.tableFloatingHeaderOriginal { z-index:10 !important; }
.table-holder.top .tableFloatingHeaderOriginal:before {
	position:absolute;
	left:-5000px;
	right:-5000px;
	top:0;
	bottom:0;
	background:#2c4263;
	content:"";
	z-index:-1;
}
.info-table td {
	height:27px;
	border-left:1px solid #dcdcdc;
	vertical-align:middle;
	padding:0 8px 3px;
}
.info-table .even td { background:#f0f0f0; }
.info-table th {
	color:#fff;
	font-weight:normal;
	text-align:left;
	height:26px;
	padding:0 7px 3px;
	border-left:1px solid #848e9d;
	background:#2c4263;
}
.info-table tr th:first-child {
	padding-left:8px;
	-webkit-border-radius:6px 0 0 0;
	-moz-border-radius:6px 0 0 0;
	border-radius:6px 0 0 0;
}
.info-table tr th.cell-07 {
	-webkit-border-radius:0 6px 0 0;
	-moz-border-radius:0 6px 0 0;
	border-radius:0 6px 0 0;
}
.info-table .last td:first-child {
	-webkit-border-radius:0 0 0 6px;
	-moz-border-radius:0 0 0 6px;
	border-radius:0 0 0 6px;
}
.info-table .last td.cell-07 {
	-webkit-border-radius:0 0 6px 0;
	-moz-border-radius:0 0 6px 0;
	border-radius:0 0 6px 0;
}
.info-table th span {
	display:block;
	position:relative;
}
.info-table .cell-01 {
	width:28.85%;
	border:0;
}
.info-table .cell-02 { width:7.64%; }
.info-table .cell-03 { width:7.76%; }
.info-table .cell-04 { width:7.02%; }
.info-table .cell-05 { width:13.93%; }
.info-table .cell-06 { width:15.41%; }
.info-table td.cell-05,
.info-table td.cell-06,
.info-table td.cell-07 { padding:0 8px; }
.info-table .ico {
	display:block;
	margin:0 auto;
}
.info-table strong {
	font:15px/17px 'aptifer-sans-bold', sans-serif;
	color:#6697b8;
}
.info-link {
	position:absolute;
	right:-5px;
	top:50%;
	width:15px;
	height:15px;
	text-indent:-9999px;
	overflow:hidden;
	margin:-22px 0 0;
	background:#f0f0f0 url(http://www.messiah.edu/new/final/majors/images/ico-005.png) no-repeat 4px 3px;
	-webkit-border-radius:50%;
	-moz-border-radius:50%;
	border-radius:50%;
	-webkit-box-shadow:0 0 2px rgba(66,66,66,0.6);
	-moz-box-shadow:0 0 2px rgba(66,66,66,0.6);
	box-shadow:0 0 2px rgba(66,66,66,0.6);
}
.table-holder.top .info-link { display:none; }
.ui-tooltip {
	position:absolute;
	max-width:140px;
	z-index:20;
	background:rgba(44,66,99,0.87);
	font:13px/16px 'aptifer-sans-thin', sans-serif;
	color:#fff;
	padding:8px 11px 12px;
	-webkit-border-radius:5px;
	-moz-border-radius:5px;
	border-radius:5px;
	-webkit-box-shadow:2px 2px 3px rgba(2,2,2,0.2);
	-moz-box-shadow:2px 2px 3px rgba(2,2,2,0.2);
	box-shadow:2px 2px 3px rgba(2,2,2,0.2);
}
.ui-tooltip:before {
	position:absolute;
	bottom:-10px;
	right:6px;
	width:15px;
	height:10px;
	background:url(http://www.messiah.edu/new/final/majors/images/ico-006.png) no-repeat;
	content:"";
	z-index:30;
}
/* headline */
.headline { padding:0 0 15px; }
#content .headline h2 { margin:0 0 6px; }
#content .headline h3 { line-height:20px; }
/* bottom */
.bottom-search {
	display:none;
	position:fixed;
	width:852px;
	bottom:0;
	left:50%;
	margin-left:-273px;
	padding:14px 23px 12px 19px;
	background:#2c4263;
	z-index:10;
	font:15px/17px 'aptifer-sans-medium', sans-serif;
	color:#fff;
	-webkit-border-radius:6px 6px 0 0;
	-moz-border-radius:6px 6px 0 0;
	border-radius:6px 6px 0 0;
}
.bottom-search .frame:after{
	clear:both;
	content:'';
	display:block;
}
.bottom-search.bottom {
	position:static;
	margin:0 0 30px;
	width:auto;
}
.program-search {
	float:right;
	position:relative;
	width:313px;
	padding:0 10px 0 30px;
	background:#fff url(http://www.messiah.edu/new/final/majors/images/ico-004.png) no-repeat 9px 9px;
	-webkit-border-radius:4px;
	-moz-border-radius:4px;
	border-radius:4px;
}
.program-search .txt {
	float:left;
	width:100%;
	padding:4px 0;
	border:0;
	background:none;
	font:15px/19px 'aptifer-sans', sans-serif;	height:21px;
	color:#848486;
}
.bottom-search .caption {
	margin:0;
	padding:5px 10px 0 0;
	overflow:hidden;
}
.bottom-search .caption span { font-family:'aptifer-sans', sans-serif; }
.bottom-search .btn-top {
	float:right;
	position:relative;
	width:25px;
	height:24px;
	padding:7px 3px 0;
	margin:0 0 0 19px;
	background:#9c9c9c;
	font:13px/15px 'aptifer-sans', sans-serif;
	color:#fff;
	text-align:center;
	-webkit-border-radius:50%;
	-moz-border-radius:50%;
	border-radius:50%;
	transition:all .2s;
	-webkit-transition:all .2s;
	-o-transition:all .2s;
	-ms-transition:all .2s;
}
.bottom-search .btn-top:hover {
	text-decoration:none;
	background:#fff;
	color:#2c4263;
}
@media only screen and (max-width: 1204px) and (min-width: 1025px) {
	.bottom-search { margin-left:-340px; }
	.search-box .row .wrap { width:300px; }
	.search-box .row .wrap label {
		float:none;
		display:block;
		font-size:21px;
		line-height:23px;
		padding:0 1px 7px;
	}
	.search-box .select-sel-02 {
		float:none;
		width:auto !important;
	}
	.search-box .row .wrap + .wrap { margin-left:16px; }
}
/* tablet media */
@media only screen and (max-width: 1024px) {
	/* search-box */
	.search-box {
		margin:18px 0 32px;
		padding:21px 24px 26px 27px;
	}
	.search-box .block { margin:0 0 21px; }
	.search-box .row .wrap { width:203px; }
	.search-box .row .wrap label {
		float:none;
		display:block;
		font-size:21px;
		line-height:23px;
		padding:0 1px 7px;
	}
	.search-box .select-sel-02 {
		float:none;
		width:auto !important;
	}
	.search-box .row .wrap + .wrap { margin-left:16px; }
	.search-box .btn-holder { margin:-3px 0 0; }
	/* alphabet-list */
	.alphabet-list {
		text-align:center;
		padding:0;
		margin:0 -10px 2px;
	}
	.alphabet-list li {
		margin:0 10px 13px;
		padding:0;
	}
	/* info-table */
	.info-table {
		font-size:14px;
		line-height:16px;
	}
	.info-table th {
		font-size:13px;
		line-height:12px;
		padding:0 3px;
		height:29px;
	}
	.info-table td { padding:0 5px 3px; }
	.info-table .cell-01 { width:24.36%; }
	.info-table .cell-02 { width:9.87%; }
	.info-table .cell-03 { width:8.19%; }
	.info-table .cell-04 { width:8.19%; }
	.info-table .cell-05 { width:17.85%; }
	.info-table .cell-06 { width:15.54%; }
	.info-table tr th:first-child { padding-left:5px; }
	/* headline */
	.headline { padding:0 0 18px; }
	/* bottom-search */
	.bottom-search {
		width:589px;
		margin-left:-250px;
		padding:13px 20px 11px 19px;
	}
	.bottom-search .caption { padding:0 10px 0 0; }
	.bottom-search .caption span { display:block; }
	.program-search {
		width:265px;
		margin:2px 0 0;
	}
	.bottom-search .btn-top { margin:0 0 0 15px; }
}
/* mobile media */
@media only screen and (max-width: 767px) {
	/* search-box */
	.search-box {
		background:#fff;
		font-size:15px;
		line-height:22px;
		margin:0;
		padding:16px 0 0;
	}
	.search-box .row { display:none; }
	.search-box p { margin:0 0 18px; }
	.search-box .block { background-color:#f0f0f0; }
	.search-box .btn-holder { margin:-4px 0 0; }
	.search-box .btn-info { background:#f0f0f0; }
	.search-box .btn-info:hover { background:#363637; }
	.search-box .btn-info .desktop-txt { display:none; }
	.search-box .btn-info .mobile-txt { display:block; }
	/* alphabet-list */
	.alphabet-list { display:none; }
	/* info-table */
	.table-holder { margin:0 0 5px; }
	.info-table .cell-03,
	.info-table .cell-04,
	.info-table .cell-05,
	.info-table .cell-06,
	.info-table .cell-07,
	.table-holder.top .tableFloatingHeaderOriginal:before { display:none; }
	.tableFloatingHeaderOriginal { position:static !important; }
	.tableFloatingHeader { display:none; }
	.info-table tr th.cell-02 {
		-webkit-border-radius:0 6px 0 0;
		-moz-border-radius:0 6px 0 0;
		border-radius:0 6px 0 0;
	}
	.info-table .last td.cell-02 {
		-webkit-border-radius:0 0 6px 0;
		-moz-border-radius:0 0 6px 0;
		border-radius:0 0 6px 0;
	}
	/* headline */
	.headline { padding:0 0 23px; }
	#content .headline h2 { margin:0 0 15px; }
	/* bottom-search */
	.bottom-search {
		width:auto;
		left:5px;
		right:5px;
		margin:0;
		padding:13px 12px 13px 14px;
	}
	.bottom-search .caption { display:none; }
	.program-search {
		float:none;
		overflow:hidden;
		width:auto;
		background-position:7px 8px;
	}
	.bottom-search .btn-top { margin:-2px 0 0 15px; }
}
</style>					

<h2 class="color-2">Majors, Minors and Programs</h2>
					<div class="search-box">
						<form action="#">
							<p><strong>Finding the right major can be difficult.</strong> Search by keywords or interests to explore which of Messiah’s 80+ academic programs would be a good fit for you.</p>
							<div class="block ie-fix">
								<input class="txt" type="text" value="Search for Programs...">
								<input class="btn-submit ie-fix" type="submit" value="go">
							</div>
							<div class=row>
								<div class="wrap">
									<label for="lbl-01">Sort by:</label>
									<select id="lbl-01" class="sel-02" title="Alpha Order">
										<option>Departments</option>
										<option>Schools</option>
									</select>
								</div>
								<div class="wrap">
									<label for="lbl-02">Show me:</label>
									<select id="lbl-02" class="sel-02" title="All Programs">
										<option>Undergraduate</option>
										<option>Graduate</option>
										<option>Dual Degree</option>
										<option>Teaching Certificate</option>
										<option>Pre-Professional</option>
									</select>
								</div>
							</div>
						</form>
					</div><!-- / search-box -->
					<ul class="alphabet-list">
						<li class="active"><a href="#">a</a></li>
						<li><a href="#">b</a></li>
						<li><a href="#">c</a></li>
						<li><a href="#">d</a></li>
						<li><a href="#">e</a></li>
						<li><a href="#">f</a></li>
						<li><a href="#">g</a></li>
						<li><a href="#">h</a></li>
						<li><a href="#">i</a></li>
						<li><a href="#">j</a></li>
						<li><a href="#">k</a></li>
						<li><a href="#">l</a></li>
						<li><a href="#">m</a></li>
						<li><a href="#">n</a></li>
						<li><a href="#">o</a></li>
						<li><a href="#">p</a></li>
						<li><a href="#">q</a></li>
						<li><a href="#">r</a></li>
						<li><a href="#">s</a></li>
						<li><a href="#">t</a></li>
						<li><a href="#">u</a></li>
						<li><a href="#">v</a></li>
						<li><a href="#">w</a></li>
						<li><a href="#">x</a></li>
						<li><a href="#">y</a></li>
						<li><a href="#">z</a></li>
					</ul><!-- / alphabet-list -->
					<div class="table-holder">
						<table class="info-table">
							<thead>
								<tr>
									<th class="cell-01"><span>Program</span></th>
									<th class="cell-02"><span>Degree</span></th>
									<th class="cell-03"><span>Major</span></th>
									<th class="cell-04"><span>Minor</span></th>
									<th class="cell-05"><span>Concentration<a class="info-link" href="#" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid.">info</a></span></th>
									<th class="cell-06"><span>Pre Professional<a class="info-link" href="#" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid.">info</a></span></th>
									<th class="cell-07"><span>Teaching Certification<a class="info-link" href="#" title="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidid.">info</a></span></th>
								</tr>
							</thead>
							<tr>
								<td class="cell-01"><a href="#">Art (Business)</a></td>
								<td class="cell-02"><strong>MBA</strong></td>
								<td class="cell-03"></td>
								<td class="cell-04"></td>
								<td class="cell-05"><img class="ico" src="http://www.messiah.edu/new/final/majors/images/ico-003.png" alt="image"></td>
								<td class="cell-06"></td>
								<td class="cell-07"><img class="ico" src="http://www.messiah.edu/new/final/majors/images/ico-003.png" alt="image"></td>
							</tr>
							<tr>
								<td class="cell-01">Art and Design</td>
								<td class="cell-02">B.S.</td>
								<td class="cell-03"></td>
								<td class="cell-04"></td>
								<td class="cell-05"><img class="ico" src="images/ico-003.png" alt="image"></td>
								<td class="cell-06"></td>
								<td class="cell-07"></td>
							</tr>
							<tr>
								<td class="cell-01">Art Education</td>
								<td class="cell-02">B.S.</td>
								<td class="cell-03"></td>
								<td class="cell-04"></td>
								<td class="cell-05"><img class="ico" src="images/ico-003.png" alt="image"></td>
								<td class="cell-06"></td>
								<td class="cell-07"><img class="ico" src="images/ico-003.png" alt="image"></td>
							</tr>
							<tr>
								<td class="cell-01">Art History</td>
								<td class="cell-02">B.S.</td>
								<td class="cell-03"></td>
								<td class="cell-04"></td>
								<td class="cell-05"><img class="ico" src="images/ico-003.png" alt="image"></td>
								<td class="cell-06"></td>
								<td class="cell-07"></td>
							</tr>
							<tr>
								<td class="cell-01">Commercial Music</td>
								<td class="cell-02">B.S.</td>
								<td class="cell-03"></td>
								<td class="cell-04"></td>
								<td class="cell-05"></td>
								<td class="cell-06"></td>
								<td class="cell-07"><img class="ico" src="images/ico-003.png" alt="image"></td>
							</tr>
							<tr>
								<td class="cell-01">Dance</td>
								<td class="cell-02">B.S.</td>
								<td class="cell-03"></td>
								<td class="cell-04"></td>
								<td class="cell-05"><img class="ico" src="images/ico-003.png" alt="image"></td>
								<td class="cell-06"></td>
								<td class="cell-07"><img class="ico" src="images/ico-003.png" alt="image"></td>
							</tr>
							<tr>
								<td class="cell-01">Dance</td>
								<td class="cell-02">B.S.</td>
								<td class="cell-03"></td>
								<td class="cell-04"></td>
								<td class="cell-05"><img class="ico" src="images/ico-003.png" alt="image"></td>
								<td class="cell-06"></td>
								<td class="cell-07"><img class="ico" src="images/ico-003.png" alt="image"></td>
							</tr>
							<tr>
								<td class="cell-01">Art (Business)</td>
								<td class="cell-02"><strong>MBA</strong></td>
								<td class="cell-03"></td>
								<td class="cell-04"></td>
								<td class="cell-05"><img class="ico" src="images/ico-003.png" alt="image"></td>
								<td class="cell-06"></td>
								<td class="cell-07"><img class="ico" src="images/ico-003.png" alt="image"></td>
							</tr>
							<tr>
								<td class="cell-01">Art and Design</td>
								<td class="cell-02">B.S.</td>
								<td class="cell-03"></td>
								<td class="cell-04"></td>
								<td class="cell-05"><img class="ico" src="images/ico-003.png" alt="image"></td>
								<td class="cell-06"></td>
								<td class="cell-07"></td>
							</tr>
							<tr>
								<td class="cell-01">Art Education</td>
								<td class="cell-02">B.S.</td>
								<td class="cell-03"></td>
								<td class="cell-04"></td>
								<td class="cell-05"><img class="ico" src="images/ico-003.png" alt="image"></td>
								<td class="cell-06"></td>
								<td class="cell-07"><img class="ico" src="images/ico-003.png" alt="image"></td>
							</tr>
							<tr>
								<td class="cell-01">Art History</td>
								<td class="cell-02">B.S.</td>
								<td class="cell-03"></td>
								<td class="cell-04"></td>
								<td class="cell-05"><img class="ico" src="images/ico-003.png" alt="image"></td>
								<td class="cell-06"></td>
								<td class="cell-07"></td>
							</tr>
							<tr>
								<td class="cell-01">Commercial Music</td>
								<td class="cell-02">B.S.</td>
								<td class="cell-03"></td>
								<td class="cell-04"></td>
								<td class="cell-05"></td>
								<td class="cell-06"></td>
								<td class="cell-07"><img class="ico" src="images/ico-003.png" alt="image"></td>
							</tr>
							<tr>
								<td class="cell-01">Dance</td>
								<td class="cell-02">B.S.</td>
								<td class="cell-03"></td>
								<td class="cell-04"></td>
								<td class="cell-05"><img class="ico" src="images/ico-003.png" alt="image"></td>
								<td class="cell-06"></td>
								<td class="cell-07"><img class="ico" src="images/ico-003.png" alt="image"></td>
							</tr>
							<tr>
								<td class="cell-01">Dance</td>
								<td class="cell-02">B.S.</td>
								<td class="cell-03"></td>
								<td class="cell-04"></td>
								<td class="cell-05"><img class="ico" src="images/ico-003.png" alt="image"></td>
								<td class="cell-06"></td>
								<td class="cell-07"><img class="ico" src="images/ico-003.png" alt="image"></td>
							</tr>
							<tr>
								<td class="cell-01">Art (Business)</td>
								<td class="cell-02"><strong>MBA</strong></td>
								<td class="cell-03"></td>
								<td class="cell-04"></td>
								<td class="cell-05"><img class="ico" src="images/ico-003.png" alt="image"></td>
								<td class="cell-06"></td>
								<td class="cell-07"><img class="ico" src="images/ico-003.png" alt="image"></td>
							</tr>
							<tr>
								<td class="cell-01">Art and Design</td>
								<td class="cell-02">B.S.</td>
								<td class="cell-03"></td>
								<td class="cell-04"></td>
								<td class="cell-05"><img class="ico" src="images/ico-003.png" alt="image"></td>
								<td class="cell-06"></td>
								<td class="cell-07"></td>
							</tr>
							<tr>
								<td class="cell-01">Art Education</td>
								<td class="cell-02">B.S.</td>
								<td class="cell-03"></td>
								<td class="cell-04"></td>
								<td class="cell-05"><img class="ico" src="images/ico-003.png" alt="image"></td>
								<td class="cell-06"></td>
								<td class="cell-07"><img class="ico" src="images/ico-003.png" alt="image"></td>
							</tr>
							<tr>
								<td class="cell-01">Art History</td>
								<td class="cell-02">B.S.</td>
								<td class="cell-03"></td>
								<td class="cell-04"></td>
								<td class="cell-05"><img class="ico" src="images/ico-003.png" alt="image"></td>
								<td class="cell-06"></td>
								<td class="cell-07"></td>
							</tr>
							<tr>
								<td class="cell-01">Commercial Music</td>
								<td class="cell-02">B.S.</td>
								<td class="cell-03"></td>
								<td class="cell-04"></td>
								<td class="cell-05"></td>
								<td class="cell-06"></td>
								<td class="cell-07"><img class="ico" src="images/ico-003.png" alt="image"></td>
							</tr>
							<tr>
								<td class="cell-01">Dance</td>
								<td class="cell-02">B.S.</td>
								<td class="cell-03"></td>
								<td class="cell-04"></td>
								<td class="cell-05"><img class="ico" src="images/ico-003.png" alt="image"></td>
								<td class="cell-06"></td>
								<td class="cell-07"><img class="ico" src="images/ico-003.png" alt="image"></td>
							</tr>
							<tr>
								<td class="cell-01">Dance</td>
								<td class="cell-02">B.S.</td>
								<td class="cell-03"></td>
								<td class="cell-04"></td>
								<td class="cell-05"><img class="ico" src="images/ico-003.png" alt="image"></td>
								<td class="cell-06"></td>
								<td class="cell-07"><img class="ico" src="images/ico-003.png" alt="image"></td>
							</tr>
							<tr>
								<td class="cell-01">Art (Business)</td>
								<td class="cell-02"><strong>MBA</strong></td>
								<td class="cell-03"></td>
								<td class="cell-04"></td>
								<td class="cell-05"><img class="ico" src="images/ico-003.png" alt="image"></td>
								<td class="cell-06"></td>
								<td class="cell-07"><img class="ico" src="images/ico-003.png" alt="image"></td>
							</tr>
							<tr>
								<td class="cell-01">Art and Design</td>
								<td class="cell-02">B.S.</td>
								<td class="cell-03"></td>
								<td class="cell-04"></td>
								<td class="cell-05"><img class="ico" src="images/ico-003.png" alt="image"></td>
								<td class="cell-06"></td>
								<td class="cell-07"></td>
							</tr>
							<tr>
								<td class="cell-01">Art Education</td>
								<td class="cell-02">B.S.</td>
								<td class="cell-03"></td>
								<td class="cell-04"></td>
								<td class="cell-05"><img class="ico" src="images/ico-003.png" alt="image"></td>
								<td class="cell-06"></td>
								<td class="cell-07"><img class="ico" src="images/ico-003.png" alt="image"></td>
							</tr>
							<tr>
								<td class="cell-01">Art History</td>
								<td class="cell-02">B.S.</td>
								<td class="cell-03"></td>
								<td class="cell-04"></td>
								<td class="cell-05"><img class="ico" src="images/ico-003.png" alt="image"></td>
								<td class="cell-06"></td>
								<td class="cell-07"></td>
							</tr>
							<tr>
								<td class="cell-01">Commercial Music</td>
								<td class="cell-02">B.S.</td>
								<td class="cell-03"></td>
								<td class="cell-04"></td>
								<td class="cell-05"></td>
								<td class="cell-06"></td>
								<td class="cell-07"><img class="ico" src="images/ico-003.png" alt="image"></td>
							</tr>
							<tr>
								<td class="cell-01">Dance</td>
								<td class="cell-02">B.S.</td>
								<td class="cell-03"></td>
								<td class="cell-04"></td>
								<td class="cell-05"><img class="ico" src="images/ico-003.png" alt="image"></td>
								<td class="cell-06"></td>
								<td class="cell-07"><img class="ico" src="images/ico-003.png" alt="image"></td>
							</tr>
							<tr>
								<td class="cell-01">Dance</td>
								<td class="cell-02">B.S.</td>
								<td class="cell-03"></td>
								<td class="cell-04"></td>
								<td class="cell-05"><img class="ico" src="images/ico-003.png" alt="image"></td>
								<td class="cell-06"></td>
								<td class="cell-07"><img class="ico" src="images/ico-003.png" alt="image"></td>
							</tr>
							<tr>
								<td class="cell-01">Art (Business)</td>
								<td class="cell-02"><strong>MBA</strong></td>
								<td class="cell-03"></td>
								<td class="cell-04"></td>
								<td class="cell-05"><img class="ico" src="images/ico-003.png" alt="image"></td>
								<td class="cell-06"></td>
								<td class="cell-07"><img class="ico" src="images/ico-003.png" alt="image"></td>
							</tr>
							<tr>
								<td class="cell-01">Art and Design</td>
								<td class="cell-02">B.S.</td>
								<td class="cell-03"></td>
								<td class="cell-04"></td>
								<td class="cell-05"><img class="ico" src="images/ico-003.png" alt="image"></td>
								<td class="cell-06"></td>
								<td class="cell-07"></td>
							</tr>
							<tr>
								<td class="cell-01">Art Education</td>
								<td class="cell-02">B.S.</td>
								<td class="cell-03"></td>
								<td class="cell-04"></td>
								<td class="cell-05"><img class="ico" src="images/ico-003.png" alt="image"></td>
								<td class="cell-06"></td>
								<td class="cell-07"><img class="ico" src="images/ico-003.png" alt="image"></td>
							</tr>
							<tr>
								<td class="cell-01">Art History</td>
								<td class="cell-02">B.S.</td>
								<td class="cell-03"></td>
								<td class="cell-04"></td>
								<td class="cell-05"><img class="ico" src="images/ico-003.png" alt="image"></td>
								<td class="cell-06"></td>
								<td class="cell-07"></td>
							</tr>
							<tr>
								<td class="cell-01">Commercial Music</td>
								<td class="cell-02">B.S.</td>
								<td class="cell-03"></td>
								<td class="cell-04"></td>
								<td class="cell-05"></td>
								<td class="cell-06"></td>
								<td class="cell-07"><img class="ico" src="images/ico-003.png" alt="image"></td>
							</tr>
							<tr>
								<td class="cell-01">Dance</td>
								<td class="cell-02">B.S.</td>
								<td class="cell-03"></td>
								<td class="cell-04"></td>
								<td class="cell-05"><img class="ico" src="images/ico-003.png" alt="image"></td>
								<td class="cell-06"></td>
								<td class="cell-07"><img class="ico" src="images/ico-003.png" alt="image"></td>
							</tr>
							<tr>
								<td class="cell-01">Dance</td>
								<td class="cell-02">B.S.</td>
								<td class="cell-03"></td>
								<td class="cell-04"></td>
								<td class="cell-05"><img class="ico" src="images/ico-003.png" alt="image"></td>
								<td class="cell-06"></td>
								<td class="cell-07"><img class="ico" src="images/ico-003.png" alt="image"></td>
							</tr>
						</table><!-- / info-table -->
					</div><!-- / table-holder -->