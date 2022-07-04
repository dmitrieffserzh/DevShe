@extends('app')

@section('h1', $heading ?? 'Личные данные')

@section('content')
    {{--        <div class="metro-wrapper">--}}


    {{--        <div class="marks">--}}
    {{--            <img src="/images/metro_map_copy.png" alt="" class="metro" />--}}
    {{--        </div>--}}

    {{--        <script type="text/template" id="mark-template">--}}
    {{--            <div class="mark">--}}
    {{--                <div class="mark__name"><%= name %></div>--}}
    {{--            </div>--}}
    {{--        </script>--}}
    {{--        </div>--}}
<!--
    <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
         x="0px" y="0px" viewBox="0 0 1660.7 1951.5" style="enable-background:new 0 0 1660.7 1951.5;"
         xml:space="preserve" ng-click="click($event)">
<style type="text/css" id="dvhb_metro_style_inline">
    .st0 {
        fill: none;
        stroke: #D8AC9D;
        stroke-width: 7.9994;
        stroke-miterlimit: 10;
    }

    .st1 {
        fill: none;
        stroke: #B59E99;
        stroke-width: 7.9994;
        stroke-miterlimit: 10;
    }

    .st2 {
        fill: none;
        stroke: #D3D3D5;
        stroke-width: 7.9994;
        stroke-miterlimit: 10;
    }

    .st3 {
        fill: none;
        stroke: #CFE58F;
        stroke-width: 7.9994;
        stroke-miterlimit: 10;
    }

    .st4 {
        fill: none;
        stroke: #95D59F;
        stroke-width: 7.9994;
        stroke-miterlimit: 10;
    }

    .st5 {
        fill: none;
        stroke: #C28FCC;
        stroke-width: 7.9994;
        stroke-miterlimit: 10;
    }

    .st6 {
        fill: none;
        stroke: #FABE94;
        stroke-width: 7.9994;
        stroke-miterlimit: 10;
    }

    .st7 {
        fill: none;
        stroke: #F58C84;
        stroke-width: 7.9994;
        stroke-miterlimit: 10;
    }

    .st8 {
        fill: none;
        stroke: #FFDF80;
        stroke-width: 7.9994;
        stroke-miterlimit: 10;
    }

    .st9 {
        fill: none;
        stroke: #62BFF8;
        stroke-width: 7.9994;
        stroke-miterlimit: 10;
    }

    .st10 {
        fill: none;
        stroke: #8FE7FF;
        stroke-width: 7.9994;
        stroke-miterlimit: 10;
    }

    .st11 {
        fill: none;
        stroke: #ACBFE3;
        stroke-width: 7.9994;
        stroke-miterlimit: 10;
    }

    .st12 {
        fill: none;
        stroke: #9CE8E8;
        stroke-width: 7.9994;
        stroke-miterlimit: 10;
    }

    .st13 {
        fill: none;
        stroke: #B59E99;
        stroke-width: 9;
        stroke-miterlimit: 10;
    }

    .st14 {
        fill: none;
        stroke: #FFFFFF;
        stroke-width: 2.6;
        stroke-miterlimit: 10;
    }

    .st15 {
        fill: none;
        stroke: #D3D3D5;
        stroke-width: 9;
        stroke-miterlimit: 10;
    }

    .st16 {
        fill: none;
        stroke: #62BFF8;
        stroke-width: 9;
        stroke-miterlimit: 10;
    }

    .st17 {
        fill: none;
        stroke: #C28FCC;
        stroke-width: 9;
        stroke-miterlimit: 10;
    }

    .st18 {
        fill: none;
        stroke: #95D59F;
        stroke-width: 9;
        stroke-miterlimit: 10;
    }

    .st19 {
        fill: none;
        stroke: #FABE94;
        stroke-width: 9;
        stroke-miterlimit: 10;
    }

    .st20 {
        fill: none;
        stroke: #F58C84;
        stroke-width: 9;
        stroke-miterlimit: 10;
    }

    .st21 {
        fill: none;
        stroke: #FFDF80;
        stroke-width: 9;
        stroke-miterlimit: 10;
    }

    .st22 {
        fill: none;
        stroke: #8FE7FF;
        stroke-width: 9;
        stroke-miterlimit: 10;
    }

    .st23 {
        fill: none;
        stroke: #D8AC9D;
        stroke-width: 9;
        stroke-miterlimit: 10;
    }

    .st24 {
        fill: none;
        stroke: #CFE58F;
        stroke-width: 9;
        stroke-miterlimit: 10;
    }

    .st25 {
        fill: none;
        stroke: #FFCB32;
        stroke-width: 9;
        stroke-miterlimit: 10;
    }

    .st26 {
        font-family: 'Core Sans C 65';
    }

    .st27 {
        font-size: 20px;
    }

    .st28 {
        fill: none;
        stroke: #C28FCC;
        stroke-width: 8;
        stroke-miterlimit: 10;
    }

    .st29 {
        fill: #8E479B;
    }

    .st30 {
        display: none;
        enable-background: new;
    }

    .st31 {
        display: inline;
    }

    .st32 {
        fill: #C28FCC;
    }

    .st33 {
        fill: #FFFFFF;
    }

    .st34 {
        fill: #FABE94;
    }

    .st35 {
        fill: #F58232;
    }

    .st36 {
        fill: none;
        stroke: #95D59F;
        stroke-width: 8;
        stroke-miterlimit: 10;
    }

    .st37 {
        fill: #4CB85E;
    }

    .st38 {
        fill: #95D59F;
    }

    .st39 {
        fill: #D8AC9D;
    }

    .st40 {
        fill: #9D573E;
    }

    .st41 {
        fill: #F58C84;
    }

    .st42 {
        fill: #ED3326;
    }

    .st43 {
        fill: #B59E99;
    }

    .st44 {
        fill: #7A655F;
    }

    .st45 {
        fill: #ACBFE3;
    }

    .st46 {
        fill: none;
        stroke: #ACBFE2;
        stroke-width: 8;
        stroke-miterlimit: 10;
    }

    .st47 {
        display: none;
        fill: #ACBFE3;
    }

    .st48 {
        fill: #8FE7FF;
    }

    .st49 {
        fill: #00BEF0;
    }

    .st50 {
        fill: none;
        stroke: #8FE7FF;
        stroke-width: 8;
        stroke-miterlimit: 10;
    }

    .st51 {
        fill: none;
        stroke: #62BFF8;
        stroke-width: 8;
        stroke-miterlimit: 10;
    }

    .st52 {
        fill: #0078BF;
    }

    .st53 {
        fill: #62BFF8;
    }

    .st54 {
        fill: #FFDF80;
    }

    .st55 {
        fill: #FFCB35;
    }

    .st56 {
        fill: none;
        stroke: #FFDF80;
        stroke-width: 8;
        stroke-miterlimit: 10;
    }

    .st57 {
        fill: #CFE58F;
    }

    .st58 {
        fill: #B4D445;
    }

    .st59 {
        fill: none;
        stroke: #CFE58F;
        stroke-width: 8;
        stroke-miterlimit: 10;
    }

    .st60 {
        fill: #D3D3D5;
    }

    .st61 {
        fill: #A0A2A3;
    }

    .st62 {
        fill: #9CE8E8;
    }

    .st63 {
        fill: #79CDCD;
    }

    .st64 {
        fill: none;
        stroke: #9CE8E8;
        stroke-width: 8;
        stroke-miterlimit: 10;
    }

    .st65 {
        fill: none;
        stroke: #D3D3D5;
        stroke-width: 8;
        stroke-miterlimit: 10;
    }

    .st66 {
        fill: none;
        stroke: #FABE94;
        stroke-width: 8;
        stroke-miterlimit: 10;
    }

    .st67 {
        fill: none;
        stroke: #F58C84;
        stroke-width: 8;
        stroke-miterlimit: 10;
    }

    .st68 {
        fill: none;
        stroke: #B59E99;
        stroke-width: 8;
        stroke-miterlimit: 10;
    }

    .metro-station {
        cursor: pointer;
        transition: fill .3s Linear;
    }

    .metro-station:hover {
        fill: #df0031;
    }
</style>
        <g>
            <g>
                <circle class="st0" cx="844.7" cy="792.6" r="354.6"></circle>
                <ellipse class="st1" cx="844.7" cy="792.6" rx="611.6" ry="606"></ellipse>
                <path class="st2" d="M767,12.4v164c0,9.8-3.9,19.1-10.8,26.1l-77.1,77.2c-6.9,6.9-10.8,16.3-10.8,26.1v111.5
			c0,9.8,3.9,19.1,10.8,26.1l155.7,155.7c14.4,14.4,14.4,37.7,0,52.1L689.2,796.8c-6.9,6.9-10.8,16.3-10.8,26.1v96.4
			c0,9.6,3.7,18.8,10.4,25.7l51.8,53.2c6.7,6.9,10.4,16.1,10.4,25.7v812.2"></path>
                <path class="st3" d="M742.3,248.6h30.2c9.7,0,18.9,3.8,25.8,10.6l36.4,35.8c7,6.9,11,16.4,11,26.3v256c0,18.8,15.2,34,34,34h160.5
			c9.8,0,19.1,3.9,26.1,10.8l233.1,233.1c6.9,6.9,10.8,16.3,10.8,26.1v93.4c0,9.8-3.9,19.1-10.8,26.1l-74,74
			c-6.9,6.9-10.8,16.3-10.8,26.1v709.9"></path>
                <path class="st4" d="M1345,1826h-340.1c-12.5,0-22.7-10.2-22.7-22.7V931.9c0-9.7-3.8-19-10.6-25.9l-52.9-53.6
			c-6.9-7-16.4-11-26.2-11h-43.9c-9.8,0-19.1-3.9-26-10.8L476.9,485.9c-6.9-6.9-10.8-16.3-10.8-26.1V101.1"></path>
                <path class="st5" d="M260,101.9v394.6c0,9.8,3.9,19.1,10.8,26.1l169.9,169.9c6.9,6.9,16.3,10.8,26.1,10.8h488.6
			c9.8,0,19.1,3.9,26.1,10.8l455.3,455.3c6.9,6.9,10.8,16.3,10.8,26.1v406"></path>
                <path class="st6" d="M543.5,1746l-15.8-17c-6.3-6.8-9.8-15.8-9.8-25.1v-459.7c0-9.7,3.9-19.1,10.7-26l164.5-165.4
			c6.9-7,16.3-10.9,26.1-10.9h160.7c9.7,0,19.1-3.8,26-10.7l104.3-103.5c7-6.9,10.9-16.3,10.9-26.2v-215c0-9.8-3.9-19.1-10.8-26.1
			l-59-59c-6.9-6.9-10.8-16.3-10.8-26.1v-80.4c0-9.8,3.9-19.1,10.8-26.1l90.7-90.7c6.9-6.9,10.8-16.3,10.8-26.1V12.3"></path>
                <path class="st7" d="M1299.2,322.6v26.1c0,9.8-3.9,19.1-10.8,26.1L702.2,961c-6.9,6.9-16.3,10.8-26.1,10.8H493.7
			c-9.8,0-19.2,3.9-26.1,10.9l-145.2,146.1c-6.9,6.9-10.7,16.2-10.7,26v442.7"></path>
                <path class="st8" d="M1544.9,605.5l-390.2,390.2c-6.9,6.9-16.3,10.8-26.1,10.8H969.9"></path>
                <path class="st9" d="M1446.6,272.3v171.6c0,9.7-3.8,19.1-10.7,26l-383.4,386.3c-6.9,7-16.3,10.9-26.2,10.9H445.9
			c-9.8,0-19.1,3.9-26.1,10.8l-159.7,159.7c-6.9,6.9-16.3,10.8-26.1,10.8H44.9c-12.5,0-22.7-10.2-22.7-22.7V679.2
			c0-6,2.4-11.8,6.6-16L38,654c4.3-4.3,6.6-10,6.6-16V267.1"></path>
                <path class="st10" d="M64,665.5v318.3c0,12.5,10.2,22.7,22.7,22.7H216c9.8,0,19.1-3.9,26.1-10.8l169.1-169.3
			c6.9-6.9,16.3-10.8,26.1-10.8H617c9.8,0,19.1,3.9,26.1,10.8l72.3,72.3"></path>
                <line class="st10" x1="208.9" y1="815.6" x2="451.7" y2="815.6"></line>
                <path class="st11"
                      d="M538.3,1770.4h160.8c12.5,0,22.7,10.2,22.7,22.7v65c0,12.5-10.2,22.7-22.7,22.7H300.2"></path>
                <path class="st12" d="M730.5,1588.9h225.6c9.6,0,18.8-3.7,25.7-10.4l24.3-23.6"></path>
                <path class="st8" d="M328.3,848.9L146,1031.2c-4.3,4.3-6.6,10-6.6,16v217"></path>
            </g>
            <g>
                <g>
                    <line class="st13" x1="1298.3" y1="327.5" x2="1235.4" y2="328.1"></line>
                    <line class="st14" x1="1298.3" y1="327.5" x2="1235.4" y2="328.1"></line>
                </g>
                <g>
                    <line class="st13" x1="1275" y1="390.5" x2="1310.2" y2="400.9"></line>
                    <line class="st14" x1="1275" y1="390.5" x2="1310.2" y2="400.9"></line>
                </g>
                <g>
                    <line class="st13" x1="1052.6" y1="166.8" x2="1010.7" y2="208.7"></line>
                    <line class="st14" x1="1052.6" y1="166.8" x2="1010.7" y2="208.7"></line>
                </g>
                <g>
                    <line class="st13" x1="767.2" y1="166.8" x2="787.7" y2="187.7"></line>
                    <line class="st14" x1="767.2" y1="166.8" x2="787.7" y2="187.7"></line>
                </g>
                <g>
                    <line class="st13" x1="1410.3" y1="497.1" x2="1409.4" y2="556.9"></line>
                    <line class="st14" x1="1410.3" y1="497.1" x2="1409.4" y2="556.9"></line>
                </g>
                <g>
                    <line class="st13" x1="1456.1" y1="755.7" x2="1396.4" y2="755.7"></line>
                    <line class="st14" x1="1456.1" y1="755.7" x2="1396.4" y2="755.7"></line>
                </g>
                <g>
                    <line class="st13" x1="1214.9" y1="1236" x2="1191.4" y2="1291.4"></line>
                    <line class="st14" x1="1214.9" y1="1236" x2="1191.4" y2="1291.4"></line>
                </g>
                <g>
                    <line class="st13" x1="981.7" y1="1322.9" x2="1005.4" y2="1377.1"></line>
                    <line class="st14" x1="981.7" y1="1322.9" x2="1005.4" y2="1377.1"></line>
                </g>
                <g>
                    <line class="st13" x1="517.7" y1="1290.4" x2="543.6" y2="1320.7"></line>
                    <line class="st14" x1="517.7" y1="1290.4" x2="543.6" y2="1320.7"></line>
                </g>
                <g>
                    <line class="st13" x1="354.6" y1="1097.2" x2="354.6" y2="1156.8"></line>
                    <line class="st14" x1="354.6" y1="1097.2" x2="354.6" y2="1156.8"></line>
                </g>
                <g>
                    <line class="st13" x1="254.1" y1="952.3" x2="254.7" y2="982.6"></line>
                    <line class="st14" x1="254.1" y1="952.3" x2="254.7" y2="982.6"></line>
                </g>
                <g>
                    <line class="st13" x1="213.9" y1="816.9" x2="235.9" y2="841.9"></line>
                    <line class="st14" x1="213.9" y1="816.9" x2="235.9" y2="841.9"></line>
                </g>
                <g>
                    <line class="st13" x1="330" y1="583.6" x2="264.6" y2="597"></line>
                    <line class="st14" x1="330" y1="583.6" x2="264.6" y2="597"></line>
                </g>
                <g>
                    <line class="st13" x1="315.6" y1="487.6" x2="259.9" y2="463.1"></line>
                    <line class="st14" x1="315.6" y1="487.6" x2="259.9" y2="463.1"></line>
                </g>
                <g>
                    <line class="st13" x1="434.3" y1="342.8" x2="466.3" y2="278.9"></line>
                    <line class="st14" x1="434.3" y1="342.8" x2="466.3" y2="278.9"></line>
                </g>
                <g>
                    <line class="st15" x1="741.2" y1="218" x2="741.2" y2="248.6"></line>
                    <line class="st14" x1="741.2" y1="218" x2="741.2" y2="248.6"></line>
                </g>
                <g>
                    <line class="st15" x1="727.8" y1="458.8" x2="727.8" y2="489.3"></line>
                    <line class="st14" x1="727.8" y1="458.8" x2="727.8" y2="489.3"></line>
                </g>
                <g>
                    <line class="st15" x1="847.5" y1="574.2" x2="819.6" y2="585.4"></line>
                    <line class="st14" x1="847.5" y1="574.2" x2="819.6" y2="585.4"></line>
                </g>
                <g>
                    <line class="st15" x1="770.6" y1="1139.6" x2="751.3" y2="1162.8"></line>
                    <line class="st14" x1="770.6" y1="1139.6" x2="751.3" y2="1162.8"></line>
                </g>
                <g>
                    <line class="st15" x1="729.9" y1="1588.7" x2="751.3" y2="1611.6"></line>
                    <line class="st14" x1="729.9" y1="1588.7" x2="751.3" y2="1611.6"></line>
                </g>
                <g>
                    <line class="st15" x1="751.3" y1="1837.9" x2="720.8" y2="1837.9"></line>
                    <line class="st14" x1="751.3" y1="1837.9" x2="720.8" y2="1837.9"></line>
                </g>
                <g>
                    <line class="st16" x1="63.9" y1="667.2" x2="44.8" y2="645.5"></line>
                    <line class="st14" x1="63.9" y1="667.2" x2="44.8" y2="645.5"></line>
                </g>
                <g>
                    <line class="st16" x1="138.5" y1="1069.6" x2="158.9" y2="1048.5"></line>
                    <line class="st14" x1="138.5" y1="1069.6" x2="158.9" y2="1048.5"></line>
                </g>
                <g>
                    <line class="st16" x1="871" y1="867.8" x2="859.3" y2="841.8"></line>
                    <line class="st14" x1="871" y1="867.8" x2="859.3" y2="841.8"></line>
                </g>
                <g>
                    <line class="st17" x1="497.1" y1="726.5" x2="525" y2="704"></line>
                    <line class="st14" x1="497.1" y1="726.5" x2="525" y2="704"></line>
                </g>
                <g>
                    <line class="st17" x1="931.9" y1="731.8" x2="920.7" y2="703.7"></line>
                    <line class="st14" x1="931.9" y1="731.8" x2="920.7" y2="703.7"></line>
                </g>
                <g>
                    <line class="st17" x1="1020" y1="783.5" x2="1050.1" y2="783.8"></line>
                    <line class="st14" x1="1020" y1="783.5" x2="1050.1" y2="783.8"></line>
                </g>
                <g>
                    <line class="st17" x1="1266.2" y1="1031.8" x2="1299.2" y2="1032"></line>
                    <line class="st14" x1="1266.2" y1="1031.8" x2="1299.2" y2="1032"></line>
                </g>
                <g>
                    <line class="st18" x1="552.4" y1="590" x2="552.6" y2="560.2"></line>
                    <line class="st14" x1="552.4" y1="590" x2="552.6" y2="560.2"></line>
                </g>
                <g>
                    <line class="st18" x1="859.3" y1="841.8" x2="848.5" y2="815"></line>
                    <line class="st14" x1="859.3" y1="841.8" x2="848.5" y2="815"></line>
                </g>
                <g>
                    <line class="st18" x1="981.7" y1="1135.8" x2="998.3" y2="1110.3"></line>
                    <line class="st14" x1="981.7" y1="1135.8" x2="998.3" y2="1110.3"></line>
                </g>
                <g>
                    <line class="st18" x1="1003.8" y1="1561.7" x2="981.7" y2="1540.4"></line>
                    <line class="st14" x1="1003.8" y1="1561.7" x2="981.7" y2="1540.4"></line>
                </g>
                <g>
                    <line class="st18" x1="1192.8" y1="1827.4" x2="1215.2" y2="1805.9"></line>
                    <line class="st14" x1="1192.8" y1="1827.4" x2="1215.2" y2="1805.9"></line>
                </g>
                <g>
                    <line class="st19" x1="984.3" y1="467.4" x2="984.5" y2="437.7"></line>
                    <line class="st14" x1="984.3" y1="467.4" x2="984.5" y2="437.7"></line>
                </g>
                <g>
                    <line class="st19" x1="635.8" y1="1109.9" x2="636" y2="1080.2"></line>
                    <line class="st14" x1="635.8" y1="1109.9" x2="636" y2="1080.2"></line>
                </g>
                <g>
                    <line class="st19" x1="539.9" y1="1769.9" x2="540" y2="1740.1"></line>
                    <line class="st14" x1="539.9" y1="1769.9" x2="540" y2="1740.1"></line>
                </g>
                <g>
                    <line class="st20" x1="1123.4" y1="571.4" x2="1123.6" y2="541.7"></line>
                    <line class="st14" x1="1123.4" y1="571.4" x2="1123.6" y2="541.7"></line>
                </g>
                <g>
                    <line class="st20" x1="552.6" y1="992.7" x2="515.1" y2="972.3"></line>
                    <line class="st14" x1="552.6" y1="992.7" x2="515.1" y2="972.3"></line>
                </g>
                <g>
                    <line class="st21" x1="1282.3" y1="838.7" x2="1312.1" y2="838.9"></line>
                    <line class="st14" x1="1282.3" y1="838.7" x2="1312.1" y2="838.9"></line>
                </g>
                <g>
                    <line class="st21" x1="315.1" y1="816.6" x2="328.4" y2="848.9"></line>
                    <line class="st14" x1="315.1" y1="816.6" x2="328.4" y2="848.9"></line>
                </g>
                <g>
                    <path class="st22" d="M450.2,866.8c-4.1-2.4-7.7-5.9-10.3-10.4c-8.1-13.9-3.4-31.7,10.5-39.8"></path>
                    <path class="st16" d="M494.2,840.7c0.4,10.4-4.8,20.6-14.5,26.2c-9.5,5.5-20.7,5.1-29.5-0.1"></path>
                    <path class="st23" d="M450.5,816.6c13.9-8.1,31.7-3.4,39.8,10.5c2.5,4.3,3.8,8.9,3.9,13.6"></path>
                    <path class="st14" d="M439.9,856.4c-5.4-9.3-5.1-20.4-0.1-29.1"></path>
                </g>
                <path class="st14" d="M439.8,827.3c2.5-4.3,6-8,10.6-10.7c13.9-8.1,31.7-3.4,39.8,10.5s3.4,31.7-10.5,39.8
			c-9.7,5.6-21.3,5.1-30.2-0.5c-3.8-2.4-7.2-5.8-9.6-10"></path>
                <g>
                    <path class="st15" d="M732.3,930.8c-5.2,2.9-11.2,4.5-17.5,4.5c-19.9,0-36.1-16.2-36.1-36.1"></path>
                    <path class="st22" d="M731.7,930.4c-9.9-6.9-16.5-18.4-16.5-31.4c0-12.7,6.2-24,15.8-31"></path>
                    <path class="st20" d="M731.8,867.4c11.4,6.1,19.1,18.1,19.1,31.8c0,13.6-7.5,25.4-18.6,31.6"></path>
                    <path class="st16" d="M678.7,899.2c0-19.9,16.2-36.1,36.1-36.1c6.1,0,11.9,1.5,17,4.2"></path>
                    <circle class="st14" cx="714.8" cy="899.2" r="36.1"></circle>
                    <path class="st14" d="M732.3,930.8c-10.3-6.9-17-18.6-17-31.8c0-13.1,6.6-24.6,16.6-31.5"></path>
                </g>
                <g>
                    <path class="st19" d="M1024.5,639.1c-1.4,3.1-3.5,5.8-6.4,8c-9,6.8-21.9,4.9-28.6-4.1"></path>
                    <path class="st20" d="M1002.7,610.5c7.2-1.1,14.8,1.7,19.5,8c4.6,6.2,5.2,14.1,2.3,20.6"></path>
                    <path class="st24" d="M989.5,643c-6.8-9-4.9-21.9,4.1-28.6c2.8-2.1,5.9-3.4,9.2-3.8"></path>
                    <circle class="st14" cx="1005.8" cy="630.8" r="20.4"></circle>
                </g>
                <g>
                    <path class="st24" d="M1153.3,709.8c0.1-3.4,1-6.7,2.7-9.7c5.5-9.6,17.9-13,27.6-7.4"></path>
                    <path class="st16" d="M1184.1,727.3c-6.1,3.7-14.1,4.2-20.7,0.3c-6.6-3.8-10.2-10.8-10-17.8"></path>
                    <path class="st23" d="M1183.6,692.7c9.6,5.5,13,17.9,7.4,27.6c-1.7,3-4.1,5.3-6.8,7.1"></path>
                    <ellipse transform="matrix(0.9606 -0.2778 0.2778 0.9606 -151.1263 353.8131)" class="st14"
                             cx="1172.9" cy="710.2" rx="20.2" ry="20.2"></ellipse>
                </g>
                <g>
                    <path class="st23" d="M1203.7,952.1c-1.9,2.7-4.5,5-7.7,6.4c-10.1,4.7-22,0.4-26.8-9.6"></path>
                    <path class="st25" d="M1188.4,920.3c7.2,0.3,13.9,4.6,17.1,11.5c3.2,6.8,2.2,14.5-1.8,20.3"></path>
                    <path class="st17" d="M1169.2,948.9c-4.7-10.1-0.4-22,9.6-26.8c3.1-1.4,6.4-2.1,9.6-1.9"></path>
                    <ellipse transform="matrix(0.9813 -0.1924 0.1924 0.9813 -158.7281 246.0224)" class="st14"
                             cx="1187.4" cy="940.3" rx="20.1" ry="20.1"></ellipse>
                </g>
                <g>
                    <path class="st19" d="M974.2,1008.6c-3.2,0.9-6.6,0.9-10.1,0.1c-10.8-2.7-17.3-13.6-14.6-24.4"></path>
                    <path class="st25" d="M982.4,974.3c5.3,4.8,7.9,12.3,6,19.8c-1.8,7.3-7.5,12.7-14.3,14.5"></path>
                    <path class="st18" d="M949.5,984.3c2.7-10.8,13.6-17.3,24.4-14.6c3.3,0.8,6.2,2.4,8.6,4.6"></path>
                    <circle class="st14" cx="968.9" cy="989.2" r="20.1"></circle>
                </g>
                <g>
                    <path class="st18" d="M757.7,729.8c-1.4,3.1-3.5,5.8-6.4,8c-9,6.8-21.9,4.9-28.6-4.1"></path>
                    <path class="st15" d="M735.9,701.2c7.2-1.1,14.8,1.7,19.5,8c4.6,6.2,5.2,14.1,2.3,20.6"></path>
                    <path class="st17" d="M722.7,733.7c-6.8-9-4.9-21.9,4.1-28.6c2.8-2.1,5.9-3.4,9.2-3.8"></path>
                    <circle class="st14" cx="739" cy="721.5" r="20.4"></circle>
                </g>
            </g>
        </g>

        <g id="l1">
            <g id="s1l1" class="metro-station disabled" metro-station-name="Планерная">
                <text transform="matrix(1 0 0 1 276.175 104.1076)" class="st26 st27">Планерная</text>
                <line class="st28" x1="246.8" y1="98.7" x2="272.4" y2="98.7"></line>
                <circle class="st29 metro-point" cx="259.7" cy="98.6" r="13.9"></circle>
            </g>
            <g id="s2l1" class="metro-station disabled" metro-station-name="Сходненская">
                <text transform="matrix(1 0 0 1 276.1748 146.5441)" class="st26 st27">Сходненская</text>
                <line class="st28" x1="259.6" y1="137.5" x2="272.1" y2="137.5"></line>
                <circle class="st29 metro-point" cx="259.7" cy="137.5" r="13.9"></circle>
            </g>
            <g id="s3l1" class="metro-station disabled" metro-station-name="Тушинская">
                <text transform="matrix(1 0 0 1 276.1748 191.5656)" class="st26 st27">Тушинская</text>
                <line class="st28" x1="259.6" y1="187.7" x2="272.1" y2="187.7"></line>
                <circle class="st29 metro-point" cx="259.7" cy="187.7" r="13.9"></circle>
            </g>
            <g id="s4l1" class="metro-station" metro-station-name="Спартак">
                <text transform="matrix(1 0 0 1 276.1747 234.6193)" class="st26 st27">Спартак</text>
                <line class="st28" x1="259.6" y1="230.9" x2="272.1" y2="230.9"></line>
                <circle class="st29 metro-point" cx="259.7" cy="231" r="13.9"></circle>
            </g>
            <g id="s5l1" class="metro-station disabled" metro-station-name="Щукинская">
                <text transform="matrix(1 0 0 1 276.1747 278.0519)" class="st26 st27">Щукинская</text>
                <line class="st28" x1="259.6" y1="274.1" x2="272.1" y2="274.1"></line>
                <circle class="st29 metro-point" cx="259.7" cy="273.9" r="13.9"></circle>
            </g>
            <g id="s6l1" class="metro-station disabled" metro-station-name="Октябрьское Поле">
                <text transform="matrix(1 0 0 1 269.174 435.5802)" class="st26 st27">Октябрьское</text>
                <text transform="matrix(1 0 0 1 269.174 453.5802)" class="st26 st27">Поле</text>
                <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Октябрьское Поле</text>
                <circle class="st32" cx="259.9" cy="462.9" r="11.8"></circle>
                <circle class="st33" cx="259.9" cy="462.9" r="4.7"></circle>
                <circle class="st29 metro-point" cx="259.7" cy="462.9" r="13.9"></circle>
            </g>
            <g id="s7l1" class="metro-station disabled" metro-station-name="Полежаевская">
                <text transform="matrix(1 0 0 1 303.7668 565.7773)" class="st26 st27">Полежаевская</text>
                <circle class="st32" cx="330.3" cy="583.2" r="11.8"></circle>
                <circle class="st33" cx="330.3" cy="583.2" r="4.7"></circle>
                <circle class="st29 metro-point" cx="330.3" cy="583.1" r="13.9"></circle>
            </g>
            <g id="s8l1" class="metro-station disabled" metro-station-name="Беговая">
                <text transform="matrix(1 0 0 1 316.0727 666.7081)" class="st26 st27">Беговая</text>
                <line class="st28" x1="388.1" y1="655.6" x2="396.9" y2="646.8"></line>
                <circle class="st29 metro-point" cx="396" cy="648.6" r="13.9"></circle>
            </g>
            <g id="s9l1" class="metro-station disabled" metro-station-name="Улица 1905 года">
                <text transform="matrix(1 0 0 1 373.2399 705.415)" class="st26 st27">Улица</text>
                <text transform="matrix(1 0 0 1 337.0203 723.415)" class="st26 st27">1905 года</text>
                <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Улица 1905 года</text>
                <line class="st28" x1="425.7" y1="695.4" x2="434.5" y2="686.6"></line>
                <circle class="st29 metro-point" cx="434.6" cy="686.6" r="13.9"></circle>
            </g>
            <g id="s10l1" class="metro-station disabled" metro-station-name="Баррикадная">
                <text transform="matrix(1 0 0 1 521.3383 688.3956)" class="st26 st27">Баррикадная</text>
                <circle class="st32" cx="525" cy="704" r="11.8"></circle>
                <circle class="st33" cx="525" cy="704" r="4.7"></circle>
                <circle class="st29 metro-point" cx="525" cy="703.9" r="13.9"></circle>
            </g>
            <g id="s11l1" class="metro-station disabled" metro-station-name="Пушкинская">
                <text transform="matrix(1 0 0 1 684.4379 685.3917)" class="st26 st27">Пушкинская</text>
                <circle class="st32" cx="738.9" cy="701" r="11.8"></circle>
                <circle class="st33" cx="738.9" cy="701" r="4.7"></circle>
                <circle class="st29 metro-point" cx="739" cy="700.9" r="13.9"></circle>
            </g>
            <g id="s12l1" class="metro-station disabled" metro-station-name="Кузнецкий Мост">
                <text id="text1673_1_" transform="matrix(1 0 0 1 820.6027 688.0841)" class="st26 st27">Кузнецкий Мост
                </text>
                <circle class="st32" cx="920.7" cy="703.7" r="11.8"></circle>
                <circle class="st33" cx="920.7" cy="703.7" r="4.7"></circle>
                <circle class="st29 metro-point" cx="920.7" cy="703.6" r="13.9"></circle>
            </g>
            <g id="g1l1" class="metro-station disabled" metro-station-group="">
                <text transform="matrix(1 0 0 1 948.6375 809.1466)" class="st26 st27">Китай-город</text>
                <g id="s13c1l1" class="metro-station disabled"
                   metro-station-name="Китай-город (Калужско-Рижская линия)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Китай-город
                        (Калужско-Рижская линия)
                    </text>
                    <circle class="st34" cx="1019.8" cy="783.9" r="11.8"></circle>
                    <circle class="st33" cx="1019.8" cy="783.9" r="4.7"></circle>
                    <circle class="st35 metro-point" cx="1019.9" cy="783.8" r="13.9"></circle>
                </g>
                <g id="s13c2l1" class="metro-station disabled"
                   metro-station-name="Китай-город (Таганско-Краснопресненская линия)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Китай-город
                        (Таганско-Краснопресненская линия)
                    </text>
                    <circle class="st32" cx="1050.1" cy="784" r="11.8"></circle>
                    <circle class="st33" cx="1050.1" cy="784" r="4.7"></circle>
                    <circle class="st29 metro-point" cx="1050.1" cy="783.8" r="13.9"></circle>
                </g>
            </g>
            <g id="s15l1" class="metro-station disabled" metro-station-name="Пролетарская">
                <text transform="matrix(1 0 0 1 1315.1716 1034.8458)" class="st26 st27">Пролетарская</text>
                <circle class="st32" cx="1299.4" cy="1032" r="11.8"></circle>
                <circle class="st33" cx="1299.4" cy="1032" r="4.7"></circle>
                <circle class="st29 metro-point" cx="1299.4" cy="1032" r="13.9"></circle>
            </g>
            <g id="s16l1" class="metro-station disabled" metro-station-name="Волгоградский проспект">
                <text transform="matrix(1 0 0 1 1362.7771 1073.3615)" class="st26 st27">Волгоградский проспект</text>
                <line class="st28" x1="1360.6" y1="1076.8" x2="1351.7" y2="1085.7"></line>
                <circle class="st29 metro-point" cx="1354" cy="1086.5" r="13.9"></circle>
            </g>
            <g id="s17l1" class="metro-station disabled" metro-station-name="Текстильщики">
                <text transform="matrix(1 0 0 1 1437.7842 1143.2062)" class="st26 st27">Текстильщики</text>
                <line class="st28" x1="1429.6" y1="1146.5" x2="1420.7" y2="1155.4"></line>
                <circle id="circle5488_1_" class="st29 metro-point" cx="1424" cy="1152.7" r="13.9"></circle>
            </g>
            <g id="s18l1" class="metro-station disabled" metro-station-name="Кузьминки">
                <text transform="matrix(1 0 0 1 1463.7871 1213.7296)" class="st26 st27">Кузьминки</text>
                <line class="st28" x1="1460.3" y1="1209.8" x2="1447.7" y2="1209.8"></line>
                <circle class="st29 metro-point" cx="1448" cy="1209.7" r="13.9"></circle>
            </g>
            <g id="s19l1" class="metro-station disabled" metro-station-name="Рязанский проспект">
                <text transform="matrix(1 0 0 1 1463.7871 1284.1202)" class="st26 st27">Рязанский</text>
                <text transform="matrix(1 0 0 1 1463.7871 1302.1202)" class="st26 st27">проспект</text>
                <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Рязанский проспект</text>
                <line class="st28" x1="1460.3" y1="1279.8" x2="1447.7" y2="1279.8"></line>
                <circle class="st29 metro-point" cx="1448" cy="1279.8" r="13.9"></circle>
            </g>
            <g id="s20l1" class="metro-station disabled" metro-station-name="Выхино">
                <text transform="matrix(1 0 0 1 1463.7871 1372.382)" class="st26 st27">Выхино</text>
                <line class="st28" x1="1460.3" y1="1368.2" x2="1447.7" y2="1368.2"></line>
                <circle class="st29 metro-point" cx="1448" cy="1368.4" r="13.9"></circle>
            </g>
            <g id="s21l1" class="metro-station disabled" metro-station-name="Лермонтовский проспект">
                <text transform="matrix(1 0 0 1 1463.7871 1442.4728)" class="st26 st27">Лермонтовский</text>
                <text transform="matrix(1 0 0 1 1463.7871 1460.4728)" class="st26 st27">проспект</text>
                <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Лермонтовский проспект
                </text>
                <line class="st28" x1="1460.3" y1="1438.8" x2="1447.7" y2="1438.8"></line>
                <circle class="st29 metro-point" cx="1448" cy="1438.7" r="13.9"></circle>
            </g>
            <g id="s22l1" class="metro-station disabled" metro-station-name="Жулебино">
                <text transform="matrix(1 0 0 1 1463.7871 1530.4767)" class="st26 st27">Жулебино</text>
                <line class="st28" x1="1460.3" y1="1526.8" x2="1447.7" y2="1526.8"></line>
                <circle class="st29 metro-point" cx="1448" cy="1526.8" r="13.9"></circle>
            </g>
            <g id="s23l1" class="metro-station disabled" metro-station-name="Котельники">
                <text transform="matrix(1 0 0 1 1463.7871 1601.9034)" class="st26 st27">Котельники</text>
                <line class="st28" x1="1435" y1="1597.4" x2="1460.5" y2="1597.4"></line>
                <circle class="st29 metro-point" cx="1448" cy="1597.2" r="13.9"></circle>
            </g>
        </g>
        <g id="l2">
            <g id="s1l2" class="metro-station disabled" metro-station-name="Речной вокзал">
                <text transform="matrix(1 0 0 1 482.4517 104.3849)" class="st26 st27">Речной вокзал</text>
                <line class="st36" x1="453.6" y1="99.8" x2="479.1" y2="99.8"></line>
                <circle class="st37 metro-point" cx="466.2" cy="99.9" r="13.9"></circle>
            </g>
            <g id="s2l2" transform="translate(-0.5528017,0)" class="metro-station disabled"
               metro-station-name="Водный стадион">
                <text transform="matrix(1 0 0 1 483.0045 152.9191)" class="st26 st27">Водный стадион</text>
                <line class="st36" x1="467.4" y1="149.8" x2="479.9" y2="149.8"></line>
                <circle class="st37 metro-point" cx="466.8" cy="149.7" r="13.9"></circle>
            </g>
            <g id="s3l2" transform="translate(-0.5528017,0)" class="metro-station" metro-station-name="Войковская">
                <text transform="matrix(1 0 0 1 481.0897 286.708)" class="st26 st27">Войковская</text>
                <circle class="st38" cx="466.8" cy="278.9" r="11.8"></circle>
                <circle class="st33" cx="466.8" cy="278.9" r="4.7"></circle>
                <circle class="st37 metro-point" cx="466.8" cy="278.9" r="13.9"></circle>
            </g>
            <g id="s4l2" transform="translate(-0.5528017,0)" class="metro-station disabled" metro-station-name="Сокол">
                <text transform="matrix(1 0 0 1 483.5825 348.92)" class="st26 st27">Сокол</text>
                <line class="st36" x1="467.4" y1="344.8" x2="479.9" y2="344.8"></line>
                <circle class="st37 metro-point" cx="466.8" cy="344.7" r="13.9"></circle>
            </g>
            <g id="s5l2" transform="translate(-0.5528017,0)" class="metro-station disabled"
               metro-station-name="Аэропорт">
                <text transform="matrix(1 0 0 1 482.5823 388.6573)" class="st26 st27">Аэропорт</text>
                <line class="st36" x1="467.4" y1="385.8" x2="479.9" y2="385.8"></line>
                <circle class="st37 metro-point" cx="466.8" cy="385.7" r="13.9"></circle>
            </g>
            <g id="s6l2" class="metro-station disabled" metro-station-name="Динамо">
                <text transform="matrix(1 0 0 1 481.5367 429.7149)" class="st26 st27">Динамо</text>
                <circle class="st38" cx="466.3" cy="435.3" r="11.8"></circle>
                <circle class="st33" cx="466.3" cy="435.3" r="4.7"></circle>
                <circle class="st37 metro-point" cx="466.2" cy="435.3" r="13.9"></circle>
            </g>
            <g id="g1l2" class="metro-station disabled" metro-station-group="">
                <text transform="matrix(1 0 0 1 431.056 581.7804)" class="st26 st27">Белорусская</text>
                <g id="s7c1l2" class="metro-station disabled" metro-station-name="Белорусская (Кольцевая линия)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Белорусская (Кольцевая
                        линия)
                    </text>
                    <circle class="st39" cx="552.5" cy="589.8" r="11.8"></circle>
                    <circle class="st33" cx="552.5" cy="589.8" r="4.7"></circle>
                    <circle class="st40 metro-point" cx="552.4" cy="589.8" r="13.9"></circle>
                </g>
                <g id="s7c2l2" class="metro-station disabled" metro-station-name="Белорусская (Замоскворецкая линия)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Белорусская
                        (Замоскворецкая линия)
                    </text>
                    <circle class="st38" cx="552.5" cy="559.9" r="11.8"></circle>
                    <circle class="st33" cx="552.5" cy="559.9" r="4.7"></circle>
                    <circle class="st37 metro-point" cx="552.4" cy="559.7" r="13.9"></circle>
                </g>
            </g>
            <g id="s8l2" class="metro-station disabled" metro-station-name="Маяковская">
                <line class="st36" x1="603.5" y1="615" x2="612.3" y2="606.2"></line>
                <text transform="matrix(1 0 0 1 615.254 605.2765)" class="st26 st27">Маяковская</text>
                <circle class="st37 metro-point" cx="605.6" cy="612.7" r="13.9"></circle>
            </g>
            <g id="s9l2" class="metro-station disabled" metro-station-name="Тверская">
                <text transform="matrix(1 0 0 1 638.1973 755.6671)" class="st26 st27">Тверская</text>
                <circle class="st38" cx="721.6" cy="731.4" r="11.8"></circle>
                <circle class="st33" cx="721.6" cy="731.4" r="4.7"></circle>
                <circle class="st37 metro-point" cx="721.6" cy="731.4" r="13.9"></circle>
            </g>
            <g id="s10l2" class="metro-station disabled" metro-station-name="Театральная">
                <text transform="matrix(1 0 0 1 868.6934 834.8058)" class="st26 st27">Театральная</text>
                <circle class="st38" cx="859.7" cy="841.6" r="11.8"></circle>
                <circle class="st33" cx="859.7" cy="841.6" r="4.7"></circle>
                <circle class="st37 metro-point" cx="859.6" cy="841.6" r="13.9"></circle>
            </g>
            <g id="s11l2" class="metro-station disabled" metro-station-name="Новокузнецкая">
                <text transform="matrix(1 0 0 1 997.355 973.7472)" class="st26 st27">Новокузнецкая</text>
                <circle class="st38" cx="983" cy="973.8" r="11.8"></circle>
                <circle class="st33" cx="983" cy="973.8" r="4.7"></circle>
                <circle class="st37 metro-point" cx="983" cy="973.9" r="13.9"></circle>
            </g>
            <g id="g2l2" class="metro-station disabled" metro-station-group="">
                <g id="s13с1l2" class="metro-station disabled"
                   metro-station-name="Автозаводская (Замоскворецкая линия)">
                    <text transform="matrix(1 0 0 1 1018.1152 1395.6847)" class="st26 st27">Автозаводская</text>
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Автозаводская
                        (Замоскворецкая линия)
                    </text>
                    <circle class="st38" cx="981.7" cy="1322.9" r="11.8"></circle>
                    <circle class="st33" cx="981.7" cy="1322.9" r="4.7"></circle>
                    <circle class="st37 metro-point" cx="981.7" cy="1322.9" r="13.9"></circle>
                </g>
                <g id="s13с2l2" class="metro-station disabled"
                   metro-station-name="Автозаводская (Московское центральное кольцо)">
                    <text transform="matrix(1 0 0 1 998.2009 1326.3195)" class="st26 st27">Автозаводская</text>
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Автозаводская
                        (Московское центральное кольцо)
                    </text>
                    <circle class="st43" cx="1005.4" cy="1377.1" r="11.8"></circle>
                    <circle class="st33" cx="1005.4" cy="1377.1" r="4.7"></circle>
                    <circle class="st44 metro-point" cx="1005.4" cy="1377.1" r="13.9"></circle>
                </g>
            </g>
            <g id="s13l2" class="metro-station disabled" metro-station-name="Технопарк">
                <text transform="matrix(1 0 0 1 998.8286 1432.6603)" class="st26 st27">Технопарк</text>
                <line class="st36" x1="982.2" y1="1429" x2="994.8" y2="1429"></line>
                <circle class="st37 metro-point" cx="981.7" cy="1428.9" r="13.9"></circle>
            </g>
            <g id="s14l2" class="metro-station disabled" metro-station-name="Коломенская">
                <text transform="matrix(1 0 0 1 998.8286 1486.4249)" class="st26 st27">Коломенская</text>
                <line class="st36" x1="982.2" y1="1482.8" x2="994.8" y2="1482.8"></line>
                <circle class="st37 metro-point" cx="981.7" cy="1482.6" r="13.9"></circle>
            </g>
            <g id="s15l2" class="metro-station disabled" metro-station-name="Кантемировская">
                <text transform="matrix(1 0 0 1 997.5642 1608.4894)" class="st26 st27">Кантемировская</text>
                <line class="st36" x1="982.2" y1="1605.4" x2="994.8" y2="1605.4"></line>
                <circle class="st37 metro-point" cx="981.7" cy="1605.4" r="13.9"></circle>
            </g>
            <g id="s16l2" class="metro-station disabled" metro-station-name="Царицыно">
                <text transform="matrix(1 0 0 1 998.2009 1654.6729)" class="st26 st27">Царицыно</text>
                <line class="st36" x1="982.2" y1="1651" x2="994.8" y2="1651"></line>
                <circle class="st37 metro-point" cx="981.7" cy="1650.9" r="13.9"></circle>
            </g>
            <g id="s17l2" class="metro-station disabled" metro-station-name="Орехово">
                <text transform="matrix(1 0 0 1 997.8655 1711.9316)" class="st26 st27">Орехово</text>
                <line class="st36" x1="982.2" y1="1707.4" x2="994.8" y2="1707.4"></line>
                <circle class="st37 metro-point" cx="981.7" cy="1707.3" r="13.9"></circle>
            </g>
            <g id="s18l2" class="metro-station disabled" metro-station-name="Домодедовская">
                <text transform="matrix(1 0 0 1 999.0198 1767.9561)" class="st26 st27">Домодедовская</text>
                <line class="st36" x1="982.2" y1="1763.2" x2="994.8" y2="1763.2"></line>
                <circle class="st37 metro-point" cx="981.7" cy="1762.9" r="13.9"></circle>
            </g>
            <g id="s19l2" class="metro-station disabled" metro-station-name="Красногвардейская">
                <text transform="matrix(1 0 0 1 1044.5129 1854.5488)" class="st26 st27">Красногвардейская</text>
                <circle class="st38" cx="1193.2" cy="1827.2" r="11.8"></circle>
                <circle class="st33" cx="1193.2" cy="1827.2" r="4.7"></circle>
                <circle class="st37 metro-point" cx="1193.1" cy="1827.1" r="13.9"></circle>
            </g>
            <g id="s20l2" class="metro-station disabled" metro-station-name="Алма-Атинская">
                <text transform="matrix(1 0 0 1 1323.6401 1852.7725)" class="st26 st27">Алма-Атинская</text>
                <line class="st36" x1="1342" y1="1838.2" x2="1342" y2="1812.6"></line>
                <circle class="st37 metro-point" cx="1341.8" cy="1825.4" r="13.9"></circle>
            </g>
        </g>
        <g id="l3">
            <g id="s1l3" class="metro-station disabled" metro-station-name="Битцевский парк">
                <text transform="matrix(1 0 0 1 401.965 1797.167)" class="st26 st27">Битцевский парк</text>
                <circle class="st45" cx="540.1" cy="1770.2" r="11.8"></circle>
                <circle class="st33" cx="540.1" cy="1770.2" r="4.7"></circle>
                <circle class="st45 metro-point" cx="540.2" cy="1770.2" r="13.9"></circle>
            </g>
            <g id="s2l3" class="metro-station disabled" metro-station-name="Лесопарковая">
                <text transform="matrix(1 0 0 1 577.09 1798.0146)" class="st26 st27">Лесопарковая</text>
                <line class="st46" x1="638.5" y1="1782.3" x2="638.5" y2="1769.8"></line>
                <circle class="st45 metro-point" cx="638.3" cy="1770.2" r="13.9"></circle>
            </g>
            <g id="s3l3" class="metro-station disabled" metro-station-name="Улица Старокачаловская">
                <text transform="matrix(1 0 0 1 491.0234 1842.2344)" class="st26 st27">Улица Старокачаловская</text>
                <circle class="st45" cx="721.4" cy="1837.8" r="11.8"></circle>
                <circle class="st33" cx="721.4" cy="1837.8" r="4.7"></circle>
                <circle class="st45 metro-point" cx="721.5" cy="1837.7" r="13.9"></circle>
            </g>
            <g id="s4l3" class="metro-station disabled" metro-station-name="Улица Скобелевская">
                <text transform="matrix(1 0 0 1 635.6417 1910.3184)" class="st26 st27">Улица</text>
                <text transform="matrix(1 0 0 1 635.6417 1928.3184)" class="st26 st27">Скобелевская</text>
                <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Улица Скобелевская</text>
                <line class="st46" x1="649.1" y1="1893.4" x2="649.1" y2="1880.9"></line>
                <circle class="st45 metro-point" cx="648.9" cy="1880.5" r="13.9"></circle>
            </g>
            <g id="s5l3" class="metro-station disabled" metro-station-name="Бульвар Адмирала Ушакова">
                <text transform="matrix(1 0 0 1 524.8749 1910.3174)" class="st26 st27">Бульвар</text>
                <text transform="matrix(1 0 0 1 524.8749 1928.3174)" class="st26 st27">Адмирала</text>
                <text transform="matrix(1 0 0 1 524.8749 1946.5674)" class="st26 st27">Ушакова</text>
                <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Бульвар Адмирала Ушакова
                </text>
                <line class="st46" x1="539" y1="1893.4" x2="539" y2="1880.9"></line>
                <circle class="st45 metro-point" cx="539" cy="1880.5" r="13.9"></circle>
            </g>
            <g id="s6l3" class="metro-station disabled" metro-station-name="Улица Горчакова">
                <text transform="matrix(1 0 0 1 406.0297 1910.4424)" class="st26 st27">Улица</text>
                <text transform="matrix(1 0 0 1 406.0292 1928.4424)" class="st26 st27">Горчакова</text>
                <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Улица Горчакова</text>
                <line class="st46" x1="422.3" y1="1893.4" x2="422.3" y2="1880.9"></line>
                <circle class="st45 metro-point" cx="422.3" cy="1880.5" r="13.9"></circle>
            </g>
            <g id="s7l3" class="metro-station disabled" metro-station-name="Бунинская аллея">
                <text transform="matrix(1 0 0 1 286.365 1910.3184)" class="st26 st27">Бунинская</text>
                <text transform="matrix(1 0 0 1 286.365 1928.3184)" class="st26 st27">аллея</text>
                <text transform="matrix(1 0 0 1 -144.1273 -232.7246)" class="st30 st26 st27">Бунинская аллея</text>
                <line class="st46" x1="302.1" y1="1893.5" x2="302.1" y2="1868"></line>
                <circle class="st47 metro-point" cx="302.2" cy="1880.3" r="13.9"></circle>
            </g>
        </g>
        <g id="l4">
            <g id="s1l4" class="metro-station disabled" metro-station-name="Международная">
                <text transform="matrix(1 0 0 1 103.8954 800.0753)" class="st26 st27">Международная</text>
                <circle class="st48" cx="214.6" cy="816.6" r="11.8"></circle>
                <circle class="st33" cx="214.6" cy="816.6" r="4.7"></circle>
                <circle class="st49 metro-point" cx="213.9" cy="816.6" r="13.9"></circle>
            </g>
            <g id="s2l4" class="metro-station" metro-station-name="Выставочная">
                <text transform="matrix(1 0 0 1 285.8781 800.2843)" class="st26 st27">Выставочная</text>
                <circle class="st48" cx="315.7" cy="816.5" r="11.8"></circle>
                <circle class="st33" cx="315.7" cy="816.5" r="4.7"></circle>
                <circle class="st49 metro-point" cx="315.1" cy="816.6" r="13.9"></circle>
            </g>
            <g id="s3l4" class="metro-station disabled" metro-station-name="Смоленская">
                <text transform="matrix(1 0 0 1 524.8215 798.4376)" class="st26 st27">Смоленская</text>
                <line class="st50" x1="577.6" y1="816" x2="577.6" y2="803.5"></line>
                <circle class="st49 metro-point" cx="577.3" cy="815.4" r="13.9"></circle>
            </g>
            <g id="s4l4" class="metro-station disabled" metro-station-name="Арбатская">
                <text transform="matrix(1 0 0 1 657.8416 819.797)" class="st26 st27">Арбатская</text>
                <line class="st50" x1="647.5" y1="830.7" x2="656.4" y2="821.8"></line>
                <circle class="st49 metro-point" cx="647.6" cy="830.6" r="13.9"></circle>
            </g>
            <g id="s5l4" class="metro-station disabled" metro-station-name="Александровский сад">
                <text transform="matrix(1 0 0 1 729.7686 906.6505)" class="st26 st27">Александровский сад</text>
                <circle class="st48" cx="714.8" cy="899.3" r="11.8"></circle>
                <circle class="st33" cx="714.8" cy="899.3" r="4.7"></circle>
                <circle class="st49 metro-point" cx="714.8" cy="899.3" r="13.9"></circle>
            </g>
            <g id="s6l4" class="metro-station disabled" metro-station-name="Пионерская">
                <text transform="matrix(1 0 0 1 80.0887 703.7267)" class="st26 st27">Пионерская</text>
                <line class="st50" x1="64.4" y1="699.7" x2="77" y2="699.7"></line>
                <circle class="st49 metro-point" cx="64" cy="699.7" r="13.9"></circle>
            </g>
            <g id="s7l4" class="metro-station disabled" metro-station-name="Филёвский парк">
                <text transform="matrix(1 0 0 1 80.0887 736.0284)" class="st26 st27">Филёвский</text>
                <text transform="matrix(1 0 0 1 80.0887 754.3615)" class="st26 st27">парк</text>
                <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Филёвский парк</text>
                <line class="st50" x1="64.4" y1="732.8" x2="77" y2="732.8"></line>
                <circle class="st49 metro-point" cx="64" cy="733" r="13.9"></circle>
            </g>
            <g id="s8l4" class="metro-station disabled" metro-station-name="Багратионовская">
                <text transform="matrix(1 0 0 1 80.0887 911.8429)" class="st26 st27">Багратионовская</text>
                <line class="st50" x1="64.4" y1="908.4" x2="77" y2="908.4"></line>
                <circle class="st49 metro-point" cx="64" cy="908.3" r="13.9"></circle>
            </g>
            <g id="s9l4" class="metro-station" metro-station-name="Фили">
                <text transform="matrix(1 0 0 1 80.0887 948.0284)" class="st26 st27">Фили</text>
                <line class="st50" x1="64.4" y1="944.4" x2="77" y2="944.4"></line>
                <circle class="st49 metro-point" cx="64" cy="944.3" r="13.9"></circle>
            </g>
            <g id="g1l4" class="metro-station disabled" metro-station-group="">
                <text transform="matrix(1 0 0 1 136.054 971.6036)" class="st26 st27">Кутузовская</text>
                <g id="s10c1l4" transform="translate(-0.802263,0)" class="metro-station disabled"
                   metro-station-name="Кутузовская (Филевская линия)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Кутузовская (Филевская
                        линия)
                    </text>
                    <circle class="st48" cx="255.4" cy="982.6" r="11.8"></circle>
                    <circle class="st33" cx="255.4" cy="982.6" r="4.7"></circle>
                    <circle class="st49 metro-point" cx="254.6" cy="982.6" r="13.9"></circle>
                </g>
                <g id="s10c2l4" class="metro-station disabled"
                   metro-station-name="Кутузовская (Московское центральное кольцо)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Кутузовская (Московское
                        центральное кольцо)
                    </text>
                    <circle class="st43" cx="254.1" cy="952.3" r="11.8"></circle>
                    <circle class="st33" cx="254.1" cy="952.3" r="4.7"></circle>
                    <circle class="st44 metro-point" cx="254.1" cy="952.3" r="13.9"></circle>
                </g>
            </g>
            <g id="s11l4" class="metro-station disabled" metro-station-name="Студенческая">
                <text transform="matrix(1 0 0 1 308.0794 964.7784)" class="st26 st27">Студенческая</text>
                <line class="st50" x1="308.7" y1="946.5" x2="299.9" y2="937.7"></line>
                <circle class="st49 metro-point" cx="299.6" cy="938.5" r="13.9"></circle>
            </g>
        </g>
        <g id="l5">
            <g id="s1l5" class="metro-station disabled" metro-station-name="Пятницкое шоссе">
                <text transform="matrix(1 0 0 1 61.7935 275.041)" class="st26 st27">Пятницкое</text>
                <text transform="matrix(1 0 0 1 61.7935 293.041)" class="st26 st27">шоссе</text>
                <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Пятницкое шоссе</text>
                <line class="st51" x1="32.2" y1="270.7" x2="57.7" y2="270.7"></line>
                <circle class="st52 metro-point" cx="45" cy="270.6" r="13.9"></circle>
            </g>
            <g id="s2l5" transform="translate(-0.73706894,0)" class="metro-station disabled"
               metro-station-name="Митино">
                <text transform="matrix(1 0 0 1 61.9218 338.9229)" class="st26 st27">Митино</text>
                <line class="st51" x1="45.8" y1="335.5" x2="58.3" y2="335.5"></line>
                <circle class="st52 metro-point" cx="44.6" cy="335.2" r="13.9"></circle>
            </g>
            <g id="s3l5" transform="translate(-0.73706894,0.18426723)" class="metro-station disabled"
               metro-station-name="Волоколамская">
                <text transform="matrix(1 0 0 1 61.082 384.4633)" class="st26 st27">Волоколамская</text>
                <line class="st51" x1="45.8" y1="381.2" x2="58.3" y2="381.2"></line>
                <circle class="st52 metro-point" cx="44.6" cy="381.6" r="13.9"></circle>
            </g>
            <g id="s4l5" transform="translate(-0.73706894,0)" class="metro-station disabled"
               metro-station-name="Мякинино">
                <text transform="matrix(1 0 0 1 61.082 430.4024)" class="st26 st27">Мякинино</text>
                <line class="st51" x1="45.8" y1="426.7" x2="58.3" y2="426.7"></line>
                <circle class="st52 metro-point" cx="44.6" cy="426.6" r="13.9"></circle>
            </g>
            <g id="s5l5" transform="translate(-0.73706894,0)" class="metro-station disabled"
               metro-station-name="Строгино">
                <text transform="matrix(1 0 0 1 61.082 477.2452)" class="st26 st27">Строгино</text>
                <line class="st51" x1="45.8" y1="473.7" x2="58.3" y2="473.7"></line>
                <circle class="st52 metro-point" cx="44.6" cy="473.8" r="13.9"></circle>
            </g>
            <g id="s6l5" transform="translate(-0.73706894,0)" class="metro-station disabled"
               metro-station-name="Крылатское">
                <text transform="matrix(1 0 0 1 61.082 523.5255)" class="st26 st27">Крылатское</text>
                <line class="st51" x1="45.8" y1="519.8" x2="58.3" y2="519.8"></line>
                <circle class="st52 metro-point" cx="44.6" cy="519.6" r="13.9"></circle>
            </g>
            <g id="s7l5" transform="translate(-0.73706894,0)" class="metro-station disabled"
               metro-station-name="Молодёжная">
                <text transform="matrix(1 0 0 1 61.082 569.5812)" class="st26 st27">Молодёжная</text>
                <line class="st51" x1="45.8" y1="565.9" x2="58.3" y2="565.9"></line>
                <circle class="st52 metro-point" cx="44.6" cy="565.8" r="13.9"></circle>
            </g>
            <g id="g1l5" class="metro-station disabled" metro-station-group="">
                <text transform="matrix(1 0 0 1 59.2742 649.0509)" class="st26 st27">Кунцевская</text>
                <g id="s8c1l5" class="metro-station disabled"
                   metro-station-name="Кунцевская (Арбатско-Покровская линия)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Кунцевская
                        (Арбатско-Покровская линия)
                    </text>
                    <circle class="st53" cx="44.8" cy="645.4" r="11.8"></circle>
                    <circle class="st33" cx="44.8" cy="645.4" r="4.7"></circle>
                    <circle class="st52 metro-point" cx="44.8" cy="645.3" r="13.9"></circle>
                </g>
                <g id="s8c2l5" class="metro-station disabled" metro-station-name="Кунцевская (Филевская линия)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Кунцевская (Филевская
                        линия)
                    </text>
                    <circle class="st48" cx="63.9" cy="667.2" r="11.8"></circle>
                    <circle class="st33" cx="63.9" cy="667.2" r="4.7"></circle>
                    <circle class="st49 metro-point" cx="64" cy="667.2" r="13.9"></circle>
                </g>
            </g>
            <g id="s9l5" class="metro-station disabled" metro-station-name="Славянский бульвар">
                <text transform="matrix(1 0 0 1 -6.103516e-05 1080.1407)" class="st26 st27">Славянский</text>
                <text transform="matrix(1 0 0 1 31.9189 1098.1407)" class="st26 st27">бульвар</text>
                <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Славянский бульвар</text>
                <line class="st51" x1="97.7" y1="1061" x2="97.7" y2="1048.4"></line>
                <circle class="st52 metro-point" cx="97.6" cy="1048.5" r="13.9"></circle>
            </g>
            <g id="g2l5" class="metro-station disabled" metro-station-group="">
                <text transform="matrix(1 0 0 1 154.2383 1080.7697)" class="st26 st27">Парк</text>
                <text transform="matrix(1 0 0 1 154.2391 1098.7697)" class="st26 st27">Победы</text>
                <g id="s10c1l5" class="metro-station disabled" metro-station-name="Парк Победы (Калининская линия)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Парк Победы
                        (Калининская линия)
                    </text>
                    <circle class="st54" cx="138.5" cy="1069.6" r="11.8"></circle>
                    <circle class="st33" cx="138.5" cy="1069.6" r="4.7"></circle>
                    <circle class="st55 metro-point" cx="138.4" cy="1069.6" r="13.9"></circle>
                </g>
                <g id="s10c2l5" class="metro-station disabled"
                   metro-station-name="Парк Победы (Арбатско-Покровская линия)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Парк Победы
                        (Арбатско-Покровская линия)
                    </text>
                    <circle class="st53" cx="158.9" cy="1048.4" r="11.8"></circle>
                    <circle class="st33" cx="158.9" cy="1048.4" r="4.7"></circle>
                    <circle class="st52 metro-point" cx="158.9" cy="1048.4" r="13.9"></circle>
                </g>
            </g>
            <g id="s11l5" class="metro-station disabled" metro-station-name="Смоленская">
                <text transform="matrix(1 0 0 1 524.8359 849.4435)" class="st26 st27">Смоленская</text>
                <line class="st51" x1="585.1" y1="866.2" x2="585.1" y2="853.6"></line>
                <circle class="st52 metro-point" cx="584.8" cy="865.7" r="13.9"></circle>
            </g>
            <g id="s12l5" class="metro-station disabled" metro-station-name="Арбатская">
                <text transform="matrix(1 0 0 1 689.376 851.2423)" class="st26 st27">Арбатская</text>
                <circle class="st53" cx="732.9" cy="868.1" r="11.8"></circle>
                <circle class="st33" cx="732.9" cy="868.1" r="4.7"></circle>
                <circle class="st52 metro-point" cx="733" cy="867.9" r="13.9"></circle>
            </g>
            <g id="s13l5" class="metro-station disabled" metro-station-name="Пл. Революции">
                <text transform="matrix(1 0 0 1 880.6489 889.964)" class="st26 st27">Пл. Революции</text>
                <circle class="st53" cx="870.9" cy="868.4" r="11.8"></circle>
                <circle class="st33" cx="870.9" cy="868.4" r="4.7"></circle>
                <circle class="st52 metro-point" cx="870.9" cy="868.3" r="13.9"></circle>
            </g>
            <g id="s15l5" class="metro-station disabled" metro-station-name="Бауманская">
                <text transform="matrix(1 0 0 1 1260.2622 682.6515)" class="st26 st27">Бауманская</text>
                <line class="st51" x1="1259.3" y1="666.6" x2="1250.4" y2="657.7"></line>
                <circle class="st52 metro-point" cx="1250.3" cy="657.9" r="13.9"></circle>
            </g>
            <g id="s16l5" class="metro-station disabled" metro-station-name="Электрозаводская">
                <text transform="matrix(1 0 0 1 1291.2878 651.4189)" class="st26 st27">Электрозаводская</text>
                <line class="st51" x1="1290.2" y1="633" x2="1281.4" y2="624.2"></line>
                <circle class="st52 metro-point" cx="1282" cy="625" r="13.9"></circle>
            </g>
            <g id="s17l5" class="metro-station disabled" metro-station-name="Семёновская">
                <text transform="matrix(1 0 0 1 1316.124 622.5656)" class="st26 st27">Семёновская</text>
                <line class="st51" x1="1322.5" y1="601.5" x2="1313.6" y2="592.7"></line>
                <circle class="st52 metro-point" cx="1313.6" cy="592.7" r="13.9"></circle>
            </g>
            <g id="s18l5" class="metro-station disabled" metro-station-name="Партизанская">
                <text transform="matrix(1 0 0 1 1424.8169 509.2267)" class="st26 st27">Партизанская</text>
                <circle class="st53" cx="1409.8" cy="497.8" r="11.8"></circle>
                <circle class="st33" cx="1409.8" cy="497.8" r="4.7"></circle>
                <circle class="st52 metro-point" cx="1409.8" cy="497.8" r="13.9"></circle>
            </g>
            <g id="s19l5" class="metro-station disabled" metro-station-name="Измайловская">
                <text transform="matrix(1 0 0 1 1463.6367 428.8702)" class="st26 st27">Измайловская</text>
                <line class="st51" x1="1459.4" y1="424.9" x2="1446.9" y2="424.9"></line>
                <circle class="st52 metro-point" cx="1446.8" cy="424.6" r="13.9"></circle>
            </g>
            <g id="s20l5" class="metro-station disabled" metro-station-name="Первомайская">
                <text transform="matrix(1 0 0 1 1463.6367 354.5127)" class="st26 st27">Первомайская</text>
                <line class="st51" x1="1459.4" y1="349.8" x2="1446.9" y2="349.8"></line>
                <circle class="st52 metro-point" cx="1446.8" cy="349.9" r="13.9"></circle>
            </g>
            <g id="s21l5" class="metro-station disabled" metro-station-name="Щёлковская">
                <text transform="matrix(1 0 0 1 1463.6367 276.1875)" class="st26 st27">Щёлковская</text>
                <line class="st51" x1="1434.1" y1="272" x2="1459.7" y2="272"></line>
                <circle class="st52 metro-point" cx="1446.8" cy="271.7" r="13.9"></circle>
            </g>
        </g>
        <g id="l6">
            <g id="s1l6" class="metro-station disabled" metro-station-name="Раменки">
                <text transform="matrix(1 0 0 1 156.5949 1267.6183)" class="st26 st27">Раменки</text>
                <line class="st56" x1="126.3" y1="1264.2" x2="151.8" y2="1264.2"></line>
                <circle class="st55 metro-point" cx="139.3" cy="1264.2" r="13.9"></circle>
            </g>
            <g id="s2l6" class="metro-station disabled" metro-station-name="Ломоносовский проспект">
                <text transform="matrix(1 0 0 1 155.5946 1199.2965)" class="st26 st27">Ломоносовский</text>
                <text transform="matrix(1 0 0 1 155.5946 1217.2965)" class="st26 st27">проспект</text>
                <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Ломоносовский проспект
                </text>
                <line class="st56" x1="139.6" y1="1195.6" x2="152.2" y2="1195.6"></line>
                <circle class="st55 metro-point" cx="139.3" cy="1195.6" r="13.9"></circle>
            </g>
            <g id="s3l6" class="metro-station disabled" metro-station-name="Минская">
                <text transform="matrix(1 0 0 1 155.5948 1143.6447)" class="st26 st27">Минская</text>
                <line class="st56" x1="139.6" y1="1139.2" x2="152.2" y2="1139.2"></line>
                <circle class="st55 metro-point" cx="139.3" cy="1139.3" r="13.9"></circle>
            </g>
            <g id="s4l6" class="metro-station" metro-station-name="Деловой центр">
                <text transform="matrix(1 0 0 1 252.9369 874.2316)" class="st26 st27">Деловой</text>
                <text transform="matrix(1 0 0 1 275.5804 891.1945)" class="st26 st27">центр</text>
                <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Деловой центр</text>
                <circle class="st54" cx="328.8" cy="848.9" r="11.8"></circle>
                <circle class="st33" cx="328.8" cy="848.9" r="4.7"></circle>
                <circle class="st55 metro-point" cx="328.8" cy="848.9" r="13.9"></circle>
            </g>
            <g id="s5l6" class="metro-station disabled" metro-station-name="Марксистская">
                <text transform="matrix(1 0 0 1 1166.5425 983.6544)" class="st26 st27">Марксистская</text>
                <circle class="st54" cx="1200.4" cy="955.6" r="11.8"></circle>
                <circle class="st33" cx="1200.4" cy="955.6" r="4.7"></circle>
                <circle class="st55 metro-point" cx="1200.4" cy="955.6" r="13.9"></circle>
            </g>
            <g id="s6l6" class="metro-station disabled" metro-station-name="Площадь Ильича">
                <text transform="matrix(1 0 0 1 1327.0942 847.6066)" class="st26 st27">Площадь</text>
                <text transform="matrix(1 0 0 1 1327.0942 866.4152)" class="st26 st27">Ильича</text>
                <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Площадь Ильича</text>
                <circle class="st54" cx="1312.5" cy="838.8" r="11.8"></circle>
                <circle class="st33" cx="1312.5" cy="838.8" r="4.7"></circle>
                <circle class="st55 metro-point" cx="1312.4" cy="838.8" r="13.9"></circle>
            </g>
            <g id="s7l6" class="metro-station disabled" metro-station-name="Авиамоторная">
                <text transform="matrix(1 0 0 1 1371.0952 813.1056)" class="st26 st27">Авиамоторная</text>
                <line class="st56" x1="1364.1" y1="787.5" x2="1372.9" y2="796.4"></line>
                <circle class="st55 metro-point" cx="1363.9" cy="787.3" r="13.9"></circle>
            </g>
            <g id="g1l6" class="metro-station disabled" metro-station-group="">
                <text transform="matrix(1 0 0 1 1386.5581 737.8175)" class="st26 st27">Шоссе Энтузиастов</text>
                <g id="s5c1l6" class="metro-station disabled"
                   metro-station-name="Шоссе Энтузиастов (Калининская линия)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Шоссе Энтузиастов
                        (Калининская линия)
                    </text>
                    <circle class="st54" cx="1396.5" cy="755" r="11.8"></circle>
                    <circle class="st33" cx="1396.5" cy="755" r="4.7"></circle>
                    <circle class="st55 metro-point" cx="1396.5" cy="755.2" r="13.9"></circle>
                </g>
                <g id="s5c1l6_1_" class="metro-station disabled"
                   metro-station-name="Шоссе Энтузиастов (Московское центральное кольцо)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Шоссе Энтузиастов
                        (Московское центральное кольцо)
                    </text>
                    <circle class="st43" cx="1456.1" cy="755.2" r="11.8"></circle>
                    <circle class="st33" cx="1456.1" cy="755.2" r="4.7"></circle>
                    <circle class="st44 metro-point" cx="1456.1" cy="755.2" r="13.9"></circle>
                </g>
            </g>
            <g id="s8l6" class="metro-station disabled" metro-station-name="Перово">
                <text transform="matrix(1 0 0 1 1490.9375 694.9913)" class="st26 st27">Перово</text>
                <line class="st56" x1="1488.9" y1="678.4" x2="1480.1" y2="669.6"></line>
                <circle class="st55 metro-point" cx="1480.1" cy="670.1" r="13.9"></circle>
            </g>
            <g id="s9l6" class="metro-station disabled" metro-station-name="Новогиреево">
                <text transform="matrix(1 0 0 1 1523.4404 664.0538)" class="st26 st27">Новогиреево</text>
                <line class="st56" x1="1522.1" y1="647" x2="1513.3" y2="638.2"></line>
                <circle class="st55 metro-point" cx="1513.3" cy="638.2" r="13.9"></circle>
            </g>
            <g id="s10l6" class="metro-station disabled" metro-station-name="Новокосино">
                <text transform="matrix(1 0 0 1 1554.2937 632.5411)" class="st26 st27">Новокосино</text>
                <line class="st56" x1="1534.2" y1="597.9" x2="1552.3" y2="616"></line>
                <circle class="st55 metro-point" cx="1543.3" cy="607" r="13.9"></circle>
            </g>
        </g>
        <g id="l7">
            <g id="s1l7" class="metro-station disabled" metro-station-name="Зябликово">
                <text transform="matrix(1 0 0 1 1227.1462 1798.1279)" class="st26 st27">Зябликово</text>
                <circle id="circle1623_1_" class="st57" cx="1215.3" cy="1805.6" r="11.8"></circle>
                <circle id="circle1625_1_" class="st33" cx="1215.3" cy="1805.6" r="4.7"></circle>
                <circle class="st58 metro-point" cx="1215.2" cy="1805.5" r="13.9"></circle>
            </g>
            <g id="s2l7" class="metro-station disabled" metro-station-name="Шипиловская">
                <text transform="matrix(1 0 0 1 1230.3943 1740.1846)" class="st26 st27">Шипиловская</text>
                <line class="st59" x1="1227.2" y1="1736.3" x2="1214.6" y2="1736.3"></line>
                <circle class="st58 metro-point" cx="1214.6" cy="1736" r="13.9"></circle>
            </g>
            <g id="s3l7" class="metro-station disabled" metro-station-name="Борисово">
                <text transform="matrix(1 0 0 1 1230.3943 1683.8018)" class="st26 st27">Борисово</text>
                <line class="st59" x1="1227.2" y1="1679.6" x2="1214.6" y2="1679.6"></line>
                <circle class="st58 metro-point" cx="1214.6" cy="1679.6" r="13.9"></circle>
            </g>
            <g id="s4l7" class="metro-station disabled" metro-station-name="Марьино">
                <text transform="matrix(1 0 0 1 1230.3943 1626.3829)" class="st26 st27">Марьино</text>
                <line class="st59" x1="1227.2" y1="1622.2" x2="1214.6" y2="1622.2"></line>
                <circle class="st58 metro-point" cx="1214.6" cy="1622.2" r="13.9"></circle>
            </g>
            <g id="s5l7" class="metro-station disabled" metro-station-name="Братиславская">
                <text transform="matrix(1 0 0 1 1230.3943 1568.0382)" class="st26 st27">Братиславская</text>
                <line class="st59" x1="1227.2" y1="1564.4" x2="1214.6" y2="1564.4"></line>
                <circle class="st58 metro-point" cx="1214.6" cy="1564.3" r="13.9"></circle>
            </g>
            <g id="s6l7" class="metro-station disabled" metro-station-name="Люблино">
                <text transform="matrix(1 0 0 1 1230.3943 1510.9005)" class="st26 st27">Люблино</text>
                <line class="st59" x1="1227.2" y1="1506.8" x2="1214.6" y2="1506.8"></line>
                <circle class="st58 metro-point" cx="1214.6" cy="1506.8" r="13.9"></circle>
            </g>
            <g id="s7l7" class="metro-station disabled" metro-station-name="Волжская">
                <text transform="matrix(1 0 0 1 1230.3943 1453.1163)" class="st26 st27">Волжская</text>
                <line class="st59" x1="1227.2" y1="1449.8" x2="1214.6" y2="1449.8"></line>
                <circle class="st58 metro-point" cx="1214.6" cy="1449.7" r="13.9"></circle>
            </g>
            <g id="s8l7" class="metro-station disabled" metro-station-name="Печатники">
                <text transform="matrix(1 0 0 1 1230.3943 1395.6857)" class="st26 st27">Печатники</text>
                <line class="st59" x1="1227.2" y1="1392.5" x2="1214.6" y2="1392.5"></line>
                <circle class="st58 metro-point" cx="1214.6" cy="1392.2" r="13.9"></circle>
            </g>
            <g id="s9l7" class="metro-station disabled" metro-station-name="Кожуховская">
                <text transform="matrix(1 0 0 1 1230.3948 1338.0031)" class="st26 st27">Кожуховская</text>
                <line class="st59" x1="1213.9" y1="1333.6" x2="1226.4" y2="1333.5"></line>
                <circle class="st58 metro-point" cx="1214.6" cy="1333.5" r="13.9"></circle>
            </g>
            <g id="g1l7" class="metro-station disabled" metro-station-group="">
                <g id="s10с1l7" class="metro-station disabled"
                   metro-station-name="Дубровка (Люблинско-Дмитровская линия)">
                    <text transform="matrix(1 0 0 1 1114.8103 1239.1593)" class="st26 st27">Дубровка</text>
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Дубровка
                        (Люблинско-Дмитровская линия)
                    </text>
                    <circle class="st57" cx="1214.9" cy="1236" r="11.8"></circle>
                    <circle class="st33" cx="1214.9" cy="1236" r="4.7"></circle>
                    <circle class="st58 metro-point" cx="1214.9" cy="1236" r="13.9"></circle>
                </g>
                <g id="s10с2l7" class="metro-station disabled"
                   metro-station-name="Дубровка (Московское центральное кольцо)">
                    <text transform="matrix(1 0 0 1 1091.1292 1290.0138)" class="st26 st27">Дубровка</text>
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Дубровка (Московское
                        центральное кольцо)
                    </text>
                    <circle id="circle987_10_" class="st43" cx="1191.9" cy="1291.3" r="11.8"></circle>
                    <circle id="circle989_10_" class="st33" cx="1191.9" cy="1291.3" r="4.7"></circle>
                    <circle id="circle4514_9_" class="st44 metro-point" cx="1191.9" cy="1291.3" r="13.9"></circle>
                </g>
            </g>
            <g id="s11l7" class="metro-station disabled" metro-station-name="Крестьянская Застава">
                <text transform="matrix(1 0 0 1 1160.2722 1057.007)" class="st26 st27">Крестьянская</text>
                <text transform="matrix(1 0 0 1 1210.5918 1075.007)" class="st26 st27">Застава</text>
                <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Крестьянская Застава</text>
                <circle class="st57" cx="1266.2" cy="1031.8" r="11.8"></circle>
                <circle class="st33" cx="1266.2" cy="1031.8" r="4.7"></circle>
                <circle class="st58 metro-point" cx="1266.2" cy="1031.9" r="13.9"></circle>
            </g>
            <g id="s12l7" class="metro-station disabled" metro-station-name="Римская">
                <text transform="matrix(1 0 0 1 1216.7361 823.4816)" class="st26 st27">Римская</text>
                <circle class="st57" cx="1282.2" cy="838.8" r="11.8"></circle>
                <circle class="st33" cx="1282.2" cy="838.8" r="4.7"></circle>
                <circle class="st58 metro-point" cx="1282.1" cy="838.9" r="13.9"></circle>
            </g>
            <g id="s13l7" class="metro-station disabled" metro-station-name="Чкаловская">
                <text transform="matrix(1 0 0 1 1036.7163 715.9181)" class="st26 st27">Чкаловская</text>
                <circle class="st57" cx="1154.4" cy="709.9" r="11.8"></circle>
                <circle class="st33" cx="1154.4" cy="709.9" r="4.7"></circle>
                <circle class="st58 metro-point" cx="1154.3" cy="709.9" r="13.9"></circle>
            </g>
            <g id="s14l7" class="metro-station disabled" metro-station-name="Сретенский бульвар">
                <text transform="matrix(1 0 0 1 951.5896 576.8224)" class="st26 st27">Сретенский</text>
                <text transform="matrix(1 0 0 1 970.1694 594.8224)" class="st26 st27">бульвар</text>
                <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Сретенский бульвар</text>
                <circle class="st57" cx="1005.8" cy="610.3" r="11.8"></circle>
                <circle class="st33" cx="1005.8" cy="610.3" r="4.7"></circle>
                <circle class="st58 metro-point" cx="1005.7" cy="610.3" r="13.9"></circle>
            </g>
            <g id="s15l7" class="metro-station disabled" metro-station-name="Трубная">
                <text transform="matrix(1 0 0 1 853.7327 562.2052)" class="st26 st27">Трубная</text>
                <circle class="st57" cx="847.6" cy="574" r="11.8"></circle>
                <circle class="st33" cx="847.6" cy="574" r="4.7"></circle>
                <circle class="st58 metro-point" cx="847.6" cy="574.2" r="13.9"></circle>
            </g>
            <g id="s16l7" class="metro-station disabled" metro-station-name="Достоевская">
                <text transform="matrix(1 0 0 1 862.2703 415.712)" class="st26 st27">Достоевская</text>
                <line class="st59" x1="845.6" y1="412" x2="858.1" y2="412"></line>
                <circle class="st58 metro-point" cx="845.6" cy="411.9" r="13.9"></circle>
            </g>
            <g id="s17l7" class="metro-station disabled" metro-station-name="Марьина Роща">
                <text transform="matrix(1 0 0 1 862.2703 383.1368)" class="st26 st27">Марьина Роща</text>
                <line class="st59" x1="844.8" y1="378.4" x2="858.3" y2="378.4"></line>
                <circle class="st58 metro-point" cx="845.6" cy="378.3" r="13.9"></circle>
            </g>
            <g id="s18l7" class="metro-station disabled" metro-station-name="Бутырская">
                <text transform="matrix(1 0 0 1 862.2703 346.8496)" class="st26 st27">Бутырская</text>
                <line class="st59" x1="845.6" y1="343.1" x2="858.1" y2="343.1"></line>
                <circle class="st58 metro-point" cx="845.6" cy="343" r="13.9"></circle>
            </g>
            <g id="s19l7" class="metro-station disabled" metro-station-name="Фонвизинская">
                <text transform="matrix(1 0 0 1 826.3516 273.7814)" class="st26 st27">Фонвизинская</text>
                <circle class="st57" cx="810" cy="270.5" r="11.8"></circle>
                <circle class="st33" cx="810" cy="270.5" r="4.7"></circle>
                <circle class="st58 metro-point" cx="810" cy="270.5" r="13.9"></circle>
            </g>
            <g id="g2l7" class="metro-station disabled" metro-station-group="">
                <text transform="matrix(1 0 0 1 754.7396 238.7666)" class="st26 st27">Петровско-Разумовская</text>
                <g id="s20c1l7" class="metro-station disabled"
                   metro-station-name="Петровско-Разумовская (Люблинско-Дмитровская линия)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Петровско-Разумовская
                        (Люблинско-Дмитровская линия)
                    </text>
                    <circle class="st57" cx="741.3" cy="248.4" r="11.8"></circle>
                    <circle class="st33" cx="741.3" cy="248.4" r="4.7"></circle>
                    <circle class="st58 metro-point" cx="741.2" cy="248.6" r="13.9"></circle>
                </g>
                <g id="s20c2l7" class="metro-station disabled"
                   metro-station-name="Петровско-Разумовская (Серпуховско-Тимирязевская линия)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Петровско-Разумовская
                        (Серпуховско-Тимирязевская линия)
                    </text>
                    <circle class="st60" cx="741.2" cy="218" r="11.8"></circle>
                    <circle class="st33" cx="741.2" cy="218" r="4.7"></circle>
                    <circle class="st61 metro-point" cx="741.2" cy="218" r="13.9"></circle>
                </g>
            </g>
        </g>
        <g id="l8">
            <g id="s1l8" class="metro-station disabled" metro-station-name="Краснопресненская">
                <text transform="matrix(1 0 0 1 510.8068 733.7882)" class="st26 st27">Краснопресненская</text>
                <circle class="st39" cx="497" cy="726.5" r="11.8"></circle>
                <circle class="st33" cx="497" cy="726.5" r="4.7"></circle>
                <circle class="st40 metro-point" cx="497.1" cy="726.4" r="13.9"></circle>
            </g>
            <g id="s2l8" class="metro-station disabled" metro-station-name="Новослободская">
                <text id="text439_1_" transform="matrix(1 0 0 1 743.309 474.9835)" class="st26 st27">Новослободская
                </text>
                <circle class="st39" cx="727.8" cy="459" r="11.8"></circle>
                <circle class="st33" cx="727.8" cy="459" r="4.7"></circle>
                <circle class="st40 metro-point" cx="727.9" cy="459" r="13.9"></circle>
            </g>
            <g id="g1l8" class="metro-station disabled" metro-station-group="">
                <text id="text1113_1_" transform="matrix(1 0 0 1 996.8457 459.8321)" class="st26 st27">Проспект Мира
                </text>
                <g id="s3c1l8" class="metro-station disabled" metro-station-name="Проспект Мира (Кольцевая линия)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Проспект Мира
                        (Кольцевая линия)
                    </text>
                    <circle class="st39" cx="984.5" cy="468.1" r="11.8"></circle>
                    <circle class="st33" cx="984.5" cy="468.1" r="4.7"></circle>
                    <circle class="st40 metro-point" cx="984.5" cy="468.1" r="13.9"></circle>
                </g>
                <g id="s3c2l8" class="metro-station disabled"
                   metro-station-name="Проспект Мира (Калужско-Рижская линия)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Проспект Мира
                        (Калужско-Рижская линия)
                    </text>
                    <circle class="st34" cx="984.5" cy="437.5" r="11.8"></circle>
                    <circle class="st33" cx="984.5" cy="437.5" r="4.7"></circle>
                    <circle class="st35 metro-point" cx="984.4" cy="437.5" r="13.9"></circle>
                </g>
            </g>
            <g id="g2l8" class="metro-station disabled" metro-station-group="">
                <text id="text469_1_" transform="matrix(1 0 0 1 1136.2861 563.1515)" class="st26 st27">Комсомольская
                </text>
                <g id="s4c1l8" class="metro-station disabled" metro-station-name="Комсомольская (Сокольническая линия)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Комсомольская
                        (Сокольническая линия)
                    </text>
                    <circle class="st41" cx="1123.6" cy="541.3" r="11.8"></circle>
                    <circle class="st33" cx="1123.6" cy="541.3" r="4.7"></circle>
                    <circle class="st42 metro-point" cx="1123.5" cy="541.3" r="13.9"></circle>
                </g>
                <g id="s4c2l8" class="metro-station disabled" metro-station-name="Комсомольская (Кольцевая линия)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Комсомольская
                        (Кольцевая линия)
                    </text>
                    <circle class="st39" cx="1123.1" cy="572" r="11.8"></circle>
                    <circle class="st33" cx="1123.1" cy="572" r="4.7"></circle>
                    <circle class="st40 metro-point" cx="1123" cy="572" r="13.9"></circle>
                </g>
            </g>
            <g id="g3l8" class="metro-station" metro-station-group="">
                <text transform="matrix(1 0 0 1 1200.5425 714.6152)" class="st26 st27">Курская</text>
                <g id="s5c1l8" class="metro-station" metro-station-name="Курская (Кольцевая линия)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Курская (Кольцевая
                        линия)
                    </text>
                    <circle class="st39" cx="1185.6" cy="694.9" r="11.8"></circle>
                    <circle class="st33" cx="1185.6" cy="694.9" r="4.7"></circle>
                    <circle class="st40 metro-point" cx="1185.5" cy="694.8" r="13.9"></circle>
                </g>
                <g id="s5c2l8" class="metro-station disabled" metro-station-name="Курская (Арбатско-Покровская линия)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Курская
                        (Арбатско-Покровская линия)
                    </text>
                    <circle class="st53" cx="1185.6" cy="722.6" r="11.8"></circle>
                    <circle class="st33" cx="1185.6" cy="722.6" r="4.7"></circle>
                    <circle class="st52 metro-point" cx="1185.6" cy="722.6" r="13.9"></circle>
                </g>
            </g>
            <g id="g4l8" class="metro-station disabled" metro-station-group="">
                <text transform="matrix(1 0 0 1 1080.2871 919.1007)" class="st26 st27">Таганская</text>
                <g id="s6c1l8" class="metro-station disabled" metro-station-name="Таганская (Кольцевая линия)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Таганская (Кольцевая
                        линия)
                    </text>
                    <circle class="st39" cx="1166.5" cy="940.4" r="11.8"></circle>
                    <circle class="st33" cx="1166.5" cy="940.4" r="4.7"></circle>
                    <circle class="st40 metro-point" cx="1166.5" cy="940.2" r="13.9"></circle>
                </g>
                <g id="s6c2l8" class="metro-station disabled"
                   metro-station-name="Таганская (Таганско-Краснопресненская линия)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Таганская
                        (Таганско-Краснопресненская линия)
                    </text>
                    <circle class="st32" cx="1186.3" cy="920.8" r="11.8"></circle>
                    <circle class="st33" cx="1186.3" cy="920.8" r="4.7"></circle>
                    <circle class="st29 metro-point" cx="1186.2" cy="920.7" r="13.9"></circle>
                </g>
            </g>
            <g id="g5l8" class="metro-station disabled" metro-station-group="">
                <text transform="matrix(1 0 0 1 997.3616 1139.2882)" class="st26 st27">Павелецкая</text>
                <g id="s7c1l8" class="metro-station disabled" metro-station-name="Павелецкая (Кольцевая линия)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Павелецкая (Кольцевая
                        линия)
                    </text>
                    <circle class="st39" cx="998.2" cy="1110.3" r="11.8"></circle>
                    <circle class="st33" cx="998.2" cy="1110.3" r="4.7"></circle>
                    <circle class="st40 metro-point" cx="998.3" cy="1110.2" r="13.9"></circle>
                </g>
                <g id="s7c2l8" class="metro-station disabled" metro-station-name="Павелецкая (Замоскворецкая линия)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Павелецкая
                        (Замоскворецкая линия)
                    </text>
                    <circle class="st38" cx="981.9" cy="1135.8" r="11.8"></circle>
                    <circle class="st33" cx="981.9" cy="1135.8" r="4.7"></circle>
                    <circle class="st37 metro-point" cx="981.7" cy="1135.8" r="13.9"></circle>
                </g>
            </g>
            <g id="s8l8" class="metro-station disabled" metro-station-name="Добрынинская">
                <text transform="matrix(1 0 0 1 782.0223 1124.9933)" class="st26 st27">Добрынинская</text>
                <circle class="st39" cx="770.6" cy="1139.3" r="11.8"></circle>
                <circle class="st33" cx="770.6" cy="1139.3" r="4.7"></circle>
                <circle class="st40 metro-point" cx="770.6" cy="1139.3" r="13.9"></circle>
            </g>
            <g id="g6l8" class="metro-station disabled" metro-station-group="">
                <text transform="matrix(1 0 0 1 513.7142 1101.2648)" class="st26 st27">Октябрьская</text>
                <g id="s9c1l8" class="metro-station disabled" metro-station-name="Октябрьская (Кольцевая линия)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Октябрьская (Кольцевая
                        линия)
                    </text>
                    <circle class="st39" cx="635.9" cy="1080.6" r="11.8"></circle>
                    <circle class="st33" cx="635.9" cy="1080.6" r="4.7"></circle>
                    <circle class="st40 metro-point" cx="635.9" cy="1080.6" r="13.9"></circle>
                </g>
                <g id="s9c2l8" class="metro-station disabled" metro-station-name="Октябрьская (Калужско-Рижская линия)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Октябрьская
                        (Калужско-Рижская линия)
                    </text>
                    <circle class="st34" cx="635.9" cy="1110.5" r="11.8"></circle>
                    <circle class="st33" cx="635.9" cy="1110.5" r="4.7"></circle>
                    <circle class="st35 metro-point" cx="635.8" cy="1110.6" r="13.9"></circle>
                </g>
            </g>
            <g id="g7l8" class="metro-station disabled" metro-station-group="">
                <text transform="matrix(1 0 0 1 493.2133 1000.4962)" class="st26 st27">Парк</text>
                <text transform="matrix(1 0 0 1 458.1945 1018.6661)" class="st26 st27">культуры</text>
                <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Парк культуры</text>
                <g id="s10c1l8" class="metro-station disabled" metro-station-name="Парк культуры (Кольцевая линия)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Парк культуры
                        (Кольцевая линия)
                    </text>
                    <circle class="st39" cx="552.6" cy="992.7" r="11.8"></circle>
                    <circle class="st33" cx="552.6" cy="992.7" r="4.7"></circle>
                    <circle class="st40 metro-point" cx="552.6" cy="992.7" r="13.9"></circle>
                </g>
                <g id="s10c2l8" class="metro-station disabled"
                   metro-station-name="Парк культуры (Сокольническая линия)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Парк культуры
                        (Сокольническая линия)
                    </text>
                    <circle class="st41" cx="515" cy="972.3" r="11.8"></circle>
                    <circle class="st33" cx="515" cy="972.3" r="4.7"></circle>
                    <circle class="st42 metro-point" cx="515" cy="972.1" r="13.9"></circle>
                </g>
            </g>
            <g id="g8l8" class="metro-station disabled" metro-station-group="">
                <text transform="matrix(1 0 0 1 397.7927 845.8898)" class="st26 st27">Киевская</text>
                <g id="s11c1l8" class="metro-station disabled" metro-station-name="Киевская (Кольцевая линия)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Киевская (Кольцевая
                        линия)
                    </text>
                    <circle class="st39" cx="494.1" cy="841.4" r="11.8"></circle>
                    <circle class="st33" cx="494.1" cy="841.4" r="4.7"></circle>
                    <circle class="st40 metro-point" cx="494.2" cy="841.4" r="13.9"></circle>
                </g>
                <g id="s11c2l8" class="metro-station disabled" metro-station-name="Киевская (Филевская линия)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Киевская (Филевская
                        линия)
                    </text>
                    <circle class="st48" cx="450.6" cy="816.9" r="11.8"></circle>
                    <circle class="st33" cx="450.6" cy="816.9" r="4.7"></circle>
                    <circle class="st49 metro-point" cx="450.5" cy="816.8" r="13.9"></circle>
                </g>
                <g id="s11c3l8" class="metro-station disabled"
                   metro-station-name="Киевская (Арбатско-Покровская линия)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Киевская
                        (Арбатско-Покровская линия)
                    </text>
                    <circle class="st53" cx="450.1" cy="866.4" r="11.8"></circle>
                    <circle class="st33" cx="450.1" cy="866.4" r="4.7"></circle>
                    <circle class="st52 metro-point" cx="450" cy="866.3" r="13.9"></circle>
                </g>
            </g>
        </g>
        <g id="l9">
            <g id="s1l9" class="metro-station disabled" metro-station-name="Каховская">
                <text transform="matrix(1 0 0 1 624.327 1593.4093)" class="st26 st27">Каховская</text>
                <circle class="st62" cx="729.9" cy="1588.7" r="11.8"></circle>
                <circle class="st33" cx="729.9" cy="1588.7" r="4.7"></circle>
                <circle class="st63 metro-point" cx="729.8" cy="1588.7" r="13.9"></circle>
            </g>
            <g id="s2l9" class="metro-station disabled" metro-station-name="Варшавская">
                <line class="st64" x1="881.3" y1="1588.2" x2="881.3" y2="1575.6"></line>
                <text transform="matrix(1 0 0 1 828.2999 1571.0509)" class="st26 st27">Варшавская</text>
                <circle class="st63 metro-point" cx="881" cy="1587.7" r="13.9"></circle>
            </g>
            <g id="g1l9" class="metro-station disabled" metro-station-group="">
                <text transform="matrix(1 0 0 1 998.8711 1543.2433)" class="st26 st27">Каширская</text>
                <g id="s3c1l9" class="metro-station disabled" metro-station-name="Каширская (Замоскворецкая кольцо)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Каширская
                        (Замоскворецкая кольцо)
                    </text>
                    <circle class="st62" cx="1003.7" cy="1561.8" r="11.8"></circle>
                    <circle class="st33" cx="1003.7" cy="1561.8" r="4.7"></circle>
                    <circle class="st63 metro-point" cx="1003.8" cy="1561.8" r="13.9"></circle>
                </g>
                <g id="s3c2l9" class="metro-station disabled" metro-station-name="Каширская (Каховская линия)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Каширская (Каховская
                        линия)
                    </text>
                    <circle class="st38" cx="981.9" cy="1540.4" r="11.8"></circle>
                    <circle class="st33" cx="981.9" cy="1540.4" r="4.7"></circle>
                    <circle class="st37 metro-point" cx="981.7" cy="1540.4" r="13.9"></circle>
                </g>
            </g>
        </g>
        <g id="l10">
            <g id="s1l10" class="metro-station disabled" metro-station-name="Алтуфьево">
                <text transform="matrix(1 0 0 1 784.5168 18.1328)" class="st26 st27">Алтуфьево</text>
                <line class="st65" x1="754.6" y1="14.3" x2="780.1" y2="14.3"></line>
                <circle class="st61 metro-point" cx="767.2" cy="13.9" r="13.9"></circle>
            </g>
            <g id="s2l10" class="metro-station disabled" metro-station-name="Бибирево">
                <text transform="matrix(1 0 0 1 784.5168 64.0851)" class="st26 st27">Бибирево</text>
                <line class="st65" x1="767.4" y1="60.2" x2="779.9" y2="60.2"></line>
                <circle class="st61 metro-point" cx="767.2" cy="60.3" r="13.9"></circle>
            </g>
            <g id="s3l10" class="metro-station disabled" metro-station-name="Отрадное">
                <text transform="matrix(1 0 0 1 784.5168 110.0586)" class="st26 st27">Отрадное</text>
                <line class="st65" x1="767.4" y1="105.5" x2="779.9" y2="105.5"></line>
                <circle class="st61 metro-point" cx="767.2" cy="105" r="13.9"></circle>
            </g>
            <g id="s54l10" class="metro-station disabled" metro-station-name="Тимирязевская">
                <text transform="matrix(1 0 0 1 685.6149 319.6485)" class="st26 st27">Тимирязевская</text>
                <circle class="st60" cx="668.4" cy="314.7" r="11.8"></circle>
                <circle class="st33" cx="668.4" cy="314.7" r="4.7"></circle>
                <circle class="st61 metro-point" cx="668.4" cy="314.6" r="13.9"></circle>
            </g>
            <g id="s5l10" class="metro-station disabled" metro-station-name="Дмитровская">
                <text transform="matrix(1 0 0 1 685.5071 370.4474)" class="st26 st27">Дмитровская</text>
                <line class="st65" x1="668.4" y1="366.9" x2="680.9" y2="366.9"></line>
                <circle class="st61 metro-point" cx="668.2" cy="366.7" r="13.9"></circle>
            </g>
            <g id="s6l10" class="metro-station disabled" metro-station-name="Савёловская">
                <text transform="matrix(1 0 0 1 685.5071 406.961)" class="st26 st27">Савёловская</text>
                <line class="st65" x1="668.4" y1="403.2" x2="680.9" y2="403.2"></line>
                <circle class="st61 metro-point" cx="668.2" cy="403.1" r="13.9"></circle>
            </g>
            <g id="s7l10" class="metro-station disabled" metro-station-name="Менделеевская">
                <text transform="matrix(1 0 0 1 698.9561 518.2939)" class="st26 st27">Менделеевская</text>
                <circle class="st60" cx="727.8" cy="489.6" r="11.8"></circle>
                <circle class="st33" cx="727.8" cy="489.6" r="4.7"></circle>
                <circle class="st61 metro-point" cx="727.9" cy="489.6" r="13.9"></circle>
            </g>
            <g id="s8l10" class="metro-station disabled" metro-station-name="Цветной бульвар">
                <text transform="matrix(1 0 0 1 734.5352 605.6476)" class="st26 st27">Цветной</text>
                <text transform="matrix(1 0 0 1 734.5352 624.0753)" class="st26 st27">бульвар</text>
                <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Цветной бульвар</text>
                <circle class="st60" cx="819.6" cy="585.5" r="11.8"></circle>
                <circle class="st33" cx="819.6" cy="585.5" r="4.7"></circle>
                <circle class="st61 metro-point" cx="819.6" cy="585.4" r="13.9"></circle>
            </g>
            <g id="s9l10" class="metro-station disabled" metro-station-name="Чеховская">
                <text transform="matrix(1 0 0 1 770.608 740.3263)" class="st26 st27">Чеховская</text>
                <circle class="st60" cx="756.7" cy="731.6" r="11.8"></circle>
                <circle class="st33" cx="756.7" cy="731.6" r="4.7"></circle>
                <circle class="st61 metro-point" cx="756.7" cy="731.6" r="13.9"></circle>
            </g>
            <g id="s10l10" class="metro-station disabled" metro-station-name="Боровицкая">
                <circle class="st60" cx="678.7" cy="899.3" r="11.8"></circle>
                <circle class="st33" cx="678.7" cy="899.3" r="4.7"></circle>
                <text transform="matrix(1 0 0 1 559.7585 906.6505)" class="st26 st27">Боровицкая</text>
                <circle class="st61 metro-point" cx="678.8" cy="899.2" r="13.9"></circle>
            </g>
            <g id="s11l10" class="metro-station disabled" metro-station-name="Полянка">
                <text transform="matrix(1 0 0 1 766.4385 1086.4366)" class="st26 st27">Полянка</text>
                <line class="st65" x1="751.4" y1="1082.7" x2="764" y2="1082.7"></line>
                <circle class="st61 metro-point" cx="751.3" cy="1082.5" r="13.9"></circle>
            </g>
            <g id="s12l10" class="metro-station disabled" metro-station-name="Серпуховская">
                <text transform="matrix(1 0 0 1 767.4749 1181.715)" class="st26 st27">Серпуховская</text>
                <circle class="st60" cx="751.4" cy="1162.7" r="11.8"></circle>
                <circle class="st33" cx="751.4" cy="1162.7" r="4.7"></circle>
                <circle class="st61 metro-point" cx="751.3" cy="1162.8" r="13.9"></circle>
            </g>
            <g id="s13l10" class="metro-station disabled" metro-station-name="Тульская">
                <text transform="matrix(1 0 0 1 766.4385 1262.255)" class="st26 st27">Тульская</text>
                <line class="st65" x1="751.4" y1="1258.5" x2="764" y2="1258.5"></line>
                <circle class="st61 metro-point" cx="751.3" cy="1258.3" r="13.9"></circle>
            </g>
            <g id="s14l10" class="metro-station disabled" metro-station-name="Нагатинская">
                <text transform="matrix(1 0 0 1 766.4385 1437.3693)" class="st26 st27">Нагатинская</text>
                <line class="st65" x1="751.4" y1="1433.6" x2="764" y2="1433.6"></line>
                <circle class="st61 metro-point" cx="751.3" cy="1433.4" r="13.9"></circle>
            </g>
            <g id="s15l10" class="metro-station disabled" metro-station-name="Нагорная">
                <text transform="matrix(1 0 0 1 766.4385 1475.5929)" class="st26 st27">Нагорная</text>
                <line class="st65" x1="751.4" y1="1472.2" x2="764" y2="1472.2"></line>
                <circle class="st61 metro-point" cx="751.3" cy="1472.3" r="13.9"></circle>
            </g>
            <g id="s16l10" class="metro-station disabled" metro-station-name="Нахимовский проспект">
                <text transform="matrix(1 0 0 1 766.4385 1513.5021)" class="st26 st27">Нахимовский</text>
                <text transform="matrix(1 0 0 1 766.4385 1531.5021)" class="st26 st27">проспект</text>
                <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Нахимовский проспект</text>
                <line class="st65" x1="751.4" y1="1510.1" x2="764" y2="1510.1"></line>
                <circle class="st61 metro-point" cx="751.3" cy="1510.1" r="13.9"></circle>
            </g>
            <g id="s17l10" class="metro-station disabled" metro-station-name="Севастопольская">
                <text transform="matrix(1 0 0 1 766.4385 1622.3712)" class="st26 st27">Севастопольская</text>
                <circle class="st60" cx="751.4" cy="1611.3" r="11.8"></circle>
                <circle class="st33" cx="751.4" cy="1611.3" r="4.7"></circle>
                <circle class="st61 metro-point" cx="751.3" cy="1611.5" r="13.9"></circle>
            </g>
            <g id="s18l10" class="metro-station disabled" metro-station-name="Чертановская">
                <text transform="matrix(1 0 0 1 766.4385 1660.2568)" class="st26 st27">Чертановская</text>
                <line class="st65" x1="751.4" y1="1656.5" x2="764" y2="1656.5"></line>
                <circle class="st61 metro-point" cx="751.3" cy="1656.3" r="13.9"></circle>
            </g>
            <g id="s19l10" class="metro-station disabled" metro-station-name="Южная">
                <text transform="matrix(1 0 0 1 766.4385 1696.5449)" class="st26 st27">Южная</text>
                <line class="st65" x1="751.4" y1="1692.8" x2="764" y2="1692.8"></line>
                <circle class="st61 metro-point" cx="751.3" cy="1692.8" r="13.9"></circle>
            </g>
            <g id="s20l10" class="metro-station disabled" metro-station-name="Пражская">
                <text transform="matrix(1 0 0 1 766.4385 1732.9463)" class="st26 st27">Пражская</text>
                <line class="st65" x1="751.4" y1="1729.2" x2="764" y2="1729.2"></line>
                <circle class="st61 metro-point" cx="751.3" cy="1729" r="13.9"></circle>
            </g>
            <g id="s21l10" class="metro-station disabled" metro-station-name="Ул. Академика Янгеля">
                <text transform="matrix(1 0 0 1 766.4385 1769.5938)" class="st26 st27">Ул. Академика Янгеля</text>
                <line class="st65" x1="751.4" y1="1766.6" x2="764" y2="1766.6"></line>
                <circle class="st61 metro-point" cx="751.3" cy="1766.5" r="13.9"></circle>
            </g>
            <g id="s22l10" class="metro-station disabled" metro-station-name="Аннино">
                <text transform="matrix(1 0 0 1 766.4385 1805.8877)" class="st26 st27">Аннино</text>
                <line class="st65" x1="751.4" y1="1802" x2="764" y2="1802"></line>
                <circle class="st61 metro-point" cx="751.3" cy="1802" r="13.9"></circle>
            </g>
            <g id="s23l10" class="metro-station disabled" metro-station-name="Бульвар Дмитрия Донского">
                <text transform="matrix(1 0 0 1 766.1578 1842.2334)" class="st26 st27">Бульвар Дмитрия</text>
                <text transform="matrix(1 0 0 1 766.1578 1860.4033)" class="st26 st27">Донского</text>
                <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Бульвар Дмитрия Донского
                </text>
                <circle class="st60" cx="751.1" cy="1837.8" r="11.8"></circle>
                <circle class="st33" cx="751.1" cy="1837.8" r="4.7"></circle>
                <circle class="st61 metro-point" cx="751" cy="1837.6" r="13.9"></circle>
            </g>
        </g>
        <g id="l11">
            <g id="s1l11" class="metro-station disabled" metro-station-name="Медведково">
                <text transform="matrix(1 0 0 1 1070.4453 19.214)" class="st26 st27">Медведково</text>
                <line class="st66" x1="1039.9" y1="14.7" x2="1065.4" y2="14.7"></line>
                <circle class="st35 metro-point" cx="1052.6" cy="14.9" r="13.9"></circle>
            </g>
            <g id="s2l11" class="metro-station disabled" metro-station-name="Бабушкинская">
                <text transform="matrix(1 0 0 1 1070.4453 69.8478)" class="st26 st27">Бабушкинская</text>
                <line class="st66" x1="1052.9" y1="65.5" x2="1065.4" y2="65.5"></line>
                <circle class="st35 metro-point" cx="1052.6" cy="65.4" r="13.9"></circle>
            </g>
            <g id="s3l11" class="metro-station disabled" metro-station-name="Свиблово">
                <text transform="matrix(1 0 0 1 1070.4451 120.8409)" class="st26 st27">Свиблово</text>
                <line class="st66" x1="1052.9" y1="116.7" x2="1065.4" y2="116.7"></line>
                <circle class="st35 metro-point" cx="1052.6" cy="116.7" r="13.9"></circle>
            </g>
            <g id="s4l11" class="metro-station disabled" metro-station-name="ВДНХ">
                <text transform="matrix(1 0 0 1 1070.4453 323.3849)" class="st26 st27">ВДНХ</text>
                <circle class="st34" cx="1052.7" cy="315.5" r="11.8"></circle>
                <circle class="st33" cx="1052.7" cy="315.5" r="4.7"></circle>
                <circle class="st35 metro-point" cx="1052.6" cy="315.5" r="13.9"></circle>
            </g>
            <g id="s5l11" class="metro-station disabled" metro-station-name="Алексеевская">
                <text transform="matrix(1 0 0 1 1070.4453 357.5996)" class="st26 st27">Алексеевская</text>
                <line class="st66" x1="1052.9" y1="353.8" x2="1065.4" y2="353.8"></line>
                <circle class="st35 metro-point" cx="1052.6" cy="353.7" r="13.9"></circle>
            </g>
            <g id="s6l11" class="metro-station disabled" metro-station-name="Рижская">
                <text transform="matrix(1 0 0 1 1052.3328 404.1524)" class="st26 st27">Рижская</text>
                <line class="st66" x1="1036.8" y1="381.4" x2="1045.6" y2="390.3"></line>
                <circle class="st35 metro-point" cx="1037.5" cy="386.4" r="13.9"></circle>
            </g>
            <g id="s7l11" class="metro-station disabled" metro-station-name="Сухаревская">
                <text transform="matrix(1 0 0 1 957.9287 540.8116)" class="st26 st27">Сухаревская</text>
                <line class="st66" x1="940.9" y1="537.2" x2="953.5" y2="537.2"></line>
                <circle class="st35 metro-point" cx="941" cy="537.2" r="13.9"></circle>
            </g>
            <g id="s8l11" class="metro-station disabled" metro-station-name="Тургеневская">
                <text transform="matrix(1 0 0 1 855.8096 647.5197)" class="st26 st27">Тургеневская</text>
                <circle class="st34" cx="988.2" cy="640.8" r="11.8"></circle>
                <circle class="st33" cx="988.2" cy="640.8" r="4.7"></circle>
                <circle class="st35 metro-point" cx="988.2" cy="640.8" r="13.9"></circle>
            </g>
            <g id="g1l11" class="metro-station disabled" metro-station-group="">
                <text transform="matrix(1 0 0 1 824.9036 1016.422)" class="st26 st27">Третьяковская</text>
                <g id="s9c1l11" class="metro-station disabled"
                   metro-station-name="Третьяковская (Калужско-Рижская линия)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Третьяковская
                        (Калужско-Рижская линия)
                    </text>
                    <circle class="st34" cx="948.5" cy="987.8" r="11.8"></circle>
                    <circle class="st33" cx="948.5" cy="987.8" r="4.7"></circle>
                    <circle class="st35 metro-point" cx="948.5" cy="987.7" r="13.9"></circle>
                </g>
                <g id="s9c2l11" class="metro-station disabled" metro-station-name="Третьяковская (Калининская линия)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Третьяковская
                        (Калининская линия)
                    </text>
                    <circle class="st54" cx="968.6" cy="1008.1" r="11.8"></circle>
                    <circle class="st33" cx="968.6" cy="1008.1" r="4.7"></circle>
                    <circle class="st55 metro-point" cx="968.8" cy="1008" r="13.9"></circle>
                </g>
            </g>
            <g id="s10l11" class="metro-station disabled" metro-station-name="Шаболовская">
                <text transform="matrix(1 0 0 1 593.1746 1189.7843)" class="st26 st27">Шаболовская</text>
                <line class="st66" x1="581.8" y1="1162.8" x2="590.7" y2="1171.7"></line>
                <circle class="st35 metro-point" cx="583.4" cy="1164.3" r="13.9"></circle>
            </g>
            <g id="s11l11" class="metro-station disabled" metro-station-name="Ленинский проспект">
                <text transform="matrix(1 0 0 1 528.2855 1262.3947)" class="st26 st27">Ленинский</text>
                <text transform="matrix(1 0 0 1 528.2855 1279.2335)" class="st26 st27">проспект</text>
                <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Ленинский проспект</text>
                <circle class="st34" cx="517.7" cy="1290.3" r="11.8"></circle>
                <circle class="st33" cx="517.7" cy="1290.3" r="4.7"></circle>
                <circle class="st35 metro-point" cx="517.7" cy="1290.3" r="13.9"></circle>
            </g>
            <g id="s12l11" class="metro-station disabled" metro-station-name="Академическая">
                <text transform="matrix(1 0 0 1 536.1689 1417.1847)" class="st26 st27">Академическая</text>
                <line class="st66" x1="517.8" y1="1412.8" x2="530.4" y2="1412.8"></line>
                <circle class="st35 metro-point" cx="517.7" cy="1412.9" r="13.9"></circle>
            </g>
            <g id="s13l11" class="metro-station disabled" metro-station-name="Профсоюзная">
                <text transform="matrix(1 0 0 1 536.1689 1457.6388)" class="st26 st27">Профсоюзная</text>
                <line class="st66" x1="517.8" y1="1453.8" x2="530.4" y2="1453.8"></line>
                <circle class="st35 metro-point" cx="517.7" cy="1453.9" r="13.9"></circle>
            </g>
            <g id="s14l11" class="metro-station disabled" metro-station-name="Новые Черёмушки">
                <text transform="matrix(1 0 0 1 536.1689 1498.6222)" class="st26 st27">Новые Черёмушки</text>
                <line class="st66" x1="517.8" y1="1494" x2="530.4" y2="1494"></line>
                <circle class="st35 metro-point" cx="517.7" cy="1494.2" r="13.9"></circle>
            </g>
            <g id="s15l11" class="metro-station disabled" metro-station-name="Калужская">
                <text transform="matrix(1 0 0 1 536.1689 1539.7355)" class="st26 st27">Калужская</text>
                <line class="st66" x1="517.8" y1="1535.5" x2="530.4" y2="1535.5"></line>
                <circle class="st35 metro-point" cx="517.7" cy="1535.6" r="13.9"></circle>
            </g>
            <g id="s16l11" class="metro-station disabled" metro-station-name="Беляево">
                <text transform="matrix(1 0 0 1 536.1689 1581.2491)" class="st26 st27">Беляево</text>
                <line class="st66" x1="517.8" y1="1577.6" x2="530.4" y2="1577.6"></line>
                <circle class="st35 metro-point" cx="517.7" cy="1577.7" r="13.9"></circle>
            </g>
            <g id="s17l11" class="metro-station disabled" metro-station-name="Коньково">
                <text transform="matrix(1 0 0 1 536.1689 1623.6066)" class="st26 st27">Коньково</text>
                <line class="st66" x1="517.8" y1="1619" x2="530.4" y2="1619"></line>
                <circle class="st35 metro-point" cx="517.7" cy="1619.1" r="13.9"></circle>
            </g>
            <g id="s18l11" class="metro-station disabled" metro-station-name="Тёплый стан">
                <text transform="matrix(1 0 0 1 536.1689 1664.2842)" class="st26 st27">Тёплый стан</text>
                <line class="st66" x1="517.8" y1="1659.9" x2="530.4" y2="1659.9"></line>
                <circle class="st35 metro-point" cx="517.7" cy="1660.1" r="13.9"></circle>
            </g>
            <g id="s19l11" class="metro-station disabled" metro-station-name="Ясенево">
                <text transform="matrix(1 0 0 1 536.1689 1703.8213)" class="st26 st27">Ясенево</text>
                <line class="st66" x1="517.8" y1="1699.9" x2="530.4" y2="1699.9"></line>
                <circle class="st35 metro-point" cx="517.7" cy="1700" r="13.9"></circle>
            </g>
            <g id="s20l11" class="metro-station disabled" metro-station-name="Новоясеневская">
                <text transform="matrix(1 0 0 1 554.3875 1744.9268)" class="st26 st27">Новоясеневская</text>
                <circle class="st34" cx="540.1" cy="1740.3" r="11.8"></circle>
                <circle class="st33" cx="540.1" cy="1740.3" r="4.7"></circle>
                <circle class="st35 metro-point" cx="539.9" cy="1740.1" r="13.9"></circle>
            </g>
        </g>
        <g id="l12">
            <g id="g1l12" class="metro-station disabled" metro-station-group="">
                <text transform="matrix(1 0 0 1 1231.1125 308.0519)" class="st26 st27">Бульвар Рокоссовского</text>
                <g id="s1c1l12" class="metro-station disabled"
                   metro-station-name="Бульвар Рокоссовского (Сокольническая линия)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Бульвар Рокоссовского
                        (Сокольническая линия)
                    </text>
                    <circle class="st41" cx="1299.4" cy="327.8" r="11.8"></circle>
                    <circle class="st33" cx="1299.4" cy="327.8" r="4.7"></circle>
                    <circle class="st42 metro-point" cx="1299.4" cy="327.7" r="13.9"></circle>
                </g>
                <g id="s1c2l12" class="metro-station disabled"
                   metro-station-name="Бульвар Рокоссовского (Московское центральное кольцо)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Бульвар Рокоссовского
                        (Московское центральное кольцо)
                    </text>
                    <circle class="st43" cx="1236.6" cy="327.7" r="11.8"></circle>
                    <circle class="st33" cx="1236.6" cy="327.7" r="4.7"></circle>
                    <circle class="st44 metro-point" cx="1236.6" cy="327.7" r="13.9"></circle>
                </g>
            </g>
            <g id="s2l12" class="metro-station disabled" metro-station-name="Черкизовская">
                <text transform="matrix(1 0 0 1 1139.0674 393.1476)" class="st26 st27">Черкизовская</text>
                <circle class="st41" cx="1275.8" cy="388.9" r="11.8"></circle>
                <circle class="st33" cx="1275.8" cy="388.9" r="4.7"></circle>
                <circle class="st42 metro-point" cx="1275.8" cy="388.9" r="13.9"></circle>
            </g>
            <g id="s3l12" class="metro-station disabled" metro-station-name="Преображенская пл.">
                <text transform="matrix(1 0 0 1 1252.127 445.1212)" class="st26 st27">Преображенская пл.</text>
                <line class="st67" x1="1241.5" y1="420.1" x2="1250.4" y2="429.1"></line>
                <circle class="st42 metro-point" cx="1241.6" cy="421.8" r="13.9"></circle>
            </g>
            <g id="s4l12" class="metro-station disabled" metro-station-name="Сокольники">
                <text transform="matrix(1 0 0 1 1216.4675 481.4249)" class="st26 st27">Сокольники</text>
                <line class="st67" x1="1206" y1="456.8" x2="1214.9" y2="465.7"></line>
                <circle class="st42 metro-point" cx="1206.5" cy="458.2" r="13.9"></circle>
            </g>
            <g id="s5l12" class="metro-station disabled" metro-station-name="Красносельская">
                <text transform="matrix(1 0 0 1 1181.3867 519.1329)" class="st26 st27">Красносельская</text>
                <line class="st67" x1="1170.7" y1="492.5" x2="1179.6" y2="501.4"></line>
                <circle class="st42 metro-point" cx="1170.9" cy="493.8" r="13.9"></circle>
            </g>
            <g id="s6l12" class="metro-station disabled" metro-station-name="Красные Ворота">
                <text transform="matrix(1 0 0 1 1082.2061 616.9775)" class="st26 st27">Красные Ворота</text>
                <line class="st67" x1="1072.3" y1="591.6" x2="1081.2" y2="600.5"></line>
                <circle class="st42 metro-point" cx="1072.2" cy="591.2" r="13.9"></circle>
            </g>
            <g id="s7l12" class="metro-station disabled" metro-station-name="Чистые пруды">
                <text transform="matrix(1 0 0 1 1039.0374 658.9298)" class="st26 st27">Чистые пруды</text>
                <circle class="st41" cx="1023.6" cy="640.9" r="11.8"></circle>
                <circle class="st33" cx="1023.6" cy="640.9" r="4.7"></circle>
                <circle class="st42 metro-point" cx="1023.6" cy="640.9" r="13.9"></circle>
            </g>
            <g id="s8l12" class="metro-station disabled" metro-station-name="Лубянка">
                <text transform="matrix(1 0 0 1 928.6511 761.8341)" class="st26 st27">Лубянка</text>
                <circle class="st41" cx="931.9" cy="731.8" r="11.8"></circle>
                <circle class="st33" cx="931.9" cy="731.8" r="4.7"></circle>
                <circle class="st42 metro-point" cx="931.9" cy="731.8" r="13.9"></circle>
            </g>
            <g id="s9l12" class="metro-station disabled" metro-station-name="Охотный ряд">
                <text transform="matrix(1 0 0 1 754.7393 802.9913)" class="st26 st27">Охотный</text>
                <text transform="matrix(1 0 0 1 799.8594 820.9913)" class="st26 st27">Ряд</text>
                <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Охотный ряд</text>
                <circle class="st41" cx="848.5" cy="815" r="11.8"></circle>
                <circle class="st33" cx="848.5" cy="815" r="4.7"></circle>
                <circle class="st42 metro-point" cx="848.5" cy="814.9" r="13.9"></circle>
            </g>
            <g id="s10l12" class="metro-station disabled" metro-station-name="Библиотека им. Ленина">
                <text transform="matrix(1 0 0 1 738.4958 958.0236)" class="st26 st27">Библиотека им. Ленина</text>
                <circle class="st41" cx="733" cy="930.5" r="11.8"></circle>
                <circle class="st33" cx="733" cy="930.5" r="4.7"></circle>
                <circle class="st42 metro-point" cx="733.1" cy="930.5" r="13.9"></circle>
            </g>
            <g id="s11l12" class="metro-station disabled" metro-station-name="Кропоткинская">
                <text transform="matrix(1 0 0 1 580.1022 1000.4083)" class="st26 st27">Кропоткинская</text>
                <line class="st67" x1="643.2" y1="971.8" x2="643.2" y2="984.3"></line>
                <circle class="st42 metro-point" cx="643.1" cy="971.4" r="13.9"></circle>
            </g>
            <g id="s12l12" class="metro-station disabled" metro-station-name="Фрунзенская">
                <text transform="matrix(1 0 0 1 435.5079 1048.462)" class="st26 st27">Фрунзенская</text>
                <line class="st67" x1="424.4" y1="1024.9" x2="433.3" y2="1033.8"></line>
                <circle class="st42 metro-point" cx="425.4" cy="1025.9" r="13.9"></circle>
            </g>
            <g id="s13l12" class="metro-station disabled" metro-station-name="Спортивная">
                <text transform="matrix(1 0 0 1 370.9135 1106.0109)" class="st26 st27">Спортивная</text>
                <line class="st67" x1="355" y1="1097.2" x2="363.9" y2="1106"></line>
                <circle class="st41" cx="354.9" cy="1096.1" r="11.8"></circle>
                <circle class="st33" cx="354.9" cy="1096.1" r="4.7"></circle>
                <circle class="st42 metro-point" cx="354.9" cy="1096.1" r="13.9"></circle>
            </g>
            <g id="s14l12" class="metro-station disabled" metro-station-name="Воробьёвы горы">
                <text transform="matrix(1 0 0 1 327.5089 1213.9972)" class="st26 st27">Воробьёвы горы</text>
                <line class="st67" x1="311.8" y1="1209.8" x2="324.4" y2="1209.8"></line>
                <circle class="st42 metro-point" cx="311.5" cy="1209.7" r="13.9"></circle>
            </g>
            <g id="s15l12" class="metro-station disabled" metro-station-name="Университет">
                <text transform="matrix(1 0 0 1 327.795 1276.1036)" class="st26 st27">Университет</text>
                <line class="st67" x1="311.8" y1="1271.9" x2="324.4" y2="1271.9"></line>
                <circle class="st42 metro-point" cx="311.5" cy="1271.8" r="13.9"></circle>
            </g>
            <g id="s16l12" class="metro-station disabled" metro-station-name="Проспект Вернадского">
                <text transform="matrix(1 0 0 1 327.7947 1366.0841)" class="st26 st27">Проспект</text>
                <text transform="matrix(1 0 0 1 327.7947 1384.0841)" class="st26 st27">Вернадского</text>
                <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Проспект Вернадского</text>
                <line class="st67" x1="311.8" y1="1332.4" x2="324.4" y2="1332.4"></line>
                <circle class="st42 metro-point" cx="311.5" cy="1362.4" r="13.9"></circle>
            </g>
            <g id="s17l12" class="metro-station disabled" metro-station-name="Юго-Западная">
                <text transform="matrix(1 0 0 1 327.7947 1418.256)" class="st26 st27">Юго-Западная</text>
                <line class="st67" x1="311.8" y1="1413.8" x2="324.4" y2="1413.8"></line>
                <circle class="st42 metro-point" cx="311.5" cy="1413.9" r="13.9"></circle>
            </g>
            <g id="s18l12" class="metro-station disabled" metro-station-name="Тропарёво">
                <text transform="matrix(1 0 0 1 328.795 1477.3331)" class="st26 st27">Тропарёво</text>
                <line class="st67" x1="310.5" y1="1473.9" x2="324" y2="1473.9"></line>
                <circle class="st42 metro-point" cx="311.5" cy="1473.9" r="13.9"></circle>
            </g>
            <g id="s19l12" class="metro-station disabled" metro-station-name="Румянцево">
                <text transform="matrix(1 0 0 1 327.7947 1539.923)" class="st26 st27">Румянцево</text>
                <line class="st67" x1="311.8" y1="1535.5" x2="324.4" y2="1535.5"></line>
                <circle class="st42 metro-point" cx="311.5" cy="1535.5" r="13.9"></circle>
            </g>
            <g id="s20l12" class="metro-station disabled" metro-station-name="Саларьево">
                <text transform="matrix(1 0 0 1 328.795 1598.9991)" class="st26 st27">Саларьево</text>
                <line class="st67" x1="298.5" y1="1595.6" x2="324" y2="1595.6"></line>
                <circle class="st42 metro-point" cx="311.5" cy="1595.6" r="13.9"></circle>
            </g>
        </g>
        <g id="l13">
            <g id="s1l13" class="metro-station disabled" metro-station-name="Локомотив">
                <text transform="matrix(1 0 0 1 1327.5098 404.6642)" class="st26 st27">Локомотив</text>
                <circle class="st43" cx="1310.9" cy="400.9" r="11.8"></circle>
                <circle class="st33" cx="1310.9" cy="400.9" r="4.7"></circle>
                <circle class="st44 metro-point" cx="1310.9" cy="400.9" r="13.9"></circle>
            </g>
            <g id="s2l13" class="metro-station disabled" metro-station-name="Измайлово">
                <text transform="matrix(1 0 0 1 1425.9822 560.2394)" class="st26 st27">Измайлово</text>
                <circle class="st43" cx="1409.4" cy="556.4" r="11.8"></circle>
                <circle class="st33" cx="1409.4" cy="556.4" r="4.7"></circle>
                <circle class="st44 metro-point" cx="1409.4" cy="556.4" r="13.9"></circle>
            </g>
            <g id="s3l13" class="metro-station disabled" metro-station-name="Соколиная Гора">
                <text transform="matrix(1 0 0 1 1439.4263 590.2208)" class="st26 st27">Соколиная</text>
                <text transform="matrix(1 0 0 1 1443.0176 608.6661)" class="st26 st27">Гора</text>
                <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Соколиная Гора</text>
                <line class="st68" x1="1433" y1="586.7" x2="1421.2" y2="591"></line>
                <circle class="st44 metro-point" cx="1421.2" cy="591" r="13.9"></circle>
            </g>
            <g id="s4l13" class="metro-station disabled" metro-station-name="Андроновка">
                <text transform="matrix(1 0 0 1 1469.5396 876.7579)" class="st26 st27">Андроновка</text>
                <line class="st68" x1="1463" y1="869.3" x2="1450.4" y2="868.1"></line>
                <circle class="st44 metro-point" cx="1451" cy="868.1" r="13.9"></circle>
            </g>
            <g id="s5l13" class="metro-station disabled" metro-station-name="Нижегородская">
                <text transform="matrix(1 0 0 1 1459.0413 928.839)" class="st26 st27">Нижегородская</text>
                <line class="st68" x1="1455.1" y1="915.6" x2="1442.6" y2="913.5"></line>
                <circle class="st44 metro-point" cx="1443.5" cy="913.6" r="13.9"></circle>
            </g>
            <g id="s6l13" class="metro-station disabled" metro-station-name="Новохохловская">
                <text transform="matrix(1 0 0 1 1446.5452 986.2394)" class="st26 st27">Новохохловская</text>
                <line class="st68" x1="1441.9" y1="972.9" x2="1429.7" y2="969.4"></line>
                <circle class="st44 metro-point" cx="1430.8" cy="969.4" r="13.9"></circle>
            </g>
            <g id="s7l13" class="metro-station disabled" metro-station-name="Угрешская">
                <text transform="matrix(1 0 0 1 1294.4326 1241.005)" class="st26 st27">Угрешская</text>
                <line class="st68" x1="1290.7" y1="1224.3" x2="1281.5" y2="1215.7"></line>
                <circle class="st44 metro-point" cx="1282.9" cy="1215.7" r="13.9"></circle>
            </g>
            <g id="s8l13" class="metro-station disabled" metro-station-name="ЗИЛ">
                <text transform="matrix(1 0 0 1 913.0906 1373.9943)" class="st26 st27">ЗИЛ</text>
                <line class="st68" x1="947.7" y1="1390.8" x2="945.7" y2="1378.3"></line>
                <circle class="st44 metro-point" cx="947.7" cy="1390.5" r="13.9"></circle>
            </g>
            <g id="s9l13" class="metro-station disabled" metro-station-name="Верхние Котлы">
                <text transform="matrix(1 0 0 1 801.6099 1362.8624)" class="st26 st27">Верхние</text>
                <text transform="matrix(1 0 0 1 812.7695 1381.8624)" class="st26 st27">Котлы</text>
                <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Верхние Котлы</text>
                <line class="st68" x1="838.8" y1="1400.1" x2="838.8" y2="1387.5"></line>
                <circle class="st44 metro-point" cx="838.8" cy="1398.6" r="13.9"></circle>
            </g>
            <g id="s10l13" class="metro-station disabled" metro-station-name="Крымская">
                <text transform="matrix(1 0 0 1 684.4377 1360.1241)" class="st26 st27">Крымская</text>
                <line class="st68" x1="682.5" y1="1376.9" x2="685.9" y2="1364.8"></line>
                <circle class="st44 metro-point" cx="683.2" cy="1376.7" r="13.9"></circle>
            </g>
            <g id="s11l13" class="metro-station disabled" metro-station-name="Пл. Гагарина">
                <text transform="matrix(1 0 0 1 562.7673 1314.7443)" class="st26 st27">Пл. Гагарина</text>
                <circle class="st43" cx="543.6" cy="1320.7" r="11.8"></circle>
                <circle class="st33" cx="543.6" cy="1320.7" r="4.7"></circle>
                <circle class="st44 metro-point" cx="543.6" cy="1320.7" r="13.9"></circle>
            </g>
            <g id="s12l13" class="metro-station disabled" metro-station-name="Лужники">
                <text transform="matrix(1 0 0 1 374.0522 1160.4572)" class="st26 st27">Лужники</text>
                <circle class="st43" cx="354.9" cy="1155.8" r="11.8"></circle>
                <circle class="st33" cx="354.9" cy="1155.8" r="4.7"></circle>
                <circle class="st44 metro-point" cx="354.9" cy="1155.8" r="13.9"></circle>
            </g>
            <g id="s13l13" class="metro-station disabled" metro-station-name="Деловой центр (МЦК)">
                <text transform="matrix(1 0 0 1 143.445 858.4962)" class="st26 st27">Деловой</text>
                <text transform="matrix(1 0 0 1 114.4451 876.7579)" class="st26 st27">центр (МЦК)</text>
                <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Деловой центр (МЦК)</text>
                <circle class="st43" cx="235.2" cy="841.8" r="11.8"></circle>
                <circle class="st33" cx="235.2" cy="841.8" r="4.7"></circle>
                <circle class="st44 metro-point" cx="235.2" cy="841.8" r="13.9"></circle>
            </g>
            <g id="s14l13" class="metro-station disabled" metro-station-name="Шелепиха">
                <text transform="matrix(1 0 0 1 243.4148 754.0138)" class="st26 st27">Шелепиха</text>
                <circle class="st43" cx="235.9" cy="724.7" r="11.8"></circle>
                <circle class="st33" cx="235.9" cy="724.7" r="4.7"></circle>
                <circle class="st44 metro-point" cx="235.9" cy="724.7" r="13.9"></circle>
            </g>
            <g id="s15l13" class="metro-station disabled" metro-station-name="Хорошёво">
                <text transform="matrix(1 0 0 1 158.9532 599.1808)" class="st26 st27">Хорошёво</text>
                <circle class="st43" cx="265" cy="596.2" r="11.8"></circle>
                <circle class="st33" cx="265" cy="596.2" r="4.7"></circle>
                <circle class="st44 metro-point" cx="265" cy="596.2" r="13.9"></circle>
            </g>
            <g id="s16l13" class="metro-station disabled" metro-station-name="Зорге">
                <line class="st68" x1="267" y1="558.1" x2="278.8" y2="562.6"></line>
                <text transform="matrix(1 0 0 1 215.1493 551.8302)" class="st26 st27">Зорге</text>
                <circle class="st44 metro-point" cx="278.8" cy="562.6" r="13.9"></circle>
            </g>
            <g id="s17l13" class="metro-station disabled" metro-station-name="Панфиловская">
                <circle class="st43" cx="315.7" cy="487.4" r="11.8"></circle>
                <circle class="st33" cx="315.7" cy="487.4" r="4.7"></circle>
                <text transform="matrix(1 0 0 1 282.1753 515.9132)" class="st26 st27">Панфиловская</text>
                <circle class="st44 metro-point" cx="315.7" cy="487.4" r="13.9"></circle>
            </g>
            <g id="s18l13" class="metro-station disabled" metro-station-name="Стрешнево">
                <line class="st68" x1="382.7" y1="378.4" x2="392.1" y2="386.8"></line>
                <text transform="matrix(1 0 0 1 283.2203 372.921)" class="st26 st27">Стрешнево</text>
                <circle class="st44 metro-point" cx="391.8" cy="386.3" r="13.9"></circle>
            </g>
            <g id="s19l13" class="metro-station disabled" metro-station-name="Балтийская">
                <circle class="st43" cx="434.4" cy="342.7" r="11.8"></circle>
                <circle class="st33" cx="434.4" cy="342.7" r="4.7"></circle>
                <text transform="matrix(1 0 0 1 320.4322 337.4326)" class="st26 st27">Балтийская</text>
                <circle class="st44 metro-point" cx="434.4" cy="342.7" r="13.9"></circle>
            </g>
            <g id="s20l13" class="metro-station disabled" metro-station-name="Коптево">
                <line class="st68" x1="557.3" y1="244.2" x2="563.2" y2="255.4"></line>
                <text transform="matrix(1 0 0 1 482.6105 237.167)" class="st26 st27">Коптево</text>
                <circle class="st44 metro-point" cx="562" cy="255.4" r="13.9"></circle>
            </g>
            <g id="s21l13" class="metro-station disabled" metro-station-name="Лихоборы">
                <line class="st68" x1="624.4" y1="214.2" x2="628.6" y2="226"></line>
                <text transform="matrix(1 0 0 1 534.7678 209.2599)" class="st26 st27">Лихоборы</text>
                <circle class="st44 metro-point" cx="628.1" cy="226" r="13.9"></circle>
            </g>
            <g id="s22l13" class="metro-station disabled" metro-station-name="Окружная">
                <line class="st68" x1="694.9" y1="192.2" x2="697.6" y2="204.5"></line>
                <text transform="matrix(1 0 0 1 634.6177 182.3566)" class="st26 st27">Окружная</text>
                <circle class="st44 metro-point" cx="697.6" cy="204.1" r="13.9"></circle>
            </g>
            <g id="g1l13" class="metro-station disabled" metro-station-group="">
                <text transform="matrix(1 0 0 1 784.5168 171.0841)" class="st26 st27">Владыкино</text>
                <g id="s23c1l13" class="metro-station disabled"
                   metro-station-name="Владыкино (Серпухово-Тимирязевская линия)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Владыкино
                        (Серпухово-Тимирязевская линия)
                    </text>
                    <circle class="st60" cx="767.2" cy="166.4" r="11.8"></circle>
                    <circle class="st33" cx="767.2" cy="166.4" r="4.7"></circle>
                    <circle class="st61 metro-point" cx="767.2" cy="166.4" r="13.9"></circle>
                </g>
                <g id="s23c2l13" class="metro-station disabled"
                   metro-station-name="Владыкино (Московское центральное кольцо)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Владыкино (Московское
                        центральное кольцо)
                    </text>
                    <circle class="st43" cx="788.2" cy="187.7" r="11.8"></circle>
                    <circle class="st33" cx="788.2" cy="187.7" r="4.7"></circle>
                    <circle class="st44 metro-point" cx="788.2" cy="187.7" r="13.9"></circle>
                </g>
            </g>
            <g id="g2l13" class="metro-station disabled" metro-station-group="">
                <text transform="matrix(1 0 0 1 905.948 157.666)" class="st26 st27">Ботанический</text>
                <text transform="matrix(1 0 0 1 997.3271 175.9015)" class="st26 st27">сад</text>
                <g id="s24c1l13" class="metro-station disabled"
                   metro-station-name="Ботанический сад (Московское центральное кольцо)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Ботанический сад
                        (Московское центральное кольцо)
                    </text>
                    <circle class="st43" cx="1011.2" cy="208.7" r="11.8"></circle>
                    <circle class="st33" cx="1011.2" cy="208.7" r="4.7"></circle>
                    <circle class="st44 metro-point" cx="1011.2" cy="208.7" r="13.9"></circle>
                </g>
                <g id="s24c2l13" class="metro-station disabled"
                   metro-station-name="Ботанический сад (Калужско-Рижская линия)">
                    <text transform="matrix(1 0 0 1 -139.9062 -232.6006)" class="st30 st26 st27">Ботанический сад
                        (Калужско-Рижская линия)
                    </text>
                    <circle class="st34" cx="1053.1" cy="165.5" r="11.8"></circle>
                    <circle class="st33" cx="1053.1" cy="165.5" r="4.7"></circle>
                    <circle class="st35 metro-point" cx="1053.1" cy="165.5" r="13.9"></circle>
                </g>
            </g>
            <g id="s25l13" class="metro-station disabled" metro-station-name="Ростокино">
                <text transform="matrix(1 0 0 1 1129.1614 235.5265)" class="st26 st27">Ростокино</text>
                <line class="st68" x1="1123.5" y1="239.1" x2="1117.3" y2="250.1"></line>
                <circle class="st44 metro-point" cx="1117.8" cy="250" r="13.9"></circle>
            </g>
            <g id="s26l13" class="metro-station disabled" metro-station-name="Белокаменная">
                <text transform="matrix(1 0 0 1 1192.7598 273.666)" class="st26 st27">Белокаменная</text>
                <line class="st68" x1="1189.4" y1="277.1" x2="1181.9" y2="287.2"></line>
                <circle class="st44 metro-point" cx="1182.5" cy="286.7" r="13.9"></circle>
            </g>
        </g>
</svg>-->
    <svg class="SVGInline metro-map-metroMap-_x_4_ metro-map-metroMapNew-A4CX4" xmlns="http://www.w3.org/2000/svg" viewBox="-40 -50 1050 1350"><style>@font-face { font-family: NotoSans; src: url("data:application/font-woff;charset=utf-8;base64,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"); } .line { fill: none; stroke-miterlimit: 10; stroke-width: 5; } .line4, .line14, .line19 { stroke-width: 4; } .line-half { stroke-width: 3.5; } .repair-st { fill-opacity: 0; stroke-width: 1; } .selected .st0:not(.line-number) { fill: #bee4fa; } .selected .label.st0.hovered:not(.line-number) { fill: #ff4053; } .selected .label.st0.hovered:not(.line-number) tspan { fill: #ff4053; } .selected .st0.hovered:not(.label):not(.line-number) { fill: #6fc2f4; } .selected .st0.hovered:not(.label):not(.line-number).repair-st { stroke: #bee4fa; } .st0:not(.line-number), .selected .st0:not(.line-number)[data-pick] { fill: #6fc2f4; } .st0:not(.line-number).repair-st, .selected .st0:not(.line-number)[data-pick].repair-st { stroke: #6fc2f4; } .line4 { stroke: #6fc2f4; } .selected .line4 { stroke: #bee4fa; } .selected .line4.hovered { stroke: #6fc2f4; } .selected .line4.hovered.line-select { stroke: none; fill: #6fc2f4; } .selected .line4[data-pick] { stroke: #6fc2f4; } .line4.line-select { fill: #6fc2f4; stroke: none; } .selected .line4.line-select { fill: #bee4fa; } .selected .line4.line-select[data-pick] { fill: #6fc2f4; stroke: none; } .selected .st1:not(.line-number) { fill: #d1d1d2; } .selected .label.st1.hovered:not(.line-number) { fill: #ff4053; } .selected .label.st1.hovered:not(.line-number) tspan { fill: #ff4053; } .selected .st1.hovered:not(.label):not(.line-number) { fill: #98999b; } .selected .st1.hovered:not(.label):not(.line-number).repair-st { stroke: #d1d1d2; } .st1:not(.line-number), .selected .st1:not(.line-number)[data-pick] { fill: #98999b; } .st1:not(.line-number).repair-st, .selected .st1:not(.line-number)[data-pick].repair-st { stroke: #98999b; } .selected .st33:not(.line-number) { fill: #d1d1d2; } .selected .label.st33.hovered:not(.line-number) { fill: #ff4053; } .selected .label.st33.hovered:not(.line-number) tspan { fill: #ff4053; } .selected .st33.hovered:not(.label):not(.line-number) { fill: #98999b; } .selected .st33.hovered:not(.label):not(.line-number).repair-st { stroke: #d1d1d2; } .st33:not(.line-number), .selected .st33:not(.line-number)[data-pick] { fill: #98999b; } .st33:not(.line-number).repair-st, .selected .st33:not(.line-number)[data-pick].repair-st { stroke: #98999b; } .line9 { stroke: #98999b; } .selected .line9 { stroke: #d1d1d2; } .selected .line9.hovered { stroke: #98999b; } .selected .line9.hovered.line-select { stroke: none; fill: #98999b; } .selected .line9[data-pick] { stroke: #98999b; } .line9.line-select { fill: #98999b; stroke: none; } .selected .line9.line-select { fill: #d1d1d2; } .selected .line9.line-select[data-pick] { fill: #98999b; stroke: none; } .selected .st2:not(.line-number) { fill: #c6b9d7; } .selected .label.st2.hovered:not(.line-number) { fill: #ff4053; } .selected .label.st2.hovered:not(.line-number) tspan { fill: #ff4053; } .selected .st2.hovered:not(.label):not(.line-number) { fill: #8063a6; } .selected .st2.hovered:not(.label):not(.line-number).repair-st { stroke: #c6b9d7; } .st2:not(.line-number), .selected .st2:not(.line-number)[data-pick] { fill: #8063a6; } .st2:not(.line-number).repair-st, .selected .st2:not(.line-number)[data-pick].repair-st { stroke: #8063a6; } .selected .st35:not(.line-number) { fill: #c6b9d7; } .selected .label.st35.hovered:not(.line-number) { fill: #ff4053; } .selected .label.st35.hovered:not(.line-number) tspan { fill: #ff4053; } .selected .st35.hovered:not(.label):not(.line-number) { fill: #8063a6; } .selected .st35.hovered:not(.label):not(.line-number).repair-st { stroke: #c6b9d7; } .st35:not(.line-number), .selected .st35:not(.line-number)[data-pick] { fill: #8063a6; } .st35:not(.line-number).repair-st, .selected .st35:not(.line-number)[data-pick].repair-st { stroke: #8063a6; } .line7 { stroke: #8063a6; } .selected .line7 { stroke: #c6b9d7; } .selected .line7.hovered { stroke: #8063a6; } .selected .line7.hovered.line-select { stroke: none; fill: #8063a6; } .selected .line7[data-pick] { stroke: #8063a6; } .line7.line-select { fill: #8063a6; stroke: none; } .selected .line7.line-select { fill: #c6b9d7; } .selected .line7.line-select[data-pick] { fill: #8063a6; stroke: none; } .selected .st31:not(.line-number) { fill: #fadadb; } .selected .label.st31.hovered:not(.line-number) { fill: #ff4053; } .selected .label.st31.hovered:not(.line-number) tspan { fill: #ff4053; } .selected .st31.hovered:not(.label):not(.line-number) { fill: #f3acb0; } .selected .st31.hovered:not(.label):not(.line-number).repair-st { stroke: #fadadb; } .st31:not(.line-number), .selected .st31:not(.line-number)[data-pick] { fill: #f3acb0; } .st31:not(.line-number).repair-st, .selected .st31:not(.line-number)[data-pick].repair-st { stroke: #f3acb0; } .line14 { stroke: #f3acb0; } .selected .line14 { stroke: #fadadb; } .selected .line14.hovered { stroke: #f3acb0; } .selected .line14.hovered.line-select { stroke: none; fill: #f3acb0; } .selected .line14[data-pick] { stroke: #f3acb0; } .line14.line-select { fill: #f3acb0; stroke: none; } .selected .line14.line-select { fill: #fadadb; } .selected .line14.line-select[data-pick] { fill: #f3acb0; stroke: none; } .selected .st6:not(.line-number) { fill: #dfeab6; } .selected .label.st6.hovered:not(.line-number) { fill: #ff4053; } .selected .label.st6.hovered:not(.line-number) tspan { fill: #ff4053; } .selected .st6.hovered:not(.label):not(.line-number) { fill: #b7d15c; } .selected .st6.hovered:not(.label):not(.line-number).repair-st { stroke: #dfeab6; } .st6:not(.line-number), .selected .st6:not(.line-number)[data-pick] { fill: #b7d15c; } .st6:not(.line-number).repair-st, .selected .st6:not(.line-number)[data-pick].repair-st { stroke: #b7d15c; } .selected .st38:not(.line-number) { fill: #dfeab6; } .selected .label.st38.hovered:not(.line-number) { fill: #ff4053; } .selected .label.st38.hovered:not(.line-number) tspan { fill: #ff4053; } .selected .st38.hovered:not(.label):not(.line-number) { fill: #b7d15c; } .selected .st38.hovered:not(.label):not(.line-number).repair-st { stroke: #dfeab6; } .st38:not(.line-number), .selected .st38:not(.line-number)[data-pick] { fill: #b7d15c; } .st38:not(.line-number).repair-st, .selected .st38:not(.line-number)[data-pick].repair-st { stroke: #b7d15c; } .line10 { stroke: #b7d15c; } .selected .line10 { stroke: #dfeab6; } .selected .line10.hovered { stroke: #b7d15c; } .selected .line10.hovered.line-select { stroke: none; fill: #b7d15c; } .selected .line10[data-pick] { stroke: #b7d15c; } .line10.line-select { fill: #b7d15c; stroke: none; } .selected .line10.line-select { fill: #dfeab6; } .selected .line10.line-select[data-pick] { fill: #b7d15c; stroke: none; } .selected .st26:not(.line-number) { fill: #fae5b0; } .selected .label.st26.hovered:not(.line-number) { fill: #ff4053; } .selected .label.st26.hovered:not(.line-number) tspan { fill: #ff4053; } .selected .st26.hovered:not(.label):not(.line-number) { fill: #f3c650; } .selected .st26.hovered:not(.label):not(.line-number).repair-st { stroke: #fae5b0; } .st26:not(.line-number), .selected .st26:not(.line-number)[data-pick] { fill: #f3c650; } .st26:not(.line-number).repair-st, .selected .st26:not(.line-number)[data-pick].repair-st { stroke: #f3c650; } .line8 { stroke: #f3c650; } .selected .line8 { stroke: #fae5b0; } .selected .line8.hovered { stroke: #f3c650; } .selected .line8.hovered.line-select { stroke: none; fill: #f3c650; } .selected .line8[data-pick] { stroke: #f3c650; } .line8.line-select { fill: #f3c650; stroke: none; } .selected .line8.line-select { fill: #fae5b0; } .selected .line8.line-select[data-pick] { fill: #f3c650; stroke: none; } .selected .st8:not(.line-number) { fill: #b3c4e2; } .selected .label.st8.hovered:not(.line-number) { fill: #ff4053; } .selected .label.st8.hovered:not(.line-number) tspan { fill: #ff4053; } .selected .st8.hovered:not(.label):not(.line-number) { fill: #557dbe; } .selected .st8.hovered:not(.label):not(.line-number).repair-st { stroke: #b3c4e2; } .st8:not(.line-number), .selected .st8:not(.line-number)[data-pick] { fill: #557dbe; } .st8:not(.line-number).repair-st, .selected .st8:not(.line-number)[data-pick].repair-st { stroke: #557dbe; } .line3 { stroke: #557dbe; } .selected .line3 { stroke: #b3c4e2; } .selected .line3.hovered { stroke: #557dbe; } .selected .line3.hovered.line-select { stroke: none; fill: #557dbe; } .selected .line3[data-pick] { stroke: #557dbe; } .line3.line-select { fill: #557dbe; stroke: none; } .selected .line3.line-select { fill: #b3c4e2; } .selected .line3.line-select[data-pick] { fill: #557dbe; stroke: none; } .selected .st9:not(.line-number) { fill: #c3dfbc; } .selected .label.st9.hovered:not(.line-number) { fill: #ff4053; } .selected .label.st9.hovered:not(.line-number) tspan { fill: #ff4053; } .selected .st9.hovered:not(.label):not(.line-number) { fill: #79b96b; } .selected .st9.hovered:not(.label):not(.line-number).repair-st { stroke: #c3dfbc; } .st9:not(.line-number), .selected .st9:not(.line-number)[data-pick] { fill: #79b96b; } .st9:not(.line-number).repair-st, .selected .st9:not(.line-number)[data-pick].repair-st { stroke: #79b96b; } .selected .st34:not(.line-number) { fill: #c3dfbc; } .selected .label.st34.hovered:not(.line-number) { fill: #ff4053; } .selected .label.st34.hovered:not(.line-number) tspan { fill: #ff4053; } .selected .st34.hovered:not(.label):not(.line-number) { fill: #79b96b; } .selected .st34.hovered:not(.label):not(.line-number).repair-st { stroke: #c3dfbc; } .st34:not(.line-number), .selected .st34:not(.line-number)[data-pick] { fill: #79b96b; } .st34:not(.line-number).repair-st, .selected .st34:not(.line-number)[data-pick].repair-st { stroke: #79b96b; } .selected .st29:not(.line-number) { fill: #c3dfbc; } .selected .label.st29.hovered:not(.line-number) { fill: #ff4053; } .selected .label.st29.hovered:not(.line-number) tspan { fill: #ff4053; } .selected .st29.hovered:not(.label):not(.line-number) { fill: #79b96b; } .selected .st29.hovered:not(.label):not(.line-number).repair-st { stroke: #c3dfbc; } .st29:not(.line-number), .selected .st29:not(.line-number)[data-pick] { fill: #79b96b; } .st29:not(.line-number).repair-st, .selected .st29:not(.line-number)[data-pick].repair-st { stroke: #79b96b; } .line2 { stroke: #79b96b; } .selected .line2 { stroke: #c3dfbc; } .selected .line2.hovered { stroke: #79b96b; } .selected .line2.hovered.line-select { stroke: none; fill: #79b96b; } .selected .line2[data-pick] { stroke: #79b96b; } .line2.line-select { fill: #79b96b; stroke: none; } .selected .line2.line-select { fill: #c3dfbc; } .selected .line2.line-select[data-pick] { fill: #79b96b; stroke: none; } .selected .st10:not(.line-number) { fill: #ebb1aa; } .selected .label.st10.hovered:not(.line-number) { fill: #ff4053; } .selected .label.st10.hovered:not(.line-number) tspan { fill: #ff4053; } .selected .st10.hovered:not(.label):not(.line-number) { fill: #d35143; } .selected .st10.hovered:not(.label):not(.line-number).repair-st { stroke: #ebb1aa; } .st10:not(.line-number), .selected .st10:not(.line-number)[data-pick] { fill: #d35143; } .st10:not(.line-number).repair-st, .selected .st10:not(.line-number)[data-pick].repair-st { stroke: #d35143; } .selected .st36:not(.line-number) { fill: #ebb1aa; } .selected .label.st36.hovered:not(.line-number) { fill: #ff4053; } .selected .label.st36.hovered:not(.line-number) tspan { fill: #ff4053; } .selected .st36.hovered:not(.label):not(.line-number) { fill: #d35143; } .selected .st36.hovered:not(.label):not(.line-number).repair-st { stroke: #ebb1aa; } .st36:not(.line-number), .selected .st36:not(.line-number)[data-pick] { fill: #d35143; } .st36:not(.line-number).repair-st, .selected .st36:not(.line-number)[data-pick].repair-st { stroke: #d35143; } .line1 { stroke: #d35143; } .selected .line1 { stroke: #ebb1aa; } .selected .line1.hovered { stroke: #d35143; } .selected .line1.hovered.line-select { stroke: none; fill: #d35143; } .selected .line1[data-pick] { stroke: #d35143; } .line1.line-select { fill: #d35143; stroke: none; } .selected .line1.line-select { fill: #ebb1aa; } .selected .line1.line-select[data-pick] { fill: #d35143; stroke: none; } .selected .st11:not(.line-number) { fill: #f0c4ae; } .selected .label.st11.hovered:not(.line-number) { fill: #ff4053; } .selected .label.st11.hovered:not(.line-number) tspan { fill: #ff4053; } .selected .st11.hovered:not(.label):not(.line-number) { fill: #dd7d4a; } .selected .st11.hovered:not(.label):not(.line-number).repair-st { stroke: #f0c4ae; } .st11:not(.line-number), .selected .st11:not(.line-number)[data-pick] { fill: #dd7d4a; } .st11:not(.line-number).repair-st, .selected .st11:not(.line-number)[data-pick].repair-st { stroke: #dd7d4a; } .selected .st12:not(.line-number) { fill: #f0c4ae; } .selected .label.st12.hovered:not(.line-number) { fill: #ff4053; } .selected .label.st12.hovered:not(.line-number) tspan { fill: #ff4053; } .selected .st12.hovered:not(.label):not(.line-number) { fill: #dd7d4a; } .selected .st12.hovered:not(.label):not(.line-number).repair-st { stroke: #f0c4ae; } .st12:not(.line-number), .selected .st12:not(.line-number)[data-pick] { fill: #dd7d4a; } .st12:not(.line-number).repair-st, .selected .st12:not(.line-number)[data-pick].repair-st { stroke: #dd7d4a; } .selected .st37:not(.line-number) { fill: #f0c4ae; } .selected .label.st37.hovered:not(.line-number) { fill: #ff4053; } .selected .label.st37.hovered:not(.line-number) tspan { fill: #ff4053; } .selected .st37.hovered:not(.label):not(.line-number) { fill: #dd7d4a; } .selected .st37.hovered:not(.label):not(.line-number).repair-st { stroke: #f0c4ae; } .st37:not(.line-number), .selected .st37:not(.line-number)[data-pick] { fill: #dd7d4a; } .st37:not(.line-number).repair-st, .selected .st37:not(.line-number)[data-pick].repair-st { stroke: #dd7d4a; } .line6 { stroke: #dd7d4a; } .selected .line6 { stroke: #f0c4ae; } .selected .line6.hovered { stroke: #dd7d4a; } .selected .line6.hovered.line-select { stroke: none; fill: #dd7d4a; } .selected .line6[data-pick] { stroke: #dd7d4a; } .line6.line-select { fill: #dd7d4a; stroke: none; } .selected .line6.line-select { fill: #f0c4ae; } .selected .line6.line-select[data-pick] { fill: #dd7d4a; stroke: none; } .selected .st32:not(.line-number) { fill: #cdafa6; } .selected .label.st32.hovered:not(.line-number) { fill: #ff4053; } .selected .label.st32.hovered:not(.line-number) tspan { fill: #ff4053; } .selected .st32.hovered:not(.label):not(.line-number) { fill: #815648; } .selected .st32.hovered:not(.label):not(.line-number).repair-st { stroke: #cdafa6; } .st32:not(.line-number), .selected .st32:not(.line-number)[data-pick] { fill: #815648; } .st32:not(.line-number).repair-st, .selected .st32:not(.line-number)[data-pick].repair-st { stroke: #815648; } .selected .st39:not(.line-number) { fill: #cdafa6; } .selected .label.st39.hovered:not(.line-number) { fill: #ff4053; } .selected .label.st39.hovered:not(.line-number) tspan { fill: #ff4053; } .selected .st39.hovered:not(.label):not(.line-number) { fill: #815648; } .selected .st39.hovered:not(.label):not(.line-number).repair-st { stroke: #cdafa6; } .st39:not(.line-number), .selected .st39:not(.line-number)[data-pick] { fill: #815648; } .st39:not(.line-number).repair-st, .selected .st39:not(.line-number)[data-pick].repair-st { stroke: #815648; } .line5 { stroke: #815648; } .selected .line5 { stroke: #cdafa6; } .selected .line5.hovered { stroke: #815648; } .selected .line5.hovered.line-select { stroke: none; fill: #815648; } .selected .line5[data-pick] { stroke: #815648; } .line5.line-select { fill: #815648; stroke: none; } .selected .line5.line-select { fill: #cdafa6; } .selected .line5.line-select[data-pick] { fill: #815648; stroke: none; } .selected .st30:not(.line-number) { fill: #dae0f2; } .selected .label.st30.hovered:not(.line-number) { fill: #ff4053; } .selected .label.st30.hovered:not(.line-number) tspan { fill: #ff4053; } .selected .st30.hovered:not(.label):not(.line-number) { fill: #adbbe1; } .selected .st30.hovered:not(.label):not(.line-number).repair-st { stroke: #dae0f2; } .st30:not(.line-number), .selected .st30:not(.line-number)[data-pick] { fill: #adbbe1; } .st30:not(.line-number).repair-st, .selected .st30:not(.line-number)[data-pick].repair-st { stroke: #adbbe1; } .line12 { stroke: #adbbe1; } .selected .line12 { stroke: #dae0f2; } .selected .line12.hovered { stroke: #adbbe1; } .selected .line12.hovered.line-select { stroke: none; fill: #adbbe1; } .selected .line12[data-pick] { stroke: #adbbe1; } .line12.line-select { fill: #adbbe1; stroke: none; } .selected .line12.line-select { fill: #dae0f2; } .selected .line12.line-select[data-pick] { fill: #adbbe1; stroke: none; } .selected .st40:not(.line-number) { fill: #b7dedc; } .selected .label.st40.hovered:not(.line-number) { fill: #ff4053; } .selected .label.st40.hovered:not(.line-number) tspan { fill: #ff4053; } .selected .st40.hovered:not(.label):not(.line-number) { fill: #5eb6b2; } .selected .st40.hovered:not(.label):not(.line-number).repair-st { stroke: #b7dedc; } .st40:not(.line-number), .selected .st40:not(.line-number)[data-pick] { fill: #5eb6b2; } .st40:not(.line-number).repair-st, .selected .st40:not(.line-number)[data-pick].repair-st { stroke: #5eb6b2; } .selected .st5:not(.line-number) { fill: #b7dedc; } .selected .label.st5.hovered:not(.line-number) { fill: #ff4053; } .selected .label.st5.hovered:not(.line-number) tspan { fill: #ff4053; } .selected .st5.hovered:not(.label):not(.line-number) { fill: #5eb6b2; } .selected .st5.hovered:not(.label):not(.line-number).repair-st { stroke: #b7dedc; } .st5:not(.line-number), .selected .st5:not(.line-number)[data-pick] { fill: #5eb6b2; } .st5:not(.line-number).repair-st, .selected .st5:not(.line-number)[data-pick].repair-st { stroke: #5eb6b2; } .line11 { stroke: #5eb6b2; } .selected .line11 { stroke: #b7dedc; } .selected .line11.hovered { stroke: #5eb6b2; } .selected .line11.hovered.line-select { stroke: none; fill: #5eb6b2; } .selected .line11[data-pick] { stroke: #5eb6b2; } .line11.line-select { fill: #5eb6b2; stroke: none; } .selected .line11.line-select { fill: #b7dedc; } .selected .line11.line-select[data-pick] { fill: #5eb6b2; stroke: none; } .line25 { stroke: #5eb6b2; } .selected .line25 { stroke: #b7dedc; } .selected .line25.hovered { stroke: #5eb6b2; } .selected .line25.hovered.line-select { stroke: none; fill: #5eb6b2; } .selected .line25[data-pick] { stroke: #5eb6b2; } .line25.line-select { fill: #5eb6b2; stroke: none; } .selected .line25.line-select { fill: #b7dedc; } .selected .line25.line-select[data-pick] { fill: #5eb6b2; stroke: none; } .selected .st41:not(.line-number) { fill: #e5b6e2; } .selected .label.st41.hovered:not(.line-number) { fill: #ff4053; } .selected .label.st41.hovered:not(.line-number) tspan { fill: #ff4053; } .selected .st41.hovered:not(.label):not(.line-number) { fill: #c65cbe; } .selected .st41.hovered:not(.label):not(.line-number).repair-st { stroke: #e5b6e2; } .st41:not(.line-number), .selected .st41:not(.line-number)[data-pick] { fill: #c65cbe; } .st41:not(.line-number).repair-st, .selected .st41:not(.line-number)[data-pick].repair-st { stroke: #c65cbe; } .line15 { stroke: #c65cbe; } .selected .line15 { stroke: #e5b6e2; } .selected .line15.hovered { stroke: #c65cbe; } .selected .line15.hovered.line-select { stroke: none; fill: #c65cbe; } .selected .line15[data-pick] { stroke: #c65cbe; } .line15.line-select { fill: #c65cbe; stroke: none; } .selected .line15.line-select { fill: #e5b6e2; } .selected .line15.line-select[data-pick] { fill: #c65cbe; stroke: none; } .selected .label:not(.line-number) { fill: #9bbbcc; } .selected .label.label.hovered:not(.line-number) { fill: #ff4053; } .selected .label.label.hovered:not(.line-number) tspan { fill: #ff4053; } .selected .label.hovered:not(.label):not(.line-number) { fill: #3b6074; } .selected .label.hovered:not(.label):not(.line-number).repair-st { stroke: #9bbbcc; } .label:not(.line-number), .selected .label:not(.line-number)[data-pick] { fill: #3b6074; } .label:not(.line-number).repair-st, .selected .label:not(.line-number)[data-pick].repair-st { stroke: #3b6074; } .selected .label tspan { fill: #9bbbcc; } .label tspan, .selected .label[data-pick] tspan { fill: #3b6074; } .selected .label[data-pick]:not(.line-number) { fill: #000; } .selected .label[data-pick]:not(.line-number) tspan { fill: #000; } svg text { -webkit-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none; } .label { font-family: NotoSans, sans-serif; font-size: 11px; } .label.label-small { font-size: 9px; } .label.line-number { fill: #fff; } .label.hovered:not(.line-number), .label .hovered:not(.line-number)[data-pick] { fill: #ff4053; } .label.hovered:not(.line-number) tspan, .label .hovered:not(.line-number)[data-pick] tspan { fill: #ff4053; } [data-st-id], .line-select, .line, .line-number { cursor: pointer; } .st20, .st23, .st24, .st28 { fill: #fff; } .selected .st20, .selected .st23, .selected .st24 { display: none; } .selected .label.hovered:not(.line-number)[data-pick] { fill: #ff4053; } .selected .label.hovered:not(.line-number)[data-pick] tspan { fill: #ff4053; } .st20 { opacity: 0.75; } .st23 { opacity: 0.85; } .st24 { opacity: 0.65; } .building { display: none; }</style><g id="map-inner"><path d="M809.7 416.8v6.3c0 9.9 1.8 15.7 7.1 21l91.7 91.9c5.3 5.3 7.1 11.1 7.1 21v155.9c0 9.9-1.8 15.7-7.1 21l-19.8 19.8c-5.3 5.3-7.1 11-7.1 20.9v47.9c0 9.9 1.8 15.7 7.1 21l98.5 99.2c5.3 5.3 7.1 11.1 7.1 21v103" class="line line15" data-select-line-id="15"></path><circle cx="414.2" cy="88.1" r="8.5" data-line-id="10" data-st-id="2157" class="st6"></circle><path d="M392.296 229.05c-21.2 7-37.7 13.1-55.6 20.8-18.2 7.8-37.7 17.6-63.6 33-9.8 5.4-39.1 23.2-73.7 58.7-44.2 45.3-58.2 81.6-58.2 81.6" class="line line11" data-select-line-id="11"></path><circle cx="493" cy="76.8" r="8.5" data-line-id="9" data-st-id="23" class="st1"></circle><circle cx="713.3" cy="556.8" r="8.5" data-line-id="7" data-st-id="116" data-st-rel="62" class="st2"></circle><circle cx="510.5" cy="462.4" data-select-line-id="14" r="385.8" class="line line14"></circle><path d="M168.087 377.001l-17.5 3.097c-3.11.56-6.159-.203-8.563-2.052-10.501-9.346-19.159-18.164-23.896-23.119a12.066 12.066 0 0 0-8.566-3.75l-81.65-1.053M20.287 356.543v438.756M26.235 798.018l131.234 28.088M435.122 955.083c-165.46-17.158-266.938-123.567-266.938-126.018M591.261 944.486c-67.481 16.818-142.644 11.628-142.644 11.628" class="line line11" data-select-line-id="11"></path><circle cx="596.9" cy="940.8" r="8.5" data-line-id="11" data-st-id="40" class="st5"></circle><circle cx="448.2" cy="118.1" r="8.5" data-line-id="10" data-st-id="85" class="st6"></circle><path d="M610.1 566.2h142.4c4.8 0 9.4-1.9 12.8-5.3l67.3-67.4 71.6-72.3c2.8-2.8 18.34-18.671 18.34-22.571.912-1.698.303-41.736.259-41.654" class="line line8" data-select-line-id="8"></path><circle cx="294.4" cy="521.2" r="8.5" data-line-id="4" data-st-id="41" class="st0"></circle><circle cx="298.1" cy="533.5" r="8.5" data-line-id="3" data-st-id="41" class="st8"></circle><path d="M292 513c-4.5 1.3-7.1 6.1-5.7 10.6 1.1 3.8 4.7 6.2 8.5 6.1l-1-3.5c-1.9-.2-3.6-1.6-4.2-3.5-.8-2.6.7-5.4 3.4-6.2" data-line-id="4" data-st-id="41" class="st0"></path><circle cx="334.5" cy="324.1" r="8.5" data-line-id="2" data-st-id="13" class="st9"></circle><circle cx="596.8" cy="669" r="8.5" data-line-id="2" data-st-id="80" class="st9"></circle><circle cx="670.7" cy="305.9" r="8.5" data-line-id="1" data-st-id="45" class="st10"></circle><circle cx="321" cy="582.3" r="8.5" data-line-id="1" data-st-id="82" class="st10"></circle><circle cx="403.3" cy="658.9" r="8.5" data-line-id="6" data-st-id="75" class="st11"></circle><circle cx="663.6" cy="506.3" r="8.5" data-line-id="6" data-st-id="42" class="st12"></circle><circle cx="577.2" cy="249.1" r="8.5" data-line-id="6" data-st-id="97" class="st11"></circle><path d="M259.8 8.1l.3 235.1c0 4 1.6 7.8 4.4 10.6l215 215c2.8 2.8 6.5 4.8 10.4 4.8h69.7c4 0 7.8 1.6 10.6 4.4l22.2 22.2c2.8 2.8 4.4 6.6 4.4 10.6l-.1 593.8c0 10.9 6.3 18.1 18.1 18.1h213.4" class="line line2" data-select-line-id="2"></path><path d="M762.3 147.8V207c0 4.8-1.9 9.4-5.3 12.8L603.8 372.9l-13 13.2-193 191.8c-2.8 2.8-6.6 4.4-10.6 4.4h-59.5c-6 0-8.2.7-12.8 5.3L169.5 742.7c-4.7 4.7-6.3 8.4-6.3 15v284.4" class="line line1" data-select-line-id="1"></path><path d="M625.1 9.1v185c0 3.9-1.6 7.7-4.3 10.5L575 251c-3.4 3.4-5.3 6.8-5.3 12.8v56.4c0 4 1.6 7.7 4.3 10.6l94.6 91.5c2.8 2.8 4.3 6.6 4.3 10.6v58c0 4-1.6 7.8-4.4 10.6L578 590.9c-2.8 2.8-6.6 4.4-10.6 4.4h-96.5c-4.8 0-9.4 1.9-12.8 5.3L320 748.6c-4.4 4.4-6.6 7.8-6.6 15l.2 283c-.2 6.7 1.8 9.2 5.1 12.5l10 10.4" class="line line6" data-select-line-id="6"></path><path d="M392.8 7.5v52.3c0 5.7 2.4 11.1 6.7 14.9l103.1 91.9c4.3 3.8 6.7 9.2 6.7 14.9v45.8c0 5.3-2.1 10.4-5.9 14.1l-.3.3c-3.8 3.8-5.9 8.8-5.9 14.1V321l34.5 35.1c2.8 2.6 6.5 4.1 10.3 4.1h120.8c4 0 7.9 1.6 10.7 4.5L808.9 502c4 4.4 5.3 7.1 5.3 14.3v64.1c0 6.6-.8 9.9-5.3 14.4l-70.5 70.5c-2.8 2.8-4.4 6.6-4.4 10.6v437.3" class="line line10" data-select-line-id="10"></path><path data-line-id="10" data-st-id="2190" class="st6" d="M390.6 39.1h9v5h-9z"></path><path data-line-id="10" data-st-id="2191" class="st6" d="M386.6 4.5h13v5h-13z"></path><path d="M493.1 5.8v63.9c0 5.8-2.5 11.2-6.8 15l-82.8 72.5c-4.4 3.8-6.9 9.4-6.8 15.2l.5 59.5c0 5.3 2.2 10.3 5.9 14l85.7 84.8v48.2c0 4-1.6 7.8-4.5 10.7l-62.5 59.8c-6 5.7-6.2 15.2-.6 21.2l26 26.1c2.6 2.8 4.1 6.5 4.1 10.3v609" class="line line9" data-select-line-id="9"></path><path d="M163.692 59.936v230.6c0 5.4 2.2 10.7 6.2 14.4l119.4 114.6c3.7 3.6 8.7 5.6 13.8 5.6l273.94.8c3.9 0 7.7 1.6 10.5 4.3l320.5 324.2c5.3 5.3 7.1 11.1 7.1 21v186" class="line line7" data-select-line-id="7"></path><circle cx="714.6" cy="407.2" r="8.5" data-line-id="10" data-st-id="139" data-st-rel="57" class="st6"></circle><circle cx="727.4" cy="407.2" r="8.5" data-line-id="3" data-st-id="57" data-st-rel="139" class="st8"></circle><circle cx="510.5" cy="462.4" r="223.8" class="line line5" data-select-line-id="5"></circle><path class="st20" d="M564.1 396.4h20v12h-20z"></path><path d="M328 1077.8h95.9c8.3 0 15 8.552 15 19.147v43.654c0 10.595-6.7 19.147-15 19.147H177.1" class="line line12" data-select-line-id="12"></path><path d="M878.3 175.8v74.1c0 7-1.9 9.4-5.3 12.8L654.4 480c-2.8 2.8-6.6 4.3-10.6 4.3H495.3c-6.7 0-13.1 2.7-17.8 7.4l-27.7 27.6" class="line line3" data-select-line-id="3"></path><path class="st20" d="M521.7 438.8h22v12h-22zm-114-35h26.5v14h-26.5zm44 42h24.8v14h-24.8zm124.8-108.1h68.8v14h-68.8zM588 545.4h40v12h-40zm83.1-177h24.3v14h-24.3z"></path><path class="st23" d="M684.9 534.4h23.2v12h-23.2z"></path><path class="st20" d="M642.1 402.4h24.3v12h-24.3z"></path><path class="st24" d="M759.9 548.4h23.2v12h-23.2zm86.1 74h23v14h-23zm-83 113.7h23v15h-23z"></path><path class="st20" d="M813.1 229.9H833v13h-19.9v-13zM268.6 594.1h46.5v27h-46.5v-27zm167.9-346.9h75.6v13h-75.6v-13zM117 471.1h20v12h-20v-12zm370.8-207.7h20v12h-20v-12zM174.4 248h100.016v12H174.4v-12zm412.7 185.4h20v12h-20v-12zm245.2 38.4h33.5v13h-33.5v-13zm31.9 107.5h23v14h-23v-14z"></path><path class="st20" d="M587.1 433.4h20v12h-20zM832.3 471.8h33.5v13h-33.5zM888 452.3h21.9v23.3H888zM864.2 579.3h23v14h-23z"></path><path class="st24" d="M907 678.6h23v13h-23zM907.1 704.5h23v13h-23zM829.7 640.6h29.4v28h-29.4v-28zM634 811.4h47.3v14H634z"></path><path class="st20" d="M376 667.3h24.8v14H376z"></path><circle cx="84.3" cy="650.6" r="8.5" data-line-id="8" data-st-id="81" class="st26"></circle><path d="M84.1 653.935V696.8c0 4-1.6 7.9-4.5 10.7l-55.5 55.1M183.419 495.614L89.3 588.724c-3.2 3.2-5 7.5-5 12.1l-.1 23.165-.1 20.784M24.1 762.6l-10.2 10.3c-3.2 3.2-5 7.5-5 12.1l-.2 169.3" class="line line8" data-select-line-id="8"></path><path d="M140 425.8l13.9 14 35.3 35.7" class="line line11" data-select-line-id="11"></path><path d="M449 524l-15.8-15.7c-2.8-2.8-6.6-4.3-10.6-4.3h-43.9c-3.8 0-7.5 1.5-10.3 4.1l-9.3 8.8c-2.8 2.6-6.5 4.1-10.3 4.1H241.4c-4.8 0-9.4 1.9-12.8 5.3l-90 93c-4.5 4.5-6.7 5.3-12.8 5.3h-81c-12.4 0-18.1-5.7-18.1-18.1V361.2c0-6.1-4.9-11-11-11" class="line line4" data-select-line-id="4"></path><path d="M147.746 615.807a8.5 8.5 0 1 0-.001-17.001 8.5 8.5 0 0 0 .001 17.001z" data-line-id="14" data-st-id="58" class="st31"></path><path d="M156.846 606.707a8.5 8.5 0 1 0-.001-17.001 8.5 8.5 0 0 0 .001 17.001z" data-line-id="4" data-st-id="58" class="st0"></path><path d="M147.746 612.307a5 5 0 1 0-.001-10.001 5 5 0 0 0 .001 10.001zM156.846 603.207a5 5 0 1 0-.001-10.001 5 5 0 0 0 .001 10.001z" data-line-id="4" data-st-id="58" class="st28"></path><path d="M152.446 605.606l-2.9-2.9 2.6-2.6 2.9 2.9-2.6 2.6z" data-line-id="4" data-st-id="58" class="st28"></path><path d="M8.7 147.9v484.9c0 11.6 5.3 18.1 18.1 18.1h144.7c6.5 0 9.4-1.9 12.8-5.3l106.9-106.9c2.8-2.8 6.6-4.4 10.6-4.4H424c6.7 0 13.1-2.7 17.8-7.4l10.1-9.4" class="line line3" data-select-line-id="3"></path><path d="M14.085 355.234c.012.223-.026.359-.014.582-.034 2.779-2.249 4.954-5.027 4.92-2.779-.034-4.954-2.249-4.92-5.027-.018-2.059 1.278-3.828 3.165-4.554l-.012-3.671c-.795.22-1.59.441-2.372.885a8.492 8.492 0 0 0-3.202 11.586 8.493 8.493 0 0 0 11.587 3.202c3.48-1.973 5.056-6.086 4.014-9.749l-3.219 1.826z" data-line-id="4" data-st-id="56" class="st0"></path><circle cx="20.5" cy="349.5" r="5" data-line-id="3" data-st-id="56" class="st28"></circle><path d="M7.227 347.397c-.136-.038-.322-.163-.458-.2-2.402-1.398-3.186-4.402-1.788-6.803 1.397-2.402 4.401-3.186 6.803-1.789 1.757 1.073 2.62 2.998 2.365 4.982l3.144 1.896c.226-.818.365-1.587.367-2.393-.021-4.701-3.717-8.583-8.418-8.562-4.701.022-8.583 3.718-8.562 8.419-.013 4.031 2.717 7.426 6.435 8.307 0 0 .038-.137-.018-2.059l.13-1.798z" data-line-id="3" data-st-id="56" class="st8"></path><path d="M11.743 347.25a5 5 0 1 0-4.933-8.7 5 5 0 0 0 4.933 8.7zM11.564 360.112a5 5 0 1 0-4.933-8.699 5 5 0 0 0 4.933 8.699z" data-line-id="3" data-st-id="56" class="st28"></path><path d="M17.38 345.433c.174-.098.298-.284.385-.333 2.436-1.381 5.435-.553 6.816 1.883 1.381 2.436.553 5.434-1.883 6.816-1.827 1.035-4.034.792-5.53-.428l-3.22 1.825a9.192 9.192 0 0 0 1.918 1.557c4.023 2.432 9.237 1.085 11.62-3.025 2.432-4.024 1.085-9.237-3.025-11.62-3.466-2.058-7.773-1.341-10.449 1.441 0 0 .137.038 1.758 1.073l1.61.811z" data-line-id="11" data-st-id="56" class="st40"></path><path d="M15.283 353.29c-1.343.876-3.13.97-4.603.196-1.473-.774-2.361-2.34-2.443-3.903l2.593-.091c1.253-.02 2.404.591 3.132 1.673l1.32 2.125z" data-line-id="4" data-st-id="56" class="st0"></path><path d="M16.938 351.547c-.412.693-.96 1.349-1.656 1.743l-1.37-2.212c-.591-1.044-.661-2.384-.136-3.486l1.223-2.303c2.303 1.223 3.124 4.091 1.939 6.258z" data-line-id="11" data-st-id="56" class="st40"></path><path d="M15.048 345.376l-1.223 2.303c-.612 1.151-1.742 1.793-2.995 1.813l-2.593.091c.003-.806.142-1.575.553-2.268 1.224-2.303 4.042-3.212 6.258-1.939z" data-line-id="3" data-st-id="56" class="st8"></path><path d="M10.627 345.329c.79-.433 1.915-.252 3.242.503l1.51.883c1.239.803 1.991 1.759 1.977 2.566.034.893-.826 1.821-2.054 2.494l-1.49.817c-1.316.721-2.473.9-3.208.39-.823-.461-1.225-1.609-1.188-2.998l-.02-1.7c-.05-1.34.442-2.523 1.231-2.955zm-.673-1.228c-1.227.673-2.022 2.135-2.034 4.194l.02 1.7c-.11 4.167 2.822 5.98 6.505 3.961l1.49-.818c3.683-2.019 3.732-5.467.16-7.614l-1.51-.882c-1.83-1.05-3.49-1.166-4.63-.541z" data-line-id="11" data-st-id="56" class="st28"></path><path d="M130.2 491h65.3c5.3 0 10.3 2.1 14.1 5.8l18.6 18.4c3.7 3.7 8.8 5.8 14.1 5.8h34.2" class="line line4" data-select-line-id="4"></path><circle cx="334.5" cy="324.1" r="5" data-line-id="2" data-st-id="13" class="st28"></circle><circle cx="596.8" cy="669" r="5" data-line-id="2" data-st-id="80" class="st28"></circle><circle cx="670.7" cy="305.9" r="5" data-line-id="1" class="st28"></circle><circle cx="321" cy="582.3" r="5" data-line-id="1" data-st-id="82" class="st28"></circle><circle cx="403.3" cy="658.9" r="5" data-line-id="6" data-st-id="75" class="st28"></circle><circle cx="577.2" cy="249.1" r="5" data-line-id="6" data-st-id="97" class="st28"></circle><path d="M303 531.9c-.6-2-2.3-3.3-4.3-3.5l-1.1-3.5c1.5-1.3 2.1-3.3 1.4-5.2-.8-2.6-3.7-4.1-6.3-3.2-2.6.8-4.1 3.7-3.2 6.3.6 2 2.3 3.2 4.2 3.4l1.1 3.5c-1.4 1.3-2 3.4-1.4 5.3.8 2.6 3.7 4.1 6.3 3.2 2.7-.8 4.1-3.7 3.3-6.3z" data-line-id="3" data-st-id="41" class="st28"></path><circle cx="84.3" cy="650.5" r="5" data-line-id="8" data-st-id="81" class="st28"></circle><path class="st24" d="M83.1 599.3h22v14.1h-22zm123.2-101h22.5v13h-22.5zm248.6 8.8h-6.3l-18.9-12.3v-11.3h20.2z"></path><circle cx="663.6" cy="506.3" r="5" data-line-id="6" data-st-id="42" class="st28"></circle><circle cx="714.6" cy="407.2" r="5" data-line-id="10" data-st-id="139" data-st-rel="57" class="st28"></circle><circle cx="727.4" cy="407.2" r="5" data-line-id="3" data-st-id="57" data-st-rel="139" class="st28"></circle><path transform="rotate(-90 721.04 407.254)" class="st28" d="M719 405.4h4v3.7h-4z"></path><path d="M706.1 407.2c0 4.7 3.8 8.5 8.5 8.5 4 0 7.3-2.8 8.2-6.5h-3.7c-.8 1.8-2.5 3-4.6 3-2.8 0-5-2.2-5-5" data-line-id="10" data-st-id="139" data-st-rel="57" class="st6"></path><circle cx="448" cy="118.2" r="5" data-line-id="9,10" data-st-id="85" class="st28"></circle><path data-line-id="9" data-st-id="78" class="st1" d="M490.6 53.1h9v5h-9z"></path><path data-line-id="9" data-st-id="121" class="st1" d="M395.1 173.8h8.5v5h-8.5z"></path><path data-line-id="9" data-st-id="31" class="st1" d="M395.1 198.6h8.5v5h-8.5z"></path><path data-line-id="9" data-st-id="92" class="st1" d="M448.9 631.4h8.9v5h-8.9z"></path><path data-line-id="9" data-st-id="123" class="st1" d="M448.9 758.4h8.9v5h-8.9z"></path><path data-line-id="10" data-st-id="34" class="st6" d="M731.6 743.5h8.6v5h-8.6z"></path><path data-line-id="10" data-st-id="43" class="st6" d="M731.6 816.8h8.6v5h-8.6z"></path><path data-line-id="10" data-st-id="86" class="st6" d="M731.6 851.8h8.6v5h-8.6z"></path><path data-line-id="10" data-st-id="27" class="st6" d="M731.6 887.6h8.6v5h-8.6z"></path><path data-line-id="10" data-st-id="61" class="st6" d="M731.6 921.8h8.6v5h-8.6z"></path><path data-line-id="10" data-st-id="20" class="st6" d="M731.6 957.6h8.6v5h-8.6z"></path><path data-line-id="10" data-st-id="63" class="st6" d="M731.6 993.8h8.6v5h-8.6z"></path><path data-line-id="10" data-st-id="215" class="st6" d="M731.6 1029.3h8.6v5h-8.6z"></path><path data-line-id="10" data-st-id="216" class="st6" d="M731.6 1063.6h8.6v5h-8.6z"></path><path data-line-id="1" data-st-id="129" class="st10" d="M160.7 806.3h8.9v5h-8.9v-5z"></path><path data-line-id="1" data-st-id="28" class="st10" d="M160.7 779.6h8.9v5h-8.9z"></path><path data-line-id="1" data-st-id="145" class="st10" d="M160.7 859.1h8.9v5h-8.9v-5z"></path><path data-line-id="1" data-st-id="2148" class="st10" d="M160.7 886.8h8.9v5h-8.9v-5z"></path><path data-line-id="1" data-st-id="2149" class="st10" d="M160.7 912.1h8.9v5h-8.9v-5z"></path><path data-line-id="6" data-st-id="98" class="st11" d="M311.1 883.3h8.7v5h-8.7z"></path><path data-line-id="6" data-st-id="3" class="st11" d="M311.1 857.1h8.7v5h-8.7z"></path><path data-line-id="6" data-st-id="74" class="st11" d="M311.1 906.3h8.7v5h-8.7z"></path><path data-line-id="6" data-st-id="14" class="st11" d="M311.1 956.3h8.7v5h-8.7z"></path><path data-line-id="6" data-st-id="46" class="st11" d="M311.1 981.1h8.7v5h-8.7z"></path><path data-line-id="6" data-st-id="120" class="st11" d="M311.1 1006.9h8.7v5h-8.7z"></path><path data-line-id="6" data-st-id="147" class="st11" d="M311.2 1033.4h8.6v5h-8.6z"></path><path data-line-id="1" data-st-id="2150" class="st10" d="M160.7 937h8.9v5h-8.9v-5z"></path><path data-line-id="2" data-st-id="2135" class="st29" d="M827.7 1116.1h4v13h-4z"></path><path data-line-id="12" data-st-id="1012" class="st30" d="M172.4 1153.3h5v13h-5z"></path><path data-line-id="12" data-st-id="1011" class="st30" d="M257.4 1159.5h5v8.7h-5z"></path><path data-line-id="12" data-st-id="1010" class="st30" d="M330.7 1159.5h5v8.7h-5z"></path><path data-line-id="12" data-st-id="1009" class="st30" d="M384.2 1159.5h5v8.7h-5z"></path><path data-line-id="12" data-st-id="2144" class="st30" d="M383.6 1075.5h5v8.7h-5z"></path><path data-line-id="9" data-st-id="68" class="st1" d="M448.9 866h8.8v5h-8.8z"></path><path data-line-id="9" data-st-id="69" class="st1" d="M448.9 889.1h8.8v5h-8.8z"></path><path data-line-id="9" data-st-id="70" class="st1" d="M448.9 912.1h8.8v5h-8.8z"></path><path data-line-id="9" data-st-id="136" class="st1" d="M448.9 985.8h8.8v5h-8.8z"></path><path data-line-id="9" data-st-id="146" class="st1" d="M448.9 1011h8.8v5h-8.8z"></path><path data-line-id="9" data-st-id="93" class="st1" d="M448.9 1036.5h8.8v5h-8.8z"></path><path data-line-id="9" data-st-id="128" class="st1" d="M448.9 1061.5h8.8v5h-8.8z"></path><path data-line-id="9" data-st-id="148" class="st1" d="M448.9 1087.6h8.8v5h-8.8z"></path><circle transform="rotate(-75.427 397.466 226.821)" cx="397.5" cy="226.8" r="8.5" data-line-id="9" data-st-id="104" class="st1"></circle><path data-line-id="11" data-st-id="104" class="st40" d="M385.325 239.03a8.5 8.5 0 1 0 0-17 8.5 8.5 0 0 0 0 17z"></path><path data-line-id="9" data-st-id="104" class="st28" d="M392.5 226.3l-3.4 1.1c-1.3-1.4-3.2-2.2-5.3-1.7-2.7.7-4.2 3.6-3.4 6.3.7 2.7 3.6 4.2 6.3 3.4 2-.5 3.3-2.3 3.5-4.1l3.5-1c1.3 1.4 3.2 2.2 5.2 1.6 2.7-.7 4.2-3.6 3.4-6.3-.7-2.7-3.6-4.2-6.3-3.4-1.9.4-3.3 2.2-3.5 4.1z"></path><path data-line-id="9" data-st-id="15" class="st1" d="M490.6 28.1h9v5h-9z"></path><path data-line-id="6" data-st-id="105" class="st11" d="M622.6 53.9h8.5v5h-8.5z"></path><path data-line-id="6" data-st-id="19" class="st11" d="M622.6 78.5h8.5v5h-8.5z"></path><path data-line-id="6" data-st-id="114" class="st11" d="M567.2 299.1h8.6v5h-8.6z"></path><path data-line-id="6" data-st-id="21" class="st11" d="M622.6 128.7h8.5v5h-8.5z"></path><path data-line-id="6" data-st-id="151" class="st11" d="M622.6 159.5h8.5v5h-8.5z"></path><path transform="rotate(-45.001 616.858 211.409)" data-line-id="6" data-st-id="101" class="st11" d="M614.4 207.2h5v8.4h-5z"></path><path transform="rotate(-45.001 717.676 261.478)" data-line-id="1" data-st-id="111" class="st10" d="M715.2 257.3h5v8.3h-5z"></path><path transform="rotate(-45.001 695.853 283.988)" data-line-id="1" data-st-id="49" class="st10" d="M693.4 279.9h5v8.3h-5z"></path><path transform="rotate(-45.001 748.52 231.322)" data-line-id="1" data-st-id="94" class="st10" d="M746 227.2h5v8.3h-5z"></path><path transform="rotate(-45.001 807.743 330.547)" data-line-id="3" data-st-id="144" class="st8" d="M805.2 326.3h5v8.6h-5z"></path><path transform="rotate(-45.001 781.007 357.478)" data-line-id="3" data-st-id="11" class="st8" d="M778.4 352.9h5.2v9.2h-5.2z"></path><path transform="rotate(-45.001 873.272 455.578)" data-line-id="8" data-st-id="141" class="st26" d="M870.8 451.8h5v7.6h-5z"></path><path data-line-id="8" data-st-id="1" class="st26" d="M835 489.2l3.5-3.5 5.4 5.4-3.5 3.5-5.4-5.4z"></path><path data-line-id="15" data-st-id="1" class="st41" d="M854.8 491.1l6.2-6.2 3.5 3.5-6.2 6.2-3.5-3.5z"></path><path transform="rotate(-45.001 833.627 305.014)" data-line-id="3" data-st-id="107" class="st8" d="M831.1 300.8h5v8.4h-5z"></path><path data-line-id="6" data-st-id="8" class="st11" d="M622.6 28.9h8.5v5h-8.5z"></path><path data-line-id="3" data-st-id="35" class="st8" d="M875.8 221.6h8.9v5h-8.9z"></path><path data-line-id="3" data-st-id="36" class="st8" d="M875.8 246.1h8.9v5h-8.9z"></path><path data-line-id="3" data-st-id="83" class="st8" d="M875.8 196.6h8.9v5h-8.9z"></path><path data-line-id="9" data-st-id="5" class="st1" d="M486.6 4.5h13v5h-13z"></path><path data-st-id="127" data-line-id="1" class="st10" d="M755.9 143.1h13v5h-13z"></path><path data-line-id="3" data-st-id="142" class="st8" d="M871.7 171.1h13v5h-13z"></path><path data-line-id="8" data-st-id="84" class="st26" d="M921.3 395.1h8.6v5h-8.6z"></path><path data-line-id="8" data-st-id="71" class="st26" d="M920.6 375.1h9.4v5h-9.4z"></path><path data-line-id="8" data-st-id="2133" class="st26" d="M915.9 354.6h13v5h-13z"></path><path data-line-id="6" data-st-id="65" class="st11" d="M618.6 4.5h13v5h-13z"></path><path data-line-id="2" data-st-id="2188" class="st29" d="M253.3 3.5h13v5h-13z"></path><path data-line-id="7" data-st-id="88" class="st2" d="M157.192 55.5h13v5h-13v-5z"></path><path data-line-id="2" data-st-id="100" class="st29" d="M257.6 53.3h9v5h-9z"></path><path data-line-id="7" data-st-id="115" class="st2" d="M161.492 79.5h8.5v5h-8.5v-5z"></path><path data-line-id="7" data-st-id="125" class="st2" d="M161.492 104.8h8.5v5h-8.5v-5z"></path><path data-line-id="7" data-st-id="2147" class="st2" d="M161.492 129.8h8.5v5h-8.5v-5z"></path><path data-line-id="7" data-st-id="143" class="st2" d="M161.492 154.5h8.5v5h-8.5v-5z"></path><path data-line-id="3" data-st-id="2136" class="st8" d="M2.2 143.1h13v5h-13z"></path><path data-line-id="3" data-st-id="1001" class="st8" d="M6.3 182.1h8.3v5H6.3z"></path><path data-line-id="3" data-st-id="1003" class="st8" d="M6.3 207.4h8.3v5H6.3z"></path><path data-line-id="3" data-st-id="1002" class="st8" d="M6.3 232.4h8.3v5H6.3z"></path><path data-line-id="3" data-st-id="214" class="st8" d="M6.3 257.1h8.3v5H6.3z"></path><path data-line-id="3" data-st-id="53" class="st8" d="M6.3 282.6h8.3v5H6.3z"></path><path data-line-id="3" data-st-id="67" class="st8" d="M6.3 307.3h8.3v5H6.3z"></path><path data-line-id="3" data-st-id="1005" class="st8" d="M38.2 643.553h5v9h-5v-9z"></path><path data-line-id="4" data-st-id="87" class="st0" d="M24.3 397.6h8.9v5h-8.9z"></path><circle cx="722.4" cy="565.9" r="8.5" data-line-id="8" data-st-id="62" data-st-rel="116" class="st26"></circle><circle cx="722.4" cy="565.9" r="5" data-line-id="8" data-st-id="62" data-st-rel="116" class="st28"></circle><path transform="rotate(-45.001 717.849 561.41)" class="st28" d="M715.9 559.5h4v3.7h-4z"></path><path d="M707.3 550.8c-3.3 3.3-3.3 8.7 0 12 2.8 2.8 7.1 3.2 10.4 1.3l-2.6-2.6c-1.8.7-3.9.3-5.4-1.1-2-2-2-5.1 0-7.1" data-line-id="7" data-st-id="116" data-st-rel="62" class="st2"></path><circle cx="713.3" cy="556.8" r="5" data-line-id="7" data-st-id="116" data-st-rel="62" class="st28"></circle><path data-line-id="4" data-st-id="130" class="st0" d="M24.3 442.3h8.9v5h-8.9z"></path><path data-line-id="4" data-st-id="9" class="st0" d="M24.3 549.8h8.9v5h-8.9z"></path><path data-line-id="4" data-st-id="131" class="st0" d="M24.3 581.5h8.9v5h-8.9z"></path><path transform="rotate(-45.001 191.006 568.06)" data-line-id="4" data-st-id="113" class="st0" d="M188.5 563.6h5v8.9h-5z"></path><path data-line-id="2" data-st-id="25" class="st29" d="M257.6 179.8h9v5h-9z"></path><path data-line-id="2" data-st-id="110" class="st29" d="M257.6 204.7h9v5h-9z"></path><path data-line-id="2" data-st-id="7" class="st29" d="M257.6 230.2h9v5h-9z"></path><path data-line-id="7" data-st-id="76" class="st2" d="M161.056 251.5h8.8v5h-8.8v-5z"></path><path d="M245.456 379.1l5.8-5.8 3.5 3.5-5.8 5.8-3.5-3.5z" data-line-id="7" data-st-id="12" class="st2"></path><path d="M272.856 406.3l5.8-5.8 3.5 3.5-5.8 5.8-3.5-3.5z" data-line-id="7" data-st-id="126" class="st2"></path><path transform="rotate(-45.001 394.97 381.414)" data-line-id="2" data-st-id="64" class="st29" d="M390.6 378.9h8.7v5h-8.7z"></path><path class="st23" d="M243 569.6h21.9v13H243z"></path><circle cx="596.9" cy="940.8" r="5" data-line-id="2" data-st-id="40" class="st28"></circle><path transform="rotate(-70.652 635.333 95.547)" data-line-id="14" data-st-id="19" class="st31" d="M631.7 93.5h7.1v4h-7.1z"></path><path transform="rotate(-63.071 680.41 122.06)" data-line-id="14" data-st-id="2180" class="st31" d="M684.9 116.1h7v4h-7z"></path><path transform="rotate(-56.729 720.29 136.566)" data-line-id="14" data-st-id="2179" class="st31" d="M716.7 134.6h7.2v4h-7.2z"></path><path data-line-id="14" data-st-id="2174" class="st31" d="M893 496.8l.3-4 7.1.6-.3 4-7.1-.6z"></path><path transform="rotate(-2.745 894.326 450.24)" data-line-id="14" data-st-id="141" class="st31" d="M890.8 448.3h7.3v4h-7.3z"></path><path data-line-id="14" data-st-id="2172" class="st31" d="M869.8 598.6l1.3-3.8 6.9 2.5-1.3 3.8-6.9-2.5z"></path><path transform="rotate(-49.904 805.89 713.467)" data-line-id="14" data-st-id="2171" class="st31" d="M803.9 710.2h4v6.6h-4z"></path><path transform="rotate(-37.932 751.205 762.062)" data-line-id="14" data-st-id="34" class="st31" d="M749.2 758.6h4v6.9h-4z"></path><path transform="rotate(-14.856 611.062 833.35)" data-line-id="14" data-st-id="2" class="st31" d="M609 829.6h4v7.3h-4z"></path><path transform="rotate(-8.15 560.972 843.723)" data-line-id="14" data-st-id="2169" class="st31" d="M559 840h4v6.8h-4z"></path><path transform="rotate(-85.328 473.593 844.954) scale(1.00002)" data-line-id="14" data-st-id="2168" class="st31" d="M470.2 843h6.9v4h-6.9z"></path><path transform="rotate(-72.236 392.222 828.095)" data-line-id="14" data-st-id="2167" class="st31" d="M388.7 826.1h7v4h-7z"></path><path transform="rotate(-44.648 234.045 729.364)" data-line-id="14" data-st-id="2165" class="st31" d="M230.6 727.3h6.9v4h-6.9z"></path><path transform="rotate(-24.11 860.771 296.182)" data-line-id="14" data-st-id="2176" class="st31" d="M857.3 294.2h7.2v4h-7.2z"></path><path transform="rotate(-12.268 886.994 385.319)" data-line-id="14" data-st-id="2181" class="st31" d="M883.7 383.4h6.8v4h-6.8z"></path><path data-line-id="14" data-st-id="2161" class="st31" d="M140.471 332.151l1.1-3.8 6.9 2-1.1 3.8-6.9-2z"></path><path transform="rotate(-64.634 157.167 301.33)" data-line-id="14" data-st-id="2184" class="st31" d="M155.2 297.7h4v7.2h-4z"></path><path transform="rotate(-56.461 191.491 241.75)" data-line-id="14" data-st-id="2183" class="st31" d="M189.5 238.2h4v7h-4z"></path><path transform="rotate(-48.868 217.897 208.674)" data-line-id="14" data-st-id="2160" class="st31" d="M215.9 205.3h4v6.8h-4z"></path><path transform="rotate(-44.757 241.418 183.839)" data-line-id="14" data-st-id="2159" class="st31" d="M239.4 180.3h4v7h-4z"></path><path transform="rotate(-32.492 303.176 134.513)" data-line-id="14" data-st-id="2182" class="st31" d="M301.2 131h4v7.1h-4z"></path><path transform="rotate(-25.001 339.106 114.262)" data-line-id="14" data-st-id="2158" class="st31" d="M337.1 110.8h4v6.9h-4z"></path><path transform="rotate(-46.313 228.908 682.293)" data-line-id="1" data-st-id="112" class="st10" d="M226.4 677.8h5v8.9h-5z"></path><path transform="rotate(-46.313 359.903 708.954)" data-line-id="6" data-st-id="140" class="st11" d="M357.4 704.5h5v9h-5z"></path><path d="M365 588.6v-8.7h5v8.7z" data-line-id="1" data-st-id="52" class="st10"></path><path d="M330.9 540.4l.1-8.5h5l-.1 8.5z" data-line-id="3" data-st-id="109" class="st8"></path><path d="M330.8 527.1l.1-8.5h5l-.1 8.5z" data-line-id="4" data-st-id="109" class="st0"></path><path data-line-id="2" data-st-id="133" class="st29" d="M594.4 1008.1h8.6v5h-8.6z"></path><path data-line-id="2" data-st-id="38" class="st29" d="M594.4 973.8h8.6v5h-8.6z"></path><path data-line-id="2" data-st-id="44" class="st29" d="M594.4 902.5h8.6v5h-8.6z"></path><path data-line-id="2" data-st-id="2152" class="st29" d="M594.4 868.1h8.6v5h-8.6z"></path><path data-line-id="2" data-st-id="2" class="st29" d="M594.4 814.8h8.6v5h-8.6z"></path><path data-line-id="2" data-st-id="77" class="st29" d="M594.4 1044h8.6v5h-8.6z"></path><path data-line-id="2" data-st-id="33" class="st29" d="M594.4 1078.5h8.6v5h-8.6z"></path><path data-line-id="7" data-st-id="2151" class="st2" d="M909.1 957.5h13v5h-13v-5z"></path><path data-line-id="7" data-st-id="103" class="st2" d="M913.2 777.5h8.7v5h-8.7v-5z"></path><path data-line-id="7" data-st-id="55" class="st2" d="M874.8 723.6l6.2-6.2 3.5 3.5-6.2 6.2-3.5-3.5z"></path><path data-line-id="7" data-st-id="29" class="st2" d="M913.2 817h8.7v5h-8.7v-5z"></path><path data-line-id="7" data-st-id="2143" class="st2" d="M909.4 923.4h8.7v5h-8.7v-5z"></path><path data-line-id="7" data-st-id="119" class="st2" d="M847.7 696.1l6.2-6.2 3.5 3.5-6.2 6.2-3.5-3.5z"></path><path transform="rotate(-45.001 821.932 663.832)" data-line-id="7" data-st-id="26" class="st2" d="M817.6 661.3h8.7v5h-8.7z"></path><path data-line-id="10" data-st-id="2155" class="st6" d="M511.4 178.8h4v5h-4z"></path><path data-line-id="10" data-st-id="2002" class="st6" d="M511.4 200.6h4v5h-4z"></path><path transform="rotate(-43.348 365.757 513.46)" data-line-id="4" data-st-id="6" data-st-rel="4,18,16" class="st0" d="M363.2 509h5v8.9h-5z"></path><path data-line-id="10" data-st-id="2001" class="st6" d="M511.4 225.8h4v5h-4z"></path><path transform="rotate(-45.001 655.93 324.008)" data-line-id="1" data-st-id="50" class="st10" d="M653.4 319.8h5v8.3h-5z"></path><path d="M526.9 962.1v-8.2l5-.1v8.3z" data-line-id="11" data-st-id="22" class="st5"></path><path transform="rotate(-46.313 267.874 641.244)" data-line-id="1" data-st-id="132" class="st10" d="M265.4 637.2h5v8h-5z"></path><circle cx="493" cy="76.8" r="5" data-line-id="9" data-st-id="23" class="st28"></circle><path transform="rotate(-56.729 746.252 154.623)" data-st-id="127" data-line-id="14" class="st31" d="M742.6 152.6h7.4v4h-7.4z"></path><circle cx="136.1" cy="492.9" r="8.5" data-line-id="4" data-st-id="1004" data-st-rel="2163" class="st0"></circle><circle cx="127" cy="502" r="8.5" data-line-id="14" data-st-id="2163" data-st-rel="1004" class="st31"></circle><path d="M142.1 486.9c-3.3-3.3-8.7-3.3-12 0-2.8 2.8-3.2 7.1-1.2 10.4l2.6-2.6c-.7-1.8-.3-3.9 1.1-5.4 1.9-2 5.1-2 7.1 0" data-line-id="4" data-st-id="1004" data-st-rel="2163" class="st0"></path><path d="M200.339 486.783c.2 0 .4-.1.5-.1 2.8 0 5 2.2 5 5s-2.2 5-5 5c-2.1 0-3.9-1.3-4.6-3.1h-3.7c.2.8.5 1.6.9 2.3 2.3 4.1 7.5 5.5 11.6 3.1 4.1-2.3 5.5-7.5 3.1-11.6-2-3.5-6.1-5-9.8-3.9 0 0 .1.1 1 1.8l1 1.5z" data-line-id="4" data-st-id="152" data-st-rel="2146" class="st0"></path><path d="M192.439 494.583h3.4c.9 1.6 2.7 2.8 4.7 2.8 3 0 5.4-2.4 5.4-5.4 0-2.9-2.3-5.2-5.1-5.4l-1.8-3.3c.5-.8.8-1.7.8-2.8 0-3-2.4-5.4-5.4-5.4a5.378 5.378 0 0 0-4.6 8.2l-2.2 3.2c-2.9.1-5.2 2.5-5.2 5.4 0 3 2.4 5.4 5.4 5.4 1.9.1 3.7-1 4.6-2.7z" data-line-id="11" data-st-id="2146" data-st-rel="152" class="st28"></path><path d="M190.539 483.483c-.1-.1-.2-.3-.3-.4-1.4-2.4-.6-5.4 1.8-6.8 2.4-1.4 5.4-.6 6.8 1.8 1 1.8.8 3.9-.4 5.5l1.8 3.2c.6-.6 1.1-1.2 1.5-1.9 2.3-4.1 1-9.3-3.1-11.6-4.1-2.3-9.3-1-11.6 3.1-2 3.5-1.3 7.8 1.5 10.4 0 0 .1-.1 1-1.8l1-1.5z" data-line-id="11" data-st-id="2146" data-st-rel="152" class="st40"></path><path d="M192.639 493.683c-.1.2-.2.3-.3.5-1.4 2.4-4.4 3.2-6.8 1.8-2.4-1.4-3.2-4.4-1.8-6.8 1-1.8 3-2.7 5-2.4l1.8-3.2c-.8-.2-1.6-.4-2.5-.4-4.7 0-8.5 3.8-8.5 8.5s3.8 8.5 8.5 8.5c4 0 7.4-2.8 8.3-6.5h-3.7z" data-line-id="8" data-st-id="152" data-st-rel="2146" class="st26"></path><path d="M194.639 492.583c-1.6.1-3.2-.7-4.1-2.1-.9-1.4-.9-3.2-.2-4.6l2.3 1.2c1.1.6 1.8 1.7 1.9 3l.1 2.5z" data-line-id="8" data-st-id="152" data-st-rel="2146" class="st26"></path><path d="M196.939 491.883c-.7.4-1.5.7-2.3.7l-.1-2.6c0-1.2.6-2.4 1.6-3.1l2.2-1.4c1.4 2.2.7 5.1-1.4 6.4z" data-line-id="11" data-st-id="152" data-st-rel="2146" class="st0"></path><path d="M198.339 485.583l-2.2 1.4c-1.1.7-2.4.7-3.5.1l-2.3-1.2c.4-.7.9-1.3 1.6-1.7 2.2-1.4 5.1-.8 6.4 1.4z" data-line-id="11" data-st-id="2146" data-st-rel="152" class="st40"></path><path d="M194.439 483.383c.9 0 1.8.7 2.6 2l.9 1.5c.7 1.3.9 2.5.5 3.2-.4.8-1.6 1.2-3 1.2h-1.7c-1.5 0-2.6-.4-3-1.2-.5-.8-.3-2 .4-3.2l.8-1.5c.6-1.2 1.6-2 2.5-2zm0-1.4c-1.4 0-2.8.9-3.8 2.7l-.8 1.5c-2.1 3.6-.4 6.6 3.8 6.6h1.7c4.2 0 5.9-3 3.8-6.6l-.9-1.5c-1.1-1.8-2.5-2.7-3.8-2.7z" data-line-id="11" data-st-id="2146" data-st-rel="152" class="st28"></path><circle cx="427" cy="268.6" r="8.5" data-line-id="9" data-st-id="66" data-st-rel="73" class="st1"></circle><circle cx="427" cy="255.8" r="8.5" data-line-id="5" data-st-id="73" data-st-rel="66" class="st32"></circle><circle cx="427" cy="255.8" r="5" data-line-id="5" data-st-id="73" data-st-rel="66" class="st28"></circle><path transform="rotate(-180 427.06 262.204)" class="st28" d="M425.1 260.3h4v3.7h-4z"></path><path d="M427 277.1c4.7 0 8.5-3.8 8.5-8.5 0-4-2.8-7.3-6.5-8.2v3.7c1.8.8 3 2.5 3 4.6 0 2.8-2.2 5-5 5" data-line-id="9" data-st-id="66" data-st-rel="73" class="st1"></path><circle cx="427" cy="268.6" r="5" data-line-id="9" data-st-id="66" data-st-rel="73" class="st28"></circle><circle cx="809.5" cy="503.3" r="8.5" data-line-id="10" data-st-id="102" data-st-rel="89" class="st6"></circle><circle cx="822.3" cy="503.3" r="8.5" data-line-id="8" data-st-id="89" class="st26"></circle><path d="M801 503.3c0 4.7 3.8 8.5 8.5 8.5 4 0 7.3-2.8 8.2-6.5H814c-.8 1.8-2.5 3-4.6 3-2.8 0-5-2.2-5-5" data-line-id="10" data-st-id="102" data-st-rel="89" class="st6"></path><circle cx="809.5" cy="503.3" r="5" data-line-id="10" data-st-id="102" data-st-rel="89" class="st28"></circle><circle cx="822.3" cy="503.3" r="5" data-line-id="8" data-st-id="89" class="st28"></circle><path transform="rotate(-90 815.914 503.379)" class="st28" d="M813.9 501.5h4v3.7h-4z"></path><circle cx="773.4" cy="630.1" r="8.5" data-line-id="10" data-st-id="51" data-st-rel="95" class="st6"></circle><circle cx="786.3" cy="630.1" r="8.5" data-line-id="7" data-st-id="95" data-st-rel="51" class="st2"></circle><circle cx="786.3" cy="630.1" r="5" data-line-id="7" data-st-id="95" data-st-rel="51" class="st28"></circle><path transform="rotate(-90 779.869 630.166)" class="st28" d="M777.9 628.3h4v3.7h-4z"></path><path d="M764.9 630.1c0 4.7 3.8 8.5 8.5 8.5 4 0 7.3-2.8 8.2-6.5H778c-.8 1.8-2.5 3-4.6 3-2.8 0-5-2.2-5-5" data-line-id="10" data-st-id="51" data-st-rel="95" class="st6"></path><circle cx="773.4" cy="630.1" r="5" data-line-id="10" data-st-id="51" data-st-rel="95" class="st28"></circle><circle cx="325.1" cy="1064.8" r="8.5" data-line-id="6" data-st-id="17" data-st-rel="2145" class="st11"></circle><circle cx="325.1" cy="1077.7" r="8.5" data-line-id="12" data-st-id="2145" data-st-rel="17" class="st30"></circle><path d="M325 1056.3c-4.7 0-8.5 3.9-8.5 8.5 0 4 2.8 7.3 6.5 8.2v-3.7c-1.8-.8-3-2.5-3-4.6 0-2.8 2.2-5 5-5" data-line-id="6" data-st-id="17" data-st-rel="2145" class="st11"></path><circle cx="451.4" cy="1117.2" r="8.5" data-line-id="9" data-st-id="149" data-st-rel="1008" class="st1"></circle><circle cx="438.5" cy="1117.2" r="8.5" data-line-id="12" data-st-id="1008" data-st-rel="149" class="st30"></circle><circle cx="438.5" cy="1117.2" r="5" data-line-id="12" data-st-id="1008" data-st-rel="149" class="st28"></circle><path transform="rotate(90 444.928 1117.183)" class="st28" d="M442.9 1115.3h4v3.7h-4z"></path><path d="M459.9 1117.2c0-4.7-3.8-8.5-8.5-8.5-4 0-7.3 2.8-8.2 6.5h3.7c.8-1.8 2.5-3 4.6-3 2.8 0 5 2.2 5 5" data-line-id="9" data-st-id="149" data-st-rel="1008" class="st1"></path><circle cx="451.4" cy="1117.2" r="5" data-line-id="9" data-st-id="149" data-st-rel="1008" class="st28"></circle><circle cx="762.4" cy="181.9" r="8.5" data-line-id="1" data-st-id="135" data-st-rel="2177" class="st10"></circle><circle cx="775.3" cy="181.9" r="8.5" data-line-id="14" data-st-id="2177" data-st-rel="135" class="st31"></circle><circle cx="775.3" cy="181.9" r="5" data-line-id="14" data-st-id="2177" data-st-rel="135" class="st28"></circle><path transform="rotate(-90 768.869 181.9)" class="st28" d="M766.9 180h4v3.7h-4z"></path><path d="M753.9 181.9c0 4.7 3.8 8.5 8.5 8.5 4 0 7.3-2.8 8.2-6.5H767c-.8 1.8-2.5 3-4.6 3-2.8 0-5-2.2-5-5" data-line-id="1" data-st-id="135" data-st-rel="2177" class="st10"></path><circle cx="488.3" cy="329.9" r="8.5" data-line-id="9" data-st-id="134" data-st-rel="1006" class="st1"></circle><circle cx="497.3" cy="320.8" r="8.5" data-line-id="10" data-st-id="1006" data-st-rel="134" class="st6"></circle><circle cx="488.3" cy="329.9" r="5" data-line-id="9" data-st-id="134" data-st-rel="1006" class="st28"></circle><circle cx="497.3" cy="320.8" r="5" data-line-id="10" data-st-id="1006" data-st-rel="134" class="st28"></circle><path transform="rotate(-134.999 492.841 325.382)" class="st28" d="M490.8 323.5h4v3.7h-4z"></path><path d="M482.3 335.9c3.3 3.3 8.7 3.3 12 0 2.8-2.8 3.2-7.1 1.3-10.4l-2.6 2.6c.7 1.8.3 3.9-1.1 5.4-2 2-5.1 2-7.1 0" data-line-id="9" data-st-id="134" data-st-rel="1006" class="st1"></path><circle cx="606" cy="566.8" r="8.5" data-line-id="8" data-st-id="122" data-st-rel="72" class="st26"></circle><circle cx="596.9" cy="575.9" r="8.5" data-line-id="2" data-st-id="72" data-st-rel="122" class="st9"></circle><path d="M612 560.8c-3.3-3.3-8.7-3.3-12 0-2.8 2.8-3.2 7.1-1.3 10.4l2.6-2.6c-.7-1.8-.3-3.9 1.1-5.4 2-2 5.1-2 7.1 0" data-line-id="6" data-st-id="122" data-st-rel="72" class="st12"></path><path d="M601.5 574l2.6-2.6c1.8.7 3.9.4 5.4-1.1 2-2 2-5.1 0-7.1s-5.1-2-7.1 0c-1.5 1.5-1.8 3.6-1.1 5.4l-2.6 2.6c-1.8-.7-3.9-.3-5.3 1.1-2 2-2 5.1 0 7.1s5.1 2 7.1 0c1.4-1.4 1.8-3.5 1-5.4z" data-line-id="2" data-st-id="72" class="st28"></path><path d="M517 474.6c.9 1.9 2.8 2.9 4.7 2.9l1.5 3.3c-1.3 1.4-1.7 3.6-.8 5.4 1.2 2.5 4.1 3.6 6.6 2.4s3.6-4.1 2.4-6.6c-.9-1.9-2.7-2.9-4.7-2.9l-1.6-3.4c1.3-1.4 1.6-3.5.8-5.4-.9-1.9-2.7-2.9-4.6-2.9l-1.6-3.4c1.3-1.4 1.6-3.5.8-5.4-1.2-2.5-4.1-3.6-6.6-2.4-2.5 1.2-3.6 4.1-2.4 6.6.9 1.9 2.8 2.9 4.7 2.9l1.5 3.3c-1.2 1.6-1.6 3.7-.7 5.6z" class="st28"></path><circle cx="527" cy="484.1" r="5" data-line-id="3" data-st-id="90" data-st-rel="79,118" class="st28"></circle><circle cx="521.6" cy="472.5" r="5" data-line-id="2" data-st-id="118" data-st-rel="79,90" class="st28"></circle><circle cx="516.1" cy="460.9" r="5" data-line-id="1" data-st-id="79" data-st-rel="118,90" class="st28"></circle><path d="M512.5 453.1c-4.3 2-6.1 7-4.1 11.3 1.7 3.6 5.6 5.5 9.4 4.7l-1.6-3.3c-1.9 0-3.8-1-4.7-2.9-1.2-2.5-.1-5.5 2.4-6.6 2.5-1.2 5.5-.1 6.6 2.4.9 1.9.5 4-.8 5.4l1.6 3.3c3-2.4 4.1-6.6 2.4-10.2-1.9-4.2-7-6.1-11.2-4.1z" data-line-id="1" data-st-id="79" data-st-rel="118,90" class="st10"></path><path d="M530.5 491.8c4.3-2 6.1-7 4.1-11.3-1.7-3.6-5.6-5.5-9.4-4.7l1.6 3.3c1.9 0 3.8 1 4.7 2.9 1.2 2.5.1 5.5-2.4 6.6-2.5 1.2-5.5.1-6.6-2.4-.9-1.9-.5-4 .8-5.4l-1.6-3.3c-3 2.4-4.1 6.6-2.4 10.2 1.9 4.2 7 6.1 11.2 4.1z" data-line-id="3" data-st-id="90" data-st-rel="79,118" class="st8"></path><path d="M521.4 467.5c1.9 0 3.8 1 4.7 2.9.9 1.9.5 4-.8 5.4l1.6 3.3c3-2.4 4.1-6.6 2.4-10.2s-5.6-5.5-9.4-4.7l1.5 3.3zm1.8 13.3l-1.6-3.3c-1.9 0-3.8-1-4.7-2.9-.9-1.9-.5-4 .8-5.4l-1.6-3.3c-3 2.4-4.1 6.6-2.4 10.2 1.8 3.6 5.7 5.4 9.5 4.7z" data-line-id="2" data-st-id="118" data-st-rel="79,90" class="st9"></path><path d="M530.5 491.8c4.3-2 6.1-7 4.1-11.3-1.7-3.6-5.6-5.5-9.4-4.7l1.6 3.3c1.9 0 3.8 1 4.7 2.9 1.2 2.5.1 5.5-2.4 6.6l1.4 3.2z" data-line-id="3" data-st-id="90" data-st-rel="79,118" class="st8"></path><path d="M512.5 453.1c-4.3 2-6.1 7-4.1 11.3 1.7 3.6 5.6 5.5 9.4 4.7l-1.6-3.3c-1.9 0-3.8-1-4.7-2.9-1.2-2.5-.1-5.5 2.4-6.6l-1.4-3.2z" data-line-id="1" data-st-id="79" data-st-rel="118,90" class="st10"></path><path d="M454 530.6l-.3-2.8c2.4-.7 4.2-2.9 4.2-5.4 0-3.1-2.6-5.7-5.8-5.7-1.5 0-2.9.6-4 1.5l-2.8-1.6c.1-.4.2-.9.2-1.4 0-3.1-2.6-5.7-5.8-5.7-3.2 0-5.8 2.5-5.8 5.7 0 2.6 1.2 5 3.7 5.7l.1 3.1c-2.5.7-3.8 2.7-3.8 5.3 0 3.1 2.6 5.7 5.8 5.7 1.5 0 2.6-.3 3.6-1.2l2.3 1.4c-.1.5.7.8.7 1.3 0 3.1 2.6 5.7 5.8 5.7 3.2 0 5.8-2.5 5.8-5.7-.1-2.7-1.5-5.2-3.9-5.9z" class="st28"></path><path d="M455.7 528.1c-.7-.4-1.5-.7-2.3-.9v3.6c.1.1.3.1.4.2 0 0 .1 0 .1.1.3.2.5.3.8.6l.1.1.6.6.1.1c.5.7.9 1.6 1 2.6v1.1c0 .2-.1.5-.2.7 0 .1 0 .2-.1.2-.1.2-.2.5-.3.7 0 0 0 .1-.1.1v.1c-.1.2-.3.4-.4.6l-.2.2-.5.5-.2.2-.6.3c-.1.1-.2.1-.3.2-.2.1-.4.1-.6.2-.1 0-.2.1-.4.1s-.3.1-.5.1h-1c-.2 0-.4 0-.5-.1-.1 0-.3-.1-.4-.1-.2 0-.3-.1-.5-.2-.1-.1-.3-.1-.4-.2-.1-.1-.2-.1-.3-.1-.1 0-.1-.1-.2-.1s-.1-.1-.2-.1c-.2-.2-.4-.3-.6-.5-.4-.4-.8-1-1-1.5 0-.1 0-.1-.1-.2-.1-.3-.2-.5-.2-.8v-.1c-.1-.3-.1-.6-.1-.9V534.8l-3.2-1.8c-1.1 3.7.4 7.8 3.9 9.8 4.1 2.3 9.3 1 11.6-3.1 2.2-4.1.9-9.3-3.2-11.6z" data-line-id="9" data-st-id="18" data-st-rel="16,4,6" class="st1"></path><path d="M443.2 533.1c-1.5 1.1-3.7 1.3-5.4.3-2.4-1.4-3.2-4.5-1.8-6.9.6-1 1.4-1.6 2.3-2.1v-3.6c-3.7.9-6.5 4.3-6.5 8.2 0 4.7 3.8 8.5 8.5 8.5 2.4 0 4.6-1 6.1-2.6l-3.2-1.8z" data-line-id="3" data-st-id="6" data-st-rel="4,18,16" class="st8"></path><path d="M438.3 520.7c-.2-.1-.3-.1-.5-.2-2.4-1.4-3.2-4.4-1.8-6.8 1.4-2.4 4.4-3.2 6.8-1.8 1.8 1 2.7 3 2.5 5l3.2 1.8c.2-.8.4-1.6.4-2.5 0-4.7-3.8-8.5-8.5-8.5s-8.5 3.8-8.5 8.5c0 4 2.8 7.4 6.5 8.3v-2l-.1-1.8z" data-line-id="4" data-st-id="4" data-st-rel="16,18,6" class="st0"></path><path d="M455.7 515.2c-3.5-2-7.8-1.3-10.4 1.5l3.2 1.8c1.6-1.2 3.7-1.4 5.5-.3 2.4 1.4 3.2 4.4 1.8 6.8-.6 1-1.4 1.7-2.4 2.1v3.7c2.2-.5 4.1-1.9 5.4-4 2.3-4.1 1-9.3-3.1-11.6z" data-line-id="1" data-st-id="16" data-st-rel="4,18,6" class="st10"></path><path d="M451.4 543.9c4.7 0 8.5-3.8 8.5-8.5 0-4-2.8-7.3-6.5-8.2v3.7c1.8.8 3 2.5 3 4.6 0 2.8-2.2 5-5 5" data-line-id="9" data-st-id="18" data-st-rel="16,4,6" class="st1"></path><circle cx="313.5" cy="790.7" r="8.5" data-line-id="6" data-st-id="59" data-st-rel="2166" class="st11"></circle><circle cx="322.7" cy="799.7" r="8.5" data-line-id="14" data-st-id="2166" data-st-rel="59" class="st31"></circle><circle cx="322.7" cy="799.8" r="5" data-line-id="14" data-st-id="2166" data-st-rel="59" class="st28"></circle><circle cx="313.6" cy="790.7" r="5" data-line-id="6" data-st-id="59" data-st-rel="2166" class="st28"></circle><path transform="rotate(134.999 318.156 795.25)" class="st28" d="M316.2 793.4h4v3.7h-4z"></path><path d="M307.5 784.7c-3.3 3.3-3.3 8.7.1 12 2.8 2.8 7.1 3.2 10.4 1.2l-2.6-2.6c-1.8.7-3.9.4-5.4-1.1-2-1.9-2-5.1 0-7.1" data-line-id="6" data-st-id="59" data-st-rel="2166" class="st11"></path><path d="M439.4 440.1h3.4c.9 1.6 2.7 2.8 4.7 2.8 3 0 5.4-2.4 5.4-5.4 0-2.9-2.3-5.2-5.1-5.4l-1.8-3.3c.5-.8.8-1.7.8-2.8 0-3-2.4-5.4-5.4-5.4a5.378 5.378 0 0 0-4.6 8.2l-2.2 3.2c-2.9.1-5.2 2.5-5.2 5.4 0 3 2.4 5.4 5.4 5.4 1.9.1 3.7-1 4.6-2.7z" class="st28"></path><circle cx="447.9" cy="437.3" r="5" data-line-id="2" data-st-id="117" data-st-rel="99,137" class="st28"></circle><circle cx="441.5" cy="426.1" r="5" data-line-id="7" data-st-id="99" data-st-rel="137,117" class="st28"></circle><circle cx="435" cy="437.2" r="5" data-line-id="9" data-st-id="137" data-st-rel="99,117" class="st28"></circle><path d="M439.6 439.2c-.1.2-.2.3-.3.5-1.4 2.4-4.4 3.2-6.8 1.8-2.4-1.4-3.2-4.4-1.8-6.8 1-1.8 3-2.7 5-2.4l1.8-3.2c-.8-.2-1.6-.4-2.5-.4-4.7 0-8.5 3.8-8.5 8.5s3.8 8.5 8.5 8.5c4 0 7.4-2.8 8.3-6.5h-3.7z" data-line-id="9" data-st-id="137" data-st-rel="99,117" class="st1"></path><path d="M437.5 429c-.1-.1-.2-.3-.3-.4-1.4-2.4-.6-5.4 1.8-6.8 2.4-1.4 5.4-.6 6.8 1.8 1 1.8.8 3.9-.4 5.5l1.8 3.2c.6-.6 1.1-1.2 1.5-1.9 2.3-4.1 1-9.3-3.1-11.6-4.1-2.3-9.3-1-11.6 3.1-2 3.5-1.3 7.8 1.5 10.4 0 0 .1-.1 1-1.8l1-1.5z" data-line-id="7" data-st-id="99" data-st-rel="137,117" class="st2"></path><path d="M447.3 432.3c.2 0 .4-.1.5-.1 2.8 0 5 2.2 5 5s-2.2 5-5 5c-2.1 0-3.9-1.3-4.6-3.1h-3.7c.2.8.5 1.6.9 2.3 2.3 4.1 7.5 5.5 11.6 3.1 4.1-2.3 5.5-7.5 3.1-11.6-2-3.5-6.1-5-9.8-3.9 0 0 .1.1 1 1.8l1 1.5z" data-line-id="2" data-st-id="117" data-st-rel="99,137" class="st9"></path><path d="M441.6 438.1c-1.6.1-3.2-.7-4.1-2.1-.9-1.4-.9-3.2-.2-4.6l2.3 1.2c1.1.6 1.8 1.7 1.9 3l.1 2.5z" data-line-id="9" data-st-id="137" data-st-rel="99,117" class="st33"></path><path d="M443.9 437.4c-.7.4-1.5.7-2.3.7l-.1-2.6c0-1.2.6-2.4 1.6-3.1l2.2-1.4c1.4 2.2.7 5.1-1.4 6.4z" data-line-id="2" data-st-id="117" data-st-rel="99,137" class="st34"></path><path d="M445.3 431.1l-2.2 1.4c-1.1.7-2.4.7-3.5.1l-2.3-1.2c.4-.7.9-1.3 1.6-1.7 2.2-1.4 5.1-.8 6.4 1.4z" data-line-id="7" data-st-id="99" data-st-rel="137,117" class="st35"></path><path d="M441.4 428.9c.9 0 1.8.7 2.6 2l.9 1.5c.7 1.3.9 2.5.5 3.2-.4.8-1.6 1.2-3 1.2h-1.7c-1.5 0-2.6-.4-3-1.2-.5-.8-.3-2 .4-3.2l.8-1.5c.6-1.2 1.6-2 2.5-2m0-1.4c-1.4 0-2.8.9-3.8 2.7l-.8 1.5c-2.1 3.6-.4 6.6 3.8 6.6h1.7c4.2 0 5.9-3 3.8-6.6l-.9-1.5c-1.1-1.8-2.5-2.7-3.8-2.7z" class="st28"></path><path d="M426.5 437.2c0 4.7 3.8 8.5 8.5 8.5 4 0 7.3-2.8 8.2-6.5h-3.7c-.8 1.8-2.5 3-4.6 3-2.8 0-5-2.2-5-5" data-line-id="9" data-st-id="137" data-st-rel="99,117" class="st1"></path><path d="M609.4 375.1h3.4c.9 1.6 2.7 2.8 4.7 2.8 3 0 5.4-2.4 5.4-5.4 0-2.9-2.3-5.2-5.1-5.4l-1.8-3.3c.5-.8.8-1.7.8-2.8 0-3-2.4-5.4-5.4-5.4a5.378 5.378 0 0 0-4.6 8.2l-2.2 3.2c-2.9.1-5.2 2.5-5.2 5.4 0 3 2.4 5.4 5.4 5.4 1.9.1 3.7-1 4.6-2.7z" class="st28"></path><circle cx="611.5" cy="361.1" r="5" data-line-id="10" data-st-id="1007" data-st-rel="124,138" class="st28"></circle><circle cx="605.1" cy="372.1" r="5" data-line-id="1" data-st-id="138" data-st-rel="124,1007" class="st28"></circle><circle cx="617.9" cy="372.3" r="5" data-line-id="6" data-st-id="124" data-st-rel="138,1007" class="st28"></circle><path d="M609.6 374.2c-.1.2-.2.3-.3.5-1.4 2.4-4.4 3.2-6.8 1.8-2.4-1.4-3.2-4.4-1.8-6.8 1-1.8 3-2.7 5-2.4l1.8-3.2c-.8-.2-1.6-.4-2.5-.4-4.7 0-8.5 3.8-8.5 8.5s3.8 8.5 8.5 8.5c4 0 7.4-2.8 8.3-6.5h-3.7z" data-line-id="1" data-st-id="138" data-st-rel="124,1007" class="st10"></path><path d="M607.5 364c-.1-.1-.2-.3-.3-.4-1.4-2.4-.6-5.4 1.8-6.8 2.4-1.4 5.4-.6 6.8 1.8 1 1.8.8 3.9-.4 5.5l1.8 3.2c.6-.6 1.1-1.2 1.5-1.9 2.3-4.1 1-9.3-3.1-11.6-4.1-2.3-9.3-1-11.6 3.1-2 3.5-1.3 7.8 1.5 10.4 0 0 .1-.1 1-1.8l1-1.5z" data-line-id="10" data-st-id="1007" data-st-rel="124,138" class="st6"></path><path d="M617.3 367.3c.2 0 .4-.1.5-.1 2.8 0 5 2.2 5 5s-2.2 5-5 5c-2.1 0-3.9-1.3-4.6-3.1h-3.7c.2.8.5 1.6.9 2.3 2.3 4.1 7.5 5.5 11.6 3.1 4.1-2.3 5.5-7.5 3.1-11.6-2-3.5-6.1-5-9.8-3.9 0 0 .1.1 1 1.8l1 1.5z" data-line-id="6" data-st-id="124" data-st-rel="138,1007" class="st11"></path><path d="M611.6 373.1c-1.6.1-3.1-.7-4-2.2-.9-1.4-.9-3.2-.1-4.6l2.3 1.2c1.1.6 1.8 1.7 1.8 3v2.6z" data-line-id="1" data-st-id="138" data-st-rel="124,1007" class="st36"></path><path d="M613.9 372.4c-.7.4-1.5.7-2.3.7l-.1-2.6c0-1.2.6-2.4 1.7-3.1l2.2-1.4c1.3 2.2.6 5.1-1.5 6.4z" data-line-id="6" data-st-id="124" data-st-rel="138,1007" class="st37"></path><path d="M615.3 366.1l-2.2 1.4c-1.1.7-2.4.7-3.5.1l-2.3-1.2c.4-.7.9-1.3 1.6-1.7 2.3-1.4 5.1-.8 6.4 1.4z" data-line-id="10" data-st-id="1007" data-st-rel="124,138" class="st38"></path><path d="M611.4 363.9c.9 0 1.8.7 2.6 2l.9 1.5c.7 1.3.9 2.5.5 3.2-.4.8-1.6 1.2-3 1.2h-1.7c-1.5 0-2.6-.4-3-1.2-.5-.8-.3-2 .4-3.2l.8-1.5c.6-1.2 1.6-2 2.5-2m0-1.4c-1.4 0-2.8.9-3.8 2.7l-.8 1.5c-2.1 3.6-.4 6.6 3.8 6.6h1.7c4.2 0 5.9-3 3.8-6.6l-.9-1.5c-1.1-1.8-2.5-2.7-3.8-2.7z" class="st28"></path><path d="M596.5 372.1c0 4.7 3.8 8.5 8.5 8.5 4 0 7.3-2.8 8.2-6.5h-3.7c-.8 1.8-2.5 3-4.6 3-2.8 0-5-2.2-5-5" data-line-id="1" data-st-id="138" data-st-rel="124,1007" class="st10"></path><circle cx="289.6" cy="434.2" r="8.5" data-line-id="5" data-st-id="48" data-st-rel="10" class="st39"></circle><circle cx="298.7" cy="425.1" r="8.5" data-line-id="7" data-st-id="10" data-st-rel="48" class="st2"></circle><circle cx="289.6" cy="434.2" r="5" data-line-id="5" data-st-id="48" data-st-rel="10" class="st28"></circle><circle cx="298.7" cy="425.1" r="5" data-line-id="7" data-st-id="10" data-st-rel="48" class="st28"></circle><path transform="rotate(-134.999 294.215 429.632)" class="st28" d="M292.2 427.8h4v3.7h-4z"></path><path d="M283.6 440.2c3.3 3.3 8.7 3.3 12 0 2.8-2.8 3.2-7.1 1.3-10.4l-2.6 2.6c.7 1.8.3 3.9-1.1 5.4-2 2-5.1 2-7.1 0" data-line-id="5" data-st-id="48" data-st-rel="10" class="st39"></path><circle cx="559.3" cy="416.8" r="8.5" data-line-id="1" data-st-id="60" data-st-rel="54" class="st10"></circle><circle cx="568.4" cy="425.9" r="8.5" data-line-id="7" data-st-id="54" data-st-rel="60" class="st2"></circle><circle cx="568.4" cy="425.9" r="5" data-line-id="7" data-st-id="54" data-st-rel="60" class="st28"></circle><path transform="rotate(-45.001 563.85 421.408)" class="st28" d="M561.9 419.5h4v3.7h-4z"></path><path d="M553.3 410.8c-3.3 3.3-3.3 8.7 0 12 2.8 2.8 7.1 3.2 10.4 1.3l-2.6-2.6c-1.8.7-3.9.3-5.4-1.1-2-2-2-5.1 0-7.1" data-line-id="1" data-st-id="60" data-st-rel="54" class="st10"></path><circle cx="559.3" cy="416.8" r="5" data-line-id="1" data-st-id="60" data-st-rel="54" class="st28"></circle><circle cx="460.5" cy="680.6" r="8.5" data-line-id="5" data-st-id="32" data-st-rel="108" class="st39"></circle><circle cx="451.4" cy="689.7" r="8.5" data-line-id="9" data-st-id="108" data-st-rel="32" class="st1"></circle><circle cx="460.5" cy="680.6" r="5" data-line-id="5" data-st-id="32" data-st-rel="108" class="st28"></circle><circle cx="451.4" cy="689.7" r="5" data-line-id="9" data-st-id="108" data-st-rel="32" class="st28"></circle><path transform="rotate(45.001 455.968 685.16)" class="st28" d="M454 683.3h4v3.7h-4z"></path><path d="M466.5 674.6c-3.3-3.3-8.7-3.3-12 0-2.8 2.8-3.2 7.1-1.3 10.4l2.6-2.6c-.7-1.8-.3-3.9 1.1-5.4 2-2 5.1-2 7.1 0" data-line-id="5" data-st-id="32" data-st-rel="108" class="st39"></path><circle cx="442.5" cy="954.8" r="8.5" data-line-id="11" data-st-id="39" data-st-rel="106" class="st5"></circle><circle cx="451.6" cy="945.7" r="8.5" data-line-id="9" data-st-id="106" data-st-rel="39" class="st1"></circle><circle cx="442.5" cy="954.8" r="5" data-line-id="11" data-st-id="39" data-st-rel="106" class="st28"></circle><circle cx="451.6" cy="945.7" r="5" data-line-id="9" data-st-id="106" data-st-rel="39" class="st28"></circle><path transform="rotate(-134.999 447.09 950.26)" class="st28" d="M445.1 948.4h4v3.7h-4z"></path><path d="M436.5 960.8c3.3 3.3 8.7 3.3 12 0 2.8-2.8 3.2-7.1 1.3-10.4l-2.6 2.6c.7 1.8.3 3.9-1.1 5.4-2 2-5.1 2-7.1 0" data-line-id="11" data-st-id="39" data-st-rel="106" class="st5"></path><circle cx="724.9" cy="1122.4" r="8.5" data-line-id="2" data-st-id="47" data-st-rel="217" class="st29"></circle><circle cx="734" cy="1113.3" r="8.5" data-line-id="10" data-st-id="217" data-st-rel="47" class="st6"></circle><circle cx="724.9" cy="1122.4" r="5" data-line-id="2" data-st-id="47" data-st-rel="217" class="st28"></circle><circle cx="734" cy="1113.3" r="5" data-line-id="10" data-st-id="217" data-st-rel="47" class="st28"></circle><path transform="rotate(-134.999 729.466 1117.886)" class="st28" d="M727.5 1116h4v3.7h-4z"></path><path d="M718.9 1128.4c3.3 3.3 8.7 3.3 12 0 2.8-2.8 3.2-7.1 1.3-10.4l-2.6 2.6c.7 1.8.3 3.9-1.1 5.4-2 2-5.1 2-7.1 0" data-line-id="2" data-st-id="47" data-st-rel="217" class="st29"></path><path data-line-id="8" data-st-id="2185" class="st26" d="M81.7 693.6h8.9v5h-8.9z"></path><path transform="rotate(-45.001 64.11 726.153)" data-line-id="8" data-st-id="2186" class="st26" d="M61.6 721.7h5v8.9h-5z"></path><circle cx="440.3" cy="516" r="5" data-st-id="4" data-st-rel="16,18,6" class="st28"></circle><circle cx="440.3" cy="529" r="5" data-line-id="3" data-st-id="6" data-st-rel="4,18,16" class="st28"></circle><circle cx="451.4" cy="522.6" r="5" data-line-id="1" data-st-id="16" data-st-rel="4,18,6" class="st28"></circle><circle cx="451.5" cy="535.4" r="5" data-line-id="9" data-st-id="18" data-st-rel="16,4,6" class="st28"></circle><path d="M446.6 523.9l-1.2.8-3.1-5.3c.5-.3 1.2-.3 1.8 0l1.2.7 1.3.7c1.2.7 1.1 2.3 0 3.1z" data-line-id="1" data-st-id="16" data-st-rel="4,18,6" class="st10"></path><path d="M442.3 519.4l3.1 5.3c-.6.4-1.2.6-1.2.6-1.3.6-2.6-.2-2.7-1.5v-2.9c-.1-.6.3-1.2.8-1.5z" data-st-id="4" data-line-id="4" data-st-rel="16,18,6" class="st0"></path><path d="M445.6 527.8l1.2-.8 3.1 5.3c-.5.3-1.2.3-1.8 0l-1.2-.7-1.3-.7c-1.2-.7-1.1-2.3 0-3.1z" data-line-id="3" data-st-id="6" data-st-rel="4,18,16" class="st8"></path><path d="M449.8 532.3l-3.1-5.3c.6-.4 1.2-.6 1.2-.6 1.3-.6 2.6.2 2.7 1.5v2.9c.1.7-.2 1.2-.8 1.5z" data-line-id="1" data-st-id="16" data-st-rel="4,18,6" class="st10"></path><circle cx="127" cy="502" r="5" data-line-id="14" data-st-id="2163" data-st-rel="1004" class="st28"></circle><circle cx="136.1" cy="492.9" r="5" data-line-id="4" data-st-id="1004" data-st-rel="2163" class="st28"></circle><path transform="rotate(-134.999 131.566 497.482)" class="st28" d="M129.5 495.6h4.1v3.7h-4.1z"></path><circle cx="325.1" cy="1077.7" r="5" data-line-id="12" data-st-id="2145" data-st-rel="17" class="st28"></circle><circle cx="325.1" cy="1064.8" r="5" data-line-id="6" data-st-id="17" data-st-rel="2145" class="st28"></circle><path transform="rotate(180 325.173 1071.225)" class="st28" d="M323.2 1069.4h4v3.7h-4z"></path><circle cx="762.4" cy="181.9" r="5" data-st-id="135" data-st-rel="2177" class="st28"></circle><path data-line-id="2" data-st-id="24" class="st29" d="M257.6 77.8h9v5h-9z"></path><path data-line-id="2" data-st-id="2207" class="st29" d="M257.6 28.4h9v5h-9z"></path><circle cx="285.7" cy="274.5" r="8.5" data-line-id="2" data-st-id="30" data-st-rel="2195" class="st29"></circle><path d="M274.656 289.578a8.5 8.5 0 1 0-.001-17.001 8.5 8.5 0 0 0 .001 17.001z" data-line-id="11" data-st-id="2195" data-st-rel="30" class="st40"></path><path d="M280.8 275.2l-3.1 1.9c-1.6-1.1-3.7-1.3-5.5-.3-2.4 1.4-3.2 4.5-1.7 6.9 1.4 2.4 4.5 3.2 6.9 1.7 1.8-1 2.6-3 2.4-4.9l3.2-1.9c1.6 1.1 3.7 1.3 5.4.2 2.4-1.4 3.2-4.5 1.7-6.9-1.4-2.4-4.5-3.2-6.9-1.7-1.8 1.1-2.7 3.1-2.4 5z" data-line-id="11" data-st-id="2195" data-st-rel="30" class="st28"></path><path d="M194.5 354.861a8.5 8.5 0 1 0 0-17 8.5 8.5 0 0 0 0 17z" data-line-id="11" data-st-id="2193" data-st-rel="91" class="st40"></path><path d="M202.686 345a8.5 8.5 0 1 0-.001-17.001 8.5 8.5 0 0 0 .001 17.001z" data-line-id="7" data-st-id="91" data-st-rel="2193" class="st2"></path><path d="M198.286 338.8l-2.3 2.8c-1.9-.5-4 0-5.3 1.6-1.8 2.1-1.5 5.3.7 7 2.1 1.8 5.3 1.5 7-.7 1.3-1.6 1.5-3.7.6-5.4l2.4-2.9c1.8.5 3.9-.1 5.2-1.6 1.8-2.1 1.5-5.3-.7-7-2.1-1.8-5.3-1.5-7 .7-1.3 1.6-1.5 3.7-.6 5.5z" data-line-id="11" data-st-id="2193" data-st-rel="91" class="st28"></path><path d="M115.247 354.468l6.285-6.442 3.579 3.491-6.285 6.442-3.579-3.491z" data-line-id="11" data-st-id="2224" class="st40"></path><path d="M124.626 371.026l6.284-6.442 3.579 3.492-6.284 6.442-3.579-3.492z" data-line-id="11" data-st-id="2223" class="st40"></path><circle cx="138.3" cy="427.7" r="8.5" data-line-id="11" data-st-id="2162" class="st40"></circle><circle cx="129.2" cy="418.6" r="8.5" data-line-id="14" data-st-id="2162" class="st31"></circle><path d="M144.3 433.7c3.3-3.3 3.3-8.7 0-12-2.8-2.8-7.1-3.2-10.4-1.3l2.6 2.6c1.8-.7 3.9-.3 5.4 1.1 2 2 2 5.1 0 7.1" data-line-id="11" data-st-id="2162" class="st40"></path><path d="M131.1 423.2l2.6 2.6c-.7 1.8-.4 3.9 1.1 5.4 2 2 5.1 2 7.1 0s2-5.1 0-7.1c-1.5-1.5-3.6-1.8-5.4-1.1l-2.6-2.6c.7-1.8.3-3.9-1.1-5.3-2-2-5.1-2-7.1 0s-2 5.1 0 7.1c1.5 1.4 3.6 1.7 5.4 1z" data-line-id="11" data-st-id="2162" class="st28"></path><path d="M238.8 315.421a8.5 8.5 0 0 0 8.5-8.5 8.5 8.5 0 0 0-8.5-8.5 8.5 8.5 0 1 0 0 17z" data-line-id="11" data-st-id="2194" class="st40"></path><path d="M238.77 311.989a5 5 0 1 0-.001-10.001 5 5 0 0 0 .001 10.001z" data-line-id="11" data-st-id="2194" class="st28"></path><circle cx="414" cy="88.2" r="5" data-line-id="10" data-st-id="2157" class="st28"></circle><circle cx="762.5" cy="124" r="10" data-control-id="1-1" data-select-line-id="1" class="line1 line-select"></circle><text transform="translate(759.2 128)" data-control-id="1-1" data-select-line-id="1" class="label line-number">1</text><circle cx="878" cy="152" r="10" data-control-id="3-1" data-select-line-id="3" class="line3 line-select"></circle><text transform="translate(875 156)" data-control-id="3-1" data-select-line-id="3" class="label line-number">3</text><circle cx="922.5" cy="336.6" r="10" data-control-id="8-1" data-select-line-id="8" class="line8 line-select"></circle><text transform="translate(919.5 340.6)" data-control-id="8-1" data-select-line-id="8" class="label line-number">8</text><circle cx="993.7" cy="1088.3" r="10" data-control-id="15-1" data-select-line-id="15" class="line15 line-select"></circle><text transform="translate(987 1092.3)" data-control-id="15-1" data-select-line-id="15" class="label line-number">15</text><circle cx="915" cy="979" r="10" data-control-id="7-1" data-select-line-id="7" class="line7 line-select"></circle><text transform="translate(912.1 983.4)" data-control-id="7-1" data-select-line-id="7" class="label line-number">7</text><circle cx="852" cy="1122.1" r="10" data-control-id="2-1" data-select-line-id="2" class="line2 line-select"></circle><text transform="translate(849 1126.1)" data-control-id="2-1" data-select-line-id="2" class="label line-number">2</text><circle cx="711" cy="1098.3" r="10" data-control-id="10-1" data-select-line-id="10" class="line10 line-select"></circle><text transform="translate(704 1102.3)" data-control-id="10-1" data-select-line-id="10" class="label line-number">10</text><circle cx="460" cy="1150" r="10" data-control-id="9-1" data-select-line-id="9" class="line9 line-select"></circle><text transform="translate(457 1154)" data-control-id="9-1" data-select-line-id="9" class="label line-number">9</text><circle cx="152" cy="1160" r="10" data-control-id="12-1" data-select-line-id="12" class="line12 line-select"></circle><text transform="translate(145 1164)" data-control-id="12-1" data-select-line-id="12" class="label line-number">12</text><circle cx="290" cy="1064" r="10" data-control-id="6-1" data-select-line-id="6" class="line6 line-select"></circle><text transform="translate(286.5 1067.5)" data-control-id="6-1" data-select-line-id="6" class="label line-number">6</text><circle cx="674" cy="644" r="10" data-control-id="5-1" data-select-line-id="5" class="line5 line-select"></circle><text transform="translate(671 648)" data-control-id="5-1" data-select-line-id="5" class="label line-number">5</text><circle cx="163.5" cy="1065" r="10" data-control-id="1-2" data-select-line-id="1" class="line1 line-select"></circle><text transform="translate(160.2 1069.2)" data-control-id="1-2" data-select-line-id="1" class="label line-number">1</text><circle cx="8.5" cy="974" r="10" data-control-id="8-2" data-select-line-id="8" class="line8 line-select"></circle><text transform="translate(5.5 978)" data-control-id="8-2" data-select-line-id="8" class="label line-number">8</text><circle cx="218" cy="745" r="10" data-control-id="14-1" data-select-line-id="14" class="line14 line-select"></circle><text transform="translate(211 749)" data-control-id="14-1" data-select-line-id="14" class="label line-number">14</text><circle cx="9" cy="122" r="10" data-control-id="3-2" data-select-line-id="3" class="line3 line-select"></circle><text transform="translate(6 126)" data-control-id="3-2" data-select-line-id="3" class="label line-number">3</text><circle cx="163.5" cy="34" r="10" data-control-id="7-2" data-select-line-id="7" class="line7 line-select"></circle><text transform="translate(160.5 38)" data-control-id="7-2" data-select-line-id="7" class="label line-number">7</text><circle cx="260" cy="-18" r="10" data-control-id="2-2" data-select-line-id="2" class="line2 line-select"></circle><text transform="translate(257 -14)" data-control-id="2-2" data-select-line-id="2" class="label line-number">2</text><circle cx="393" cy="-18" r="10" data-control-id="10-2" data-select-line-id="10" class="line10 line-select"></circle><text transform="translate(386 -14)" data-control-id="10-2" data-select-line-id="10" class="label line-number">10</text><circle cx="493" cy="-18" r="10" data-control-id="9-2" data-select-line-id="9" class="line9 line-select"></circle><text transform="translate(490 -14)" data-control-id="9-2" data-select-line-id="9" class="label line-number">9</text><circle cx="625" cy="-18" r="10" data-control-id="6-2" data-select-line-id="6" class="line6 line-select"></circle><text transform="translate(622 -14)" data-control-id="6-2" data-select-line-id="6" class="label line-number">6</text><circle cx="168" cy="422" r="10" data-control-id="11-1" data-select-line-id="11" class="line11 line-select"></circle><text transform="translate(161.5 426)" data-control-id="11-1" data-select-line-id="11" class="label line-number">11</text><circle cx="-20" cy="350" r="10" data-control-id="4-1" data-select-line-id="4" class="line4 line-select"></circle><text transform="translate(-23.5 354)" data-control-id="4-1" data-select-line-id="4" class="label line-number">4</text><path transform="rotate(-45.001 491.571 151.176)" data-line-id="10" data-st-id="2154" class="st6" d="M489.6 148.7h4v5h-4z"></path><path class="st24" d="M280 389h74v12h-74zM267 293h74v12h-74zM122 226h74v12h-74z"></path><text transform="translate(95.897 669.582)" data-line-id="8" data-st-id="81" class="label">Парк Победы</text><text transform="translate(926.021 823.03)" data-line-id="7" data-st-id="29" class="label">Выхино</text><text transform="translate(235.897 536.582)" data-line-id="3" data-line-rel="5,4" data-st-id="41" class="label">Киевская</text><text transform="translate(603.762 591.216)" data-line-id="2" data-st-id="72" data-st-rel="122" class="label">Новокузнецкая</text><text transform="translate(685.36 626.466)" data-line-id="10" data-st-id="51" data-st-rel="95" class="label"><tspan x="0" y="0">Крестьянская </tspan><tspan x="31.6" y="11">Застава</tspan></text><text transform="matrix(1.0567 0 0 1 183.897 508.41)" data-line-rel="4" data-line-id="8" data-st-id="152" data-st-rel="2146" class="label">Выставочная</text><text transform="translate(173.518 812.82)" data-line-id="1" data-st-id="129" class="label">Университет</text><text transform="translate(173.518 865.343)" data-line-id="1" data-st-id="145" class="label">Юго-Западная</text><text transform="translate(173.518 892.275)" data-line-id="1" data-st-id="2148" class="label">Тропарёво</text><text transform="translate(173.518 918.035)" data-line-id="1" data-st-id="2149" class="label">Румянцево</text><text transform="translate(173.518 942.834)" data-line-id="1" data-st-id="2150" class="label">Саларьево</text><text transform="translate(173.518 968.523)" data-line-id="1" data-st-id="2212" class="label">Филатов Луг</text><path d="M160.7 962.3h8.9v5h-8.9v-5z" data-line-id="1" data-st-id="2212" class="st10"></path><text transform="translate(173.518 995.455)" data-line-id="1" data-st-id="2213" class="label">Прокшино</text><path d="M160.7 990h8.9v5h-8.9v-5z" data-line-id="1" data-st-id="2213" class="st10"></path><text transform="translate(173.518 1021.215)" data-line-id="1" data-st-id="2214" class="label">Ольховая</text><path d="M160.7 1015.3h8.9v5h-8.9v-5z" data-line-id="1" data-st-id="2214" class="st10"></path><text transform="translate(173.518 1046.191)" data-line-id="1" data-st-id="2215" class="label">Коммунарка</text><path d="M156.6 1040.2h13v5h-13v-5z" data-line-id="1" data-st-id="2215" class="st10"></path><text transform="translate(323.954 783.72)" data-line-id="6" data-st-id="59" data-st-rel="2166" class="label">Ленинский проспект</text><text transform="translate(323.675 888.781)" data-line-id="6" data-st-id="98" class="label">Профсоюзная</text><text transform="translate(323.675 912.97)" data-line-id="6" data-st-id="74" class="label">Новые Черёмушки</text><text transform="translate(323.675 962.67)" data-line-id="6" data-st-id="14" class="label">Беляево</text><text transform="translate(323.675 987.157)" data-line-id="6" data-st-id="46" class="label">Коньково</text><text transform="translate(323.675 1012.644)" data-line-id="6" data-st-id="120" class="label">Тёплый стан</text><text transform="translate(323.675 1039.133)" data-line-id="6" data-st-id="147" class="label">Ясенево</text><text transform="translate(336.675 1064.62)" data-line-id="6" data-st-id="17" data-st-rel="2145" class="label">Новоясеневская</text><text transform="translate(269.29 186.227)" data-line-id="2" data-st-id="25" class="label">Войковская</text><text transform="translate(269.29 211.227)" data-line-id="2" data-st-id="110" class="label">Сокол</text><text transform="translate(269.29 236.227)" data-line-id="2" data-st-id="7" class="label">Аэропорт</text><text transform="translate(301.793 277.563)" data-line-id="2" data-st-id="30" data-st-rel="2195" class="label">Динамо</text><text transform="translate(348.29 325.227)" data-line-id="2" data-line-rel="5" data-st-id="13" class="label">Белорусская</text><text transform="translate(858.825 688.19)" data-line-id="7" data-st-id="119" class="label">Текстильщики</text><text transform="translate(744.07 823.156)" data-line-id="10" data-st-id="43" class="label">Кожуховская</text><text transform="translate(744.07 858.512)" data-line-id="10" data-st-id="86" class="label">Печатники</text><text transform="translate(744.07 893.867)" data-line-id="10" data-st-id="27" class="label">Волжская</text><text transform="translate(744.07 927.933)" data-line-id="10" data-st-id="61" class="label">Люблино</text><text transform="translate(744.07 963.578)" data-line-id="10" data-st-id="20" class="label">Братиславская</text><text transform="translate(744.07 999.934)" data-line-id="10" data-st-id="63" class="label">Марьино</text><text transform="translate(744.07 1035.29)" data-line-id="10" data-st-id="215" class="label">Борисово</text><text transform="translate(744.07 1070.285)" data-line-id="10" data-st-id="216" class="label">Шипиловская</text><text transform="translate(744.07 1105.822)" data-line-id="10" data-st-id="217" data-st-rel="47" class="label">Зябликово</text><text transform="translate(462.376 763.99)" data-line-id="9" data-st-id="123" class="label">Тульская</text><text transform="translate(462.376 871.632)" data-line-id="9" data-st-id="68" class="label">Нагатинская</text><text transform="translate(462.376 895.165)" data-line-id="9" data-st-id="69" class="label">Нагорная</text><text transform="translate(462.31 918.252)" data-line-id="9" data-st-id="70" class="label">Нахимовский проспект</text><text transform="translate(462.475 991.903)" data-line-id="9" data-st-id="136" class="label">Чертановская</text><text transform="translate(462.36 1017.075)" data-line-id="9" data-st-id="146" class="label">Южная</text><text transform="translate(462.31 1042.247)" data-line-id="9" data-st-id="93" class="label">Пражская</text><text transform="translate(462.31 1067.419)" data-line-id="9" data-st-id="128" class="label">Ул. Академика Янгеля</text><text transform="translate(462.294 1119.026)" data-line-id="9" data-st-id="149" data-st-rel="1008" class="label"><tspan x="0" y="0">Бульвар Дмитрия </tspan><tspan x="0" y="12">Донского</tspan></text><text transform="translate(306.294 1120.026)" data-line-id="12" data-st-id="1008" data-st-rel="149" class="label">Ул. Старокачаловская</text><text transform="translate(348.143 1099.026)" data-line-id="12" data-st-id="2144" class="label">Лесопарковая</text><text transform="translate(239.294 1099.026)" data-line-id="12" data-st-id="2145" data-st-rel="17" class="label">Битцевский парк</text><text transform="translate(312.294 1187.026)" data-line-id="12" data-st-id="1010" class="label"><tspan x="0" y="0">Бульвар </tspan><tspan x="0" y="12">Адмирала </tspan><tspan x="0" y="24">Ушакова</tspan></text><text transform="translate(222.3 1186.026)" data-line-id="12" data-st-id="1011" class="label">Ул. Горчакова</text><text transform="translate(145.294 1186.026)" data-line-id="12" data-st-id="1012" class="label"><tspan x="0" y="0">Бунинская </tspan><tspan x="0" y="12">аллея</tspan></text><text transform="translate(385.294 1186.026)" data-line-id="12" data-st-id="1009" class="label">Ул. Скобелевская</text><text transform="translate(462.31 1093.543)" data-line-id="9" data-st-id="148" class="label">Аннино</text><text transform="matrix(1 0 0 1.0101 461.964 943.597)" data-line-id="9" data-st-id="106" data-st-rel="39" class="label">Севастопольская</text><text transform="translate(607.33 1049.24)" data-line-id="2" data-st-id="77" class="label">Орехово</text><text transform="translate(809.49 1146.959)" data-line-id="2" data-st-id="2135" class="label"><tspan x="0" y="0">Алма-</tspan><tspan x="0" y="12">Атинская</tspan></text><text transform="translate(607.33 908.936)" data-line-id="2" data-st-id="44" class="label">Коломенская</text><text transform="translate(607.33 979.611)" data-line-id="2" data-st-id="38" class="label">Кантемировская</text><text transform="translate(607.33 1013.703)" data-line-id="2" data-st-id="133" class="label">Царицыно</text><text transform="translate(607.33 1083.804)" data-line-id="2" data-st-id="33" class="label">Домодедовская</text><text transform="translate(607.33 944.084)" data-line-id="2" data-line-rel="11" data-st-id="40" class="label">Каширская</text><text transform="translate(682.154 1142.804)" data-line-id="2" data-st-id="47" data-st-rel="217" class="label">Красногвардейская</text><text transform="translate(607.33 873.98)" data-line-id="2" data-st-id="2152" class="label">Технопарк</text><text transform="translate(932.44 381.178)" data-line-id="8" data-st-id="71" class="label">Новогиреево</text><text transform="translate(933.44 400.465)" data-line-id="8" data-st-id="84" class="label">Перово</text><text transform="translate(933.439 360.707)" data-line-id="8" data-st-id="2133" class="label">Новокосино</text><text transform="translate(504.868 973.903)" data-line-id="11" data-st-id="22" class="label">Варшавская</text><text transform="translate(335.954 801.72)" data-line-id="14" data-st-id="2166" data-st-rel="59" class="label label-small">Пл. Гагарина</text><text transform="translate(677.237 498.031)" data-line-id="6" data-line-rel="7" data-st-id="42" class="label"><tspan x="0" y="0">Китай- </tspan><tspan x="0" y="11">город</tspan></text><text transform="translate(429.901 337.031)" data-line-id="9" data-st-id="134" data-st-rel="1006" class="label"><tspan x="0" y="0">Цветной </tspan><tspan x="2.3" y="12">бульвар</tspan></text><text transform="translate(506.57 317.614)" data-line-id="10" data-st-id="1006" data-st-rel="134" class="label">Трубная</text><text transform="translate(398.57 374.947)" data-line-id="2" data-st-id="64" class="label">Маяковская</text><text transform="translate(574.82 442.364)" data-line-id="7" data-st-id="54" data-st-rel="60" class="label">Кузнецкий Мост</text><text transform="translate(630.57 377.364)" data-line-id="6" data-st-id="124" data-st-rel="138,1007" class="label">Тургеневская</text><text transform="translate(292.404 455.447)" data-line-id="5" data-st-id="48" data-st-rel="10" class="label">Краснопресненская</text><text transform="translate(303.07 414.114)" data-line-id="7" data-st-id="10" data-st-rel="48" class="label">Баррикадная</text><text transform="translate(385.07 414.114)" data-line-id="7" data-st-id="99" data-st-rel="137,117" class="label">Пушкинская</text><text transform="translate(439.57 456.281)" data-line-id="2" data-st-id="117" data-st-rel="99,137" class="label">Тверская</text><text transform="translate(365.07 442.114)" data-line-id="9" data-st-id="137" data-st-rel="99,117" class="label">Чеховская</text><text transform="translate(540.57 405.364)" data-line-id="1" data-st-id="60" data-st-rel="54" class="label">Лубянка</text><text transform="translate(567.095 554.668)" data-line-id="6" data-line-rel="8" data-st-id="122" data-st-rel="72" class="label">Третьяковская</text><text transform="translate(515 377.364)" data-line-id="1" data-st-id="138" data-st-rel="124,1007" class="label">Чистые пруды</text><text transform="translate(554.57 347.947)" data-line-id="10" data-st-id="1007" data-st-rel="124,138" class="label">Сретенский бульвар</text><text transform="translate(639.637 411.716)" data-line-id="10" data-st-id="139" data-st-rel="57" class="label">Чкаловская</text><text transform="translate(659.762 543.716)" data-line-id="7" data-line-rel="5" data-st-id="116" data-st-rel="62" class="label">Таганская</text><text transform="translate(730.262 557.716)" data-line-id="8" data-st-id="62" data-st-rel="116" class="label">Марксистская</text><text transform="translate(796.762 631.966)" data-line-id="7" data-st-id="95" data-st-rel="51" class="label">Пролетарская</text><text transform="translate(684.57 313.614)" data-line-id="1" data-line-rel="5" data-st-id="45" class="label">Комсомольская</text><text transform="translate(704.57 293.614)" data-line-id="1" data-st-id="49" class="label">Красносельская</text><path class="st24" d="M663 325.8h90v12h-90z"></path><text transform="translate(664.57 334.614)" data-line-id="1" data-st-id="50" class="label">Красные Ворота</text><text transform="translate(725.07 274.114)" data-line-id="1" data-st-id="111" class="label">Сокольники</text><text transform="translate(757.57 239.614)" data-line-id="1" data-st-id="94" class="label"><tspan x="0" y="0">Преображенская </tspan><tspan x="0" y="14">площадь</tspan></text><text transform="translate(297.1 605.249)" data-line-id="1" data-line-rel="5" data-st-id="82" class="label"><tspan x="0" y="0">Парк </tspan><tspan x="-23.7" y="11">культуры</tspan></text><text transform="translate(591.446 249.364)" data-line-id="6" data-line-rel="5" data-st-id="97" class="label">Проспект Мира</text><text transform="translate(51.147 480.248)" data-line-id="4" data-st-id="1004" data-st-rel="2163" class="label">Международная</text><text transform="translate(437.57 271.958)" data-line-id="9" data-st-id="66" data-st-rel="73" class="label">Менделеевская</text><text transform="translate(437.57 257.284)" data-line-id="5" data-st-id="73" data-st-rel="66" class="label">Новослободская</text><text transform="translate(461.759 122.708)" data-line-id="9" data-line-rel="10" data-st-id="85" class="label">Петровско-Разумовская</text><text transform="translate(324.954 863.72)" data-line-id="6" data-st-id="3" class="label">Академическая</text><text transform="translate(741.57 411.717)" data-line-id="3" data-line-rel="5" data-st-id="57" data-st-rel="139" class="label">Курская</text><text transform="translate(674.57 185.947)" data-line-id="1" data-st-id="135" data-st-rel="2177" class="label">Черкизовская</text><text transform="translate(771.57 148.614)" data-line-id="1" data-line-rel="14" data-st-id="127" class="label"><tspan x="0" y="0">Бульвар </tspan><tspan x="0" y="12">Рокоссовского</tspan></text><text transform="translate(787.57 185.614)" data-line-id="14" data-st-id="2177" data-st-rel="135" class="label label-small">Локомотив</text><text transform="translate(829.686 650.29)" data-line-id="7" data-st-id="26" class="label"><tspan x="0" y="0">Волгоградский </tspan><tspan x="0" y="12">проспект</tspan></text><text transform="translate(890.553 462.196)" data-line-id="8" data-line-rel="14" data-st-id="141" class="label"><tspan x="0" y="0">Шоссе </tspan><tspan x="0" y="12">Энтузиастов</tspan></text><text transform="translate(804.5 481.514)" data-line-id="8" data-line-rel="15" data-st-id="1" class="label">Авиамоторная</text><text transform="translate(823.147 588.906)" data-line-id="14" data-st-id="2172" class="label label-small">Новохохловская</text><text transform="translate(810.454 723.22)" data-line-id="14" data-st-id="2171" class="label label-small">Угрешская</text><text transform="translate(903.53 522.749)" data-line-id="15" data-line-rel="14" data-st-id="2173" class="label">Нижегородская</text><text transform="translate(902.313 498.775)" data-line-id="14" data-st-id="2174" class="label label-small">Андроновка</text><text transform="translate(866.454 294.97)" data-line-id="14" data-st-id="2176" class="label label-small">Измайлово</text><text transform="translate(806.558 390.887)" data-line-id="14" data-st-id="2181" class="label label-small">Соколиная Гора</text><text transform="translate(473.828 825.679)" data-line-id="14" data-st-id="2168" class="label label-small"><tspan x="0" y="0">Верхние </tspan><tspan x="0" y="10">Котлы</tspan></text><text transform="translate(393.901 820.554)" data-line-id="14" data-st-id="2167" class="label label-small">Крымская</text><text transform="translate(539.954 836.555)" data-line-id="14" data-st-id="2169" class="label label-small">ЗИЛ</text><text transform="translate(607.33 821.19)" data-line-id="2" data-line-rel="14" data-st-id="2" class="label">Автозаводская</text><text transform="translate(744.82 746.176)" data-line-id="10" data-line-rel="14" data-st-id="34" class="label">Дубровка</text><text transform="translate(21.863 335.197)" data-line-id="3" data-line-rel="11,4" data-st-id="56" class="label">Кунцевская</text><text transform="translate(17.863 313.864)" data-line-id="3" data-st-id="67" class="label">Молодёжная</text><text transform="translate(17.863 288.364)" data-line-id="3" data-st-id="53" class="label">Крылатское</text><text transform="translate(17.863 262.864)" data-line-id="3" data-st-id="214" class="label">Строгино</text><text transform="translate(17.863 213.03)" data-line-id="3" data-st-id="1003" class="label">Волоколамская</text><text transform="translate(17.863 188.364)" data-line-id="3" data-st-id="1001" class="label">Митино</text><text transform="translate(17.863 149.364)" data-line-id="3" data-st-id="2136" class="label"><tspan x="0" y="0">Пятницкое </tspan><tspan x="0" y="12">шоссе</tspan></text><text transform="translate(17.863 238.03)" data-line-id="3" data-st-id="1002" class="label">Мякинино</text><text transform="translate(36.53 410.865)" data-line-id="4" data-st-id="87" class="label">Пионерская</text><text transform="translate(36.53 446.865)" data-line-id="4" data-st-id="130" class="label"><tspan x="0" y="0">Филёвский </tspan><tspan x="0" y="12">парк</tspan></text><text transform="translate(36.53 555.864)" data-line-id="4" data-st-id="9" class="label">Багратионовская</text><text transform="translate(36.53 587.864)" data-line-id="4" data-st-id="131" class="label">Фили</text><text transform="translate(73.397 608.082)" data-line-id="4" data-line-rel="14" data-st-id="58" class="label">Кутузовская</text><text transform="translate(199.223 458.416)" data-line-id="11" data-st-id="2146" data-st-rel="152" class="label"><tspan x="0" y="0" class="st48 st49 st50">Деловой</tspan><tspan x="0" y="12" class="st48 st49 st50">центр</tspan></text><text transform="translate(173.175 160.864)" data-line-id="7" data-st-id="143" class="label">Щукинская</text><text transform="translate(173.175 136.364)" data-line-id="7" data-st-id="2147" class="label">Спартак</text><text transform="translate(173.175 111.03)" data-line-id="7" data-st-id="125" class="label">Тушинская</text><text transform="translate(173.175 85.964)" data-line-id="7" data-st-id="115" class="label">Сходненская</text><text transform="translate(173.175 61.364)" data-line-id="7" data-st-id="88" class="label">Планерная</text><text transform="translate(372.897 524.582)" data-line-id="3" data-line-rel="4" data-st-id="6" data-st-rel="4,18,16" class="label">Арбатская</text><text transform="translate(457.897 550.582)" data-line-id="9" data-st-id="18" data-st-rel="16,4,6" class="label">Боровицкая</text><text transform="translate(489.987 503.197)" data-line-id="3" data-st-id="90" data-st-rel="79,118" class="label">Пл. Революции</text><text transform="translate(358.089 492.149)" data-line-id="4" data-st-id="4" data-st-rel="16,18,6" class="label"><tspan x="0" y="0">Александровский </tspan><tspan x="77.4" y="11">сад</tspan></text><text transform="translate(461.397 531.082)" data-line-id="1" data-st-id="16" data-st-rel="4,18,6" class="label">Библиотека им. Ленина</text><text transform="translate(352.397 600.082)" data-line-id="1" data-st-id="52" class="label">Кропоткинская</text><text transform="translate(529.904 465.281)" data-line-id="2" data-st-id="118" data-st-rel="79,90" class="label">Театральная</text><text transform="translate(494.248 448.947)" data-line-id="1" data-st-id="79" data-st-rel="118,90" class="label">Охотный Ряд</text><text transform="translate(329.147 551.832)" data-line-id="3" data-line-rel="4" data-st-id="109" class="label">Смоленская</text><text transform="translate(460.092 637.864)" data-line-id="9" data-st-id="92" class="label">Полянка</text><text transform="translate(339.897 676.915)" data-line-id="6" data-line-rel="5" data-st-id="75" class="label">Октябрьская</text><text transform="translate(469.23 672.249)" data-line-id="5" data-st-id="32" data-st-rel="108" class="label">Добрынинская</text><text transform="translate(460.564 703.582)" data-line-id="9" data-st-id="108" data-st-rel="32" class="label">Серпуховская</text><text transform="translate(607.23 679.749)" data-line-id="2" data-line-rel="5" data-st-id="80" class="label">Павелецкая</text><text transform="translate(578.53 304.864)" data-line-id="6" data-st-id="114" class="label">Сухаревская</text><text transform="translate(621.946 224.28)" data-line-id="6" data-st-id="101" class="label">Рижская</text><text transform="translate(634.53 134.864)" data-line-id="6" data-st-id="21" class="label">ВДНХ</text><text transform="translate(634.53 165.28)" data-line-id="6" data-st-id="151" class="label">Алексеевская</text><text transform="translate(409.025 229.53)" data-line-id="9" data-line-rel="11" data-st-id="104" class="label">Савёловская</text><text transform="translate(408.426 204.53)" data-line-id="9" data-st-id="31" class="label">Дмитровская</text><text transform="translate(519.759 231.797)" data-line-id="10" data-st-id="2001" class="label">Достоевская</text><text transform="translate(519.759 206.917)" data-line-id="10" data-st-id="2002" class="label">Марьина Роща</text><text transform="translate(519.759 182.53)" data-line-id="10" data-st-id="2155" class="label">Бутырская</text><text transform="translate(408.426 179.53)" data-line-id="9" data-st-id="121" class="label">Тимирязевская</text><text transform="translate(496.758 149.906)" data-line-id="10" data-st-id="2154" class="label">Фонвизинская</text><text transform="translate(500.705 94.02)" data-line-id="9" data-line-rel="14" data-st-id="23" class="label">Владыкино</text><text transform="translate(503.893 58.192)" data-line-id="9" data-st-id="78" class="label">Отрадное</text><text transform="translate(503.893 33.592)" data-line-id="9" data-st-id="15" class="label">Бибирево</text><text transform="translate(503.893 10.592)" data-line-id="9" data-st-id="5" class="label">Алтуфьево</text><text transform="translate(293.205 106.958)" data-line-id="14" data-st-id="2158" class="label label-small">Лихоборы</text><text transform="translate(267.205 127.958)" data-line-id="14" data-st-id="2182" class="label label-small">Коптево</text><text transform="translate(186.913 178.583)" data-line-id="14" data-st-id="2159" class="label label-small">Балтийская</text><text transform="translate(166.705 202.625)" data-line-id="14" data-st-id="2160" class="label label-small">Стрешнево</text><text transform="translate(126.205 234.375)" data-line-id="14" data-st-id="2183" class="label label-small">Панфиловская</text><text transform="translate(219.113 339.171)" data-line-id="7" data-st-id="91" data-st-rel="2193" class="label">Полежаевская</text><text transform="translate(256.571 367.672)" data-line-id="7" data-st-id="12" class="label">Беговая</text><text transform="translate(283.571 398.672)" data-line-id="7" data-st-id="126" class="label">Ул 1905 года</text><text transform="translate(173.613 257.296)" data-line-id="7" data-st-id="76" class="label">Октябрьское Поле</text><text transform="translate(129.02 294.875)" data-line-id="14" data-st-id="2184" class="label label-small">Зорге</text><text transform="translate(98.112 323.874)" data-line-id="14" data-st-id="2161" class="label label-small">Хорошёво</text><text transform="translate(60.204 430.125)" data-line-id="11" data-line-rel="14" data-st-id="2162" class="label">Шелепиха</text><text transform="translate(197.946 579.281)" data-line-id="4" data-st-id="113" class="label">Студенческая</text><text transform="translate(234.383 694.593)" data-line-id="1" data-st-id="112" class="label">Спортивная</text><text transform="translate(277.717 650.26)" data-line-id="1" data-st-id="132" class="label">Фрунзенская</text><text transform="translate(239.204 723.292)" data-line-id="14" data-st-id="2165" class="label label-small">Лужники</text><text transform="translate(173.518 786.025)" data-line-id="1" data-st-id="28" class="label">Воробьёвы горы</text><text transform="translate(365.78 722.781)" data-line-id="6" data-st-id="140" class="label">Шаболовская</text><text transform="translate(269.29 84.02)" data-line-id="2" data-st-id="24" class="label">Водный стадион</text><text transform="translate(269.29 59.493)" data-line-id="2" data-st-id="100" class="label">Речной вокзал</text><text transform="translate(269.29 34.593)" data-line-id="2" data-st-id="2207" class="label">Беломорская</text><text transform="translate(634.53 10.592)" data-line-id="6" data-st-id="65" class="label">Медведково</text><text transform="translate(634.53 35.47)" data-line-id="6" data-st-id="8" class="label">Бабушкинская</text><text transform="translate(634.53 59.993)" data-line-id="6" data-st-id="105" class="label">Свиблово</text><text transform="translate(634.53 84.48)" data-line-id="6" data-line-rel="14" data-st-id="19" class="label">Ботанический сад</text><text transform="translate(786.862 366.865)" data-line-id="3" data-st-id="11" class="label">Бауманская</text><text transform="translate(807.862 346.365)" data-line-id="3" data-st-id="144" class="label">Электрозаводская</text><text transform="translate(841.463 313.864)" data-line-id="3" data-st-id="107" class="label">Семёновская</text><text transform="translate(887.862 228.03)" data-line-id="3" data-st-id="35" class="label">Измайловская</text><text transform="translate(887.862 202.565)" data-line-id="3" data-st-id="83" class="label">Первомайская</text><text transform="translate(887.862 178.364)" data-line-id="3" data-st-id="142" class="label">Щёлковская</text><text transform="translate(887.862 252.532)" data-line-id="3" data-st-id="36" class="label">Партизанская</text><text transform="translate(750.23 508.249)" data-line-id="10" data-st-id="102" data-st-rel="89" class="label">Римская</text><text transform="translate(821.73 522.749)" data-line-id="8" data-st-id="89" data-st-rel="102" class="label"><tspan x="0" y="0">Площадь </tspan><tspan x="0" y="12">Ильича</tspan></text><text transform="translate(926.021 850.358)" data-line-id="7" data-st-id="2142" class="label"><tspan x="0" y="0">Лермонтовский </tspan><tspan x="0" y="12">проспект</tspan></text><text transform="translate(926.021 783.864)" data-line-id="7" data-st-id="103" class="label"><tspan x="0" y="0">Рязанский </tspan><tspan x="0" y="12">проспект</tspan></text><text transform="translate(886.054 714.067)" data-line-id="7" data-st-id="55" class="label">Кузьминки</text><text transform="translate(850.666 929.301)" data-line-id="7" data-st-id="2143" class="label">Жулебино</text><text transform="translate(840.799 963.578)" data-line-id="7" data-st-id="2151" class="label">Котельники</text><text transform="translate(676.946 105.364)" data-line-id="14" data-st-id="2180" class="label label-small">Ростокино</text><path class="st24" d="M676 118h66v12h-74z"></path><text transform="translate(678 126.8)" data-line-id="14" data-st-id="2179" class="label label-small">Белокаменная</text><text transform="translate(67.647 738.582)" data-line-id="8" data-st-id="2186" class="label"><tspan x="0" y="0">Ломоносовский </tspan><tspan x="0" y="14">проспект</tspan></text><text transform="translate(95.647 699.582)" data-line-id="8" data-st-id="2185" class="label">Минская</text><text transform="translate(269.29 9.593)" data-line-id="2" data-st-id="2188" class="label">Ховрино</text><text transform="translate(202.004 299.339)" data-line-id="11" data-st-id="2194" class="label">ЦСКА</text><path class="st24" d="M169 358h74v12h-74z"></path><text transform="translate(170.78 366.755)" data-line-id="11" data-st-id="2193" data-st-rel="91" class="label">Хорошёвская</text><text transform="translate(66.453 382.82)" data-line-id="11" data-st-id="2223" class="label"><tspan x="0" y="0" class="st48 st49 st50">Народное</tspan> <tspan x="0" y="12" class="st48 st49 st50">Ополчение</tspan></text><path class="st24" d="M128.687 334.826h25.017v12.125h-25.017z"></path><text transform="translate(90.78 343.255)" data-line-id="11" data-st-id="2224" class="label">Мнёвники</text><text transform="translate(48.795 366.551)" data-line-id="11" data-st-id="2225" class="label">Терехово</text><path d="M72.073 358.438v-9h5v8.999l-5 .001z" data-line-id="11" data-st-id="2225" class="st40"></path><path d="M18.248 666.466h8.9v5h-8.9v-5z" data-line-id="11" data-st-id="2226" class="st40"></path><path class="st24" d="M35.344 666.082h60.303v15.476H35.344zM35.344 704.199h60.303v15.476H35.344zM34.385 788.966H84.1v26.938H34.385zM173.518 830.982h52.39v13.086h-52.39zM323.675 920.287H381.7v13.086h-58.025zM323.675 937.275H381.7v13.086h-58.025zM437.501 963.814h58.025V976.9h-58.025zM31.424 613.869h60.303v26.938H31.424z"></path><text transform="translate(173.518 839.654)" data-line-id="1" data-line-rel="11" data-st-id="96" class="label">Проспект Вернадского</text><text transform="translate(31.219 676.818)" data-line-id="11" data-st-id="2226" class="label">Давыдково</text><path d="M18.248 709.652h8.9v5h-8.9v-5z" data-line-id="11" data-st-id="2227" class="st40"></path><text transform="translate(31.219 714.867)" data-line-id="11" data-st-id="2227" class="label">Аминьевская</text><path d="M10.05 815.904a8.5 8.5 0 1 0 0-17 8.5 8.5 0 0 0 0 17z" data-line-id="8" data-st-id="2205" class="st26"></path><path d="M19.15 806.804a8.5 8.5 0 1 0 0-17 8.5 8.5 0 0 0 0 17z" data-line-id="11" data-st-id="2205" class="st40"></path><path d="M4.05 813.404c3.3 3.3 8.7 3.3 12 0 2.8-2.8 3.2-7.1 1.3-10.4l-2.6 2.6c.7 1.8.3 3.9-1.1 5.4-2 2-5.1 2-7.1 0" data-line-id="8" data-st-id="2205" class="st26"></path><path d="M169.703 847.245a8.501 8.501 0 1 0-12.024-12.021 8.501 8.501 0 0 0 12.024 12.021z" data-line-id="1" data-st-id="96" class="st10"></path><path d="M169.703 834.376a8.501 8.501 0 1 0-12.024-12.021 8.501 8.501 0 0 0 12.024 12.021z" data-line-id="11" data-st-id="96" class="st40"></path><path d="M167.228 844.77a5.001 5.001 0 1 0-7.074-7.071 5.001 5.001 0 0 0 7.074 7.071zM167.228 831.901a5.001 5.001 0 1 0-7.074-7.071 5.001 5.001 0 0 0 7.074 7.071z" data-line-id="1" data-st-id="96" class="st28"></path><path d="M165.743 836.638h-3.96v-3.676h3.96v3.676z" data-line-id="1" data-st-id="96" class="st28"></path><path d="M163.692 849.72c4.667 0 8.485-3.818 8.485-8.485 0-3.96-2.757-7.284-6.434-8.273v3.676c1.767.778 2.97 2.546 3.04 4.597 0 2.828-2.192 5.02-5.02 5.02" data-line-id="1" data-st-id="96" class="st10"></path><path d="M260.21 900.514l4.482-7.102 4.358 2.531-4.482 7.102-4.358-2.531z" data-line-id="11" data-st-id="2228" class="st40"></path><path class="st24" d="M239 906h66v12h-66z"></path><text transform="translate(239.033 915.781)" data-line-id="11" data-st-id="2228" class="label"><tspan x="0" y="0" class="st48 st49 st50">Новаторская</tspan></text><path d="M320.065 945.66a8.501 8.501 0 0 0-12.021-12.021 8.501 8.501 0 0 0 12.021 12.021z" data-line-id="6" data-st-id="37" data-st-rel="2229" class="st11"></path><path d="M320.065 932.79a8.501 8.501 0 1 0-12.021-12.018 8.501 8.501 0 0 0 12.021 12.018z" data-line-id="11" data-st-id="2229" data-st-rel="37" class="st40"></path><path d="M317.59 943.185a5 5 0 0 0 0-7.071 5 5 0 0 0-7.071 0 5 5 0 1 0 7.071 7.071z" data-line-id="6" data-st-id="37" data-st-rel="2229" class="st28"></path><path d="M317.59 930.315a5 5 0 1 0-7.071-7.071 5 5 0 0 0 0 7.071 5 5 0 0 0 7.071 0z" data-line-id="11" data-st-id="2229" data-st-rel="37" class="st28"></path><path d="M316.105 935.053h-3.959v-3.677h3.959v3.677z" data-line-id="11" data-st-id="2229" data-st-rel="37" class="st28"></path><path d="M314.055 948.134c4.666 0 8.485-3.818 8.485-8.485 0-3.96-2.758-7.283-6.435-8.273v3.677c1.768.778 2.97 2.546 3.041 4.596 0 2.829-2.192 5.021-5.021 5.021" data-line-id="6" data-st-id="37" data-st-rel="2229" class="st11"></path><text transform="translate(323.675 947.6)" data-line-id="6" data-st-id="37" data-st-rel="2229" class="label">Калужская</text><text transform="translate(325.023 931.998)" data-line-id="11" data-st-id="2229" data-st-rel="37" class="label">Воронцовская</text><path d="M401.179 957.527l1.915-8.176 4.946.968-1.916 8.177-4.945-.969z" data-line-id="11" data-st-id="2230" class="st40"></path><text transform="translate(386.709 970.384)" data-line-id="11" data-st-id="2230" class="label">Зюзино</text><text transform="translate(435.8 974.4)" data-line-id="11" data-st-id="39" data-st-rel="106" class="label">Каховская</text><text transform="translate(270.946 301.921)" data-line-id="11" data-st-id="2195" data-st-rel="30" class="label"><tspan x="0" y="0" class="st48 st49 st50">Петровский</tspan> <tspan x="0" y="12" class="st48 st49 st50">парк</tspan></text><text transform="translate(31.207 624.211)" data-line-id="3" data-st-id="1005" class="label"><tspan x="0" y="0">Славянский </tspan> <tspan x="0" y="12">бульвар</tspan></text><text transform="translate(404.56 39.526)" data-line-id="10" data-st-id="2190" class="label"><tspan x="0" y="0" class="st48 st49 st50">Верхние</tspan> <tspan x="0" y="12" class="st48 st49 st50">Лихоборы</tspan></text><text transform="translate(404.56 10.592)" data-line-id="10" data-st-id="2191" class="label">Селигерская</text><path class="st20" d="M349.4 97.7h44.4v12h-44.4z"></path><text transform="translate(360.56 107.526)" data-line-id="10" data-line-rel="14" data-st-id="2157" class="label">Окружная</text><text transform="translate(78 516)" data-line-id="14" data-st-id="2163" data-st-rel="1004" class="label label-small"><tspan x="0" y="0">Деловой</tspan> <tspan x="-18" y="10">Центр (МЦК)</tspan></text><path transform="rotate(-45.001 25.783 764.28)" data-line-id="8" data-st-id="2187" class="st26" d="M23.3 759.8h5v8.9h-5z"></path><path d="M10.05 812.404a5 5 0 1 0 0-10 5 5 0 0 0 0 10zM19.15 803.304a5 5 0 1 0 0-10 5 5 0 0 0 0 10z" data-line-id="11" data-st-id="2205" class="st28"></path><path d="M14.75 805.604l-2.8-2.8 2.6-2.6 2.8 2.8-2.6 2.6z" data-line-id="11" data-st-id="2205" class="st28"></path><path class="st26" data-line-id="8" data-st-id="2199" d="M6.2 822.2h8.4v5H6.2z"></path><path class="st26" data-line-id="8" data-st-id="2200" d="M6.2 848h8.4v5H6.2z"></path><path class="st26" data-line-id="8" data-st-id="2201" d="M6.2 872.2h8.4v5H6.2z"></path><path class="st26" data-line-id="8" data-st-id="2202" d="M6.2 897h8.4v5H6.2z"></path><path class="st26" data-line-id="8" data-st-id="2203" d="M6.2 922.8h8.4v5H6.2z"></path><path class="st26" data-line-id="8" data-st-id="2204" d="M2.2 949.3h13v5h-13z"></path><text transform="translate(30.08 777.314)" class="label" data-line-id="8" data-st-id="2187">Раменки</text><text transform="translate(34.475 799.643)" class="label" data-line-id="11" data-line-rel="8" data-st-id="2205"><tspan x="0" y="0">Мичуринский </tspan><tspan x="0" y="12">проспект</tspan></text><text transform="translate(18.475 828.831)" class="label" data-line-id="8" data-st-id="2199">Озёрная</text><text transform="translate(18.475 854.008)" class="label" data-line-id="8" data-st-id="2200">Говорово</text><text transform="translate(18.475 878.532)" class="label" data-line-id="8" data-st-id="2201">Солнцево</text><text transform="translate(18.475 903.019)" class="label" data-line-id="8" data-st-id="2202">Боровское шоссе</text><text transform="translate(18.475 928.506)" class="label" data-line-id="8" data-st-id="2203">Новопеределкино</text><text transform="translate(18.475 954.995)" class="label" data-line-id="8" data-st-id="2204">Рассказовка</text><circle class="st31" cx="891.3" cy="518.8" r="8.5" data-line-id="14" data-st-id="2173"></circle><circle class="st41" cx="882.5" cy="509.6" r="8.5" data-line-id="15" data-st-id="2173"></circle><circle class="st28" cx="891.3" cy="518.8" r="5" data-line-id="15" data-st-id="2173"></circle><circle class="st28" cx="882.5" cy="509.6" r="5" data-line-id="14" data-st-id="2173"></circle><path class="st28" d="M884.1 514.3l2.9-2.8 2.6 2.7-2.9 2.8-2.6-2.7z"></path><text transform="translate(819.679 421.638)" class="label" data-line-id="15" data-st-id="2222">Лефортово</text><path class="st41" d="M803.2 415.7h13v5h-13v-5z" data-line-id="15" data-st-id="2222"></path><text transform="translate(925.93 591.914)" class="label" data-line-id="15" data-st-id="2221">Стахановская</text><path class="st41" d="M913.1 585.9h8.7v5h-8.7v-5z" data-line-id="15" data-st-id="2221"></path><text transform="translate(925.93 663.467)" class="label" data-line-id="15" data-st-id="2220">Окская</text><path class="st41" d="M913.1 657.5h8.7v5h-8.7v-5z" data-line-id="15" data-st-id="2220"></path><text transform="translate(787.582 783.864)" class="label" data-line-id="15" data-st-id="2219">Юго-Восточная</text><path class="st41" d="M875.4 778h8.7v5h-8.7v-5z" data-line-id="15" data-st-id="2219"></path><circle class="st2" cx="915.7" cy="870.6" r="8.5" data-line-id="7" data-st-id="2142" data-st-rel="2211"></circle><circle class="st41" cx="924.8" cy="879.7" r="8.5" data-line-id="15" data-st-id="2211" data-st-rel="2142"></circle><circle class="st28" cx="924.8" cy="879.7" r="5" data-line-id="15" data-st-id="2211" data-st-rel="2142"></circle><path class="st28" d="M917.6 875.3l2.8-2.8 2.6 2.6-2.8 2.8-2.6-2.6z"></path><circle class="st28" cx="915.7" cy="870.6" r="5" data-line-id="7" data-st-id="2142" data-st-rel="2211"></circle><path class="st24 st28" d="M926.1 891.1h33.4v13h-33.4v-13z"></path><text transform="translate(926.163 900.862)" class="label" data-line-id="15" data-st-id="2211" data-st-rel="2142">Косино</text><path d="M987.7 993.5h8.7v5h-8.7v-5z" data-line-id="15" data-st-id="2210" class="st41"></path><text transform="translate(950.503 992.27)" data-line-id="15" data-st-id="2210" class="label"><tspan x="0" y="0">Улица</tspan> <tspan x="-50.3" y="13.2">Дмитриевского</tspan></text><path class="st41" d="M987.7 1029.3h8.7v5h-8.7v-5z" data-line-id="15" data-st-id="2209"></path><text transform="translate(906.912 1035.212)" class="label" data-line-id="15" data-st-id="2209">Лухмановская</text><text transform="translate(920.55 1070.285)" class="label" data-line-id="15" data-st-id="2208">Некрасовка</text><path class="st41" d="M987.7 1064.3h13.1v5h-13.1v-5z" data-line-id="15" data-st-id="2208"></path></g></svg>
@endsection
