/* An enhanced style for the forum, Web 2.0 - like*/

/* copied from basic studip.css, for compatibility reasons */
td.infobox {
    background-color: #dee2e8;
    font-family:    Arial, Helvetica, sans-serif;
    font-size:      11px;
    font-weight:    normal;
    line-height:    16px;
    text-align:     left;
}

td.infoboxrahmen {
    border-style: solid;
    border-color: #CCCCCC;
    border-width: 1px;
}

/* defaults */
div.tgforum {
}

form {
    display: inline;
}

img {
    border: none;
    max-width: 600px;
}

img:onClick {
    max-width: 100%;
}

/* highlighted search-strings */
span.highlight {
    background-color: yellow;
        border: 1px solid #FF9999;
        border-radius: 3px;
}

/* posting lists*/
.forum_header {
    font-size: 9pt;
    background-color: #899AB9;
    color: #FFFFFF;
    margin: 0pt;
    padding: 0pt;
}

.listheader {
    background-color: #D9E1F2;
    padding: 0pt;
}

.listheader strong {
    margin: 0pt 5px 0pt 5px;
}

.heading {
    display: block;
    margin: 1px 4px 4px 6px;
    text-transform: uppercase;
}

.areaentry {
    border-top: 1px solid #FFFFFF;
    border-bottom: 1px solid #000000;
    background-color: #DEE2E8;
}

.areaentry2 {
    border-top: 1px solid #FFFFFF;
    border-bottom: 1px solid #000000;
    border-left: 1px solid #FFFFFF;
    margin: 0pt;
    padding: 0pt 5px;
    background-color: #DEE2E8;
}

.areaborder {
    background-color: #899AB9;
    width: 0.5%;
    padding: 0pt;
    margin: 0pt;
}

.area_title {
    padding: 0 5px;
    font-weight: bold;
    text-transform: uppercase;
}

.area_input, .add_area_form {
    padding: 0 5px;
}

.add_area {
    font-weight: bold;
    font-size: 16pt;
    text-align: right;
    padding-right: 12px;
}

.add_area:hover {
    color: white;
    cursor: pointer;
}

.icon {
    padding: 8px 0 0 0;
    margin: 0pt;
    width: 20px;
    height: 50px;
}

.icon_thread {
    padding: 0pt;
    margin: 0pt;
    width: 40px;
    height: 30px;
}

span.areaname {
    font-weight: bold;
    font-size: 12pt;
}

/* thread specififc stuff */
span.threadauthor {
    font-size: 12pt;
    float: left;
    width: 70%;
}

span.pagechooser {
    float: right;
    min-width: 15%;
}

span.pagechooser_thread {
    float: right;
    width: 160px;
    padding-bottom: 2px;
    white-space: nowrap;
}

/* page-chooser */
span.page {
    border: 1px solid #AAAAAA;
    background-color: #DDDDDD;
    padding: 1px 3px 0px 3px;
    font-weight: bold;
}

span.selected {
    background-color: #4d6b9d;
    color: #FFFFFF;
}

/* style definitions for one posting */
.bg1 {
    background-color: #ECF3F7;
}

.bg2 {
    background-color: #DEE2E8;
}

.posting {
    height: 100%;

    margin: 0pt;
    padding: 0pt;
}

.postbody {
    padding: 0pt 5px;
    margin: 0pt;
    width: 78%;
    float: left;
    text-align: left;
    font-size: 12pt;
}

.buttons {
    clear: both;
    width: 100%;
    text-align: center;
    padding-top: 5px;
}

img.button, input[type=image] {
    vertical-align: middle;
}

div.title {
    text-align: left;
    font-weight: bold;
    font-size: 12pt;
    width: 80%;
    float: left;
}

/* space for the icons */
div.postbody span.icons {
    float: right;
    min-width: 3%;
}

p.author {
    font-size: 12pt;
    margin: 2px 0px 8px 0px;
}

div.postbody p.content {
    font-size: 12pt;
    overflow: hidden;
    clear: both;
}

div.postbody p.content:hover {
    overflow: visible;
}

.postprofile {
    font-size: 12pt;
    border-left: 1px solid #FFFFFF;
    display: inline;
    float: right;
    min-height: 80px;
    width: 19%;
    margin: 0pt;
    padding: 0pt 0pt 0pt 8px;
}

.postprofile dd, .postprofile dt {
    padding: 0pt;
    margin: 0pt;
}

span.buttons {
    display: block;
    clear: both;
    text-align: center;
    width: 78%;
}

/* Web 2.0 borders with rounded edges */
span.corners-top, span.corners-bottom, span.corners-top span, span.corners-bottom span, span.corners-top-right {
    background-repeat: no-repeat;
    display: block;
    height: 5px;

    margin: 0pt;
    padding: 0pt;
}

span.corners-top {
    background-image: url('<?= $picturepath ?>/corners_left.png');
    background-position: 0pt 0pt;
}

span.corners-top-right, span.corners-top span {
    background-image: url('<?= $picturepath ?>/corners_right.png');
    background-position: 100% 0pt;
}

span.corners-bottom {
    background-image: url('<?= $picturepath ?>/corners_left.png');
    background-position: 0pt -7px;

    clear:both;
}

span.corners-bottom span {
    background-image: url('<?= $picturepath ?>/corners_right.png');
    background-position: 100% -7px;
}

span.no-corner {
    display: block;
    height: 5px;
}

/* Administration-Area */
.cat {
    background-color: #CFCFEF;
    min-height: 60px;
    padding: 3px;
    border-radius: 5px;
    position: relative;
    
    list-style: none;
}

.category_title {
    font-weight: bold;
}

div.droparea {
    background-color: #AFAFEF;
}

.pointer {
    cursor: pointer;
}

.areas {
    border: 1px solid #CFCFEF;
    background-color: #CFCFEF;
    margin-bottom: 5px;
    width: 95%;
    padding: 3px;
    border-radius: 5px;
}

div.bgtext {
    display: block;
    color: #AAAAAA;
    position: absolute;
    top: 2px;
    right: 10px;
    width: 200px;
}

textarea {
    width: 100%;
    height: 20em;
}

ul.cat_list {
    font-size: 12pt;
    padding: 0;
    margin: 0;
}

ul.cat_list li {
    list-style: none;
    font-weight: bold;
}

select.cat_list {
    width: 400px;
}

li.areas {
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    background-color: #E1EBF2; 
}

span.title {
    display: block;
    font-size: 12pt;
    font-weight: bold;
    border-bottom: 1px solid black;
    width: 100%;
}

li.cat {
    margin-bottom: 5px;
}

li.ui-sortable-helper {
    opacity: 0.5;
}

#question {
    position: fixed;
    top: 40%;
    width: 100%;
}

.movable {
    cursor: move;
}

/*
.movable:hover {
   opacity: 0.9;
}
*/

td.placeholder {
    background-color: red;
    height: 50px;
}

.action-icons > img {
    cursor: pointer;
}