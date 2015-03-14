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
?>

<?php /*?><?php
$youtube = simplexml_load_file('http://gdata.youtube.com/feeds/api/videos/'.$ytID1.'?v=2');
$yttitle1 = $youtube->title;
?><?php */?>
<?php
$json_output1	= file_get_contents($INFOurl.$ytID1.$jsonparams);
$json1			= json_decode($json_output1, true);
$ytTITLE1		= $json1['entry']['title']['$t'];
$ytDESC1		= $json1['entry']['media$group']['media$description']['$t'];
$ytVIEWCOUNT1	= $json1['entry']['yt$statistics']['viewCount'];

$json_output2	= file_get_contents($INFOurl.$ytID2.$jsonparams);
$json2			= json_decode($json_output2, true);
$ytTITLE2		= $json2['entry']['title']['$t'];
$ytDESC2		= $json2['entry']['media$group']['media$description']['$t'];
$ytVIEWCOUNT2	= $json2['entry']['yt$statistics']['viewCount'];

$json_output3	= file_get_contents($INFOurl.$ytID3.$jsonparams);
$json3			= json_decode($json_output3, true);
$ytTITLE3		= $json3['entry']['title']['$t'];
$ytDESC3		= $json3['entry']['media$group']['media$description']['$t'];
$ytVIEWCOUNT3	= $json3['entry']['yt$statistics']['viewCount'];

$json_output4	= file_get_contents($INFOurl.$ytID4.$jsonparams);
$json4			= json_decode($json_output4, true);
$ytTITLE4		= $json4['entry']['title']['$t'];
$ytDESC4		= $json4['entry']['media$group']['media$description']['$t'];
$ytVIEWCOUNT4	= $json4['entry']['yt$statistics']['viewCount'];

$json_output5	= file_get_contents($INFOurl.$ytID5.$jsonparams);
$json5			= json_decode($json_output5, true);
$ytTITLE5		= $json5['entry']['title']['$t'];
$ytDESC5		= $json5['entry']['media$group']['media$description']['$t'];
$ytVIEWCOUNT5	= $json5['entry']['yt$statistics']['viewCount'];

$json_output6	= file_get_contents($INFOurl.$ytID6.$jsonparams);
$json6			= json_decode($json_output6, true);
$ytTITLE6		= $json6['entry']['title']['$t'];
$ytDESC6		= $json6['entry']['media$group']['media$description']['$t'];
$ytVIEWCOUNT6	= $json6['entry']['yt$statistics']['viewCount'];

$json_output7	= file_get_contents($INFOurl.$ytID7.$jsonparams);
$json7			= json_decode($json_output7, true);
$ytTITLE7		= $json7['entry']['title']['$t'];
$ytDESC7		= $json7['entry']['media$group']['media$description']['$t'];
$ytVIEWCOUNT7	= $json7['entry']['yt$statistics']['viewCount'];

$json_output8	= file_get_contents($INFOurl.$ytID8.$jsonparams);
$json8			= json_decode($json_output8, true);
$ytTITLE8		= $json8['entry']['title']['$t'];
$ytDESC8		= $json8['entry']['media$group']['media$description']['$t'];
$ytVIEWCOUNT8	= $json8['entry']['yt$statistics']['viewCount'];

$json_output9	= file_get_contents($INFOurl.$ytID9.$jsonparams);
$json9			= json_decode($json_output9, true);
$ytTITLE9		= $json9['entry']['title']['$t'];
$ytDESC9		= $json9['entry']['media$group']['media$description']['$t'];
$ytVIEWCOUNT9	= $json9['entry']['yt$statistics']['viewCount'];

$json_output10	= file_get_contents($INFOurl.$ytID10.$jsonparams);
$json10			= json_decode($json_output10, true);
$ytTITLE10		= $json10['entry']['title']['$t'];
$ytDESC10		= $json10['entry']['media$group']['media$description']['$t'];
$ytVIEWCOUNT10	= $json10['entry']['yt$statistics']['viewCount'];

$json_output11	= file_get_contents($INFOurl.$ytID11.$jsonparams);
$json11			= json_decode($json_output11, true);
$ytTITLE11		= $json11['entry']['title']['$t'];
$ytDESC11		= $json11['entry']['media$group']['media$description']['$t'];
$ytVIEWCOUNT11	= $json11['entry']['yt$statistics']['viewCount'];

$json_output12	= file_get_contents($INFOurl.$ytID12.$jsonparams);
$json12			= json_decode($json_output12, true);
$ytTITLE12		= $json12['entry']['title']['$t'];
$ytDESC12		= $json12['entry']['media$group']['media$description']['$t'];
$ytVIEWCOUNT12	= $json12['entry']['yt$statistics']['viewCount'];

$json_output13	= file_get_contents($INFOurl.$ytID13.$jsonparams);
$json13			= json_decode($json_output13, true);
$ytTITLE13		= $json13['entry']['title']['$t'];
$ytDESC13		= $json13['entry']['media$group']['media$description']['$t'];
$ytVIEWCOUNT13	= $json13['entry']['yt$statistics']['viewCount'];

$json_output14	= file_get_contents($INFOurl.$ytID14.$jsonparams);
$json14			= json_decode($json_output14, true);
$ytTITLE14		= $json14['entry']['title']['$t'];
$ytDESC14		= $json14['entry']['media$group']['media$description']['$t'];
$ytVIEWCOUNT14	= $json14['entry']['yt$statistics']['viewCount'];

$json_output15	= file_get_contents($INFOurl.$ytID15.$jsonparams);
$json15			= json_decode($json_output15, true);
$ytTITLE15		= $json15['entry']['title']['$t'];
$ytDESC15		= $json15['entry']['media$group']['media$description']['$t'];
$ytVIEWCOUNT15	= $json15['entry']['yt$statistics']['viewCount'];

$json_output16	= file_get_contents($INFOurl.$ytID16.$jsonparams);
$json16			= json_decode($json_output16, true);
$ytTITLE16		= $json16['entry']['title']['$t'];
$ytDESC16		= $json16['entry']['media$group']['media$description']['$t'];
$ytVIEWCOUNT16	= $json16['entry']['yt$statistics']['viewCount'];

$json_output17	= file_get_contents($INFOurl.$ytID17.$jsonparams);
$json17			= json_decode($json_output17, true);
$ytTITLE17		= $json17['entry']['title']['$t'];
$ytDESC17		= $json17['entry']['media$group']['media$description']['$t'];
$ytVIEWCOUNT17	= $json17['entry']['yt$statistics']['viewCount'];

$json_output18	= file_get_contents($INFOurl.$ytID18.$jsonparams);
$json18			= json_decode($json_output18, true);
$ytTITLE18		= $json18['entry']['title']['$t'];
$ytDESC18		= $json18['entry']['media$group']['media$description']['$t'];
$ytVIEWCOUNT18	= $json18['entry']['yt$statistics']['viewCount'];

$json_output19	= file_get_contents($INFOurl.$ytID19.$jsonparams);
$json19			= json_decode($json_output19, true);
$ytTITLE19		= $json19['entry']['title']['$t'];
$ytDESC19		= $json19['entry']['media$group']['media$description']['$t'];
$ytVIEWCOUNT19	= $json19['entry']['yt$statistics']['viewCount'];

$json_output20	= file_get_contents($INFOurl.$ytID20.$jsonparams);
$json20			= json_decode($json_output20, true);
$ytTITLE20		= $json20['entry']['title']['$t'];
$ytDESC20		= $json20['entry']['media$group']['media$description']['$t'];
$ytVIEWCOUNT20	= $json20['entry']['yt$statistics']['viewCount'];
?>


<?php if ($ytID1 || $ytID2 || $ytID3 || $ytID4 || $ytID5 || $ytID6 || $ytID7 || $ytID8 || $ytID9 || $ytID10 || $ytID11 || $ytID12 || $ytID13 || $ytID14 || $ytID15 || $ytID16 || $ytID17 || $ytID18 || $ytID19 || $ytID20) { ?>

<div class="tab_slider custom_<?php echo $moduleclass_sfx ?>">
<div id="wrapper">

<!-- odesign Slider Begin -->
<div id="slider1_container" style="position: relative; top: 0; margin-bottom: 0px; left: 0px; width: <?php echo $full_container_width.'px' ?>; height: <?php echo $full_container_height.'px' ?>; background: <?php echo $slider_bg_color ?>; overflow: hidden;">
      
      <!-- Loading Screen Begin -->
      <div u="loading" style="position: absolute; top: 0px; left: 0px;">
        <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
background-color: <?php echo $slider_bg_color ?>; top: 0px; left: 0px;width: 100%;height:100%;"> </div>
        <div style="position: absolute; display: block; background: url(modules/mod_odesign_youtubelistslider/tmpl/assets/img/loading.gif) no-repeat center center;
top: 0px; left: 0px;width: 100%;height:100%;"> </div>
      </div>
      <!-- Loading Screen End -->
      
      <!-- Slides Container Begin -->
      <div u="slides" class="slide-width" style="cursor: move; position: absolute; left: 0px; top: 0px;
      <?php if($tab_orientation==1||$tab_status==0||$tab_status==1): ?>
      width: <?php echo $full_container_width.'px' ?>;
      <?php elseif($tab_orientation_LR==1): ?>
      width: <?php echo $slide_width.'px' ?>;
      left: <?php echo $tab_width.'px' ?>;
      <?php else:?>
      width: <?php echo $slide_width.'px' ?>;
      <?php endif ; ?>
      height: <?php echo $full_container_height.'px' ?>; overflow: hidden;">


        <?php if(!empty($ytID1)):?>
        <div>
          <iframe width="100%" height="100%" src="<?php echo $IFMurl.$ytID1.$VIDparams ?>" frameborder="0" allowfullscreen></iframe>
          <div u="thumb">
            <img class="i" src="<?php echo $THMurl.$ytID1.$THMext ?>" alt="<?php echo $ytTITLE1 ?>" />
            <div class="t"><?php if($ytTITLE_custom1==true): ?><?php echo $ytTITLE_custom1 ?><?php else:?><?php echo $ytTITLE1 ?><?php endif ; ?><?php echo '&nbsp;'.'('.'<b>'.$ytVIEWCOUNT1.'</b>'.')' ?></div>
            <div class="c"><?php if($ytDESC_custom1==true): ?><?php echo $ytDESC_custom1 ?><?php else:?><?php echo $ytDESC1 ?><?php endif ; ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        <?php if(!empty($ytID2)):?>
        <div>
          <iframe width="100%" height="100%" src="<?php echo $IFMurl.$ytID2.$VIDparams ?>" frameborder="0" allowfullscreen></iframe>
          <div u="thumb">
            <img class="i" src="<?php echo $THMurl.$ytID2.$THMext ?>" alt="<?php echo $ytTITLE2 ?>" />
            <div class="t"><?php if($ytTITLE_custom2==true): ?><?php echo $ytTITLE_custom2 ?><?php else:?><?php echo $ytTITLE2 ?><?php endif ; ?><?php echo '&nbsp;'.'('.'<b>'.$ytVIEWCOUNT2.'</b>'.')' ?></div>
            <div class="c"><?php if($ytDESC_custom2==true): ?><?php echo $ytDESC_custom2 ?><?php else:?><?php echo $ytDESC2 ?><?php endif ; ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        <?php if(!empty($ytID3)):?>
        <div>
          <iframe width="100%" height="100%" src="<?php echo $IFMurl.$ytID3.$VIDparams ?>" frameborder="0" allowfullscreen></iframe>
          <div u="thumb">
            <img class="i" src="<?php echo $THMurl.$ytID3.$THMext ?>" alt="<?php echo $ytTITLE3 ?>" />
            <div class="t"><?php if($ytTITLE_custom3==true): ?><?php echo $ytTITLE_custom3 ?><?php else:?><?php echo $ytTITLE3 ?><?php endif ; ?><?php echo '&nbsp;'.'('.'<b>'.$ytVIEWCOUNT3.'</b>'.')' ?></div>
            <div class="c"><?php if($ytDESC_custom3==true): ?><?php echo $ytDESC_custom3 ?><?php else:?><?php echo $ytDESC3 ?><?php endif ; ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        <?php if(!empty($ytID4)):?>
        <div>
          <iframe width="100%" height="100%" src="<?php echo $IFMurl.$ytID4.$VIDparams ?>" frameborder="0" allowfullscreen></iframe>
          <div u="thumb">
            <img class="i" src="<?php echo $THMurl.$ytID4.$THMext ?>" alt="<?php echo $ytTITLE4 ?>" />
            <div class="t"><?php if($ytTITLE_custom4==true): ?><?php echo $ytTITLE_custom4 ?><?php else:?><?php echo $ytTITLE4 ?><?php endif ; ?><?php echo '&nbsp;'.'('.'<b>'.$ytVIEWCOUNT4.'</b>'.')' ?></div>
            <div class="c"><?php if($ytDESC_custom4==true): ?><?php echo $ytDESC_custom4 ?><?php else:?><?php echo $ytDESC4 ?><?php endif ; ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        <?php if(!empty($ytID5)):?>
        <div>
          <iframe width="100%" height="100%" src="<?php echo $IFMurl.$ytID5.$VIDparams ?>" frameborder="0" allowfullscreen></iframe>
          <div u="thumb">
            <img class="i" src="<?php echo $THMurl.$ytID5.$THMext ?>" alt="<?php echo $ytTITLE5 ?>" />
            <div class="t"><?php if($ytTITLE_custom5==true): ?><?php echo $ytTITLE_custom5 ?><?php else:?><?php echo $ytTITLE5 ?><?php endif ; ?><?php echo '&nbsp;'.'('.'<b>'.$ytVIEWCOUNT5.'</b>'.')' ?></div>
            <div class="c"><?php if($ytDESC_custom5==true): ?><?php echo $ytDESC_custom5 ?><?php else:?><?php echo $ytDESC5 ?><?php endif ; ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        <?php if(!empty($ytID6)):?>
        <div>
          <iframe width="100%" height="100%" src="<?php echo $IFMurl.$ytID6.$VIDparams ?>" frameborder="0" allowfullscreen></iframe>
          <div u="thumb">
            <img class="i" src="<?php echo $THMurl.$ytID6.$THMext ?>" alt="<?php echo $ytTITLE6 ?>" />
            <div class="t"><?php if($ytTITLE_custom6==true): ?><?php echo $ytTITLE_custom6 ?><?php else:?><?php echo $ytTITLE6 ?><?php endif ; ?><?php echo '&nbsp;'.'('.'<b>'.$ytVIEWCOUNT6.'</b>'.')' ?></div>
            <div class="c"><?php if($ytDESC_custom6==true): ?><?php echo $ytDESC_custom6 ?><?php else:?><?php echo $ytDESC6 ?><?php endif ; ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        <?php if(!empty($ytID7)):?>
        <div>
          <iframe width="100%" height="100%" src="<?php echo $IFMurl.$ytID7.$VIDparams ?>" frameborder="0" allowfullscreen></iframe>
          <div u="thumb">
            <img class="i" src="<?php echo $THMurl.$ytID7.$THMext ?>" alt="<?php echo $ytTITLE7 ?>" />
            <div class="t"><?php if($ytTITLE_custom7==true): ?><?php echo $ytTITLE_custom7 ?><?php else:?><?php echo $ytTITLE7 ?><?php endif ; ?><?php echo '&nbsp;'.'('.'<b>'.$ytVIEWCOUNT7.'</b>'.')' ?></div>
            <div class="c"><?php if($ytDESC_custom7==true): ?><?php echo $ytDESC_custom7 ?><?php else:?><?php echo $ytDESC7 ?><?php endif ; ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        <?php if(!empty($ytID8)):?>
        <div>
          <iframe width="100%" height="100%" src="<?php echo $IFMurl.$ytID8.$VIDparams ?>" frameborder="0" allowfullscreen></iframe>
          <div u="thumb">
            <img class="i" src="<?php echo $THMurl.$ytID8.$THMext ?>" alt="<?php echo $ytTITLE8 ?>" />
            <div class="t"><?php if($ytTITLE_custom8==true): ?><?php echo $ytTITLE_custom8 ?><?php else:?><?php echo $ytTITLE8 ?><?php endif ; ?><?php echo '&nbsp;'.'('.'<b>'.$ytVIEWCOUNT8.'</b>'.')' ?></div>
            <div class="c"><?php if($ytDESC_custom8==true): ?><?php echo $ytDESC_custom8 ?><?php else:?><?php echo $ytDESC8 ?><?php endif ; ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        <?php if(!empty($ytID9)):?>
        <div>
          <iframe width="100%" height="100%" src="<?php echo $IFMurl.$ytID9.$VIDparams ?>" frameborder="0" allowfullscreen></iframe>
          <div u="thumb">
            <img class="i" src="<?php echo $THMurl.$ytID9.$THMext ?>" alt="<?php echo $ytTITLE9 ?>" />
            <div class="t"><?php if($ytTITLE_custom9==true): ?><?php echo $ytTITLE_custom9 ?><?php else:?><?php echo $ytTITLE9 ?><?php endif ; ?><?php echo '&nbsp;'.'('.'<b>'.$ytVIEWCOUNT9.'</b>'.')' ?></div>
            <div class="c"><?php if($ytDESC_custom9==true): ?><?php echo $ytDESC_custom9 ?><?php else:?><?php echo $ytDESC9 ?><?php endif ; ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        <?php if(!empty($ytID10)):?>
        <div>
          <iframe width="100%" height="100%" src="<?php echo $IFMurl.$ytID10.$VIDparams ?>" frameborder="0" allowfullscreen></iframe>
          <div u="thumb">
            <img class="i" src="<?php echo $THMurl.$ytID10.$THMext ?>" alt="<?php echo $ytTITLE10 ?>" />
            <div class="t"><?php if($ytTITLE_custom10==true): ?><?php echo $ytTITLE_custom10 ?><?php else:?><?php echo $ytTITLE10 ?><?php endif ; ?><?php echo '&nbsp;'.'('.'<b>'.$ytVIEWCOUNT10.'</b>'.')' ?></div>
            <div class="c"><?php if($ytDESC_custom10==true): ?><?php echo $ytDESC_custom10 ?><?php else:?><?php echo $ytDESC10 ?><?php endif ; ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        <?php if(!empty($ytID11)):?>
        <div>
          <iframe width="100%" height="100%" src="<?php echo $IFMurl.$ytID11.$VIDparams ?>" frameborder="0" allowfullscreen></iframe>
          <div u="thumb">
            <img class="i" src="<?php echo $THMurl.$ytID11.$THMext ?>" alt="<?php echo $ytTITLE11 ?>" />
            <div class="t"><?php if($ytTITLE_custom11==true): ?><?php echo $ytTITLE_custom11 ?><?php else:?><?php echo $ytTITLE11 ?><?php endif ; ?><?php echo '&nbsp;'.'('.'<b>'.$ytVIEWCOUNT11.'</b>'.')' ?></div>
            <div class="c"><?php if($ytDESC_custom11==true): ?><?php echo $ytDESC_custom11 ?><?php else:?><?php echo $ytDESC11 ?><?php endif ; ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        <?php if(!empty($ytID12)):?>
        <div>
          <iframe width="100%" height="100%" src="<?php echo $IFMurl.$ytID12.$VIDparams ?>" frameborder="0" allowfullscreen></iframe>
          <div u="thumb">
            <img class="i" src="<?php echo $THMurl.$ytID12.$THMext ?>" alt="<?php echo $ytTITLE12 ?>" />
            <div class="t"><?php if($ytTITLE_custom12==true): ?><?php echo $ytTITLE_custom12 ?><?php else:?><?php echo $ytTITLE12 ?><?php endif ; ?><?php echo '&nbsp;'.'('.'<b>'.$ytVIEWCOUNT12.'</b>'.')' ?></div>
            <div class="c"><?php if($ytDESC_custom12==true): ?><?php echo $ytDESC_custom12 ?><?php else:?><?php echo $ytDESC12 ?><?php endif ; ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        <?php if(!empty($ytID13)):?>
        <div>
          <iframe width="100%" height="100%" src="<?php echo $IFMurl.$ytID13.$VIDparams ?>" frameborder="0" allowfullscreen></iframe>
          <div u="thumb">
            <img class="i" src="<?php echo $THMurl.$ytID13.$THMext ?>" alt="<?php echo $ytTITLE13 ?>" />
            <div class="t"><?php if($ytTITLE_custom13==true): ?><?php echo $ytTITLE_custom13 ?><?php else:?><?php echo $ytTITLE13 ?><?php endif ; ?><?php echo '&nbsp;'.'('.'<b>'.$ytVIEWCOUNT13.'</b>'.')' ?></div>
            <div class="c"><?php if($ytDESC_custom13==true): ?><?php echo $ytDESC_custom13 ?><?php else:?><?php echo $ytDESC13 ?><?php endif ; ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        <?php if(!empty($ytID14)):?>
        <div>
          <iframe width="100%" height="100%" src="<?php echo $IFMurl.$ytID14.$VIDparams ?>" frameborder="0" allowfullscreen></iframe>
          <div u="thumb">
            <img class="i" src="<?php echo $THMurl.$ytID14.$THMext ?>" alt="<?php echo $ytTITLE14 ?>" />
            <div class="t"><?php if($ytTITLE_custom14==true): ?><?php echo $ytTITLE_custom14 ?><?php else:?><?php echo $ytTITLE14 ?><?php endif ; ?><?php echo '&nbsp;'.'('.'<b>'.$ytVIEWCOUNT14.'</b>'.')' ?></div>
            <div class="c"><?php if($ytDESC_custom14==true): ?><?php echo $ytDESC_custom14 ?><?php else:?><?php echo $ytDESC14 ?><?php endif ; ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        <?php if(!empty($ytID15)):?>
        <div>
          <iframe width="100%" height="100%" src="<?php echo $IFMurl.$ytID15.$VIDparams ?>" frameborder="0" allowfullscreen></iframe>
          <div u="thumb">
            <img class="i" src="<?php echo $THMurl.$ytID15.$THMext ?>" alt="<?php echo $ytTITLE15 ?>" />
            <div class="t"><?php if($ytTITLE_custom15==true): ?><?php echo $ytTITLE_custom15 ?><?php else:?><?php echo $ytTITLE15 ?><?php endif ; ?><?php echo '&nbsp;'.'('.'<b>'.$ytVIEWCOUNT15.'</b>'.')' ?></div>
            <div class="c"><?php if($ytDESC_custom15==true): ?><?php echo $ytDESC_custom15 ?><?php else:?><?php echo $ytDESC15 ?><?php endif ; ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        <?php if(!empty($ytID16)):?>
        <div>
          <iframe width="100%" height="100%" src="<?php echo $IFMurl.$ytID16.$VIDparams ?>" frameborder="0" allowfullscreen></iframe>
          <div u="thumb">
            <img class="i" src="<?php echo $THMurl.$ytID16.$THMext ?>" alt="<?php echo $ytTITLE16 ?>" />
            <div class="t"><?php if($ytTITLE_custom16==true): ?><?php echo $ytTITLE_custom16 ?><?php else:?><?php echo $ytTITLE16 ?><?php endif ; ?><?php echo '&nbsp;'.'('.'<b>'.$ytVIEWCOUNT16.'</b>'.')' ?></div>
            <div class="c"><?php if($ytDESC_custom16==true): ?><?php echo $ytDESC_custom16 ?><?php else:?><?php echo $ytDESC16 ?><?php endif ; ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        <?php if(!empty($ytID17)):?>
        <div>
          <iframe width="100%" height="100%" src="<?php echo $IFMurl.$ytID17.$VIDparams ?>" frameborder="0" allowfullscreen></iframe>
          <div u="thumb">
            <img class="i" src="<?php echo $THMurl.$ytID17.$THMext ?>" alt="<?php echo $ytTITLE17 ?>" />
            <div class="t"><?php if($ytTITLE_custom17==true): ?><?php echo $ytTITLE_custom17 ?><?php else:?><?php echo $ytTITLE17 ?><?php endif ; ?><?php echo '&nbsp;'.'('.'<b>'.$ytVIEWCOUNT17.'</b>'.')' ?></div>
            <div class="c"><?php if($ytDESC_custom17==true): ?><?php echo $ytDESC_custom17 ?><?php else:?><?php echo $ytDESC17 ?><?php endif ; ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        <?php if(!empty($ytID18)):?>
        <div>
          <iframe width="100%" height="100%" src="<?php echo $IFMurl.$ytID18.$VIDparams ?>" frameborder="0" allowfullscreen></iframe>
          <div u="thumb">
            <img class="i" src="<?php echo $THMurl.$ytID18.$THMext ?>" alt="<?php echo $ytTITLE18 ?>" />
            <div class="t"><?php if($ytTITLE_custom18==true): ?><?php echo $ytTITLE_custom18 ?><?php else:?><?php echo $ytTITLE18 ?><?php endif ; ?><?php echo '&nbsp;'.'('.'<b>'.$ytVIEWCOUNT18.'</b>'.')' ?></div>
            <div class="c"><?php if($ytDESC_custom18==true): ?><?php echo $ytDESC_custom18 ?><?php else:?><?php echo $ytDESC18 ?><?php endif ; ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        <?php if(!empty($ytID19)):?>
        <div>
          <iframe width="100%" height="100%" src="<?php echo $IFMurl.$ytID19.$VIDparams ?>" frameborder="0" allowfullscreen></iframe>
          <div u="thumb">
            <img class="i" src="<?php echo $THMurl.$ytID19.$THMext ?>" alt="<?php echo $ytTITLE19 ?>" />
            <div class="t"><?php if($ytTITLE_custom19==true): ?><?php echo $ytTITLE_custom19 ?><?php else:?><?php echo $ytTITLE19 ?><?php endif ; ?><?php echo '&nbsp;'.'('.'<b>'.$ytVIEWCOUNT19.'</b>'.')' ?></div>
            <div class="c"><?php if($ytDESC_custom19==true): ?><?php echo $ytDESC_custom19 ?><?php else:?><?php echo $ytDESC19 ?><?php endif ; ?></div>
          </div>
        </div>
        <?php endif; ?>
        
        <?php if(!empty($ytID20)):?>
        <div>
          <iframe width="100%" height="100%" src="<?php echo $IFMurl.$ytID20.$VIDparams ?>" frameborder="0" allowfullscreen></iframe>
          <div u="thumb">
            <img class="i" src="<?php echo $THMurl.$ytID20.$THMext ?>" alt="<?php echo $ytTITLE20 ?>" />
            <div class="t"><?php if($ytTITLE_custom20==true): ?><?php echo $ytTITLE_custom20 ?><?php else:?><?php echo $ytTITLE20 ?><?php endif ; ?><?php echo '&nbsp;'.'('.'<b>'.$ytVIEWCOUNT20.'</b>'.')' ?></div>
            <div class="c"><?php if($ytDESC_custom20==true): ?><?php echo $ytDESC_custom20 ?><?php else:?><?php echo $ytDESC20 ?><?php endif ; ?></div>
          </div>
        </div>
        <?php endif; ?>


      </div>
      <!-- Slides Container End -->
      
      <!-- ThumbnailNavigator Skin Begin -->
      <div u="thumbnavigator" class="odesignt11" id="slider1_thumbnavigator" style="position: absolute; width: <?php echo $tab_width.'px' ?>; height: <?php echo $full_container_height.'px' ?>; <?php if($tab_orientation==1): ?>left:<?php echo $full_container_width.'px' ?>;<?php elseif($tab_orientation_LR==1): ?>left:0px;<?php else:?>left:<?php echo $slide_width.'px' ?>;<?php endif ; ?> top:0px;"> 
        <!-- Thumbnail Item Skin Begin -->
        <div u="slides" style="cursor: move; <?php if($tab_orientation==1): ?>left:<?php echo '-'.$full_container_width.'px' ?> !important; top: auto !important; bottom: 0px !important;<?php else:?>left: inherit; top: inherit; bottom: inherit;<?php endif ; ?>">
          <div u="prototype" class="p" style="position: absolute; width: <?php echo $tab_width.'px' ?>; height: 100px; top: 0; left: 0;">
            <div u="thumbnailtemplate" style=" width: 100%; height: 100%; border: none;position:absolute; top: 0; left: 0;"></div>
          </div>
        </div>
        <!-- Thumbnail Item Skin End --> 
      </div>
      <!-- ThumbnailNavigator Skin End -->

</div>
<!-- odesign Slider End --> 
    
</div>
</div>

<style type="text/css">
	.odesignt11 .p { background: <?php echo $tab_color ?>;}
	.odesignt11 .pav, .odesignt11 .pdn { background: <?php echo $tab_color_active ?>;}
	.odesignt11 .p:hover, .odesignt11 .phv, .odesignt11 .pav:hover { background: <?php echo $tab_color_hover ?>;}
	.odesignt11 .t { color: <?php echo $heading_color ?>; font-size: <?php echo $heading_fontsize.'px' ?>; text-align: <?php echo $heading_textalign ?>;}
	.odesignt11 .c { color: <?php echo $desc_color ?>; font-size: <?php echo $desc_fontsize.'px' ?>; text-align: <?php echo $desc_textalign ?>;}
	iframe { transition: all 0.3s linear;}
	/*iframe:hover { -webkit-filter: grayscale(1); -moz-filter: grayscale(1); -ms-filter: grayscale(1); -o-filter: grayscale(1);}*/
</style>
<!--<script type="text/javascript">
jQuery.noConflict();
jQuery(document).ready(function(){
    jQuery(".tab_slider").hover(function(){
		jQuery(this).addClass("add");
        },function(){
		jQuery(this).removeClass("add");
    });
	jQuery(".tab_slider").hover(function(){
        jQuery(this).css("-webkit-filter", "grayscale(0.8)");
    });
});
</script>-->
<script type="text/javascript">
	jQuery.noConflict();
	jQuery(document).ready(function ($) {
		var options = {
		//Slide Options Begin
		$AutoPlay: <?php echo $autoplay_slider ?>,
		$AutoPlaySteps: <?php echo $autoplay_steps ?>,
		$AutoPlayInterval: <?php echo $slide_interval ?>,
		$PauseOnHover: <?php echo $Pause_on_hover ?>,
		$ArrowKeyNavigation: <?php echo $keyboard_nav ?>,
		$SlideDuration: <?php echo $trans_speed ?>,
		$MinDragOffsetToSlide: 20,
		$SlideSpacing: 0,
		$DisplayPieces: 1,
		$ParkingPosition: 0,
		$UISearchMode: 1,
		$PlayOrientation: <?php echo $slide_direction ?>,
		$DragOrientation: <?php echo $drag_orientation ?>,
		//Slide Options End
		
		//Navigator Options Begin
		$ThumbnailNavigatorOptions: {
		$Class: $odesignThumbnailNavigator$,
		$ChanceToShow: <?php echo $tab_status ?>,
		$Loop: <?php echo $tab_loop ?>,
		$AutoCenter: 3,
		$Lanes: 1,
		$SpacingX: <?php if($tab_orientation==1): ?><?php echo $tab_spacing_X ?><?php else:?>null<?php endif ; ?>,
		$SpacingY: <?php if($tab_orientation==2): ?><?php echo $tab_spacing_Y ?><?php else:?>null<?php endif ; ?>,
		$DisplayPieces: <?php echo $tab_count ?>,
		$ParkingPosition: 0,
		$Orientation: <?php echo $tab_orientation ?>,
		$DisableDrag: <?php echo $disable_drag ?>,
		}
		};
				
		var windowWidth = $(window).width();

        if (windowWidth <= <?php echo $disable_tab_mb ?>) {

            $("#slider1_thumbnavigator").remove();
            $("#slider1_container").width("<?php echo $full_container_width.'px' ?>");
			$(".slide-width").width("<?php echo $full_container_width.'px' ?>");
            $("#slider1_container #theSlides").css("left",0);
        }

		var odesign_slider1 = new $odesignSlider$("slider1_container", options);
		//Navigator Options End
		
		//responsive code Begin
		function ScaleSlider() {
		var parentWidth = odesign_slider1.$Elmt.parentNode.clientWidth;
		if (parentWidth) {
		var sliderWidth = parentWidth;

		sliderWidth = Math.min(sliderWidth, <?php echo $full_container_width ?>);
		odesign_slider1.$ScaleWidth(sliderWidth);
		}
		else
		window.setTimeout(ScaleSlider, 30);
		}
		ScaleSlider();
		
		$(window).bind("load", ScaleSlider);
		$(window).bind("resize", ScaleSlider);
		$(window).bind("orientationchange", ScaleSlider);
		//responsive code End
		});
</script>

<?php } else { ?>
	<p><?php echo JText::_('Please Enter Any File and Information'); ?></p>
<?php } ?>