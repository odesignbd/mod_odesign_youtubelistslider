<?php
/**
 * @package 	mod_odesign_youtubelistslider - A Super Responsive Youtube Play List Slider
 * @version		2.0.0
 * @created		Jan 2015
 * @author		oDesign
 * @email		odesignbd@gmail.com
 * @copyright	Copyright © 2015 oDesign. All rights reserved
 * @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */ 
// no direct access
defined('_JEXEC') or die('Restricted access');

$document = JFactory::getDocument();
$document->addScript(JURI::base().'modules/mod_'.$module->name.'/tmpl/assets/js/jquery-noconflict.js');
$document->addScript(JURI::base().'modules/mod_'.$module->name.'/tmpl/assets/js/jquery-1.9.1.min.js');
$document->addScript(JURI::base().'modules/mod_'.$module->name.'/tmpl/assets/js/odesign.youtubelistslider.js');
$document->addScript(JURI::base().'modules/mod_'.$module->name.'/tmpl/assets/js/odesign.js');
$document->addStyleSheet(JURI::base().'modules/mod_'.$module->name.'/tmpl/assets/css/odesign.youtubelistslider.css');

$ytID1					= $params->get('ytID1');
$ytTITLE_custom1		= $params->get('ytTITLE_custom1');
$ytDESC_custom1			= $params->get('ytDESC_custom1');
$ytID2					= $params->get('ytID2');
$ytTITLE_custom2		= $params->get('ytTITLE_custom2');
$ytDESC_custom2			= $params->get('ytDESC_custom2');
$ytID3					= $params->get('ytID3');
$ytTITLE_custom3		= $params->get('ytTITLE_custom3');
$ytDESC_custom3			= $params->get('ytDESC_custom3');
$ytID4					= $params->get('ytID4');
$ytTITLE_custom4		= $params->get('ytTITLE_custom4');
$ytDESC_custom4			= $params->get('ytDESC_custom4');
$ytID5					= $params->get('ytID5');
$ytTITLE_custom5		= $params->get('ytTITLE_custom5');
$ytDESC_custom5			= $params->get('ytDESC_custom5');
$ytID6					= $params->get('ytID6');
$ytTITLE_custom6		= $params->get('ytTITLE_custom6');
$ytDESC_custom6			= $params->get('ytDESC_custom6');
$ytID7					= $params->get('ytID7');
$ytTITLE_custom7		= $params->get('ytTITLE_custom7');
$ytDESC_custom7			= $params->get('ytDESC_custom7');
$ytID8					= $params->get('ytID8');
$ytTITLE_custom8		= $params->get('ytTITLE_custom8');
$ytDESC_custom8			= $params->get('ytDESC_custom8');
$ytID9					= $params->get('ytID9');
$ytTITLE_custom9		= $params->get('ytTITLE_custom9');
$ytDESC_custom9			= $params->get('ytDESC_custom9');
$ytID10					= $params->get('ytID10');
$ytTITLE_custom10		= $params->get('ytTITLE_custom10');
$ytDESC_custom10		= $params->get('ytDESC_custom10');
$ytID11					= $params->get('ytID11');
$ytTITLE_custom11		= $params->get('ytTITLE_custom11');
$ytDESC_custom11		= $params->get('ytDESC_custom11');
$ytID12					= $params->get('ytID12');
$ytTITLE_custom12		= $params->get('ytTITLE_custom12');
$ytDESC_custom12		= $params->get('ytDESC_custom12');
$ytID13					= $params->get('ytID13');
$ytTITLE_custom13		= $params->get('ytTITLE_custom13');
$ytDESC_custom13		= $params->get('ytDESC_custom13');
$ytID14					= $params->get('ytID14');
$ytTITLE_custom14		= $params->get('ytTITLE_custom14');
$ytDESC_custom14		= $params->get('ytDESC_custom14');
$ytID15					= $params->get('ytID15');
$ytTITLE_custom15		= $params->get('ytTITLE_custom15');
$ytDESC_custom15		= $params->get('ytDESC_custom15');
$ytID16					= $params->get('ytID16');
$ytTITLE_custom16		= $params->get('ytTITLE_custom16');
$ytDESC_custom16		= $params->get('ytDESC_custom16');
$ytID17					= $params->get('ytID17');
$ytTITLE_custom17		= $params->get('ytTITLE_custom17');
$ytDESC_custom17		= $params->get('ytDESC_custom17');
$ytID18					= $params->get('ytID18');
$ytTITLE_custom18		= $params->get('ytTITLE_custom18');
$ytDESC_custom18		= $params->get('ytDESC_custom18');
$ytID19					= $params->get('ytID19');
$ytTITLE_custom19		= $params->get('ytTITLE_custom19');
$ytDESC_custom19		= $params->get('ytDESC_custom19');
$ytID20					= $params->get('ytID20');
$ytTITLE_custom20		= $params->get('ytTITLE_custom20');
$ytDESC_custom20		= $params->get('ytDESC_custom20');

$full_container_width	= $params->get('full_container_width');
$full_container_height	= $params->get('full_container_height');
$slide_width			= $params->get('slide_width');
$tab_width				= $params->get('tab_width');
$disable_tab_mb			= $params->get('disable_tab_mb');
$autoplay_slider		= $params->get('autoplay_slider');
$Pause_on_hover			= $params->get('Pause_on_hover');
$autoplay_steps			= $params->get('autoplay_steps');
$slide_interval			= $params->get('slide_interval');
$slide_direction		= $params->get('slide_direction');
$trans_speed			= $params->get('trans_speed');
$keyboard_nav			= $params->get('keyboard_nav');
$drag_orientation		= $params->get('drag_orientation');

$tab_status				= $params->get('tab_status');
$tab_loop				= $params->get('tab_loop');
$tab_spacing_X			= $params->get('tab_spacing_X');
$tab_spacing_Y			= $params->get('tab_spacing_Y');
$tab_count				= $params->get('tab_count');
$tab_orientation		= $params->get('tab_orientation');
$tab_orientation_LR		= $params->get('tab_orientation_LR');
$disable_drag			= $params->get('disable_drag');
$slider_bg_color		= $params->get('slider_bg_color');
$tab_color				= $params->get('tab_color');
$tab_color_active		= $params->get('tab_color_active');
$tab_color_hover		= $params->get('tab_color_hover');
$heading_color			= $params->get('heading_color');
$heading_fontsize		= $params->get('heading_fontsize');
$heading_textalign		= $params->get('heading_textalign');
$desc_color				= $params->get('desc_color');
$desc_fontsize			= $params->get('desc_fontsize');
$desc_textalign			= $params->get('desc_textalign');

$autoplay_video			= $params->get('autoplay_video');
$player_controls		= $params->get('player_controls');
$autohide_controls		= $params->get('autohide_controls');
$showinfo				= $params->get('showinfo');
$progress_color			= $params->get('progress_color');
$player_theme			= $params->get('player_theme');
$youtube_logo			= $params->get('youtube_logo');
$fullscreen_btn			= $params->get('fullscreen_btn');
$annotations			= $params->get('annotations');
$loop					= $params->get('loop');
$rel_video				= $params->get('rel_video');
$kb_control				= $params->get('kb_control');

$INFOurl				= 'http://gdata.youtube.com/feeds/api/videos/';
$jsonparams				= '?v=2&alt=json';
$IFMurl					= 'https://www.youtube.com/embed/';
$THMurl					= 'http://img.youtube.com/vi/';
$THMext					= '/maxresdefault.jpg';
$VIDparams				= '?autoplay='.$autoplay_video.'&controls='.$player_controls.'&autohide='.$autohide_controls.'&showinfo='.$showinfo.'&rel='.$rel_video.'&color='.$progress_color.'&theme='.$player_theme.'&modestbranding='.$youtube_logo.'&iv_load_policy='.$annotations.'&disablekb='.$kb_control.'&fs='.$fullscreen_btn.'&hd=1'.'&cc_load_policy=1'.'&showsearch=0'.'&enablejsapi=1';

$moduleclass_sfx	= htmlspecialchars($params->get('moduleclass_sfx'));
require JModuleHelper::getLayoutPath('mod_odesign_youtubelistslider', $params->get('layout', 'default'));
?>