<h5>&copy; <?php
    $d = date('d');
    $j = date('j');
    $l = date('l');
    $m = date('m');
    $z = date('z');
    $y = date('Y');
    date_default_timezone_set('UTC');
    echo $y . ' Fredrik Martinsson ';
    $mo = date('m') == 11; if($mo) { echo '<div class="pull-right" style="margin-bottom: 15px;">
        <a href="http://moteam.co/ifs-linkoeping" target="_blank"><img src="/images/movember-foundation-header-logo.png" height="30" /></a>
    </div>'; }
    $fr = $d == 13 && $l == 'Friday'; if($fr) { echo '<div class="pull-right" style="margin-bottom: 15px;">It\'s JASON day!&nbsp;&nbsp;<img src="https://png.icons8.com/jason-voorhees/ultraviolet/40" title="Jason Voorhees" width="40" height="40"></div>'; } 
    $sw = $j == 4 && $m == 5; if($sw) { echo '<div class="pull-right" style="margin-bottom: 15px;">May the 4th be with you!&nbsp;&nbsp;<i class="fa fa-rebel"></i></div>'; } 
    $sw2 = $j == 5 && $m == 5; if($sw2) { echo '<div class="pull-right" style="margin-bottom: 15px;">Revenge of the 5th!&nbsp;&nbsp;<i class="fa fa-empire"></i></div>'; } 
    $tow = $j == 25 && $m == 5; if($tow) { echo '<div class="pull-right" style="margin-bottom: 15px;">DON\'T PANIC!</div>'; } 
    $pi = $d == 19 && $m == 9; if($pi) { echo '<div class="pull-right" style="margin-bottom: 15px;">Happy ITLAP day!&nbsp;&nbsp;<i class="fa fa-odnoklassniki-square"></i></div>'; } 
    $cd = $z == 256; if($cd) { echo '<div class="pull-right" style="margin-bottom: 15px;">Happy CODING day!&nbsp;&nbsp;<i class="fa fa-code"></i></div>'; } ?> 
</h5>
