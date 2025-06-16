<?php
	/* 
		 ____  __  __  ___  ____  ____  ___  _   _ 
		(  _ \(  )(  )/ __)( ___)(_  _)/ __)( )_( )
		 ) _ < )(__)(( (_-. )__)  _)(_ \__ \ ) _ ( 
		(____/(______)\___/(__)  (____)(___/(_) (_) www.bugfish.eu
				_                                         _ 
			    | |                          _            (_)
			  _ | | ___ _   _ ____ ____ ___ | |_      ____ _ 
			 / || |/ _ \ | | / _  ) ___) _ \|  _)    / ___) |
			( (_| | |_| \ V ( (/ ( (__| |_| | |__   ( (___| |
			 \____|\___/ \_/ \____)____)___/ \___)   \____)_|
		Copyright (C) 2024 Jan Maurice Dahlmanns [Bugfish]

		This program is free software: you can redistribute it and/or modify
		it under the terms of the GNU General Public License as published by
		the Free Software Foundation, either version 3 of the License, or
		(at your option) any later version.

		This program is distributed in the hope that it will be useful,
		but WITHOUT ANY WARRANTY; without even the implied warranty of
		MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
		GNU General Public License for more details.

		You should have received a copy of the GNU General Public License
		along with this program.  If not, see <https://www.gnu.org/licenses/>.
	*/
	header('Content-Type: text/css');			
?>
body,html{margin:0;padding:0}#footer,#nav,.content_box,.internal_popup,.internal_popup_inner,.login_box{background:#242424;}#footer,#mrdns_error,#nav,.content_box,.internal_popup{text-align:center;z-index:800 !important;}#mrdns_error,#x_eventBox_error{background:red;color:#fff}#footer,#mrdns_error,#nac_active,#x_eventBox_error,a:hover,html{color:#fff}#mrdns_error,#mrdns_login{padding:25px;max-width:500px}@font-face{font-family:btmfont;src:url(./font_default.ttf)}html{background: #121212;font-family:btmfont}a{color:yellow;text-decoration:none}.content_box{width:auto;max-width:800px;margin:auto auto 15px;padding:15px;border-radius:8px;border:2px solid #ccc}#contentwrapper,.internal_popup{padding:0;height:100vh;top:0;left:0;margin:0;width:100vw;position:fixed}.content_box fieldset,.login_box{border-radius:8px }.content_box:first-of-type{margin-top:100px}#contentwrapper{background:rgba(0,0,0,.5);z-index:-50!important}.internal_popup_title{font-size:20px;text-transform:uppercase}.internal_popup_inner{max-width:800px;width:95vw;margin:5vh auto auto;padding:15px;border-radius:8px;max-height:70vh;overflow-y:scroll;z-index:900 !important;}.login_box{max-width:800px;margin:auto auto 15px;padding:15px;border:2px solid #ccc}#nav{position:fixed;top:0;left:0;width:100vw;padding-top:10px;padding-bottom:10px}#nav_active{color:yellow}#footer{position:fixed;bottom:0;left:0;margin:0;padding:10px 0;width:100vw;font-size:16px}#content{z-index:250!important;padding-bottom: 50px;margin-top: 100px; margin-left: 10px; margin-right: 10px;}.x_eventBox{font-weight: bold;padding: 15px;position:fixed;right:15px;top:15px;padding:15px;border-radius:8px;z-index:600 !important;}#x_eventBox_ok{background:#0f0;color:#000}.x_eventBoxButton{background:0 0;font-weight:700;color:#000;border:none;pointer:cursor}input[type=number],input[type=password],input[type=text],select{width:100%;border:none;font-size:22px;background:rgba(255,255,255,.1);text-align:center;height:35px;border-radius:5px;padding-left:0;padding-right:0;margin-left:0;margin-right:0;color:#fff;margin-bottom:15px}input[type=submit]{width:100%;background:#ccc;border-radius:5px;border:none;color:#555;padding:5px;margin-bottom:15px;font-weight:700}input[type=submit]:hover{background:#555;color:#ccc}input[type=password]:hover,input[type=text]:hover{background:rgba(255,255,255,.2)}#mrdns_login{margin:auto;width:100%;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}#mrdns_nav a{padding-left:5px;padding-right:5px}#mrdns_error{margin:15px auto auto;width:100 %;border-radius:15px}#mrdns_content{width:100%;margin:auto;padding:0;max-width:700px;margin-top:75px}tr:hover{background:#323232}#tracker_listitem{float:left}fieldset a{background:#aaa;padding:3px;border:1px solid #ccc;color:#000}fieldset a:hover{background:#555}.internal_popup_submit{float:left;width:100%}.internal_popup_submit a{padding:0;font-size:14px;border-radius:8px;font-family:btmfont;float:left;background:red;width:100%;color: white !important;}.internal_popup_submit a:hover{color:red;background:#fff}option{background:rgba(0,0,0,0.8);}.small_box{max-width: 300px;}.vcenter{  position: fixed; top: 50%; left: 50%; margin-top: 0px !important; transform: translate(-50%, -50%);}#nav a{  font-weight: bold; margin: 2px; padding: 3px; padding-top: 5px; padding-bottom: 5px;margin-top: 5px; }.x_eventBox_inner{padding: 15px;}.label_box{ float:left; border-radius: 10px; font-size:14px; background: #161616; padding: 5px;margin-right: 10px; margin-bottom: 10px; padding: 2px; padding-left: 10px; padding-right: 10px; } h2, h3 { padding: 5px 5px 5px 5px; margin 0px 0px 0px 0px; font-size: 18px;}#nav a {color: lightgrey;}#nav_active { color: yellow !important;} a:hover { color: white !important;}.sysbutton { word-break: keep-all;white-space: nowrap;margin-bottom: 5px !important; font-weight: bold; font-size: 14px; text-align: center !important; background: yellow; color: black; border-radius: 10px; padding: 1px; padding-left: 10px; padding-right: 10px; } .sysbutton:hover {background: white; color: black !important; }.internal_popup {background: rgba(0,0,0,0.95)} .internal_popup_submit_sec{float:left;width:100%}.internal_popup_submit_sec a{padding:0;font-size:14px;border-radius:8px;font-family:btmfont;float:left;background:red;width:100%;color: white !important;}.internal_popup_submit_sec a:hover{color:red;background:#fff}#footer{background:#161616;z-index:500 !important;}#nav{background: #161616; z-index:500 !important;}.x_eventBoxButton {cursor:pointer !Important; border: 2px solid #242424; padding: 2px; background: white;margin: 2px;}.x_eventBoxButton:hover{background: black; color: white;}

	/* ################################################################## */
	/* Style for x_library cookiebanner function
	/* ################################################################## */
	.x_cookieBanner { -webkit-transform: translate3d(0, 0, 0); transform: translate3d(0, 0, 0); -webkit-box-sizing: border-box; -moz-box-sizing: border-box; 
		box-sizing: border-box; background-color: rgba(255, 20, 20, 0.95); color: #ccc; line-height: 26px; 
		font-family: Arial; display: block; position: fixed;font-size: 16px; bottom: 10vh; right: 0; color: #ffffff; 
		width: 200px; border-top-left-radius: 10px; border-bottom-left-radius: 10px; padding: 20px;
		z-index: 600; }
	.x_cookieBanner a { color: #000000; text-decoration: none; font-weight: bold; }
	.x_cookieBanner a:hover { color: #ffffff; }	
	.x_cookieBanner input.x_cookieBanner_close { background-color: #1b1b1b; color: #fff; display: inline-block; border: none !important; width: 100% !important; border-color: #fff !important; 
		border-radius: 10px !important; cursor: pointer; height: 40px !important; font-size: 13px !important; font-family: Arial !important; font-weight: 700 !important; padding-top: 5px; padding-bottom: 5px; }
	.x_cookieBanner input.x_cookieBanner_close:hover { background-color: #121212; }
	