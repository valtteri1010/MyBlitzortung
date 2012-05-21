<?php

/*
    MyBlitzortung - a tool for participants of blitzortung.org
	to display lightning data on their web sites.

    Copyright (C) 2011  Tobias Volgnandt

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/


/*******************************************************************/
/* IMPORTANT: DO NOT EDIT THIS FILE!                               */
/* Use config.php for individual setting!                          */
/* This file is included BEFORE config.php !                       */
/*******************************************************************/


if (!defined('BO_VER'))
	exit('No BO_VER');


/*******************************************************************/
/***  Some notes:
/*
/*    You can use these templates to easyily add pre defined maps 
/*    and settings.
/*
/*    ****** Examples (config.php!!!): *******
/*    
/*      1. Add predefined map of bavaria as map id 123
/*
/*         $_BO['mapimg'][123] = $_BO['tpl_imgmap']['germany_bavaria'];
/*         
/*         Hint: You can choose the map-id individual. You should 
/*         avoid smaller values, as they are predefined for the 
/*         standard maps (0 = Europe, 1 = Germany small...).
/*
/*      2. Add predefined overlay
/*
/*         $_BO['mapovl'][100] = $_BO['tpl_overlay']['meteox_radar'];
/*
/*      3. Add your own overlay
/*
/*          $_BO['mapovl'][101]['img'] = '/grafiken/webcam_view.png';
/*          $_BO['mapovl'][101]['coord'] = array(49.452, 10.8985, 49.3759, 10.77);
/*          $_BO['mapovl'][101]['default_show'] = false;
/*          $_BO['mapovl'][101]['sel_name'] = 'View of my webcam';
/*          $_BO['mapovl'][101]['only_loggedin'] = false;
/*          $_BO['mapovl'][101]['to_mercator'] = false;
/*          $_BO['mapovl'][101]['opacity'] = 100;
/*
/*      4. Disable the internally defined europe map (mapid=0)
/*
/*          $_BO['mapimg'][0] = array();
/*
/*
/*******************************************************************/

 
 
 
 
$_BO['mapcfg'] = array();
$_BO['mapovl'] = array();
$_BO['mapimg'] = array();
$_BO['density'] = array();



/**************************************/
/* Some predefined colors             */
/**************************************/

$_BO['tpl_color']['standard'][] = array(255, 255, 0);
$_BO['tpl_color']['standard'][] = array(255, 200, 0);
$_BO['tpl_color']['standard'][] = array(255, 150, 0);
$_BO['tpl_color']['standard'][] = array(255, 100, 0);
$_BO['tpl_color']['standard'][] = array(255,   0, 0);
$_BO['tpl_color']['standard'][] = array(205,   0, 0);
$_BO['tpl_color']['standard'][] = array(150,   0, 120);

$_BO['tpl_density_colors'][] = array(  0,   0, 255, 110);
$_BO['tpl_density_colors'][] = array(50,  100, 255,  40);
$_BO['tpl_density_colors'][] = array(50,  150, 150,  15);
$_BO['tpl_density_colors'][] = array(100, 200,   0,  15);
$_BO['tpl_density_colors'][] = array(125, 125,   0,  15);
$_BO['tpl_density_colors'][] = array(250,   0,   0,  15);
$_BO['tpl_density_colors'][] = array(255,   0, 255,  15);
$_BO['tpl_density_colors'][] = array(255, 100, 255,  15);


/**************************************/
/* Some predefined points             */
/**************************************/

//font-Array: fontsize, bold, style, xpos, ypos
//point-Array: type,size,fillcolor,borderwidth,bordercolor

$_BO['points']['whitered1']['font']          = array(7, 1, array('fff6',1,'000a'), 6, -11); 
$_BO['points']['whitered1']['point']         = array(3, 2, 'f008', 1, 'fff8'); 

$_BO['points']['whitered2']['font']          = array(7, 1, array('fffc',0,'000c'), 5, -9); 
$_BO['points']['whitered2']['point']         = array(3, 2, 'f008', 1, 'fff8'); 

$_BO['points']['stations_active']['point']   = array(10, 5, '0f4', 1, '0f4e'); 
$_BO['points']['stations_inactive']['point'] = array(10, 5, 'c64', 1, 'c64e'); 
$_BO['points']['stations_offline']['point']  = array(10, 5, 'c04', 1, 'c04e'); 
$_BO['points']['stations_nogps']['point']    = array(10, 5, '04f', 1, '04fe'); 

$_BO['points']['stations_dots_active']['point']   = array(1, 1, '0f4', 0, '0f4e'); 
$_BO['points']['stations_dots_inactive']['point'] = array(1, 1, 'f94', 0, 'c64e'); 
$_BO['points']['stations_dots_offline']['point']  = array(1, 1, 'f00', 0, 'c04e'); 
$_BO['points']['stations_dots_nogps']['point']    = array(1, 1, '77f', 0, '04fe'); 


$_BO['points']['stations_strikedetails']['point']  = array(2, 2, 'c04', 0, 'c04e');
$_BO['points']['stations_strikedetails_calc']['point']  = array(1, 5, 'fc4');


/**************************************/
/* Calculation settings for density   */
/**************************************/

//Europe
$_BO['tpl_density']['europe']['name'] 	= 'Europe';
$_BO['tpl_density']['europe']['coord'] 	= array(72, 52, 20, -22); //North, East, South, West (Degrees)
$_BO['tpl_density']['europe']['length']	= 10; // minimum width (W<->E) AND height (N<->S) of the box (kilometers)
$_BO['tpl_density']['europe']['bps'] 	= 2; // bytes per area 


//Germany
$_BO['tpl_density']['germany']['name'] 		= 'Germany';
$_BO['tpl_density']['germany']['coord'] 	= array(56, 16, 46, 5); //North, East, South, West (Degrees)
$_BO['tpl_density']['germany']['length']	= 2; // minimum width (W<->E) AND height (N<->S) of the box (kilometers)
$_BO['tpl_density']['germany']['bps'] 		= 2; // bytes per area 





/**************************************/
/* Some default settings              */
/**************************************/


//defaults
$_BO['tpl_imgmap_default']['point_style'] = array(2, 4, 'f008', 0); //type,size,fillcolor,borderwidth,bordercolor
$_BO['tpl_imgmap_default']['top_font'] = array(9, true, array('fff1', 1, '000a'));
$_BO['tpl_imgmap_default']['top_style'] = array(16, 2, '9999ff66', 1, 'ccf8');
$_BO['tpl_imgmap_default']['bottom_font'] = array(8, false, array('ffffff', 1, '00000099'));
$_BO['tpl_imgmap_default']['bottom_style'] = array(0, 1, '9999ff66', 1, 'ccf8');
$_BO['tpl_imgmap_default']['legend'] = array(5, 80, 40, 4, 4, 1);
$_BO['tpl_imgmap_default']['legend_font'] = array(7, true, array('3330', 0, 'aaa0'),0,2);

$_BO['tpl_imgmap_default']['menu'] = true;
$_BO['tpl_imgmap_default']['archive'] = true;
$_BO['tpl_imgmap_default']['trange'] = array(2); //hours!
$_BO['tpl_imgmap_default']['upd_intv'] = array(1); //minutes
$_BO['tpl_imgmap_default']['textcolor'] = array(255,255,255);
$_BO['tpl_imgmap_default']['col'] = $_BO['tpl_color']['standard'];
$_BO['tpl_imgmap_default']['col_smooth'] = 24;
$_BO['tpl_imgmap_default']['density'] = true;
$_BO['tpl_imgmap_default']['density_blocksize'] = 4;
$_BO['tpl_imgmap_default']['density_colors'] = $_BO['tpl_density_colors'];
$_BO['tpl_imgmap_default']['density_darken'] = array(80, 230);


//an animation template
$_BO['tpl_gif_animation_mini']['minutes'] = 60 * 3;
$_BO['tpl_gif_animation_mini']['count'] = 12;
$_BO['tpl_gif_animation_mini']['range'] = 120;
$_BO['tpl_gif_animation_mini']['delay'] = 40;
$_BO['tpl_gif_animation_mini']['delay_end'] = 120;
$_BO['tpl_gif_animation_mini']['legend'] = false;


//stations for the statistics -> network page
$_BO['tpl_imgmap_stations_mini']['menu'] = false;
$_BO['tpl_imgmap_stations_mini']['textcolor'] = array(255,255,255);
$_BO['tpl_imgmap_stations_mini']['textsize'] = 1;
$_BO['tpl_imgmap_stations_mini']['stations']['A'] = $_BO['points']['stations_dots_active'];
$_BO['tpl_imgmap_stations_mini']['stations']['-'] = $_BO['points']['stations_dots_inactive'];
$_BO['tpl_imgmap_stations_mini']['stations']['O'] = $_BO['points']['stations_dots_offline'];
$_BO['tpl_imgmap_stations_mini']['stations']['V'] = $_BO['points']['stations_dots_nogps'];



/**************************************/
/* Image Maps (PNG)                   */
/**************************************/



/* ============================= EUROPE ============================= */


//MapTool URL: http://www.blitzortung.org/Webpages/index.php?lang=de&page=3&subpage_3=4&update=1&map_generator_north=71.3&map_generator_west=-22&map_generator_east=52&map_generator_south=24.3&map_generator_min_area=50&map_generator_shorelines=1%2F0.1p%2F64%2F64%2F64+2%2F0.01p%2F80%2F80%2F80+3%2F0.01p%2F80%2F80%2F80+4%2F0.01p%2F80%2F80%2F80&map_generator_boundaries=a%2F0.1p%2F64%2F64%2F64&map_generator_rivers=-&map_generator_lakes=-&map_generator_dry_area=-&map_generator_wet_area=0%2F128%2F200&map_generator_color_map=-2000+50+150++51+100+++50+150++50%0D%0A100+++60+150++61+200+++60+150++60%0D%0A200+++80+160++80+500+++80+160++80%0D%0A500+++90+150++80+1000++90+150++80%0D%0A1000+100+150++80+1500+100+150++80%0D%0A1500+105+140++60+2000+105+140++60%0D%0A2000+110+135++40+2500+110+135++40%0D%0A2500+110+130++30+3000+110+130++30%0D%0A3000+115+125++20+6000+115+125++20%0D%0A&map_generator_azimuth=315&map_generator_normalization=e0.01
$_BO['tpl_imgmap']['europe'] = $_BO['tpl_imgmap_default'];
$_BO['tpl_imgmap']['europe']['name'] = 'Europe';
$_BO['tpl_imgmap']['europe']['file'] = 'maps_europe/map_europe.png';
$_BO['tpl_imgmap']['europe']['borders'] = array('maps_europe/map_europe_borders.png', 60);
$_BO['tpl_imgmap']['europe']['coord'] = array(71.3, 52, 24.3, -22); //North, East, South, West (Degrees)
$_BO['tpl_imgmap']['europe']['point_style'] = array(2, 2, 'f008', 0);


//Europe: Western / Central
//MapTool URL: http://www.blitzortung.org/Webpages/index.php?lang=de&page=3&subpage_3=4&update=1&map_generator_north=57&map_generator_west=-5&map_generator_east=18&map_generator_south=42.2&map_generator_min_area=20&map_generator_shorelines=1%2F0.1p%2F64%2F64%2F64+2%2F0.1p%2F80%2F80%2F80+3%2F0.1p%2F80%2F80%2F80+4%2F0.1p%2F80%2F80%2F80&map_generator_boundaries=a%2F0.1p%2F64%2F64%2F64&map_generator_rivers=-&map_generator_lakes=-&map_generator_dry_area=-&map_generator_wet_area=0%2F128%2F200&map_generator_color_map=-2000+50+150++51+100+++50+150++50%0D%0A100+++60+150++61+200+++60+150++60%0D%0A200+++80+160++80+500+++80+160++80%0D%0A500++110+155++80+1000+110+155++80%0D%0A1000+150+150++80+1500+150+150++80%0D%0A1500+160+140++60+2000+160+140++60%0D%0A2000+170+135++40+2500+170+135++40%0D%0A2500+180+130++30+3000+180+130++30%0D%0A3000+185+125++20+6000+185+125++20%0D%0A&map_generator_azimuth=315&map_generator_normalization=e0.1
$_BO['tpl_imgmap']['europe_west_central'] = $_BO['tpl_imgmap_default'];
$_BO['tpl_imgmap']['europe_west_central']['name'] = 'Western Europe';
$_BO['tpl_imgmap']['europe_west_central']['file'] = 'maps_europe/map_europe_west_central.png';
$_BO['tpl_imgmap']['europe_west_central']['borders'] = array('maps_europe/map_europe_west_central_borders.png', 60);
$_BO['tpl_imgmap']['europe_west_central']['coord'] = array(57, 18, 42.2, -5); //North, East, South, West (Degrees)
$_BO['tpl_imgmap']['europe_west_central']['density_blocksize'] = 5;
$_BO['tpl_imgmap']['europe_west_central']['cities'][1] = $_BO['points']['whitered1'];
$_BO['tpl_imgmap']['europe_west_central']['cities'][5] = $_BO['points']['whitered1'];
$_BO['tpl_imgmap']['europe_west_central']['cities'][6] = $_BO['points']['whitered1'];


/* ============================= Germany ============================= */

//Germany (Landkreise) no exact merator projection!
$_BO['tpl_imgmap']['germany_lkr'] = $_BO['tpl_imgmap_default'];
$_BO['tpl_imgmap']['germany_lkr']['name'] = 'Germany';
$_BO['tpl_imgmap']['germany_lkr']['footer'] = 'Kartenmaterial: <a href="http://de.wikipedia.org/w/index.php?title=Datei:Landkreise,_Kreise_und_kreisfreie_St%C3%A4dte_in_Deutschland.svg" target="_blank">Wikipedia</a> &bull; Achtung: Positionen sind nicht exakt (nur bei dieser Karte!)';
$_BO['tpl_imgmap']['germany_lkr']['file'] = 'maps_europe/map_germany_lkr.png';
$_BO['tpl_imgmap']['germany_lkr']['borders'] = array('maps_europe/map_germany_lkr_borders.png', 60);
$_BO['tpl_imgmap']['germany_lkr']['coord'] = array(55.065, 15.11, 47.380, 5.85); //North, East, South, West (Degrees)
$_BO['tpl_imgmap']['germany_lkr']['show_station'] = array(5, 125,120,215, 9,true, 2,-12);
$_BO['tpl_imgmap']['germany_lkr']['density_darken'] = array(10, 0);
$_BO['tpl_imgmap']['germany_lkr']['density_blocksize'] = 5;
//$_BO['tpl_imgmap']['germany_lkr']['stations']['A'] = $_BO['points']['stations_active'];
//$_BO['tpl_imgmap']['germany_lkr']['stations']['-'] = $_BO['points']['stations_inactive'];
//$_BO['tpl_imgmap']['germany_lkr']['stations']['O'] = $_BO['points']['stations_offline'];
//$_BO['tpl_imgmap']['germany_lkr']['stations']['V'] = $_BO['points']['stations_nogps'];


//Germany (Landkreise) Geodatenzentrum
//see http://www.geodatenzentrum.de/geodaten/gdz_rahmen.gdz_div?gdz_spr=deu&gdz_akt_zeile=5&gdz_anz_zeile=4&gdz_user_id=0
$_BO['tpl_imgmap']['germany_lkr_gdz'] = $_BO['tpl_imgmap']['germany_lkr'];
$_BO['tpl_imgmap']['germany_lkr_gdz']['file'] = 'maps_europe/map_germany_lkr_gdz.png';
$_BO['tpl_imgmap']['germany_lkr_gdz']['borders'] = array('maps_europe/map_germany_lkr_gdz_borders.png', 60);
$_BO['tpl_imgmap']['germany_lkr_gdz']['coord'] = array(55.22, 15.64, 47.05, 5.21); //North, East, South, West (Degrees)
$_BO['tpl_imgmap']['germany_lkr_gdz']['footer'] = '© Bundesamt für Kartographie und Geodäsie, Frankfurt am Main, 2011<br>
	Vervielfältigung, Verbreitung und öffentliche Zugänglichmachung, auch auszugsweise, mit Quellenangabe gestattet.';

	
//Germany (Bavaria) * don't know wether mercator, but border overlap really good in google earth
$_BO['tpl_imgmap']['germany_bavaria'] = $_BO['tpl_imgmap_default'];
$_BO['tpl_imgmap']['germany_bavaria']['name'] = 'Bavaria';
$_BO['tpl_imgmap']['germany_bavaria']['footer'] = 'Kartenmaterial: <a href="http://commons.wikimedia.org/wiki/File:Bavaria_relief_location_map.jpg?uselang=de">Wikimedia Commons</a> &bull; GNU-Lizenz für freie Dokumentation ';
$_BO['tpl_imgmap']['germany_bavaria']['file'] = 'maps_europe/map_germany_bavaria.png';
$_BO['tpl_imgmap']['germany_bavaria']['borders'] = array('maps_europe/map_germany_bavaria_borders.png', 50);
$_BO['tpl_imgmap']['germany_bavaria']['coord'] = array(50.62, 14.059753, 47.25, 8.897552); //North, East, South, West (Degrees)
$_BO['tpl_imgmap']['germany_bavaria']['show_station'] = array(5, 125,120,215, 9,true, 2,-12);
$_BO['tpl_imgmap']['germany_bavaria']['density_darken'] = array(50,230);
$_BO['tpl_imgmap']['germany_bavaria']['cities'][1] = $_BO['points']['whitered1'];
$_BO['tpl_imgmap']['germany_bavaria']['cities'][2] = $_BO['points']['whitered1'];
$_BO['tpl_imgmap']['germany_bavaria']['cities'][5] = $_BO['points']['whitered1'];
$_BO['tpl_imgmap']['germany_bavaria']['cities'][6] = $_BO['points']['whitered1'];

//Germany Bavaria dark
$_BO['tpl_imgmap']['germany_bavaria_dark'] = $_BO['tpl_imgmap']['germany_bavaria'];
$_BO['tpl_imgmap']['germany_bavaria_dark']['file'] = 'maps_europe/map_germany_bavaria_dark.png';
$_BO['tpl_imgmap']['germany_bavaria_dark']['borders'] = array('maps_europe/map_germany_bavaria_dark_borders.png', 50);
$_BO['tpl_imgmap']['germany_bavaria_dark']['show_station'] = array(5, 255,100,100,8,true, 2,3);
$_BO['tpl_imgmap']['germany_bavaria_dark']['density_darken'] = array(50,0);



//Germany NRW: not exact, maximum deviation about 2km
$_BO['tpl_imgmap']['germany_nrw'] = $_BO['tpl_imgmap_default'];
$_BO['tpl_imgmap']['germany_nrw']['name'] = 'NRW';
$_BO['tpl_imgmap']['germany_nrw']['footer'] = 'Kartenmaterial: <a href="http://commons.wikimedia.org/wiki/File:North_Rhine-Westphalia_location_map_03.svg" target="_blank">Wikipedia</a>';
$_BO['tpl_imgmap']['germany_nrw']['file'] = 'maps_europe/map_germany_nrw_color.png';
$_BO['tpl_imgmap']['germany_nrw']['coord'] = array(52.552, 9.481 , 50.295 , 5.84); //North, East, South, West (Degrees)
$_BO['tpl_imgmap']['germany_nrw']['show_station'] = array(5, 125,120,215, 9,true, 2,-12);
$_BO['tpl_imgmap']['germany_nrw']['density_blocksize'] = 6;
$_BO['tpl_imgmap']['germany_nrw']['density_darken'] = array(40, 0);
$_BO['tpl_imgmap']['germany_nrw']['cities'][1] = $_BO['points']['whitered1'];
$_BO['tpl_imgmap']['germany_nrw']['cities'][2] = $_BO['points']['whitered1'];
$_BO['tpl_imgmap']['germany_nrw']['cities'][5] = $_BO['points']['whitered1'];
$_BO['tpl_imgmap']['germany_nrw']['cities'][6] = $_BO['points']['whitered1'];

//Germany NRW dark
$_BO['tpl_imgmap']['germany_nrw_dark'] = $_BO['tpl_imgmap']['germany_nrw'];
$_BO['tpl_imgmap']['germany_nrw_dark']['file'] = 'maps_europe/map_germany_nrw_dark.png';





/* ============================= FRANCE ============================= */

//http://www.blitzortung.org/Webpages/index.php?lang=de&page=3&subpage_3=4&update=1&map_generator_north=51.8&map_generator_west=-6&map_generator_east=9&map_generator_south=41.51&map_generator_min_area=20&map_generator_shorelines=1%2F0.1p%2F64%2F64%2F64+2%2F0.1p%2F80%2F80%2F80+3%2F0.1p%2F80%2F80%2F80+4%2F0.1p%2F80%2F80%2F80&map_generator_boundaries=a%2F0.1p%2F64%2F64%2F64&map_generator_rivers=-&map_generator_lakes=-&map_generator_dry_area=-&map_generator_wet_area=0%2F128%2F200&map_generator_color_map=-2000+50+150++51+100+++50+150++50%0D%0A100+++60+150++61+200+++60+150++60%0D%0A200+++80+160++80+500+++80+160++80%0D%0A500++110+155++80+1000+110+155++80%0D%0A1000+150+150++80+1500+150+150++80%0D%0A1500+160+140++60+2000+160+140++60%0D%0A2000+170+135++40+2500+170+135++40%0D%0A2500+180+130++30+3000+180+130++30%0D%0A3000+185+125++20+6000+185+125++20%0D%0A&map_generator_azimuth=315&map_generator_normalization=e0.1
$_BO['tpl_imgmap']['france'] = $_BO['tpl_imgmap_default'];
$_BO['tpl_imgmap']['france']['name'] = 'France';
$_BO['tpl_imgmap']['france']['file'] = 'maps_europe/map_france.png';
$_BO['tpl_imgmap']['france']['borders'] = array('maps_europe/map_france_borders.png', 80);
$_BO['tpl_imgmap']['france']['coord'] = array(51.8,9,41.51,-6); //North, East, South, West (Degrees)
$_BO['tpl_imgmap']['france']['density_blocksize'] = 7;
$_BO['tpl_imgmap']['france']['density_darken'] = array(70,230);
$_BO['tpl_imgmap']['france']['cities'][1] = $_BO['points']['whitered1'];
$_BO['tpl_imgmap']['france']['cities'][2] = $_BO['points']['whitered1'];
$_BO['tpl_imgmap']['france']['cities'][5] = $_BO['points']['whitered1'];
$_BO['tpl_imgmap']['france']['cities'][6] = $_BO['points']['whitered1'];


//Original Blitzortung.org style
$_BO['tpl_imgmap']['france2'] = $_BO['tpl_imgmap']['france'];
$_BO['tpl_imgmap']['france2']['file'] = 'maps_europe/map_france2.png';
$_BO['tpl_imgmap']['france2']['density_darken'] = array(30,230);

/* ============================= SWITZERLAND ============================= */

$_BO['tpl_imgmap']['switzerland'] = $_BO['tpl_imgmap_default'];
$_BO['tpl_imgmap']['switzerland']['name'] = 'Switzerland';
$_BO['tpl_imgmap']['switzerland']['file'] = 'maps_europe/map_switzerland.png';
$_BO['tpl_imgmap']['switzerland']['borders'] = array('maps_europe/map_switzerland_borders.png', 70);
$_BO['tpl_imgmap']['switzerland']['coord'] = array(48.7, 11, 44.85, 5.4); //North, East, South, West (Degrees)
$_BO['tpl_imgmap']['switzerland']['show_station'] = array(5, 155,80,155,9,true, 2,-12);
$_BO['tpl_imgmap']['switzerland']['density_blocksize'] = 18;
$_BO['tpl_imgmap']['switzerland']['density_darken'] = array(30,230);
$_BO['tpl_imgmap']['switzerland']['cities'][2] = $_BO['points']['whitered1'];




/**************************************/
/* Image Maps (PNG)  Mini             */
/**************************************/




/* ============================= EUROPE ============================= */

//Europe (mini)
$_BO['tpl_imgmap']['europe_mini']['name'] = 'Europe (mini)';
$_BO['tpl_imgmap']['europe_mini']['menu'] = false;
$_BO['tpl_imgmap']['europe_mini']['file'] = 'maps_europe/map_europe_mini.png';
$_BO['tpl_imgmap']['europe_mini']['coord'] = array(71.1, 44.5, 31.8, -14.0); //North, East, South, West (Degrees)
$_BO['tpl_imgmap']['europe_mini']['trange'] = 2; //hours!
$_BO['tpl_imgmap']['europe_mini']['upd_intv'] = 5; //minutes
$_BO['tpl_imgmap']['europe_mini']['textcolor'] = array(255,255,255);
$_BO['tpl_imgmap']['europe_mini']['textsize'] = 1;
$_BO['tpl_imgmap']['europe_mini']['point_style'] = array(3, 1, 'f008', 0);
$_BO['tpl_imgmap']['europe_mini']['legend'] = array(0, 54, 26, 0, 0, 0);
$_BO['tpl_imgmap']['europe_mini']['col'] = $_BO['tpl_color']['standard'];
$_BO['tpl_imgmap']['europe_mini']['gif_animation_enable'] = true;
$_BO['tpl_imgmap']['europe_mini']['gif_animation'] = $_BO['tpl_gif_animation_mini'];



//Europe (mini) - with stations
$_BO['tpl_imgmap']['europe_mini_stations'] = $_BO['tpl_imgmap_stations_mini'];
$_BO['tpl_imgmap']['europe_mini_stations']['name'] = 'Europe stations (mini)';
$_BO['tpl_imgmap']['europe_mini_stations']['file'] = 'maps_europe/map_europe_mini_dark.png';
$_BO['tpl_imgmap']['europe_mini_stations']['coord'] = array(71.1, 44.5, 31.8, -14.0); //North, East, South, West (Degrees)



/* ============================= GERMANY ============================= */

//Germany (mini)
$_BO['tpl_imgmap']['germany_mini']['name'] = 'Germany (mini)';
$_BO['tpl_imgmap']['germany_mini']['menu'] = false;
$_BO['tpl_imgmap']['germany_mini']['file'] = 'maps_europe/map_germany.png';
$_BO['tpl_imgmap']['germany_mini']['coord'] = array(56, 18.3, 46.3, 1.8); //North, East, South, West (Degrees)
$_BO['tpl_imgmap']['germany_mini']['trange'] = 2; //hours!
$_BO['tpl_imgmap']['germany_mini']['upd_intv'] = 5; //minutes
$_BO['tpl_imgmap']['germany_mini']['textcolor'] = array(255,255,255);
$_BO['tpl_imgmap']['germany_mini']['textsize'] = 1;
$_BO['tpl_imgmap']['germany_mini']['point_style'] = array(2, 2, 'f008', 0);
$_BO['tpl_imgmap']['germany_mini']['legend'] = array(0, 42, 26, 0, 0, 0);
$_BO['tpl_imgmap']['germany_mini']['col'] = $_BO['tpl_color']['standard'];
$_BO['tpl_imgmap']['germany_mini']['gif_animation_enable'] = true;
$_BO['tpl_imgmap']['germany_mini']['gif_animation'] = $_BO['tpl_gif_animation_mini'];


/**************************************/
/* Google Earth                       */
/**************************************/


$_BO['tpl_imgmap']['europe_kml_2h'] = $_BO['tpl_imgmap_default'];
$_BO['tpl_imgmap']['europe_kml_2h']['dim'] = array(1600, 1200);
$_BO['tpl_imgmap']['europe_kml_2h']['name'] = '2h';
$_BO['tpl_imgmap']['europe_kml_2h']['menu'] = false;
$_BO['tpl_imgmap']['europe_kml_2h']['archive'] = false;
$_BO['tpl_imgmap']['europe_kml_2h']['trange'] = 2; //hours!
$_BO['tpl_imgmap']['europe_kml_2h']['upd_intv'] = 10; //minutes
$_BO['tpl_imgmap']['europe_kml_2h']['proj'] = 'plate';
$_BO['tpl_imgmap']['europe_kml_2h']['coord'] = array(75, 40, 26, -14); //North, East, South, West (Degrees)
$_BO['tpl_imgmap']['europe_kml_2h']['kml'] = true;
$_BO['tpl_imgmap']['europe_kml_2h']['density'] = false;

$_BO['tpl_imgmap']['europe_kml_24h'] = $_BO['tpl_imgmap']['europe_kml_2h'];
$_BO['tpl_imgmap']['europe_kml_24h']['trange'] = 24; //hours!
$_BO['tpl_imgmap']['europe_kml_24h']['name'] = '24h';



/**************************************/
/* METEOSAT Images                    */
/**************************************/

//EUMETSAT
// - Template for Eumetsat Central Europe Images with GEOS-Projection (1054x745)
// - for images with 1h interval
// - you have to add a 'file' and 'name' parameter
$_BO['tpl_imgmap']['meteosat_europe_central'] = $_BO['tpl_imgmap_default'];
$_BO['tpl_imgmap']['meteosat_europe_central']['coord'] = array(55, 30, 30, -10, 159, 874, 712, 2); //North, East, South, West (pos 1-4) AND the according pixel coordinates (pos 5-8)
$_BO['tpl_imgmap']['meteosat_europe_central']['proj'] = 'geos';
$_BO['tpl_imgmap']['meteosat_europe_central']['trange'] = 1; //hours!
$_BO['tpl_imgmap']['meteosat_europe_central']['maxrange'] = 1; //hours!
$_BO['tpl_imgmap']['meteosat_europe_central']['hoursinterval'] = 1; //hours!
$_BO['tpl_imgmap']['meteosat_europe_central']['upd_intv'] = 30; //minutes
$_BO['tpl_imgmap']['meteosat_europe_central']['legend'] = array(5, 80, 40, 6, 28, 1);
$_BO['tpl_imgmap']['meteosat_europe_central']['legend_font'] = array(7, true, array('0000', 1, 'ddd0'),0,1);
$_BO['tpl_imgmap']['meteosat_europe_central']['bottom_style'] = array(0, 24, '9999ff66', 1, 'ccf8');
$_BO['tpl_imgmap']['meteosat_europe_central']['density'] = false;
$_BO['tpl_imgmap']['meteosat_europe_central']['file'] = 'maps_europe/map_eumetsat_central_eu_blank.jpg';
$_BO['tpl_imgmap']['meteosat_europe_central']['image_footer'] = ' *  (c) EUMETSAT '.date('Y').' Meteosat MSG';
$_BO['tpl_imgmap']['meteosat_europe_central']['col'] = array('fc00', 'f900', 'f500', 'f000', 'c000', '9060', '509');
$_BO['tpl_imgmap']['meteosat_europe_central']['point_style'] = array(2, 6, 'f008', 0, '00ad');
$_BO['tpl_imgmap']['meteosat_europe_central']['strikes_area'] = array(0, 0, 31, 0);
$_BO['tpl_imgmap']['meteosat_europe_central']['animation']['force'] = false; //no static image
$_BO['tpl_imgmap']['meteosat_europe_central']['animation']['range'] = 60; //minutes
$_BO['tpl_imgmap']['meteosat_europe_central']['animation']['interval'] = 60; //minutes
$_BO['tpl_imgmap']['meteosat_europe_central']['animation']['default_range'] = 6; //hours
$_BO['tpl_imgmap']['meteosat_europe_central']['animation']['max_range'] = 24; //hours
$_BO['tpl_imgmap']['meteosat_europe_central']['animation']['delay'] = 500; //msec
$_BO['tpl_imgmap']['meteosat_europe_central']['animation']['delay_end'] = 1500; //msec
$_BO['tpl_imgmap']['meteosat_europe_central']['animation']['transparent'] = false;
$_BO['tpl_imgmap']['meteosat_europe_central']['file_time_search'] = array(60, 120, 0); //steps, before, after (minutes)
$_BO['tpl_imgmap']['meteosat_europe_central']['quality'] = 97;


//EUMETSAT: Same as above, but with 15min interval
$_BO['tpl_imgmap']['meteosat_europe_central_15min'] = $_BO['tpl_imgmap']['meteosat_europe_central'];
$_BO['tpl_imgmap']['meteosat_europe_central_15min']['trange'] = 0.5; //hours!
$_BO['tpl_imgmap']['meteosat_europe_central_15min']['maxrange'] = 1; //hours!
$_BO['tpl_imgmap']['meteosat_europe_central_15min']['upd_intv'] = 5; //minutes
$_BO['tpl_imgmap']['meteosat_europe_central_15min']['animation']['range'] = 30; //minutes
$_BO['tpl_imgmap']['meteosat_europe_central_15min']['animation']['interval'] = 15; //minutes
$_BO['tpl_imgmap']['meteosat_europe_central_15min']['animation']['default_range'] = 6; //hours
$_BO['tpl_imgmap']['meteosat_europe_central_15min']['animation']['max_range'] = 6; //hours
$_BO['tpl_imgmap']['meteosat_europe_central_15min']['animation']['delay'] = 200; //msec
$_BO['tpl_imgmap']['meteosat_europe_central_15min']['animation']['delay_end'] = 1000; //msec
$_BO['tpl_imgmap']['meteosat_europe_central_15min']['file_time_search'] = array(15, 60, 30); //steps, before, after (minutes)


//EUMETSAT: Segment 15
$_BO['tpl_imgmap']['meteosat_segment15'] = $_BO['tpl_imgmap']['meteosat_europe_central'];
$_BO['tpl_imgmap']['meteosat_segment15']['coord'] = array(55.29, 26.8, 46.137, 5.96, 33, 1140, 483, 66, 57, 28, 46, 4); //North, East, South, West (pos 1-4) AND the according pixel coordinates (pos 5-8) AND rough bounds to filter strikes
$_BO['tpl_imgmap']['meteosat_segment15']['file'] = 'maps_europe/map_eumetsat_segm15_blank.jpg';



/* ============================= OCEANIA ============================= */


//MapTool URL: http://www.blitzortung.org/Webpages/index.php?lang=de&page=3&subpage_3=4&update=1&map_generator_north=10&map_generator_west=110&map_generator_east=180&map_generator_south=-51.6%2B&map_generator_projection=M&map_generator_resolution=i&map_generator_scaling=103&map_generator_min_area=5&map_generator_shorelines=1%2F0.1p%2F64%2F64%2F64+2%2F0.1p%2F80%2F80%2F80+3%2F0.1p%2F80%2F80%2F80+4%2F0.1p%2F80%2F80%2F80&map_generator_boundaries=a%2F0.1p%2F64%2F64%2F64&map_generator_rivers=-&map_generator_lakes=-&map_generator_dry_area=-&map_generator_wet_area=0%2F128%2F200&map_generator_color_map=-2000+50+150++51+100+++50+150++50%0D%0A100+++60+150++61+200+++60+150++60%0D%0A200+++80+160++80+500+++80+160++80%0D%0A500++110+155++80+1000+110+155++80%0D%0A1000+150+150++80+1500+150+150++80%0D%0A1500+160+140++60+2000+160+140++60%0D%0A2000+170+135++40+2500+170+135++40%0D%0A2500+180+130++30+3000+180+130++30%0D%0A3000+185+125++20+6000+185+125++20%0D%0A&map_generator_azimuth=315&map_generator_normalization=e0.1
$_BO['tpl_imgmap']['oceania'] = $_BO['tpl_imgmap_default'];
$_BO['tpl_imgmap']['oceania']['name'] = 'Oceania';
$_BO['tpl_imgmap']['oceania']['file'] = 'maps_oceania/map_oceania.png';
$_BO['tpl_imgmap']['oceania']['borders'] = array('maps_oceania/map_oceania_borders.png', 60);
$_BO['tpl_imgmap']['oceania']['coord'] = array(10, 180, -51.6, 110); //North, East, South, West (Degrees)
$_BO['tpl_imgmap']['oceania']['point_style'] = array(2, 2, 'f008', 0);


//New Zealand
//MapTool URL: http://www.blitzortung.org/Webpages/index.php?lang=de&page=3&subpage_3=4&update=1&map_generator_north=-33&map_generator_west=160&map_generator_east=180&map_generator_south=-48.15&map_generator_projection=M&map_generator_resolution=i&map_generator_scaling=103&map_generator_min_area=20&map_generator_shorelines=1%2F0.1p%2F64%2F64%2F64+2%2F0.1p%2F80%2F80%2F80+3%2F0.1p%2F80%2F80%2F80+4%2F0.1p%2F80%2F80%2F80&map_generator_boundaries=a%2F0.1p%2F64%2F64%2F64&map_generator_rivers=-&map_generator_lakes=-&map_generator_dry_area=-&map_generator_wet_area=0%2F128%2F200&map_generator_color_map=-2000+50+150++51+100+++50+150++50%0D%0A100+++60+150++61+200+++60+150++60%0D%0A200+++80+160++80+500+++80+160++80%0D%0A500++110+155++80+1000+110+155++80%0D%0A1000+150+150++80+1500+150+150++80%0D%0A1500+160+140++60+2000+160+140++60%0D%0A2000+170+135++40+2500+170+135++40%0D%0A2500+180+130++30+3000+180+130++30%0D%0A3000+185+125++20+6000+185+125++20%0D%0A&map_generator_azimuth=315&map_generator_normalization=e0.1
$_BO['tpl_imgmap']['new_zealand'] = $_BO['tpl_imgmap_default'];
$_BO['tpl_imgmap']['new_zealand']['name'] = 'New Zealand';
$_BO['tpl_imgmap']['new_zealand']['file'] = 'maps_oceania/map_new_zealand.png';
$_BO['tpl_imgmap']['new_zealand']['borders'] = array('maps_oceania/map_new_zealand_borders.png', 60);
$_BO['tpl_imgmap']['new_zealand']['coord'] = array(-33, 180, -48.15, 160); //North, East, South, West (Degrees)
$_BO['tpl_imgmap']['new_zealand']['point_style'] = array(2, 2, 'f008', 0);


//Oceania (mini) - with stations
$_BO['tpl_imgmap']['oceania_mini_stations'] = $_BO['tpl_imgmap_stations_mini'];
$_BO['tpl_imgmap']['oceania_mini_stations']['name'] = 'Oceania stations (mini)';
$_BO['tpl_imgmap']['oceania_mini_stations']['file'] = 'maps_oceania/map_oceania_mini_dark.png';
$_BO['tpl_imgmap']['oceania_mini_stations']['coord'] = array(10, 180, -51.6, 110); //North, East, South, West (Degrees)






/* ============================= NORTH AMERICA ============================= */


//USA
//MapTool URL:http://www.blitzortung.org/Webpages/index.php?lang=de&page=3&subpage_3=4&update=1&map_generator_north=55&map_generator_west=-129&map_generator_east=-62&map_generator_south=16&map_generator_projection=M&map_generator_projection=-&map_generator_resolution=l&map_generator_scaling=103&map_generator_min_area=2000&map_generator_shorelines=1%2F0.1p%2F64%2F64%2F64+2%2F0.1p%2F80%2F80%2F80+3%2F0.1p%2F80%2F80%2F80+4%2F0.1p%2F80%2F80%2F80&map_generator_boundaries=a%2F0.1p%2F64%2F64%2F64&map_generator_rivers=-&map_generator_lakes=-&map_generator_dry_area=-&map_generator_wet_area=0%2F128%2F200&map_generator_color_map=-2000+50+150++51+100+++50+150++50%0D%0A100+++60+150++61+200+++60+150++60%0D%0A200+++80+160++80+500+++80+160++80%0D%0A500++110+155++80+1000+110+155++80%0D%0A1000+150+150++80+1500+150+150++80%0D%0A1500+160+140++60+2000+160+140++60%0D%0A2000+170+135++40+2500+170+135++40%0D%0A2500+180+130++30+3000+180+130++30%0D%0A3000+185+125++20+6000+185+125++20%0D%0A&map_generator_azimuth=315&map_generator_normalization=e0.1

$_BO['tpl_imgmap']['usa'] = $_BO['tpl_imgmap_default'];
$_BO['tpl_imgmap']['usa']['name'] = 'USA';
$_BO['tpl_imgmap']['usa']['file'] = 'maps_namerica/map_usa.png';
$_BO['tpl_imgmap']['usa']['borders'] = array('maps_namerica/map_usa_borders.png', 60);
$_BO['tpl_imgmap']['usa']['coord'] = array(55, -62, 16, -129); //North, East, South, West (Degrees)
$_BO['tpl_imgmap']['usa']['point_style'] = array(2, 2, 'f008', 0);

//USA Big
//MapTool URL: Same as above, with scaling 149
$_BO['tpl_imgmap']['usa_big'] = $_BO['tpl_imgmap_default'];
$_BO['tpl_imgmap']['usa_big']['name'] = 'USA';
$_BO['tpl_imgmap']['usa_big']['file'] = 'maps_namerica/map_usa_big.png';
$_BO['tpl_imgmap']['usa_big']['borders'] = array('maps_namerica/map_usa_big_borders.png', 60);
$_BO['tpl_imgmap']['usa_big']['coord'] = array(55, -62, 16, -129); //North, East, South, West (Degrees)
$_BO['tpl_imgmap']['usa_big']['point_style'] = array(2, 2, 'f008', 0);



//North America (mini) - with stations
$_BO['tpl_imgmap']['namerica_mini_stations'] = $_BO['tpl_imgmap_stations_mini'];
$_BO['tpl_imgmap']['namerica_mini_stations']['name'] = 'North America stations (mini)';
$_BO['tpl_imgmap']['namerica_mini_stations']['file'] = 'maps_namerica/map_namerica_mini_dark.png';
$_BO['tpl_imgmap']['namerica_mini_stations']['coord'] = array(57, -55, 8, -135); //North, East, South, West (Degrees)





/**************************************/
/* Regions                            */
/**************************************/

//Germany
$_BO['tpl_region']['germany']['name']   = 'Germany';
$_BO['tpl_region']['germany']['visible']= true;
$_BO['tpl_region']['germany']['rect_add'] = array(	55.02, 12.08, 47.2, 5.87,
													54.8, 15.08, 50.2, 12.08,
													50.2, 13.08, 47.4, 12.08,
													49.3, 13.9, 48.2, 13.08,
												);
$_BO['tpl_region']['germany']['rect_rem'] = array(	56, 8.2, 53.9, 5,   
													56, 6.7, 52, 5,
													49.1, 7.5, 47, 5,
													49.1, 7.5, 47, 5,
													56, 13, 54.6, 10.3,
													54.8, 15.08, 52.8, 14.5,
													50.6, 15.08, 50.2, 13.35,
													);


//Bavaria
$_BO['tpl_region']['bavaria']['name']   = 'Germany: Bavaria';
$_BO['tpl_region']['bavaria']['visible']= true;
$_BO['tpl_region']['bavaria']['rect_add'] = array(	50.6, 12.08, 47.2, 9.5,
													50.15, 9.5, 49.55, 9,
													50.2, 13.08, 47.4, 12.08,
													49.3, 13.9, 48.2, 13.08,
												);
$_BO['tpl_region']['bavaria']['rect_rem'] = array(	49.4, 9.5, 47.7, 10,
													50.2, 13.08, 49.4, 12.7,
													);


?>