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
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" baseProfile="basic" id="map" x="0px" y="0px" width="1600" height="2000" viewBox="0 0 1600 2000" xml:space="preserve">
<rect id="lineD2_23-lineD2_24" x="1183.2" y="1327" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -582.7362 1251.1703)" fill="#FFFFFF" stroke="#E94282" stroke-width="1.5" stroke-miterlimit="9.9999" width="71.5" height="4"/>
        <rect id="lineD2_22-lineD2_23" x="1244.9" y="1270.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -525.8644 1274.7412)" fill="#FFFFFF" stroke="#E94282" stroke-width="1.5" stroke-miterlimit="9.9999" width="61.9" height="4"/>
        <path id="line11_16-line11_17" fill="#89CDCF" d="M681.1,1471.5c-23.3-5.3-46.2-11.8-68.6-19.4c-0.5,1.8-1,3.6-1.6,5.4  c22.5,7.6,45.6,14.1,69,19.4C680.3,1475.1,680.7,1473.3,681.1,1471.5z"/>
        <path id="line11_14-line11_15" fill="#89CDCF" d="M503,1404.6c-17.6-9.4-34.8-19.6-51.5-30.4l-3,4.8c16.8,10.9,34.2,21.1,51.9,30.6  C501.2,1407.9,502.1,1406.3,503,1404.6z"/>
        <path id="line11_12-line11_13" fill="#89CDCF" d="M257,1189.5c-1.6,1.1-3.1,2.2-4.7,3.3c24.8,34.3,52.5,66.3,82.8,95.8  c1.3-1.4,2.5-2.8,3.8-4.3C308.9,1255.1,281.5,1223.4,257,1189.5z"/>
        <path id="line11_10-line11_11" fill="#89CDCF" d="M125.8,857.5c-0.2-2.2-0.5-4.3-0.7-6.5c-0.3-2.7,0.7-5.4,2.6-7.3l21.5-21.5  c-1.3-1.3-2.5-2.7-3.8-4L123.7,840c-3.1,3.1-4.7,7.5-4.2,11.9c0,0,0,0,0,0.1l0,0c0.2,2.2,0.5,4.3,0.7,6.5l0,0  c11.2,90.1,39.2,175.3,80.7,252.3c1.7-0.9,3.4-1.8,5-2.7C164.7,1031.6,136.9,947,125.8,857.5z"/>
        <text transform="matrix(1 0 0 1 303 777)" font-family="'MoscowSans-Regular'" font-size="12px">             </text>
        <text transform="matrix(1 0 0 1 335 777)" font-family="'MoscowSans-Regular'" font-size="12px">             </text>
        <text transform="matrix(1 0 0 1 339 785)" font-family="'MoscowSans-Regular'" font-size="12px">         </text>
        <g>
            <path fill="#89CDCF" d="M975.8,1382v-5.6h0.8v2.3h0.8l1.7-2.3h1l-2,2.6l2.3,3h-1.1l-1.9-2.5h-0.8v2.5H975.8z"/>
            <path fill="#89CDCF" d="M981,1382.1c-0.1,0-0.2,0-0.2,0c-0.1,0-0.1,0-0.1,0v-0.7c0,0,0,0,0.1,0h0.1c0.2,0,0.3-0.1,0.4-0.3   c0.1-0.2,0.1-0.5,0.2-0.9c0-0.3,0-0.5,0.1-0.8s0-0.5,0-0.7s0-0.4,0-0.7h2.7v4h-0.8v-3.3h-1.2c0,0.2,0,0.4,0,0.7   c0,0.3,0,0.5-0.1,0.8c0,0.6-0.2,1.1-0.3,1.4C981.7,1381.9,981.4,1382.1,981,1382.1z"/>
            <path fill="#89CDCF" d="M987.2,1382.1c-0.5,0-1-0.2-1.4-0.6s-0.6-0.9-0.6-1.5s0.2-1.1,0.6-1.5c0.4-0.4,0.8-0.6,1.3-0.6   s1,0.2,1.3,0.5c0.4,0.4,0.6,0.9,0.6,1.7v0.1h-3c0,0.4,0.2,0.6,0.4,0.8c0.2,0.2,0.5,0.3,0.8,0.3c0.2,0,0.3,0,0.5-0.1   s0.3-0.2,0.5-0.3l0.5,0.5c-0.2,0.2-0.4,0.3-0.7,0.4C987.8,1382,987.5,1382.1,987.2,1382.1z M986,1379.7h2.1c0-0.3-0.1-0.5-0.3-0.7   s-0.4-0.3-0.7-0.3s-0.6,0.1-0.8,0.3C986.1,1379.2,986,1379.4,986,1379.7z"/>
            <path fill="#89CDCF" d="M989.9,1382v-4h0.8v1.6h1.7v-1.6h0.8v4h-0.8v-1.7h-1.7v1.7H989.9z"/>
            <path fill="#89CDCF" d="M996.1,1382.1c-0.5,0-1-0.2-1.4-0.6s-0.6-0.9-0.6-1.5s0.2-1.1,0.6-1.5c0.4-0.4,0.8-0.6,1.4-0.6   s1,0.2,1.4,0.6s0.6,0.9,0.6,1.5s-0.2,1.1-0.6,1.5C997.1,1381.9,996.7,1382.1,996.1,1382.1z M996.1,1381.4c0.3,0,0.6-0.1,0.8-0.4   s0.3-0.6,0.3-1s-0.1-0.7-0.3-1s-0.5-0.4-0.8-0.4s-0.6,0.1-0.8,0.4s-0.3,0.6-0.3,1s0.1,0.7,0.3,1S995.8,1381.4,996.1,1381.4z"/>
            <path fill="#89CDCF" d="M1000.7,1382H999v-4h1.7c0.4,0,0.7,0.1,0.9,0.3s0.3,0.4,0.3,0.7c0,0.2,0,0.3-0.1,0.5s-0.2,0.3-0.4,0.3l0,0   c0.2,0.1,0.4,0.2,0.5,0.4c0.1,0.2,0.2,0.4,0.2,0.6c0,0.4-0.1,0.6-0.4,0.9S1001.1,1382,1000.7,1382z M999.8,1379.6h0.7   c0.1,0,0.3,0,0.4-0.1c0.1-0.1,0.2-0.2,0.2-0.4s-0.1-0.3-0.2-0.4c-0.1-0.1-0.2-0.1-0.4-0.1h-0.7V1379.6z M999.8,1381.4h0.7   c0.2,0,0.4,0,0.5-0.1s0.2-0.2,0.2-0.4s-0.1-0.3-0.2-0.4s-0.3-0.1-0.5-0.1h-0.7V1381.4z"/>
            <path fill="#89CDCF" d="M1003.1,1382v-4h0.8v1.3h0.7c0.4,0,0.7,0.1,1,0.4c0.3,0.2,0.4,0.6,0.4,1s-0.1,0.7-0.4,1   c-0.3,0.2-0.6,0.4-1,0.4h-1.5V1382z M1003.9,1381.4h0.6c0.2,0,0.4-0.1,0.5-0.2s0.2-0.3,0.2-0.5s-0.1-0.4-0.2-0.5   c-0.1-0.1-0.3-0.2-0.5-0.2h-0.6V1381.4z M1006.5,1382v-4h0.8v4H1006.5z"/>
            <path fill="#89CDCF" d="M1008.5,1382v-4h0.8v2.7l0,0l1.8-2.7h0.7v4h-0.8v-2.7l0,0l-1.8,2.7H1008.5z M1010.2,1377.5   c-0.3,0-0.6-0.1-0.8-0.2c-0.2-0.2-0.4-0.3-0.5-0.4l0.4-0.4c0.1,0.1,0.2,0.2,0.3,0.3c0.2,0.1,0.3,0.1,0.5,0.1s0.4,0,0.5-0.1   c0.2-0.1,0.3-0.2,0.3-0.3l0.4,0.4c-0.1,0.1-0.2,0.2-0.5,0.4C1010.8,1377.5,1010.5,1377.5,1010.2,1377.5z"/>
            <path fill="#89CDCF" d="M1016.7,1382.1c-0.6,0-1.1-0.2-1.4-0.6s-0.6-1-0.6-1.8v-0.1c0-0.4,0-0.9,0.1-1.2c0.1-0.4,0.2-0.7,0.4-1   s0.4-0.5,0.8-0.7c0.3-0.2,0.8-0.3,1.3-0.3c0.2,0,0.5,0,0.7-0.1c0.2,0,0.3-0.1,0.4-0.1v0.7c-0.1,0.1-0.2,0.1-0.4,0.1   s-0.4,0.1-0.7,0.1c-0.7,0-1.1,0.2-1.4,0.5c-0.2,0.3-0.4,0.8-0.5,1.3l0,0c0.1-0.2,0.3-0.3,0.6-0.5c0.2-0.1,0.5-0.2,0.8-0.2   c0.5,0,0.9,0.2,1.3,0.5c0.4,0.4,0.6,0.8,0.6,1.4s-0.2,1.1-0.6,1.5C1017.7,1381.9,1017.2,1382.1,1016.7,1382.1z M1016.7,1381.4   c0.3,0,0.6-0.1,0.8-0.4c0.2-0.2,0.3-0.6,0.3-1s-0.1-0.7-0.3-1c-0.2-0.2-0.5-0.4-0.8-0.4s-0.6,0.1-0.8,0.4c-0.2,0.2-0.3,0.6-0.3,1   s0.1,0.7,0.3,1C1016,1381.3,1016.3,1381.4,1016.7,1381.4z"/>
            <path fill="#89CDCF" d="M1019.7,1383.6c-0.2,0-0.3,0-0.5-0.1s-0.4-0.2-0.5-0.3l0.5-0.5c0.1,0.1,0.1,0.1,0.2,0.1   c0.1,0,0.2,0.1,0.3,0.1s0.3-0.1,0.4-0.2c0.1-0.1,0.3-0.3,0.4-0.6l-1.6-4.1h0.9l1.1,3.1l0,0l1-3.1h0.9l-1.5,4.3   c-0.1,0.4-0.3,0.6-0.6,0.9C1020.5,1383.4,1020.1,1383.6,1019.7,1383.6z"/>
            <path fill="#89CDCF" d="M1023.3,1382.1c-0.1,0-0.2,0-0.2,0h-0.1v-0.7c0,0,0,0,0.1,0h0.1c0.2,0,0.3-0.1,0.4-0.3s0.1-0.5,0.2-0.9   c0-0.3,0-0.5,0.1-0.8c0-0.3,0-0.5,0-0.7s0-0.4,0-0.7h2.7v4h-0.8v-3.3h-1.2c0,0.2,0,0.4,0,0.7c0,0.3,0,0.5-0.1,0.8   c0,0.6-0.1,1.1-0.3,1.4C1023.9,1381.9,1023.7,1382.1,1023.3,1382.1z"/>
            <path fill="#89CDCF" d="M1027.7,1382v-4h0.8v1.3h0.8c0.4,0,0.7,0.1,1,0.4c0.3,0.2,0.4,0.6,0.4,1s-0.1,0.7-0.4,1   c-0.3,0.2-0.6,0.4-1,0.4h-1.6L1027.7,1382L1027.7,1382z M1028.4,1381.4h0.7c0.2,0,0.4-0.1,0.5-0.2s0.2-0.3,0.2-0.5   s-0.1-0.4-0.2-0.5s-0.3-0.2-0.5-0.2h-0.7V1381.4z"/>
            <path fill="#89CDCF" d="M1033.2,1382h-1.6v-4h1.7c0.4,0,0.7,0.1,0.9,0.3c0.2,0.2,0.3,0.4,0.3,0.7c0,0.2,0,0.3-0.1,0.5   s-0.2,0.3-0.4,0.3l0,0c0.2,0.1,0.4,0.2,0.5,0.4c0.1,0.2,0.2,0.4,0.2,0.6c0,0.4-0.1,0.6-0.4,0.9S1033.6,1382,1033.2,1382z    M1032.3,1379.6h0.7c0.1,0,0.3,0,0.4-0.1s0.2-0.2,0.2-0.4s-0.1-0.3-0.2-0.4s-0.3-0.1-0.4-0.1h-0.7V1379.6z M1032.3,1381.4h0.7   c0.2,0,0.4,0,0.5-0.1s0.2-0.2,0.2-0.4s-0.1-0.3-0.2-0.4s-0.3-0.1-0.5-0.1h-0.7V1381.4z"/>
            <path fill="#89CDCF" d="M1036.7,1382.1c-0.4,0-0.7-0.1-1-0.4c-0.3-0.2-0.4-0.5-0.4-0.9c0-0.3,0.1-0.6,0.4-0.9s0.7-0.4,1.3-0.4   c0.1,0,0.2,0,0.4,0c0.1,0,0.3,0,0.4,0.1v-0.2c0-0.2-0.1-0.4-0.2-0.6s-0.4-0.2-0.6-0.2s-0.4,0-0.6,0.1s-0.3,0.2-0.5,0.2l-0.5-0.5   c0.2-0.2,0.4-0.3,0.7-0.4c0.3-0.1,0.6-0.1,0.9-0.1c0.5,0,0.9,0.1,1.2,0.4c0.3,0.3,0.4,0.6,0.4,1.1v2.6h-0.8v-0.4l0,0   c-0.1,0.2-0.3,0.3-0.5,0.4C1037.2,1382,1037,1382.1,1036.7,1382.1z M1036.9,1381.4c0.3,0,0.5-0.1,0.7-0.3s0.3-0.4,0.3-0.8v-0.2   c-0.1,0-0.2,0-0.4,0c-0.1,0-0.2,0-0.3,0c-0.3,0-0.6,0.1-0.8,0.2c-0.2,0.1-0.3,0.3-0.3,0.5s0.1,0.3,0.2,0.4   C1036.4,1381.4,1036.6,1381.4,1036.9,1381.4z"/>
            <path fill="#89CDCF" d="M1040.5,1381.4v2.1h-0.8v-5.4h0.8v0.6l0,0c0.1-0.2,0.3-0.4,0.5-0.5s0.5-0.2,0.8-0.2c0.5,0,1,0.2,1.3,0.6   c0.4,0.4,0.5,0.9,0.5,1.5s-0.2,1.1-0.5,1.5c-0.4,0.4-0.8,0.6-1.3,0.6c-0.3,0-0.5-0.1-0.8-0.2   C1040.9,1381.8,1040.7,1381.6,1040.5,1381.4L1040.5,1381.4z M1040.5,1380c0,0.4,0.1,0.7,0.3,1c0.2,0.3,0.5,0.4,0.9,0.4   s0.6-0.1,0.9-0.4s0.3-0.6,0.3-1s-0.1-0.7-0.3-1s-0.5-0.4-0.9-0.4s-0.6,0.1-0.9,0.4C1040.6,1379.3,1040.5,1379.6,1040.5,1380z"/>
        </g>
        <g>
            <path fill="#89CDCF" d="M1039.5,1338.2v-5.6h0.8v2.3h0.8l1.7-2.3h1l-2,2.6l2.3,3h-1.1l-1.9-2.5h-0.8v2.5H1039.5z"/>
            <path fill="#89CDCF" d="M1046.3,1338.3c-0.5,0-1-0.2-1.4-0.6s-0.6-0.9-0.6-1.5s0.2-1.1,0.6-1.5s0.8-0.6,1.4-0.6s1,0.2,1.4,0.6   s0.6,0.9,0.6,1.5s-0.2,1.1-0.6,1.5C1047.3,1338.1,1046.9,1338.3,1046.3,1338.3z M1046.3,1337.6c0.3,0,0.6-0.1,0.8-0.4   s0.3-0.6,0.3-1s-0.1-0.7-0.3-1s-0.5-0.4-0.8-0.4s-0.6,0.1-0.8,0.4s-0.3,0.6-0.3,1s0.1,0.7,0.3,1S1046,1337.6,1046.3,1337.6z"/>
            <path fill="#89CDCF" d="M1050,1337.6v2.1h-0.8v-5.4h0.8v0.6l0,0c0.1-0.2,0.3-0.4,0.5-0.5s0.5-0.2,0.8-0.2c0.5,0,1,0.2,1.3,0.6   c0.4,0.4,0.5,0.9,0.5,1.5s-0.2,1.1-0.5,1.5c-0.4,0.4-0.8,0.6-1.3,0.6c-0.3,0-0.5-0.1-0.8-0.2   C1050.3,1338,1050.2,1337.8,1050,1337.6L1050,1337.6z M1050,1336.2c0,0.4,0.1,0.7,0.3,1c0.2,0.3,0.5,0.4,0.9,0.4s0.6-0.1,0.9-0.4   c0.2-0.3,0.3-0.6,0.3-1s-0.1-0.7-0.3-1c-0.2-0.3-0.5-0.4-0.9-0.4s-0.6,0.1-0.9,0.4C1050.1,1335.5,1050,1335.8,1050,1336.2z"/>
            <path fill="#89CDCF" d="M1055.3,1338.3c-0.4,0-0.7-0.1-1-0.4c-0.3-0.2-0.4-0.5-0.4-0.9c0-0.3,0.1-0.6,0.4-0.9s0.7-0.4,1.3-0.4   c0.1,0,0.2,0,0.4,0c0.1,0,0.3,0,0.4,0.1v-0.2c0-0.2-0.1-0.4-0.2-0.6s-0.4-0.2-0.6-0.2s-0.4,0-0.6,0.1s-0.3,0.2-0.5,0.2l-0.5-0.5   c0.2-0.2,0.4-0.3,0.7-0.4c0.3-0.1,0.6-0.1,0.9-0.1c0.5,0,0.9,0.1,1.2,0.4c0.3,0.3,0.4,0.6,0.4,1.1v2.6h-0.8v-0.4l0,0   c-0.1,0.2-0.3,0.3-0.5,0.4C1055.7,1338.2,1055.5,1338.3,1055.3,1338.3z M1055.4,1337.6c0.3,0,0.5-0.1,0.7-0.3   c0.2-0.2,0.3-0.4,0.3-0.8v-0.2c-0.1,0-0.2,0-0.4,0s-0.2,0-0.3,0c-0.3,0-0.6,0.1-0.8,0.2c-0.2,0.1-0.3,0.3-0.3,0.5s0.1,0.3,0.2,0.4   C1055,1337.6,1055.2,1337.6,1055.4,1337.6z"/>
            <path fill="#89CDCF" d="M1060.1,1338.3c-0.6,0-1.1-0.2-1.4-0.6s-0.6-1-0.6-1.8v-0.1c0-0.4,0-0.9,0.1-1.2c0.1-0.4,0.2-0.7,0.4-1   c0.2-0.3,0.4-0.5,0.8-0.7c0.3-0.2,0.8-0.3,1.3-0.3c0.2,0,0.5,0,0.7-0.1c0.2,0,0.3-0.1,0.4-0.1v0.7c-0.1,0.1-0.2,0.1-0.4,0.1   c-0.2,0-0.4,0.1-0.7,0.1c-0.7,0-1.1,0.2-1.4,0.5c-0.2,0.3-0.4,0.8-0.5,1.3l0,0c0.1-0.2,0.3-0.3,0.6-0.5c0.3-0.1,0.5-0.2,0.8-0.2   c0.5,0,0.9,0.2,1.3,0.5c0.4,0.4,0.6,0.8,0.6,1.4s-0.2,1.1-0.6,1.5C1061.1,1338.1,1060.7,1338.3,1060.1,1338.3z M1060.1,1337.6   c0.3,0,0.6-0.1,0.8-0.4c0.2-0.2,0.3-0.6,0.3-1s-0.1-0.7-0.3-1c-0.2-0.2-0.5-0.4-0.8-0.4s-0.6,0.1-0.8,0.4c-0.2,0.2-0.3,0.6-0.3,1   s0.1,0.7,0.3,1S1059.8,1337.6,1060.1,1337.6z"/>
            <path fill="#89CDCF" d="M1064.8,1338.3c-0.5,0-1-0.2-1.4-0.6s-0.6-0.9-0.6-1.5s0.2-1.1,0.6-1.5s0.8-0.6,1.3-0.6s1,0.2,1.3,0.5   c0.4,0.4,0.6,0.9,0.6,1.7v0.1h-3c0,0.4,0.2,0.6,0.4,0.8c0.2,0.2,0.5,0.3,0.8,0.3c0.2,0,0.3,0,0.5-0.1s0.3-0.2,0.5-0.3l0.5,0.5   c-0.2,0.2-0.4,0.3-0.7,0.4C1065.4,1338.2,1065.1,1338.3,1064.8,1338.3z M1063.7,1335.9h2.1c0-0.3-0.1-0.5-0.3-0.7   c-0.2-0.2-0.4-0.3-0.7-0.3c-0.3,0-0.6,0.1-0.8,0.3C1063.8,1335.4,1063.7,1335.6,1063.7,1335.9z"/>
            <path fill="#89CDCF" d="M1067.4,1338.3c-0.1,0-0.2,0-0.2,0c-0.1,0-0.1,0-0.1,0v-0.7c0,0,0,0,0.1,0h0.1c0.2,0,0.3-0.1,0.4-0.3   s0.1-0.5,0.2-0.9c0-0.3,0-0.5,0.1-0.8c0-0.3,0-0.5,0-0.7s0-0.4,0-0.7h2.7v4h-0.8v-3.3h-1.2c0,0.2,0,0.4,0,0.7c0,0.3,0,0.5-0.1,0.8   c0,0.6-0.1,1.1-0.3,1.4C1068.1,1338.1,1067.8,1338.3,1067.4,1338.3z"/>
            <path fill="#89CDCF" d="M1071.8,1338.2v-4h0.8v1.3h0.8c0.4,0,0.7,0.1,1,0.4c0.3,0.2,0.4,0.6,0.4,1s-0.1,0.7-0.4,1   c-0.3,0.2-0.6,0.4-1,0.4h-1.6L1071.8,1338.2L1071.8,1338.2z M1072.6,1337.6h0.7c0.2,0,0.4-0.1,0.5-0.2s0.2-0.3,0.2-0.5   s-0.1-0.4-0.2-0.5s-0.3-0.2-0.5-0.2h-0.7V1337.6z"/>
            <path fill="#89CDCF" d="M1075.6,1338.2v-4h0.8v1.6h1.7v-1.6h0.8v4h-0.8v-1.7h-1.7v1.7H1075.6z"/>
            <path fill="#89CDCF" d="M1081.2,1338.3c-0.4,0-0.7-0.1-1-0.4c-0.3-0.2-0.4-0.5-0.4-0.9c0-0.3,0.1-0.6,0.4-0.9s0.7-0.4,1.3-0.4   c0.1,0,0.2,0,0.4,0c0.1,0,0.3,0,0.4,0.1v-0.2c0-0.2-0.1-0.4-0.2-0.6c-0.2-0.1-0.4-0.2-0.6-0.2s-0.4,0-0.6,0.1s-0.3,0.2-0.5,0.2   l-0.5-0.5c0.2-0.2,0.4-0.3,0.7-0.4c0.3-0.1,0.6-0.1,0.9-0.1c0.5,0,0.9,0.1,1.2,0.4c0.3,0.3,0.4,0.6,0.4,1.1v2.6h-0.8v-0.4l0,0   c-0.1,0.2-0.3,0.3-0.5,0.4C1081.7,1338.2,1081.5,1338.3,1081.2,1338.3z M1081.4,1337.6c0.3,0,0.5-0.1,0.7-0.3s0.3-0.4,0.3-0.8v-0.2   c-0.1,0-0.2,0-0.4,0c-0.1,0-0.2,0-0.3,0c-0.3,0-0.6,0.1-0.8,0.2c-0.2,0.1-0.3,0.3-0.3,0.5s0.1,0.3,0.2,0.4   S1081.1,1337.6,1081.4,1337.6z"/>
            <path fill="#89CDCF" d="M1083.9,1338.2l1.1-1.5l0,0c-0.2-0.1-0.4-0.2-0.6-0.4c-0.1-0.2-0.2-0.4-0.2-0.7c0-0.4,0.1-0.7,0.4-0.9   c0.3-0.2,0.6-0.3,1-0.3h1.5v4h-0.8v-1.4h-0.5l-1,1.4h-0.9V1338.2z M1085.7,1336.1h0.6v-1.2h-0.6c-0.2,0-0.4,0.1-0.5,0.2   s-0.2,0.3-0.2,0.5s0.1,0.4,0.2,0.5C1085.3,1336.1,1085.5,1336.1,1085.7,1336.1z"/>
        </g>
        <path id="line15_0-line15_1" fill="#D68AB1" d="M1216.5,820.1c-4.1-4.1-8.3-8.3-12.4-12.4c-5.3-5.3-8.2-12.3-8.2-19.7v-33.8  c-1.8,0-3.7,0.1-5.5,0.1v34.3c0,8.5,3.4,16.6,9.4,22.6l12.8,12.8C1213.9,822.7,1215.2,821.4,1216.5,820.1z"/>
        <path id="line11_2" fill="#89CDCF" d="M570,620.8c3.2-3.2,3.2-8.5,0-11.7s-8.5-3.2-11.7,0s-3.2,8.5,0,11.7S566.8,624,570,620.8z   M561.1,617.9c-1.6-1.7-1.5-4.4,0.1-6c1.6-1.4,4.3-1.7,5.9,0c1.7,1.7,1.7,4.4,0.1,6C565.7,619.5,562.8,619.6,561.1,617.9z"/>
        <path id="line11_1" fill="#89CDCF" d="M800.8,564.8c3.2-3.2,3.2-8.5,0-11.7s-8.5-3.2-11.7,0s-3.2,8.5,0,11.7  C792.4,568.1,797.7,568.1,800.8,564.8z M792,562c-1.6-1.7-1.5-4.4,0.1-6c1.6-1.4,4.3-1.7,5.9,0c1.7,1.7,1.7,4.4,0.1,6  C796.6,563.6,793.7,563.7,792,562z"/>
        <rect id="lineD2_26-lineD2_27" x="1093.8" y="1431.6" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -687.3307 1207.8088)" fill="#FFFFFF" stroke="#E94282" stroke-width="1.5" stroke-miterlimit="9.998" width="41" height="4"/>
        <rect id="lineD2_27-lineD2_28" x="1063.2" y="1463.3" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -719.0156 1194.7142)" fill="#FFFFFF" stroke="#E94282" stroke-width="1.5" stroke-miterlimit="9.998" width="38.9" height="4"/>
        <g id="aero_VKO">
            <path fill="#AC545B" d="M387.2,1790.8h14c11,0,20-9,20-20v-14.5v-7.1v-455.9c0-9.8-2.3-15.5-9.3-22.4l-13.6-13.6   c-6.5-6.6-8.7-11.9-8.7-21.4v-22.4l0,0v-4.3c0-20.9,8.2-40.6,23-55.4l0.6-0.6l0,0L546,1020.3l0,0l16.2-16.2   c6.9-6.9,9.3-12.6,9.3-22.4v-5.1h-1v5.1c0,9.6-2.2,14.9-9,21.7l-16.1,16.1l0,0l-123.6,123.6l0,0l-9.9,9.9   c-15,15-23.2,34.9-23.2,56.1v11l0,0v15.7c0,9.8,2.3,15.5,9.3,22.4l13.6,13.6c6.6,6.6,8.7,11.9,8.7,21.4v455.9v7.1v14.5   c0,10.5-8.5,19-19,19h-14"/>

            <rect id="white-base-28_126_" x="442.6" y="1116.6" transform="matrix(0.7589 -0.6512 0.6512 0.7589 -621.0969 560.6031)" fill="#FFFFFF" width="7.9" height="5"/>
            <path fill="#AC545B" d="M569.4,967l1.2-1.8v-0.1v-0.9c0-0.2,0.1-0.3,0.3-0.3s0.3,0.1,0.3,0.3v0.9v0.1l1.2,1.8v0.1l-0.3,0.4H572   l-0.8-1.1l0,0v1.4c0,0,0,0.1,0.1,0.1h0.1c0,0,0.1,0,0.1,0.1v0.2c0,0,0,0.1-0.1,0.1h-1.1c0,0-0.1,0-0.1-0.1V968c0,0,0-0.1,0.1-0.1   h0.1c0,0,0.1,0,0.1-0.1v-1.4l0,0l-0.8,1.1h-0.1L569.4,967C569.4,967.1,569.4,967.1,569.4,967 M572.7,967.2   C572.6,967.2,572.6,967.2,572.7,967.2l-0.4,0.4v0.1l1.3,0.4l0,0l-1.3,0.4h-0.1v-0.1c0,0,0,0-0.1,0l-0.2,0.1c0,0,0,0,0,0.1l0.3,1   c0,0,0,0,0.1,0l0.2-0.1c0,0,0,0,0-0.1v-0.1v-0.1l1.3-0.4l0,0l-0.8,1.1v0.1l0.5,0.2h0.1l1.3-1.6l0.1-0.1l0.9-0.3   c0.2-0.1,0.3-0.2,0.2-0.4s-0.2-0.3-0.4-0.2l-0.9,0.3h-0.1L572.7,967.2 M573.5,970.4C573.5,970.3,573.5,970.3,573.5,970.4l-0.5-0.2   h-0.1v1.3l0,0l-0.8-1.1v-0.1l0.1-0.1v-0.1l-0.1-0.2H572l-0.9,0.6v0.1l0.1,0.2h0.1l0.1-0.1h0.1l0.8,1.1l0,0l-1.3-0.4h-0.1v0.5v0.1   l2,0.7c0,0,0.1,0,0.1,0.1l0.5,0.8c0.1,0.1,0.3,0.2,0.5,0.1c0.1-0.1,0.2-0.3,0.1-0.5l-0.5-0.8v-0.1L573.5,970.4 M570.8,972.2   C570.8,972.1,570.8,972.1,570.8,972.2l0.1-0.6c0,0,0-0.1-0.1,0l-1.3,0.4l0,0l0.8-1.1h0.1l0.1,0.1h0.1l0.1-0.2v-0.1l-0.9-0.6h-0.1   l-0.1,0.2v0.1l0.1,0.1v0.1l-0.8,1.1l0,0v-1.3c0,0,0-0.1-0.1,0l-0.5,0.2c0,0-0.1,0-0.1,0.1l-0.1,2.1v0.1l-0.5,0.7   c-0.1,0.1-0.1,0.4,0.1,0.5c0.1,0.1,0.4,0.1,0.5-0.1l0.5-0.8l0.1-0.1L570.8,972.2 M568.2,970.1C568.3,970.1,568.3,970.1,568.2,970.1   l0.6-0.1c0,0,0,0,0-0.1l-0.8-1.1l0,0l1.3,0.4c0,0,0,0,0,0.1v0.1v0.1l0.2,0.1h0.1l0.3-1v-0.1l-0.2-0.1h-0.1v0.1c0,0,0,0-0.1,0   l-1.3-0.4l0,0l1.3-0.4c0,0,0,0,0-0.1l-0.3-0.4h-0.1l-2,0.6H567l-0.9-0.3c-0.2-0.1-0.4,0-0.4,0.2c-0.1,0.2,0,0.4,0.2,0.4l0.9,0.3   c0,0,0.1,0,0.1,0.1L568.2,970.1"/>
            <polyline fill="#AC545B" points="397.3,1789.8 373.7,1789.8 373.7,1790.8 397.3,1790.8  "/>
            <path fill="#AC545B" d="M365.5,1788.5l1.2-1.8v-0.1v-0.9c0-0.2,0.1-0.3,0.3-0.3c0.2,0,0.3,0.1,0.3,0.3v0.9v0.1l1.2,1.8v0.1   l-0.3,0.4h-0.1l-0.8-1.1l0,0v1.4c0,0,0,0.1,0.1,0.1h0.1c0,0,0.1,0,0.1,0.1v0.2c0,0,0,0.1-0.1,0.1h-1.1c0,0-0.1,0-0.1-0.1v-0.2   c0,0,0-0.1,0.1-0.1h0.1c0,0,0.1,0,0.1-0.1v-1.4l0,0l-0.8,1.1h-0.1L365.5,1788.5L365.5,1788.5 M368.7,1788.6L368.7,1788.6l-0.4,0.4   v0.1l1.3,0.4l0,0l-1.3,0.4h-0.1v-0.1c0,0,0,0-0.1,0l-0.2,0.1c0,0,0,0,0,0.1l0.3,1c0,0,0,0,0.1,0l0.2-0.1c0,0,0,0,0-0.1v-0.1v-0.1   l1.3-0.4l0,0l-0.8,1.1v0.1l0.5,0.2h0.1l1.3-1.6l0.1-0.1l0.9-0.3c0.2-0.1,0.3-0.2,0.2-0.4c-0.1-0.2-0.2-0.3-0.4-0.2l-0.9,0.3h-0.1   L368.7,1788.6 M369.6,1791.8C369.6,1791.8,369.6,1791.7,369.6,1791.8l-0.5-0.2H369v1.3l0,0l-0.8-1.1v-0.1l0.1-0.1v-0.1l-0.1-0.2   h-0.1l-0.9,0.6v0.1l0.1,0.2h0.1l0.1-0.1h0.1l0.8,1.1l0,0l-1.3-0.4H367v0.5v0.1l2,0.7c0,0,0.1,0,0.1,0.1l0.5,0.8   c0.1,0.1,0.3,0.2,0.5,0.1c0.1-0.1,0.2-0.3,0.1-0.5l-0.5-0.8v-0.1L369.6,1791.8 M366.9,1793.6   C366.9,1793.6,366.9,1793.5,366.9,1793.6l0.1-0.6c0,0,0-0.1-0.1,0l-1.3,0.4l0,0l0.8-1.1h0.1l0.1,0.1h0.1l0.1-0.2v-0.1l-0.9-0.6   h-0.1l-0.1,0.2v0.1l0.1,0.1v0.1l-0.8,1.1l0,0v-1.3c0,0,0-0.1-0.1,0l-0.5,0.2c0,0-0.1,0-0.1,0.1l-0.1,2.1v0.1l-0.5,0.8   c-0.1,0.1-0.1,0.4,0.1,0.5c0.1,0.1,0.4,0.1,0.5-0.1l0.5-0.8l0.1-0.1L366.9,1793.6 M364.3,1791.5   C364.3,1791.5,364.4,1791.5,364.3,1791.5l0.6-0.1c0,0,0,0,0-0.1l-0.8-1.1l0,0l1.3,0.4c0,0,0,0,0,0.1v0.1v0.1l0.2,0.1h0.1l0.3-1   v-0.1l-0.2-0.1h-0.1v0.1c0,0,0,0-0.1,0l-1.3-0.4l0,0l1.3-0.4c0,0,0,0,0-0.1l-0.3-0.4h-0.1l-2,0.6h-0.1l-0.9-0.3   c-0.2-0.1-0.4,0-0.4,0.2c-0.1,0.2,0,0.4,0.2,0.4l0.9,0.3c0,0,0.1,0,0.1,0.1L364.3,1791.5"/>
            <path fill="none" stroke="#6CA1D9" stroke-miterlimit="10" d="M437,1625.4v146c0,16.4-13.3,29.7-29.7,29.7"/>
            <path fill="none" stroke="#6CA1D9" stroke-miterlimit="10" d="M448.4,1449.2v76.3c0,5.1-2,10-5.7,13.7c-3.6,3.6-5.7,8.5-5.7,13.7   v109.7"/>
            <path fill="none" stroke="#6CA1D9" stroke-miterlimit="10" d="M448.3,1588.7v3.7c0,5.1-2,10-5.7,13.7c-3.6,3.6-5.7,8.5-5.7,13.7"/>
            <path fill="#6CA1D9" d="M451.9,1432.9h-1.5l0,0h-4.1l-0.5-1h-1l0.5,1.5l-0.5,1.5h1l0.5-1h1.5l-0.5,3.4h1l1.5-3.4h2.2   c0.3,0,0.5-0.2,0.5-0.5C452.4,1433.1,452.2,1432.9,451.9,1432.9"/>
            <polygon fill="#6CA1D9" points="449.5,1432.4 448.2,1429.5 447.2,1429.5 447.7,1432.4  "/>
            <path fill="#6CA1D9" d="M451.9,1571.6h-1.5l0,0h-4.1l-0.5-1h-1l0.5,1.5l-0.5,1.5h1l0.5-1h1.5l-0.5,3.4h1l1.5-3.4h2.2   c0.3,0,0.5-0.2,0.5-0.5C452.4,1571.9,452.2,1571.6,451.9,1571.6"/>
            <polygon fill="#6CA1D9" points="449.5,1571.1 448.2,1568.2 447.2,1568.2 447.7,1571.1  "/>
            <path fill="#6CA1D9" d="M446.3,1514c0-1.1,0.9-2.1,2-2.1s2,0.9,2,2.1c0,1.1-0.9,2.1-2,2.1C447.2,1516.1,446.3,1515.1,446.3,1514"/>
            <path fill="#FFFFFF" d="M447.1,1514c0-0.7,0.5-1.2,1.2-1.2s1.2,0.6,1.2,1.2c0,0.7-0.5,1.2-1.2,1.2   C447.7,1515.2,447.1,1514.7,447.1,1514"/>
            <path fill="#6CA1D9" d="M446.3,1468.5c0-1.1,0.9-2.1,2-2c1.1,0,2,0.9,2,2s-0.9,2-2,2C447.2,1470.5,446.3,1469.6,446.3,1468.5"/>
            <path fill="#FFFFFF" d="M447.1,1468.5c0-0.7,0.5-1.2,1.2-1.2s1.2,0.6,1.2,1.2c0,0.7-0.5,1.2-1.2,1.2   C447.7,1469.7,447.1,1469.2,447.1,1468.5"/>
            <path fill="#6CA1D9" d="M444.8,1424.9c0-0.2,0-0.5,0.1-0.7s0.2-0.4,0.4-0.6c0.2-0.2,0.4-0.3,0.6-0.4s0.5-0.1,0.7-0.1v0.5   c-0.7,0-1.3,0.6-1.3,1.3s0.6,1.3,1.3,1.3c0.6,0,1.1-0.4,1.2-0.9h4.2v-0.9h0.5v-1H452v-2.9l-1-1h-7v1h0.5v1.6H444v3.2h0.8   C444.8,1425.2,444.8,1425,444.8,1424.9 M446.6,1425.7c-0.4,0-0.8-0.4-0.8-0.8s0.4-0.8,0.8-0.8s0.8,0.4,0.8,0.8   C447.4,1425.3,447,1425.7,446.6,1425.7 M450.3,1420.5h1.3v3.9h-1.3V1420.5z M448.5,1420.5h1.3v3.9h-1.3V1420.5z M445,1420.5h3v1.6   h-3V1420.5z"/>
            <path fill="#6CA1D9" d="M444.2,1444.5c0-0.8,0.4-1.6,1.2-2.6l0.8-1l0.8,0.1l-1.7,2.1l0,0c0.3-0.2,0.6-0.3,1-0.3   c0.9,0,1.7,0.7,1.7,1.8c0,1-0.8,1.8-2,1.8C445,1446.4,444.2,1445.5,444.2,1444.5 M447.3,1444.6c0-0.6-0.5-1.1-1.2-1.1   s-1.2,0.5-1.2,1.1s0.5,1.1,1.2,1.1S447.3,1445.2,447.3,1444.6"/>
            <polygon fill="#6CA1D9" points="448.3,1441.6 448.5,1440.9 450,1440.9 450,1446.3 449.3,1446.3 449.3,1441.6  "/>
            <polygon fill="#6CA1D9" points="450.8,1441.6 451.1,1440.9 452.6,1440.9 452.6,1446.3 451.8,1446.3 451.8,1441.6  "/>
            <path fill="#6CA1D9" d="M447.9,1582.2c0,0.8-0.4,1.6-1.2,2.6l-0.8,1l-0.8-0.1l1.7-2.1l0,0c-0.3,0.2-0.6,0.3-1,0.3   c-0.9,0-1.7-0.7-1.7-1.8c0-1,0.8-1.8,2-1.8C447.2,1580.3,447.9,1581.2,447.9,1582.2 M444.8,1582.1c0,0.6,0.5,1.1,1.2,1.1   s1.2-0.5,1.2-1.1s-0.5-1.1-1.2-1.1S444.8,1581.5,444.8,1582.1"/>
            <polygon fill="#6CA1D9" points="448.4,1581.1 448.6,1580.4 450.1,1580.4 450.1,1585.8 449.3,1585.8 449.3,1581.1  "/>
            <polygon fill="#6CA1D9" points="450.9,1581.1 451.2,1580.4 452.7,1580.4 452.7,1585.8 451.9,1585.8 451.9,1581.1  "/>
            <path fill="#6CA1D9" d="M444.9,1562c0-0.2,0-0.5,0.1-0.7s0.2-0.4,0.4-0.6c0.2-0.2,0.4-0.3,0.6-0.4s0.5-0.1,0.7-0.1v0.5   c-0.7,0-1.3,0.6-1.3,1.3s0.6,1.3,1.3,1.3c0.6,0,1.1-0.4,1.2-0.9h4.2v-0.9h0.5v-1h-0.5v-2.9l-1-1H444v1h0.5v1.6H444v3.2h0.8   C444.9,1562.3,444.9,1562.2,444.9,1562 M446.6,1562.8c-0.4,0-0.8-0.4-0.8-0.8s0.4-0.8,0.8-0.8s0.8,0.4,0.8,0.8   C447.4,1562.5,447.1,1562.8,446.6,1562.8 M450.3,1557.6h1.3v3.9h-1.3V1557.6z M448.6,1557.6h1.3v3.9h-1.3V1557.6z M445.1,1557.6h3   v1.6h-3V1557.6z"/>
            <rect id="white-base-28_125_" x="479.3" y="1070.5" fill="#FFFFFF" width="19.3" height="14"/>
            <rect id="white-base-28_127_" x="384.7" y="1190" fill="#FFFFFF" width="10" height="24"/>
            <rect id="white-base-28_128_" x="379.3" y="1243.9" fill="#FFFFFF" width="24" height="10"/>
            <rect id="white-base-28_129_" x="408.6" y="1302.5" fill="#FFFFFF" width="24" height="14"/>
            <line id="line5768" fill="none" stroke="#6CA1D9" stroke-miterlimit="10" x1="302.2" y1="1568.9" x2="302.2" y2="1639.2"/>
            <path id="path5770" fill="#1D1D1B" d="M318,1824.8v-5.6v-6.4c0-0.7-0.6-1.4-1.4-1.4c-0.7,0-1.4,0.6-1.4,1.4v6.4l-9.3,5v2.1l9.3-1.6   v4.3l-3.5,2.2v1.6l4.8-0.9l4.8,0.9v-1.6l-3.5-2.2v-4.3L318,1824.8L318,1824.8z"/>
            <polygon id="polygon5772" fill="#1D1D1B" points="327.5,1826.4 327.5,1824.3 319.5,1820 319.5,1825  "/>
            <path id="path5778" fill="#6CA1D9" d="M335.2,1803.7c0-0.2,0-0.5,0.1-0.7s0.2-0.4,0.4-0.6s0.4-0.3,0.6-0.4s0.5-0.1,0.7-0.1v0.5   c-0.7,0-1.3,0.6-1.3,1.3s0.6,1.3,1.3,1.3c0.6,0,1.1-0.4,1.2-0.9h4.2v-0.9h0.5v-1h-0.5v-2.9l-1-1h-7.1v1h0.5v1.6h-0.5v3.2h0.8   C335.2,1804,335.2,1803.9,335.2,1803.7 M337,1804.5c-0.4,0-0.8-0.4-0.8-0.8s0.4-0.8,0.8-0.8s0.8,0.4,0.8,0.8   C337.8,1804.2,337.5,1804.5,337,1804.5 M340.8,1799.4h1.3v3.9h-1.3V1799.4z M339,1799.4h1.3v3.9H339V1799.4z M335.5,1799.4h3v1.6   h-3V1799.4z"/>
            <path id="path5780" fill="#6CA1D9" d="M344.6,1803.4l0.5-0.5c0.4,0.3,0.8,0.5,1.3,0.5c0.7,0,1.2-0.4,1.2-1.1s-0.6-1-1.3-1   c-0.1,0-0.3,0-0.4,0v-0.5l1.5-1.5h-2.5v-0.7h3.4v0.6l-1.4,1.4l0,0c0.9,0.1,1.6,0.8,1.6,1.7c0,1-0.9,1.7-2,1.7   C345.8,1804.1,345.1,1803.8,344.6,1803.4"/>
            <path id="path5782" fill="#6CA1D9" d="M350.8,1802c1-1,1.3-1.4,1.3-1.9s-0.4-0.9-1-0.9s-1.1,0.3-1.4,0.6l-0.5-0.5   c0.4-0.4,1.1-0.8,1.9-0.8c1.2,0,1.8,0.8,1.8,1.6c0,0.7-0.5,1.3-1.3,2.1l-1.1,1.1l0,0h2.7l-0.3,0.7h-3.5v-0.6L350.8,1802z"/>
            <polygon id="polygon5784" fill="#6CA1D9" points="353.8,1804 353.8,1802.9 354.8,1802.9 354.8,1804 354.3,1805.1 353.8,1805.1    354.2,1804  "/>
            <path id="path5786" fill="#6CA1D9" d="M383.5,1802.2c0-0.8,0.4-1.6,1.2-2.6l0.8-1l0.8,0.1l-1.7,2.1l0,0c0.3-0.2,0.6-0.3,1-0.3   c0.9,0,1.7,0.7,1.7,1.8c0,1-0.8,1.8-2,1.8C384.2,1804.1,383.5,1803.3,383.5,1802.2 M386.5,1802.3c0-0.6-0.5-1.1-1.2-1.1   s-1.2,0.5-1.2,1.1s0.5,1.1,1.2,1.1S386.5,1802.9,386.5,1802.3"/>
            <polygon id="polygon5788" fill="#6CA1D9" points="387.5,1799.3 387.8,1798.6 389.2,1798.6 389.2,1804 388.5,1804 388.5,1799.3  "/>
            <polygon id="polygon5790" fill="#6CA1D9" points="390,1799.3 390.3,1798.6 391.8,1798.6 391.8,1804 391,1804 391,1799.3  "/>
            <polygon id="polygon5792" fill="#6CA1D9" points="393,1804 393,1802.9 394,1802.9 394,1804 393.5,1805.1 393,1805.1 393.5,1804     "/>
            <path id="path5794" fill="#6CA1D9" d="M398.3,1800.4c0,0.8-0.4,1.6-1.2,2.6l-0.8,1l-0.8-0.1l1.7-2.1l0,0c-0.3,0.2-0.6,0.3-1,0.3   c-0.9,0-1.7-0.7-1.7-1.8c0-1,0.8-1.8,2-1.8C397.5,1798.5,398.3,1799.4,398.3,1800.4 M395.2,1800.3c0,0.6,0.5,1.1,1.2,1.1   s1.2-0.5,1.2-1.1s-0.5-1.1-1.2-1.1C395.6,1799.2,395.2,1799.7,395.2,1800.3"/>
            <polygon id="polygon5796" fill="#6CA1D9" points="398.8,1799.3 399,1798.6 400.5,1798.6 400.5,1804 399.8,1804 399.8,1799.3  "/>
            <polygon id="polygon5798" fill="#6CA1D9" points="401.2,1799.3 401.5,1798.6 403,1798.6 403,1804 402.2,1804 402.2,1799.3  "/>
            <path id="path5800" fill="#6CA1D9" d="M298.8,1521c0-0.2,0-0.5,0.1-0.7s0.2-0.4,0.4-0.6s0.4-0.3,0.6-0.4s0.5-0.1,0.7-0.1v0.5   c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3c0.6,0,1.1-0.4,1.2-0.9h4.2v-0.9h0.5v-1H306v-2.9l-1-1h-7v1h0.5v1.6H298v3.2h0.8   C298.8,1521.3,298.8,1521.2,298.8,1521 M300.6,1521.8c-0.4,0-0.8-0.4-0.8-0.8s0.4-0.8,0.8-0.8s0.8,0.4,0.8,0.8   C301.5,1521.5,301,1521.8,300.6,1521.8 M304.3,1516.6h1.3v3.9h-1.3V1516.6z M302.5,1516.6h1.3v3.9h-1.3V1516.6z M299,1516.6h3v1.6   h-3V1516.6z"/>
            <path id="path5840" fill="#6CA1D9" d="M287.8,1520.7l0.5-0.5c0.4,0.3,0.8,0.5,1.3,0.5c0.7,0,1.2-0.4,1.2-1.1s-0.6-1-1.3-1   c-0.1,0-0.3,0-0.4,0v-0.5l1.5-1.5H288v-0.7h3.4v0.6l-1.4,1.4l0,0c0.9,0.1,1.6,0.8,1.6,1.6c0,1-0.9,1.7-2,1.7   C288.8,1521.4,288.2,1521.2,287.8,1520.7"/>
            <path id="path5842" fill="#6CA1D9" d="M293.8,1519.4c1-1,1.3-1.4,1.3-1.9s-0.4-0.9-1-0.9s-1.1,0.3-1.4,0.6l-0.5-0.5   c0.4-0.4,1.1-0.8,1.9-0.8c1.2,0,1.8,0.8,1.8,1.6c0,0.7-0.5,1.3-1.3,2.1l-1.1,1.1l0,0h2.7l-0.3,0.7h-3.5v-0.6L293.8,1519.4z"/>
            <path id="path5850" fill="#1D1D1B" d="M337.6,1810.5l3.8,9.8h-1.7l-0.9-2.5h-3.9l-0.9,2.5h-1.5l3.9-9.8H337.6z M337,1812.6l-1.5,4   h3L337,1812.6z"/>
            <path id="path5852" fill="#1D1D1B" d="M341.6,1819.5l0.9-0.9c0.3,0.3,0.8,0.6,1.6,0.6c1.1,0,1.9-0.8,2-2h-2.6v-1.1h2.6   c-0.2-1-1-1.7-2-1.7c-0.7,0-1.2,0.3-1.6,0.6l-0.9-0.8c0.5-0.5,1.4-1,2.4-1c1.9,0,3.4,1.5,3.4,3.6s-1.5,3.6-3.4,3.6   C343,1820.4,342.2,1820,341.6,1819.5"/>
            <path id="path5854" fill="#1D1D1B" d="M348.8,1813.3h1.4v1.1l0,0c0.4-0.7,1.2-1.2,2.3-1.2c1.9,0,3.2,1.5,3.2,3.6s-1.4,3.6-3.2,3.6   c-1,0-1.8-0.5-2.3-1.2l0,0v3.6h-1.4V1813.3L348.8,1813.3z M352.2,1819.2c1.2,0,2.1-1,2.1-2.4s-0.9-2.4-2.1-2.4s-2.1,1-2.1,2.4   S351,1819.2,352.2,1819.2"/>
            <path id="path5856" fill="#1D1D1B" d="M356.5,1816.8c0-2.1,1.5-3.6,3.4-3.6s3.5,1.5,3.5,3.6s-1.5,3.6-3.5,3.6   C358,1820.4,356.5,1818.9,356.5,1816.8 M362,1816.8c0-1.4-0.8-2.4-2.1-2.4c-1.2,0-2.1,1-2.1,2.4s0.8,2.4,2.1,2.4   S362,1818.2,362,1816.8"/>
            <polygon id="polygon5858" fill="#1D1D1B" points="364.5,1813.3 370.3,1813.3 370.3,1820.3 369,1820.3 369,1814.5 366,1814.5    366,1820.3 364.5,1820.3  "/>
            <path id="path5860" fill="#1D1D1B" d="M371.5,1816.8c0-2.1,1.5-3.6,3.4-3.6s3.5,1.5,3.5,3.6s-1.5,3.6-3.5,3.6   C373,1820.4,371.5,1818.9,371.5,1816.8 M377,1816.8c0-1.4-0.8-2.4-2.1-2.4c-1.2,0-2.1,1-2.1,2.4s0.8,2.4,2.1,2.4   S377,1818.2,377,1816.8"/>
            <path id="path5862" fill="#1D1D1B" d="M379.8,1813.3h1.4v1.1l0,0c0.4-0.7,1.2-1.2,2.3-1.2c1.9,0,3.2,1.5,3.2,3.6s-1.4,3.6-3.2,3.6   c-1,0-1.8-0.5-2.3-1.2l0,0v3.6h-1.4V1813.3z M383.1,1819.2c1.2,0,2.1-1,2.1-2.4s-0.9-2.4-2.1-2.4s-2.1,1-2.1,2.4   S381.8,1819.2,383.1,1819.2"/>
            <polygon id="polygon5864" fill="#1D1D1B" points="389.1,1814.5 387,1814.5 387,1813.3 392.8,1813.3 392.3,1814.5 390.5,1814.5    390.5,1820.3 389.1,1820.3  "/>
            <path id="path5866" fill="#1D1D1B" d="M340,1825.5c0,0.8-0.4,1.6-1,1.9l0,0c1.1,0.3,2,1.2,2,2.6c0,1.5-1.3,2.8-3.2,2.8h-3.9v-9.8   h3.3C339,1823.1,340,1824.3,340,1825.5 M338.5,1825.7c0-0.9-0.7-1.4-1.6-1.4h-1.7v2.9h1.7C337.8,1827.2,338.5,1826.6,338.5,1825.7    M339.3,1830c0-1-0.8-1.7-1.9-1.7h-2.3v3.3h2.3C338.5,1831.7,339.3,1831,339.3,1830"/>
            <polygon id="polygon5868" fill="#1D1D1B" points="346.5,1829.9 343.5,1829.9 343.5,1832.9 342.1,1832.9 342.1,1826 343.5,1826    343.5,1828.7 346.5,1828.7 346.5,1826 347.8,1826 347.8,1832.9 346.5,1832.9  "/>
            <path id="path5870" fill="#1D1D1B" d="M348.5,1835l0.9-0.9c0.2,0.2,0.5,0.3,0.8,0.3c0.5,0,1-0.3,1.4-1.3l-2.8-7.1h1.5l2,5.4l0,0   l1.7-5.4h1.5l-2.6,7.5c-0.4,1.2-1.2,2.2-2.7,2.2C349.5,1835.6,349,1835.5,348.5,1835"/>
            <polygon id="polygon5872" fill="#1D1D1B" points="361,1832.9 358.5,1829.9 357.6,1829.9 357.6,1832.9 356.2,1832.9 356.2,1826    357.6,1826 357.6,1828.8 358.5,1828.8 360.6,1826 362.1,1826 359.6,1829.2 362.6,1832.9  "/>
            <path id="path5874" fill="#1D1D1B" d="M362.8,1829.4c0-2.1,1.5-3.6,3.5-3.6c1.9,0,3.4,1.5,3.4,3.6s-1.5,3.6-3.4,3.6   C364.2,1833.1,362.8,1831.5,362.8,1829.4 M368.2,1829.4c0-1.4-0.8-2.4-2.1-2.4s-2.1,1-2.1,2.4s0.8,2.4,2.1,2.4   S368.2,1830.8,368.2,1829.4"/>
            <path id="path5876" fill="#1D1D1B" d="M374.2,1826c1.3,0,2.1,0.8,2.1,1.8c0,0.6-0.4,1.2-0.9,1.5l0,0c0.8,0.2,1.3,0.9,1.3,1.6   c0,1.2-0.9,2-2.2,2h-3.6v-6.9H374.2L374.2,1826z M375,1827.9c0-0.5-0.4-0.8-0.9-0.8h-1.8v1.7h1.8   C374.5,1828.8,375,1828.4,375,1827.9 M375.2,1830.8c0-0.6-0.5-1-1.1-1h-1.9v1.9h1.9C374.8,1831.8,375.2,1831.5,375.2,1830.8"/>
            <path id="path5878" fill="#1D1D1B" d="M377.5,1829.4c0-2.1,1.5-3.6,3.4-3.6s3.5,1.5,3.5,3.6s-1.5,3.6-3.5,3.6   C379,1833.1,377.5,1831.5,377.5,1829.4 M383,1829.4c0-1.4-0.8-2.4-2.1-2.4c-1.2,0-2.1,1-2.1,2.4s0.8,2.4,2.1,2.4   S383,1830.8,383,1829.4"/>
            <path id="path5816_00000138560004356552129390000016276814522334393501_" fill="#6CA1D9" d="M300.2,1640.4c0-1.1,0.9-2.1,2-2.1   s2,0.9,2,2.1c0,1.1-0.9,2.1-2,2.1S300.2,1641.5,300.2,1640.4"/>
            <path id="path5818_00000067213497923876367200000016469217910278668172_" fill="#FFFFFF" d="M301,1640.4c0-0.7,0.5-1.2,1.2-1.2   s1.2,0.6,1.2,1.2c0,0.7-0.5,1.2-1.2,1.2C301.6,1641.6,301,1641.1,301,1640.4"/>
            <path id="path5816_00000005243240516861027210000011703445126351502743_" fill="#6CA1D9" d="M300.2,1567.2c0-1.1,0.9-2.1,2-2.1   s2,0.9,2,2.1c0,1.1-0.9,2.1-2,2.1S300.2,1568.3,300.2,1567.2"/>
            <path id="path5818_00000090276090553696137200000018424530047674726812_" fill="#FFFFFF" d="M301,1567.2c0-0.7,0.5-1.2,1.2-1.2   s1.2,0.6,1.2,1.2c0,0.7-0.5,1.2-1.2,1.2C301.6,1568.4,301,1567.9,301,1567.2"/>

            <line id="line5768_00000055669856299680582130000013266964281325384865_" fill="none" stroke="#6CA1D9" stroke-miterlimit="10" x1="302.2" y1="1523.2" x2="302.2" y2="1565.5"/>
            <path id="path5802_00000101093433463772732930000014299981889279440522_" fill="none" stroke="#6CA1D9" stroke-miterlimit="10" d="   M302.2,1626"/>
            <path id="path5802_00000040553788815391729010000006814945687210695041_" fill="none" stroke="#6CA1D9" stroke-miterlimit="10" d="   M332,1801.7c-16.4,0-29.7-13.3-29.7-29.7v-130.1"/>
            <path id="path5800_00000067206543814516282410000016548002382494483593_" fill="#6CA1D9" d="M288.6,1642.4c0-0.2,0-0.5,0.1-0.7   s0.2-0.4,0.4-0.6s0.4-0.3,0.6-0.4s0.5-0.1,0.7-0.1v0.5c-0.7,0-1.3,0.6-1.3,1.3s0.6,1.3,1.3,1.3c0.6,0,1.1-0.4,1.2-0.9h4.2v-0.9h0.5   v-1h-0.5v-2.9l-1-1h-7.1v1h0.5v1.6h-0.5v3.2h0.8C288.6,1642.7,288.6,1642.6,288.6,1642.4 M290.5,1643.2c-0.4,0-0.8-0.4-0.8-0.8   s0.4-0.8,0.8-0.8s0.8,0.4,0.8,0.8C291.2,1642.9,290.8,1643.2,290.5,1643.2 M294.1,1638h1.3v3.9h-1.3V1638z M292.3,1638h1.3v3.9   h-1.3V1638z M288.8,1638h3v1.6h-3V1638z"/>
            <path id="path1918-2_00000034086721052825384380000007016980855043897236_" fill="#6CA1D9" d="M285.8,1638.7c0,0.5-0.3,1-0.8,1.2   l0,0c0.5,0.2,1,0.7,1,1.3c0,0.9-0.8,1.6-2,1.6s-2-0.6-2-1.6c0-0.6,0.4-1.1,1-1.3l0,0c-0.5-0.2-0.8-0.7-0.8-1.2   c0-0.8,0.7-1.5,1.8-1.5S285.8,1637.9,285.8,1638.7 M282.8,1641.2c0,0.5,0.4,0.9,1.2,0.9c0.7,0,1.2-0.4,1.2-0.9s-0.4-0.9-1.2-0.9   S282.8,1640.8,282.8,1641.2 M285,1638.8c0-0.4-0.4-0.8-1-0.8c-0.7,0-1,0.4-1,0.8s0.4,0.8,1,0.8C284.6,1639.6,285,1639.2,285,1638.8   "/>
            <polygon id="polygon5788_00000031204520830252779690000001068159218300188573_" fill="#6CA1D9" points="275,1638.1 275.1,1637.4    276.6,1637.4 276.6,1642.8 275.8,1642.8 275.8,1638.1  "/>
            <path id="path5842_00000174587102837031321110000004018438698439985049_" fill="#6CA1D9" d="M279,1640.8c1-1,1.3-1.4,1.3-1.9   s-0.4-0.9-1-0.9s-1.1,0.3-1.4,0.6l-0.5-0.5c0.4-0.4,1.1-0.8,1.9-0.8c1.2,0,1.8,0.8,1.8,1.6c0,0.7-0.5,1.3-1.3,2.1l-1.1,1.1l0,0h2.7   l-0.3,0.7h-3.5v-0.6L279,1640.8z"/>
            <path id="path5802_00000070797651899109288010000016030020240501662616_" fill="none" stroke="#6CA1D9" stroke-miterlimit="10" d="   M291.5,1626"/>
            <path id="path5802_00000108279659641304868580000000657225614905353856_" fill="none" stroke="#6CA1D9" stroke-miterlimit="10" d="   M321,1801.7c-16.4,0-29.7-13.3-29.7-29.7v-124.8"/>

            <line id="line5768_00000109734561143369376830000002586014014339719849_" fill="none" stroke="#6CA1D9" stroke-miterlimit="10" x1="321" y1="1801.7" x2="333.8" y2="1801.7"/>
            <path id="path1918-2_00000160909569932004713040000000368429984223404176_" fill="#6CA1D9" d="M366.5,1799.9c0,0.5-0.3,1-0.8,1.2   l0,0c0.5,0.2,1,0.7,1,1.3c0,0.9-0.8,1.6-2,1.6s-2-0.6-2-1.6c0-0.6,0.4-1.1,1-1.3l0,0c-0.5-0.2-0.8-0.7-0.8-1.2   c0-0.8,0.7-1.5,1.8-1.5S366.5,1799.1,366.5,1799.9 M363.5,1802.4c0,0.5,0.4,0.9,1.2,0.9c0.7,0,1.2-0.4,1.2-0.9s-0.4-0.9-1.2-0.9   S363.5,1802,363.5,1802.4 M365.6,1800c0-0.4-0.4-0.8-1-0.8c-0.7,0-1,0.4-1,0.8s0.4,0.8,1,0.8C365.3,1800.8,365.6,1800.4,365.6,1800   "/>
            <polygon id="polygon5788_00000012430968354427818540000015865749487647014537_" fill="#6CA1D9" points="355.5,1799.3 355.8,1798.6    357.2,1798.6 357.2,1804 356.5,1804 356.5,1799.3  "/>
            <path id="path5842_00000052074255089904778640000017867577626417285011_" fill="#6CA1D9" d="M359.6,1802c1-1,1.3-1.4,1.3-1.9   s-0.4-0.9-1-0.9s-1.1,0.3-1.4,0.6l-0.5-0.5c0.4-0.4,1.1-0.8,1.9-0.8c1.2,0,1.8,0.8,1.8,1.6c0,0.7-0.5,1.3-1.3,2.1l-1.1,1.1l0,0h2.7   l-0.3,0.7h-3.5v-0.6L359.6,1802z"/>
            <path id="path5778_00000128476272269810114010000004569621890273715591_" fill="#6CA1D9" d="M373.5,1804c0-0.2,0-0.5,0.1-0.7   s0.2-0.4,0.4-0.6s0.4-0.3,0.6-0.4s0.5-0.1,0.7-0.1v0.5c-0.7,0-1.3,0.6-1.3,1.3s0.6,1.3,1.3,1.3c0.6,0,1.1-0.4,1.2-0.9h4.2v-0.9h0.5   v-1h-0.5v-2.9l-1-1h-7.1v1h0.5v1.6h-0.5v3.2h0.8C373.5,1804.3,373.5,1804.2,373.5,1804 M375.3,1804.8c-0.4,0-0.8-0.4-0.8-0.8   s0.4-0.8,0.8-0.8s0.8,0.4,0.8,0.8C376.1,1804.5,375.8,1804.8,375.3,1804.8 M379,1799.7h1.3v3.9H379V1799.7z M377.2,1799.7h1.3v3.9   h-1.3V1799.7z M373.8,1799.7h3v1.6h-3V1799.7z"/>
        </g>
        <path id="line3_12" fill="#0572B9" d="M622.7,933.5c0,3.7,0,7.3,0,11h5.5c0-3.7,0-7.3,0-11C626.3,933.5,624.5,933.5,622.7,933.5z"/>
        <linearGradient id="line8A_5-line14_19_00000166677931834504794730000002033116709876654981_" gradientUnits="userSpaceOnUse" x1="12848.7148" y1="-31532.9492" x2="12861.9805" y2="-31532.9492" gradientTransform="matrix(0.4123 0.4123 -0.4123 0.4123 -17939.4277 8501.9414)">
            <stop offset="0.2212" style="stop-color:#D14A43"/>
            <stop offset="0.8275" style="stop-color:#89CDCF"/>
        </linearGradient>
        <polygon id="line8A_5-line14_19" fill="url(#line8A_5-line14_19_00000166677931834504794730000002033116709876654981_)" points="  362.5,806.4 355.9,799.8 360.5,795.2 367.1,801.8 "/>
        <linearGradient id="line6_15-line14_15_00000138548015235901004150000001185439252827328646_" gradientUnits="userSpaceOnUse" x1="50764.3711" y1="-73229.3984" x2="50776" y2="-73229.3984" gradientTransform="matrix(0.5823 -0.2564 0.235 0.5337 -11745.6074 53353)">
            <stop offset="0.2599" style="stop-color:#D14A43"/>
            <stop offset="0.6037" style="stop-color:#E06433"/>
            <stop offset="1" style="stop-color:#EF7E24"/>
        </linearGradient>
        <polygon id="line6_15-line14_15" fill="url(#line6_15-line14_15_00000138548015235901004150000001185439252827328646_)" points="  614,1254.3 606.1,1257.8 603.4,1251.9 611.4,1248.4 "/>
        <linearGradient id="line14_8-lineD2_21_00000092443271534756136340000015746796731492624271_" gradientUnits="userSpaceOnUse" x1="30378.2988" y1="-64525.0352" x2="30389.9707" y2="-64525.0352" gradientTransform="matrix(0.5831 0 0 0.5831 -16416.7363 38685.3008)">
            <stop offset="0" style="stop-color:#D14A43"/>
            <stop offset="0.3642" style="stop-color:#D94757"/>
            <stop offset="1" style="stop-color:#E94282"/>
        </linearGradient>
        <rect id="line14_8-lineD2_21" x="1295.6" y="1057.5" fill="url(#line14_8-lineD2_21_00000092443271534756136340000015746796731492624271_)" width="8.4" height="6.5"/>
        <linearGradient id="line1_2-line14_2_00000102538970088176685950000016033303338392868736_" gradientUnits="userSpaceOnUse" x1="92809.2812" y1="-63645.2266" x2="92827.5078" y2="-63645.2266" gradientTransform="matrix(-0.5831 0 0 0.5831 55355.7383 37640.7852)">
            <stop offset="0.2068" style="stop-color:#D14A43"/>
            <stop offset="0.8728" style="stop-color:#D14A43"/>
        </linearGradient>
        <rect id="line1_2-line14_2" x="1227.6" y="526" fill="url(#line1_2-line14_2_00000102538970088176685950000016033303338392868736_)" width="10.8" height="6.5"/>
        <linearGradient id="line9_4-line14_28_00000048470074125416273030000006435706268787549617_" gradientUnits="userSpaceOnUse" x1="106431.1406" y1="-29643.5625" x2="106442.0859" y2="-29643.5625" gradientTransform="matrix(-0.3181 -0.551 0.505 -0.2916 49645.6914 50324.8477)">
            <stop offset="0" style="stop-color:#D14A43"/>
            <stop offset="2.829093e-02" style="stop-color:#CF4E47"/>
            <stop offset="0.3336" style="stop-color:#C17673"/>
            <stop offset="0.6081" style="stop-color:#B69492"/>
            <stop offset="0.8395" style="stop-color:#AFA6A5"/>
            <stop offset="1" style="stop-color:#ADACAC"/>
        </linearGradient>
        <polygon id="line9_4-line14_28" fill="url(#line9_4-line14_28_00000048470074125416273030000006435706268787549617_)" points="  819.1,317.4 823.5,325 817.9,328.3 813.5,320.7 "/>
        <linearGradient id="line14_23-lineD2_11_00000088124332347357945580000007091823835667318692_" gradientUnits="userSpaceOnUse" x1="101578.5156" y1="-55041.8945" x2="101583.8594" y2="-55041.8945" gradientTransform="matrix(0 -0.5831 0.5831 0 32546.7793 59753.5312)">
            <stop offset="0" style="stop-color:#D14A43"/>
            <stop offset="1" style="stop-color:#E94282"/>
        </linearGradient>
        <rect id="line14_23-lineD2_11" x="448.6" y="518.4" fill="url(#line14_23-lineD2_11_00000088124332347357945580000007091823835667318692_)" width="6.5" height="6.6"/>
        <g id="Aero_SVO">
            <line fill="none" stroke="#AC545B" stroke-miterlimit="10" x1="738" y1="567.9" x2="276.9" y2="1029.1"/>

            <rect id="white-base-28_82_" x="300.3" y="1004.8" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -622.8547 506.9763)" fill="#FFFFFF" width="0.5" height="1.1"/>

            <rect id="white-base-28_81_" x="304.6" y="1000.5" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -618.5547 508.7574)" fill="#FFFFFF" width="0.5" height="1.1"/>

            <rect id="white-base-28_78_" x="362" y="942.9" transform="matrix(0.9703 -0.2419 0.2419 0.9703 -217.5226 115.6551)" fill="#FFFFFF" width="0.5" height="1.6"/>

            <rect id="white-base-28_77_" x="367.8" y="937" transform="matrix(0.9744 -0.225 0.225 0.9744 -201.5906 106.8592)" fill="#FFFFFF" width="0.5" height="1.8"/>
            <rect id="white-base-28_76_" x="523" y="781.5" fill="#FFFFFF" width="2.2" height="0.5"/>
            <rect id="white-base-28_75_" x="534.9" y="769.7" fill="#FFFFFF" width="2.3" height="0.5"/>

            <rect id="white-base-28_74_" x="614.9" y="690.3" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -308.3285 637.3159)" fill="#FFFFFF" width="0.5" height="1.1"/>

            <rect id="white-base-28_73_" x="619.1" y="686" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -304.0578 639.0262)" fill="#FFFFFF" width="0.5" height="1.1"/>
            <path fill="none" stroke="#AC545B" stroke-miterlimit="10" d="M260.1,1029.1c5.8,5.8,11,5.8,16.8,0"/>
            <line fill="none" stroke="#AC545B" stroke-miterlimit="10" x1="34" y1="790.1" x2="34" y2="554.1"/>
            <rect id="white-base-28_88_" x="33.5" y="691" fill="#FFFFFF" width="1.1" height="0.5"/>
            <rect id="white-base-28_87_" x="33.5" y="692.5" fill="#FFFFFF" width="1.1" height="0.5"/>
            <path fill="none" stroke="#AC545B" stroke-miterlimit="10" d="M260.1,1029.1C188,957,115,884,43.1,812.2"/>
            <rect id="white-base-28_85_" x="46.6" y="814.8" fill="#FFFFFF" width="0.5" height="2.3"/>
            <rect id="white-base-28_83_" x="188.4" y="956.6" fill="#FFFFFF" width="0.5" height="2.3"/>
            <path fill="none" stroke="#AC545B" stroke-miterlimit="10" d="M34,790.1c0,9.7,2.3,15.2,9.1,22.1"/>
            <rect id="white-base-28_86_" x="40.7" y="808.7" fill="#FFFFFF" width="0.5" height="2.3"/>
            <path fill="none" stroke="#AC545B" stroke-miterlimit="10" d="M34,554.1c0-12.4,5.6-18,17.9-18h1.4"/>
            <rect id="white-base-28_90_" x="46.6" y="536" fill="#FFFFFF" width="0.5" height="1.2"/>
            <rect id="white-base-28_89_" x="40.6" y="537.6" fill="#FFFFFF" width="0.5" height="1.8"/>
            <line fill="none" stroke="#AC545B" stroke-miterlimit="10" x1="744" y1="130.3" x2="744" y2="553.5"/>
            <rect id="white-base-28_70_" x="743.5" y="514.2" fill="#FFFFFF" width="1.1" height="0.5"/>
            <rect id="white-base-28_69_" x="743.5" y="508.2" fill="#FFFFFF" width="1.1" height="0.5"/>
            <rect id="white-base-28_66_" x="743.5" y="351.7" fill="#FFFFFF" width="1.1" height="0.5"/>
            <rect id="white-base-28_65_" x="743.5" y="334.2" fill="#FFFFFF" width="1.1" height="0.5"/>
            <path fill="none" stroke="#AC545B" stroke-miterlimit="10" d="M738,567.9c4.5-4.5,6-8.1,6-14.4"/>
            <rect id="white-base-28_72_" x="741.6" y="561.5" fill="#FFFFFF" width="2.2" height="0.5"/>
            <g>
                <g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path fill="#201600" d="M205.7,60.6l3.8,9.8h-1.7L207,68h-3.9l-0.9,2.5h-1.6l3.9-9.8h1.2V60.6z                               M205,62.8l-1.5,4h3L205,62.8L205,62.8z"/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path fill="#201600" d="M209.7,69.6l0.9-0.9c0.3,0.3,0.8,0.6,1.6,0.6c1.1,0,1.9-0.8,2-2h-2.7v-1.1h2.6                              c-0.2-1-1-1.7-2-1.7c-0.7,0-1.2,0.3-1.6,0.6l-0.9-0.8c0.5-0.5,1.4-1,2.4-1c1.9,0,3.4,1.5,3.4,3.6                              s-1.5,3.6-3.4,3.6C211.1,70.6,210.2,70.2,209.7,69.6"/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path fill="#201600" d="M216.8,63.5h1.4v1.1l0,0c0.4-0.7,1.2-1.2,2.3-1.2c1.9,0,3.2,1.5,3.2,3.6                              c0,2.1-1.4,3.6-3.2,3.6c-1,0-1.8-0.5-2.3-1.2l0,0V73h-1.4V63.5z M220.2,69.4c1.2,0,2.1-1,2.1-2.4                              s-0.9-2.4-2.1-2.4c-1.2,0-2.1,1-2.1,2.4C218.2,68.3,219,69.4,220.2,69.4"/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path fill="#201600" d="M224.5,67c0-2.1,1.5-3.6,3.4-3.6s3.4,1.5,3.4,3.6s-1.5,3.6-3.4,3.6                              S224.5,69.1,224.5,67 M230,67c0-1.4-0.8-2.4-2.1-2.4c-1.2,0-2.1,1-2.1,2.4s0.8,2.4,2.1,2.4                              S230,68.4,230,67"/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <polygon fill="#201600" points="238.4,70.4 237,70.4 237,64.6 234,64.6 234,70.4 232.6,70.4                               232.6,63.5 238.4,63.5                             "/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path fill="#201600" d="M239.6,67c0-2.1,1.5-3.6,3.4-3.6s3.4,1.5,3.4,3.6s-1.5,3.6-3.4,3.6                              S239.6,69.1,239.6,67 M245.1,67c0-1.4-0.8-2.4-2.1-2.4c-1.2,0-2.1,1-2.1,2.4s0.8,2.4,2.1,2.4                              S245.1,68.4,245.1,67"/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path fill="#201600" d="M247.7,63.5h1.4v1.1l0,0c0.4-0.7,1.2-1.2,2.3-1.2c1.9,0,3.2,1.5,3.2,3.6                              c0,2.1-1.4,3.6-3.2,3.6c-1,0-1.8-0.5-2.3-1.2l0,0V73h-1.4V63.5z M251.2,69.4c1.2,0,2.1-1,2.1-2.4                              s-0.9-2.4-2.1-2.4c-1.2,0-2.1,1-2.1,2.4C249.1,68.3,249.9,69.4,251.2,69.4"/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <polygon fill="#201600" points="255.1,63.5 260.8,63.5 260.4,64.6 258.5,64.6 258.5,70.4 257.2,70.4                               257.2,64.6 255.1,64.6                             "/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <polygon fill="#201600" points="203.2,81.8 206.6,81.8 206.6,73.2 208.1,73.2 208.1,81.8 211.5,81.8                               211.5,73.2 213,73.2 213,83.1 201.8,83.1 201.8,73.2 203.2,73.2                             "/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path fill="#201600" d="M214.5,79.6c0-2.2,1.5-3.6,3.3-3.6s3.3,1.2,3.3,3.9V80h-5.2                              c0.2,1.2,1.1,1.9,2.2,1.9c0.6,0,1.2-0.2,1.8-0.7l0.9,0.9c-0.7,0.7-1.7,1-2.8,1                              C216.1,83.2,214.5,81.8,214.5,79.6 M217.8,77.2c-1.1,0-1.8,0.8-1.9,1.8h3.8                              C219.6,78.1,218.9,77.2,217.8,77.2"/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path fill="#201600" d="M222.3,76.1h1.4v1.1l0,0c0.4-0.7,1.2-1.2,2.3-1.2c1.9,0,3.2,1.5,3.2,3.6                              s-1.4,3.6-3.2,3.6c-1,0-1.8-0.5-2.3-1.2l0,0v3.6h-1.4V76.1z M225.7,82c1.2,0,2.1-1,2.1-2.4                              s-0.9-2.4-2.1-2.4c-1.2,0-2.1,1-2.1,2.4C223.7,81,224.5,82,225.7,82"/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path fill="#201600" d="M230,79.6c0-2.2,1.5-3.6,3.3-3.6s3.3,1.2,3.3,3.9V80h-5.2                              c0.2,1.2,1.1,1.9,2.2,1.9c0.6,0,1.2-0.2,1.8-0.7l0.9,0.9c-0.7,0.7-1.7,1-2.8,1                              C231.6,83.2,230,81.8,230,79.6 M233.4,77.2c-1.1,0-1.8,0.8-1.9,1.8h3.8                              C235.1,78.1,234.4,77.2,233.4,77.2"/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <polygon fill="#201600" points="242.1,81.3 242.1,81.3 244,76.1 245.4,76.1 247.1,83.1 245.7,83.1                               244.5,78 244.5,78 242.7,83.1 241.4,83.1 239.7,78.1 239.7,78.1 238.6,83.1 237.2,83.1 238.9,76.1                               240.3,76.1                             "/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path fill="#201600" d="M247.6,79.6c0-2.2,1.5-3.6,3.3-3.6s3.3,1.2,3.3,3.9V80H249                              c0.2,1.2,1.1,1.9,2.2,1.9c0.6,0,1.2-0.2,1.8-0.7l0.9,0.9c-0.7,0.7-1.7,1-2.8,1                              C249.2,83.2,247.6,81.8,247.6,79.6 M251,77.2c-1.1,0-1.8,0.8-1.9,1.8h3.8C252.8,78.1,252,77.2,251,77.2                              "/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <polygon fill="#201600" points="254.6,76.1 260.4,76.1 260,77.3 258.1,77.3 258.1,83.1 256.7,83.1                               256.7,77.3 254.6,77.3                             "/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path fill="#201600" d="M264.3,78.4c1.5,0,2.6,0.8,2.6,2.3s-1.1,2.3-2.6,2.3h-3.2v-6.9h1.4v2.3                              C262.5,78.4,264.3,78.4,264.3,78.4z M265.5,80.7c0-0.9-0.7-1.2-1.5-1.2h-1.5V82h1.5                              C264.8,82,265.5,81.6,265.5,80.7"/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path fill="#201600" d="M267.5,79.6c0-2.2,1.5-3.6,3.3-3.6s3.3,1.2,3.3,3.9V80h-5.2                              c0.2,1.2,1.1,1.9,2.2,1.9c0.6,0,1.2-0.2,1.8-0.7l0.9,0.9c-0.7,0.7-1.7,1-2.8,1                              C269.1,83.2,267.5,81.8,267.5,79.6 M270.9,77.2c-1.1,0-1.8,0.8-1.9,1.8h3.8                              C272.6,78.1,271.9,77.2,270.9,77.2"/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path fill="#201600" d="M278.7,76.1c1.3,0,2.1,0.8,2.1,1.8c0,0.6-0.4,1.2-0.9,1.5l0,0                              c0.8,0.2,1.3,0.9,1.3,1.6c0,1.2-0.9,2-2.2,2h-3.6v-6.9H278.7z M279.4,78.1c0-0.5-0.4-0.8-0.9-0.8h-1.8                              V79h1.8C279,78.9,279.4,78.6,279.4,78.1 M279.7,81c0-0.6-0.5-1-1.1-1h-1.9v2h1.9                              C279.2,82,279.7,81.6,279.7,81"/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path fill="#201600" d="M281.9,79.6c0-2.1,1.5-3.6,3.4-3.6s3.4,1.5,3.4,3.6s-1.5,3.6-3.4,3.6                              S281.9,81.7,281.9,79.6 M287.4,79.6c0-1.4-0.8-2.4-2.1-2.4c-1.2,0-2.1,1-2.1,2.4s0.8,2.4,2.1,2.4                              C286.5,82,287.4,81,287.4,79.6"/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </g>
            </g>
            <path fill="#AC545B" d="M200.5,105.2l1.2-1.8v-0.1v-0.9c0-0.2,0.1-0.3,0.3-0.3s0.3,0.1,0.3,0.3v0.9v0.1l1.2,1.8v0.1l-0.3,0.4h-0.1   l-0.8-1.1l0,0v1.4c0,0,0,0.1,0.1,0.1h0.1c0,0,0.1,0,0.1,0.1v0.2c0,0,0,0.1-0.1,0.1h-1.1c0,0-0.1,0-0.1-0.1v-0.2c0,0,0-0.1,0.1-0.1   h0.1c0,0,0.1,0,0.1-0.1v-1.4l0,0l-0.8,1.1h-0.1L200.5,105.2L200.5,105.2 M203.7,105.3L203.7,105.3l-0.4,0.4v0.1l1.3,0.4l0,0   l-1.3,0.4h-0.1v-0.1c0,0,0,0-0.1,0l-0.2,0.1c0,0,0,0,0,0.1l0.3,1c0,0,0,0,0.1,0l0.2-0.1c0,0,0,0,0-0.1v-0.1v-0.1l1.3-0.4l0,0   L204,108v0.1l0.5,0.2h0.1l1.3-1.6l0.1-0.1l0.9-0.3c0.2-0.1,0.3-0.2,0.2-0.4c-0.1-0.2-0.2-0.3-0.4-0.2l-0.9,0.3h-0.1L203.7,105.3    M204.6,108.5C204.6,108.5,204.6,108.4,204.6,108.5l-0.5-0.2H204v1.3l0,0l-0.8-1.1v-0.1l0.1-0.1v-0.1l-0.1-0.2h-0.1l-0.9,0.6v0.1   l0.1,0.2h0.1l0.1-0.1h0.1l0.8,1.1l0,0l-1.3-0.4H202v0.5v0.1l2,0.7c0,0,0.1,0,0.1,0.1l0.5,0.8c0.1,0.1,0.3,0.2,0.5,0.1   c0.1-0.1,0.2-0.3,0.1-0.5l-0.5-0.8v-0.1L204.6,108.5 M201.9,110.3C201.9,110.3,201.9,110.2,201.9,110.3l0.1-0.6c0,0,0-0.1-0.1,0   l-1.3,0.4l0,0l0.8-1.1h0.1l0.1,0.1h0.1l0.1-0.2v-0.1l-0.9-0.6h-0.1l-0.1,0.2v0.1l0.1,0.1v0.1l-0.8,1.1l0,0v-1.3c0,0,0-0.1-0.1,0   l-0.5,0.2c0,0-0.1,0-0.1,0.1l-0.1,2.1v0.1l-0.5,0.7c-0.1,0.1-0.1,0.4,0.1,0.5c0.1,0.1,0.4,0.1,0.5-0.1l0.5-0.8l0.1-0.1L201.9,110.3    M199.3,108.2C199.3,108.2,199.4,108.2,199.3,108.2l0.6-0.1c0,0,0,0,0-0.1l-0.8-1.1l0,0l1.3,0.4c0,0,0,0,0,0.1v0.1v0.1l0.2,0.1h0.1   l0.3-1v-0.1l-0.2-0.1h-0.1v0.1c0,0,0,0-0.1,0l-1.3-0.4l0,0l1.3-0.4c0,0,0,0,0-0.1l-0.3-0.4h-0.1l-2,0.6h-0.1l-0.9-0.3   c-0.2-0.1-0.4,0-0.4,0.2c-0.1,0.2,0,0.4,0.2,0.4l0.9,0.3c0,0,0.1,0,0.1,0.1L199.3,108.2"/>
            <path fill="#48443E" d="M215.3,46v-7.5V30c0-1-0.8-1.9-1.9-1.9c-1,0-1.9,0.8-1.9,1.9v8.6l-12.6,6.8v2.8l12.6-2.1v5.8l-4.7,3V57   l6.5-1.2l6.5,1.2v-2.1l-4.7-3V46H215.3z"/>
            <polygon fill="#48443E" points="217.1,39.5 217.1,46.3 227.8,48.1 227.8,45.3  "/>
            <path fill="none" stroke="#AC545B" stroke-miterlimit="10" d="M744,130.3c0-15.6-7-22.7-22.7-22.7H208.4"/>
            <path fill="#FFFFFF" d="M742.8,328c0-0.7,0.5-1.2,1.2-1.2s1.2,0.6,1.2,1.2c0,0.7-0.5,1.2-1.2,1.2   C743.3,329.3,742.8,328.7,742.8,328"/>
            <path fill="#AC545B" d="M57.1,533.2l1.2-1.8v-0.1v-0.9c0-0.2,0.1-0.3,0.3-0.3s0.3,0.1,0.3,0.3v0.9v0.1l1.2,1.8v0.1l-0.3,0.4h-0.1   l-0.8-1.1l0,0v1.4c0,0,0,0.1,0.1,0.1h0.1c0,0,0.1,0,0.1,0.1v0.2c0,0,0,0.1-0.1,0.1H58c0,0-0.1,0-0.1-0.1v-0.2c0,0,0-0.1,0.1-0.1   h0.1c0,0,0.1,0,0.1-0.1v-1.4l0,0l-0.8,1.1h-0.1L57.1,533.2C57.1,533.3,57.1,533.2,57.1,533.2 M60.4,533.3   C60.3,533.3,60.3,533.4,60.4,533.3l-0.4,0.4v0.1l1.3,0.4l0,0l-1.3,0.4h-0.1v-0.1c0,0,0,0-0.1,0l-0.2,0.1c0,0,0,0,0,0.1l0.3,1   c0,0,0,0,0.1,0l0.2-0.1c0,0,0,0,0-0.1v-0.1v-0.1l1.3-0.4l0,0l-0.8,1.1v0.1l0.5,0.2h0.1l1.3-1.6l0.1-0.1l0.9-0.3   c0.2-0.1,0.3-0.2,0.2-0.4s-0.2-0.3-0.4-0.2l-0.9,0.3h-0.1L60.4,533.3 M61.2,536.5C61.2,536.5,61.2,536.4,61.2,536.5l-0.5-0.2h-0.1   v1.3l0,0l-0.8-1.1v-0.1l0.1-0.1v-0.1l-0.1-0.2h-0.1l-0.9,0.6v0.1L59,537h0.1l0.1-0.1h0.1l0.8,1.1l0,0l-1.3-0.4h-0.1v0.5v0.1l2,0.7   c0,0,0.1,0,0.1,0.1l0.5,0.8c0.1,0.1,0.3,0.2,0.5,0.1c0.1-0.1,0.2-0.3,0.1-0.5l-0.5-0.8v-0.1L61.2,536.5 M58.5,538.3   C58.5,538.3,58.5,538.2,58.5,538.3l0.1-0.6c0,0,0-0.1-0.1,0l-1.3,0.4l0,0L58,537h0.1l0.1,0.1h0.1l0.1-0.2v-0.1l-0.9-0.6h-0.1   l-0.1,0.2v0.1l0.1,0.1v0.1l-0.8,1.1l0,0v-1.3c0,0,0-0.1-0.1,0l-0.5,0.2c0,0-0.1,0-0.1,0.1l-0.1,2.1v0.1l-0.5,0.7   c-0.1,0.1-0.1,0.4,0.1,0.5c0.1,0.1,0.4,0.1,0.5-0.1l0.5-0.8l0.1-0.1L58.5,538.3 M55.9,536.2C55.9,536.3,56,536.3,55.9,536.2   l0.6-0.1c0,0,0,0,0-0.1l-0.8-1.1l0,0l1.3,0.4c0,0,0,0,0,0.1v0.1v0.1l0.2,0.1h0.1l0.3-1v-0.1l-0.2-0.1h-0.1v0.1c0,0,0,0-0.1,0   l-1.3-0.4l0,0l1.3-0.4c0,0,0,0,0-0.1l-0.3-0.4h-0.1l-2,0.6h-0.1l-0.9-0.3c-0.2-0.1-0.4,0-0.4,0.2c-0.1,0.2,0,0.4,0.2,0.4l0.9,0.3   c0,0,0.1,0,0.1,0.1L55.9,536.2"/>
            <g>
                <g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path fill="#201600" d="M67.4,533l1.9,4.9h-0.8l-0.5-1.2h-1.9l-0.5,1.2h-0.8l1.9-4.9H67.4z M67,534.1                              l-0.7,2h1.5L67,534.1L67,534.1z"/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path fill="#201600" d="M69.7,537.5l0.4-0.4c0.2,0.2,0.4,0.3,0.8,0.3c0.6,0,0.9-0.4,1-1h-1.3v-0.6h1.3                              c-0.1-0.5-0.5-0.9-1-0.9c-0.4,0-0.6,0.2-0.8,0.3l-0.4-0.4c0.3-0.3,0.7-0.5,1.2-0.5c1,0,1.7,0.8,1.7,1.8                              c0,1.1-0.7,1.8-1.7,1.8C70.4,538,70,537.8,69.7,537.5"/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path fill="#201600" d="M73.6,534.4h0.7v0.5l0,0c0.2-0.3,0.6-0.6,1.1-0.6c0.9,0,1.6,0.8,1.6,1.8                              c0,1.1-0.7,1.8-1.6,1.8c-0.5,0-0.9-0.3-1.1-0.6l0,0v1.8h-0.7V534.4z M75.3,537.4c0.6,0,1-0.5,1-1.2                              s-0.4-1.2-1-1.2s-1,0.5-1,1.2S74.7,537.4,75.3,537.4"/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path fill="#201600" d="M77.8,536.2c0-1.1,0.8-1.8,1.7-1.8c1,0,1.7,0.8,1.7,1.8c0,1.1-0.8,1.8-1.7,1.8                              C78.6,538,77.8,537.2,77.8,536.2 M80.6,536.2c0-0.7-0.4-1.2-1-1.2s-1,0.5-1,1.2s0.4,1.2,1,1.2                              S80.6,536.9,80.6,536.2"/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path fill="#201600" d="M81.9,537.5l0.4-0.4c0.2,0.2,0.4,0.3,0.8,0.3c0.6,0,0.9-0.4,1-1h-1.3v-0.6h1.3                              c-0.1-0.5-0.5-0.9-1-0.9c-0.4,0-0.6,0.2-0.8,0.3l-0.4-0.4c0.3-0.3,0.7-0.5,1.2-0.5c1,0,1.7,0.8,1.7,1.8                              c0,1.1-0.7,1.8-1.7,1.8C82.5,538,82.1,537.8,81.9,537.5"/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <polygon fill="#201600" points="86.4,535.8 86.9,535.8 87.9,534.4 88.7,534.4 87.5,536 88.9,537.9                               88.1,537.9 86.9,536.4 86.4,536.4 86.4,537.9 85.8,537.9 85.8,534.4 86.4,534.4                                                           "/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path fill="#201600" d="M89.2,536.2c0-1.1,0.7-1.8,1.7-1.8c0.5,0,1,0.2,1.2,0.5l-0.4,0.4                              c-0.2-0.1-0.4-0.3-0.8-0.3c-0.6,0-1,0.5-1,1.2s0.4,1.2,1,1.2c0.4,0,0.6-0.2,0.8-0.3l0.4,0.4                              c-0.3,0.3-0.7,0.5-1.2,0.5C90,538,89.2,537.2,89.2,536.2"/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <polygon fill="#201600" points="95.9,537.9 95.2,537.9 95.2,535 93.7,535 93.7,537.9 93,537.9                               93,534.4 95.9,534.4                             "/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path fill="#201600" d="M97.1,534.4h0.7v0.5l0,0c0.2-0.3,0.6-0.6,1.1-0.6c0.9,0,1.6,0.8,1.6,1.8                              c0,1.1-0.7,1.8-1.6,1.8c-0.5,0-0.9-0.3-1.1-0.6l0,0v1.8h-0.7V534.4z M98.8,537.4c0.6,0,1-0.5,1-1.2                              s-0.4-1.2-1-1.2s-1,0.5-1,1.2S98.2,537.4,98.8,537.4"/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path fill="#201600" d="M101.3,536.2c0-1.1,0.8-1.8,1.7-1.8c0.9,0,1.7,0.6,1.7,1.9v0.1H102                              c0.1,0.6,0.6,1,1.1,1c0.3,0,0.6-0.1,0.9-0.3l0.4,0.4c-0.4,0.3-0.8,0.5-1.4,0.5                              C102.1,538,101.3,537.3,101.3,536.2 M103,535c-0.5,0-0.9,0.4-1,0.9h1.9C103.9,535.4,103.5,535,103,535"/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path fill="#201600" d="M105.3,536.2c0-1.1,0.7-1.8,1.7-1.8c0.5,0,1,0.2,1.2,0.5l-0.4,0.4                              c-0.2-0.1-0.4-0.3-0.8-0.3c-0.6,0-1,0.5-1,1.2s0.4,1.2,1,1.2c0.4,0,0.6-0.2,0.8-0.3l0.4,0.4                              c-0.3,0.3-0.7,0.5-1.2,0.5C106.1,538,105.3,537.2,105.3,536.2"/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path fill="#201600" d="M108.8,536.2c0-1.1,0.7-1.8,1.7-1.8c0.5,0,1,0.2,1.2,0.5l-0.4,0.4                              c-0.2-0.1-0.4-0.3-0.8-0.3c-0.6,0-1,0.5-1,1.2s0.4,1.2,1,1.2c0.4,0,0.6-0.2,0.8-0.3l0.4,0.4                              c-0.3,0.3-0.7,0.5-1.2,0.5C109.6,538,108.8,537.2,108.8,536.2"/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path fill="#201600" d="M116.2,534.4c0.6,0,1.1,0.4,1.1,0.9c0,0.3-0.2,0.6-0.5,0.7l0,0                              c0.4,0.1,0.6,0.5,0.6,0.8c0,0.6-0.5,1-1.1,1h-1.8v-3.5L116.2,534.4L116.2,534.4z M116.5,535.4                              c0-0.3-0.2-0.4-0.5-0.4h-0.9v0.8h0.9C116.3,535.8,116.5,535.7,116.5,535.4 M116.7,536.9                              c0-0.3-0.3-0.5-0.6-0.5h-0.9v1h0.9C116.4,537.4,116.7,537.2,116.7,536.9"/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <polygon fill="#201600" points="121.1,537.3 122.8,537.3 122.8,533 123.5,533 123.5,537.3 125.2,537.3                               125.2,533 125.9,533 125.9,537.9 120.4,537.9 120.4,533 121.1,533                             "/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path fill="#201600" d="M127,536.2c0-1.1,0.8-1.8,1.7-1.8s1.7,0.6,1.7,1.9v0.1h-2.6                              c0.1,0.6,0.6,1,1.1,1c0.3,0,0.6-0.1,0.9-0.3l0.4,0.4c-0.4,0.3-0.8,0.5-1.4,0.5                              C127.8,538,127,537.3,127,536.2 M128.7,535c-0.5,0-0.9,0.4-1,0.9h1.9C129.5,535.4,129.2,535,128.7,535"/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path fill="#201600" d="M131.3,534.4h0.7v0.5l0,0c0.2-0.3,0.6-0.6,1.1-0.6c0.9,0,1.6,0.8,1.6,1.8                              c0,1.1-0.7,1.8-1.6,1.8c-0.5,0-0.9-0.3-1.1-0.6l0,0v1.8h-0.7V534.4z M133,537.4c0.6,0,1-0.5,1-1.2                              s-0.4-1.2-1-1.2s-1,0.5-1,1.2C131.9,536.9,132.4,537.4,133,537.4"/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path fill="#201600" d="M135.4,536.2c0-1.1,0.8-1.8,1.7-1.8s1.7,0.6,1.7,1.9v0.1h-2.6                              c0.1,0.6,0.6,1,1.1,1c0.3,0,0.6-0.1,0.9-0.3l0.4,0.4c-0.4,0.3-0.8,0.5-1.4,0.5                              C136.2,538,135.4,537.3,135.4,536.2 M137.1,535c-0.5,0-0.9,0.4-1,0.9h1.9                              C138,535.4,137.7,535,137.1,535"/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <polygon fill="#201600" points="141.8,537 141.9,537 142.8,534.4 143.5,534.4 144.3,537.9 143.6,537.9                               143,535.4 143,535.4 142.2,537.9 141.5,537.9 140.7,535.4 140.7,535.4 140.1,537.9 139.4,537.9                               140.2,534.4 141,534.4                             "/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path fill="#201600" d="M144.9,536.2c0-1.1,0.8-1.8,1.7-1.8s1.7,0.6,1.7,1.9v0.1h-2.6                              c0.1,0.6,0.6,1,1.1,1c0.3,0,0.6-0.1,0.9-0.3l0.4,0.4c-0.4,0.3-0.8,0.5-1.4,0.5                              C145.7,538,144.9,537.3,144.9,536.2 M146.6,535c-0.5,0-0.9,0.4-1,0.9h1.9                              C147.5,535.4,147.1,535,146.6,535"/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <polygon fill="#201600" points="148.7,534.4 151.6,534.4 151.4,535 150.5,535 150.5,537.9 149.8,537.9                               149.8,535 148.7,535                             "/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path fill="#201600" d="M153.9,535.6c0.8,0,1.3,0.4,1.3,1.2c0,0.7-0.5,1.2-1.3,1.2h-1.6v-3.5h0.7v1.1                              H153.9z M154.5,536.7c0-0.4-0.4-0.6-0.7-0.6H153v1.2h0.8C154.1,537.4,154.5,537.2,154.5,536.7"/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path fill="#201600" d="M155.8,536.2c0-1.1,0.8-1.8,1.7-1.8s1.7,0.6,1.7,1.9v0.1h-2.6                              c0.1,0.6,0.6,1,1.1,1c0.3,0,0.6-0.1,0.9-0.3l0.4,0.4c-0.4,0.3-0.8,0.5-1.4,0.5                              C156.6,538,155.8,537.3,155.8,536.2 M157.5,535c-0.5,0-0.9,0.4-1,0.9h1.9                              C158.4,535.4,158,535,157.5,535"/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path fill="#201600" d="M161.8,534.4c0.6,0,1.1,0.4,1.1,0.9c0,0.3-0.2,0.6-0.5,0.7l0,0                              c0.4,0.1,0.6,0.5,0.6,0.8c0,0.6-0.5,1-1.1,1h-1.8v-3.5L161.8,534.4L161.8,534.4z M162.1,535.4                              c0-0.3-0.2-0.4-0.5-0.4h-0.9v0.8h0.9C161.9,535.8,162.1,535.7,162.1,535.4 M162.3,536.9                              c0-0.3-0.3-0.5-0.6-0.5h-0.9v1h0.9C162,537.4,162.3,537.2,162.3,536.9"/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <g>
                                    <g>
                                        <g>
                                            <g>
                                                <g>
                                                    <g>
                                                        <g>
                                                            <g>
                                                                <g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <g>
                                                                                    <g>
                                                                                        <g>
                                                                                            <g>
                                                                                                <g>
                                                                                                    <g>
                                                                                                        <g>
                                                                                                            <g>
                                                                                                                <g>
                                                                                                                    <g>
                                                                                                                        <path fill="#201600" d="M163.7,536.2c0-1.1,0.8-1.8,1.7-1.8c1,0,1.7,0.8,1.7,1.8c0,1.1-0.8,1.8-1.7,1.8                              S163.7,537.2,163.7,536.2 M166.5,536.2c0-0.7-0.4-1.2-1-1.2s-1,0.5-1,1.2s0.4,1.2,1,1.2                              S166.5,536.9,166.5,536.2"/>
                                                                                                                    </g>
                                                                                                                </g>
                                                                                                            </g>
                                                                                                        </g>
                                                                                                    </g>
                                                                                                </g>
                                                                                            </g>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </g>
            </g>
            <path fill="#FFFFFF" d="M32.8,569.9c0-0.7,0.5-1.2,1.2-1.2s1.2,0.6,1.2,1.2c0,0.7-0.5,1.2-1.2,1.2   C33.3,571.1,32.8,570.6,32.8,569.9"/>
            <path fill="#FFFFFF" d="M32.8,616.1c0-0.7,0.5-1.2,1.2-1.2s1.2,0.6,1.2,1.2c0,0.7-0.5,1.2-1.2,1.2S32.8,616.7,32.8,616.1"/>
            <path fill="#FFFFFF" d="M32.8,671.3c0-0.7,0.5-1.2,1.2-1.2s1.2,0.6,1.2,1.2c0,0.7-0.5,1.2-1.2,1.2S32.8,672,32.8,671.3"/>
            <path fill="#FFFFFF" d="M32.8,712.8c0-0.7,0.5-1.2,1.2-1.2s1.2,0.6,1.2,1.2c0,0.7-0.5,1.2-1.2,1.2S32.8,713.4,32.8,712.8"/>
            <path fill="#FFFFFF" d="M32.8,770.1c0-0.7,0.5-1.2,1.2-1.2s1.2,0.6,1.2,1.2c0,0.7-0.5,1.2-1.2,1.2S32.8,770.8,32.8,770.1"/>
            <path fill="#FFFFFF" d="M111.7,881.9c0-0.7,0.5-1.2,1.2-1.2s1.2,0.6,1.2,1.2c0,0.7-0.5,1.2-1.2,1.2   C112.2,883.2,111.7,882.6,111.7,881.9"/>
            <path fill="#FFFFFF" d="M277.4,1027.3c0-0.7,0.5-1.2,1.2-1.2s1.2,0.6,1.2,1.2c0,0.7-0.5,1.2-1.2,1.2   C277.9,1028.6,277.4,1028,277.4,1027.3"/>
            <path fill="#FFFFFF" d="M435.3,869.4c0-0.7,0.5-1.2,1.2-1.2s1.2,0.6,1.2,1.2c0,0.7-0.5,1.2-1.2,1.2   C435.8,870.7,435.3,870.1,435.3,869.4"/>
            <path fill="#FFFFFF" d="M537.3,767.4c0-0.7,0.5-1.2,1.2-1.2s1.2,0.6,1.2,1.2c0,0.7-0.5,1.2-1.2,1.2   C537.8,768.7,537.3,768.1,537.3,767.4"/>
            <path fill="#FFFFFF" d="M600.2,704.5c0-0.7,0.5-1.2,1.2-1.2s1.2,0.6,1.2,1.2c0,0.7-0.5,1.2-1.2,1.2   C600.8,705.7,600.2,705.2,600.2,704.5"/>
            <path fill="#FFFFFF" d="M742.8,545c0-0.7,0.5-1.2,1.2-1.2s1.2,0.6,1.2,1.2c0,0.7-0.5,1.2-1.2,1.2S742.8,545.7,742.8,545"/>
            <path fill="#48443E" d="M205.6,94.6c0,1.7-1.2,2.9-3,2.9h-2v-5.9h2C204.4,91.7,205.6,92.9,205.6,94.6 M204.5,94.6   c0-1.3-0.8-2-1.9-2h-0.9v4h0.9C203.7,96.6,204.5,96,204.5,94.6"/>
            <polygon fill="#48443E" points="212.3,92.6 209.8,92.6 209.8,94.1 211.6,94.1 211.6,95 209.8,95 209.8,96.6 212.7,96.6 212.7,97.6    208.7,97.6 208.7,91.7 212.7,91.7  "/>
            <polygon fill="#48443E" points="219.5,92.6 216.9,92.6 216.9,94.3 218.9,94.3 218.5,95.3 216.9,95.3 216.9,97.6 215.8,97.6    215.8,91.7 219.5,91.7  "/>
            <path fill="#48443E" d="M266.6,93.1c0,0.5-0.2,0.9-0.6,1.2l0,0c0.8,0.3,1.2,0.8,1.2,1.5c0,0.9-0.7,1.7-2,1.7h-2.5v-5.9h2.1   C266,91.7,266.6,92.4,266.6,93.1 M265.5,93.3c0-0.5-0.4-0.7-0.9-0.7h-0.9v1.5h0.9C265.2,94.1,265.5,93.8,265.5,93.3 M266,95.8   c0-0.5-0.4-0.9-1.1-0.9h-1.2v1.8h1.2C265.7,96.7,266,96.3,266,95.8"/>
            <path fill="#838281" d="M241.3,92.3h1.7v1h-1.7V92.3z M243.4,92.3h1.7v1h-1.7V92.3z M245.4,94.1v-1.7h0.7l0.7,1.7H245.4    M246.3,91.6H241v3.8h6.6v-0.7L246.3,91.6"/>
            <path fill="#838281" d="M240.2,93.4h-1.7v-1h1.7V93.4z M238.1,93.4h-1.7v-1h1.7V93.4z M236,94.1h-1.4l0.7-1.7h0.7V94.1 M235.2,91.6   l-1.3,3.1v0.7h6.6v-3.8L235.2,91.6"/>
            <line fill="none" stroke="#838281" stroke-width="0.5" stroke-miterlimit="10" x1="220.9" y1="96" x2="260.6" y2="96"/>

            <rect id="white-base-28_67_" x="743.8" y="356.4" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -34.8279 630.8114)" fill="#FFFFFF" width="0.5" height="2.1"/>

            <rect id="white-base-28_68_" x="743.7" y="365" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -40.8674 633.2303)" fill="#FFFFFF" width="0.5" height="1.9"/>
            <rect id="white-base-28_84_" x="182.4" y="950.6" fill="#FFFFFF" width="0.5" height="2.1"/>
            <rect id="white-base-28_119_" x="723.6" y="567.7" fill="#FFFFFF" width="16.3" height="12.1"/>
            <rect id="white-base-28_120_" x="741.8" y="492" fill="#FFFFFF" width="7" height="12"/>
            <rect id="white-base-28_118_" x="668.2" y="621" fill="#FFFFFF" width="18.2" height="12"/>
            <rect id="white-base-28_123_" x="740.5" y="303" fill="#FFFFFF" width="7" height="12"/>
            <rect id="white-base-28_122_" x="741.7" y="425" fill="#FFFFFF" width="4.6" height="12"/>
            <rect id="white-base-28_121_" x="740.3" y="531.2" fill="#FFFFFF" width="7" height="10.6"/>
            <rect id="white-base-28_116_" x="440.3" y="849.6" fill="#FFFFFF" width="13.9" height="13.4"/>

            <rect id="white-base-28_111_" x="202.4" y="967.8" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -630.3217 433.1504)" fill="#FFFFFF" width="10.6" height="19.3"/>

            <rect id="white-base-28_112_" x="290.7" y="1008.4" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -629.1694 504.3314)" fill="#FFFFFF" width="7" height="6.5"/>
            <rect id="white-base-28_117_" x="536.4" y="754" fill="#FFFFFF" width="16.8" height="10.6"/>
            <rect id="white-base-28_124_" x="503.3" y="799.6" fill="#FFFFFF" width="7" height="10.6"/>
            <polygon fill="#6CA1D9" points="460.8,322.5 461.1,321.8 462.6,321.8 462.6,327.2 461.8,327.2 461.8,322.5  "/>
            <path fill="#6CA1D9" d="M455.7,323.2c0,0.5-0.3,1-0.8,1.2l0,0c0.5,0.2,1,0.7,1,1.3c0,0.9-0.8,1.6-2,1.6s-2-0.6-2-1.6   c0-0.6,0.4-1.1,1-1.3l0,0c-0.5-0.2-0.8-0.7-0.8-1.2c0-0.8,0.7-1.5,1.8-1.5S455.7,322.3,455.7,323.2 M452.7,325.7   c0,0.5,0.4,0.9,1.2,0.9c0.7,0,1.2-0.4,1.2-0.9s-0.4-0.9-1.2-0.9C453.1,324.8,452.7,325.2,452.7,325.7 M454.9,323.2   c0-0.4-0.4-0.8-1-0.8c-0.7,0-1,0.4-1,0.8s0.4,0.8,1,0.8C454.6,324.1,454.9,323.7,454.9,323.2"/>
            <path fill="#6CA1D9" d="M456.5,326.5l0.5-0.5c0.4,0.3,0.8,0.5,1.4,0.5c0.7,0,1.2-0.5,1.2-1.1s-0.4-1-1.1-1c-0.3,0-0.7,0.1-0.9,0.3   l-0.7-0.1l0.2-2.9h3.3l-0.3,0.7h-2.4l-0.1,1.5l0,0c0.3-0.1,0.6-0.2,1-0.2c0.9,0,1.8,0.6,1.8,1.7c0,1-0.8,1.8-2,1.8   C457.6,327.3,456.9,327,456.5,326.5"/>
            <polygon fill="#6CA1D9" points="457.9,313.4 456.6,310.5 455.6,310.5 456.1,313.4  "/>
            <path fill="#6CA1D9" d="M460.3,313.9h-1.5l0,0h-4.1l-0.5-1h-1l0.5,1.5l-0.5,1.5h1l0.5-1h1.5l-0.5,3.4h1l1.5-3.4h2.2   c0.3,0,0.5-0.2,0.5-0.5C460.8,314.1,460.6,313.9,460.3,313.9"/>
            <path fill="#6CA1D9" d="M456.5,182.1l0.5-0.5c0.4,0.3,0.8,0.5,1.4,0.5c0.7,0,1.2-0.5,1.2-1.1s-0.4-1-1.1-1c-0.3,0-0.7,0.1-0.9,0.3   l-0.7-0.1l0.2-2.9h3.3l-0.3,0.7h-2.4l-0.1,1.5l0,0c0.3-0.1,0.6-0.2,1-0.2c0.9,0,1.8,0.6,1.8,1.7c0,1-0.8,1.8-2,1.8   C457.6,182.9,457,182.6,456.5,182.1"/>
            <path fill="#6CA1D9" d="M455.9,179.2c0,0.8-0.4,1.6-1.2,2.6l-0.8,1l-0.8-0.1l1.7-2.1l0,0c-0.3,0.2-0.6,0.3-1,0.3   c-0.9,0-1.7-0.7-1.7-1.8c0-1,0.8-1.8,2-1.8C455.1,177.3,455.9,178.1,455.9,179.2 M452.8,179.1c0,0.6,0.5,1.1,1.2,1.1   s1.2-0.5,1.2-1.1s-0.5-1.1-1.2-1.1S452.8,178.5,452.8,179.1"/>
            <polygon fill="#6CA1D9" points="449.3,178.1 449.6,177.4 451.1,177.4 451.1,182.8 450.3,182.8 450.3,178.1  "/>
            <polygon fill="#6CA1D9" points="446.8,178.1 447,177.4 448.5,177.4 448.5,182.8 447.7,182.8 447.7,178.1  "/>
            <polygon fill="#6CA1D9" points="454.5,169.6 453.2,166.7 452.3,166.7 452.7,169.6  "/>
            <path fill="#6CA1D9" d="M456.9,170.1h-1.5l0,0h-4.1l-0.5-1h-1l0.5,1.5l-0.5,1.5h1l0.5-1h1.5l-0.5,3.4h1l1.5-3.4h2.2   c0.3,0,0.5-0.2,0.5-0.5C457.4,170.3,457.2,170.1,456.9,170.1"/>
            <path fill="#6CA1D9" d="M450.1,162.4c0-0.2,0-0.5,0.1-0.7s0.2-0.4,0.4-0.6c0.2-0.2,0.4-0.3,0.6-0.4c0.2-0.1,0.5-0.1,0.7-0.1v0.5   c-0.7,0-1.3,0.6-1.3,1.3s0.6,1.3,1.3,1.3c0.6,0,1.1-0.4,1.2-0.9h4.2v-0.9h0.5v-1h-0.5V158l-1-1h-7.1v1h0.5v1.6h-0.5v3.2h0.8   C450.1,162.7,450.1,162.5,450.1,162.4 M451.9,163.2c-0.4,0-0.8-0.4-0.8-0.8c0-0.4,0.4-0.8,0.8-0.8s0.8,0.4,0.8,0.8   C452.7,162.8,452.3,163.2,451.9,163.2 M455.6,158h1.3v3.9h-1.3V158z M453.8,158h1.3v3.9h-1.3V158z M450.3,158h3v1.6h-3V158z"/>
            <path fill="none" stroke="#6CA1D9" stroke-miterlimit="10" d="M282.6,94.7h88.1c9.7,0,15.2,2.3,22.1,9.1l49.6,49.6"/>
            <polygon fill="#6CA1D9" points="313.9,169.7 312.6,166.8 311.6,166.8 312.1,169.7  "/>
            <path fill="#6CA1D9" d="M316.3,170.2h-1.5l0,0h-4.1l-0.5-1h-1l0.5,1.5l-0.5,1.5h1l0.5-1h1.5l-0.5,3.4h1l1.5-3.4h2.2   c0.3,0,0.5-0.2,0.5-0.5C316.8,170.4,316.6,170.2,316.3,170.2"/>
            <polygon fill="#6CA1D9" points="314.9,178 318.5,178 318.5,178.6 316.3,183.4 315.4,183.4 317.6,178.7 314.9,178.7  "/>
            <polygon fill="#6CA1D9" points="312.3,178.7 312.6,178 314.1,178 314.1,183.4 313.3,183.4 313.3,178.7  "/>
            <path fill="#6CA1D9" d="M311.7,179.4c0,0.5-0.3,1-0.8,1.2l0,0c0.5,0.2,1,0.7,1,1.3c0,0.9-0.8,1.6-2,1.6s-2-0.6-2-1.6   c0-0.6,0.4-1.1,1-1.3l0,0c-0.5-0.2-0.8-0.7-0.8-1.2c0-0.8,0.7-1.5,1.8-1.5S311.7,178.6,311.7,179.4 M308.7,181.9   c0,0.5,0.4,0.9,1.2,0.9c0.7,0,1.2-0.4,1.2-0.9s-0.4-0.9-1.2-0.9S308.7,181.5,308.7,181.9 M310.9,179.5c0-0.4-0.4-0.8-1-0.8   s-1,0.4-1,0.8c0,0.4,0.4,0.8,1,0.8S310.9,179.9,310.9,179.5"/>
            <polygon fill="#6CA1D9" points="221.2,122.7 221.4,122 222.9,122 222.9,127.4 222.2,127.4 222.2,122.7  "/>
            <path fill="#6CA1D9" d="M216.9,126.8l0.5-0.5c0.4,0.3,0.8,0.5,1.4,0.5c0.7,0,1.2-0.5,1.2-1.1s-0.4-1-1.1-1c-0.3,0-0.7,0.1-0.9,0.3   l-0.7-0.1l0.2-2.9h3.3l-0.3,0.7H218l-0.1,1.5l0,0c0.3-0.1,0.6-0.2,1-0.2c0.9,0,1.8,0.6,1.8,1.7c0,1-0.8,1.8-2,1.8   C217.9,127.5,217.3,127.2,216.9,126.8"/>
            <path fill="#6CA1D9" d="M216.1,123.4c0,0.5-0.3,1-0.8,1.2l0,0c0.5,0.2,1,0.7,1,1.3c0,0.9-0.8,1.6-2,1.6s-2-0.6-2-1.6   c0-0.6,0.4-1.1,1-1.3l0,0c-0.5-0.2-0.8-0.7-0.8-1.2c0-0.8,0.7-1.5,1.8-1.5S216.1,122.6,216.1,123.4 M213.1,125.9   c0,0.5,0.4,0.9,1.2,0.9c0.7,0,1.2-0.4,1.2-0.9s-0.4-0.9-1.2-0.9S213.1,125.5,213.1,125.9 M215.3,123.5c0-0.4-0.4-0.8-1-0.8   c-0.7,0-1,0.4-1,0.8s0.4,0.8,1,0.8C214.9,124.3,215.3,123.9,215.3,123.5"/>
            <polygon fill="#6CA1D9" points="208.5,126.3 209.5,126.3 209.5,127.4 209,128.5 208.5,128.5 208.9,127.4 208.5,127.4  "/>
            <polygon fill="#6CA1D9" points="204.7,122 208.3,122 208.3,122.6 206,127.4 205.1,127.4 207.4,122.7 204.7,122.7  "/>
            <polygon fill="#6CA1D9" points="202.1,122.7 202.4,122 203.9,122 203.9,127.4 203.1,127.4 203.1,122.7  "/>
            <path fill="#6CA1D9" d="M201.5,123.4c0,0.5-0.3,1-0.8,1.2l0,0c0.5,0.2,1,0.7,1,1.3c0,0.9-0.8,1.6-2,1.6s-2-0.6-2-1.6   c0-0.6,0.4-1.1,1-1.3l0,0c-0.5-0.2-0.8-0.7-0.8-1.2c0-0.8,0.7-1.5,1.8-1.5S201.5,122.6,201.5,123.4 M198.5,125.9   c0,0.5,0.4,0.9,1.2,0.9c0.7,0,1.2-0.4,1.2-0.9s-0.4-0.9-1.2-0.9S198.5,125.5,198.5,125.9 M200.7,123.5c0-0.4-0.4-0.8-1-0.8   c-0.7,0-1,0.4-1,0.8s0.4,0.8,1,0.8C200.4,124.3,200.7,123.9,200.7,123.5"/>
            <path fill="#6CA1D9" d="M198.5,118.9c0-0.2,0-0.5,0.1-0.7s0.2-0.4,0.4-0.6s0.4-0.3,0.6-0.4c0.2-0.1,0.5-0.1,0.7-0.1v0.5   c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3c0.6,0,1.1-0.4,1.2-0.9h4.2v-0.9h0.5v-1h-0.5v-2.9l-1-1h-7.1v1h0.5v1.6h-0.5v3.2h0.8   C198.5,119.2,198.5,119.1,198.5,118.9 M200.3,119.7c-0.4,0-0.8-0.4-0.8-0.8s0.4-0.8,0.8-0.8c0.4,0,0.8,0.4,0.8,0.8   C201.1,119.3,200.7,119.7,200.3,119.7 M204,114.5h1.3v3.9H204V114.5z M202.2,114.5h1.3v3.9h-1.3V114.5z M198.7,114.5h3v1.6h-3   V114.5z"/>
            <path fill="#6CA1D9" d="M291.6,104.4l0.5-0.5c0.4,0.3,0.8,0.5,1.4,0.5c0.7,0,1.2-0.5,1.2-1.1s-0.4-1-1.1-1c-0.3,0-0.7,0.1-0.9,0.3   l-0.7-0.1l0.2-2.9h3.3l-0.3,0.7h-2.4l-0.1,1.5l0,0c0.3-0.1,0.6-0.2,1-0.2c0.9,0,1.8,0.6,1.8,1.7c0,1-0.8,1.8-2,1.8   C292.7,105.1,292,104.8,291.6,104.4"/>
            <path fill="#6CA1D9" d="M291,101.5c0,0.8-0.4,1.6-1.2,2.6l-0.8,1l-0.8-0.1l1.7-2.1l0,0c-0.3,0.2-0.6,0.3-1,0.3   c-0.9,0-1.7-0.7-1.7-1.8c0-1,0.8-1.8,2-1.8C290.2,99.5,291,100.4,291,101.5 M287.9,101.4c0,0.6,0.5,1.1,1.2,1.1s1.2-0.5,1.2-1.1   s-0.5-1.1-1.2-1.1S287.9,100.8,287.9,101.4"/>
            <polygon fill="#6CA1D9" points="284.4,100.3 284.7,99.6 286.2,99.6 286.2,105 285.4,105 285.4,100.3  "/>
            <polygon fill="#6CA1D9" points="281.8,100.3 282.1,99.6 283.6,99.6 283.6,105 282.8,105 282.8,100.3  "/>
            <polygon fill="#6CA1D9" points="278.4,103.9 279.4,103.9 279.4,105 278.9,106.1 278.4,106.1 278.8,105 278.4,105  "/>
            <polygon fill="#6CA1D9" points="275.4,100.3 275.6,99.6 277.1,99.6 277.1,105 276.4,105 276.4,100.3  "/>
            <path fill="#6CA1D9" d="M272.7,103.1c1-1,1.3-1.4,1.3-1.9s-0.4-0.9-1-0.9s-1.1,0.3-1.4,0.6l-0.5-0.5c0.4-0.4,1.1-0.8,1.9-0.8   c1.2,0,1.8,0.8,1.8,1.6c0,0.7-0.5,1.3-1.3,2.1l-1.1,1.1l0,0h2.7l-0.3,0.7h-3.5v-0.6L272.7,103.1z"/>
            <polygon fill="#6CA1D9" points="347.3,64 347.6,63.3 349.1,63.3 349.1,68.7 348.3,68.7 348.3,64  "/>
            <path fill="#6CA1D9" d="M344.6,66.7c1-1,1.3-1.4,1.3-1.9s-0.4-0.9-1-0.9s-1.1,0.3-1.4,0.6L343,64c0.4-0.4,1.1-0.8,1.9-0.8   c1.2,0,1.8,0.8,1.8,1.6c0,0.7-0.5,1.3-1.3,2.1l-1.1,1.1l0,0h2.7l-0.3,0.7h-3.5V68L344.6,66.7z"/>
            <polygon fill="#6CA1D9" points="347.9,55.8 346.6,52.8 345.6,52.8 346.1,55.8  "/>
            <path fill="#6CA1D9" d="M350.3,56.3h-1.5l0,0h-4.1l-0.5-1h-1l0.5,1.5l-0.5,1.5h1l0.5-1h1.5l-0.5,3.4h1l1.5-3.4h2.2   c0.3,0,0.5-0.2,0.5-0.5C350.8,56.5,350.6,56.3,350.3,56.3"/>
            <path fill="#6CA1D9" d="M343.5,49.4c0-0.2,0-0.5,0.1-0.7s0.2-0.4,0.4-0.6c0.2-0.2,0.4-0.3,0.6-0.4c0.2-0.1,0.5-0.1,0.7-0.1V48   c-0.7,0-1.3,0.6-1.3,1.3s0.6,1.3,1.3,1.3c0.6,0,1.1-0.4,1.2-0.9h4.2v-0.9h0.5v-1h-0.5V45l-1-1h-7.1v1h0.5v1.6h-0.5v3.2h0.8   C343.5,49.7,343.5,49.5,343.5,49.4 M345.3,50.2c-0.4,0-0.8-0.4-0.8-0.8c0-0.4,0.4-0.8,0.8-0.8s0.8,0.4,0.8,0.8   C346.1,49.8,345.7,50.2,345.3,50.2 M349,45h1.3v3.9H349V45z M347.2,45h1.3v3.9h-1.3V45z M343.7,45h3v1.6h-3V45z"/>
            <path fill="#6CA1D9" d="M271.9,96.6c0-0.2,0-0.5,0.1-0.7s0.2-0.4,0.4-0.6c0.2-0.2,0.4-0.3,0.6-0.4s0.5-0.1,0.7-0.1v0.5   c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3c0.6,0,1.1-0.4,1.2-0.9h4.2v-0.9h0.5v-1h-0.5v-2.9l-1-1H271v1h0.5v1.6H271V97h0.8   C272,96.9,271.9,96.8,271.9,96.6 M273.7,97.4c-0.4,0-0.8-0.4-0.8-0.8s0.4-0.8,0.8-0.8s0.8,0.4,0.8,0.8   C274.5,97.1,274.2,97.4,273.7,97.4 M277.4,92.2h1.3v3.9h-1.3V92.2z M275.6,92.2h1.3v3.9h-1.3V92.2z M272.1,92.2h3v1.6h-3V92.2z"/>
            <path fill="none" stroke="#6CA1D9" stroke-miterlimit="10" d="M312.9,155.9c-0.2-8.9-2.6-14.2-9.1-20.8"/>
            <path fill="none" stroke="#6CA1D9" stroke-miterlimit="10" d="M303.8,135.1l-8.6-8.6c-6.9-6.9-12.3-9.1-22-9.1"/>
            <path fill="#6CA1D9" d="M309.5,162.5c0-0.2,0-0.5,0.1-0.7s0.2-0.4,0.4-0.6c0.2-0.2,0.4-0.3,0.6-0.4c0.2-0.1,0.5-0.1,0.7-0.1v0.5   c-0.7,0-1.3,0.6-1.3,1.3s0.6,1.3,1.3,1.3c0.6,0,1.1-0.4,1.2-0.9h4.2V162h0.5v-1h-0.5v-2.9l-1-1h-7.1v1h0.5v1.6h-0.5v3.2h0.8   C309.5,162.8,309.5,162.6,309.5,162.5 M311.3,163.3c-0.4,0-0.8-0.4-0.8-0.8c0-0.4,0.4-0.8,0.8-0.8s0.8,0.4,0.8,0.8   C312.1,162.9,311.7,163.3,311.3,163.3 M315,158.1h1.3v3.9H315V158.1z M313.2,158.1h1.3v3.9h-1.3V158.1z M309.7,158.1h3v1.6h-3   V158.1z"/>
            <path fill="#6CA1D9" d="M453.5,306.2c0-0.2,0-0.5,0.1-0.7s0.2-0.4,0.4-0.6c0.2-0.2,0.4-0.3,0.6-0.4s0.5-0.1,0.7-0.1v0.5   c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3c0.6,0,1.1-0.4,1.2-0.9h4.2v-0.9h0.5v-1h-0.5v-2.9l-1-1h-7.1v1h0.5v1.6h-0.5v3.2h0.8   C453.5,306.5,453.5,306.4,453.5,306.2 M455.3,307c-0.4,0-0.8-0.4-0.8-0.8s0.4-0.8,0.8-0.8s0.8,0.4,0.8,0.8S455.7,307,455.3,307    M459,301.8h1.3v3.9H459V301.8z M457.2,301.8h1.3v3.9h-1.3V301.8z M453.7,301.8h3v1.6h-3V301.8z"/>
            <path fill="none" stroke="#6CA1D9" stroke-miterlimit="10" d="M341.5,47.3h-0.8c-7.8,0-12.2,2.3-17.7,9.1l-23.3,29   c-5.5,6.9-9.9,9.1-17.7,9.1"/>
            <line fill="none" stroke="#6CA1D9" stroke-miterlimit="10" x1="208.4" y1="117.3" x2="297.2" y2="117.3"/>
            <path fill="none" stroke="#6CA1D9" stroke-miterlimit="10" d="M269.2,117.3h53.6c9.7,0,15.2,2.3,22,9.1l102.8,102.8l0,0   c6.9,6.9,9.1,12.3,9.1,22.1v9.1"/>
            <line fill="none" stroke="#6CA1D9" stroke-miterlimit="10" x1="456.8" y1="260.4" x2="456.8" y2="299.5"/>
            <rect id="white-base-28_130_" x="368.4" y="153.5" fill="#FFFFFF" width="25.5" height="14"/>
            <rect id="white-base-28_71_" x="743.4" y="555.5" fill="#FFFFFF" width="1.1" height="0.5"/>
        </g>
        <rect x="200.6" y="60.6" fill="none" width="88.2" height="25.8"/>
        <rect x="200.6" y="60.6" fill="none" width="88.2" height="25.8"/>
        <rect x="200.6" y="60.6" fill="none" width="88.2" height="25.8"/>
        <rect x="200.6" y="60.6" fill="none" width="88.2" height="25.8"/>
        <rect x="200.6" y="60.6" fill="none" width="88.2" height="25.8"/>
        <rect x="200.6" y="60.6" fill="none" width="88.2" height="25.8"/>
        <rect x="200.6" y="60.6" fill="none" width="88.2" height="25.8"/>
        <rect x="200.6" y="60.6" fill="none" width="88.2" height="25.8"/>
        <rect x="200.6" y="60.6" fill="none" width="88.2" height="25.8"/>
        <rect x="200.6" y="60.6" fill="none" width="88.2" height="25.8"/>
        <rect x="200.6" y="60.6" fill="none" width="88.2" height="25.8"/>
        <rect x="200.6" y="60.6" fill="none" width="88.2" height="25.8"/>
        <rect x="200.6" y="60.6" fill="none" width="88.2" height="25.8"/>
        <rect x="200.6" y="60.6" fill="none" width="88.2" height="25.8"/>
        <rect x="200.6" y="60.6" fill="none" width="88.2" height="25.8"/>
        <rect x="200.6" y="60.6" fill="none" width="88.2" height="25.8"/>
        <rect x="200.6" y="60.6" fill="none" width="88.2" height="25.8"/>
        <rect x="200.6" y="60.6" fill="none" width="88.2" height="25.8"/>
        <rect x="200.6" y="60.6" fill="none" width="88.2" height="25.8"/>
        <rect x="64.8" y="533" fill="none" width="102.4" height="12"/>
        <rect x="64.8" y="533" fill="none" width="102.4" height="12"/>
        <rect x="64.8" y="533" fill="none" width="102.4" height="12"/>
        <rect x="64.8" y="533" fill="none" width="102.4" height="12"/>
        <rect x="64.8" y="533" fill="none" width="102.4" height="12"/>
        <rect x="64.8" y="533" fill="none" width="102.4" height="12"/>
        <rect x="64.8" y="533" fill="none" width="102.4" height="12"/>
        <rect x="64.8" y="533" fill="none" width="102.4" height="12"/>
        <rect x="64.8" y="533" fill="none" width="102.4" height="12"/>
        <rect x="64.8" y="533" fill="none" width="102.4" height="12"/>
        <rect x="64.8" y="533" fill="none" width="102.4" height="12"/>
        <rect x="64.8" y="533" fill="none" width="102.4" height="12"/>
        <rect x="64.8" y="533" fill="none" width="102.4" height="12"/>
        <rect x="64.8" y="533" fill="none" width="102.4" height="12"/>
        <rect x="64.8" y="533" fill="none" width="102.4" height="12"/>
        <rect x="64.8" y="533" fill="none" width="102.4" height="12"/>
        <rect x="64.8" y="533" fill="none" width="102.4" height="12"/>
        <rect x="64.8" y="533" fill="none" width="102.4" height="12"/>
        <rect x="64.8" y="533" fill="none" width="102.4" height="12"/>
        <rect x="64.8" y="533" fill="none" width="102.4" height="12"/>
        <rect x="64.8" y="533" fill="none" width="102.4" height="12"/>
        <rect x="64.8" y="533" fill="none" width="102.4" height="12"/>
        <rect x="64.8" y="533" fill="none" width="102.4" height="12"/>
        <rect x="64.8" y="533" fill="none" width="102.4" height="12"/>
        <g>
            <path fill="none" stroke="#6CA1D9" stroke-miterlimit="10" d="M1276.7,1700.2c-15.6,0-22.7,7-22.7,22.7"/>
            <line fill="none" stroke="#6CA1D9" stroke-miterlimit="10" x1="1254.1" y1="1884" x2="1254.1" y2="1722.9"/>
            <line fill="none" stroke="#6CA1D9" stroke-miterlimit="10" x1="1276.5" y1="1700.2" x2="1289.6" y2="1700.2"/>
            <path fill="#6CA1D9" d="M1250,1896c0-0.2,0-0.5,0.1-0.7s0.2-0.4,0.4-0.6c0.2-0.2,0.4-0.3,0.6-0.4s0.5-0.1,0.7-0.1v0.5   c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3c0.6,0,1.1-0.4,1.2-0.9h4.2v-0.9h0.5v-1h-0.5v-2.9l-1-1h-7.1v1h0.5v1.6h-0.5v3.2h0.8   C1250.1,1896.3,1250,1896.2,1250,1896 M1251.8,1896.8c-0.4,0-0.8-0.4-0.8-0.8s0.4-0.8,0.8-0.8s0.8,0.4,0.8,0.8   S1252.3,1896.8,1251.8,1896.8 M1255.5,1891.6h1.3v3.9h-1.3V1891.6z M1253.8,1891.6h1.3v3.9h-1.3V1891.6z M1250.2,1891.6h3v1.6h-3   V1891.6z"/>
            <rect id="white-base-28_110_" x="1275.1" y="1695.8" fill="#FFFFFF" width="7" height="10.6"/>
            <path fill="#6CA1D9" d="M1293.4,1702.7c0-0.2,0-0.5,0.1-0.7s0.2-0.4,0.4-0.6c0.2-0.2,0.4-0.3,0.6-0.4s0.5-0.1,0.7-0.1v0.5   c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3c0.6,0,1.1-0.4,1.2-0.9h4.2v-0.9h0.5v-1h-0.5v-2.9l-1-1h-7.1v1h0.5v1.6h-0.5v3.2h0.8   C1293.4,1703,1293.4,1702.8,1293.4,1702.7 M1295.2,1703.5c-0.4,0-0.8-0.4-0.8-0.8s0.4-0.8,0.8-0.8s0.8,0.4,0.8,0.8   S1295.6,1703.5,1295.2,1703.5 M1298.9,1698.3h1.3v3.9h-1.3V1698.3z M1297.1,1698.3h1.3v3.9h-1.3V1698.3z M1293.6,1698.3h3v1.6h-3   V1698.3z"/>
            <path fill="#201600" d="M1276.3,1884.7l3.8,9.8h-1.7l-0.9-2.5h-3.9l-0.9,2.5h-1.6l3.9-9.8H1276.3z M1275.6,1886.9l-1.5,4h3   L1275.6,1886.9L1275.6,1886.9z"/>
            <path fill="#201600" d="M1280.3,1893.7l0.9-0.9c0.3,0.3,0.8,0.6,1.6,0.6c1.1,0,1.9-0.8,2-2h-2.7v-1.1h2.6c-0.2-1-1-1.7-2-1.7   c-0.7,0-1.2,0.3-1.6,0.6l-0.9-0.8c0.5-0.5,1.4-1,2.4-1c1.9,0,3.4,1.5,3.4,3.6s-1.5,3.6-3.4,3.6   C1281.6,1894.7,1280.8,1894.3,1280.3,1893.7"/>
            <path fill="#201600" d="M1287.4,1887.6h1.4v1.1l0,0c0.4-0.7,1.2-1.2,2.3-1.2c1.9,0,3.2,1.5,3.2,3.6s-1.4,3.6-3.2,3.6   c-1,0-1.8-0.5-2.3-1.2l0,0v3.6h-1.4V1887.6z M1290.8,1893.5c1.2,0,2.1-1,2.1-2.4s-0.9-2.4-2.1-2.4s-2.1,1-2.1,2.4   C1288.7,1892.4,1289.6,1893.5,1290.8,1893.5"/>
            <path fill="#201600" d="M1295.1,1891.1c0-2.1,1.5-3.6,3.4-3.6s3.5,1.5,3.5,3.6s-1.5,3.6-3.5,3.6   C1296.6,1894.7,1295.1,1893.2,1295.1,1891.1 M1300.6,1891.1c0-1.4-0.8-2.4-2.1-2.4c-1.2,0-2.1,1-2.1,2.4s0.8,2.4,2.1,2.4   C1299.8,1893.5,1300.6,1892.5,1300.6,1891.1"/>
            <polygon fill="#201600" points="1309,1894.5 1307.6,1894.5 1307.6,1888.7 1304.6,1888.7 1304.6,1894.5 1303.2,1894.5    1303.2,1887.6 1309,1887.6  "/>
            <path fill="#201600" d="M1310.2,1891.1c0-2.1,1.5-3.6,3.4-3.6s3.5,1.5,3.5,3.6s-1.5,3.6-3.5,3.6   C1311.7,1894.7,1310.2,1893.2,1310.2,1891.1 M1315.7,1891.1c0-1.4-0.8-2.4-2.1-2.4c-1.2,0-2.1,1-2.1,2.4s0.8,2.4,2.1,2.4   C1314.9,1893.5,1315.7,1892.5,1315.7,1891.1"/>
            <path fill="#201600" d="M1318.3,1887.6h1.4v1.1l0,0c0.4-0.7,1.2-1.2,2.3-1.2c1.9,0,3.2,1.5,3.2,3.6s-1.4,3.6-3.2,3.6   c-1,0-1.8-0.5-2.3-1.2l0,0v3.6h-1.4V1887.6z M1321.7,1893.5c1.2,0,2.1-1,2.1-2.4s-0.9-2.4-2.1-2.4s-2.1,1-2.1,2.4   C1319.7,1892.4,1320.5,1893.5,1321.7,1893.5"/>
            <polygon fill="#201600" points="1325.6,1887.6 1331.4,1887.6 1331,1888.7 1329.1,1888.7 1329.1,1894.5 1327.7,1894.5    1327.7,1888.7 1325.6,1888.7  "/>
            <polygon fill="#201600" points="1273.1,1897.3 1276.2,1901.4 1277.1,1901.4 1277.1,1897.3 1278.5,1897.3 1278.5,1901.4    1279.4,1901.4 1282.5,1897.3 1284.1,1897.3 1280.6,1902 1284.5,1907.1 1282.8,1907.1 1279.4,1902.7 1278.5,1902.7 1278.5,1907.1    1277.1,1907.1 1277.1,1902.7 1276.1,1902.7 1272.8,1907.1 1271,1907.1 1274.9,1902 1271.4,1897.3  "/>
            <path fill="#201600" d="M1284,1909.3l0.9-0.9c0.2,0.2,0.5,0.3,0.8,0.3c0.5,0,1-0.3,1.4-1.3l-2.8-7.1h1.5l2,5.4l0,0l1.7-5.4h1.5   l-2.6,7.5c-0.4,1.2-1.2,2.2-2.7,2.2C1285.2,1909.9,1284.6,1909.7,1284,1909.3"/>
            <polygon fill="#201600" points="1293.3,1903 1294.1,1903 1296.3,1900.2 1297.8,1900.2 1295.3,1903.4 1298.2,1907.1 1296.5,1907.1    1294.2,1904.2 1293.3,1904.2 1293.3,1907.1 1291.9,1907.1 1291.9,1900.2 1293.3,1900.2  "/>
            <path fill="#201600" d="M1298.4,1903.7c0-2.1,1.5-3.6,3.4-3.6s3.5,1.5,3.5,3.6s-1.5,3.6-3.5,3.6   C1299.9,1907.3,1298.4,1905.8,1298.4,1903.7 M1303.9,1903.7c0-1.4-0.8-2.4-2.1-2.4c-1.2,0-2.1,1-2.1,2.4s0.8,2.4,2.1,2.4   S1303.9,1905.1,1303.9,1903.7"/>
            <path fill="#201600" d="M1309.9,1900.2c1.3,0,2.1,0.8,2.1,1.8c0,0.6-0.4,1.2-0.9,1.5l0,0c0.8,0.2,1.3,0.9,1.3,1.6   c0,1.2-0.9,2-2.2,2h-3.6v-6.9H1309.9z M1310.6,1902.2c0-0.5-0.4-0.8-0.9-0.8h-1.8v1.7h1.8C1310.2,1903,1310.6,1902.7,1310.6,1902.2    M1310.9,1905.1c0-0.6-0.5-1-1.1-1h-1.9v1.9h1.9C1310.4,1906.1,1310.9,1905.7,1310.9,1905.1"/>
            <path fill="#201600" d="M1313.1,1903.7c0-2.1,1.5-3.6,3.4-3.6c1.1,0,1.9,0.4,2.4,1l-0.9,0.9c-0.3-0.3-0.8-0.6-1.6-0.6   c-1.2,0-2.1,1.1-2.1,2.4c0,1.4,0.8,2.4,2.1,2.4c0.7,0,1.2-0.3,1.6-0.6l0.9,0.9c-0.5,0.5-1.4,1-2.4,1   C1314.6,1907.3,1313.1,1905.8,1313.1,1903.7"/>
            <polygon fill="#201600" points="1321.4,1903 1322.2,1903 1324.4,1900.2 1325.9,1900.2 1323.4,1903.4 1326.3,1907.1 1324.6,1907.1    1322.3,1904.2 1321.4,1904.2 1321.4,1907.1 1320,1907.1 1320,1900.2 1321.4,1900.2  "/>
            <polygon fill="#201600" points="1328.3,1905 1328.4,1905 1331.6,1900.2 1332.9,1900.2 1332.9,1907.1 1331.5,1907.1 1331.5,1902.4    1331.4,1902.4 1328.2,1907.1 1327,1907.1 1327,1900.2 1328.3,1900.2  "/>
            <path fill="#201600" d="M1335.9,1905L1335.9,1905l3.3-4.7h1.2v6.9h-1.4v-4.7l0,0l-3.2,4.7h-1.2v-6.9h1.4v4.7H1335.9z    M1335.3,1898.2l0.8-0.8c0.3,0.3,0.8,0.7,1.5,0.7s1.2-0.4,1.5-0.7l0.8,0.8c-0.3,0.4-1.1,1.1-2.3,1.1   C1336.3,1899.3,1335.5,1898.6,1335.3,1898.2"/>
            <path fill="#48443E" d="M1287.5,1864.5v-7.5v-8.6c0-1-0.8-1.9-1.9-1.9c-1,0-1.9,0.8-1.9,1.9v8.6l-12.6,6.8v2.8l12.6-2.1v5.8l-4.7,3   v2.1l6.5-1.2l6.5,1.2v-2.1l-4.7-3v-5.8L1287.5,1864.5L1287.5,1864.5z"/>
            <polygon fill="#48443E" points="1289.3,1858 1289.3,1864.8 1300.1,1866.6 1300.1,1863.8  "/>
            <polygon fill="#6CA1D9" points="1248.5,1904.2 1250,1900.6 1250.8,1900.6 1249.3,1904.1 1249.3,1904.1 1251.1,1904.1    1251.1,1902.5 1251.9,1902.5 1251.9,1904.1 1252.8,1904.1 1252.5,1904.8 1251.9,1904.8 1251.9,1906 1251.1,1906 1251.1,1904.8    1248.5,1904.8  "/>
            <polygon fill="#6CA1D9" points="1253,1904.2 1254.6,1900.6 1255.4,1900.6 1253.9,1904.1 1253.9,1904.1 1255.6,1904.1    1255.6,1902.5 1256.4,1902.5 1256.4,1904.1 1257.3,1904.1 1257.1,1904.8 1256.4,1904.8 1256.4,1906 1255.6,1906 1255.6,1904.8    1253,1904.8  "/>
            <polygon fill="#6CA1D9" points="1257.3,1901.3 1257.5,1900.6 1259,1900.6 1259,1906 1258.2,1906 1258.2,1901.3  "/>
            <polygon fill="#6CA1D9" points="1308.9,1699.3 1307.1,1699.3 1306.6,1696.4 1307.6,1696.4  "/>
            <path fill="#6CA1D9" d="M1309.8,1699.8L1309.8,1699.8h1.5c0.3,0,0.5,0.2,0.5,0.5s-0.2,0.5-0.5,0.5h-2.2l-1.5,3.4h-1l0.5-3.4h-1.5   l-0.5,1h-1l0.5-1.5l-0.5-1.5h1l0.5,1H1309.8z"/>
            <polygon fill="#6CA1D9" points="1314.7,1701.1 1316.2,1697.5 1317,1697.5 1315.5,1701 1315.5,1701.1 1317.3,1701.1 1317.3,1699.4    1318,1699.4 1318,1701.1 1318.9,1701.1 1318.7,1701.7 1318,1701.7 1318,1702.9 1317.3,1702.9 1317.3,1701.7 1314.7,1701.7  "/>
            <polygon fill="#6CA1D9" points="1319.2,1701.1 1320.8,1697.5 1321.6,1697.5 1320,1701 1320,1701.1 1321.8,1701.1 1321.8,1699.4    1322.6,1699.4 1322.6,1701.1 1323.5,1701.1 1323.2,1701.7 1322.6,1701.7 1322.6,1702.9 1321.8,1702.9 1321.8,1701.7 1319.2,1701.7     "/>
            <polygon fill="#6CA1D9" points="1323.4,1698.3 1323.7,1697.5 1325.2,1697.5 1325.2,1702.9 1324.4,1702.9 1324.4,1698.3  "/>
        </g>
        <g id="Aero_DME">
            <path fill="none" stroke="#6CA1D9" stroke-miterlimit="10" d="M1064.9,1677.7c0.1,69.3,0.1,137.3,0,206.3"/>
            <rect id="white-base-28_98_" x="1052.5" y="1658.8" fill="#FFFFFF" width="24.9" height="20.2"/>
            <path fill="#AC545B" d="M951.2,1195l1.2-1.8v-0.1v-0.9c0-0.2,0.1-0.3,0.3-0.3s0.3,0.1,0.3,0.3v0.9v0.1l1.2,1.8v0.1l-0.3,0.4h-0.1   l-0.8-1.1l0,0v1.4c0,0,0,0.1,0.1,0.1h0.1c0,0,0.1,0,0.1,0.1v0.2c0,0,0,0.1-0.1,0.1h-1.1c0,0-0.1,0-0.1-0.1v-0.2c0,0,0-0.1,0.1-0.1   h0.1c0,0,0.1,0,0.1-0.1v-1.4l0,0l-0.8,1.1h-0.1L951.2,1195L951.2,1195 M954.5,1195.1C954.5,1195.1,954.4,1195.1,954.5,1195.1   l-0.4,0.4v0.1l1.3,0.4l0,0l-1.3,0.4H954v-0.1c0,0,0,0-0.1,0l-0.2,0.1c0,0,0,0,0,0.1l0.3,1c0,0,0,0,0.1,0l0.2-0.1c0,0,0,0,0-0.1   v-0.1v-0.1l1.3-0.4l0,0l-0.8,1.1v0.1l0.5,0.2h0.1l1.3-1.6l0.1-0.1l0.9-0.3c0.2-0.1,0.3-0.2,0.2-0.4c-0.1-0.2-0.2-0.3-0.4-0.2   l-0.9,0.3h-0.1L954.5,1195.1 M955.4,1198.3C955.3,1198.3,955.3,1198.2,955.4,1198.3l-0.5-0.2h-0.1v1.3l0,0l-0.8-1.1v-0.1l0.1-0.1   v-0.1l-0.1-0.2h-0.1l-0.9,0.6v0.1l0.1,0.2h0.1l0.1-0.1h0.1l0.8,1.1l0,0l-1.3-0.4h-0.1v0.5v0.1l2,0.7c0,0,0.1,0,0.1,0.1l0.5,0.8   c0.1,0.1,0.3,0.2,0.5,0.1s0.2-0.3,0.1-0.5l-0.5-0.8v-0.1L955.4,1198.3 M952.6,1200.1C952.6,1200.1,952.7,1200,952.6,1200.1l0.1-0.6   c0,0,0-0.1-0.1,0l-1.3,0.4l0,0l0.8-1.1h0.1l0.1,0.1h0.1l0.1-0.2v-0.1l-0.9-0.6h-0.1l-0.1,0.2v0.1l0.1,0.1v0.1l-0.8,1.1l0,0v-1.3   c0,0,0-0.1-0.1,0l-0.5,0.2c0,0-0.1,0-0.1,0.1l-0.1,2.1v0.1l-0.5,0.8c-0.1,0.1-0.1,0.4,0.1,0.5c0.1,0.1,0.3,0.1,0.5-0.1l0.5-0.8   l0.1-0.1L952.6,1200.1 M950.1,1198L950.1,1198l0.6-0.1c0,0,0,0,0-0.1l-0.8-1.1l0,0l1.3,0.4c0,0,0,0,0,0.1v0.1v0.1l0.2,0.1h0.1   l0.3-1v-0.1l-0.2-0.1h-0.1v0.1c0,0,0,0-0.1,0l-1.3-0.4l0,0l1.3-0.4c0,0,0,0,0-0.1l-0.3-0.4H951l-2,0.6h-0.1l-0.9-0.3   c-0.2-0.1-0.4,0-0.4,0.2c-0.1,0.2,0,0.4,0.2,0.4l0.9,0.3c0,0,0.1,0,0.1,0.1L950.1,1198"/>
            <path fill="#AC545B" d="M1043.5,1753.2l-64.9-64.9l0,0L863.3,1573c-6.8-6.8-9-12.1-9-21.7v-0.8v-290.9l0,0v-5.7   c0-9.6,2.2-14.9,9-21.7l24.2-24.2c6.8-6.8,12.1-9,21.7-9h6.4l0,0h31.6v-1h-35.9l0,0h-2.1c-9.8,0-15.5,2.3-22.4,9.3l-24.2,24.2   c-6.9,6.9-9.3,12.6-9.3,22.4v11.4l0,0v285.1v0.8c0,9.8,2.3,15.5,9.3,22.4l133.5,133.5l0,0l46.7,46.7c6.8,6.8,9,12.1,9,21.7v83.4v25   h1v-25v-83.4C1052.8,1765.8,1050.5,1760.1,1043.5,1753.2z"/>
            <path fill="#6CA1D9" d="M1061.3,1896c0-0.2,0-0.5,0.1-0.7s0.2-0.4,0.4-0.6c0.2-0.2,0.4-0.3,0.6-0.4s0.5-0.1,0.7-0.1v0.5   c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3c0.6,0,1.1-0.4,1.2-0.9h4.2v-0.9h0.5v-1h-0.5v-2.9l-1-1h-7.1v1h0.5v1.6h-0.5v3.2h0.8   C1061.4,1896.3,1061.3,1896.2,1061.3,1896 M1063.1,1896.8c-0.4,0-0.8-0.4-0.8-0.8s0.4-0.8,0.8-0.8s0.8,0.4,0.8,0.8   C1063.9,1896.5,1063.6,1896.8,1063.1,1896.8 M1066.8,1891.6h1.3v3.9h-1.3V1891.6z M1065.1,1891.6h1.3v3.9h-1.3V1891.6z    M1061.5,1891.6h3v1.6h-3V1891.6z"/>
            <rect id="white-base-28_109_" x="847.8" y="1322.3" fill="#FFFFFF" width="12" height="7.8"/>
            <rect id="white-base-28_103_" x="851.3" y="1488.6" fill="#FFFFFF" width="5" height="7"/>
            <rect id="white-base-28_99_" x="935.4" y="1644.2" fill="#FFFFFF" width="7" height="10.6"/>
            <path fill="#6CA1D9" d="M1060.9,1639c0-0.2,0-0.5,0.1-0.7s0.2-0.4,0.4-0.6c0.2-0.2,0.4-0.3,0.6-0.4s0.5-0.1,0.7-0.1v0.5   c-0.7,0-1.3,0.6-1.3,1.3c0,0.7,0.6,1.3,1.3,1.3c0.6,0,1.1-0.4,1.2-0.9h4.2v-0.9h0.5v-1h-0.5v-2.9l-1-1h-7.1v1h0.5v1.6h-0.5v3.2h0.8   C1060.9,1639.3,1060.9,1639.1,1060.9,1639 M1062.6,1639.8c-0.4,0-0.8-0.4-0.8-0.8s0.4-0.8,0.8-0.8s0.8,0.4,0.8,0.8   S1063.1,1639.8,1062.6,1639.8 M1066.4,1634.6h1.3v3.9h-1.3V1634.6z M1064.6,1634.6h1.3v3.9h-1.3V1634.6z M1061.1,1634.6h3v1.6h-3   V1634.6z"/>
            <path fill="#AC545B" d="M1050.8,1890.6l1.2-1.8v-0.1v-0.9c0-0.2,0.1-0.3,0.3-0.3c0.2,0,0.3,0.1,0.3,0.3v0.9v0.1l1.2,1.8v0.1   l-0.3,0.4h-0.1l-0.8-1.1l0,0v1.4c0,0,0,0.1,0.1,0.1h0.1c0,0,0.1,0,0.1,0.1v0.2c0,0,0,0.1-0.1,0.1h-1.1c0,0-0.1,0-0.1-0.1v-0.2   c0,0,0-0.1,0.1-0.1h0.1c0,0,0.1,0,0.1-0.1v-1.4l0,0l-0.8,1.1h-0.1L1050.8,1890.6C1050.7,1890.7,1050.7,1890.6,1050.8,1890.6    M1054,1890.8C1054,1890.7,1054,1890.8,1054,1890.8l-0.4,0.4v0.1l1.3,0.4l0,0l-1.3,0.4h-0.1v-0.1c0,0,0,0-0.1,0l-0.2,0.1   c0,0,0,0,0,0.1l0.3,1c0,0,0,0,0.1,0l0.2-0.1c0,0,0,0,0-0.1v-0.1v-0.1l1.3-0.4l0,0l-0.8,1.1v0.1l0.5,0.2h0.1l1.3-1.6l0.1-0.1   l0.9-0.3c0.2-0.1,0.3-0.2,0.2-0.4c-0.1-0.2-0.2-0.3-0.4-0.2l-0.9,0.3h-0.1L1054,1890.8 M1054.9,1893.9   C1054.9,1893.9,1054.8,1893.8,1054.9,1893.9l-0.5-0.2h-0.1v1.3l0,0l-0.8-1.1v-0.1l0.1-0.1v-0.1l-0.1-0.2h-0.1l-0.9,0.6v0.1l0.1,0.2   h0.1l0.1-0.1h0.1l0.8,1.1l0,0l-1.3-0.4h-0.1v0.5v0.1l2,0.7c0,0,0.1,0,0.1,0.1l0.5,0.8c0.1,0.1,0.3,0.2,0.5,0.1s0.2-0.3,0.1-0.5   l-0.5-0.8v-0.1L1054.9,1893.9 M1052.1,1895.7C1052.2,1895.7,1052.2,1895.7,1052.1,1895.7l0.1-0.6c0,0,0-0.1-0.1,0l-1.3,0.4l0,0   l0.8-1.1h0.1l0.1,0.1h0.1l0.1-0.2v-0.1l-0.9-0.6h-0.1l-0.1,0.2v0.1l0.1,0.1v0.1l-0.8,1.1l0,0v-1.3c0,0,0-0.1-0.1,0l-0.5,0.2   c0,0-0.1,0-0.1,0.1l-0.1,2.1v0.1l-0.5,0.8c-0.1,0.1-0.1,0.4,0.1,0.5c0.1,0.1,0.3,0.1,0.5-0.1l0.5-0.8l0.1-0.1L1052.1,1895.7    M1049.6,1893.6C1049.6,1893.7,1049.6,1893.7,1049.6,1893.6l0.6-0.1c0,0,0,0,0-0.1l-0.8-1.1l0,0l1.3,0.4c0,0,0,0,0,0.1v0.1v0.1   l0.2,0.1h0.1l0.3-1v-0.1l-0.2-0.1h-0.1v0.1c0,0,0,0-0.1,0l-1.3-0.4l0,0l1.3-0.4c0,0,0,0,0-0.1l-0.3-0.4h-0.1l-2,0.6h-0.1l-0.9-0.3   c-0.2-0.1-0.4,0-0.4,0.2c-0.1,0.2,0,0.4,0.2,0.4l0.9,0.3c0,0,0.1,0,0.1,0.1L1049.6,1893.6"/>
            <path fill="#201600" d="M1080.5,1885.1l3.8,9.8h-1.7l-0.9-2.5h-3.9l-0.9,2.5h-1.6l3.9-9.8H1080.5z M1079.8,1887.2l-1.5,4h3   L1079.8,1887.2L1079.8,1887.2z"/>
            <path fill="#201600" d="M1084.5,1894.1l0.9-0.9c0.3,0.3,0.8,0.6,1.6,0.6c1.1,0,1.9-0.8,2-2h-2.7v-1.1h2.6c-0.2-1-1-1.7-2-1.7   c-0.7,0-1.2,0.3-1.6,0.6l-0.9-0.8c0.5-0.5,1.4-1,2.4-1c1.9,0,3.4,1.5,3.4,3.6s-1.5,3.6-3.4,3.6   C1085.8,1895.1,1085,1894.6,1084.5,1894.1"/>
            <path fill="#201600" d="M1091.6,1888h1.4v1.1l0,0c0.4-0.7,1.2-1.2,2.3-1.2c1.9,0,3.2,1.5,3.2,3.6s-1.4,3.6-3.2,3.6   c-1,0-1.8-0.5-2.3-1.2l0,0v3.6h-1.4V1888z M1095,1893.8c1.2,0,2.1-1,2.1-2.4s-0.9-2.4-2.1-2.4s-2.1,1-2.1,2.4   S1093.8,1893.8,1095,1893.8"/>
            <path fill="#201600" d="M1099.3,1891.4c0-2.1,1.5-3.6,3.4-3.6s3.5,1.5,3.5,3.6s-1.5,3.6-3.5,3.6   C1100.8,1895.1,1099.3,1893.5,1099.3,1891.4 M1104.8,1891.4c0-1.4-0.8-2.4-2.1-2.4c-1.2,0-2.1,1-2.1,2.4s0.8,2.4,2.1,2.4   C1103.9,1893.8,1104.8,1892.8,1104.8,1891.4"/>
            <polygon fill="#201600" points="1113.1,1894.9 1111.8,1894.9 1111.8,1889.1 1108.8,1889.1 1108.8,1894.9 1107.4,1894.9    1107.4,1888 1113.1,1888  "/>
            <path fill="#201600" d="M1114.4,1891.4c0-2.1,1.5-3.6,3.4-3.6s3.5,1.5,3.5,3.6s-1.5,3.6-3.5,3.6   C1115.9,1895.1,1114.4,1893.5,1114.4,1891.4 M1119.9,1891.4c0-1.4-0.8-2.4-2.1-2.4c-1.2,0-2.1,1-2.1,2.4s0.8,2.4,2.1,2.4   S1119.9,1892.8,1119.9,1891.4"/>
            <path fill="#201600" d="M1122.5,1888h1.4v1.1l0,0c0.4-0.7,1.2-1.2,2.3-1.2c1.9,0,3.2,1.5,3.2,3.6s-1.4,3.6-3.2,3.6   c-1,0-1.8-0.5-2.3-1.2l0,0v3.6h-1.4V1888z M1125.9,1893.8c1.2,0,2.1-1,2.1-2.4s-0.9-2.4-2.1-2.4s-2.1,1-2.1,2.4   S1124.7,1893.8,1125.9,1893.8"/>
            <polygon fill="#201600" points="1129.8,1888 1135.6,1888 1135.2,1889.1 1133.3,1889.1 1133.3,1894.9 1131.9,1894.9 1131.9,1889.1    1129.8,1889.1  "/>
            <path fill="#201600" d="M1077.1,1903.9c0.2-1.4,0.5-6.2,0.5-6.2h6.4v8.5h1.1v3.3h-1.3v-2h-7v2h-1.3v-3.3h0.7   C1076.6,1905.9,1076.9,1905.2,1077.1,1903.9 M1082.5,1899h-3.7c-0.1,1.1-0.2,3.9-0.4,5.1c-0.1,0.9-0.4,1.6-0.8,2.1l0,0h4.8   L1082.5,1899L1082.5,1899z"/>
            <path fill="#201600" d="M1085.8,1904c0-2.1,1.5-3.6,3.5-3.6c1.9,0,3.4,1.5,3.4,3.6s-1.5,3.6-3.4,3.6   C1087.4,1907.7,1085.8,1906.2,1085.8,1904 M1091.4,1904c0-1.4-0.8-2.4-2.1-2.4c-1.2,0-2.1,1-2.1,2.4s0.8,2.4,2.1,2.4   C1090.5,1906.5,1091.4,1905.4,1091.4,1904"/>
            <polygon fill="#201600" points="1098.2,1905.7 1098.2,1905.7 1100.1,1900.6 1101.5,1900.6 1103.2,1907.5 1101.8,1907.5    1100.6,1902.5 1100.6,1902.5 1098.8,1907.5 1097.6,1907.5 1095.9,1902.5 1095.8,1902.5 1094.7,1907.5 1093.3,1907.5 1095,1900.6    1096.5,1900.6  "/>
            <path fill="#201600" d="M1103.8,1904c0-2.1,1.5-3.6,3.5-3.6c1.9,0,3.4,1.5,3.4,3.6s-1.5,3.6-3.4,3.6   C1105.3,1907.7,1103.8,1906.2,1103.8,1904 M1109.3,1904c0-1.4-0.8-2.4-2.1-2.4c-1.2,0-2.1,1-2.1,2.4s0.8,2.4,2.1,2.4   C1108.4,1906.5,1109.3,1905.4,1109.3,1904"/>
            <path fill="#201600" d="M1112.4,1904.1c0.3-2.1,0.3-3.5,0.3-3.5h4.6v5.8h0.9v2.7h-1.2v-1.6h-4.7v1.6h-1.2v-2.7h0.5   C1112,1906,1112.2,1905.2,1112.4,1904.1 M1116,1901.7h-2c-0.1,0.6-0.1,1.6-0.3,2.6c-0.1,0.9-0.3,1.5-0.6,2l0,0h2.9V1901.7z"/>
            <path fill="#201600" d="M1118.9,1904.1c0-2.2,1.5-3.6,3.3-3.6s3.3,1.2,3.3,3.9v0.2h-5.2c0.2,1.2,1.1,1.9,2.2,1.9   c0.6,0,1.2-0.2,1.8-0.7l0.9,0.9c-0.7,0.7-1.7,1-2.8,1C1120.5,1907.7,1118.9,1906.3,1118.9,1904.1 M1122.3,1901.6   c-1.1,0-1.8,0.8-1.9,1.8h3.8C1124.1,1902.5,1123.3,1901.6,1122.3,1901.6"/>
            <path fill="#201600" d="M1127.3,1904.1c0.3-2.1,0.3-3.5,0.3-3.5h4.6v5.8h0.9v2.7h-1.2v-1.6h-4.7v1.6h-1.2v-2.7h0.5   C1126.9,1906,1127.1,1905.2,1127.3,1904.1 M1130.8,1901.7h-2c-0.1,0.6-0.1,1.6-0.3,2.6c-0.1,0.9-0.3,1.5-0.6,2l0,0h2.9V1901.7z"/>
            <path fill="#201600" d="M1133.8,1904c0-2.1,1.5-3.6,3.5-3.6c1.9,0,3.4,1.5,3.4,3.6s-1.5,3.6-3.4,3.6   C1135.3,1907.7,1133.8,1906.2,1133.8,1904 M1139.3,1904c0-1.4-0.8-2.4-2.1-2.4c-1.2,0-2.1,1-2.1,2.4s0.8,2.4,2.1,2.4   C1138.5,1906.5,1139.3,1905.4,1139.3,1904"/>
            <path fill="#201600" d="M1145.3,1900.6c1.3,0,2.1,0.8,2.1,1.8c0,0.6-0.4,1.2-0.9,1.5l0,0c0.8,0.2,1.3,0.9,1.3,1.6   c0,1.2-0.9,2-2.2,2h-3.6v-6.9H1145.3z M1146,1902.5c0-0.5-0.4-0.8-0.9-0.8h-1.8v1.7h1.8C1145.6,1903.4,1146,1903,1146,1902.5    M1146.3,1905.4c0-0.6-0.5-1-1.1-1h-1.9v1.9h1.9C1145.8,1906.4,1146.3,1906.1,1146.3,1905.4"/>
            <path fill="#201600" d="M1148.5,1904c0-2.1,1.5-3.6,3.5-3.6c1.9,0,3.4,1.5,3.4,3.6s-1.5,3.6-3.4,3.6   C1150,1907.7,1148.5,1906.2,1148.5,1904 M1154,1904c0-1.4-0.8-2.4-2.1-2.4c-1.2,0-2.1,1-2.1,2.4s0.8,2.4,2.1,2.4   C1153.2,1906.5,1154,1905.4,1154,1904"/>
            <path fill="#6CA1D9" d="M1057.5,1905.3l0.5-0.5c0.4,0.3,0.8,0.5,1.3,0.5c0.7,0,1.2-0.4,1.2-1.1s-0.6-1-1.3-1c-0.1,0-0.3,0-0.4,0   v-0.5l1.5-1.5h-2.5v-0.7h3.4v0.6l-1.4,1.4l0,0c0.9,0.1,1.6,0.8,1.6,1.7c0,1-0.9,1.7-2,1.7   C1058.6,1906.1,1057.9,1905.8,1057.5,1905.3"/>
            <path fill="#6CA1D9" d="M1062.2,1903.3c0-1.7,0.8-2.8,2-2.8c1.3,0,2,1.1,2,2.8c0,1.7-0.8,2.8-2,2.8   C1062.9,1906.1,1062.2,1905,1062.2,1903.3 M1065.5,1903.3c0-1.3-0.4-2.1-1.2-2.1c-0.8,0-1.2,0.8-1.2,2.1c0,1.3,0.4,2.1,1.2,2.1   C1065,1905.3,1065.5,1904.5,1065.5,1903.3"/>
            <path fill="#6CA1D9" d="M1070.9,1902c0,0.5-0.3,1-0.8,1.2l0,0c0.5,0.2,1,0.7,1,1.3c0,0.9-0.8,1.6-2,1.6s-2-0.6-2-1.6   c0-0.6,0.4-1.1,1-1.3l0,0c-0.5-0.2-0.8-0.7-0.8-1.2c0-0.8,0.7-1.5,1.8-1.5S1070.9,1901.1,1070.9,1902 M1067.9,1904.5   c0,0.5,0.4,0.9,1.2,0.9c0.7,0,1.2-0.4,1.2-0.9s-0.4-0.9-1.2-0.9S1067.9,1904,1067.9,1904.5 M1070.1,1902c0-0.4-0.4-0.8-1-0.8   c-0.7,0-1,0.4-1,0.8s0.4,0.8,1,0.8S1070.1,1902.4,1070.1,1902"/>
            <path fill="#48443E" d="M1092.1,1864.5v-7.5v-8.6c0-1-0.8-1.9-1.9-1.9c-1,0-1.9,0.8-1.9,1.9v8.6l-12.6,6.8v2.8l12.6-2.1v5.8l-4.7,3   v2.1l6.5-1.2l6.5,1.2v-2.1l-4.7-3v-5.8L1092.1,1864.5L1092.1,1864.5z"/>
            <polygon fill="#48443E" points="1093.9,1858 1093.9,1864.8 1104.7,1866.6 1104.7,1863.8  "/>
            <rect id="white-base-28_100_" x="944.8" y="1660.8" fill="#FFFFFF" width="47.8" height="27.4"/>
            <rect id="white-base-28_101_" x="848" y="1532.5" fill="#FFFFFF" width="12" height="12"/>
            <rect id="white-base-28_102_" x="847.8" y="1505.5" fill="#FFFFFF" width="12" height="12"/>
            <rect id="white-base-28_104_" x="847.8" y="1470.5" fill="#FFFFFF" width="12" height="12"/>
            <rect id="white-base-28_105_" x="847.8" y="1426" fill="#FFFFFF" width="12" height="12"/>
            <rect id="white-base-28_106_" x="847.8" y="1352.6" fill="#FFFFFF" width="12" height="12"/>
            <rect id="white-base-28_107_" x="847.8" y="1293.6" fill="#FFFFFF" width="12" height="24"/>
            <path fill="#FFFFFF" d="M852.6,1290.2c0-0.7,0.6-1.2,1.2-1.2c0.7,0,1.2,0.5,1.2,1.2s-0.5,1.2-1.2,1.2   C853.1,1291.4,852.6,1290.9,852.6,1290.2"/>
            <path fill="#6CA1D9" d="M1056.3,1635.7L1056.3,1635.7h1.5c0.3,0,0.5,0.2,0.5,0.5s-0.2,0.5-0.5,0.5h-2.2l-1.5,3.4h-1l0.5-3.4h-1.5   l-0.5,1h-1l0.5-1.5l-0.5-1.5h1l0.5,1H1056.3z"/>
            <path fill="#6CA1D9" d="M1049.1,1635.1c0,0.5-0.3,1-0.8,1.2l0,0c0.5,0.2,1,0.7,1,1.3c0,0.9-0.8,1.6-2,1.6s-2-0.6-2-1.6   c0-0.6,0.4-1.1,1-1.3l0,0c-0.5-0.2-0.8-0.7-0.8-1.2c0-0.8,0.7-1.5,1.8-1.5S1049.1,1634.3,1049.1,1635.1 M1046.1,1637.6   c0,0.5,0.4,0.9,1.2,0.9c0.7,0,1.2-0.4,1.2-0.9s-0.4-0.9-1.2-0.9C1046.6,1636.7,1046.1,1637.2,1046.1,1637.6 M1048.4,1635.2   c0-0.4-0.4-0.8-1-0.8c-0.7,0-1,0.4-1,0.8s0.4,0.8,1,0.8S1048.4,1635.6,1048.4,1635.2"/>
            <polygon fill="#6CA1D9" points="1055.3,1635.2 1053.5,1635.2 1053.1,1632.3 1054.1,1632.3  "/>
            <path fill="#6CA1D9" d="M1040.4,1636.4c0-1.7,0.8-2.8,2-2.8s2,1.1,2,2.8c0,1.7-0.8,2.8-2,2.8S1040.4,1638.1,1040.4,1636.4    M1043.7,1636.4c0-1.3-0.4-2.1-1.2-2.1s-1.2,0.8-1.2,2.1c0,1.3,0.4,2.1,1.2,2.1S1043.7,1637.7,1043.7,1636.4"/>
            <path fill="#6CA1D9" d="M1035.8,1638.5l0.5-0.5c0.4,0.3,0.8,0.5,1.3,0.5c0.7,0,1.2-0.4,1.2-1.1s-0.6-1-1.3-1c-0.1,0-0.3,0-0.4,0   v-0.5l1.5-1.5h-2.5v-0.7h3.4v0.6l-1.4,1.4l0,0c0.9,0.1,1.6,0.8,1.6,1.7c0,1-0.9,1.7-2,1.7   C1036.9,1639.2,1036.2,1638.9,1035.8,1638.5"/>
            <rect id="white-base-28_108_" x="935.3" y="1192.5" fill="#FFFFFF" width="7" height="12"/>
            <path fill="none" stroke="#6CA1D9" stroke-miterlimit="10" d="M1064.9,1642.4c0.1,5.9,0.1,11.8,0.1,17.8"/>
        </g>
        <linearGradient id="D2_01_00000123414943069358875740000009781818013182005175_" gradientUnits="userSpaceOnUse" x1="32459.1934" y1="-19872.9766" x2="32459.1934" y2="-19910.5762" gradientTransform="matrix(-1 0 0 1 33398.0938 21797.7754)">
            <stop offset="0" style="stop-color:#FFFFFF"/>
            <stop offset="0.9983" style="stop-color:#ADACAC"/>
        </linearGradient>
        <rect id="D2_01" x="936.9" y="1887.9" fill="#FFFFFF" stroke="url(#D2_01_00000123414943069358875740000009781818013182005175_)" stroke-width="1.5" stroke-miterlimit="10" width="4" height="36.1"/>
        <path id="lineD1_16-lineD1_17" fill="#FFFFFF" stroke="#F7A600" stroke-width="1.5" stroke-miterlimit="10" d="M754.4,543.5v9.9  c0,7.2-2.8,14-7.9,19.1C710.8,608.2,675,644,639.3,679.7l0,0l-31.8,31.8l2.8,2.8l35.6-35.6l0,0c34.5-34.5,68.9-68.9,103.4-103.4  c5.8-5.8,9.1-13.7,9.1-21.9v-9.9C757.1,543.5,755.8,543.5,754.4,543.5z"/>
        <linearGradient id="D1_01_00000173846965691051308390000015386646709738278291_" gradientUnits="userSpaceOnUse" x1="43.9" y1="23167.8008" x2="43.9" y2="23130.2012" gradientTransform="matrix(1 0 0 -1 0 23647)">
            <stop offset="0" style="stop-color:#FFFFFF"/>
            <stop offset="0.9983" style="stop-color:#ADACAC"/>
        </linearGradient>
        <rect id="D1_01" x="41.9" y="480" fill="#FFFFFF" stroke="url(#D1_01_00000173846965691051308390000015386646709738278291_)" stroke-width="1.5" stroke-miterlimit="10" width="4" height="36.1"/>
        <path id="line3_8-line3_9" fill="#0572B9" d="M196.6,1011.9c-5.3-5.3-8.2-12.4-8.2-19.8c0-50.3,0-100.6,0-150.8  c-1.8,0-3.7,0-5.5,0.1c0,50.3,0,100.5,0,150.8c0,8.9,3.5,17.3,9.8,23.6l1.7,1.7c7,7,13.8,13.8,20.5,20.5c1.2-1.4,2.5-2.7,3.7-4.1  C211.3,1026.6,204,1019.2,196.6,1011.9z"/>
        <rect id="white-base-28_64_" x="741.5" y="339.7" fill="#FFFFFF" width="5" height="7.1"/>
        <linearGradient id="D1_0_00000064339970443537540700000008616338111713315492_" gradientUnits="userSpaceOnUse" x1="295.75" y1="-19971" x2="345.25" y2="-19971" gradientTransform="matrix(1 0 0 1 0 20008)">
            <stop offset="0" style="stop-color:#FFFFFF"/>
            <stop offset="0.6289" style="stop-color:#BEBCBC"/>
        </linearGradient>
        <rect id="D1_0" x="296.5" y="35" fill="#FFFFFF" stroke="url(#D1_0_00000064339970443537540700000008616338111713315492_)" stroke-width="1.5" stroke-miterlimit="10" width="48" height="4"/>
        <path id="line14_16-line14_17" fill="#FFFFFF" stroke="#D14A43" stroke-width="0.9" stroke-miterlimit="10" d="M405.9,1046.6  c-1.6,0.8-3.3,1.6-4.9,2.4c21,42.3,47.8,81.3,79.4,115.9c1.3-1.3,2.6-2.5,3.8-3.8C453.1,1126.9,426.7,1088.4,405.9,1046.6z"/>
        <linearGradient id="lineD2_0_00000143581621443486418980000009540376308401738671_" gradientUnits="userSpaceOnUse" x1="43.9" y1="23646.3496" x2="43.9" y2="23608.75" gradientTransform="matrix(1 0 0 -1 0 23647)">
            <stop offset="0" style="stop-color:#FFFFFF"/>
            <stop offset="0.9983" style="stop-color:#ADACAC"/>
        </linearGradient>
        <rect id="lineD2_0" x="41.9" y="1.4" fill="#FFFFFF" stroke="url(#lineD2_0_00000143581621443486418980000009540376308401738671_)" stroke-width="1.5" stroke-miterlimit="10" width="4" height="36.1"/>
        <path id="line3_17-line3_18" fill="#0572B9" d="M1280.3,684.9c-19.6,19.6-39.2,39.2-58.9,58.9c-1.3-1.3-2.6-2.6-3.9-3.9  c19.6-19.6,39.2-39.2,58.9-58.9C1277.7,682.3,1279,683.6,1280.3,684.9z"/>
        <g id="lineD1_9">
            <g>
                <path fill="none" stroke="#F7A600" stroke-miterlimit="10" d="M754.3,185.4c0,0.2,0,0.3,0,0.5c0.2,0,0.3,0,0.5,0"/>
                <path fill="none" stroke="#F7A600" stroke-miterlimit="10" stroke-dasharray="0.9091,0.9091" d="M755.7,185.9c2.9,0,5.7,0,8.6,0"/>
                <path fill="none" stroke="#F7A600" stroke-miterlimit="10" d="M764.8,185.9c0.2,0,0.3,0,0.5,0v-0.5"/>

                <line fill="none" stroke="#F7A600" stroke-miterlimit="10" stroke-dasharray="0.9,0.9" x1="765.3" y1="184.5" x2="765.3" y2="181.4"/>
                <path fill="none" stroke="#F7A600" stroke-miterlimit="10" d="M765.3,180.9v-0.5c-0.2,0-0.3,0-0.5,0"/>
                <path fill="none" stroke="#F7A600" stroke-miterlimit="10" stroke-dasharray="0.9091,0.9091" d="M763.9,180.4c-2.9,0-5.7,0-8.6,0"/>
                <path fill="none" stroke="#F7A600" stroke-miterlimit="10" d="M754.8,180.4c-0.2,0-0.3,0-0.5,0c0,0.2,0,0.3,0,0.5"/>
                <path fill="none" stroke="#F7A600" stroke-miterlimit="10" stroke-dasharray="0.9,0.9" d="M754.3,181.8c0,1.1,0,2.1,0,3.2"/>
            </g>
        </g>
        <rect id="lineD1_8-lineD1_10" x="754.5" y="152.7" fill="#FFFFFF" stroke="#F7A600" stroke-width="1.5" stroke-miterlimit="10" width="4" height="68.1"/>
        <path id="line10_23" fill="#BED12E" d="M1079.5,1668.9c0,4.5,3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2s-3.7-8.2-8.2-8.2  S1079.5,1664.4,1079.5,1668.9z M1087.8,1664.7c2.3,0,4.2,1.9,4.2,4.3s-2,4.1-4.2,4.2c-2.3,0-4.2-1.8-4.3-4.2  C1083.5,1666.6,1085.6,1664.6,1087.8,1664.7z"/>
        <g id="line10_15-line11_23">
            <g>

                <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="1207.1934" y1="-20870.1152" x2="1223.899" y2="-20899.0488" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3251" style="stop-color:#BED12E"/>
                    <stop offset="0.6356" style="stop-color:#89CDCF"/>
                </linearGradient>
                <path fill="none" stroke="url(#SVGID_1_)" stroke-miterlimit="10" d="M1209.8,1301.1c0.1-0.1,0.3-0.2,0.4-0.3    c-0.1-0.2-0.1-0.3-0.2-0.5"/>

                <linearGradient id="SVGID_00000062179787900307781280000006222194676331304070_" gradientUnits="userSpaceOnUse" x1="1203.3096" y1="-20872.3574" x2="1220.0153" y2="-20901.293" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3251" style="stop-color:#BED12E"/>
                    <stop offset="0.6356" style="stop-color:#89CDCF"/>
                </linearGradient>

                <path fill="none" stroke="url(#SVGID_00000062179787900307781280000006222194676331304070_)" stroke-miterlimit="10" stroke-dasharray="1.0014,1.0014" d="    M1209.7,1299.4c-1.8-5.1-1.4-10.9,1.5-15.9c1.2-2.1,2.8-3.9,4.6-5.3"/>

                <linearGradient id="SVGID_00000168820743582134731420000011740087677984144777_" gradientUnits="userSpaceOnUse" x1="1201.947" y1="-20873.1445" x2="1218.6528" y2="-20902.0781" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3251" style="stop-color:#BED12E"/>
                    <stop offset="0.6356" style="stop-color:#89CDCF"/>
                </linearGradient>
                <path fill="none" stroke="url(#SVGID_00000168820743582134731420000011740087677984144777_)" stroke-miterlimit="10" d="    M1216.2,1277.9c0.1-0.1,0.3-0.2,0.4-0.3c-0.1-0.2-0.1-0.3-0.2-0.5"/>

                <linearGradient id="SVGID_00000109726736971357928050000006286276631095392131_" gradientUnits="userSpaceOnUse" x1="1199.8235" y1="-20874.3691" x2="1216.5292" y2="-20903.3047" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3251" style="stop-color:#BED12E"/>
                    <stop offset="0.6356" style="stop-color:#89CDCF"/>
                </linearGradient>

                <path fill="none" stroke="url(#SVGID_00000109726736971357928050000006286276631095392131_)" stroke-miterlimit="10" stroke-dasharray="0.9459,0.9459" d="    M1216,1276.3c-0.4-1-0.9-2-1.3-3.1"/>

                <linearGradient id="SVGID_00000051352513167421489340000010721650417059146912_" gradientUnits="userSpaceOnUse" x1="1197.9895" y1="-20875.4297" x2="1214.6952" y2="-20904.3652" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3251" style="stop-color:#BED12E"/>
                    <stop offset="0.6356" style="stop-color:#89CDCF"/>
                </linearGradient>
                <path fill="none" stroke="url(#SVGID_00000051352513167421489340000010721650417059146912_)" stroke-miterlimit="10" d="    M1214.5,1272.8c-0.1-0.2-0.1-0.3-0.2-0.5c-0.1,0.1-0.3,0.2-0.4,0.3"/>

                <linearGradient id="SVGID_00000078754809403280598030000002268245729975525055_" gradientUnits="userSpaceOnUse" x1="1200.0311" y1="-20874.25" x2="1216.7368" y2="-20903.1855" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3251" style="stop-color:#BED12E"/>
                    <stop offset="0.6356" style="stop-color:#89CDCF"/>
                </linearGradient>

                <path fill="none" stroke="url(#SVGID_00000078754809403280598030000002268245729975525055_)" stroke-miterlimit="10" stroke-dasharray="1.0028,1.0028" d="    M1213.1,1273.2c-2.7,2-5,4.5-6.8,7.6c-4.1,7.1-4.2,15.5-1.1,22.5"/>

                <linearGradient id="SVGID_00000110449322351928335530000009593967770985270966_" gradientUnits="userSpaceOnUse" x1="1205.2391" y1="-20871.2441" x2="1221.9448" y2="-20900.1797" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3251" style="stop-color:#BED12E"/>
                    <stop offset="0.6356" style="stop-color:#89CDCF"/>
                </linearGradient>
                <path fill="none" stroke="url(#SVGID_00000110449322351928335530000009593967770985270966_)" stroke-miterlimit="10" d="    M1205.4,1303.7c0.1,0.2,0.1,0.3,0.2,0.4c0.1-0.1,0.3-0.2,0.4-0.3"/>

                <linearGradient id="SVGID_00000039111091007956592840000008682075662633009057_" gradientUnits="userSpaceOnUse" x1="1206.3434" y1="-20870.6074" x2="1223.0491" y2="-20899.543" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3251" style="stop-color:#BED12E"/>
                    <stop offset="0.6356" style="stop-color:#89CDCF"/>
                </linearGradient>

                <path fill="none" stroke="url(#SVGID_00000039111091007956592840000008682075662633009057_)" stroke-miterlimit="10" stroke-dasharray="0.928,0.928" d="    M1206.8,1303.3c0.9-0.6,1.7-1.3,2.6-1.9"/>
            </g>
        </g>
        <g id="line11_23-lineD2_23">
            <g>

                <linearGradient id="SVGID_00000073706737864623386450000015624596755979655063_" gradientUnits="userSpaceOnUse" x1="1228.5928" y1="-20902" x2="1253.0101" y2="-20902" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3146" style="stop-color:#89CDCF"/>
                    <stop offset="0.6691" style="stop-color:#E94282"/>
                </linearGradient>
                <path fill="none" stroke="url(#SVGID_00000073706737864623386450000015624596755979655063_)" stroke-miterlimit="10" d="    M1229.5,1273.5c0,0.2,0,0.3,0,0.5c0.2,0,0.3,0,0.5,0"/>

                <linearGradient id="SVGID_00000095314629462836159660000005204503675572762016_" gradientUnits="userSpaceOnUse" x1="1228.5928" y1="-20894.1016" x2="1253.0101" y2="-20894.1016" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3146" style="stop-color:#89CDCF"/>
                    <stop offset="0.6691" style="stop-color:#E94282"/>
                </linearGradient>

                <path fill="none" stroke="url(#SVGID_00000095314629462836159660000005204503675572762016_)" stroke-miterlimit="10" stroke-dasharray="1.0105,1.0105" d="    M1231,1274.2c2.2,0.4,4.4,1.1,6.5,2.3c5.1,3,8.3,8,9.3,13.5"/>

                <linearGradient id="SVGID_00000065765066837678500970000000121908170620370822_" gradientUnits="userSpaceOnUse" x1="1228.5928" y1="-20885" x2="1253.0101" y2="-20885" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3146" style="stop-color:#89CDCF"/>
                    <stop offset="0.6691" style="stop-color:#E94282"/>
                </linearGradient>
                <path fill="none" stroke="url(#SVGID_00000065765066837678500970000000121908170620370822_)" stroke-miterlimit="10" d="    M1246.8,1290.5c0,0.2,0,0.3,0.1,0.5c0.2,0,0.3,0,0.5,0"/>

                <linearGradient id="SVGID_00000172431760835755439490000013094981220398948014_" gradientUnits="userSpaceOnUse" x1="1228.5928" y1="-20884.75" x2="1253.0101" y2="-20884.75" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3146" style="stop-color:#89CDCF"/>
                    <stop offset="0.6691" style="stop-color:#E94282"/>
                </linearGradient>

                <path fill="none" stroke="url(#SVGID_00000172431760835755439490000013094981220398948014_)" stroke-miterlimit="10" stroke-dasharray="0.9294,0.9294" d="    M1248.3,1291.1c1.1,0.1,2.2,0.2,3.2,0.3"/>

                <linearGradient id="SVGID_00000013150565890819866000000017195085620148017307_" gradientUnits="userSpaceOnUse" x1="1228.5928" y1="-20884.5996" x2="1253.0101" y2="-20884.5996" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3146" style="stop-color:#89CDCF"/>
                    <stop offset="0.6691" style="stop-color:#E94282"/>
                </linearGradient>
                <path fill="none" stroke="url(#SVGID_00000013150565890819866000000017195085620148017307_)" stroke-miterlimit="10" d="    M1252,1291.4c0.2,0,0.3,0,0.5,0c0-0.2,0-0.3,0-0.5"/>

                <linearGradient id="SVGID_00000169547393090506331750000013464186392715240371_" gradientUnits="userSpaceOnUse" x1="1228.5928" y1="-20897.0195" x2="1253.0101" y2="-20897.0195" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3146" style="stop-color:#89CDCF"/>
                    <stop offset="0.6691" style="stop-color:#E94282"/>
                </linearGradient>

                <path fill="none" stroke="url(#SVGID_00000169547393090506331750000013464186392715240371_)" stroke-miterlimit="10" stroke-dasharray="0.9977,0.9977" d="    M1252.3,1290c-0.9-7.4-5.2-14.4-12.2-18.4c-3.2-1.8-6.6-2.9-10-3.2"/>

                <linearGradient id="SVGID_00000183209525623421974770000008693625828094240941_" gradientUnits="userSpaceOnUse" x1="1228.5918" y1="-20907.5996" x2="1253.0092" y2="-20907.5996" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3146" style="stop-color:#89CDCF"/>
                    <stop offset="0.6691" style="stop-color:#E94282"/>
                </linearGradient>
                <path fill="none" stroke="url(#SVGID_00000183209525623421974770000008693625828094240941_)" stroke-miterlimit="10" d="    M1229.6,1268.4c-0.2,0-0.3,0-0.5,0c0,0.2,0,0.3,0,0.5"/>

                <linearGradient id="SVGID_00000062157308653024908520000006333941686835292344_" gradientUnits="userSpaceOnUse" x1="1228.5928" y1="-20904.5508" x2="1253.0101" y2="-20904.5508" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3146" style="stop-color:#89CDCF"/>
                    <stop offset="0.6691" style="stop-color:#E94282"/>
                </linearGradient>

                <path fill="none" stroke="url(#SVGID_00000062157308653024908520000006333941686835292344_)" stroke-miterlimit="10" stroke-dasharray="0.9364,0.9364" d="    M1229.2,1269.8c0.1,1.1,0.1,2.2,0.2,3.3"/>
            </g>
        </g>
        <g>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="1.0063,1.0063" d="M774.9,1492   c21,1.9,42.3,2.9,63.8,2.9"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="1.0094,1.0094" d="M838.3,1489.4   c-21.6,0-42.9-1.1-64-3"/>
            <g>
                <g>
                    <g>
                        <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M957.7,1471.5c-0.1,0.1-0.3,0.2-0.4,0.3l-0.4-0.2"/>

                        <line fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.9863,0.9863" x1="956" y1="1471.1" x2="947.9" y2="1466.4"/>
                        <polyline fill="none" stroke="#89CDCF" stroke-miterlimit="10" points="947.4,1466.1 947,1465.9 946.8,1466.3     "/>

                        <line fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="1.09,1.09" x1="946.2" y1="1467.3" x2="944.3" y2="1470.6"/>
                        <polyline fill="none" stroke="#89CDCF" stroke-miterlimit="10" points="944,1471.1 943.8,1471.5 944.2,1471.8     "/>

                        <line fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.9757,0.9757" x1="945.1" y1="1472.2" x2="953.1" y2="1476.9"/>
                        <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M953.5,1477.2l0.4,0.3c0,0.2,0,0.3,0,0.5"/>
                        <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="1.2375,1.2375" d="M953.9,1479.1      c0,0.3,0.1,0.5,0.1,0.8c0.1,0.4,0.2,0.7,0.3,1.1"/>
                        <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M954.5,1481.5c0.1,0.2,0.1,0.3,0.2,0.5c-0.1,0.1-0.2,0.2-0.4,0.3"/>
                        <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.9952,0.9952" d="M953.6,1483      c-5,4.1-11.2,6.4-17.7,6.4h-89.8"/>
                        <polyline fill="none" stroke="#89CDCF" stroke-miterlimit="10" points="845.6,1489.4 845.1,1489.4 845.1,1488.9     "/>

                        <line fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.8,0.8" x1="845.1" y1="1488.1" x2="845.1" y2="1485.3"/>
                        <polyline fill="none" stroke="#89CDCF" stroke-miterlimit="10" points="845.1,1484.9 845.1,1484.4 844.6,1484.4     "/>

                        <line fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.9,0.9" x1="843.7" y1="1484.4" x2="840.5" y2="1484.4"/>
                        <polyline fill="none" stroke="#89CDCF" stroke-miterlimit="10" points="840.1,1484.4 839.6,1484.4 839.6,1484.9     "/>

                        <line fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="1.0556,1.0556" x1="839.6" y1="1486" x2="839.6" y2="1493.9"/>
                        <polyline fill="none" stroke="#89CDCF" stroke-miterlimit="10" points="839.6,1494.4 839.6,1494.9 840.1,1494.9     "/>
                        <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.9945,0.9945" d="M841.1,1494.9h3.9h0.1h91.3      c8,0,15.6-3,21.5-8.3"/>
                        <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M958.2,1486.2c0.1-0.1,0.2-0.2,0.4-0.3c0,0,0-0.1-0.1-0.1      c0.1,0.1,0.3,0.1,0.5,0.2"/>
                        <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="1.0211,1.0211" d="M959.9,1486.4      c1.1,0.3,2.3,0.4,3.6,0.2c4.4-0.7,7.4-5.1,6.7-9.6c-0.8-4.4-5.1-7.4-9.5-6.7c-0.9,0.2-1.8,0.5-2.6,1"/>
                    </g>
                    <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="1.026,1.026" d="M962.9,1482.6     c-2.4,0.4-4.7-1.1-5-3.4s1.1-4.5,3.4-5c2.4-0.3,4.6,1.3,5,3.5C966.6,1479.9,965.2,1482.3,962.9,1482.6z"/>
                </g>
            </g>
            <path fill="none" d="M1372.7,976.5c-0.1-0.1-0.2-0.3-0.3-0.4c0.1-0.2,0.1-0.3,0.2-0.5"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="1.0197,1.0197" d="M1372.9,974.7   c1-3.5-0.5-7.4-3.8-9.4c-2.1-1.2-4.6-1.4-6.8-0.7"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M1361.9,964.8c-0.2,0.1-0.3,0.1-0.5,0.2l-0.4-0.4"/>

            <line fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.9951,0.9951" x1="1360.4" y1="964" x2="1269.2" y2="872.9"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M1268.9,872.5l-0.4-0.4c0-0.1,0.1-0.2,0.1-0.2h0.5"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M1196.3,739.7c-0.2-0.1-0.3-0.1-0.5-0.2V739"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.9979,0.9979" d="M1195.9,738v-55.3   c0-8.5-3.4-16.5-9.4-22.6l-52.9-52.9"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M1133.2,606.9l-0.4-0.4c0-0.1,0.1-0.2,0.1-0.2h0.5"/>

            <line fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.9703,0.9703" x1="1134.4" y1="606.3" x2="1137.8" y2="606.3"/>
            <polyline fill="none" stroke="#89CDCF" stroke-miterlimit="10" points="1138.3,606.3 1138.8,606.3 1138.8,605.8  "/>

            <line fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="1.1,1.1" x1="1138.8" y1="604.7" x2="1138.8" y2="600.8"/>
            <polyline fill="none" stroke="#89CDCF" stroke-miterlimit="10" points="1138.8,600.3 1138.8,599.8 1138.3,599.8  "/>

            <line fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.9606,0.9606" x1="1137.4" y1="599.8" x2="1134" y2="599.8"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M1133.5,599.8h-0.5c-0.1-0.2-0.1-0.3-0.2-0.5"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.9473,0.9473" d="M1132.3,598.5   c-1.5-2.3-4-3.8-6.9-3.8c-0.9,0-1.8,0.2-2.6,0.4"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M1122.3,595.3c-0.2,0.1-0.3,0.1-0.5,0.2l-0.4-0.4"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.9954,0.9954" d="M1120.8,594.5l-28.8-28.8   c-6-6-14.1-9.3-22.6-9.3h-55.1"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M1013.8,556.4h-0.5c-0.1-0.2-0.1-0.3-0.2-0.5"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="1.0186,1.0186" d="M1012.7,555   c-1.4-2.5-4.1-4.2-7.2-4.2c-3.2,0-6,1.9-7.4,4.6"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M997.9,555.9c-0.1,0.2-0.1,0.3-0.2,0.5c-0.2,0-0.3,0-0.5,0"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="1.0024,1.0024" d="M996.2,556.4   c-31.9,0-63.8,0-95.7,0"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M900,556.4c-0.2,0-0.3,0-0.5,0c-0.1-0.2-0.1-0.3-0.2-0.5"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.93,0.93" d="M898.9,555.1c-1.4-2.6-4.1-4.3-7.2-4.3   l0,0"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M891.2,550.8c-0.2,0-0.3,0-0.5,0l-0.2-0.4"/>

            <line fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.9647,0.9647" x1="890" y1="549.5" x2="888.3" y2="546.6"/>
            <polyline fill="none" stroke="#89CDCF" stroke-miterlimit="10" points="888.1,546.2 887.8,545.8 887.4,546  "/>

            <line fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="1.1,1.1" x1="886.4" y1="546.6" x2="883.1" y2="548.5"/>
            <polyline fill="none" stroke="#89CDCF" stroke-miterlimit="10" points="882.6,548.8 882.2,549 882.4,549.4  "/>

            <line fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.9684,0.9684" x1="882.9" y1="550.3" x2="884.6" y2="553.2"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M884.8,553.6l0.2,0.4c-0.1,0.1-0.2,0.3-0.3,0.4"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.5337,0.5337" d="M884.5,554.9   c-0.1,0.2-0.3,0.5-0.4,0.7"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M884.1,555.9c-0.1,0.2-0.1,0.3-0.2,0.5c-0.2,0-0.3,0-0.5,0"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="1.0086,1.0086" d="M882.4,556.4   c-26.7,0-53.5,0-80.2,0"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M801.7,556.4c-0.2,0-0.3,0-0.5,0c0,0.2,0,0.3,0,0.5"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.9001,0.9001" d="M801.2,557.8c0,1,0,2.1,0,3.2"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M801.1,561.4c0,0.2,0,0.3,0,0.5c0.2,0,0.3,0,0.5,0"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="1.0107,1.0107" d="M802.6,561.9c26.8,0,53.6,0,80.3,0   "/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M883.5,561.9c0.2,0,0.3,0,0.5,0c0.1,0.2,0.1,0.3,0.2,0.5"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.9996,0.9996" d="M884.6,563.2c1.4,2.4,4.1,4,7.1,4   c3.2,0,5.9-1.8,7.3-4.5"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M899.2,562.3c0.1-0.2,0.1-0.3,0.2-0.5c0.2,0,0.3,0,0.5,0"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="1.0037,1.0037" d="M900.9,561.9c32,0,63.9,0,95.9,0"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M997.3,561.9c0.2,0,0.3,0,0.5,0c0.1,0.2,0.1,0.3,0.2,0.5"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="1.1324,1.1324" d="M998.5,563.3   c0.7,1.1,1.7,2.1,2.8,2.8"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M1001.8,566.4c0.1,0.1,0.3,0.2,0.5,0.2v0.5"/>

            <line fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.9944,0.9944" x1="1002.2" y1="568.1" x2="1002.2" y2="571.6"/>
            <polyline fill="none" stroke="#89CDCF" stroke-miterlimit="10" points="1002.2,572.1 1002.2,572.6 1002.7,572.6  "/>

            <line fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="1.1,1.1" x1="1003.8" y1="572.6" x2="1007.7" y2="572.6"/>
            <polyline fill="none" stroke="#89CDCF" stroke-miterlimit="10" points="1008.2,572.6 1008.7,572.6 1008.7,572.1  "/>

            <line fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.9861,0.9861" x1="1008.7" y1="571.1" x2="1008.7" y2="567.6"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M1008.7,567.1v-0.5c0.2-0.1,0.3-0.1,0.5-0.2"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="1.1546,1.1546" d="M1010.2,565.8c1.1-0.8,2-1.8,2.7-3   "/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M1013.1,562.3c0.1-0.2,0.1-0.3,0.2-0.5h0.5"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.9922,0.9922" d="M1014.8,561.9h54   c7.4,0,14.4,2.9,19.7,8.1c9.6,9.6,19.2,19.2,28.8,28.8"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M1117.6,599.1c0.1,0.1,0.2,0.2,0.4,0.4c-0.1,0.2-0.1,0.3-0.2,0.5"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="1.0132,1.0132" d="M1117.5,600.9   c-0.2,0.7-0.3,1.4-0.3,2.1c0,4.5,3.7,8.2,8.2,8.2c0.9,0,1.8-0.2,2.6-0.4"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M1128.5,610.6c0.2-0.1,0.3-0.1,0.5-0.2c0.1,0.1,0.2,0.2,0.4,0.4"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.9949,0.9949" d="M1130,611.5   c17.4,17.4,34.7,34.7,52.1,52.1c5.2,5.2,8.1,12.2,8.2,19.7c0,18.4,0,36.8,0,55.2"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M1190.4,738.9c0,0.2,0,0.3,0,0.5c-0.2,0.1-0.3,0.1-0.5,0.2"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M1264.2,876.3c0.2-0.1,0.3-0.1,0.5-0.2l0.4,0.4"/>

            <line fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.9948,0.9948" x1="1265.7" y1="877.1" x2="1356.8" y2="968.2"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M1357.2,968.6l0.4,0.4c-0.1,0.2-0.1,0.3-0.2,0.5"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="1.0073,1.0073" d="M1357,970.3   c-0.9,3.5,0.5,7.4,3.8,9.3c2.1,1.2,4.5,1.4,6.6,0.7"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M1367.9,980.1c0.2-0.1,0.3-0.1,0.5-0.2c0.1,0.1,0.2,0.3,0.3,0.4"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.9976,0.9976" d="M1369.3,981.1   c3.6,4.8,5.6,10.6,5.7,16.7c0,16.5,0,33,0,49.4c0,18.7,0,37.5,0,56.3c-0.1,7.4-3,14.4-8.2,19.7c-29.1,29.1-58.1,58.1-87.2,87.2"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M1279.3,1210.8c-0.1,0.1-0.2,0.2-0.4,0.4c-0.2-0.1-0.3-0.1-0.5-0.2"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="1.0094,1.0094" d="M1277.5,1210.6   c-3.5-0.9-7.4,0.6-9.3,3.8c-1.2,2.1-1.4,4.5-0.7,6.7"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M1267.7,1221.6c0.1,0.2,0.1,0.3,0.2,0.5c-0.1,0.1-0.2,0.2-0.4,0.4"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.9966,0.9966" d="M1266.8,1223.1   c-13.5,13.5-27,27-40.5,40.5"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M1225.9,1264c-0.1,0.1-0.2,0.2-0.4,0.4c-0.2-0.1-0.3-0.1-0.5-0.2"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="1.0099,1.0099" d="M1224.2,1263.8   c-3.5-0.9-7.3,0.6-9.2,3.8c-1.2,2.1-1.4,4.6-0.7,6.7"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M1214.4,1274.9c0.1,0.2,0.1,0.3,0.2,0.5c-0.1,0.1-0.2,0.2-0.4,0.4"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.9938,0.9938" d="M1213.6,1276.4   c-10,10-19.9,19.9-29.9,29.9c-5.3,5.3-12.3,8.2-19.7,8.2c-0.3,0-0.6,0-0.9,0"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M1162.5,1314.4c-0.2,0-0.3,0-0.5,0l0,0h-0.5"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="1.0008,1.0008" d="M1160.5,1314.4h-24.9   c-8.5,0-16.6,3.3-22.6,9.3c-5.6,5.6-11.1,11.1-16.7,16.7"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M1096,1340.8c-0.1,0.1-0.2,0.2-0.4,0.4c-0.1-0.1-0.2-0.2-0.4-0.4"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.9,0.9" d="M1094.7,1340.1c-0.7-0.7-1.5-1.5-2.2-2.2   "/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M1092.1,1337.6c-0.1-0.1-0.2-0.2-0.4-0.4c-0.1,0.1-0.2,0.2-0.4,0.4"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.9,0.9" d="M1090.8,1338.2c-0.8,0.8-1.5,1.5-2.2,2.2   "/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M1088.2,1340.8c-0.1,0.1-0.2,0.2-0.4,0.4c0.1,0.1,0.2,0.2,0.4,0.4"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.9,0.9" d="M1088.9,1342.1c0.7,0.7,1.5,1.5,2.2,2.2"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M1091.4,1344.7c0.1,0.1,0.2,0.2,0.4,0.4c-0.1,0.1-0.2,0.2-0.4,0.4"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.9871,0.9871" d="M1090.7,1346.1   c-12.9,12.9-25.8,25.8-38.7,38.7"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M1051.6,1385.1c-0.1,0.1-0.2,0.2-0.4,0.4c-0.1-0.1-0.2-0.2-0.4-0.4"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.8999,0.8999" d="M1050.3,1384.5   c-0.7-0.7-1.5-1.5-2.2-2.2"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M1047.7,1382c-0.1-0.1-0.2-0.2-0.4-0.4c-0.1,0.1-0.2,0.2-0.4,0.4"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.9,0.9" d="M1046.4,1382.6c-0.8,0.8-1.5,1.5-2.2,2.2   "/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M1043.8,1385.1c-0.1,0.1-0.2,0.2-0.4,0.4c0.1,0.1,0.2,0.2,0.4,0.4"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.8999,0.8999" d="M1044.5,1386.5   c0.7,0.7,1.5,1.5,2.2,2.2"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M1047,1389c0.1,0.1,0.2,0.2,0.4,0.4c-0.1,0.1-0.2,0.2-0.4,0.4"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.9967,0.9967" d="M1046.3,1390.4   c-26.7,26.7-53.3,53.3-80,80"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M966,1470.8c-0.1,0.1-0.2,0.2-0.4,0.4l0.4,0.4"/>

            <line fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.9,0.9" x1="966.6" y1="1472.1" x2="968.8" y2="1474.4"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M969.2,1474.7l0.4,0.4c0.1-0.1,0.2-0.2,0.4-0.4"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.9967,0.9967" d="M970.6,1474   c26.7-26.7,53.3-53.3,80-80"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M1050.9,1393.6c0.1-0.1,0.2-0.2,0.4-0.4l0,0l0.4-0.4"/>

            <line fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.9,0.9" x1="1052.3" y1="1392.3" x2="1054.5" y2="1390.1"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M1054.8,1389.7l0.4-0.4l0,0c0.1-0.1,0.2-0.2,0.4-0.4"/>
            <rect id="white-base-28_132_" x="833.6" y="1490.1" fill="#FFFFFF" width="12" height="3.8"/>

            <rect id="white-base-28_133_" x="964" y="1468.5" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -755.6161 1116.5531)" fill="#FFFFFF" width="12" height="3.8"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="1.0028,1.0028" d="M1056.2,1388.3   c13.4-13.4,26.9-26.9,40.3-40.3l3-3l16.9-16.9c5.2-5.2,12.2-8.1,19.7-8.1c8.3,0,16.5,0,24.8,0"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M1161.5,1319.9c0.2,0,0.3,0,0.5,0l0,0h0.5"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="1,1" d="M1163.5,1319.9h1.1c8.5,0,16.6-3.4,22.6-9.4   l30.6-30.6"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M1218.1,1279.6l0.4-0.4c0.2,0.1,0.3,0.1,0.5,0.2"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="1.0172,1.0172" d="M1219.9,1279.8   c3.5,0.9,7.4-0.6,9.3-3.8c1.2-2.1,1.4-4.6,0.7-6.8"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M1229.7,1268.7c-0.1-0.2-0.1-0.3-0.2-0.5c0.1-0.1,0.2-0.2,0.4-0.4"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="0.9954,0.9954" d="M1230.5,1267.2   c13.5-13.5,27-27,40.5-40.5"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M1271.4,1226.4c0.1-0.1,0.2-0.2,0.4-0.4c0.2,0.1,0.3,0.1,0.5,0.2"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="1.0185,1.0185" d="M1273.1,1226.5   c3.5,1,7.4-0.5,9.4-3.8c1.2-2.1,1.4-4.6,0.7-6.7"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" d="M1283,1215.5c-0.1-0.2-0.1-0.3-0.2-0.5l0.4-0.4"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="1.0002,1.0002" d="M1283.8,1214l87.3-87.3   c6-6,9.4-14.1,9.4-22.6V1051v-5.6v-48.1c0-7.5-2.7-14.7-7.5-20.4"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="1.0186,1.0186" d="M891.7,563.2c-2.4,0-4.1-2-4.2-4.2   c0-2.3,1.8-4.2,4.2-4.3c2.4,0.1,4.3,2,4.3,4.3S894,563.2,891.7,563.2z"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="1.0205,1.0205" d="M1005.5,563.4   c-2.4,0-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3c2.4,0,4.3,1.9,4.3,4.3C1009.8,561.4,1007.9,563.4,1005.5,563.4z"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="1.0215,1.0215" d="M1125.5,607.3   c-2.3,0-4.2-1.8-4.3-4.2c0-2.5,2-4.4,4.3-4.3c2.3,0,4.2,1.9,4.2,4.3C1129.7,605.4,1127.7,607.2,1125.5,607.3z"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="1.0271,1.0271" d="M1368.7,974.5   c-1.1,2-3.7,2.8-5.7,1.7c-2.2-1.1-2.9-3.9-1.6-5.9c1.1-2,3.8-2.7,5.8-1.6C1369.2,969.9,1369.7,972.5,1368.7,974.5z"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="1.0271,1.0271" d="M1225.7,1273.9   c-1.1,2.1-3.7,2.7-5.8,1.6c-2.1-1.1-2.8-3.8-1.7-5.8c1.2-2,3.9-2.7,5.9-1.5C1226.2,1269.4,1226.8,1272,1225.7,1273.9z"/>
            <path fill="none" stroke="#89CDCF" stroke-miterlimit="10" stroke-dasharray="1.0271,1.0271" d="M1279,1220.7   c-1.1,2.1-3.7,2.7-5.8,1.6c-2.1-1.1-2.8-3.8-1.7-5.8c1.2-2,3.9-2.7,5.9-1.5C1279.5,1216.2,1280,1218.7,1279,1220.7z"/>
        </g>
        <path id="line14_27-line14_28" fill="#FFFFFF" stroke="#D14A43" stroke-width="0.9" stroke-miterlimit="10" d="M751.4,344.4  c21.3-4.4,43.1-7.3,65.3-8.8l-0.2-5.6c-22.5,1.5-44.5,4.5-66.1,8.9C750.7,340.8,751.1,342.6,751.4,344.4z"/>
        <g>
            <g>
                <g>
                    <path fill="none" stroke="#F7A600" stroke-miterlimit="10" d="M760.4,483c-0.2,0.1-0.3,0.2-0.4,0.2l0,0c-0.1-0.1-0.3-0.1-0.5-0.2     "/>
                    <path fill="none" stroke="#F7A600" stroke-miterlimit="10" stroke-dasharray="1.0323,1.0323" d="M758.6,482.8     c-0.7-0.2-1.5-0.3-2.3-0.3c-4.5,0.1-8.2,3.9-8.1,8.4c0.1,2.4,1.2,4.6,2.9,6.1"/>
                    <path fill="none" stroke="#F7A600" stroke-miterlimit="10" d="M751.5,497.3c0.1,0.1,0.3,0.2,0.4,0.3c0,0.2,0,0.3,0,0.5"/>
                    <path fill="none" stroke="#F7A600" stroke-miterlimit="10" stroke-dasharray="0.963,0.963" d="M752,499c0.1,1.5,0.5,3.5,1.5,5.5     c1.7,3.6,4.4,5.7,6,6.7"/>
                    <path fill="none" stroke="#F7A600" stroke-miterlimit="10" d="M760,511.6c0.2,0.1,0.3,0.2,0.4,0.2c0-0.2,0.1-0.3,0.1-0.5"/>
                    <path fill="none" stroke="#F7A600" stroke-miterlimit="10" stroke-dasharray="0.9264,0.9264" d="M760.8,510.4     c0.3-1,0.6-2.1,0.9-3.1"/>
                    <path fill="none" stroke="#F7A600" stroke-miterlimit="10" d="M761.8,506.9c0.1-0.2,0.1-0.3,0.2-0.5c-0.1-0.1-0.3-0.2-0.4-0.3"/>
                    <path fill="none" stroke="#F7A600" stroke-miterlimit="10" stroke-dasharray="0.8852,0.8852" d="M760.9,505.5     c-0.6-0.5-1.2-1.3-1.8-2.2c-0.8-1.3-1.2-2.5-1.4-3.4"/>
                    <path fill="none" stroke="#F7A600" stroke-miterlimit="10" d="M757.6,499.4c0-0.2-0.1-0.3-0.1-0.5c0.2,0,0.3,0,0.5-0.1"/>
                    <path fill="none" stroke="#F7A600" stroke-miterlimit="10" stroke-dasharray="0.9563,0.9563" d="M758.9,498.6     c3.4-1.1,5.9-4.3,5.8-8c0-0.8-0.2-1.6-0.4-2.3"/>
                    <path fill="none" stroke="#F7A600" stroke-miterlimit="10" d="M764.1,487.8c-0.1-0.2-0.1-0.3-0.2-0.5c0.1-0.1,0.3-0.1,0.5-0.2"/>
                    <path fill="none" stroke="#F7A600" stroke-miterlimit="10" stroke-dasharray="1.0822,1.0822" d="M765.4,486.8     c0.7-0.2,1.6-0.3,2.7-0.3c1.3,0,2.4,0.2,3.2,0.4"/>
                    <path fill="none" stroke="#F7A600" stroke-miterlimit="10" d="M771.8,487.1c0.2,0.1,0.3,0.1,0.5,0.2c0.1-0.1,0.2-0.2,0.3-0.4"/>
                    <path fill="none" stroke="#F7A600" stroke-miterlimit="10" stroke-dasharray="0.9463,0.9463" d="M773.3,486.2     c0.8-0.8,1.5-1.6,2.3-2.4"/>
                    <path fill="none" stroke="#F7A600" stroke-miterlimit="10" d="M775.9,483.5c0.1-0.1,0.2-0.2,0.3-0.4c-0.1-0.1-0.3-0.2-0.4-0.2"/>
                    <path fill="none" stroke="#F7A600" stroke-miterlimit="10" stroke-dasharray="1.0634,1.0634" d="M774.8,482.4     c-1.1-0.5-2.5-0.9-4.1-1.2c-0.4-0.1-1.4-0.2-2.6-0.2c-2.9,0.1-5.4,1-7.2,1.8"/>
                </g>
                <path fill="none" stroke="#F7A600" stroke-miterlimit="10" stroke-dasharray="0.9921,0.9921" d="M756.5,494.9    c-2.3,0-4.1-1.9-4.1-4c-0.1-2.2,1.7-4.2,4-4.2c2.3-0.2,4.2,1.7,4.2,4C760.6,492.9,758.8,494.9,756.5,494.9z"/>
            </g>
        </g>
        <g>
            <g>
                <g>
                    <path fill="none" stroke="#F7A600" stroke-miterlimit="10" d="M760.5,358.1c-0.2,0.1-0.3,0.2-0.4,0.2l0,0     c-0.1-0.1-0.3-0.1-0.5-0.2"/>
                    <path fill="none" stroke="#F7A600" stroke-miterlimit="10" stroke-dasharray="1.0323,1.0323" d="M758.7,357.8     c-0.7-0.2-1.5-0.3-2.3-0.3c-4.5,0.1-8.2,3.9-8.1,8.4c0.1,2.4,1.2,4.6,2.9,6.1"/>
                    <path fill="none" stroke="#F7A600" stroke-miterlimit="10" d="M751.6,372.3c0.1,0.1,0.3,0.2,0.4,0.3c0,0.2,0,0.3,0,0.5"/>
                    <path fill="none" stroke="#F7A600" stroke-miterlimit="10" stroke-dasharray="0.963,0.963" d="M752.1,374.1     c0.1,1.5,0.5,3.5,1.5,5.5c1.7,3.6,4.4,5.7,6,6.7"/>
                    <path fill="none" stroke="#F7A600" stroke-miterlimit="10" d="M760.1,386.6c0.2,0.1,0.3,0.2,0.4,0.2c0-0.2,0.1-0.3,0.1-0.5"/>
                    <path fill="none" stroke="#F7A600" stroke-miterlimit="10" stroke-dasharray="0.9264,0.9264" d="M760.9,385.4     c0.3-1,0.6-2.1,0.9-3.1"/>
                    <path fill="none" stroke="#F7A600" stroke-miterlimit="10" d="M761.9,381.9c0.1-0.2,0.1-0.3,0.2-0.5c-0.1-0.1-0.3-0.2-0.4-0.3"/>
                    <path fill="none" stroke="#F7A600" stroke-miterlimit="10" stroke-dasharray="0.8852,0.8852" d="M761,380.6     c-0.6-0.5-1.2-1.3-1.8-2.2c-0.8-1.3-1.2-2.5-1.4-3.4"/>
                    <path fill="none" stroke="#F7A600" stroke-miterlimit="10" d="M757.7,374.4c0-0.2-0.1-0.3-0.1-0.5c0.2,0,0.3,0,0.5-0.1"/>
                    <path fill="none" stroke="#F7A600" stroke-miterlimit="10" stroke-dasharray="0.9563,0.9563" d="M759,373.6     c3.4-1.1,5.9-4.3,5.8-8c0-0.8-0.2-1.6-0.4-2.3"/>
                    <path fill="none" stroke="#F7A600" stroke-miterlimit="10" d="M764.2,362.8c-0.1-0.2-0.1-0.3-0.2-0.5c0.1-0.1,0.3-0.1,0.5-0.2"/>
                    <path fill="none" stroke="#F7A600" stroke-miterlimit="10" stroke-dasharray="1.0822,1.0822" d="M765.5,361.8     c0.7-0.2,1.6-0.3,2.7-0.3c1.3,0,2.4,0.2,3.2,0.4"/>
                    <path fill="none" stroke="#F7A600" stroke-miterlimit="10" d="M771.9,362.1c0.2,0.1,0.3,0.1,0.5,0.2c0.1-0.1,0.2-0.2,0.3-0.4"/>
                    <path fill="none" stroke="#F7A600" stroke-miterlimit="10" stroke-dasharray="0.9463,0.9463" d="M773.4,361.2     c0.8-0.8,1.5-1.6,2.3-2.4"/>
                    <path fill="none" stroke="#F7A600" stroke-miterlimit="10" d="M776,358.5c0.1-0.1,0.2-0.2,0.3-0.4c-0.1-0.1-0.3-0.2-0.4-0.2"/>
                    <path fill="none" stroke="#F7A600" stroke-miterlimit="10" stroke-dasharray="1.0634,1.0634" d="M774.9,357.4     c-1.1-0.5-2.5-0.9-4.1-1.2c-0.4-0.1-1.4-0.2-2.6-0.2c-2.9,0.1-5.4,1-7.2,1.8"/>
                </g>
                <path fill="none" stroke="#F7A600" stroke-miterlimit="10" stroke-dasharray="0.9921,0.9921" d="M756.6,369.9    c-2.3,0-4.1-1.9-4.1-4c-0.1-2.2,1.7-4.2,4-4.2c2.3-0.2,4.2,1.7,4.2,4C760.7,367.9,758.9,369.9,756.6,369.9z"/>
            </g>
        </g>
        <path id="line9_7-line9_8" fill="#ADACAC" d="M782.9,497.9c0,22.7,0,45.4,0,68.2c-1.8,0-3.7,0-5.5,0c0-22.7,0-45.5,0-68.2  C779.3,497.9,781.1,497.9,782.9,497.9z"/>
        <linearGradient id="line1_1-line14_1_00000150064577644466474880000006259200724036386477_" gradientUnits="userSpaceOnUse" x1="34985.125" y1="12852.3213" x2="34996.0703" y2="12850.4189" gradientTransform="matrix(-1.5026 -0.2593 0.2575 -1.492 50491.5586 28732.6055)">
            <stop offset="0" style="stop-color:#D14A43"/>
            <stop offset="1" style="stop-color:#D14A43"/>
        </linearGradient>
        <path id="line1_1-line14_1" fill="url(#line1_1-line14_1_00000150064577644466474880000006259200724036386477_)" d="M1223.4,483.8  c0.8,0,1.4,0.7,1.4,1.5s-0.6,1.5-1.4,1.5s-1.5-0.6-1.5-1.5S1222.6,483.8,1223.4,483.8z M1228.4,483.8c0.8,0,1.4,0.7,1.4,1.5  s-0.6,1.5-1.4,1.5s-1.5-0.6-1.5-1.5C1226.8,484.4,1227.6,483.8,1228.4,483.8z M1218.5,483.8c0.8,0,1.4,0.7,1.4,1.5s-0.6,1.5-1.4,1.5  s-1.5-0.6-1.5-1.5C1216.9,484.4,1217.7,483.8,1218.5,483.8z"/>
        <rect id="lineD2_37-lineD2_38" x="936.9" y="1853.8" fill="#FFFFFF" stroke="#E94282" stroke-width="1.5" stroke-miterlimit="10" width="4" height="30"/>
        <rect id="lineD2_36-lineD2_37" x="936.9" y="1818.8" fill="#FFFFFF" stroke="#E94282" stroke-width="1.5" stroke-miterlimit="10" width="4" height="30"/>
        <circle id="lineD2_37" fill="#FFFFFF" stroke="#E94282" stroke-miterlimit="10" cx="938.9" cy="1851.3" r="3"/>
        <rect id="lineD2_35-lineD2_36" x="936.9" y="1783.8" fill="#FFFFFF" stroke="#E94282" stroke-width="1.5" stroke-miterlimit="10" width="4" height="30"/>
        <circle id="lineD2_36" fill="#FFFFFF" stroke="#E94282" stroke-miterlimit="10" cx="938.9" cy="1816.3" r="3"/>
        <rect id="lineD2_34-lineD2_35" x="936.9" y="1748.8" fill="#FFFFFF" stroke="#E94282" stroke-width="1.5" stroke-miterlimit="10" width="4" height="30"/>
        <circle id="lineD2_35" fill="#FFFFFF" stroke="#E94282" stroke-miterlimit="10" cx="938.9" cy="1781.3" r="3"/>
        <rect id="lineD2_33-lineD2_34" x="936.9" y="1713.8" fill="#FFFFFF" stroke="#E94282" stroke-width="1.5" stroke-miterlimit="10" width="4" height="30"/>
        <circle id="lineD2_34" fill="#FFFFFF" stroke="#E94282" stroke-miterlimit="10" cx="938.9" cy="1746.3" r="3"/>
        <rect id="lineD2_32-lineD2_33" x="936.9" y="1678.8" fill="#FFFFFF" stroke="#E94282" stroke-width="1.5" stroke-miterlimit="10" width="4" height="30"/>
        <circle id="lineD2_33" fill="#FFFFFF" stroke="#E94282" stroke-miterlimit="10" cx="938.9" cy="1711.3" r="3"/>
        <rect id="lineD2_31-lineD2_32" x="936.9" y="1643.8" fill="#FFFFFF" stroke="#E94282" stroke-width="1.5" stroke-miterlimit="10" width="4" height="30"/>
        <circle id="lineD2_32" fill="#FFFFFF" stroke="#E94282" stroke-miterlimit="10" cx="938.9" cy="1676.3" r="3"/>
        <rect id="lineD2_28-lineD2_29" x="1005.7" y="1505.3" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -761.0155 1177.3173)" fill="#FFFFFF" stroke="#E94282" stroke-width="1.5" stroke-miterlimit="9.9962" width="69.9" height="4"/>
        <path id="lineD2_29" fill="#E94282" d="M1010.8,1528.7c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  S1015.3,1528.7,1010.8,1528.7z M1015.1,1537c0,2.3-1.9,4.2-4.3,4.2c-2.4,0-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C1013.2,1532.7,1015.1,1534.8,1015.1,1537z"/>
        <rect id="lineD2_25-lineD2_26" x="1126.8" y="1400.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -656.431 1220.6083)" fill="#FFFFFF" stroke="#E94282" stroke-width="1.5" stroke-miterlimit="9.9962" width="36.8" height="4"/>
        <rect id="lineD2_24-lineD2_25" x="1157" y="1373.4" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -629.1021 1231.9868)" fill="#FFFFFF" stroke="#E94282" stroke-width="1.5" stroke-miterlimit="9.9962" width="31.2" height="4"/>
        <circle id="lineD2_25" fill="#FFFFFF" stroke="#E94282" stroke-miterlimit="10" cx="1160.1" cy="1387.9" r="3"/>
        <path id="lineD2_24" fill="#E94282" d="M1184.4,1366.5c3.9,2.3,9,0.9,11.3-3s0.9-9-3-11.3s-9-0.9-11.3,3  S1180.5,1364.3,1184.4,1366.5z M1184.8,1357.3c1.2-2,3.9-2.7,5.9-1.5c2.1,1.2,2.6,3.8,1.5,5.7c-1.1,2.1-3.7,2.7-5.8,1.6  C1184.4,1362,1183.6,1359.3,1184.8,1357.3z"/>
        <path id="lineD2_21-lineD2_22" fill="#FFFFFF" stroke="#E94282" stroke-width="1.5" stroke-miterlimit="10" d="M1335.8,1095.3  c0-8.2-3.3-16.1-9.1-21.9l-9.2-9.2c-0.9,1-1.8,2-2.6,3l9,9c5.1,5,7.9,11.9,7.9,19.1v50.8l0,0v56.1c0,7.2-2.8,14.1-7.9,19.1  l-18.2,18.2c0.9,0.9,1.9,1.9,2.8,2.8l18.2-18.2c5.8-5.8,9.1-13.7,9.1-21.9v-25.3l0,0L1335.8,1095.3L1335.8,1095.3z"/>
        <rect id="lineD2_20-lineD2_21" x="1275.2" y="985.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -351.9353 1203.8333)" fill="#FFFFFF" stroke="#E94282" stroke-width="1.5" stroke-miterlimit="9.9962" width="4" height="82.1"/>
        <path id="lineD2_21" fill="#E94282" d="M1311.4,1069c4.5,0,8.2-3.7,8.2-8.2s-3.7-8.2-8.2-8.2s-8.2,3.7-8.2,8.2  S1306.9,1069,1311.4,1069z M1307.2,1060.7c0-2.3,1.9-4.2,4.3-4.2s4.1,2,4.2,4.2c0,2.3-1.8,4.2-4.2,4.3  C1309,1065,1307.1,1063,1307.2,1060.7z"/>
        <rect id="lineD2_19-lineD2_20" x="1217.7" y="933.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -328.0829 1146.3192)" fill="#FFFFFF" stroke="#E94282" stroke-width="1.5" stroke-miterlimit="9.9962" width="4" height="71"/>
        <circle id="lineD2_20" fill="#FFFFFF" stroke="#E94282" stroke-miterlimit="10" cx="1246.5" cy="996" r="3"/>
        <path id="lineD2_18-lineD2_19" fill="#FFFFFF" stroke="#E94282" stroke-width="1.5" stroke-miterlimit="10" d="M1185.9,932.6  c-10.9-10.9-21.8-21.8-32.7-32.7c-5.1-5-7.9-11.9-7.9-19.1v-3.1c-1.3,0-2.7,0.1-4,0.1v3c0,8.2,3.3,16.1,9.1,21.9l32.8,32.8  C1184.1,934.5,1185,933.6,1185.9,932.6z"/>
        <path id="lineD2_19" fill="#E94282" d="M1181.4,939.1c0,4.5,3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2s-3.7-8.2-8.2-8.2  C1185.2,930.9,1181.4,934.6,1181.4,939.1z M1189.8,934.9c2.3,0,4.2,1.9,4.2,4.3s-2,4.1-4.2,4.2c-2.3,0-4.2-1.8-4.3-4.2  C1185.5,936.8,1187.5,934.8,1189.8,934.9z"/>
        <path id="lineD2_17-lineD2_18" fill="#FFFFFF" stroke="#E94282" stroke-width="1.5" stroke-miterlimit="10" d="M1141.3,763.9v99.8  c1.3,0,2.6,0.1,4,0.1c0-33.3,0-66.6,0-99.8c0-8.2-3.3-16.1-9.1-21.9l-76.6-76.6c-0.9,1-1.8,2-2.6,3l76.4,76.4  C1138.4,749.9,1141.3,756.7,1141.3,763.9z"/>
        <path id="lineD2_18" fill="#E94282" d="M1134.9,870.8c0,4.5,3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2s-3.7-8.2-8.2-8.2  S1134.9,866.3,1134.9,870.8z M1143.3,866.7c2.2,0,4.1,1.9,4.1,4.2s-2,4-4.1,4.1c-2.2,0-4.1-1.8-4.2-4.1  C1139.1,868.5,1141.1,866.6,1143.3,866.7z"/>
        <rect id="lineD2_16-lineD2_17" x="1027.3" y="611.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -149.6223 914.6675)" fill="#FFFFFF" stroke="#E94282" stroke-width="1.5" stroke-miterlimit="9.9962" width="4" height="53.7"/>
        <path id="lineD2_17" fill="#E94282" d="M1053.3,653.7c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  S1057.8,653.7,1053.3,653.7z M1057.6,662c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C1055.7,657.7,1057.6,659.8,1057.6,662z"/>
        <path id="lineD2_15" fill="none" stroke="#E94282" stroke-miterlimit="10" stroke-dasharray="1" d="M864.1,503.2  c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.3,8.2,8.3s8.2-3.7,8.2-8.2S868.6,503.2,864.1,503.2z M868.4,511.4c0,2.3-1.9,4.2-4.3,4.2  c-2.4,0-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3C866.5,507.1,868.4,509.2,868.4,511.4z"/>
        <rect id="lineD2_13-lineD2_14" x="631.9" y="509.4" fill="#FFFFFF" stroke="#E94282" stroke-width="1.5" stroke-miterlimit="10" width="129.3" height="4"/>
        <rect id="lineD2_12-lineD2_13" x="548.3" y="509.4" fill="#FFFFFF" stroke="#E94282" stroke-width="1.5" stroke-miterlimit="10" width="80" height="4"/>
        <circle id="lineD2_13" fill="#FFFFFF" stroke="#E94282" stroke-miterlimit="10" cx="630" cy="511.4" r="3"/>
        <rect id="lineD2_11-lineD2_12" x="458.9" y="509.4" fill="#FFFFFF" stroke="#E94282" stroke-width="1.5" stroke-miterlimit="10" width="85" height="4"/>
        <circle id="lineD2_12" fill="#FFFFFF" stroke="#E94282" stroke-miterlimit="10" cx="546" cy="511.4" r="3"/>
        <path id="lineD2_8-lineD2_9" fill="#FFFFFF" stroke="#E94282" stroke-width="1.5" stroke-miterlimit="10" d="M309,351.5v20.7h4  v-20.7c0-12.7-10.3-23-23-23h-3.8v4h3.8C300.5,332.5,309,341,309,351.5z"/>
        <path id="lineD2_9" fill="#E94282" d="M311,370.8c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2S315.5,370.8,311,370.8z   M315.2,379.2c0,2.3-1.9,4.2-4.3,4.2s-4.1-2.1-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3C313.3,374.9,315.3,376.9,315.2,379.2z"/>
        <rect id="lineD2_7-lineD2_8" x="215.1" y="328.5" fill="#FFFFFF" stroke="#E94282" stroke-width="1.5" stroke-miterlimit="10" width="67.3" height="4"/>
        <circle id="lineD2_8" fill="#FFFFFF" stroke="#E94282" stroke-miterlimit="10" cx="284" cy="330.5" r="3"/>
        <path id="lineD2_6-lineD2_7" fill="#FFFFFF" stroke="#E94282" stroke-width="1.5" stroke-miterlimit="10" d="M202.9,328.5h-138  c-10.5,0-19-8.5-19-19v-33h-4v33c0,12.7,10.3,23,23,23h138V328.5z"/>
        <rect id="lineD2_5-lineD2_6" x="41.9" y="229.1" fill="#FFFFFF" stroke="#E94282" stroke-width="1.5" stroke-miterlimit="10" width="4" height="42.5"/>
        <circle id="lineD2_6" fill="#FFFFFF" stroke="#E94282" stroke-miterlimit="10" cx="43.9" cy="274" r="3"/>
        <rect id="lineD2_4-lineD2_5" x="41.9" y="181.6" fill="#FFFFFF" stroke="#E94282" stroke-width="1.5" stroke-miterlimit="10" width="4" height="42.5"/>
        <circle id="lineD2_5" fill="#FFFFFF" stroke="#E94282" stroke-miterlimit="10" cx="43.9" cy="226.6" r="3"/>
        <rect id="lineD2_3-lineD2_4" x="41.9" y="134.2" fill="#FFFFFF" stroke="#E94282" stroke-width="1.5" stroke-miterlimit="10" width="4" height="42.5"/>
        <circle id="lineD2_4" fill="#FFFFFF" stroke="#E94282" stroke-miterlimit="10" cx="43.9" cy="179.2" r="3"/>
        <rect id="lineD2_2-lineD2_3" x="41.9" y="86.8" fill="#FFFFFF" stroke="#E94282" stroke-width="1.5" stroke-miterlimit="10" width="4" height="42.5"/>
        <circle id="lineD2_3" fill="#FFFFFF" stroke="#E94282" stroke-miterlimit="10" cx="43.9" cy="131.8" r="3"/>
        <rect id="lineD2_1-lineD2_2" x="41.9" y="39.5" fill="#FFFFFF" stroke="#E94282" stroke-width="1.5" stroke-miterlimit="10" width="4" height="42.5"/>
        <circle id="lineD2_2" fill="#FFFFFF" stroke="#E94282" stroke-miterlimit="10" cx="43.9" cy="84.4" r="3"/>
        <g id="line-D2-2">
            <path fill="#E94282" d="M934,1897.7h-1.6v7.1h1.6c1.9,0,3.4-1.2,3.4-3.5C937.4,1898.9,935.9,1897.7,934,1897.7z"/>
            <path fill="#E94282" d="M955.8,1892.5h-28.1c-0.6,0-1,0.3-1.2,0.9c-1.3,4-3.9,11.9-5.2,15.9c-0.2,0.5,0.1,0.9,0.6,0.9H950   c0.6,0,1-0.3,1.2-0.9c1.3-4,3.9-11.9,5.2-15.9C956.6,1892.9,956.3,1892.5,955.8,1892.5z M934,1906.6h-3.6v-8.8h-1.8l0.6-1.8h1.2   h3.6c3.3,0,5.4,2.2,5.4,5.3C939.5,1904.4,937.3,1906.5,934,1906.6z M948.5,1906.6h-6.9v-1.5l2.7-2.7c2-1.9,2.4-2.5,2.4-3.3   c0-0.9-0.8-1.5-1.7-1.5c-0.8,0-1.8,0.5-2.4,1.1l-1.3-1.3c0.9-0.9,2.4-1.6,3.8-1.6c2.4,0,3.7,1.4,3.7,3.1c0,1.4-0.7,2.4-2.6,4.1   l-1.8,1.7l0,0h4.8L948.5,1906.6z"/>
            <path fill="#FFFFFF" d="M934,1896h-3.6h-1.2l-0.6,1.8h1.8v8.8h3.6c3.3,0,5.4-2.2,5.4-5.3C939.5,1898.2,937.3,1896,934,1896z    M934,1904.8h-1.6v-7.1h1.6c1.9,0,3.4,1.2,3.4,3.5C937.4,1903.6,935.9,1904.8,934,1904.8z"/>
            <path fill="#FFFFFF" d="M944.3,1904.8l1.8-1.7c1.8-1.7,2.6-2.7,2.6-4.1c0-1.6-1.3-3.1-3.7-3.1c-1.4,0-2.9,0.7-3.8,1.6l1.3,1.3   c0.7-0.6,1.6-1.1,2.4-1.1c1,0,1.7,0.6,1.7,1.5c0,0.8-0.4,1.4-2.4,3.3l-2.7,2.7v1.5h6.9l0.6-1.7L944.3,1904.8L944.3,1904.8   L944.3,1904.8z"/>
        </g>
        <g id="line-D2-1">
            <path fill="#E94282" d="M39,17.1h-1.6v7.1H39c1.9,0,3.4-1.2,3.4-3.5C42.4,18.3,41,17.1,39,17.1z"/>
            <path fill="#E94282" d="M60.9,11.9H32.7c-0.6,0-1,0.3-1.2,0.9c-1.3,4-3.9,11.9-5.2,15.9c-0.2,0.5,0.1,0.9,0.6,0.9H55   c0.6,0,1-0.3,1.2-0.9c1.3-4,3.9-11.9,5.2-15.9C61.6,12.3,61.3,11.9,60.9,11.9z M39.1,26h-3.6v-8.8h-1.8l0.6-1.8h1.2h3.6   c3.3,0,5.4,2.2,5.4,5.3S42.4,25.9,39.1,26z M53.6,26h-6.9v-1.5l2.7-2.7c2-1.9,2.4-2.5,2.4-3.3c0-0.9-0.8-1.5-1.7-1.5   c-0.8,0-1.8,0.5-2.4,1.1l-1.3-1.3c0.9-0.9,2.4-1.6,3.8-1.6c2.4,0,3.7,1.4,3.7,3.1c0,1.4-0.7,2.4-2.6,4.1l-1.8,1.7l0,0h4.8L53.6,26z   "/>
            <path fill="#FFFFFF" d="M39.1,15.4h-3.6h-1.2l-0.6,1.8h1.8V26h3.6c3.3,0,5.4-2.2,5.4-5.3S42.4,15.4,39.1,15.4z M39,24.2h-1.6v-7.1   H39c1.9,0,3.4,1.2,3.4,3.5C42.4,23,41,24.2,39,24.2z"/>
            <path fill="#FFFFFF" d="M49.3,24.2l1.8-1.7c1.8-1.7,2.6-2.7,2.6-4.1c0-1.6-1.3-3.1-3.7-3.1c-1.4,0-2.9,0.7-3.8,1.6l1.3,1.3   c0.7-0.6,1.6-1.1,2.4-1.1c1,0,1.7,0.6,1.7,1.5c0,0.8-0.4,1.4-2.4,3.3l-2.7,2.7V26h6.9l0.6-1.7L49.3,24.2L49.3,24.2L49.3,24.2z"/>
        </g>
        <rect id="lineD1_27-lineD1_28" x="41.9" y="516.6" fill="#FFFFFF" stroke="#F7A600" stroke-width="1.5" stroke-miterlimit="10" width="4" height="49.3"/>
        <rect id="lineD1_26-lineD1_27" x="41.9" y="570.4" fill="#FFFFFF" stroke="#F7A600" stroke-width="1.5" stroke-miterlimit="10" width="4" height="39.2"/>
        <circle id="lineD1_27" fill="#FFFFFF" stroke="#F7A600" stroke-miterlimit="10" cx="43.9" cy="568.3" r="3"/>
        <rect id="lineD1_25-lineD1_26" x="41.9" y="614" fill="#FFFFFF" stroke="#F7A600" stroke-width="1.5" stroke-miterlimit="10" width="4" height="51.5"/>
        <circle id="lineD1_26" fill="#FFFFFF" stroke="#F7A600" stroke-miterlimit="10" cx="43.9" cy="612.1" r="3"/>
        <rect id="lineD1_24-lineD1_25" x="41.9" y="669.8" fill="#FFFFFF" stroke="#F7A600" stroke-width="1.5" stroke-miterlimit="10" width="4" height="37.1"/>
        <circle id="lineD1_25" fill="#FFFFFF" stroke="#F7A600" stroke-miterlimit="10" cx="43.9" cy="667.7" r="3"/>
        <rect id="lineD1_23-lineD1_24" x="41.9" y="710.7" fill="#FFFFFF" stroke="#F7A600" stroke-width="1.5" stroke-miterlimit="10" width="4" height="54.4"/>
        <circle id="lineD1_24" fill="#FFFFFF" stroke="#F7A600" stroke-miterlimit="10" cx="43.9" cy="709.1" r="3"/>
        <rect id="white-base-28_91_" x="41.1" y="691" fill="#FFFFFF" width="5.7" height="0.5"/>
        <rect id="white-base-28_92_" x="41" y="692.5" fill="#FFFFFF" width="5.7" height="0.5"/>
        <path id="lineD1_22-lineD1_23" fill="#FFFFFF" stroke="#F7A600" stroke-width="1.5" stroke-miterlimit="10" d="M53.8,841  c-5.1-5-7.9-11.9-7.9-19.1v-52.3c-1.3,0-2.7,0-4,0V822c0,8.2,3.3,16.1,9.1,21.9l50.6,50.6c0.8-1,1.7-2,2.8-2.8L53.8,841z"/>
        <circle id="lineD1_23" fill="#FFFFFF" stroke="#F7A600" stroke-miterlimit="10" cx="43.9" cy="767.1" r="3"/>
        <rect id="lineD1_19-lineD1_20" x="268.6" y="948.5" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -563.3483 540.9385)" fill="#FFFFFF" stroke="#F7A600" stroke-width="1.5" stroke-miterlimit="9.9962" width="205.4" height="4"/>
        <path id="lineD1_20" fill="#F7A600" d="M293.6,1019.9c-4.5,0-8.2,3.7-8.2,8.2c0,4.5,3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  C301.9,1023.7,298.1,1019.9,293.6,1019.9z M297.9,1028.2c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C296,1023.9,297.9,1025.9,297.9,1028.2z"/>
        <rect id="lineD1_18-lineD1_19" x="434.6" y="821.5" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -436.3788 593.4725)" fill="#FFFFFF" stroke="#F7A600" stroke-width="1.5" stroke-miterlimit="9.9962" width="127.2" height="4"/>
        <path id="lineD1_19" fill="#F7A600" d="M448.7,865c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  C456.9,868.7,453.2,865,448.7,865z M452.9,873.2c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C451,868.9,453,871,452.9,873.2z"/>
        <path id="lineD1_17-lineD1_18" fill="#FFFFFF" stroke="#F7A600" stroke-width="1.5" stroke-miterlimit="9.9998" d="M597.7,721.2  l-45.9,45.9l2.8,2.8l46.3-46.3C599.8,722.9,598.8,722.1,597.7,721.2z"/>
        <rect id="white-base-28_50_" x="529.7" y="754" opacity="0.65" fill="#FFFFFF" width="43.2" height="12"/>
        <path id="line11_5-line11_6" fill="#89CDCF" d="M434.8,918.3c-19.3-19.3-38.6-38.6-57.9-57.9c-2.6-2.6-4.1-6.2-4.1-9.9v-35.8h-5.5  c0,10.3,0,20.7,0,31c0,2.1,0,4.2,0,6.3c0,4.2,1.7,8.3,4.7,11.3c19.6,19.6,39.1,39.1,58.7,58.7C432.1,920.7,433.5,919.5,434.8,918.3z  "/>
        <path id="lineD1_18" fill="#F7A600" d="M548.3,765.3c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  S552.9,765.3,548.3,765.3z M552.5,773.5c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C550.7,769.2,552.6,771.2,552.5,773.5z"/>
        <rect id="lineD1_14-lineD1_16" x="754.5" y="452.8" fill="#FFFFFF" stroke="#F7A600" stroke-width="1.5" stroke-miterlimit="10" width="4" height="76.6"/>
        <rect id="lineD1_11-lineD1_12" x="754.5" y="281.8" fill="#FFFFFF" stroke="#F7A600" stroke-width="1.5" stroke-miterlimit="10" width="4" height="35.4"/>
        <rect id="lineD1_10-lineD1_11" x="754.5" y="225.2" fill="#FFFFFF" stroke="#F7A600" stroke-width="1.5" stroke-miterlimit="10" width="4" height="51.8"/>
        <circle id="lineD1_11" fill="#FFFFFF" stroke="#F7A600" stroke-miterlimit="10" cx="756.5" cy="279.4" r="3"/>
        <circle id="lineD1_10" fill="#FFFFFF" stroke="#F7A600" stroke-miterlimit="10" cx="756.5" cy="222.9" r="3"/>
        <rect id="lineD1_7-lineD1_8" x="754.5" y="121.3" fill="#FFFFFF" stroke="#F7A600" stroke-width="1.5" stroke-miterlimit="10" width="4" height="26.9"/>
        <circle id="lineD1_8" fill="#FFFFFF" stroke="#F7A600" stroke-miterlimit="10" cx="756.5" cy="150.4" r="3"/>
        <path id="lineD1_6-lineD1_7" fill="#FFFFFF" stroke="#F7A600" stroke-width="1.5" stroke-miterlimit="10" d="M754.5,117.4  c1.3,0,2.7,0,4,0c-0.3-7.8-3.5-15.3-9.1-20.9l-25-25c-0.9,1-1.8,2-2.7,2.9l24.9,24.9C751.5,104.1,754.3,110.6,754.5,117.4z"/>
        <circle id="lineD1_7" fill="#FFFFFF" stroke="#F7A600" stroke-miterlimit="10" cx="756.5" cy="119" r="3"/>
        <path id="lineD1_5-lineD1_6" fill="#FFFFFF" stroke="#F7A600" stroke-width="1.5" stroke-miterlimit="10" d="M696.9,44  c-5.8-5.8-13.7-9.1-21.9-9.1h-4.5c0,1.3,0.1,2.6,0.1,4h4.4c7.1-0.1,14,2.8,19.1,7.9l25,25l2.8-2.9L696.9,44z"/>
        <path id="lineD1_17" fill="#F7A600" d="M604.3,709.2c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  S608.8,709.2,604.3,709.2z M608.4,717.5c0,2.2-1.9,4.1-4.2,4.1s-4-2-4.1-4.1c0-2.2,1.8-4.1,4.1-4.2  C606.6,713.3,608.5,715.3,608.4,717.5z"/>
        <circle id="lineD1_6" fill="#FFFFFF" stroke="#F7A600" stroke-miterlimit="10" cx="721.8" cy="71.7" r="3"/>
        <rect id="lineD1_4-lineD1_5" x="613.3" y="34.9" fill="#FFFFFF" stroke="#F7A600" stroke-width="1.5" stroke-miterlimit="10" width="52.7" height="4"/>
        <circle id="lineD1_5" fill="#FFFFFF" stroke="#F7A600" stroke-miterlimit="10" cx="668.4" cy="36.9" r="3"/>
        <rect id="lineD1_3-lineD1_4" x="540" y="34.9" fill="#FFFFFF" stroke="#F7A600" stroke-width="1.5" stroke-miterlimit="10" width="68.6" height="4"/>
        <circle id="lineD1_4" fill="#FFFFFF" stroke="#F7A600" stroke-miterlimit="10" cx="611.1" cy="36.9" r="3"/>
        <rect id="lineD1_2-lineD1_3" x="444.7" y="34.9" fill="#FFFFFF" stroke="#F7A600" stroke-width="1.5" stroke-miterlimit="10" width="90.6" height="4"/>
        <circle id="lineD1_3" fill="#FFFFFF" stroke="#F7A600" stroke-miterlimit="10" cx="537.5" cy="36.9" r="3"/>
        <rect id="lineD1_1-lineD1_2" x="350.2" y="34.9" fill="#FFFFFF" stroke="#F7A600" stroke-width="1.5" stroke-miterlimit="10" width="90.1" height="4"/>
        <circle id="lineD1_2" fill="#FFFFFF" stroke="#F7A600" stroke-miterlimit="10" cx="442.3" cy="36.9" r="3"/>
        <g id="line-D1-2">
            <path fill="#F7A600" d="M60.9,489.6H32.7c-0.6,0-1,0.3-1.2,0.9c-1.3,4-3.9,11.9-5.2,15.9c-0.2,0.5,0.1,0.9,0.6,0.9H55   c0.6,0,1-0.3,1.2-0.9c1.3-4,3.9-11.9,5.2-15.9C61.6,490,61.3,489.6,60.9,489.6z M39.8,503.7h-3.6v-8.8h-1.8l0.6-1.8h1.2h3.6   c3.3,0,5.4,2.2,5.4,5.3S43.1,503.7,39.8,503.7z M52.9,503.7h-5.8v-1.8h2.1v-7h-1.9v-1.8h3.9v8.8h2.3L52.9,503.7z"/>
            <path fill="#F7A600" d="M39.7,494.9h-1.6v7.1h1.6c1.9,0,3.4-1.2,3.4-3.5C43.2,496.1,41.7,494.9,39.7,494.9z"/>
            <path fill="#FFFFFF" d="M39.8,493.1h-3.6H35l-0.6,1.8h1.8v8.8h3.6c3.3,0,5.4-2.2,5.4-5.3C45.2,495.3,43.1,493.1,39.8,493.1z    M39.7,501.9h-1.6v-7.1h1.6c1.9,0,3.4,1.2,3.4,3.5C43.2,500.7,41.7,501.9,39.7,501.9z"/>
            <polygon fill="#FFFFFF" points="51.2,493.1 47.3,493.1 47.3,494.9 49.2,494.9 49.2,501.9 47.1,501.9 47.1,503.7 52.9,503.7    53.4,501.9 51.2,501.9  "/>
        </g>
        <g id="line-D1-1">
            <path fill="#F7A600" d="M341.6,28.1h-28.1c-0.6,0-1,0.3-1.2,0.9c-1.3,4-3.9,11.9-5.2,15.9c-0.2,0.5,0.1,0.9,0.6,0.9h28.1   c0.6,0,1-0.3,1.2-0.9c1.3-4,3.9-11.9,5.2-15.9C342.4,28.5,342.1,28.1,341.6,28.1z M320.5,42.2h-3.6v-8.8h-1.8l0.6-1.8h1.2h3.6   c3.3,0,5.4,2.2,5.4,5.3C326,40,323.9,42.1,320.5,42.2z M333.6,42.2h-5.8v-1.8h2.1v-7H328v-1.8h3.9v8.8h2.3L333.6,42.2z"/>
            <path fill="#F7A600" d="M320.5,33.3h-1.6v7.1h1.6c1.9,0,3.4-1.2,3.4-3.5C323.9,34.5,322.4,33.3,320.5,33.3z"/>
            <path fill="#FFFFFF" d="M320.5,31.6h-3.6h-1.2l-0.6,1.8h1.8v8.8h3.6c3.3,0,5.4-2.2,5.4-5.3C326,33.8,323.9,31.6,320.5,31.6z    M320.5,40.4h-1.6v-7.1h1.6c1.9,0,3.4,1.2,3.4,3.5C323.9,39.2,322.4,40.4,320.5,40.4z"/>
            <polygon fill="#FFFFFF" points="331.9,31.6 328,31.6 328,33.3 330,33.3 330,40.4 327.9,40.4 327.9,42.2 333.6,42.2 334.2,40.4    331.9,40.4  "/>
        </g>
        <path id="line15_9-line15_10" fill="#D68AB1" d="M1416.4,1710.9V1649h-5.5v61.9C1412.8,1710.9,1414.6,1710.9,1416.4,1710.9z"/>
        <rect id="line15_10" x="1405.5" y="1710.9" fill="#D68AB1" width="16.4" height="5.5"/>
        <path id="line15_8-line15_9" fill="#D68AB1" d="M1416.4,1643.6v-57.1h-5.5v57.1C1412.8,1643.6,1414.6,1643.6,1416.4,1643.6z"/>
        <path id="line15_9" fill="#D68AB1" d="M1410.9,1649.1c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0  C1410.9,1645.5,1410.9,1647.3,1410.9,1649.1z"/>
        <path id="line15_7-line15_8" fill="#D68AB1" d="M1416.4,1581c0-32.6,0-65.2,0-97.7c-1.8,0-3.7,0.1-5.5,0.1c0,32.5,0,65.1,0,97.6  C1412.8,1581,1414.6,1581,1416.4,1581z"/>
        <path id="line15_8" fill="#D68AB1" d="M1410.9,1586.5c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0  C1410.9,1582.9,1410.9,1584.7,1410.9,1586.5z"/>
        <path id="line15_7" fill="#D68AB1" d="M1405.4,1475.8c0,4.5,3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2s-3.7-8.2-8.2-8.2  S1405.4,1471.3,1405.4,1475.8z M1413.8,1471.7c2.3,0,4.2,1.9,4.2,4.3s-2,4.1-4.2,4.2c-2.3,0-4.2-1.8-4.3-4.2  C1409.5,1473.5,1411.5,1471.6,1413.8,1471.7z"/>
        <path id="line-15-1" fill="#D68AB1" d="M1414.9,1727L1414.9,1727c0.5-0.2,1.1-0.4,1.6-0.4c1.5,0,3,1,3,2.9c0,1.6-1.3,3.1-3.5,3.1  c-1.2,0-2.4-0.5-3.2-1.3l1.1-1.1c0.6,0.6,1.3,0.8,2,0.8c1,0,1.7-0.6,1.7-1.5c0-0.8-0.6-1.4-1.7-1.4c-0.4,0-1,0.2-1.4,0.5l-1.3-0.1  l0.2-5h5.7l-0.5,1.5h-3.7L1414.9,1727z M1411,1732.5h-1.7v-7.5h-1.6l0.5-1.5h2.8L1411,1732.5L1411,1732.5z M1422.5,1728  c0-4.9-3.9-8.8-8.8-8.8s-8.8,3.9-8.8,8.8s3.9,8.8,8.8,8.8S1422.5,1732.9,1422.5,1728"/>
        <path id="line14_31-line14_1" fill="#FFFFFF" stroke="#D14A43" stroke-width="0.9" stroke-miterlimit="10" d="M1200.3,482  c1.3-1.3,2.5-2.7,3.8-4c-11.5-11.6-23.5-22.6-36-33c-1.1,1.4-2.3,2.9-3.4,4.3C1177,459.6,1188.9,470.5,1200.3,482z"/>
        <path id="line14_30-line14_31" fill="#FFFFFF" stroke="#D14A43" stroke-width="0.9" stroke-miterlimit="10" d="M1113.4,411.8  c15.6,10,30.7,20.8,45.1,32.4c1.1-1.5,2.1-3,3.2-4.5c-14.5-11.7-29.7-22.6-45.5-32.7C1115.3,408.6,1114.3,410.2,1113.4,411.8z"/>
        <circle id="line14_31" fill="#FFFFFF" stroke="#D14A43" stroke-miterlimit="10" cx="1163.3" cy="444.5" r="5"/>
        <path id="line14_29-line14_30" fill="#FFFFFF" stroke="#D14A43" stroke-width="0.9" stroke-miterlimit="10" d="M1068.7,386.4  c13,6.5,25.6,13.5,37.9,21.1c0.9-1.6,1.8-3.2,2.7-4.9c-12.4-7.7-25.2-14.8-38.4-21.3C1070.1,383,1069.4,384.7,1068.7,386.4z"/>
        <circle id="line14_30" fill="#FFFFFF" stroke="#D14A43" stroke-miterlimit="10" cx="1111.4" cy="407.2" r="5"/>
        <path id="line14_28-line14_29" fill="#FFFFFF" stroke="#D14A43" stroke-width="0.9" stroke-miterlimit="10" d="M831.3,334.9  c6-0.2,12-0.3,18.1-0.3c73.4,0,143.2,16.3,206,45.5c0.7-1.7,1.4-3.4,2.1-5.1c-63.5-29.5-134.1-46-208.2-46c-6.1,0-12.3,0.1-18.4,0.3  C831.2,331.1,831.2,333,831.3,334.9z"/>
        <path id="line14_29" fill="#FFFFFF" stroke="#D14A43" stroke-miterlimit="10" d="M1063.2,372.6c-4.4,0-8,3.6-8,8s3.6,8,8,8  s8-3.6,8-8S1067.6,372.6,1063.2,372.6z M1067.2,380.6c0,2.1-1.8,4-4.1,4c-2.2,0-3.9-1.9-3.9-4s1.7-4,3.9-4  C1065.5,376.5,1067.3,378.4,1067.2,380.6z"/>
        <path id="line14_28" fill="#FFFFFF" stroke="#D14A43" stroke-miterlimit="10" d="M824,324.4c-4.4,0-8,3.6-8,8s3.6,8,8,8s8-3.6,8-8  S828.4,324.4,824,324.4z M828,332.4c0,2.1-1.8,4-4.1,4c-2.2,0-3.9-1.9-3.9-4s1.7-4,3.9-4C826.2,328.3,828.1,330.2,828,332.4z"/>
        <path id="line14_26-line15_27" fill="#FFFFFF" stroke="#D14A43" stroke-width="0.9" stroke-miterlimit="10" d="M660.5,372.5  c24.6-10.3,50.2-18.7,76.6-24.9l-1-5.5c-26.7,6.3-52.6,14.7-77.5,25.2C659.2,369,659.9,370.7,660.5,372.5z"/>
        <path id="line14_27" fill="#FFFFFF" stroke="#D14A43" stroke-miterlimit="10" d="M743.8,335.2c-4.4,0-8,3.6-8,8s3.6,8,8,8s8-3.6,8-8  S748.2,335.2,743.8,335.2z M747.8,343.2c0,2.1-1.8,4-4.1,4c-2.2,0-3.9-1.9-3.9-4s1.7-4,3.9-4C746,339.1,747.9,341,747.8,343.2z"/>
        <path id="line14_25-line14_26" fill="#FFFFFF" stroke="#D14A43" stroke-width="0.9" stroke-miterlimit="10" d="M585.7,411.6  c21.4-13.6,44-25.7,67.4-36c-0.7-1.7-1.4-3.5-2.1-5.2c-23.7,10.4-46.5,22.6-68.1,36.4C583.8,408.4,584.8,410,585.7,411.6z"/>
        <circle id="line14_26" fill="#FFFFFF" stroke="#D14A43" stroke-miterlimit="10" cx="655.8" cy="371.4" r="5"/>
        <path id="line14_24-line14_25" fill="#FFFFFF" stroke="#D14A43" stroke-width="0.9" stroke-miterlimit="10" d="M511.8,469.1  c20.8-19.5,43.3-37.3,67.1-53.1c-1-1.6-1.9-3.2-2.8-4.8c-24.2,15.9-46.8,33.9-67.9,53.6C509.4,466.3,510.6,467.7,511.8,469.1z"/>
        <circle id="line14_25" fill="#FFFFFF" stroke="#D14A43" stroke-miterlimit="10" cx="580.9" cy="411.4" r="5"/>
        <path id="line14_23-line14_24" fill="#FFFFFF" stroke="#D14A43" stroke-width="0.9" stroke-miterlimit="10" d="M497.4,475.3  c-15.3,15.3-29.7,31.5-43,48.7c1.4,1.2,2.8,2.4,4.2,3.6c13.2-17,27.4-33.1,42.6-48.2C499.9,478,498.7,476.7,497.4,475.3z"/>
        <path id="line14_24" fill="#FFFFFF" stroke="#D14A43" stroke-miterlimit="10" d="M504.4,464.1c-4.4,0-8,3.6-8,8s3.6,8,8,8s8-3.6,8-8  S508.8,464.1,504.4,464.1z M508.5,472.1c0,2.1-1.8,4-4.1,4c-2.2,0-3.9-1.9-3.9-4s1.7-4,3.9-4C506.7,468.1,508.5,470,508.5,472.1z"/>
        <path id="line14_22-line14_23" fill="#FFFFFF" stroke="#D14A43" stroke-width="0.9" stroke-miterlimit="10" d="M445.3,536.1  c-16.4,22.5-31.1,46.5-43.6,71.6c1.6,0.9,3.3,1.7,4.9,2.6c12.4-24.9,26.9-48.6,43.2-70.9C448.3,538.3,446.8,537.2,445.3,536.1z"/>
        <path id="line14_23" fill="#FFFFFF" stroke="#D14A43" stroke-miterlimit="10" d="M451.9,523.6c-4.4,0-8,3.6-8,8s3.6,8,8,8s8-3.6,8-8  S456.3,523.6,451.9,523.6z M455.9,531.6c0,2.1-1.8,4-4.1,4c-2.2,0-3.9-1.9-3.9-4s1.7-4,3.9-4C454.1,527.5,456,529.4,455.9,531.6z"/>
        <path id="line14_21-line14_22" fill="#FFFFFF" stroke="#D14A43" stroke-width="0.9" stroke-miterlimit="10" d="M395.1,621.4  c-6.3,13.5-12,27.4-17,41.6c1.7,0.6,3.5,1.2,5.2,1.8c5-14,10.6-27.7,16.8-41.1C398.5,622.9,396.8,622.1,395.1,621.4z"/>
        <path id="line14_22" fill="#FFFFFF" stroke="#D14A43" stroke-miterlimit="10" d="M400.8,607.6c-4.4,0-8,3.6-8,8s3.6,8,8,8s8-3.6,8-8  S405.2,607.6,400.8,607.6z M404.8,615.6c0,2.1-1.8,4-4.1,4c-2.2,0-3.9-1.9-3.9-4s1.7-4,3.9-4C403,611.5,404.9,613.4,404.8,615.6z"/>
        <path id="line14_20-line14_21" fill="#FFFFFF" stroke="#D14A43" stroke-width="0.9" stroke-miterlimit="10" d="M367.6,718.4  c3.6-15.5,7.9-30.8,13-45.8c-1.7-0.7-3.4-1.3-5.2-2c-5.1,15.2-9.6,30.8-13.2,46.6C364,717.6,365.8,718,367.6,718.4z"/>
        <path id="line14_18-line14_19" fill="#FFFFFF" stroke="#D14A43" stroke-width="0.9" stroke-miterlimit="10" d="M360,898.4  c-3.3-22.7-5-46-5-69.5c-0.1-9.4,0.2-18.9,0.8-28.3c-1.8-0.1-3.7-0.2-5.5-0.4c-0.6,9.5-0.8,19.1-0.8,28.7c0,23.8,1.7,47.3,5,70.2  C356.3,898.9,358.1,898.6,360,898.4z"/>
        <path id="line14_17-line14_18" fill="#FFFFFF" stroke="#D14A43" stroke-width="0.9" stroke-miterlimit="10" d="M386.7,1002.5  c-4.8-12.6-8.7-24.7-12-36.1c-5.6-19.2-10.1-38.9-13.4-58.9c-1.8,0.3-3.6,0.7-5.4,1c3.3,20.2,7.8,40.1,13.5,59.4  c2.8,9.8,6.1,20.1,10,30.8c4.8,13.3,9.9,25.5,15.1,36.7c1.6-0.8,3.3-1.5,4.9-2.3C395.1,1023.6,390.8,1013.4,386.7,1002.5z"/>
        <path id="line14_18" fill="#FFFFFF" stroke="#D14A43" stroke-miterlimit="10" d="M357.9,895c-4.4,0-8,3.6-8,8s3.6,8,8,8s8-3.6,8-8  S362.3,895,357.9,895z M361.9,903c0,2.1-1.8,4-4.1,4c-2.2,0-3.9-1.9-3.9-4s1.7-4,3.9-4C360.1,898.9,362,900.8,361.9,903z"/>
        <path id="line14_15-line14_16" fill="#FFFFFF" stroke="#D14A43" stroke-width="0.9" stroke-miterlimit="10" d="M494.5,1171.9  c-1.3,1.3-2.5,2.6-3.8,3.9c29.8,30.8,63.6,57.9,100.4,80.3c0.8-1.6,1.6-3.2,2.5-4.8C557.2,1229.1,523.9,1202.4,494.5,1171.9z"/>
        <path id="line14_16" fill="#FFFFFF" stroke="#D14A43" stroke-miterlimit="10" d="M487.4,1160.5c-4.4,0-8,3.6-8,8s3.6,8,8,8  s8-3.6,8-8S491.8,1160.5,487.4,1160.5z M491.4,1168.5c0,2.1-1.8,4-4.1,4c-2.2,0-3.9-1.9-3.9-4s1.7-4,3.9-4  C489.6,1164.4,491.5,1166.3,491.4,1168.5z"/>
        <path id="line14_14-line14_15" fill="#FFFFFF" stroke="#D14A43" stroke-width="0.9" stroke-miterlimit="10" d="M681.3,1293.8  c-26.1-9.5-51.1-21.2-75-34.9c-0.8,1.6-1.7,3.2-2.5,4.8c24.1,13.8,49.5,25.6,75.9,35.2C680.2,1297.2,680.8,1295.5,681.3,1293.8z"/>
        <path id="line14_15" fill="#FFFFFF" stroke="#D14A43" stroke-miterlimit="10" d="M598.7,1249.6c-4.4,0-8,3.6-8,8s3.6,8,8,8  s8-3.6,8-8S603.1,1249.6,598.7,1249.6z M602.7,1257.6c0,2.1-1.8,4-4.1,4c-2.2,0-3.9-1.9-3.9-4s1.7-4,3.9-4  C600.9,1253.5,602.8,1255.4,602.7,1257.6z"/>
        <path id="line14_13-line14_14" fill="#FFFFFF" stroke="#D14A43" stroke-width="0.9" stroke-miterlimit="10" d="M813.6,1322.2  c-43.2-3.2-85-11.9-124.5-25.7c-0.5,1.7-1.1,3.4-1.6,5.2c40,13.9,82.1,22.7,125.8,25.9C813.4,1325.8,813.5,1324,813.6,1322.2z"/>
        <circle id="line14_14" fill="#FFFFFF" stroke="#D14A43" stroke-miterlimit="10" cx="684.4" cy="1297.7" r="5"/>
        <path id="line14_12-line14_13" fill="#FFFFFF" stroke="#D14A43" stroke-width="0.9" stroke-miterlimit="10" d="M890,1321.8  c-13.4,1.1-27,1.7-40.6,1.7c-7.1,0-14.2-0.2-21.2-0.5c-0.1,1.8-0.2,3.6-0.3,5.4c7.1,0.3,14.3,0.5,21.5,0.5c13.9,0,27.6-0.6,41.2-1.7  C890.4,1325.4,890.2,1323.6,890,1321.8z"/>
        <path id="line14_13" fill="#FFFFFF" stroke="#D14A43" stroke-miterlimit="10" d="M820.7,1317.4c-4.4,0-8,3.6-8,8s3.6,8,8,8  s8-3.6,8-8S825.1,1317.4,820.7,1317.4z M824.8,1325.4c0,2.1-1.8,4-4.1,4c-2.2,0-3.9-1.9-3.9-4s1.7-4,3.9-4  C823,1321.4,824.8,1323.3,824.8,1325.4z"/>
        <path id="line14_11-line14_12" fill="#FFFFFF" stroke="#D14A43" stroke-width="0.9" stroke-miterlimit="10" d="M987.6,1309.2  c-0.4-1.7-0.9-3.5-1.3-5.2c-28.4,8.3-57.8,14.1-87.9,17.1c0.1,1.8,0.2,3.6,0.3,5.4C929.2,1323.4,958.9,1317.6,987.6,1309.2z"/>
        <circle id="line14_12" fill="#FFFFFF" stroke="#D14A43" stroke-miterlimit="10" cx="894.4" cy="1323.9" r="5"/>
        <path id="line14_10-line14_11" fill="#FFFFFF" stroke="#D14A43" stroke-width="0.9" stroke-miterlimit="10" d="M1001.7,1304.9  c38.5-12.5,75.1-29.6,109-50.6c-0.9-1.6-1.8-3.1-2.6-4.7c-33.5,20.8-69.7,37.7-107.8,50.1  C1000.8,1301.4,1001.2,1303.2,1001.7,1304.9z"/>
        <path id="line14_11" fill="#FFFFFF" stroke="#D14A43" stroke-miterlimit="10" d="M993.9,1296.5c-4.4,0-8,3.6-8,8s3.6,8,8,8  s8-3.6,8-8S998.3,1296.5,993.9,1296.5z M998,1304.5c0,2.1-1.8,4-4.1,4c-2.2,0-3.9-1.9-3.9-4s1.7-4,3.9-4  C996.2,1300.5,998,1302.4,998,1304.5z"/>
        <path id="line14_9-line14_10" fill="#FFFFFF" stroke="#D14A43" stroke-width="0.9" stroke-miterlimit="10" d="M1212.8,1163  c-27.4,29.8-58.4,56.2-92.2,78.6c0.9,1.6,1.8,3.1,2.7,4.7c34.3-22.7,65.7-49.4,93.5-79.6C1215.4,1165.5,1214.1,1164.2,1212.8,1163z"/>
        <path id="line14_10" fill="#FFFFFF" stroke="#D14A43" stroke-miterlimit="10" d="M1115.7,1239.9c-4.4,0-8,3.6-8,8s3.6,8,8,8  s8-3.6,8-8S1120.1,1239.9,1115.7,1239.9z M1119.8,1247.9c0,2.1-1.8,4-4.1,4c-2.2,0-3.9-1.9-3.9-4s1.7-4,3.9-4  C1118,1243.9,1119.8,1245.8,1119.8,1247.9z"/>
        <path id="line14_8-line14_9" fill="#FFFFFF" stroke="#D14A43" stroke-width="0.9" stroke-miterlimit="10" d="M1226.6,1155.6  c23.2-26.7,43.6-55.8,60.8-86.9c-1.6-0.9-3.2-1.7-4.8-2.6c-17,30.7-37.1,59.4-59.9,85.8C1224.1,1153.1,1225.4,1154.3,1226.6,1155.6z  "/>
        <path id="line14_9" fill="#FFFFFF" stroke="#D14A43" stroke-miterlimit="10" d="M1219.8,1151.2c-4.4,0-8,3.6-8,8s3.6,8,8,8  s8-3.6,8-8S1224.2,1151.2,1219.8,1151.2z M1223.9,1159.2c0,2.1-1.8,4-4.1,4c-2.2,0-3.9-1.9-3.9-4s1.7-4,3.9-4  C1222.1,1155.2,1223.9,1157.1,1223.9,1159.2z"/>
        <path id="line14_7-line14_8" fill="#FFFFFF" stroke="#D14A43" stroke-width="0.9" stroke-miterlimit="10" d="M1289.8,1052.8  c1.6,0.9,3.2,1.7,4.8,2.6c13.8-26.8,25.2-55,34-84.2c-1.8-0.4-3.6-0.9-5.3-1.3C1314.6,998.7,1303.3,1026.4,1289.8,1052.8z"/>
        <path id="line14_8" fill="#FFFFFF" stroke="#D14A43" stroke-miterlimit="10" d="M1288.6,1068.8c4.4,0,8-3.6,8-8s-3.6-8-8-8  s-8,3.6-8,8S1284.2,1068.8,1288.6,1068.8z M1284.6,1060.8c0-2.1,1.8-4,4.1-4c2.2,0,3.9,1.9,3.9,4s-1.7,4-3.9,4  C1286.4,1064.9,1284.5,1063,1284.6,1060.8z"/>
        <path id="line14_5-line14_6" fill="#FFFFFF" stroke="#D14A43" stroke-width="0.9" stroke-miterlimit="10" d="M1343.6,845.7  c-0.5,13.5-1.5,27-3,40.2c1.8,0.2,3.6,0.5,5.4,0.7c1.6-13.5,2.6-27.1,3.1-40.8C1347.3,845.8,1345.5,845.7,1343.6,845.7z"/>
        <path id="line14_4-line14_5" fill="#FFFFFF" stroke="#D14A43" stroke-width="0.9" stroke-miterlimit="10" d="M1337,718.6  c-1.8,0.4-3.6,0.8-5.4,1.2c8.1,35.2,12.3,71.8,12.3,109.3c0,0.5,0,1,0,1.5c1.8,0,3.7,0.1,5.5,0.1c0-0.6,0-1.2,0-1.8  C1349.4,791.1,1345.1,754.1,1337,718.6z"/>
        <path id="line14_5" fill="#FFFFFF" stroke="#D14A43" stroke-miterlimit="10" d="M1346.7,846c4.4,0,8-3.6,8-8s-3.6-8-8-8s-8,3.6-8,8  S1342.3,846,1346.7,846z M1342.6,838c0-2.1,1.8-4,4.1-4c2.2,0,3.9,1.9,3.9,4s-1.7,4-3.9,4C1344.4,842,1342.6,840.1,1342.6,838z"/>
        <path id="line14_3-line14_4" fill="#FFFFFF" stroke="#D14A43" stroke-width="0.9" stroke-miterlimit="10" d="M1307.9,630.5  c-1.7,0.8-3.3,1.5-5,2.3c11.1,25.3,20.1,51.7,26.8,79c1.8-0.5,3.5-1,5.3-1.5C1328.2,682.8,1319.1,656.1,1307.9,630.5z"/>
        <circle id="line14_4" fill="#FFFFFF" stroke="#D14A43" stroke-miterlimit="10" cx="1333.4" cy="715" r="5"/>
        <path id="line14_2-line14_3" fill="#FFFFFF" stroke="#D14A43" stroke-width="0.9" stroke-miterlimit="10" d="M1251.6,533.4  c-1.4,1.2-2.9,2.3-4.3,3.5c19,25.7,35.5,53.2,49.3,82.3c1.7-0.8,3.3-1.5,5-2.3C1287.7,587.4,1270.8,559.4,1251.6,533.4z"/>
        <path id="line14_3" fill="#FFFFFF" stroke="#D14A43" stroke-miterlimit="10" d="M1302.2,616.9c-4.4,0-8,3.6-8,8s3.6,8,8,8s8-3.6,8-8  S1306.6,616.9,1302.2,616.9z M1306.3,624.9c0,2.1-1.8,4-4.1,4c-2.2,0-3.9-1.9-3.9-4s1.7-4,3.9-4  C1304.5,620.9,1306.3,622.8,1306.3,624.9z"/>
        <path id="line14_1-line14_2" fill="#FFFFFF" stroke="#D14A43" stroke-width="0.9" stroke-miterlimit="10" d="M1238.2,525  c1.4-1.2,2.9-2.3,4.3-3.5c-8.9-11.3-18.3-22.3-28.1-32.8c-1.3,1.3-2.6,2.6-3.8,4C1220.2,503,1229.5,513.8,1238.2,525z"/>
        <path id="line14_2" fill="#FFFFFF" stroke="#D14A43" stroke-miterlimit="10" d="M1244.9,521.1c-4.4,0-8,3.6-8,8s3.6,8,8,8s8-3.6,8-8  S1249.3,521.1,1244.9,521.1z M1249,529.1c0,2.1-1.8,4-4.1,4c-2.2,0-3.9-1.9-3.9-4s1.7-4,3.9-4C1247.2,525.1,1249,527,1249,529.1z"/>
        <path id="line14_1" fill="#FFFFFF" stroke="#D14A43" stroke-miterlimit="10" d="M1207.4,477.3c-4.4,0-8,3.6-8,8s3.6,8,8,8s8-3.6,8-8  S1211.8,477.3,1207.4,477.3z M1211.4,485.3c0,2.1-1.8,4-4.1,4c-2.2,0-3.9-1.9-3.9-4s1.7-4,3.9-4  C1209.7,481.2,1211.5,483.1,1211.4,485.3z"/>
        <g id="line13_5-line13_6">
            <path fill="#BAC8E8" d="M806.8,445.4c-4.4,0-8,3.6-8,8v7.2c0.4-0.2,0.8-0.4,1.2-0.6v-6.4c0-3.9,3.1-7,7-7h36.9v-1.2H806.8z"/>
            <path fill="#BAC8E8" d="M807.1,449.6c-2.2,0-4,1.8-4,4v6.4c0.4,0.2,0.8,0.4,1.2,0.6v-7c0-1.5,1.2-2.8,2.8-2.8H844v-1.2H807.1z"/>
            <path fill="#0572B9" d="M807.1,446.6c-3.9,0-7,3.1-7,7v6.4c1,0,2,0,3,0v-6.4c0-2.2,1.8-4,4-4H844v-3H807.1z"/>
        </g>
        <path id="line13_6" fill="#0A72B9" d="M805,461.2c-1.9-1.9-5-1.9-6.9,0s-1.9,5,0,6.9s5,1.9,6.9,0C806.9,466.1,806.9,463.1,805,461.2  z M803.1,466.2c-0.9,0.9-2.3,0.9-3.1,0c-0.9-0.9-0.9-2.3,0-3.1c0.9-0.9,2.3-0.9,3.1,0C804,464.1,804,465.4,803.1,466.2z"/>
        <g id="line13_4-line13_5">
            <path fill="#BAC8E8" d="M851.9,445.4c0,0.4,0,0.8,0,1.2h66.3v-1.2C896.3,445.4,874.1,445.4,851.9,445.4z"/>
            <path fill="#BAC8E8" d="M851.9,450.9h66.3v-1.2c-22.2,0-44.3,0-66.3,0C851.9,450,851.9,450.4,851.9,450.9z"/>
            <path fill="#0572B9" d="M851.9,449.6c22,0,44.2,0,66.3,0v-3h-66.3C851.9,447.6,851.9,448.6,851.9,449.6z"/>
        </g>
        <path id="line13_5" fill="#0A72B9" d="M851.4,444.7c-1.9-1.9-5-1.9-6.9,0s-1.9,5,0,6.9s5,1.9,6.9,0  C853.3,449.6,853.3,446.6,851.4,444.7z M849.5,449.7c-0.9,0.9-2.3,0.9-3.1,0c-0.9-0.9-0.9-2.3,0-3.1c0.9-0.9,2.3-0.9,3.1,0  C850.4,447.6,850.4,448.9,849.5,449.7z"/>
        <g id="line13_3-line13_4">
            <path fill="#BAC8E8" d="M915.5,445.4c0,0.4,0,0.8,0,1.2h66.3v-1.2C959.9,445.4,937.7,445.4,915.5,445.4z"/>
            <path fill="#BAC8E8" d="M915.5,450.9h66.3v-1.2c-22.1,0-44.3,0-66.3,0C915.5,450,915.5,450.4,915.5,450.9z"/>
            <path fill="#0572B9" d="M915.5,449.6c22,0,44.1,0,66.3,0v-3h-66.3C915.5,447.6,915.5,448.6,915.5,449.6z"/>
        </g>
        <rect id="line13_4" x="915.5" y="446.6" fill="#0572B9" width="2.7" height="6"/>
        <g id="line13_2-line13_3">
            <path fill="#BAC8E8" d="M1016.6,434.4v8.2c0,3.9-3.1,7-7,7c-10.2,0-20.4,0-30.5,0c0,0.4,0,0.8,0,1.2c10.3,0,20.5,0,30.8,0   c4.4,0,8-3.6,8-8V434C1017.5,434.2,1017,434.3,1016.6,434.4z"/>
            <path fill="#BAC8E8" d="M1012.4,434v8.6c0,1.5-1.2,2.8-2.8,2.8c-10.2,0-20.4,0-30.5,0c0,0.4,0,0.8,0,1.2c10.2,0,20.4,0,30.5,0   c2.2,0,4-1.8,4-4v-8.4C1013.2,434.2,1012.8,434.1,1012.4,434z"/>
            <path fill="#0572B9" d="M1013.6,434.2v8.4c0,2.2-1.8,4-4,4c-10.2,0-20.4,0-30.5,0c0,1,0,2,0,3c10.2,0,20.4,0,30.5,0   c3.9,0,7-3.1,7-7v-8.2L1013.6,434.2z"/>
        </g>
        <rect id="line13_3" x="979.1" y="446.6" fill="#0572B9" width="2.7" height="6"/>
        <g id="line13_1-line13_2">
            <path fill="#BAC8E8" d="M1012.4,426c0.4,0,0.8,0,1.2,0v-22.1h-1.2C1012.4,411.2,1012.4,418.6,1012.4,426z"/>
            <path fill="#BAC8E8" d="M1017.9,426v-22.1h-1.2c0,7.4,0,14.8,0,22.1C1017,426,1017.5,426,1017.9,426z"/>
            <path fill="#0572B9" d="M1016.6,426c0-7.3,0-14.7,0-22.1h-3V426C1014.6,426,1015.6,426,1016.6,426z"/>
        </g>
        <path id="line13_2" fill="#0A72B9" d="M1018.6,426.6c-1.9-1.9-5-1.9-6.9,0s-1.9,5,0,6.9s5,1.9,6.9,0  C1020.5,431.5,1020.5,428.5,1018.6,426.6z M1016.7,431.6c-0.9,0.9-2.3,0.9-3.1,0c-0.9-0.9-0.9-2.3,0-3.1c0.9-0.9,2.3-0.9,3.1,0  C1017.6,429.5,1017.6,430.8,1016.7,431.6z"/>
        <rect id="line13_1" x="1007.1" y="398.9" fill="#0572B9" width="16" height="5"/>
        <g id="line-13-1">
            <path fill="#B9C7E7" d="M1015.1,385.1c-3.2,0-5.8,2.6-5.8,5.8s2.6,5.8,5.8,5.8s5.8-2.6,5.8-5.8S1018.4,385.1,1015.1,385.1z    M1015.1,396c-2.7,0-5-2.2-5-5c0-2.7,2.2-5,5-5c2.7,0,5,2.2,5,5S1017.8,396,1015.1,396z"/>
            <path fill="#0072B9" d="M1015.1,386c-2.8,0-5,2.3-5,5c0,2.8,2.3,5,5,5s5-2.2,5-5S1017.8,386,1015.1,386z M1013.5,393.8h-1.1v-4.7   h-1l0.4-1h1.7L1013.5,393.8L1013.5,393.8z M1018.3,392.1c0,1.1-0.9,1.9-2.1,1.9c-0.8,0-1.5-0.3-2-0.8l0.7-0.7   c0.4,0.4,0.9,0.5,1.3,0.5c0.7,0,1.1-0.4,1.1-0.9c0-0.6-0.6-0.9-1.2-0.9c-0.2,0-0.5,0-0.6,0.1v-0.8l1.4-1.4h-2.3v-0.9h3.7v0.7   l-1.5,1.5C1017.8,390.5,1018.6,391.1,1018.3,392.1z"/>
            <polygon fill="#FFFFFF" points="1011.4,389.1 1012.4,389.1 1012.4,393.8 1013.5,393.8 1013.5,388.1 1011.8,388.1  "/>
            <path fill="#FFFFFF" d="M1016.8,390.4l1.5-1.5v-0.7h-3.7v0.9h2.3l-1.4,1.4v0.8c0.1-0.1,0.4-0.1,0.6-0.1c0.6,0,1.2,0.3,1.2,0.9   c0,0.5-0.4,0.9-1.1,0.9c-0.4,0-0.9-0.1-1.3-0.5l-0.7,0.7c0.5,0.5,1.2,0.8,2,0.8c1.2,0,2.1-0.8,2.1-1.9   C1018.6,391.1,1017.8,390.5,1016.8,390.4z"/>
        </g>
        <path id="line12_6-line12_7" fill="#BAC8E8" d="M598.6,1812.2c-37.7,0-75.4,0-113,0c0,1.8,0,3.7,0,5.5c37.7,0,75.3,0,113,0  C598.6,1815.9,598.6,1814.1,598.6,1812.2z"/>
        <rect id="line12_7" x="480.1" y="1806.7" fill="#BAC8E8" width="5.5" height="16.4"/>
        <path id="line12_5-line12_6" fill="#BAC8E8" d="M717.5,1812.2c-37.9,0-75.7,0-113.4,0c0,1.8,0,3.7,0,5.5c37.9,0,75.6,0,113.4,0  C717.5,1815.9,717.5,1814.1,717.5,1812.2z"/>
        <path id="line12_6" fill="#BAC8E8" d="M604.1,1823.2c0-3.7,0-7.3,0-11h-5.5c0,3.7,0,7.3,0,11  C600.5,1823.2,602.3,1823.2,604.1,1823.2z"/>
        <path id="line12_4-line12_5" fill="#BAC8E8" d="M756.5,1786.7v5.4c0,11-9,20-20,20h-13.7c0.1,1.8,0.1,3.7,0.2,5.5h13.5  c14.1,0,25.5-11.4,25.5-25.5v-5.5C760.1,1786.7,758.3,1786.7,756.5,1786.7z"/>
        <path id="line12_5" fill="#BAC8E8" d="M723,1823.2c0-3.7,0-7.3,0-11h-5.5c0,3.7,0,7.3,0,11C719.4,1823.2,721.2,1823.2,723,1823.2z"/>
        <rect id="line12_3-line12_4" x="756.5" y="1750.8" fill="#BAC8E8" width="5.5" height="30.5"/>
        <path id="line12_4" fill="#BAC8E8" d="M751,1781.3c3.7,0,7.3,0,11,0v5.5c-3.7,0-7.3,0-11,0C751,1784.9,751,1783.1,751,1781.3z"/>
        <rect id="line12_2-line12_3" x="756.5" y="1709.9" fill="#BAC8E8" width="5.5" height="26.2"/>
        <path id="line12_3" fill="#BAC8E8" d="M759.2,1735.2c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  C767.5,1738.9,763.8,1735.2,759.2,1735.2z M763.4,1743.6c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C761.6,1739.3,763.5,1741.3,763.4,1743.6z"/>
        <path id="line12_1-line12_2" fill="#BAC8E8" d="M756.5,1699v5.4c1.8,0,3.7,0.1,5.5,0.1v-5.5c0-14.1-11.4-25.5-25.5-25.5H651  c0,1.8,0,3.7,0,5.5h85.5C747.5,1679,756.5,1688,756.5,1699z"/>
        <path id="line12_2" fill="#BAC8E8" d="M751,1709.9c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0C751,1706.3,751,1708.1,751,1709.9z"/>
        <path id="line12_1" fill="#BAC8E8" d="M643.4,1668c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2S647.9,1668,643.4,1668z   M647.6,1676.3c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3C645.8,1672,647.7,1674.1,647.6,1676.3z"/>
        <path id="line-12-1" fill="#BAC8E8" d="M458.9,1823.7c-4.9,0-8.8-3.9-8.8-8.8s3.9-8.8,8.8-8.8s8.8,4,8.8,8.8  S463.7,1823.7,458.9,1823.7z M453.4,1810.3l-0.5,1.5h1.6v7.5h1.7v-9H453.4L453.4,1810.3z M464,1819.4l0.5-1.5h-4.1l0,0l1.6-1.5  c1.6-1.4,2.2-2.3,2.2-3.5c0-1.4-1.1-2.6-3.1-2.6c-1.2,0-2.4,0.6-3.3,1.4l1.1,1.1c0.6-0.6,1.3-1,2.1-1s1.5,0.5,1.5,1.3  c0,0.7-0.3,1.1-2,2.8l-2.2,2.3v1.2L464,1819.4L464,1819.4z"/>
        <g id="line-11A-1">
            <path fill="#88CDCF" d="M914.9,1469.6c-4.8,0-8.8,3.9-8.8,8.8s3.9,8.8,8.8,8.8c4.8,0,8.8-3.9,8.8-8.8   C923.6,1473.6,919.8,1469.6,914.9,1469.6z M910.7,1481.3h-1.1v-4.9h-1l0.3-0.9h1.8V1481.3z M914.2,1481.3H913v-4.9h-1l0.3-0.9h1.9   V1481.3z M920,1481.3l-0.4-1.2h-2.3l-0.4,1.2h-1.2l2.3-5.8h0.9l2.3,5.8H920z"/>
            <polygon fill="#88CDCF" points="917.6,1479.2 919.2,1479.2 918.4,1477  "/>
            <polygon fill="#FFFFFF" points="912,1476.4 913,1476.4 913,1481.3 914.2,1481.3 914.2,1475.5 912.3,1475.5  "/>
            <polygon fill="#FFFFFF" points="908.6,1476.4 909.6,1476.4 909.6,1481.3 910.7,1481.3 910.7,1475.5 908.9,1475.5  "/>
            <path fill="#FFFFFF" d="M918.9,1475.5H918l-2.3,5.8h1.2l0.4-1.2h2.3l0.4,1.2h1.2L918.9,1475.5z M917.6,1479.2l0.8-2.2l0.8,2.2   H917.6z"/>
        </g>
        <rect id="line11_4-line11_5" x="358.5" y="764.4" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -421.7663 516.0515)" fill="#8ACDCF" width="107.1" height="5.5"/>
        <rect id="line11_3-line11_4" x="445.5" y="687.3" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -344.667 547.9871)" fill="#89CDCF" width="87.3" height="5.5"/>
        <rect id="line11_2-line11_3" x="516.2" y="634.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -291.4528 570.0583)" fill="#89CDCF" width="52.4" height="5.5"/>
        <path id="line11_3" fill="#89CDCF" d="M518.1,657.3c2.6,2.6,5.2,5.2,7.8,7.8l3.9-3.9c-2.6-2.6-5.2-5.2-7.8-7.8  C520.7,654.7,519.4,656,518.1,657.3z"/>
        <g id="line-11-1">
            <path fill="#88CDCF" d="M674.8,566c-4.2,0-7.7,3.4-7.7,7.7s3.4,7.7,7.7,7.7c4.2,0,7.7-3.4,7.7-7.7C682.4,569.5,679.1,566,674.8,566   z M673.8,577.1h-1.4v-5.9h-1.2l0.4-1.1h2.2V577.1z M678.1,577.1h-1.5v-5.9h-1.2l0.4-1.1h2.3V577.1z"/>
            <polygon fill="#FFFFFF" points="675.4,571.2 676.6,571.2 676.6,577.1 678.1,577.1 678.1,570.1 675.8,570.1  "/>
            <polygon fill="#FFFFFF" points="671.2,571.2 672.4,571.2 672.4,577.1 673.8,577.1 673.8,570.1 671.6,570.1  "/>
        </g>
        <path id="line10_22-line10_23" fill="#BED12E" d="M1153,1581.1l-58.7,58.7c-5.7,5.7-9,13.4-9.3,21.5c1.8,0,3.7,0,5.5,0.1  c0.4-6.8,3.2-13.2,8-18.1c19.3-19.3,38.6-38.6,57.9-57.9C1155.3,1583.9,1154.1,1582.5,1153,1581.1z"/>
        <rect id="line10_21-line10_22" x="1146.2" y="1547.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -748.545 1293.7224)" fill="#BED12E" width="82.4" height="5.5"/>
        <path id="line10_22" fill="#BED12E" d="M1152.5,1581.6c2.6,2.6,5.2,5.2,7.8,7.8l3.9-3.9c-2.6-2.6-5.2-5.2-7.8-7.8  C1155,1579,1153.7,1580.3,1152.5,1581.6z"/>
        <path id="line10_20-line10_21" fill="#BED12E" d="M1242.6,1470v10c-0.1,7.4-3,14.4-8.2,19.7c-5.4,5.4-10.8,10.8-16.2,16.2  c1.4,1.2,2.8,2.4,4.2,3.6l16.3-16.3c6-6,9.4-14.1,9.4-22.6V1470C1246.3,1470,1244.4,1470,1242.6,1470z"/>
        <path id="line10_21" fill="#BED12E" d="M1214.7,1519.4c2.6,2.6,5.2,5.2,7.8,7.8l3.9-3.9c-2.6-2.6-5.2-5.2-7.8-7.8  C1217.2,1516.8,1215.9,1518.1,1214.7,1519.4z"/>
        <rect id="line10_19-line10_20" x="1242.6" y="1436.5" fill="#BED12E" width="5.5" height="28"/>
        <path id="line10_20" fill="#BED12E" d="M1242.6,1470c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0  C1242.6,1466.4,1242.6,1468.2,1242.6,1470z"/>
        <rect id="line10_18-line10_19" x="1242.6" y="1403" fill="#BED12E" width="5.5" height="28"/>
        <path id="line10_19" fill="#BED12E" d="M1242.6,1436.5c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0  C1242.6,1432.9,1242.6,1434.7,1242.6,1436.5z"/>
        <rect id="line10_17-line10_18" x="1242.6" y="1363.1" fill="#BED12E" width="5.5" height="34.4"/>
        <path id="line10_18" fill="#BED12E" d="M1242.6,1403c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0  C1242.6,1399.4,1242.6,1401.2,1242.6,1403z"/>
        <path id="line10_17" fill="#BED12E" d="M1242.6,1363.1c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0  C1242.6,1359.5,1242.6,1361.3,1242.6,1363.1z"/>
        <path id="line10_14-line10_15" fill="#BED12E" d="M1169.3,1261.9l-15.2-15.2c-5.2-5.2-8.1-12.2-8.1-19.7v-24.4  c-1.8,0-3.7,0.1-5.5,0.1v24.8c0,8.5,3.3,16.6,9.3,22.6l15.6,15.6C1166.7,1264.4,1168,1263.2,1169.3,1261.9z"/>
        <path id="line10_15" fill="#BED12E" d="M1164.6,1269.2c0,4.5,3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2s-3.7-8.2-8.2-8.2  S1164.6,1264.6,1164.6,1269.2z M1173,1265c2.3,0,4.2,1.9,4.2,4.3s-2,4.1-4.2,4.2c-2.3,0-4.2-1.8-4.3-4.2  C1168.7,1266.8,1170.7,1264.9,1173,1265z"/>
        <path id="line10_13-line10_14" fill="#BED12E" d="M1146,1187.3v-107c-1.8,0-3.7,0-5.5,0v106.9  C1142.3,1187.3,1144.2,1187.3,1146,1187.3z"/>
        <path id="line10_14" fill="#BED12E" d="M1135,1195.1c0,4.5,3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2s-3.7-8.2-8.2-8.2  S1135,1190.6,1135,1195.1z M1143.4,1190.9c2.3,0,4.2,1.9,4.2,4.3s-2,4.1-4.2,4.2c-2.3,0-4.2-1.8-4.3-4.2  C1139.1,1192.7,1141.1,1190.8,1143.4,1190.9z"/>
        <path id="line10_12-line10_13" fill="#BED12E" d="M1140.5,1065.1c0-23.8,0-47.7,0-71.5h5.5c0,23.8,0,47.7,0,71.5  C1144.2,1065.1,1142.3,1065.1,1140.5,1065.1z"/>
        <path id="line10_13" fill="#BED12E" d="M1143.2,1064.7c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  S1147.7,1064.7,1143.2,1064.7z M1147.4,1073c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C1145.5,1068.7,1147.5,1070.8,1147.4,1073z"/>
        <path id="line10_11-line10_12" fill="#BED12E" d="M1140.5,978.6c1.8,0,3.7,0,5.5,0v-41.7c0-8.5-3.3-16.6-9.3-22.6l-27.6-27.6  c-1.2,1.4-2.5,2.7-3.7,4.1l27,27c5.2,5.3,8.1,12.3,8.1,19.7V978.6L1140.5,978.6z"/>
        <path id="line10_12" fill="#BED12E" d="M1135,986.3c0,4.5,3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2s-3.7-8.2-8.2-8.2S1135,981.8,1135,986.3z   M1143.4,982.1c2.3,0,4.2,1.9,4.2,4.3s-2,4.1-4.2,4.2c-2.3,0-4.2-1.8-4.3-4.2C1139.1,984,1141.1,982,1143.4,982.1z"/>
        <path id="line10_10-line10_11" fill="#BED12E" d="M1098.6,876.2c-40.7-40.7-81.5-81.5-122.2-122.2c-1.3,1.3-2.6,2.6-3.9,3.9  c40.8,40.8,81.5,81.5,122.3,122.3C1096.1,878.9,1097.3,877.5,1098.6,876.2z"/>
        <path id="line10_11" fill="#BED12E" d="M1109.9,881.1c-1.2-4.4-5.9-6.9-10.2-5.7c-4.4,1.2-6.9,5.9-5.7,10.2  c1.2,4.4,5.9,6.9,10.2,5.7C1108.6,890.1,1111.1,885.5,1109.9,881.1z M1103.2,887.6c-2.2,0.6-4.7-0.7-5.3-3c-0.6-2.3,0.8-4.6,2.9-5.2  c2.2-0.6,4.5,0.6,5.3,2.9C1106.8,884.6,1105.3,887,1103.2,887.6z"/>
        <path id="line10_9-line10_10" fill="#BED12E" d="M962.8,741.7c0,0-3.2-2.1-6.9-3.5c-5.5-2.1-19-1.6-30.2-1.5c-4.6,0-5.3,0-25.2,0  h-1.3c-32.2,0-73.5,0-76,0c-1.6-0.1-8.3-0.6-13.7-6.1c-2.9-3-4.3-6.3-5-9.2c-1.7,0.2-3.5,0.4-5.2,0.6c2.8,12.8,12.5,20.1,27.5,20.1  c24.2,0,48.4,0,72.6,0.1c0.1,0,0.2,0,0.3,0c12.1,0,18.6,0,23.8,0c4.1,0,12-0.1,21.4,0c2.6,0,7.7,0.2,13,3c1.7,0.9,2.9,1.8,3.8,2.5  c1.2-1.4,2.4-2.8,3.7-4.2C964.7,743,963.9,742.4,962.8,741.7z"/>
        <path id="line10_10" fill="#BED12E" d="M963.4,744.8c-3.2,3.2-3.2,8.5,0,11.7s8.5,3.2,11.7,0s3.2-8.5,0-11.7  S966.6,741.6,963.4,744.8z M972.3,747.7c1.6,1.7,1.6,4.4-0.1,6.1c-1.6,1.6-4.3,1.6-6,0s-1.6-4.3-0.1-6  C967.8,746,970.6,745.9,972.3,747.7z"/>
        <path id="line10_8-line10_9" fill="#BED12E" d="M838.7,587.4c-1.3-1.3-2.6-2.6-3.9-3.9c-9.1,9.1-18.1,18.1-27.2,27.2  c-6,6-9.3,14.1-9.3,22.6v72.9h5.5c0-24.1,0-48.3,0-72.4c0-7.5,2.9-14.5,8.1-19.7C820.8,605.2,829.8,596.3,838.7,587.4z"/>
        <path id="line10_9" fill="#BED12E" d="M792.8,714c0,4.5,3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2s-3.7-8.2-8.2-8.2  C796.5,705.7,792.8,709.4,792.8,714z M801.1,709.8c2.2,0,4.1,1.9,4.1,4.2s-2,4-4.1,4.1c-2.2,0-4.1-1.8-4.2-4.1  C796.9,711.7,798.9,709.7,801.1,709.8z"/>
        <path id="line10_7-line10_8" fill="#BED12E" d="M842.5,583.5c11.7-11.7,23.5-23.5,35.2-35.2c-1.2-1.3-2.5-2.7-3.7-4  c-11.8,11.8-23.6,23.6-35.4,35.4C839.9,580.9,841.2,582.2,842.5,583.5z"/>
        <path id="line10_8" fill="#BED12E" d="M834.8,583.5c2.6,2.6,5.2,5.2,7.8,7.8l3.9-3.9c-2.6-2.6-5.2-5.2-7.8-7.8  C837.3,580.9,836.1,582.2,834.8,583.5z"/>
        <path id="line10_6-line10_7" fill="#BED12E" d="M891.5,505.3l-0.3-0.3c0,0,0,0-0.1-0.1l-23.4-23.4c-1.3,1.3-2.6,2.6-3.8,3.9  l23.3,23.3c7.2,7.2,7.2,14.8,0,22.1l-4,4c1.3,1.4,2.5,2.8,3.8,4.2l4.9-4.8C900.5,525.1,900.4,514.4,891.5,505.3z"/>
        <path id="line10_5-line10_6" fill="#BED12E" d="M824.7,438.6c13.1,13.1,26.2,26.2,39.3,39.3l-3.9,3.9  c-13.1-13.1-26.2-26.2-39.3-39.3C822.1,441.1,823.4,439.9,824.7,438.6z"/>
        <path id="line10_6" fill="#BED12E" d="M864,485.6c2.6-2.6,5.2-5.2,7.8-7.8l-3.9-3.9c-2.6,2.6-5.2,5.2-7.8,7.8  C861.4,483.1,862.7,484.3,864,485.6z"/>
        <path id="line10_5" fill="#BED12E" d="M817.4,426.9c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  S821.9,426.9,817.4,426.9z M821.6,435.2c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C819.7,430.9,821.7,433,821.6,435.2z"/>
        <rect id="line10_2-line10_3" x="665.6" y="247.3" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -6.5481 556.3862)" fill="#BED12E" width="5.5" height="77.6"/>
        <path id="line10_3" fill="#BED12E" d="M706.8,312.8c-3.3-3.1-8.5-3.1-11.7,0.2c-3.1,3.3-3.1,8.5,0.2,11.7c3.3,3.1,8.5,3.1,11.7-0.2  C710.1,321.2,710,316,706.8,312.8z M704.1,321.7c-1.5,1.6-4.2,1.7-5.9,0c-1.6-1.6-1.5-4.2-0.1-5.8c1.5-1.6,4.1-1.7,5.8-0.2  C705.6,317.4,705.6,320.1,704.1,321.7z"/>
        <path id="line10_1-line10_2" fill="#BED12E" d="M639,252.8c-4.8-4.8-9.6-9.6-14.4-14.4c-5.2-5.2-8.2-12.3-8.2-19.8  c0-18.6,0-37.2,0-55.8c-1.8,0-3.7-0.1-5.5-0.1c0,18.6,0,37.3,0,55.9c0,8.9,3.5,17.4,9.8,23.7c4.8,4.8,9.6,9.6,14.4,14.4  C636.4,255.4,637.7,254.1,639,252.8z"/>
        <path id="line10_2" fill="#BED12E" d="M639,260.6c2.6-2.6,5.2-5.2,7.8-7.8l-3.9-3.9c-2.6,2.6-5.2,5.2-7.8,7.8  C636.4,258,637.7,259.3,639,260.6z"/>
        <rect id="line10_1" x="605.4" y="157.7" fill="#BED12E" width="16.4" height="5.5"/>
        <path id="line-10-2" fill="#BED12C" d="M1064.6,1677.8c-4.8,0-8.8-3.9-8.8-8.8s3.9-8.8,8.8-8.8c4.8,0,8.8,3.9,8.8,8.8  C1073.4,1673.8,1069.6,1677.8,1064.6,1677.8z M1059.3,1664.5l-0.5,1.5h1.6v7.4h1.7v-8.9H1059.3L1059.3,1664.5z M1067.1,1673.5  c2.2,0,3.5-1.8,3.5-4.7c0-2.8-1.3-4.6-3.5-4.6s-3.5,1.8-3.5,4.6C1063.6,1671.8,1065.1,1673.5,1067.1,1673.5z M1067.1,1672  c-1.2,0-1.8-1.2-1.8-3.1s0.7-3.1,1.8-3.1c1.2,0,1.8,1.2,1.8,3.1S1068.5,1672,1067.1,1672z"/>
        <path id="line-10-1" fill="#BED12C" d="M613.6,152.8c-4.8,0-8.8-3.9-8.8-8.8c0-4.9,3.9-8.8,8.8-8.8c4.8,0,8.8,3.9,8.8,8.8  C622.4,148.8,618.6,152.8,613.6,152.8z M608.3,139.5l-0.5,1.5h1.6v7.4h1.7v-8.9H608.3L608.3,139.5z M616.1,148.5  c2.2,0,3.5-1.8,3.5-4.7c0-2.8-1.3-4.6-3.5-4.6s-3.5,1.8-3.5,4.6C612.6,146.8,614.1,148.5,616.1,148.5z M616.1,147  c-1.2,0-1.8-1.2-1.8-3.1s0.7-3.1,1.8-3.1c1.2,0,1.8,1.2,1.8,3.1S617.5,147,616.1,147z"/>
        <path id="line9_24-line9_25" fill="#ADACAC" d="M782.9,1691.1c0,15,0,30,0,45h-5.5c0-15,0-30,0-45  C779.3,1691.1,781.1,1691.1,782.9,1691.1z"/>
        <path id="line9_25" fill="#ADACAC" d="M780.2,1735.3c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  S784.7,1735.3,780.2,1735.3z M784.5,1743.5c0,2.3-1.9,4.2-4.3,4.2c-2.4,0-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C782.5,1739.2,784.5,1741.3,784.5,1743.5z"/>
        <path id="line9_23-line9_24" fill="#ADACAC" d="M782.9,1645.6c0,13.3,0,26.7,0,40c-1.8,0-3.7,0-5.5,0c0-13.3,0-26.7,0-40  C779.3,1645.6,781.1,1645.6,782.9,1645.6z"/>
        <path id="line9_24" fill="#ADACAC" d="M777.4,1691.1c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0  C777.4,1687.5,777.4,1689.3,777.4,1691.1z"/>
        <path id="line9_22-line9_23" fill="#ADACAC" d="M782.9,1610.1c0,10,0,20,0,30c-1.8,0-3.7,0-5.5,0c0-10,0-20,0-30  C779.3,1610.1,781.1,1610.1,782.9,1610.1z"/>
        <path id="line9_23" fill="#ADACAC" d="M777.4,1645.6c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0C777.4,1642,777.4,1643.8,777.4,1645.6  z"/>
        <path id="line9_21-line9_22" fill="#ADACAC" d="M782.9,1574.6c0,10,0,20,0,30c-1.8,0-3.7,0-5.5,0c0-10,0-20,0-30  C779.3,1574.6,781.1,1574.6,782.9,1574.6z"/>
        <path id="line9_22" fill="#ADACAC" d="M777.4,1610.1c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0  C777.4,1606.5,777.4,1608.3,777.4,1610.1z"/>
        <path id="line9_20-line9_21" fill="#ADACAC" d="M782.9,1541.8c0,9.1,0,18.2,0,27.3c-1.8,0-3.7,0-5.5,0c0-9.1,0-18.2,0-27.3  C779.3,1541.8,781.1,1541.8,782.9,1541.8z"/>
        <path id="line9_21" fill="#ADACAC" d="M777.4,1574.6c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0C777.4,1571,777.4,1572.8,777.4,1574.6  z"/>
        <path id="line9_19-line9_20" fill="#ADACAC" d="M777.4,1536.2c0-8.5,0-16.9,0-25.4c1.8,0,3.7,0,5.5,0c0,8.5,0,16.9,0,25.4  C781.1,1536.2,779.3,1536.2,777.4,1536.2z"/>
        <path id="line9_20" fill="#ADACAC" d="M777.4,1541.8c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0  C777.4,1538.2,777.4,1539.9,777.4,1541.8z"/>
        <rect id="line9_18-line9_19" x="777.4" y="1435" fill="#ADACAC" width="5.5" height="60.5"/>
        <rect id="line9_17-line9_18" x="777.4" y="1392.2" fill="#ADACAC" width="5.5" height="37.3"/>
        <path id="line9_18" fill="#ADACAC" d="M777.4,1435c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0C777.4,1431.4,777.4,1433.2,777.4,1435z"/>
        <rect id="line9_16-line9_17" x="777.4" y="1361.8" fill="#ADACAC" width="5.5" height="24.9"/>
        <path id="line9_17" fill="#ADACAC" d="M777.4,1392.2c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0  C777.4,1388.6,777.4,1390.4,777.4,1392.2z"/>
        <path id="line9_15-line9__16" fill="#ADACAC" d="M782.9,1238.3c0,36.2,0,72.4,0,108.6h-5.5c0-36.2,0-72.4,0-108.6  C779.3,1238.3,781.1,1238.3,782.9,1238.3z"/>
        <path id="line9_16" fill="#ADACAC" d="M780.2,1346.1c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  S784.7,1346.1,780.2,1346.1z M784.5,1354.4c0,2.3-1.9,4.2-4.3,4.2c-2.4,0-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C782.5,1350.2,784.5,1352.1,784.5,1354.4z"/>
        <path id="line9_14-line9_15" fill="#ADACAC" d="M777.4,1232.8c0-15.8,0-31.6,0-47.4c1.9,0,3.7,0,5.5,0c0,15.8,0,31.6,0,47.4  C781.1,1232.8,779.3,1232.8,777.4,1232.8z"/>
        <path id="line9_15" fill="#ADACAC" d="M777.4,1238.3c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0  C777.4,1234.7,777.4,1236.5,777.4,1238.3z"/>
        <path id="line9_13-line9_14" fill="#ADACAC" d="M777.4,1127.3c0,14.2,0,28.4,0,42.6c1.8,0,3.7,0,5.5,0c0-14.2,0-28.4,0-42.6  C781.1,1127.3,779.2,1127.3,777.4,1127.3z"/>
        <path id="line9_14" fill="#ADACAC" d="M780.2,1169.3c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  C788.4,1173.1,784.7,1169.3,780.2,1169.3z M784.5,1177.6c0,2.3-1.9,4.2-4.3,4.2c-2.4,0-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C782.5,1173.4,784.5,1175.3,784.5,1177.6z"/>
        <path id="line9_12-line9_13" fill="#ADACAC" d="M782.9,1092.5c0-8.5-3.4-16.6-9.4-22.6l-36.6-36.6l0,0l-16-16  c-5.3-5.3-8.2-12.3-8.2-19.7v-22.1c-1.8,0-3.7,0.1-5.5,0.1v22.6c0,8.5,3.4,16.6,9.4,22.6l39.1,39.1l0,0l13.5,13.5  c5.3,5.3,8.2,12.3,8.2,19.7v28.9c1.8,0,3.7,0,5.5,0C782.9,1112.2,782.9,1102.3,782.9,1092.5z"/>
        <path id="line9_13" fill="#ADACAC" d="M777.4,1127.4c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0  C777.4,1123.7,777.4,1125.5,777.4,1127.4z"/>
        <path id="line9_11-line9_12" fill="#ADACAC" d="M777.4,835.7v7.2c0,7.4-2.9,14.4-8.2,19.7c-6.4,6.4-12.7,12.7-19.1,19.1l0,0  c-11.2,11.2-22.4,22.4-33.6,33.6c-6,6-9.3,14.1-9.3,22.6v22.5c1.8,0,3.7,0,5.5,0c0-7.3,0-14.6,0-22c0-7.5,2.9-14.5,8.1-19.7  c5.2-5.2,10.3-10.3,15.5-15.5l0,0l37.1-37.1c6-6,9.4-14.1,9.4-22.6v-7.7C781.1,835.7,779.3,835.7,777.4,835.7z"/>
        <path id="line9_12" fill="#ADACAC" d="M714.1,960.8c-3.9-2.3-9-0.9-11.3,3s-0.9,9,3,11.3s9,0.9,11.3-3  C719.3,968.2,718,963.1,714.1,960.8z M713.6,970c-1.1,1.9-3.7,2.6-5.7,1.5c-2-1.2-2.5-3.7-1.5-5.6c1.1-1.9,3.6-2.7,5.6-1.6  C714,965.5,714.7,968.1,713.6,970z"/>
        <path id="line9_10-line9_11" fill="#ADACAC" d="M782.9,721.8c0,32.9,0,65.8,0,98.7c-1.8,0-3.7,0-5.5,0c0-32.9,0-65.8,0-98.6  C779.3,721.8,781.1,721.8,782.9,721.8z"/>
        <path id="line9_11" fill="#ADACAC" d="M780.2,836.4c4.5,0,8.2-3.7,8.2-8.2s-3.7-8.2-8.2-8.2s-8.2,3.7-8.2,8.2  S775.7,836.4,780.2,836.4z M776.1,828c0-2.2,1.9-4.1,4.2-4.1s4,2,4.1,4.1c0,2.2-1.8,4.1-4.1,4.2C777.9,832.3,776,830.2,776.1,828z"/>
        <path id="line9_9-line9_10" fill="#ADACAC" d="M777.4,706.2c0-14.2,0-28.4,0-42.6c1.8,0,3.7-0.1,5.5-0.1c0,14.2,0,28.5,0,42.7  C781.1,706.3,779.3,706.2,777.4,706.2z"/>
        <path id="line9_10" fill="#ADACAC" d="M780.1,705.8c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  S784.6,705.8,780.1,705.8z M784.3,714c0,2.2-1.9,4.1-4.2,4.1s-4-2-4.1-4.1c0-2.2,1.8-4.1,4.1-4.2C782.4,709.9,784.3,711.8,784.3,714  z"/>
        <path id="line9_8-line9_9" fill="#ADACAC" d="M782.9,581.4c0,22.2,0,44.5,0,66.7c-1.8,0-3.7,0-5.5,0c0-22.2,0-44.5,0-66.7  C779.3,581.4,781.1,581.4,782.9,581.4z"/>
        <path id="line9_9" fill="#ADACAC" d="M780.1,647.6c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  C788.4,651.3,784.6,647.6,780.1,647.6z M784.3,655.8c0,2.2-1.9,4.1-4.2,4.1s-4-2-4.1-4.1c0-2.2,1.8-4.1,4.1-4.2  C782.4,651.7,784.3,653.6,784.3,655.8z"/>
        <path id="line9_8" fill="#ADACAC" d="M786,579.6c3.2-3.2,3.2-8.5,0-11.7s-8.5-3.2-11.7,0s-3.2,8.5,0,11.7S782.8,582.8,786,579.6z   M777.1,576.7c-1.6-1.7-1.5-4.4,0.1-6c1.6-1.4,4.3-1.7,5.9,0c1.7,1.7,1.7,4.4,0.1,6C781.7,578.3,778.8,578.4,777.1,576.7z"/>
        <rect id="line9_6-line9_7" x="777.4" y="452.8" fill="#ADACAC" width="5.5" height="30.7"/>
        <path id="line9_7" fill="#ADACAC" d="M779.8,482.1c-4.5,0.1-8.2,3.9-8.1,8.4c0.1,4.5,3.9,8.2,8.4,8.1s8.2-3.9,8.1-8.4  S784.4,482,779.8,482.1z M784.2,490.2c0,2.2-1.8,4.2-4.1,4.2s-4.1-1.9-4.1-4c-0.1-2.2,1.7-4.2,4-4.2  C782.2,486.1,784.1,488,784.2,490.2z"/>
        <rect id="line9_5-line9_6" x="777.4" y="372.6" fill="#ADACAC" width="5.5" height="65.8"/>
        <path id="line9_4-line9_5" fill="#ADACAC" d="M805.3,315.9L787.2,334c-6.3,6.3-9.8,14.8-9.8,23.7v0.1c1.8,0,3.7,0.1,5.5,0.1v-0.3  c0-7.4,2.9-14.5,8.2-19.8l18-18C807.8,318.5,806.6,317.2,805.3,315.9z"/>
        <path id="line9_5" fill="#ADACAC" d="M779.9,357.1c-4.5,0.1-8.2,3.9-8.1,8.4c0.1,4.5,3.9,8.2,8.4,8.1s8.2-3.9,8.1-8.4  S784.5,357,779.9,357.1z M784.3,365.2c0,2.2-1.8,4.2-4.1,4.2s-4.1-1.9-4.1-4c-0.1-2.2,1.7-4.2,4-4.2  C782.3,361.1,784.2,363,784.3,365.2z"/>
        <rect id="line9_3-line9_4" x="809.9" y="285.5" transform="matrix(0.7071 -0.7071 0.7071 0.7071 41.2839 676.1623)" fill="#ADACAC" width="53.9" height="5.5"/>
        <path id="line9_4" fill="#ADACAC" d="M812.6,304.4c-4.5,0-8.3,3.7-8.3,8.3s3.7,8.3,8.3,8.3s8.3-3.7,8.3-8.3S817.1,304.4,812.6,304.4  z M816.8,312.7c0,2.3-2,4.2-4.3,4.2c-2.4,0-4.1-2.1-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3C814.9,308.4,816.9,310.4,816.8,312.7z"/>
        <path id="line9_2-line9_3" fill="#ADACAC" d="M898.1,208.6v2.9c0,7.4-3,14.5-8.2,19.8c-10.7,10.7-21.4,21.4-32.1,32.1  c1.3,1.3,2.6,2.6,3.9,3.9c10.7-10.7,21.4-21.4,32.1-32.1c6.3-6.3,9.8-14.8,9.8-23.7c0-0.9,0-1.9,0-2.8  C901.7,208.7,899.9,208.6,898.1,208.6z"/>
        <path id="line9_3" fill="#ADACAC" d="M853.9,267.3c2.6,2.6,5.2,5.2,7.8,7.8l3.9-3.9c-2.6-2.6-5.2-5.2-7.8-7.8  C856.5,264.7,855.2,266,853.9,267.3z"/>
        <rect id="line9_1-line9_2" x="898" y="163.2" fill="#ADACAC" width="5.5" height="40"/>
        <path id="line9_2" fill="#ADACAC" d="M898.1,208.7c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0C898.1,205.1,898.1,206.9,898.1,208.7z"/>
        <rect id="line9_1" x="892.6" y="157.7" fill="#ADACAC" width="16.4" height="5.5"/>
        <path id="line-9-2" fill="#ADACAC" d="M780.1,1775.2c-4.8,0-8.8-3.9-8.8-8.8c0-4.8,3.9-8.8,8.8-8.8c4.8,0,8.8,3.9,8.8,8.8  C788.8,1771.4,784.9,1775.2,780.1,1775.2z M780.2,1761.9c-2,0-3.4,1.4-3.4,3.3s1.5,3,2.9,3c0.4,0,0.9-0.1,1.3-0.4v0.1l-2.7,3.2  l1.8,0.2l1.3-1.7c1.4-1.8,2-2.8,2-4.2C783.5,1763.6,782.3,1761.9,780.2,1761.9z M780.1,1763.3c0.9,0,1.6,0.7,1.6,1.7  c0,0.9-0.7,1.7-1.6,1.7s-1.6-0.8-1.6-1.7S779.1,1763.3,780.1,1763.3z"/>
        <path id="line-9-1" fill="#ADACAC" d="M900.8,152.4c-4.8,0-8.8-3.9-8.8-8.8c0-4.9,3.9-8.8,8.8-8.8c4.8,0,8.8,3.9,8.8,8.8  C909.6,148.4,905.7,152.4,900.8,152.4z M900.8,139.1c-2,0-3.4,1.4-3.4,3.3s1.5,3,2.9,3c0.4,0,0.9-0.1,1.3-0.4v0.1l-2.7,3.2l1.9,0.2  l1.3-1.7c1.4-1.8,2-2.8,2-4.2C904.2,140.8,903,139.1,900.8,139.1z M900.8,140.6c0.9,0,1.6,0.7,1.6,1.7c0,0.9-0.7,1.7-1.6,1.7  c-0.9,0-1.6-0.8-1.6-1.7C899.2,141.2,899.8,140.6,900.8,140.6z"/>
        <path id="line8A_15-line8A_16" fill="#FFCD1E" d="M330.2,1569.8c0,23.4,0,46.8,0,70.2h-5.5c0-23.4,0-46.8,0-70.2  C326.6,1569.8,328.4,1569.8,330.2,1569.8z"/>
        <rect id="line8A_16" x="319.3" y="1640" fill="#FFCD1E" width="16.4" height="5.5"/>
        <path id="line8A_15" fill="#FFCD1E" d="M324.7,1569.8c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0  C324.7,1566.2,324.7,1568.1,324.7,1569.8z"/>
        <path id="line8A_14" fill="#FFCD1E" d="M324.7,1521.6c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0  C324.7,1518,324.7,1519.8,324.7,1521.6z"/>
        <path id="line8A_13" fill="#FFCD1E" d="M324.7,1475.2c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0  C324.7,1471.6,324.7,1473.4,324.7,1475.2z"/>
        <path id="line8A_12" fill="#FFCD1E" d="M324.7,1424.8c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0  C324.7,1421.2,324.7,1423,324.7,1424.8z"/>
        <path id="line8A_10-line8A_11" fill="#FFCD1E" d="M324.7,1371.1c0-19.4,0-38.9,0-58.3h5.5c0,19.4,0,38.9,0,58.3  C328.4,1371.1,326.6,1371.1,324.7,1371.1z"/>
        <path id="line8A_11" fill="#FFCD1E" d="M324.7,1376.6c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0  C324.7,1373,324.7,1374.8,324.7,1376.6z"/>
        <path id="line8A_9-line8A_10" fill="#FFCD1E" d="M330.2,1251.7c0,15.7,0,31.4,0,47.1h-5.5c0-15.7,0-31.4,0-47.1  C326.6,1251.7,328.4,1251.7,330.2,1251.7z"/>
        <path id="line8A_9" fill="#FFCD1E" d="M324.7,1251.7c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0  C324.7,1248.1,324.7,1249.9,324.7,1251.7z"/>
        <path id="line8A_8" fill="#FFCD1E" d="M324.7,1198.8c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0C324.7,1195.2,324.7,1197,324.7,1198.8  z"/>
        <path id="line8A_6-line8A_7" fill="#FFCD1E" d="M324.7,1140.3c0-13.4,0-26.9,0-40.3h5.5c0,13.4,0,26.9,0,40.3  C328.4,1140.3,326.6,1140.3,324.7,1140.3z"/>
        <path id="line8A_7" fill="#FFCD1E" d="M324.7,1145.8c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0C324.7,1142.2,324.7,1144,324.7,1145.8  z"/>
        <path id="line8A_6" fill="#FFCD1E" d="M323.3,1099.4c3.9,2.3,9,0.9,11.3-3s0.9-9-3-11.3s-9-0.9-11.3,3S319.4,1097.2,323.3,1099.4z   M323.7,1090.1c1.2-2,3.9-2.7,5.9-1.5c2.1,1.2,2.6,3.8,1.5,5.7c-1.1,2.1-3.7,2.7-5.8,1.6C323.3,1094.9,322.5,1092.2,323.7,1090.1z"/>
        <rect id="line8A-2b" x="321.7" y="1652" width="11.7" height="9.6"/>
        <path id="line8A-2" fill="#FFCD1C" d="M335.2,1656.5c0,4.2-3.4,7.7-7.7,7.7c-4.2,0-7.7-3.4-7.7-7.7c0-4.2,3.4-7.7,7.7-7.7  S335.2,1652.2,335.2,1656.5z M327.1,1657.7c0-0.7-0.5-1.4-1.1-1.6l0,0c0.7-0.3,0.9-0.9,0.9-1.5c0-1-0.9-1.9-2.4-1.9  s-2.4,0.9-2.4,1.9c0,0.6,0.4,1.2,0.9,1.5l0,0c-0.6,0.2-1.1,0.9-1.1,1.6c0,1.2,1,2,2.6,2S327.1,1659,327.1,1657.7z M325.8,1657.7  c0,0.4-0.4,0.9-1.2,0.9c-0.8,0-1.2-0.5-1.2-0.9c0-0.5,0.4-0.9,1.2-0.9S325.8,1657.3,325.8,1657.7z M323.5,1654.8  c0-0.4,0.4-0.9,1.1-0.9s1.2,0.4,1.2,0.9s-0.4,0.9-1.2,0.9C323.8,1655.7,323.5,1655.2,323.5,1654.8z M333.5,1659.6l-2.6-6.7h-1.1  l-2.6,6.7h1.4l0.5-1.4h2.6l0.5,1.4H333.5z M330.3,1654.6l0.9,2.5h-1.8L330.3,1654.6L330.3,1654.6z"/>
        <path id="line8_7-line8_8" fill="#FFCD1E" d="M1104.9,1042c-0.9,0.9-1.8,1.8-2.7,2.7c-3.7,3.7-6.7,6.1-10.1,7.6  c-5.7,2.5-11.2,2.3-13.7,2.2c-10.6-0.6-66.2-0.3-143.3,0.2c0,1.8,0.1,3.5,0.1,5.3c76.4-0.3,131.8-0.6,143.5-0.1  c2.9,0.1,8.9,0.1,15.5-2.7c3.8-1.6,7.2-4.2,11-7.9c1.2-1.2,2.4-2.4,3.6-3.6C1107.5,1044.5,1106.2,1043.3,1104.9,1042z"/>
        <path id="line8_8" fill="#FFCD1E" d="M933.1,1051.5c-3.3-3.1-8.5-3.1-11.7,0.2c-3.1,3.3-3.1,8.5,0.2,11.7c3.3,3.1,8.5,3.1,11.7-0.2  C936.4,1059.9,936.3,1054.7,933.1,1051.5z M930.4,1060.4c-1.5,1.6-4.2,1.7-5.9,0c-1.6-1.6-1.5-4.2-0.1-5.8c1.5-1.6,4.1-1.7,5.8-0.2  C931.9,1056.1,931.9,1058.8,930.4,1060.4z"/>
        <path id="line8_6-line8_7" fill="#FFCD1E" d="M1160.7,993.9c-13.7,13.7-27.3,27.3-41,41c-1.3-1.3-2.6-2.6-3.9-3.9  c13.6-13.6,27.3-27.3,40.9-40.9C1158.1,991.3,1159.4,992.6,1160.7,993.9z"/>
        <path id="line8_7" fill="#FFCD1E" d="M1116.4,1031.2c-3.9-2.3-9-0.9-11.3,3s-0.9,9,3,11.3s9,0.9,11.3-3S1120.3,1033.5,1116.4,1031.2  z M1115.9,1040.5c-1.2,1.9-3.6,2.6-5.7,1.4c-2-1.1-2.5-3.7-1.5-5.6c1.1-1.8,3.6-2.7,5.6-1.6  C1116.3,1035.9,1116.9,1038.5,1115.9,1040.5z"/>
        <rect id="line8_5-line8_6" x="1146" y="925.4" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -298.2364 1136.2759)" fill="#FFCD1E" width="153" height="5.5"/>
        <path id="line8_6" fill="#FFCD1E" d="M1164.2,978.1c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  S1168.7,978.1,1164.2,978.1z M1168.5,986.4c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C1166.5,982.2,1168.5,984.1,1168.5,986.4z"/>
        <rect id="line8_4-line8_5" x="1283.2" y="850.4" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -223.281 1167.2357)" fill="#FFCD1E" width="28.3" height="5.5"/>
        <rect id="line8_3-line8_4" x="1306.2" y="801.5" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -174.3375 1187.5964)" fill="#FFCD1E" width="80.4" height="5.5"/>
        <path id="line8_4" fill="#FFCD1E" d="M1320.8,837.9c0-4.5-3.7-8.2-8.2-8.2s-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2  S1320.8,842.5,1320.8,837.9z M1312.6,842.2c-2.3,0-4.2-1.9-4.2-4.3c0-2.4,2-4.1,4.2-4.2c2.3,0,4.2,1.8,4.3,4.2  C1316.9,840.3,1314.8,842.2,1312.6,842.2z"/>
        <rect id="line8_2-line8_3" x="1371.6" y="751.9" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -124.7527 1208.106)" fill="#FFCD1E" width="48.7" height="5.5"/>
        <path id="line8_3" fill="#FFCD1E" d="M1372.9,773.8c2.6,2.6,5.2,5.2,7.8,7.8l3.9-3.9c-2.6-2.6-5.2-5.2-7.8-7.8  C1375.5,771.2,1374.2,772.5,1372.9,773.8z"/>
        <rect id="line8_1-line8_2" x="1409.4" y="712.3" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -85.1384 1224.5441)" fill="#FFCD1E" width="52.4" height="5.5"/>
        <path id="line8_2" fill="#FFCD1E" d="M1411.2,735.5c2.6,2.6,5.2,5.2,7.8,7.8l3.9-3.9c-2.6-2.6-5.2-5.2-7.8-7.8  C1413.8,732.9,1412.5,734.2,1411.2,735.5z"/>
        <rect id="line8_1" x="1453.3" y="686.4" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -64.6886 1233.0146)" fill="#FFCD1E" width="5.5" height="16.4"/>
        <ellipse id="line8-1b" fill="#1D1D1B" cx="1467.6" cy="683.4" rx="7.6" ry="7.6"/>
        <path id="line8-1" fill="#FFCD1C" d="M1467.5,692c-4.8,0-8.8-3.9-8.8-8.8c0-4.9,3.9-8.8,8.8-8.8c4.8,0,8.8,3.9,8.8,8.8  S1472.3,692,1467.5,692z M1467.5,678.6c-2,0-3.2,1.2-3.2,2.5c0,0.8,0.5,1.6,1.3,1.9l0,0c-0.8,0.4-1.5,1.2-1.5,2.1  c0,1.6,1.4,2.7,3.4,2.7s3.4-1.1,3.4-2.7c0-0.9-0.7-1.8-1.5-2.1l0,0c0.8-0.4,1.3-1.1,1.3-1.9C1470.8,679.8,1469.6,678.6,1467.5,678.6  z M1467.5,683.9c1,0,1.7,0.6,1.7,1.3s-0.7,1.2-1.7,1.2c-1.1,0-1.7-0.7-1.7-1.2C1465.8,684.5,1466.4,683.9,1467.5,683.9z   M1467.5,682.4c-1,0-1.5-0.5-1.5-1.2c0-0.6,0.5-1.2,1.5-1.2s1.5,0.6,1.5,1.2C1469.1,681.9,1468.5,682.4,1467.5,682.4z"/>
        <path id="line7_22-line7_23" fill="#943F90" d="M1303.3,1639.2l-18.1,18.1c-6,6-9.4,14.1-9.4,22.6v31.1c1.8,0,3.7,0,5.5,0v-30.5  c0-7.4,2.9-14.4,8.2-19.7l17.7-17.7C1305.9,1641.8,1304.6,1640.5,1303.3,1639.2z"/>
        <rect id="line7_23" x="1270.4" y="1710.9" fill="#943F90" width="16.4" height="5.5"/>
        <path id="line7_21-line7_22" fill="#943F90" d="M1432,1483.6v15.4c0,7.4-2.9,14.4-8.2,19.7c-24.5,24.5-48.9,48.9-73.4,73.4l0,0  c-14.4,14.4-28.9,28.9-43.3,43.3c1.3,1.3,2.6,2.6,4,3.8l19.5-19.5l0,0l97.5-97.5c6-6,9.4-14.1,9.4-22.6v-16  C1435.6,1483.6,1433.8,1483.6,1432,1483.6z"/>
        <path id="line7_22" fill="#943F90" d="M1303.3,1639.2c2.6,2.6,5.2,5.2,7.8,7.8l3.9-3.9c-2.6-2.6-5.2-5.2-7.8-7.8  C1305.8,1636.7,1304.5,1637.9,1303.3,1639.2z"/>
        <path id="line7_20-line7_21" fill="#943F90" d="M1437.5,1468.4v-47.7h-5.5v47.6C1433.8,1468.4,1435.6,1468.4,1437.5,1468.4z"/>
        <path id="line7_21" fill="#943F90" d="M1434.6,1467.7c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  S1439.1,1467.7,1434.6,1467.7z M1438.9,1475.9c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C1436.9,1471.7,1438.9,1473.6,1438.9,1475.9z"/>
        <path id="line7_19-line7_20" fill="#943F90" d="M1432,1415.3c1.8,0,3.7,0,5.5,0v-71.8c0-8.5-3.4-16.6-9.4-22.6l-3.2-3.2  c-1.3,1.3-2.6,2.6-3.9,3.9l2.8,2.8c5.3,5.3,8.2,12.3,8.2,19.7C1432,1367.8,1432,1391.6,1432,1415.3z"/>
        <path id="line7_20" fill="#943F90" d="M1432,1420.8c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0C1432,1417.2,1432,1419,1432,1420.8z"/>
        <path id="line7_18-line7_19" fill="#943F90" d="M1421.1,1313.9c-18.4-18.4-36.8-36.8-55.2-55.2c-1.3,1.3-2.6,2.6-3.9,3.9  c18.4,18.4,36.8,36.8,55.2,55.1C1418.5,1316.5,1419.8,1315.2,1421.1,1313.9z"/>
        <path id="line7_19" fill="#943F90" d="M1421,1321.6c2.6-2.6,5.2-5.2,7.8-7.8l-3.9-3.9c-2.6,2.6-5.2,5.2-7.8,7.8  C1418.5,1319.1,1419.8,1320.4,1421,1321.6z"/>
        <path id="line7_17-line7_18" fill="#943F90" d="M1319.2,1212.1c-1.3,1.3-2.6,2.6-3.8,3.9c14.3,14.3,28.5,28.5,42.8,42.8  c1.3-1.3,2.6-2.6,3.9-3.9C1347.8,1240.6,1333.5,1226.3,1319.2,1212.1z"/>
        <path id="line7_18" fill="#943F90" d="M1362,1262.6c2.6-2.6,5.2-5.2,7.8-7.8l-3.9-3.9c-2.6,2.6-5.2,5.2-7.8,7.8  C1359.5,1260.1,1360.8,1261.4,1362,1262.6z"/>
        <rect id="line7_15-line7_16" x="1187.1" y="1051.6" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -419.8745 1159.6122)" fill="#943F90" width="5.5" height="70.1"/>
        <path id="line7_16" fill="#943F90" d="M1219.9,1108.2c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  S1224.4,1108.2,1219.9,1108.2z M1224.2,1116.5c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C1222.2,1112.3,1224.2,1114.2,1224.2,1116.5z"/>
        <path id="line7_14-line7_15" fill="#943F90" d="M1157,1049.8c-10.6-10.6-21.2-21.2-31.8-31.8c-1.3,1.3-2.6,2.6-3.9,3.9  c10.6,10.6,21.2,21.2,31.8,31.8C1154.4,1052.4,1155.7,1051.1,1157,1049.8z"/>
        <path id="line7_15" fill="#943F90" d="M1159.7,1048.2c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  S1164.2,1048.2,1159.7,1048.2z M1164,1056.5c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C1162.1,1052.3,1164,1054.2,1164,1056.5z"/>
        <path id="line7_13-line7_14" fill="#943F90" d="M999.9,900.5c37,37,74,74,111,111c1.3-1.3,2.6-2.6,3.9-3.9  c-37-37-73.9-73.9-110.9-110.9C1002.6,898,1001.3,899.3,999.9,900.5z"/>
        <path id="line7_14" fill="#943F90" d="M1116.1,1007.2c-4.3,1.2-7.1,5.7-5.8,10.1c1.2,4.3,5.7,7.1,10.1,5.8c4.3-1.2,7.1-5.7,5.8-10.1  C1125.1,1008.6,1120.4,1006,1116.1,1007.2z M1122.3,1014.1c0.6,2.1-0.8,4.5-3,5c-2.2,0.6-4.4-0.9-5-2.9c-0.6-2.1,0.7-4.4,2.9-5.1  C1119.4,1010.5,1121.7,1012,1122.3,1014.1z"/>
        <path id="line7_12-line7_13" fill="#943F90" d="M992.9,885.7c-23.8-23.8-47.6-47.6-71.3-71.3c-1.3,1.3-2.6,2.6-3.9,3.9  c23.8,23.8,47.6,47.6,71.4,71.4C990.4,888.4,991.7,887.1,992.9,885.7z"/>
        <path id="line7_13" fill="#943F90" d="M990.7,887.3c-3.2,3.2-3.2,8.5,0,11.7s8.5,3.2,11.7,0s3.2-8.5,0-11.7  C999.1,884.1,993.8,884.2,990.7,887.3z M999.5,890.1c1.6,1.8,1.5,4.4-0.1,6.1c-1.6,1.4-4.3,1.7-6,0s-1.6-4.4-0.1-6.1  C995,888.5,997.9,888.5,999.5,890.1z"/>
        <path id="line7_11-line7_12" fill="#943F90" d="M910.3,806.7c-4-1.5-8.5-2.2-14.5-2.3H776.2c0,1.8,0,3.7,0,5.5h119.3  c5.1,0.1,8.8,0.5,12.1,1.6C908.5,809.9,909.4,808.3,910.3,806.7z"/>
        <path id="line7_12" fill="#943F90" d="M915.6,804.6c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  C923.9,808.3,920.1,804.6,915.6,804.6z M919.9,812.9c0,2.3-1.9,4.2-4.3,4.2c-2.4,0-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C918,808.6,919.9,810.6,919.9,812.9z"/>
        <path id="line7_10-line7_11" fill="#943F90" d="M610.5,809.9c50.1,0,100.2,0,150.3,0v-5.5c-50.1,0-100.2,0-150.2,0  C610.5,806.3,610.5,808.1,610.5,809.9z"/>
        <path id="line7_11" fill="#943F90" d="M762.6,813c3.2,3.2,8.5,3.2,11.7,0s3.2-8.5,0-11.7s-8.5-3.2-11.7,0S759.4,809.8,762.6,813z   M765.5,804.2c1.6-1.5,4.2-1.6,5.9,0.1c1.6,1.6,1.5,4.2,0,5.8c-1.5,1.5-4.2,1.7-5.8,0.1C763.9,808.5,763.9,805.8,765.5,804.2z"/>
        <path id="line7_9-line7_10" fill="#943F90" d="M595.7,804.4c-7.9,0-15.8,0-23.8,0c-7.2,0-14.1-2.8-19.4-7.8  c-1.3,1.3-2.6,2.6-3.9,3.9l0,0c6,6,14.1,9.4,22.6,9.4H596C595.9,808.1,595.8,806.3,595.7,804.4z"/>
        <path id="line7_10" fill="#943F90" d="M602.7,798.9c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  C611,802.6,607.3,798.9,602.7,798.9z M606.9,807.1c0,2.2-1.9,4.1-4.2,4.1s-4-2-4.1-4.1c0-2.2,1.8-4.1,4.1-4.2  C605.1,802.9,606.9,804.9,606.9,807.1z"/>
        <path id="line7_8-line7_9" fill="#943F90" d="M529,780.8c5.3,5.3,10.6,10.6,15.9,15.9l3.9-3.9c-5.3-5.3-10.6-10.6-15.9-15.9  C531.6,778.2,530.3,779.5,529,780.8z"/>
        <path id="line7_9" fill="#943F90" d="M544.8,804.4c2.6-2.6,5.2-5.2,7.8-7.8l-3.9-3.9c-2.6,2.6-5.2,5.2-7.8,7.8  C542.3,801.9,543.6,803.2,544.8,804.4z"/>
        <path id="line7_7-line7_8" fill="#943F90" d="M457.7,709.6c20.7,20.7,41.3,41.3,62,62l3.9-3.9c-20.7-20.7-41.3-41.3-61.9-61.9  C460.3,707,459,708.3,457.7,709.6z"/>
        <path id="line7_8" fill="#943F90" d="M525.5,765.3c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2S530.1,765.3,525.5,765.3  z M529.7,773.5c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3C527.9,769.2,529.8,771.2,529.7,773.5z"/>
        <path id="line7_6-line7_7" fill="#943F90" d="M352.2,604.1c31.6,31.6,63.2,63.2,94.7,94.7l3.9-3.9c-31.6-31.6-63.2-63.2-94.7-94.7  C354.8,601.6,353.5,602.9,352.2,604.1z"/>
        <path id="line7_7" fill="#943F90" d="M446.1,702.2c0,4.5,3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2s-3.7-8.2-8.2-8.2  C449.8,694,446.1,697.7,446.1,702.2z M454.3,698c2.3,0,4.2,1.9,4.2,4.3s-2,4.1-4.2,4.2c-2.3,0-4.2-1.8-4.3-4.2  C450,699.9,452.1,697.9,454.3,698z"/>
        <path id="line7_5-line7_6" fill="#943F90" d="M338.4,582.5c-5.2-5.2-8.2-12.3-8.2-19.8c0-6.4,0-12.7,0-19.1  c-1.8,0.1-3.7,0.1-5.5,0.2c0,6.5,0,13,0,19.5c0,8.5,3.4,16.6,9.4,22.6l7.5,7.5c1.3-1.3,2.6-2.6,3.9-3.9  C343.1,587.2,340.8,584.8,338.4,582.5z"/>
        <path id="line7_6" fill="#943F90" d="M340.7,596.9c0,4.5,3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2s-3.7-8.2-8.2-8.2S340.7,592.3,340.7,596.9  z M348.9,592.7c2.3,0,4.2,1.9,4.2,4.3s-2,4.1-4.2,4.2c-2.3,0-4.2-1.8-4.3-4.2C344.6,594.5,346.7,592.6,348.9,592.7z"/>
        <path id="line7_5" fill="#943F90" d="M319.2,536.1c0,4.5,3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2s-3.7-8.2-8.2-8.2  C322.9,527.8,319.2,531.6,319.2,536.1z M327.5,531.9c2.3,0,4.2,1.9,4.2,4.3s-2,4.1-4.2,4.2c-2.3,0-4.2-1.8-4.3-4.2  C323.2,533.7,325.2,531.8,327.5,531.9z"/>
        <path id="line7_4" fill="#943F90" d="M324.7,446.3c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0C324.7,442.7,324.7,444.5,324.7,446.3z"/>
        <path id="line7_3" fill="#943F90" d="M327.5,387.8c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2S332,387.8,327.5,387.8z   M331.8,396c0,2.3-2,4.2-4.3,4.2c-2.4,0-4.1-2-4.2-4.2c0-2.3,1.9-4.2,4.2-4.3C329.8,391.8,331.8,393.8,331.8,396z"/>
        <path id="line7_2" fill="#943F90" d="M324.7,268c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0C324.7,264.4,324.7,266.2,324.7,268z"/>
        <rect id="line7_1" x="319.3" y="157.7" fill="#943F90" width="16.4" height="5.5"/>
        <path id="line-7-2" fill="#943E90" d="M1278.6,1736.8c-4.9,0-8.8-3.9-8.8-8.8c0-4.8,3.9-8.8,8.8-8.8s8.8,3.9,8.8,8.8  S1283.4,1736.8,1278.6,1736.8z M1275.9,1723.7v1.5h4.2l-3.1,7.4h1.9l3.2-7.7v-1.2L1275.9,1723.7L1275.9,1723.7z"/>
        <path id="line-7-1" fill="#943E90" d="M327.5,152.8c-4.8,0-8.8-3.9-8.8-8.8c0-4.9,3.9-8.8,8.8-8.8s8.8,3.9,8.8,8.8  C336.3,149,332.3,152.8,327.5,152.8z M324.7,139.6v1.5h4.2l-3.1,7.4h1.9l3.2-7.7v-1.2H324.7L324.7,139.6z"/>
        <path id="line6_23-line6_24" fill="#EF7E24" d="M640.1,1648.1l-9.6-9.6c-5.2-5.2-8.1-12.2-8.1-19.7v-10.9c-1.8,0-3.7-0.1-5.5-0.1  v11.6c0,8.5,3.3,16.6,9.3,22.6l10,10C637.4,1650.6,638.8,1649.4,640.1,1648.1z"/>
        <path id="line6_24" fill="#EF7E24" d="M643.4,1647.1c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  S647.9,1647.1,643.4,1647.1z M647.6,1655.4c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C645.8,1651.1,647.7,1653.2,647.6,1655.4z"/>
        <rect id="line6_22-line6_23" x="616.8" y="1572.4" fill="#EF7E24" width="5.5" height="30"/>
        <path id="line6_23" fill="#EF7E24" d="M616.8,1607.9c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0  C616.8,1604.3,616.8,1606.1,616.8,1607.9z"/>
        <rect id="line6_21-line6_22" x="616.8" y="1537" fill="#EF7E24" width="5.5" height="30"/>
        <path id="line6_22" fill="#EF7E24" d="M616.8,1572.5c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0  C616.8,1568.9,616.8,1570.7,616.8,1572.5z"/>
        <rect id="line6_20-line6_21" x="616.8" y="1501.5" fill="#EF7E24" width="5.5" height="30"/>
        <path id="line6_21" fill="#EF7E24" d="M616.8,1537c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0C616.8,1533.4,616.8,1535.2,616.8,1537z"/>
        <path id="line6_20" fill="#EF7E24" d="M616.8,1501.6c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0C616.8,1498,616.8,1499.8,616.8,1501.6  z"/>
        <rect id="line6_17-line6_18" x="616.8" y="1354.4" fill="#EF7E24" width="5.5" height="35"/>
        <path id="line6_18" fill="#EF7E24" d="M616.8,1394.9c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0  C616.8,1391.3,616.8,1393.1,616.8,1394.9z"/>
        <rect id="line6_16-line6_17" x="616.8" y="1313.9" fill="#EF7E24" width="5.5" height="35"/>
        <path id="line6_17" fill="#EF7E24" d="M616.8,1354.4c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0  C616.8,1350.8,616.8,1352.6,616.8,1354.4z"/>
        <rect id="line6_15-line6_16" x="616.8" y="1255.9" fill="#EF7E24" width="5.5" height="52.5"/>
        <path id="line6_16" fill="#EF7E24" d="M616.8,1313.9c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0  C616.8,1310.3,616.8,1312.1,616.8,1313.9z"/>
        <rect id="line6_14-line6_15" x="616.8" y="1213" fill="#EF7E24" width="5.5" height="27.7"/>
        <path id="line6_15" fill="#EF7E24" d="M619.5,1240.1c-4.5,0-8.3,3.7-8.3,8.3s3.7,8.3,8.3,8.3s8.3-3.7,8.3-8.3  S624,1240.1,619.5,1240.1z M623.7,1248.3c0,2.3-2,4.2-4.3,4.2c-2.4,0-4.1-2.1-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C621.9,1244,623.8,1246.1,623.7,1248.3z"/>
        <path id="line6_13-line6_14" fill="#EF7E24" d="M667.8,1136.4c-13.3,13.3-26.5,26.5-39.8,39.7c-8.6,8.8-11.1,14.8-11.2,26.2  c0,1.8,0,3.5,0,5.2c1.8,0,3.7,0,5.5,0v-4c0-10.9,1.9-15.5,9.9-23.8c13.2-13.2,26.4-26.3,39.5-39.5  C670.4,1139,669.1,1137.7,667.8,1136.4z"/>
        <path id="line6_14" fill="#EF7E24" d="M616.8,1213c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0C616.8,1209.4,616.8,1211.2,616.8,1213z"/>
        <path id="line6_12-line6_13" fill="#EF7E24" d="M908.1,1040l-51,51c-5.3,5.3-12.3,8.2-19.7,8.2c-26.4,0-52.7,0-79,0l0,0  c-13.4,0-26.8,0-40.2,0c-8.5,0-16.6,3.4-22.6,9.4l-16.9,16.9c1.2,1.4,2.5,2.7,3.7,4.1l16.7-16.7c5.3-5.3,12.3-8.2,19.7-8.2  c22.2,0,44.3,0,66.5,0l0,0c17.6,0,35.1,0,52.7,0c8.5,0,16.6-3.4,22.6-9.4l51.2-51.2C910.6,1042.8,909.4,1041.4,908.1,1040z"/>
        <path id="line6_13" fill="#EF7E24" d="M675.2,1124.6c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  S679.7,1124.6,675.2,1124.6z M679.4,1132.9c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C677.6,1128.6,679.5,1130.7,679.4,1132.9z"/>
        <path id="line6_11-line6_12" fill="#EF7E24" d="M970.2,900.5c0,21.9,0,43.9,0,65.8c0,7.5-2.9,14.5-8.1,19.7  c-14.6,14.6-29.1,29.1-43.6,43.6c1.3,1.3,2.6,2.6,3.9,3.9c14.7-14.7,29.4-29.4,44.1-44.1c6-6,9.3-14.1,9.3-22.6v-66.5  C973.9,900.5,972.1,900.5,970.2,900.5z"/>
        <path id="line6_12" fill="#EF7E24" d="M915.1,1028.6c-4.5,0.1-8.2,3.9-8.1,8.4s3.9,8.2,8.4,8.1s8.2-3.9,8.1-8.4  S919.6,1028.5,915.1,1028.6z M919.4,1036.8c0,2.2-1.8,4.2-4.1,4.2s-4.1-1.9-4.1-4c-0.1-2.2,1.7-4.2,4-4.2  C917.5,1032.6,919.4,1034.5,919.4,1036.8z"/>
        <path id="line6_10-line6_11" fill="#EF7E24" d="M970.2,885.6c1.8,0,3.7,0,5.5,0c0-28.6,0-57.2,0-85.9c0-8.5-3.4-16.6-9.4-22.6  l-6.5-6.5c-1.3,1.3-2.5,2.7-3.8,4l6,6c5.3,5.3,8.2,12.3,8.2,19.7C970.2,828.8,970.2,857.2,970.2,885.6z"/>
        <path id="line6_11" fill="#EF7E24" d="M967.2,887.5c-3.2,3.2-3.2,8.5,0,11.7s8.5,3.2,11.7,0s3.2-8.5,0-11.7  C975.6,884.3,970.4,884.3,967.2,887.5z M976,890.2c1.6,1.8,1.5,4.5-0.1,6.1c-1.6,1.5-4.3,1.7-6,0s-1.6-4.5-0.1-6.1  C971.4,888.6,974.3,888.7,976,890.2z"/>
        <path id="line6_9-line6_10" fill="#EF7E24" d="M922.3,733.1c-5.3-5.3-8.2-12.3-8.2-19.7v-16.8c-1.8,0-3.7,0-5.5-0.1V714  c0,8.5,3.4,16.6,9.4,22.6l27.4,27.4c1.2-1.4,2.5-2.7,3.7-4.1C940.2,751,931.3,742.1,922.3,733.1z"/>
        <path id="line6_10" fill="#EF7E24" d="M946.7,761.4c-3.2,3.2-3.2,8.5,0,11.7s8.5,3.2,11.7,0s3.2-8.5,0-11.7S949.9,758.2,946.7,761.4  z M955.6,764.3c1.6,1.7,1.6,4.4-0.1,6.1c-1.6,1.6-4.3,1.6-6,0c-1.5-1.5-1.7-4.3-0.1-6C951.1,762.7,953.9,762.5,955.6,764.3z"/>
        <path id="line6_8-line6_9" fill="#EF7E24" d="M920.7,661l-2.7,2.7c-6,6-9.3,14.1-9.3,22.6v5c1.8,0,3.7,0,5.5,0v-4.4  c0-7.5,2.9-14.5,8.1-19.7l2.1-2.1C923.1,663.7,921.9,662.4,920.7,661z"/>
        <path id="line6_9" fill="#EF7E24" d="M908.6,696.7c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0C908.6,693.1,908.6,694.9,908.6,696.7z"/>
        <path id="line6_8" fill="#EF7E24" d="M927.8,649.5c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2S932.3,649.5,927.8,649.5  z M932,657.8c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3C930.2,653.5,932.1,655.6,932,657.8z"/>
        <rect id="line6_5-line6_6" x="1042.4" y="437.3" fill="#EF7E24" width="5.5" height="61.8"/>
        <path id="line6_6" fill="#EF7E24" d="M1042.4,504.6c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0C1042.4,501,1042.4,502.8,1042.4,504.6z  "/>
        <rect id="line6_4-line6_5" x="1042.3" y="361.6" fill="#EF7E24" width="5.5" height="60.9"/>
        <path id="line6_5" fill="#EF7E24" d="M1045.1,421.7c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  S1049.6,421.7,1045.1,421.7z M1049.4,430.1c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C1047.4,425.8,1049.4,427.7,1049.4,430.1z"/>
        <rect id="line6_3-line6_4" x="1042.3" y="286.6" fill="#EF7E24" width="5.5" height="59.7"/>
        <path id="line6_4" fill="#EF7E24" d="M1045.1,345.8c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  C1053.3,349.5,1049.6,345.8,1045.1,345.8z M1049.4,354.2c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C1047.4,349.9,1049.4,351.8,1049.4,354.2z"/>
        <rect id="line6_2-line6_3" x="1042.3" y="221.4" fill="#EF7E24" width="5.5" height="59.7"/>
        <path id="line6_3" fill="#EF7E24" d="M1042.3,286.6c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0C1042.3,283,1042.3,284.8,1042.3,286.6z  "/>
        <rect id="line6_1-line6_2" x="1042.3" y="163.2" fill="#EF7E24" width="5.5" height="52.7"/>
        <path id="line6_2" fill="#EF7E24" d="M1042.3,221.4c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0  C1042.3,217.8,1042.3,219.6,1042.3,221.4z"/>
        <rect id="line6_1" x="1036.9" y="157.7" fill="#EF7E24" width="16.4" height="5.5"/>
        <path id="line-6-2" fill="#F07E23" d="M619,1663.3c-4.8,0-8.8-3.9-8.8-8.8s3.9-8.8,8.8-8.8c4.8,0,8.8,3.9,8.8,8.8  C627.8,1659.3,623.9,1663.3,619,1663.3z M619.1,1659.1c2,0,3.4-1.5,3.4-3.3c0-1.9-1.5-3-2.9-3c-0.4,0-0.9,0.1-1.3,0.3l0,0l2.7-3.1  l-1.9-0.1l-1.3,1.6c-1.4,1.8-2,2.8-2,4.2C615.7,1657.4,617,1659.1,619.1,1659.1z M619.1,1657.6c-0.9,0-1.6-0.7-1.6-1.6  s0.7-1.7,1.6-1.7c0.9,0,1.6,0.8,1.6,1.7S620.1,1657.6,619.1,1657.6z"/>
        <path id="line-6-1" fill="#F07E23" d="M1045.1,152.4c-4.8,0-8.8-3.9-8.8-8.8s3.9-8.8,8.8-8.8c4.8,0,8.8,3.9,8.8,8.8  C1053.8,148.6,1049.9,152.4,1045.1,152.4z M1045.1,148.3c2,0,3.4-1.5,3.4-3.3c0-1.9-1.5-3-2.9-3c-0.4,0-0.9,0.1-1.3,0.3l0,0l2.7-3.1  l-1.9-0.1l-1.3,1.6c-1.4,1.8-2,2.8-2,4.2C1041.7,146.6,1042.9,148.3,1045.1,148.3z M1045.1,146.9c-0.9,0-1.6-0.7-1.6-1.6  s0.7-1.7,1.6-1.7s1.6,0.8,1.6,1.7C1046.8,146.1,1046.1,146.9,1045.1,146.9z"/>
        <path id="line5_12-line5_1" fill="#925233" d="M1046.3,713.2c1.3-1.3,2.6-2.6,3.8-3.9c-31.3-32.9-70.6-58.3-114.5-72.9  c-0.5,1.8-1,3.5-1.5,5.3C977.1,656,1015.6,680.9,1046.3,713.2z"/>
        <path id="line5_11-line5_12" fill="#925233" d="M849.3,628c24.5,0,48.2,3.3,70.8,9.5c0.4-1.8,0.8-3.6,1.2-5.4  c-23-6.3-47.2-9.6-72.1-9.6c-27.5,0-54.2,4.1-79.4,11.8c0.4,1.8,0.9,3.6,1.3,5.3C796,632.1,822.2,628,849.3,628z"/>
        <path id="line5_12" fill="#925233" d="M927.8,628.6c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  C936.1,632.3,932.3,628.6,927.8,628.6z M932,636.9c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C930.2,632.6,932.1,634.7,932,636.9z"/>
        <path id="line5_10-line5_11" fill="#925233" d="M757.5,644.2c-0.6-1.7-1.1-3.5-1.7-5.2c-45.8,16.6-86.1,45-117.3,81.4  c1.3,1.2,2.7,2.5,4,3.7C673.1,688.4,712.7,660.5,757.5,644.2z"/>
        <path id="line5_11" fill="#925233" d="M763.6,630.8c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  C771.9,634.6,768.1,630.8,763.6,630.8z M767.8,639.1c0,2.2-1.9,4.1-4.2,4.1s-4-2-4.1-4.1c0-2.2,1.8-4.1,4.1-4.2  C765.9,634.9,767.8,636.9,767.8,639.1z"/>
        <path id="line5_9-line5_10" fill="#925233" d="M633.3,735.6c-1.4-1.1-2.9-2.3-4.3-3.4c-19.3,25.1-34.4,53.6-44.2,84.4  c1.7,0.6,3.5,1.1,5.2,1.7C599.7,788.1,614.5,760.2,633.3,735.6z"/>
        <path id="line5_10" fill="#925233" d="M635.7,719.7c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  S640.2,719.7,635.7,719.7z M639.8,728c0,2.2-1.9,4.1-4.2,4.1s-4-2-4.1-4.1c0-2.2,1.8-4.1,4.1-4.2C638,723.8,639.9,725.8,639.8,728z"/>
        <path id="line5_8-line5_9" fill="#925233" d="M577.3,900c0-23.3,3-45.9,8.6-67.6c-1.8-0.4-3.6-0.9-5.3-1.3  c-5.7,22.1-8.8,45.1-8.8,68.9c0,5,0.1,10,0.4,15c1.8-0.1,3.7-0.2,5.5-0.3C577.5,909.9,577.3,905,577.3,900z"/>
        <path id="line5_9" fill="#925233" d="M585.1,816.3c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2S589.6,816.3,585.1,816.3  z M589.3,824.5c0,2.2-1.9,4.1-4.2,4.1s-4-2-4.1-4.1c0-2.2,1.8-4.1,4.1-4.2C587.4,820.4,589.3,822.3,589.3,824.5z"/>
        <path id="line5_7-line5_8" fill="#925233" d="M609.1,1026.9c-15.8-29.7-26.3-62.5-30.2-97.3l-5.5,0.6c3.9,35.5,14.6,69.1,30.8,99.4  C605.9,1028.7,607.5,1027.8,609.1,1026.9z"/>
        <path id="line5_8" fill="#925233" d="M571.3,929.5c3.9,2.3,9,0.9,11.3-3s0.9-9-3-11.3s-9-0.9-11.3,3  C566.1,922.1,567.4,927.2,571.3,929.5z M571.8,920.2c1.1-2,3.8-2.7,5.8-1.6c2.1,1.2,2.6,3.8,1.5,5.8s-3.7,2.8-5.7,1.7  C571.3,924.9,570.6,922.1,571.8,920.2z"/>
        <path id="line5_6-line5_7" fill="#925233" d="M616.5,1039.8c-1.6,1-3.1,1.9-4.7,2.9c15.1,25,34.1,47.4,56,66.5  c1.1-1.4,2.3-2.9,3.4-4.3C649.8,1086.2,631.3,1064.2,616.5,1039.8z"/>
        <path id="line5_7" fill="#925233" d="M610.3,1026.6c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  S614.8,1026.6,610.3,1026.6z M614.5,1034.8c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C612.7,1030.5,614.6,1032.6,614.5,1034.8z"/>
        <path id="line5_5-line5_6" fill="#925233" d="M682.6,1114.3c-1.1,1.5-2.1,3-3.2,4.5c22.9,17.9,48.7,32.3,76.5,42.4  c0.5-1.8,1.1-3.5,1.6-5.3C730.3,1146,705,1131.8,682.6,1114.3z"/>
        <path id="line5_6" fill="#925233" d="M675.2,1103.7c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  C683.5,1107.4,679.7,1103.7,675.2,1103.7z M679.4,1112c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C677.6,1107.7,679.5,1109.8,679.4,1112z"/>
        <path id="line5_4-line5_5" fill="#925233" d="M944.6,1154.6c-29.7,11.3-61.8,17.5-95.3,17.5c-27.1,0-53.2-4.1-78-11.6  c-0.5,1.8-0.9,3.5-1.4,5.3c25.2,7.6,51.8,11.7,79.4,11.7c34.1,0,66.8-6.3,97-17.7C945.8,1158.1,945.2,1156.3,944.6,1154.6z"/>
        <path id="line5_5" fill="#925233" d="M763.7,1152.6c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  C772,1156.4,768.2,1152.6,763.7,1152.6z M768,1160.9c0,2.3-1.9,4.2-4.3,4.2c-2.4,0-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C766.1,1156.6,768,1158.7,768,1160.9z"/>
        <path id="line5_3-line5_4" fill="#925233" d="M1089.6,1026.7c-28.8,54-75.3,97.5-131.5,122.4c0.7,1.7,1.3,3.4,2,5.1  c57.5-25.4,105.1-69.8,134.5-125C1092.9,1028.4,1091.3,1027.5,1089.6,1026.7z"/>
        <path id="line5_4" fill="#925233" d="M944.2,1155.9c0.8,4.4,5.1,7.4,9.5,6.7c4.4-0.8,7.4-5.1,6.7-9.6s-5.1-7.4-9.5-6.7  C946.4,1147.2,943.4,1151.5,944.2,1155.9z M951.6,1150.4c2.3-0.3,4.4,1.3,4.8,3.4c0.3,2.1-1.1,4.4-3.3,4.7c-2.3,0.4-4.5-1.1-4.8-3.3  C947.8,1153.1,949.3,1150.8,951.6,1150.4z"/>
        <path id="line5_2-line5_3" fill="#925233" d="M1096.3,1013.3c1.6,0.8,3.3,1.6,4.9,2.4c16.4-35.3,25.6-74.5,25.6-115.7  c0-7.4-0.3-14.7-0.9-22c-1.8,0.2-3.6,0.4-5.5,0.6c0.6,7.1,0.9,14.2,0.9,21.4C1121.3,940.3,1112.3,978.7,1096.3,1013.3z"/>
        <path id="line5_3" fill="#925233" d="M1093.3,1013.3c-4.3,1.2-7.1,5.7-5.8,10.1c1.2,4.3,5.7,7.1,10.1,5.8c4.3-1.2,7.1-5.7,5.8-10.1  C1102.2,1014.8,1097.7,1012.1,1093.3,1013.3z M1099.6,1020.2c0.6,2.1-0.8,4.5-3,5c-2.2,0.6-4.4-0.9-5-2.9c-0.6-2.1,0.7-4.4,2.9-5.1  C1096.7,1016.6,1098.9,1018.1,1099.6,1020.2z"/>
        <path id="line5_1-line5_2" fill="#925233" d="M1124.3,863.1c-7.3-53.8-30.3-103-64.1-142.6c-1.3,1.2-2.7,2.5-4,3.7  c33.1,38.8,55.5,86.8,62.7,139.4C1120.7,863.4,1122.5,863.3,1124.3,863.1z"/>
        <path id="line5_2" fill="#925233" d="M1114.1,870.8c0,4.5,3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2s-3.7-8.2-8.2-8.2  S1114.1,866.3,1114.1,870.8z M1122.4,866.6c2.3,0,4.2,1.9,4.2,4.3s-2,4.1-4.2,4.2c-2.3,0-4.2-1.8-4.3-4.2  C1118.1,868.5,1120.1,866.5,1122.4,866.6z"/>
        <path id="line5_1" fill="#925233" d="M1053.3,708.5c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  S1057.8,708.5,1053.3,708.5z M1057.6,716.8c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C1055.7,712.5,1057.6,714.6,1057.6,716.8z"/>
        <path id="line-5-2" fill="#915133" d="M1046.9,1122.8c-4.8,0-8.8-3.9-8.8-8.8s3.9-8.8,8.8-8.8s8.8,3.9,8.8,8.8  C1055.6,1119,1051.7,1122.8,1046.9,1122.8z M1043.3,1117.7c0.8,0.9,2,1.3,3.4,1.3c2.2,0,3.6-1.5,3.6-3.3c0-2-1.6-3.1-3.2-3.1  c-0.5,0-1.2,0.1-1.6,0.4l0,0l0.1-2.2h4l0.5-1.5h-6l-0.3,5.3l1.3,0.1c0.5-0.4,1-0.5,1.5-0.5c1.1,0,1.8,0.7,1.8,1.5  c0,1-0.8,1.6-1.9,1.6c-0.7,0-1.5-0.3-2.2-0.9L1043.3,1117.7z"/>
        <path id="line-5-1" fill="#915133" d="M598.6,761.8c-4.8,0-8.8-3.9-8.8-8.8s3.9-8.8,8.8-8.8s8.8,3.9,8.8,8.8  C607.3,758,603.4,761.8,598.6,761.8z M595,756.7c0.8,0.9,2,1.3,3.4,1.3c2.2,0,3.6-1.5,3.6-3.3c0-2-1.6-3.1-3.2-3.1  c-0.5,0-1.2,0.1-1.6,0.4l0,0l0.1-2.2h4l0.5-1.5h-6l-0.3,5.3l1.3,0.1c0.5-0.4,1-0.5,1.5-0.5c1.1,0,1.8,0.7,1.8,1.5  c0,1-0.8,1.6-1.9,1.6c-0.7,0-1.5-0.3-2.2-0.9L595,756.7z"/>
        <path id="line4_12-line4_13" fill="#24BCEF" d="M192.4,896.7c-12.1-12.1-24.3-24.3-36.4-36.4l3.9-3.9c12.1,12.1,24.3,24.3,36.4,36.4  C195,894.1,193.7,895.4,192.4,896.7z"/>
        <path id="line4_11-line4_12" fill="#24BCEF" d="M200.2,896.7c9,9,18,18,26.9,26.9c-1.3,1.3-2.6,2.6-3.9,3.9c-9-9-18-18-26.9-26.9  C197.6,899.3,198.9,898,200.2,896.7z"/>
        <path id="line4_12" fill="#24BCEF" d="M196.3,900.6c2.6-2.6,5.2-5.2,7.8-7.8l-3.9-3.9c-2.6,2.6-5.2,5.2-7.8,7.8  C193.7,898,195,899.3,196.3,900.6z"/>
        <path id="line4_10-line4_11" fill="#24BCEF" d="M231,927.6c11.6,11.6,23.3,23.3,34.9,34.9l-3.9,3.9c-11.6-11.6-23.3-23.3-34.9-34.9  C228.4,930.2,229.7,928.9,231,927.6z"/>
        <path id="line4_11" fill="#24BCEF" d="M227.1,931.5c2.6-2.6,5.2-5.2,7.8-7.8l-3.9-3.9c-2.6,2.6-5.2,5.2-7.8,7.8  C224.5,928.9,225.8,930.2,227.1,931.5z"/>
        <path id="line4_9-line4_10" fill="#24BCEF" d="M269.8,966.4c6.8,6.8,13.6,13.6,20.4,20.4l-3.9,3.9c-6.8-6.8-13.6-13.6-20.4-20.4  C267.2,969,268.5,967.7,269.8,966.4z"/>
        <path id="line4_10" fill="#24BCEF" d="M262,974.2c2.6-2.6,5.2-5.2,7.8-7.8l-3.9-3.9c-2.6,2.6-5.2,5.2-7.8,7.8  C259.4,971.6,260.7,972.9,262,974.2z"/>
        <path id="line4_8-line4_9" fill="#24BCEF" d="M373.1,1027H342c-7.5,0-14.5-2.9-19.7-8.1L301,997.6c-1.3,1.3-2.6,2.6-3.9,3.9  l21.7,21.7c6,6,14.1,9.3,22.6,9.3h31.8C373.2,1030.6,373.1,1028.8,373.1,1027z"/>
        <path id="line4_9" fill="#24BCEF" d="M293.6,985.9c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2S298.1,985.9,293.6,985.9  z M297.9,994.1c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3C296,989.8,297.9,991.9,297.9,994.1z"/>
        <path id="line4_7-line4_8" fill="#24BCEF" d="M421,1007.4l-11.3,11.3c-5.3,5.3-12.3,8.2-19.7,8.2h-2.3c-0.1,1.8-0.1,3.7-0.2,5.5h3.1  c8.5,0,16.6-3.4,22.6-9.4l11.8-11.8C423.7,1010,422.3,1008.7,421,1007.4z"/>
        <path id="line4_4-line4_7" fill="#24BCEF" d="M534.8,901.2c-6.1,1.2-11.8,4.2-16.2,8.7c-31.5,31.5-62.9,62.9-94.3,94.3  c1.4,1.2,2.8,2.3,4.3,3.5c31.2-31.2,62.3-62.3,93.5-93.5c3.7-3.7,8.2-6.2,13.2-7.4C535.1,904.9,535,903.1,534.8,901.2z"/>
        <path id="line4_7" fill="#24BCEF" d="M421,1007.5c2.6,2.6,5.2,5.2,7.8,7.8l3.9-3.9c-2.6-2.6-5.2-5.2-7.8-7.8  C423.6,1004.9,422.3,1006.2,421,1007.5z"/>
        <path id="line4_6" fill="#24BCEF" d="M371.3,903.2c0,4.5,3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2s-3.7-8.2-8.2-8.2S371.3,898.8,371.3,903.2  z M379.7,899c2.4,0.1,4.2,2,4.2,4.3c-0.1,2.2-1.8,4.2-4.2,4.2s-4.3-1.9-4.3-4.2C375.3,901,377.2,899,379.7,899z"/>
        <path id="line4_4-line4_5" fill="#24BCEF" d="M455.5,906c26.5,0,52.7,0,79.2,0c0-1.8,0-3.7,0-5.5c-26.3,0-52.7,0-79,0  C455.5,902.4,455.5,904.2,455.5,906z"/>
        <path id="line4_5" fill="#24BCEF" d="M444.5,910.4c3.9,2.3,9,0.9,11.3-3s0.9-9-3-11.3s-9-0.9-11.3,3  C439.2,903,440.6,908.2,444.5,910.4z M444.9,901.2c1.2-2,3.9-2.7,5.9-1.5c2.1,1.2,2.6,3.8,1.5,5.7c-1.1,2.1-3.7,2.7-5.8,1.6  C444.5,905.9,443.7,903.2,444.9,901.2z"/>
        <path id="line4_3-line4_4" fill="#24BCEF" d="M550.3,906c24.1,0,48.3,0,72.4,0c0-1.8,0-3.7,0-5.5c-24.2,0-48.3,0-72.5,0  C550.2,902.4,550.3,904.2,550.3,906z"/>
        <path id="line4_4" fill="#24BCEF" d="M538.3,910.4c3.9,2.3,9,0.9,11.3-3s0.9-9-3-11.3s-9-0.9-11.3,3S534.4,908.2,538.3,910.4z   M538.7,901.2c1.2-2,3.9-2.7,5.9-1.5c2.1,1.2,2.6,3.8,1.5,5.7c-1.1,2.1-3.7,2.7-5.8,1.6C538.3,905.9,537.5,903.2,538.7,901.2z"/>
        <path id="line4_2-line4_3" fill="#24BCEF" d="M682.7,914.3c1.3-1.3,2.6-2.6,3.8-3.9l-0.5-0.5c-6-6-14.1-9.3-22.6-9.3h-35.2  c0,1.8,0,3.7-0.1,5.5h34.7c7.5,0,14.5,2.9,19.7,8.1L682.7,914.3z"/>
        <path id="line4_3" fill="#24BCEF" d="M622.7,895c0,3.7,0,7.3,0,11h5.5c0-3.7,0-7.3,0-11C626.3,895,624.5,895,622.7,895z"/>
        <path id="line4_1-line4_2" fill="#24BCEF" d="M736.7,960.5c-15.5-15.5-30.9-30.9-46.4-46.4c-1.3,1.3-2.6,2.6-3.9,3.9  c15.4,15.4,30.9,30.9,46.3,46.3C734.1,963.1,735.4,961.8,736.7,960.5z"/>
        <path id="line4_2" fill="#24BCEF" d="M690.4,906.4c-2.6,2.6-5.2,5.2-7.8,7.8l3.9,3.9c2.6-2.6,5.2-5.2,7.8-7.8  C693,909,691.7,907.7,690.4,906.4z"/>
        <path id="line4_1" fill="#24BCEF" d="M744.4,960.8c-3.9-2.3-9-0.9-11.3,3s-0.9,9,3,11.3s9,0.9,11.3-3  C749.6,968.2,748.3,963.1,744.4,960.8z M743.9,970.1c-1.1,1.9-3.7,2.6-5.7,1.5c-2-1.2-2.5-3.7-1.5-5.6c1.1-1.9,3.6-2.7,5.6-1.6  C744.4,965.5,745,968.1,743.9,970.1z"/>
        <path id="line-4-1" fill="#1EBCEF" d="M152.6,885.3c-4.8,0-8.8-3.9-8.8-8.8s3.9-8.8,8.8-8.8c4.9,0,8.8,3.9,8.8,8.8  C161.4,881.3,157.4,885.3,152.6,885.3z M151.5,872l-2.3,5.7v1.2h4.1v2h1.7v-2h0.9l0.5-1.5h-1.3v-2.3h-1.7v2.3h-2.3l0,0l2.3-5.5  L151.5,872L151.5,872L151.5,872z"/>
        <rect id="line3_21-line3_22" x="1396.2" y="419.7" fill="#0572B9" width="5.5" height="60"/>
        <rect id="line3_22" x="1390.8" y="414.2" fill="#0572B9" width="16.4" height="5.5"/>
        <rect id="line3_20-line3_21" x="1396.2" y="485.2" fill="#0572B9" width="5.5" height="60"/>
        <path id="line3_21" fill="#0572B9" d="M1396.2,485.2c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0  C1396.2,481.6,1396.2,483.4,1396.2,485.2z"/>
        <path id="line3_19-line3_20" fill="#0572B9" d="M1396.2,550.6c0,5.2-1.4,8.7-2.5,10.9c-1.6,3.1-4,5.7-8.9,10.8  c-1.6,1.7-2.8,2.9-2.8,2.9c-14.1,14.1-28.2,28.2-42.3,42.3c1.3,1.3,2.6,2.6,3.9,3.9c22.6-22.6,38.3-38.3,42.3-42.3  c0.5-0.5,2.5-2.5,5-5.4c4.3-4.9,6.5-7.4,8.1-10.8c1.2-2.4,2.6-6.4,2.7-12.1v-0.2C1399.9,550.6,1398.1,550.6,1396.2,550.6z"/>
        <path id="line3_20" fill="#0572B9" d="M1396.2,550.7c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0  C1396.2,547.1,1396.2,548.9,1396.2,550.7z"/>
        <path id="line3_18-line3_19" fill="#0572B9" d="M1280.3,677.1c16.2-16.2,32.4-32.4,48.6-48.6c1.3,1.3,2.6,2.6,3.9,3.9  c-16.2,16.2-32.4,32.4-48.6,48.6C1282.9,679.7,1281.6,678.4,1280.3,677.1z"/>
        <path id="line3_19" fill="#0572B9" d="M1328.1,624.9c0,4.5,3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2s-3.7-8.2-8.2-8.2  S1328.1,620.4,1328.1,624.9z M1336.3,620.7c2.2,0,4.1,1.9,4.1,4.2s-2,4-4.1,4.1c-2.2,0-4.1-1.8-4.2-4.1  C1332.1,622.6,1334.1,620.7,1336.3,620.7z"/>
        <path id="line3_18" fill="#0572B9" d="M1276.4,681c2.6,2.6,5.2,5.2,7.8,7.8l3.9-3.9c-2.6-2.6-5.2-5.2-7.8-7.8  C1279,678.4,1277.7,679.7,1276.4,681z"/>
        <path id="line3_16-line3_17" fill="#0572B9" d="M1210.4,754.7c-13.2,13.2-26.3,26.3-39.5,39.5c-1.3-1.3-2.6-2.6-3.9-3.9  c13.2-13.2,26.3-26.3,39.5-39.5C1207.8,752.1,1209.1,753.4,1210.4,754.7z"/>
        <path id="line3_15-line3_16" fill="#0572B9" d="M1167,798.1c-19.3,19.3-38.5,38.5-57.8,57.8c-1.3-1.3-2.6-2.6-3.9-3.9  c19.3-19.3,38.5-38.5,57.8-57.8C1164.4,795.5,1165.7,796.8,1167,798.1z"/>
        <path id="line3_16" fill="#0572B9" d="M1163.1,794.2c2.6,2.6,5.2,5.2,7.8,7.8l3.9-3.9c-2.6-2.6-5.2-5.2-7.8-7.8  C1165.7,791.6,1164.4,792.9,1163.1,794.2z"/>
        <path id="line3_14-line3_15" fill="#0572B9" d="M1094.4,862.9c-34.9,34.8-60.2,59.9-67.1,67.1c-1.2,1.2-4.2,4.5-9.3,6.7  c-5.4,2.4-10.6,2.4-13.7,2.2H857c0,1.8,0,3.7,0,5.5h147.6c6.5-0.1,11.2-0.8,15.5-2.7c6-2.7,9.7-6.5,11-7.9  c7.9-8.2,33-33.1,67.2-67.1C1097,865.5,1095.7,864.2,1094.4,862.9z"/>
        <path id="line3_15" fill="#0572B9" d="M1105.8,852.2c-4-2.2-9-0.7-11.2,3.2c-2.2,4-0.7,9,3.2,11.2c4,2.2,9,0.7,11.2-3.2  C1111.3,859.5,1109.7,854.4,1105.8,852.2z M1105.5,861.6c-1.2,2.1-3.8,2.7-5.8,1.6c-1.9-1.1-2.7-3.7-1.6-5.7c1-2,3.6-2.8,5.7-1.8  C1105.9,856.7,1106.7,859.5,1105.5,861.6z"/>
        <path id="line3_13-line3_14" fill="#0572B9" d="M841.6,939c-26.2,0-52.4,0-78.5,0c0,1.8,0,3.7,0,5.5c26.2,0,52.3,0,78.5,0  C841.6,942.7,841.6,940.9,841.6,939z"/>
        <path id="line3_14" fill="#0572B9" d="M849.4,933.5c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  S853.9,933.5,849.4,933.5z M853.6,941.8c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C851.8,937.5,853.7,939.6,853.6,941.8z"/>
        <path id="line3_12-line3_13" fill="#0572B9" d="M747.5,939c-39.8,0-79.6,0-119.4,0c0,1.8,0,3.7,0,5.5c39.8,0,79.6,0,119.4,0  C747.5,942.7,747.5,940.9,747.5,939z"/>
        <path id="line3_11-line3_12" fill="#0572B9" d="M622.7,939c-24.2,0-48.4,0-72.7,0c0,1.8,0,3.7,0,5.5c24.2,0,48.4,0,72.7,0  C622.7,942.7,622.7,940.9,622.7,939z"/>
        <path id="line3_13" fill="#0572B9" d="M759.4,934.6c-3.9-2.3-9-0.9-11.3,3s-0.9,9,3,11.3s9,0.9,11.3-3  C764.7,942,763.3,936.9,759.4,934.6z M758.9,943.9c-1.1,1.9-3.7,2.6-5.7,1.5c-2-1.2-2.5-3.7-1.5-5.6c1.1-1.9,3.6-2.7,5.6-1.6  C759.4,939.3,760,942,758.9,943.9z"/>
        <path id="line3_10-line3_11" fill="#0572B9" d="M535.2,939.7c-6.4,1.3-12.4,4.4-17.1,9.1l-1.7,1.7c-19.1,19.1-37.2,37.2-55.1,55.1  l0,0c-20.3,20.3-40.6,40.7-61,61c-5.2,5.2-12.3,8.2-19.8,8.2c-10.3,0-20.6,0-30.8,0c0,1.8,0,3.7,0,5.5h28.5h2.4  c8.9,0,17.3-3.5,23.6-9.8c20.5-20.5,41-41,61.4-61.4l0,0c18.8-18.8,37.6-37.6,56.4-56.4c3.9-3.9,8.7-6.4,13.9-7.5  C535.6,943.4,535.4,941.5,535.2,939.7z"/>
        <path id="line3_11" fill="#0572B9" d="M538.3,948.5c3.9,2.3,9,0.9,11.3-3s0.9-9-3-11.3s-9-0.9-11.3,3  C533,941.2,534.4,946.2,538.3,948.5z M538.7,939.3c1.2-2,3.9-2.7,5.9-1.5c2.1,1.2,2.6,3.8,1.5,5.7c-1.1,2.1-3.7,2.7-5.8,1.6  C538.3,944,537.5,941.3,538.7,939.3z"/>
        <path id="line3_9-line3_10" fill="#0572B9" d="M334.4,1074.9c-21.1,0-42.2,0-63.3,0c-7.4,0-14.4-2.9-19.7-8.2  c-7.4-7.4-14.8-14.8-22.1-22.1c-1.2,1.4-2.4,2.8-3.6,4.2l22.3,22.3c6,6,14.1,9.4,22.6,9.4c21.3,0,42.6,0,64,0  C334.5,1078.5,334.5,1076.7,334.4,1074.9z"/>
        <path id="line3_10" fill="#0572B9" d="M342,1069.3c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2S346.6,1069.3,342,1069.3  z M346.2,1077.7c0,2.2-1.9,4.1-4.2,4.1c-2.3,0-4-2-4.1-4.1c0-2.2,1.8-4.1,4.1-4.2C344.3,1073.4,346.3,1075.4,346.2,1077.7z"/>
        <path id="line3_9" fill="#0572B9" d="M218.1,1048.5c3.9,2.3,9,0.9,11.3-3s0.9-9-3-11.3s-9-0.9-11.3,3S214.2,1046.3,218.1,1048.5z   M218.5,1039.3c1.2-2,3.9-2.7,5.9-1.5c2.1,1.2,2.6,3.8,1.5,5.7c-1.1,2.1-3.7,2.7-5.8,1.6C218,1044,217.3,1041.3,218.5,1039.3z"/>
        <path id="line3_7" fill="#0072BA" d="M182.9,696.7c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0C182.9,693.1,182.9,694.9,182.9,696.7z"/>
        <path id="line3_6" fill="#0072BA" d="M182.9,635.8c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0C182.9,632.2,182.9,634,182.9,635.8z"/>
        <path id="line3_5" fill="#0072BA" d="M182.9,562.8c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0C182.9,559.1,182.9,560.9,182.9,562.8z"/>
        <path id="line3_4" fill="#0072BA" d="M182.9,455.8c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0C182.9,452.2,182.9,454,182.9,455.8z"/>
        <path id="line3_3" fill="#0072BA" d="M177.5,355.2c0,4.5,3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2s-3.7-8.2-8.2-8.2  C181.2,346.9,177.5,350.6,177.5,355.2z M185.7,351c2.3,0,4.2,1.9,4.2,4.3s-2,4.1-4.2,4.2c-2.3,0-4.2-1.8-4.3-4.2  C181.4,352.8,183.5,350.9,185.7,351z"/>
        <path id="line3_2" fill="#0072BA" d="M182.9,268c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0C182.9,264.4,182.9,266.2,182.9,268z"/>
        <rect id="line3_1" x="177.5" y="157.7" fill="#0072BA" width="16.4" height="5.5"/>
        <path id="line-3-2" fill="#0072BA" d="M1399,408.9c-4.8,0-8.8-3.9-8.8-8.8c0-4.8,3.9-8.8,8.8-8.8s8.8,3.9,8.8,8.8  C1407.8,404.9,1404,408.9,1399,408.9z M1395.8,403.4c0.8,0.8,2,1.3,3.2,1.3c1.8,0,3.4-1.3,3.4-3c0-1.5-1.2-2.6-2.5-2.8l2.3-2.3v-1.1  h-5.8v1.5h3.6l-2.1,2.2v1.2c0.2-0.1,0.5-0.1,0.9-0.1c0.9,0,1.9,0.4,1.9,1.4c0,0.8-0.7,1.4-1.8,1.4c-0.7,0-1.4-0.2-2-0.8  L1395.8,403.4z"/>
        <path id="line-3-1" fill="#0072BA" d="M185.7,152.9c-4.8,0-8.8-3.9-8.8-8.8c0-4.8,3.9-8.8,8.8-8.8c4.9,0,8.8,3.9,8.8,8.8  C194.5,149.1,190.5,152.9,185.7,152.9z M182.4,147.4c0.8,0.8,2,1.3,3.2,1.3c1.8,0,3.4-1.3,3.4-3c0-1.5-1.2-2.6-2.5-2.8l2.3-2.3v-1.1  H183v1.5h3.6l-2.1,2.2v1.2c0.2-0.1,0.5-0.1,0.9-0.1c0.9,0,1.9,0.4,1.9,1.4c0,0.8-0.7,1.4-1.8,1.4c-0.7,0-1.4-0.2-2-0.8L182.4,147.4z  "/>
        <path id="line2_23-line2_24" fill="#4BAF4F" d="M1174.8,1711.1h-8.4c-7.5,0-14.5-2.9-19.7-8.1c-10.3-10.3-20.6-20.6-30.8-30.8  c-1.2,1.4-2.4,2.7-3.7,4.1c10.3,10.3,20.7,20.7,31,31c6,6,14.1,9.3,22.6,9.3h8.9C1174.7,1714.8,1174.8,1712.9,1174.8,1711.1z"/>
        <rect id="line2_24" x="1174.6" y="1705.5" fill="#4BAF4F" width="5.5" height="16.4"/>
        <rect id="line2_22-line2_23" x="1083.3" y="1620.8" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -846.0051 1250.1315)" fill="#4BAF4F" width="5.5" height="51"/>
        <path id="line2_23" fill="#4BAF4F" d="M1108.7,1660.7c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  S1113.2,1660.7,1108.7,1660.7z M1113,1669c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C1111,1664.7,1113,1666.7,1113,1669z"/>
        <rect id="line2_21-line2_22" x="1050" y="1597" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -832.2119 1216.8317)" fill="#4BAF4F" width="5.5" height="32"/>
        <path id="line2_22" fill="#4BAF4F" d="M1066,1630.2c2.6-2.6,5.2-5.2,7.8-7.8l-3.9-3.9c-2.6,2.6-5.2,5.2-7.8,7.8  C1063.4,1627.6,1064.7,1628.9,1066,1630.2z"/>
        <rect id="line2_20-line2_21" x="1024" y="1571.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -821.4424 1190.832)" fill="#4BAF4F" width="5.5" height="30.6"/>
        <path id="line2_21" fill="#4BAF4F" d="M1039.5,1603.7c2.6-2.6,5.2-5.2,7.8-7.8l-3.9-3.9c-2.6,2.6-5.2,5.2-7.8,7.8  C1036.9,1601.1,1038.2,1602.4,1039.5,1603.7z"/>
        <path id="line2_19-line2_20" fill="#4BAF4F" d="M959.2,1515.4c-1.3,1.3-2.6,2.6-3.9,3.9c16,16,32.1,32.1,48.1,48.1  c1.3-1.3,2.6-2.6,3.9-3.8C991.3,1547.5,975.2,1531.5,959.2,1515.4z"/>
        <path id="line2_20" fill="#4BAF4F" d="M1010.8,1562.8c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  C1019.1,1566.5,1015.3,1562.8,1010.8,1562.8z M1015.1,1571c0,2.3-1.9,4.2-4.3,4.2c-2.4,0-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C1013.2,1566.7,1015.1,1568.8,1015.1,1571z"/>
        <path id="line2_18-line2_19" fill="#4BAF4F" d="M955.4,1511.6l-5.6-5.6c-5.3-5.3-8.2-12.3-8.2-19.7v-13.7c-1.8,0-3.7,0-5.5,0v14.3  c0,8.5,3.4,16.6,9.4,22.6l6,6C952.8,1514.2,954.1,1512.9,955.4,1511.6z"/>
        <path id="line2_19" fill="#4BAF4F" d="M955.4,1519.4c2.6-2.6,5.2-5.2,7.8-7.8l-3.9-3.9c-2.6,2.6-5.2,5.2-7.8,7.8  C952.8,1516.8,954.1,1518.1,955.4,1519.4z"/>
        <path id="line2_17-line2_18" fill="#4BAF4F" d="M936.1,1412.3c0,15,0,30,0,44.9c1.8,0,3.7,0,5.5,0c0-15,0-30,0-45  C939.8,1412.3,938,1412.3,936.1,1412.3z"/>
        <path id="line2_18" fill="#4BAF4F" d="M930.7,1466.5c0.8,4.4,5.1,7.4,9.5,6.7s7.4-5.1,6.7-9.6c-0.8-4.4-5.1-7.4-9.5-6.7  C933,1457.7,929.9,1461.9,930.7,1466.5z M938.1,1460.7c2.4-0.3,4.6,1.3,5,3.5c0.3,2.2-1.1,4.6-3.4,4.9c-2.4,0.4-4.7-1.1-5-3.4  C934.3,1463.4,935.8,1461.2,938.1,1460.7z"/>
        <path id="line2_17" fill="#4BAF4F" d="M936.1,1412.3c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0  C936.1,1408.7,936.1,1410.5,936.1,1412.3z"/>
        <path id="line2_15-line2_16" fill="#4BAF4F" d="M941.6,1356.8c0-25.1,0-50.2,0-75.4c-1.8,0-3.7,0-5.5-0.1c0,25.1,0,50.3,0,75.4  C938,1356.8,939.8,1356.8,941.6,1356.8z"/>
        <path id="line2_16" fill="#4BAF4F" d="M936.1,1362.3c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0  C936.1,1358.7,936.1,1360.5,936.1,1362.3z"/>
        <path id="line2_14-line2_15" fill="#4BAF4F" d="M936.1,1266c0-28.2,0-56.3,0-84.5c1.8,0,3.7,0.1,5.5,0.1c0,28.1,0,56.3,0,84.4  C939.8,1266,938,1266,936.1,1266z"/>
        <path id="line2_15" fill="#4BAF4F" d="M930.7,1275.2c0.8,4.4,5.1,7.4,9.5,6.7s7.4-5.1,6.7-9.6c-0.8-4.4-5.1-7.4-9.5-6.7  C933,1266.5,929.9,1270.7,930.7,1275.2z M938.1,1269.4c2.4-0.3,4.6,1.3,5,3.5c0.3,2.2-1.1,4.6-3.4,4.9c-2.4,0.4-4.7-1.1-5-3.4  C934.3,1272.1,935.8,1270,938.1,1269.4z"/>
        <path id="line2_13-line2_14" fill="#4BAF4F" d="M936.1,1166.2c0-40.7,0-81.3,0-122h5.5c0,40.6,0,81.3,0,121.9  C939.8,1166.2,938,1166.2,936.1,1166.2z"/>
        <path id="line2_14" fill="#4BAF4F" d="M930.9,1175.3c0.8,4.4,5.1,7.4,9.5,6.7s7.4-5.1,6.7-9.6c-0.8-4.4-5.1-7.4-9.5-6.7  C933.1,1166.6,930.1,1170.8,930.9,1175.3z M938.2,1169.6c2.4-0.3,4.6,1.3,5,3.5c0.3,2.2-1.1,4.6-3.4,4.9c-2.4,0.4-4.7-1.1-5-3.4  S935.9,1170.1,938.2,1169.6z"/>
        <path id="line2_12-line2_13" fill="#4BAF4F" d="M936.1,1028.7c1.8,0,3.6,0,5.5,0c0-1.6,0-3.1,0-4.7c-0.1-11.5-2.7-17.4-11.2-26.2  c-24.6-24.5-49.1-49.1-73.7-73.6c-1.3,1.3-2.5,2.7-3.8,4c24.5,24.4,48.9,48.9,73.4,73.3c8,8.3,9.9,12.9,9.9,23.8  C936.1,1026.4,936.1,1027.6,936.1,1028.7z"/>
        <path id="line2_13" fill="#4BAF4F" d="M938.6,1028.2c-4.5,0.1-8.2,3.9-8.1,8.4c0.1,4.5,3.9,8.2,8.4,8.1s8.2-3.9,8.1-8.4  S943.2,1028.1,938.6,1028.2z M943,1036.3c0,2.2-1.8,4.2-4.1,4.2s-4.1-1.9-4.1-4c-0.1-2.2,1.7-4.2,4-4.2  C941,1032.2,942.9,1034.1,943,1036.3z"/>
        <path id="line2_11-line2_12" fill="#4BAF4F" d="M760.2,835.6c27.3,27.3,54.5,54.5,81.8,81.8c1.3-1.3,2.5-2.7,3.8-4  c-27.2-27.2-54.5-54.5-81.7-81.7C762.8,833,761.5,834.3,760.2,835.6z"/>
        <path id="line2_12" fill="#4BAF4F" d="M849.4,912.6c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  C857.7,916.3,853.9,912.6,849.4,912.6z M853.6,920.9c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C851.8,916.6,853.7,918.7,853.6,920.9z"/>
        <path id="line2_10-line2_11" fill="#4BAF4F" d="M694.6,770c18.2,18.2,36.5,36.5,54.7,54.7c1.3-1.3,2.6-2.6,3.9-3.9  c-18.2-18.2-36.4-36.4-54.6-54.6C697.2,767.4,695.9,768.7,694.6,770z"/>
        <path id="line2_11" fill="#4BAF4F" d="M756.7,836.4c4.5,0,8.2-3.7,8.2-8.2s-3.7-8.2-8.2-8.2s-8.2,3.7-8.2,8.2  S752.2,836.4,756.7,836.4z M752.5,828c0-2.2,1.9-4.1,4.2-4.1s4,2,4.1,4.1c0,2.2-1.8,4.1-4.1,4.2C754.4,832.3,752.5,830.2,752.5,828z  "/>
        <path id="line2_9-line2_10" fill="#4BAF4F" d="M639.1,714.5c17.2,17.2,34.4,34.4,51.6,51.6c1.3-1.3,2.6-2.6,3.9-3.9  c-17.2-17.2-34.3-34.3-51.5-51.5C641.7,712,640.4,713.2,639.1,714.5z"/>
        <path id="line2_10" fill="#4BAF4F" d="M694.6,770c2.6-2.6,5.2-5.2,7.8-7.8l-3.9-3.9c-2.6,2.6-5.2,5.2-7.8,7.8  C692,767.4,693.3,768.7,694.6,770z"/>
        <path id="line2_8-line2_9" fill="#4BAF4F" d="M570.1,637.8c20.7,20.7,41.4,41.3,62.1,62l-3.9,3.9c-20.7-20.7-41.4-41.4-62.1-62  C567.5,640.4,568.8,639.1,570.1,637.8z"/>
        <path id="line2_9" fill="#4BAF4F" d="M635.7,698.8c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2S640.2,698.8,635.7,698.8  z M639.8,707.1c0,2.2-1.9,4.1-4.2,4.1s-4-2-4.1-4.1c0-2.2,1.8-4.1,4.1-4.2C638,702.9,639.9,704.9,639.8,707.1z"/>
        <path id="line2_8" fill="#4BAF4F" d="M555.9,635.6c0,4.5,3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2s-3.7-8.2-8.2-8.2  C559.7,627.4,555.9,631.1,555.9,635.6z M564.2,631.4c2.3,0,4.2,1.9,4.2,4.3s-2,4.1-4.2,4.2c-2.3,0-4.2-1.8-4.3-4.2  C559.9,633.2,561.9,631.3,564.2,631.4z"/>
        <path id="line2_7" fill="#4BAF4F" d="M509.5,584.9c2.6-2.6,5.2-5.2,7.8-7.8l-3.9-3.9c-2.6,2.6-5.2,5.2-7.8,7.8  C506.9,582.3,508.2,583.6,509.5,584.9z"/>
        <path id="line2_5-line2_6" fill="#4BAF4F" d="M477,552.4c1.3-1.3,2.6-2.5,4-3.8l-0.7-0.7c-5.2-5.2-8.2-12.3-8.2-19.8  c0-23,0-45.9,0-68.8c-1.8,0-3.7,0-5.5-0.1c0,22.9,0,45.9,0,68.9c0,8.9,3.5,17.4,9.8,23.7L477,552.4z"/>
        <path id="line2_6" fill="#4BAF4F" d="M480.9,556.3c2.6-2.6,5.2-5.2,7.8-7.8l-3.9-3.9c-2.6,2.6-5.2,5.2-7.8,7.8  C478.3,553.7,479.6,555,480.9,556.3z"/>
        <path id="line2_5" fill="#4BAF4F" d="M469.1,443.5c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2S473.7,443.5,469.1,443.5  z M473.4,451.7c0,2.2-1.9,4.1-4.2,4.1s-4-2-4.1-4.1c0-2.2,1.8-4.1,4.1-4.2C471.5,447.6,473.4,449.5,473.4,451.7z"/>
        <path id="line2_4" fill="#4BAF4F" d="M466.4,378.3c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0C466.4,374.7,466.4,376.5,466.4,378.3z"/>
        <path id="line2_3" fill="#4BAF4F" d="M466.4,306.6c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0C466.4,303,466.4,304.8,466.4,306.6z"/>
        <path id="line2_2" fill="#4BAF4F" d="M466.4,234.9c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0C466.4,231.3,466.4,233.1,466.4,234.9z"/>
        <rect id="line2_1" x="461" y="157.7" fill="#4BAF4F" width="16.4" height="5.5"/>
        <path id="line-2-2" fill="#4AAF4F" d="M1194.3,1722.5c-4.8,0-8.8-3.9-8.8-8.8s3.9-8.8,8.8-8.8s8.8,3.9,8.8,8.8  S1199.1,1722.5,1194.3,1722.5z M1197.1,1718l0.5-1.5h-4.1v-0.1l1.5-1.5c1.5-1.4,2.2-2.3,2.2-3.5c0-1.4-1.1-2.6-3.1-2.6  c-1.2,0-2.5,0.6-3.2,1.3l1,1.1c0.6-0.6,1.4-0.9,2-0.9c0.8,0,1.5,0.5,1.5,1.3c0,0.6-0.3,1.1-2,2.8l-2.3,2.3v1.2L1197.1,1718  L1197.1,1718z"/>
        <path id="line-2-1" fill="#4AAF4F" d="M469.1,152.8c-4.8,0-8.8-3.9-8.8-8.8s3.9-8.8,8.8-8.8s8.8,3.9,8.8,8.8S474,152.8,469.1,152.8z   M472,148.3l0.5-1.5h-4.1v-0.1l1.5-1.5c1.5-1.4,2.2-2.3,2.2-3.5c0-1.4-1.1-2.6-3.1-2.6c-1.2,0-2.5,0.6-3.2,1.3l1,1.1  c0.6-0.6,1.4-0.9,2-0.9c0.8,0,1.5,0.5,1.5,1.3c0,0.6-0.3,1.1-2,2.8L466,147v1.2L472,148.3L472,148.3z"/>
        <rect id="line1_25-line1_26" x="456" y="1698.6" fill="#D14A43" width="5.5" height="40"/>
        <rect id="line1_26" x="450.6" y="1738.6" fill="#D14A43" width="16.4" height="5.5"/>
        <rect id="line1_24-line1_25" x="456" y="1653.1" fill="#D14A43" width="5.5" height="40"/>
        <path id="line1_25" fill="#D14A43" d="M456,1698.6c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0C456,1695,456,1696.8,456,1698.6z"/>
        <rect id="line1_23-line1_24" x="456" y="1607.6" fill="#D14A43" width="5.5" height="40"/>
        <path id="line1_24" fill="#D14A43" d="M456,1653.1c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0C456,1649.5,456,1651.3,456,1653.1z"/>
        <rect id="line1_22-line1_23" x="456" y="1562.1" fill="#D14A43" width="5.5" height="40"/>
        <path id="line1_23" fill="#D14A43" d="M456,1607.6c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0C456,1604,456,1605.8,456,1607.6z"/>
        <rect id="line1_21-line1_22" x="456" y="1516.6" fill="#D14A43" width="5.5" height="40"/>
        <path id="line1_22" fill="#D14A43" d="M456,1562.1c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0C456,1558.5,456,1560.3,456,1562.1z"/>
        <rect id="line1_20-line1_21" x="456" y="1471.1" fill="#D14A43" width="5.5" height="40"/>
        <path id="line1_21" fill="#D14A43" d="M456,1516.6c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0C456,1513,456,1514.8,456,1516.6z"/>
        <rect id="line1_19-line1_20" x="456" y="1425.6" fill="#D14A43" width="5.5" height="40"/>
        <path id="line1_20" fill="#D14A43" d="M456,1471.1c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0C456,1467.5,456,1469.3,456,1471.1z"/>
        <rect id="line1_18-line1_19" x="456" y="1365.1" fill="#D14A43" width="5.5" height="55"/>
        <path id="line1_19" fill="#D14A43" d="M456,1425.6c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0C456,1422,456,1423.8,456,1425.6z"/>
        <rect id="line1_17-line1_18" x="456" y="1306.3" fill="#D14A43" width="5.5" height="44.3"/>
        <rect id="line1_16-line1_17" x="456" y="1221" fill="#D14A43" width="5.5" height="79.8"/>
        <path id="line1_17" fill="#D14A43" d="M456,1306.3c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0C456,1302.7,456,1304.5,456,1306.3z"/>
        <path id="line1_15-line1_16" fill="#D14A43" d="M480.3,1138l-14.9,14.9c-6,6-9.4,14.1-9.4,22.6c0,13.3,0,26.7,0,40  c1.8,0,3.7,0,5.5,0v-39.4c0-7.4,2.9-14.4,8.2-19.7l14.3-14.3C482.8,1140.8,481.6,1139.4,480.3,1138z"/>
        <path id="line1_16" fill="#D14A43" d="M456,1221c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0C456,1217.4,456,1219.2,456,1221z"/>
        <path id="line1_14-line_15" fill="#D14A43" d="M494.8,1131.4c13.6-13.6,27.1-27.1,40.7-40.7c-1.3-1.3-2.6-2.6-3.9-3.9  c-13.6,13.6-27.1,27.1-40.7,40.7C492.2,1128.8,493.5,1130.1,494.8,1131.4z"/>
        <path id="line1_15" fill="#D14A43" d="M487.4,1126.6c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  C495.7,1130.4,491.9,1126.6,487.4,1126.6z M491.7,1134.9c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C489.8,1130.6,491.7,1132.7,491.7,1134.9z"/>
        <path id="line1_13-line1_14" fill="#D14A43" d="M539.4,1086.8c14.9-14.9,29.7-29.7,44.6-44.6c-1.3-1.3-2.6-2.6-3.9-3.9  c-14.9,14.9-29.7,29.7-44.6,44.6C536.8,1084.2,538.1,1085.5,539.4,1086.8z"/>
        <path id="line1_14" fill="#D14A43" d="M527.7,1082.9c2.6,2.6,5.2,5.2,7.8,7.8l3.9-3.9c-2.6-2.6-5.2-5.2-7.8-7.8  C530.3,1080.3,529,1081.6,527.7,1082.9z"/>
        <path id="line1_12-line1_13" fill="#D14A43" d="M669,1011.6h-49c-8.5,0-16.6,3.4-22.6,9.4l-6.6,6.6c1.3,1.3,2.5,2.7,3.8,4l6.3-6.3  c5.3-5.3,12.3-8.2,19.7-8.2c16.1,0,32.2,0,48.3,0C668.9,1015.3,669,1013.5,669,1011.6z"/>
        <path id="line1_13" fill="#D14A43" d="M587.5,1026.6c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  S592,1026.6,587.5,1026.6z M591.7,1034.8c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C589.9,1030.5,591.8,1032.6,591.7,1034.8z"/>
        <path id="line1_11-line1_12" fill="#D14A43" d="M747.9,997.7c-1.4,1.4-2.7,2.7-4.1,4.1c-7.7,7.7-12.3,9.6-23.8,9.8h-45.7v5.5h46  c12.3-0.2,18.3-2.6,26.5-10.6c1.6-1.7,3.3-3.3,4.9-5C750.5,1000.3,749.2,999,747.9,997.7z"/>
        <path id="line1_12" fill="#D14A43" d="M668.8,1011.6c0,3.7,0,7.3,0,11h5.5c0-3.7,0-7.3,0-11C672.5,1011.6,670.6,1011.6,668.8,1011.6  z"/>
        <path id="line1_10-line1_11" fill="#D14A43" d="M762.7,990.5c27.7-27.7,55.5-55.5,83.2-83.2c-1.3-1.3-2.6-2.6-3.9-3.9  c-27.7,27.7-55.5,55.5-83.2,83.2C760.1,987.9,761.4,989.2,762.7,990.5z"/>
        <path id="line1_11" fill="#D14A43" d="M759.4,987c-3.9-2.3-9-0.9-11.3,3s-0.9,9,3,11.3s9,0.9,11.3-3  C764.7,994.3,763.3,989.2,759.4,987z M758.9,996.2c-1.1,1.9-3.7,2.6-5.7,1.5c-2-1.2-2.5-3.7-1.5-5.6c1.1-1.9,3.6-2.7,5.6-1.6  C759.4,991.6,760,994.3,758.9,996.2z"/>
        <path id="line1_9-line1_10" fill="#D14A43" d="M856.8,896.4c18.4-18.4,36.8-36.8,55.2-55.2c-1.3-1.3-2.6-2.6-3.9-3.9  c-18.4,18.4-36.8,36.8-55.2,55.2C854.2,893.8,855.5,895.1,856.8,896.4z"/>
        <path id="line1_10" fill="#D14A43" d="M849.4,891.7c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  S853.9,891.7,849.4,891.7z M853.6,900c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C851.8,895.7,853.7,897.8,853.6,900z"/>
        <rect id="line1_8-line1_9" x="910.7" y="801" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -291.3598 904.0798)" fill="#D14A43" width="69.9" height="5.5"/>
        <path id="line1_9" fill="#D14A43" d="M915.6,825.6c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  C923.9,829.3,920.1,825.6,915.6,825.6z M919.9,833.9c0,2.3-1.9,4.2-4.3,4.2c-2.4,0-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C918,829.6,919.9,831.6,919.9,833.9z"/>
        <path id="line1_7-line1_8" fill="#D14A43" d="M983.1,770.2c9.2-9.2,18.4-18.4,27.7-27.7c-1.3-1.3-2.6-2.6-3.9-3.9  c-9.2,9.2-18.4,18.4-27.7,27.7C980.5,767.6,981.8,768.9,983.1,770.2z"/>
        <path id="line1_8" fill="#D14A43" d="M975.6,765.4c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  C983.9,769.1,980.2,765.4,975.6,765.4z M979.9,773.7c0,2.3-1.9,4.2-4.3,4.2c-2.4,0-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C978.1,769.4,979.9,771.5,979.9,773.7z"/>
        <path id="line1_6-line1_7" fill="#D14A43" d="M1014.6,738.6c11.7-11.7,23.4-23.4,35.2-35.2c-1.3-1.3-2.6-2.6-3.9-3.9  c-11.7,11.7-23.5,23.5-35.2,35.2C1012,736,1013.3,737.3,1014.6,738.6z"/>
        <path id="line1_7" fill="#D14A43" d="M1006.9,738.6c2.6,2.6,5.2,5.2,7.8,7.8l3.9-3.9c-2.6-2.6-5.2-5.2-7.8-7.8  C1009.5,736,1008.2,737.3,1006.9,738.6z"/>
        <path id="line1_5-line1_6" fill="#D14A43" d="M1060.8,692.5c15.2-15.2,30.4-30.4,45.5-45.5c-1.3-1.3-2.6-2.6-3.9-3.9  c-15.2,15.2-30.3,30.3-45.5,45.5C1058.2,689.9,1059.5,691.2,1060.8,692.5z"/>
        <path id="line1_6" fill="#D14A43" d="M1053.3,687.8c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  S1057.8,687.8,1053.3,687.8z M1057.6,696c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C1055.7,691.7,1057.6,693.8,1057.6,696z"/>
        <path id="line1_4-line1_5" fill="#D14A43" d="M1110.2,643.1c10.9-10.9,21.7-21.7,32.6-32.6c-1.3-1.3-2.6-2.6-3.9-3.9  c-10.9,10.9-21.7,21.7-32.6,32.6C1107.6,640.5,1108.9,641.8,1110.2,643.1z"/>
        <path id="line1_5" fill="#D14A43" d="M1102.4,643.1c2.6,2.6,5.2,5.2,7.8,7.8l3.9-3.9c-2.6-2.6-5.2-5.2-7.8-7.8  C1105,640.5,1103.7,641.8,1102.4,643.1z"/>
        <path id="line1_3-line1_4" fill="#D14A43" d="M1153.8,599.5c11.7-11.7,23.3-23.3,35-35c-1.3-1.3-2.6-2.6-3.9-3.9  c-11.7,11.7-23.3,23.3-35,35C1151.2,596.9,1152.5,598.2,1153.8,599.5z"/>
        <path id="line1_2-line1_3" fill="#D14A43" d="M1192.6,560.6c8-8,16-16,24.1-24.1l-3.9-3.9c-8,8-16,16-24.1,24.1  C1190,558,1191.3,559.3,1192.6,560.6z"/>
        <path id="line1_3" fill="#D14A43" d="M1192.6,560.6c-1.3-1.3-2.6-2.6-3.9-3.9c-1.3,1.3-2.6,2.6-3.9,3.9c2.6,2.6,5.2,5.2,7.8,7.8  l3.9-3.9C1195.2,563.2,1193.9,561.9,1192.6,560.6"/>
        <path id="line1_1-line1_2" fill="#D14A43" d="M1241.7,493.1c-1.8,0-3.7,0-5.5,0c0,3.6-0.5,10-3.9,17.1c-2.7,5.6-6.1,9.4-8.5,11.7  c1.3,1.3,2.6,2.6,3.9,3.9c2.7-2.6,6.7-7.1,9.7-13.6C1241.1,504.3,1241.7,497.1,1241.7,493.1z"/>
        <path id="line1_2" fill="#D14A43" d="M1220.2,520.9c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  S1224.8,520.9,1220.2,520.9z M1224.5,529.1c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C1222.7,524.8,1224.5,526.9,1224.5,529.1z"/>
        <path id="line1_1" fill="#D14A43" d="M1239,477.1c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2S1243.5,477.1,1239,477.1z   M1243.3,485.3c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3C1241.4,481,1243.3,483.1,1243.3,485.3z"/>
        <path id="line-1-2" fill="#D14A43" d="M458.8,1764.9c-4.8,0-8.8-3.9-8.8-8.8s3.9-8.8,8.8-8.8c4.8,0,8.8,3.9,8.8,8.8  S463.7,1764.9,458.8,1764.9z M456.3,1751.7v1.5h1.7v6h-1.9v1.5h5l0.5-1.5h-2v-7.5H456.3L456.3,1751.7z"/>
        <path id="line-1-1" fill="#D14A43" d="M1261.4,493.9c-4.8,0-8.8-3.9-8.8-8.8c0-4.8,3.9-8.8,8.8-8.8s8.8,3.9,8.8,8.8  C1270,489.9,1266.2,493.9,1261.4,493.9z M1258.9,480.6v1.5h1.7v6h-1.9v1.5h5l0.5-1.5h-2v-7.5H1258.9L1258.9,480.6z"/>
        <rect id="line2_1-line2_2" x="466.4" y="163.2" fill="#4BAF4F" width="5.5" height="66.2"/>
        <rect id="line2_2-line2_3" x="466.4" y="234.9" fill="#4BAF4F" width="5.5" height="66.2"/>
        <rect id="line2_3-line2_4" x="466.4" y="306.6" fill="#4BAF4F" width="5.5" height="66.2"/>
        <rect id="line2_4-line2_5" x="466.4" y="378.3" fill="#4BAF4F" width="5.5" height="66.2"/>
        <rect id="line2_6-line2_7" x="492.4" y="549.2" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -255.6536 516.0869)" fill="#4BAF4F" width="5.5" height="34.9"/>
        <path id="line2_7-line2_8" fill="#4BAF4F" d="M557.5,633c-16-16-32.1-32.1-48.1-48.1l3.9-3.9c16.1,16.1,32.2,32.2,48.3,48.3  C560.2,630.6,558.9,631.8,557.5,633z"/>
        <rect id="line7_1-line7_2" x="324.7" y="163.2" fill="#943F90" width="5.5" height="99.3"/>
        <rect id="line7_2-line7_3" x="324.7" y="268" fill="#943F90" width="5.5" height="121.2"/>
        <rect id="line7_3-line7_4" x="324.7" y="402.4" fill="#943F90" width="5.5" height="38.4"/>
        <rect id="line7_4-line7_5" x="324.7" y="446.3" fill="#943F90" width="5.5" height="82.5"/>
        <rect id="line3_1-line3_2" x="182.9" y="163.2" fill="#0072BA" width="5.5" height="99.3"/>
        <rect id="line3_2-line3_3" x="182.9" y="268" fill="#0072BA" width="5.5" height="79.8"/>
        <rect id="line3_3-line3_4" x="182.9" y="362.7" fill="#0072BA" width="5.5" height="88.3"/>
        <rect id="line3_4-line3_5" x="182.9" y="454.4" fill="#0072BA" width="5.5" height="105.6"/>
        <rect id="line3_5-line3_6" x="182.9" y="561.1" fill="#0072BA" width="5.5" height="71.7"/>
        <rect id="line3_6-line3_7" x="182.9" y="634.3" fill="#0072BA" width="5.5" height="56.9"/>
        <path id="line8A_7-line8A_8" fill="#FFCD1E" d="M324.7,1193.3c0-15.8,0-31.6,0-47.4h5.5c0,15.8,0,31.6,0,47.4  C328.4,1193.3,326.6,1193.3,324.7,1193.3z"/>
        <path id="line8A_8-line8A_9" fill="#FFCD1E" d="M324.7,1246.2c0-15.8,0-31.6,0-47.4h5.5c0,15.8,0,31.6,0,47.4  C328.4,1246.2,326.6,1246.2,324.7,1246.2z"/>
        <path id="line8A_11-line8A_12" fill="#FFCD1E" d="M324.7,1419.3c0-14.3,0-28.5,0-42.8h5.5c0,14.3,0,28.5,0,42.8  C328.4,1419.3,326.6,1419.3,324.7,1419.3z"/>
        <path id="line8A_12-line8A_13" fill="#FFCD1E" d="M324.7,1469.7c0-14.9,0-29.9,0-44.8h5.5c0,14.9,0,29.9,0,44.8  C328.4,1469.7,326.6,1469.7,324.7,1469.7z"/>
        <path id="line8A_13-line8A_14" fill="#FFCD1E" d="M324.7,1516.1c0-13.7,0-27.3,0-40.9h5.5c0,13.7,0,27.3,0,40.9  C328.4,1516.1,326.6,1516.1,324.7,1516.1z"/>
        <path id="line8A_14-line8A_15" fill="#FFCD1E" d="M324.7,1564.3c0-14.2,0-28.5,0-42.8h5.5c0,14.2,0,28.5,0,42.8  C328.4,1564.3,326.6,1564.3,324.7,1564.3z"/>
        <path id="line2_16-line2_17" fill="#4BAF4F" d="M941.6,1406.9c0-14.9,0-29.7,0-44.6c-1.8,0-3.7,0-5.5,0c0,14.9,0,29.7,0,44.6  C938,1406.9,939.8,1406.9,941.6,1406.9z"/>
        <rect id="white_line1_2-line14_2" x="1220.2" y="528.2" fill="#FFFFFF" width="22.8" height="2"/>
        <rect id="white_line1_4-line11_29" x="1124.6" y="602.1" fill="#FFFFFF" width="20.9" height="2"/>
        <linearGradient id="line1_6-lineD2_17_00000029736786914492173740000016506741151401084043_" gradientUnits="userSpaceOnUse" x1="34000.0391" y1="-14177.3545" x2="33989.0898" y2="-14175.4521" gradientTransform="matrix(0.2593 -1.5026 1.492 0.2575 13389.7031 55409.2227)">
            <stop offset="0" style="stop-color:#E94282"/>
            <stop offset="1" style="stop-color:#D14A43"/>
        </linearGradient>
        <path id="line1_6-lineD2_17" fill="url(#line1_6-lineD2_17_00000029736786914492173740000016506741151401084043_)" d="M1054.8,679.1  c0,0.8-0.7,1.4-1.5,1.4s-1.5-0.6-1.5-1.4c0-0.8,0.6-1.5,1.5-1.5S1054.8,678.3,1054.8,679.1z M1054.8,684.1c0,0.8-0.7,1.4-1.5,1.4  s-1.5-0.6-1.5-1.4c0-0.8,0.6-1.5,1.5-1.5C1054.2,682.5,1054.8,683.3,1054.8,684.1z M1054.8,674.2c0,0.8-0.7,1.4-1.5,1.4  s-1.5-0.6-1.5-1.4c0-0.8,0.6-1.5,1.5-1.5C1054.2,672.6,1054.8,673.4,1054.8,674.2z"/>
        <linearGradient id="line1_6-line5_1_00000158742278174370192720000010484464062830649234_" gradientUnits="userSpaceOnUse" x1="101259.2031" y1="-54010.3398" x2="101269.1875" y2="-54010.3398" gradientTransform="matrix(0 -0.5831 0.5831 0 32546.7793 59753.5312)">
            <stop offset="0.2068" style="stop-color:#925233"/>
            <stop offset="0.8728" style="stop-color:#D14A43"/>
        </linearGradient>
        <rect id="line1_6-line5_1" x="1050.1" y="703.3" fill="url(#line1_6-line5_1_00000158742278174370192720000010484464062830649234_)" width="6.5" height="5.9"/>
        <rect id="white_line1_6-line5_1" x="1052.3" y="695" fill="#FFFFFF" width="2" height="20.9"/>
        <linearGradient id="line1_8-line10_9_00000096768589331067005660000005766371493530434474_" gradientUnits="userSpaceOnUse" x1="22282.9473" y1="30319.5234" x2="22303.7969" y2="30364.4023" gradientTransform="matrix(0.7071 -0.7071 -0.7071 -0.7071 6674.3428 37991.9219)">
            <stop offset="0.7127" style="stop-color:#D14A43"/>
            <stop offset="0.8717" style="stop-color:#BED12E"/>
        </linearGradient>
        <path id="line1_8-line10_9" fill="url(#line1_8-line10_9_00000096768589331067005660000005766371493530434474_)" d="M976.6,765.5  c1.7,0.9,3.4,1.8,5.1,2.6c0.4-1.6,1.3-6.1-0.8-10.8c-1.1-2.4-2.5-4.2-3.6-5.2c-1,1.7-1.9,3.3-2.9,5c0.6,0.7,1.5,2.1,2,4  S976.8,764.6,976.6,765.5z"/>
        <path id="white_line1_8-line10_9" fill="#FFFFFF" d="M978.2,763.8c0,2.2-0.6,4.2-1.5,6c0.7,0.5,1.4,0.9,2.1,1.4c1.2-2.2,2-4.7,2-7.4  c0-5.6-3.1-10.5-7.7-13.1c-0.3,0.8-0.6,1.6-0.8,2.4C975.8,755.4,978.2,759.3,978.2,763.8z"/>
        <linearGradient id="line1_8-line6_10_00000013176826154386254980000011594047083247446701_" gradientUnits="userSpaceOnUse" x1="22279.7539" y1="30349.3965" x2="22272.8398" y2="30360.3457" gradientTransform="matrix(0.7071 -0.7071 -0.7071 -0.7071 6674.3428 37991.9219)">
            <stop offset="0.1841" style="stop-color:#D14A43"/>
            <stop offset="0.7118" style="stop-color:#EF7E24"/>
        </linearGradient>
        <path id="line1_8-line6_10" fill="url(#line1_8-line6_10_00000013176826154386254980000011594047083247446701_)" d="M967.4,774.7  c-0.9,0.1-2.4,0.2-4.2-0.2c-2-0.5-3.5-1.5-4.2-2.1c-1.6,1-3.3,1.9-4.9,2.9c1.1,1.1,3.1,2.8,6,3.9c4.5,1.7,8.5,0.8,10,0.4  C969.2,778.1,968.3,776.4,967.4,774.7z"/>
        <path id="white_line1_8-line6_10" fill="#FFFFFF" d="M971.9,774.7c-1.8,1-3.9,1.7-6.2,1.7c-4.5,0-8.4-2.4-10.6-5.9  c-0.8,0.3-1.6,0.6-2.3,1c2.6,4.5,7.4,7.5,12.9,7.5c2.7,0,5.2-0.7,7.4-2C972.7,776.1,972.3,775.4,971.9,774.7z"/>
        <linearGradient id="line6_10-line10_9_00000054247298374650918720000007973226079017809314_" gradientUnits="userSpaceOnUse" x1="22273.623" y1="30370.3301" x2="22302.2852" y2="30378.0098" gradientTransform="matrix(0.7071 -0.7071 -0.7071 -0.7071 6674.3428 37991.9219)">
            <stop offset="0.3417" style="stop-color:#EF7E24"/>
            <stop offset="0.5753" style="stop-color:#BED12E"/>
        </linearGradient>
        <path id="line6_10-line10_9" fill="url(#line6_10-line10_9_00000054247298374650918720000007973226079017809314_)" d="M955.7,759.6  c0.3-0.8,1-2.2,2.3-3.6c1.3-1.3,2.7-2,3.6-2.4c0-0.9-0.1-1.9-0.1-2.8c0-1,0-1.9,0-2.9c-0.7,0.2-1.6,0.5-2.5,0.9  c-0.6,0.3-1.7,0.8-2.9,1.6c-0.3,0.2-1.1,0.8-2,1.7c-2.4,2.4-3.6,5.3-4.2,7.3C951.9,759.5,953.8,759.6,955.7,759.6z"/>
        <path id="white_line6_10-line10_9" fill="#FFFFFF" d="M965.4,751.4c0.1-0.8,0.3-1.7,0.4-2.5l0,0c-8.2,0-15,6.8-15,15l0,0  c0.8-0.1,1.7-0.3,2.5-0.4C953.5,756.9,958.8,751.5,965.4,751.4z"/>
        <linearGradient id="line1_9-line7_12_00000170981425421761089400000008933348967333094574_" gradientUnits="userSpaceOnUse" x1="101058.2422" y1="-54246.6641" x2="101068.2266" y2="-54246.6641" gradientTransform="matrix(0 -0.5831 0.5831 0 32546.7793 59753.5312)">
            <stop offset="0.2068" style="stop-color:#D14A43"/>
            <stop offset="0.8728" style="stop-color:#943F90"/>
        </linearGradient>
        <rect id="line1_9-line7_12" x="912.3" y="820.4" fill="url(#line1_9-line7_12_00000170981425421761089400000008933348967333094574_)" width="6.5" height="5.9"/>
        <rect id="white_line1_9-line7_12" x="914.6" y="811.7" fill="#FFFFFF" width="2" height="20.9"/>
        <linearGradient id="line1_10-line2_12_00000176752128594108807600000011468060611918622653_" gradientUnits="userSpaceOnUse" x1="100909.0469" y1="-54360.1953" x2="100919.0234" y2="-54360.1953" gradientTransform="matrix(0 -0.5831 0.5831 0 32546.7793 59753.5312)">
            <stop offset="0.2068" style="stop-color:#4BAF4F"/>
            <stop offset="0.8728" style="stop-color:#D14A43"/>
        </linearGradient>
        <rect id="line1_10-line2_12" x="846.1" y="907.4" fill="url(#line1_10-line2_12_00000176752128594108807600000011468060611918622653_)" width="6.5" height="5.9"/>
        <rect id="white_line1_10-line2_12" x="848.3" y="899.1" fill="#FFFFFF" width="2" height="20.9"/>
        <linearGradient id="line2_12-line3_14_00000021817050679141402350000004262264964528473511_" gradientUnits="userSpaceOnUse" x1="100873.2031" y1="-54360.1953" x2="100883.1797" y2="-54360.1953" gradientTransform="matrix(0 -0.5831 0.5831 0 32546.7793 59753.5312)">
            <stop offset="0.2068" style="stop-color:#0572B9"/>
            <stop offset="0.8728" style="stop-color:#4BAF4F"/>
        </linearGradient>
        <rect id="line2_12-line3_14" x="846.1" y="928.3" fill="url(#line2_12-line3_14_00000021817050679141402350000004262264964528473511_)" width="6.5" height="5.9"/>
        <rect id="white_line2_12-line3_14" x="848.3" y="920" fill="#FFFFFF" width="2" height="20.9"/>
        <linearGradient id="line1_11-line3_13_00000175309597107259448340000011000859371355295626_" gradientUnits="userSpaceOnUse" x1="-8470.2861" y1="13004.3086" x2="-8409.3438" y2="12898.752" gradientTransform="matrix(0.866 0.5 0.5 -0.866 1599.2433 16366.7822)">
            <stop offset="0.6889" style="stop-color:#0572B9"/>
            <stop offset="0.8567" style="stop-color:#D14A43"/>
        </linearGradient>
        <path id="line1_11-line3_13" fill="url(#line1_11-line3_13_00000175309597107259448340000011000859371355295626_)" d="M763,944.2  c-1.1,1.5-2.2,3-3.4,4.4c8.4,8.6,10.6,22.2,4.3,33.1c-1.3,2.2-2.9,4.2-4.7,5.9c1.2,1.4,2.4,2.8,3.6,4.2c2.2-2.1,4.2-4.5,5.8-7.3  C776.4,971.1,773.6,954.5,763,944.2z"/>
        <path id="white_line1_11-line3_13" fill="#FFFFFF" d="M759.1,942.8c-0.4,0.7-0.9,1.4-1.3,2.1c6.9,5.3,11.4,13.7,11.4,23  s-4.5,17.6-11.4,23c0.4,0.7,0.9,1.5,1.3,2.2c7.6-5.8,12.6-14.9,12.6-25.1C771.7,957.7,766.7,948.6,759.1,942.8z"/>
        <linearGradient id="line1_11-line4_1_00000183207830145786115140000007073957756171015081_" gradientUnits="userSpaceOnUse" x1="21594.0625" y1="30106.0898" x2="21594.0625" y2="30241.2168" gradientTransform="matrix(-0.866 0.5 -0.5 -0.866 34561.2383 16366.7822)">
            <stop offset="0.9015" style="stop-color:#D14A43"/>
            <stop offset="0.9741" style="stop-color:#24BCEF"/>
        </linearGradient>
        <path id="line1_11-line4_1" fill="url(#line1_11-line4_1_00000183207830145786115140000007073957756171015081_)" d="M746.7,981.7  c-1.2-2.1-2.1-4.3-2.7-6.5c-1.8,0.2-3.7,0.5-5.5,0.7c0.7,2.9,1.8,5.8,3.4,8.6c1.6,2.8,3.6,5.2,5.8,7.3c1.2-1.4,2.4-2.8,3.6-4.2  C749.5,985.9,748,983.9,746.7,981.7z"/>
        <path id="white_line1_11-line4_1" fill="#FFFFFF" d="M741.7,971.7c-0.8,0.1-1.7,0.1-2.5,0.2c1.1,8.6,5.7,16.1,12.3,21.1  c0.4-0.7,0.9-1.4,1.3-2.2C746.9,986.3,742.8,979.5,741.7,971.7z"/>
        <linearGradient id="line3_13-line4_1_00000119118891793385861210000000636652947177455004_" gradientUnits="userSpaceOnUse" x1="21663.8965" y1="30234.7637" x2="21539.418" y2="30268.1172" gradientTransform="matrix(-0.866 0.5 -0.5 -0.866 34561.2383 16366.7822)">
            <stop offset="0.6428" style="stop-color:#24BCEF"/>
            <stop offset="0.7282" style="stop-color:#0572B9"/>
        </linearGradient>
        <path id="line3_13-line4_1" fill="url(#line3_13-line4_1_00000119118891793385861210000000636652947177455004_)" d="M747.6,944.2  c-4.5,4.4-7.5,9.9-9,15.8c1.8,0.3,3.7,0.5,5.5,0.8c1.2-4.5,3.5-8.7,6.9-12.1C749.8,947.2,748.7,945.7,747.6,944.2z"/>
        <path id="white_line3_13-line4_1" fill="#FFFFFF" d="M741.7,964.2c1-7.8,5.2-14.6,11.1-19.2c-0.4-0.7-0.9-1.4-1.3-2.1  c-6.6,5-11.2,12.6-12.3,21.2C740.1,964.2,740.9,964.2,741.7,964.2z"/>
        <linearGradient id="line1_11-line9_12_00000004509187378812167130000017922280919009221013_" gradientUnits="userSpaceOnUse" x1="-8476.7305" y1="12880.3125" x2="-8410.7305" y2="12880.3125" gradientTransform="matrix(0.866 0.5 0.5 -0.866 1599.2433 16366.7822)">
            <stop offset="0.35" style="stop-color:#ADACAC"/>
            <stop offset="0.6309" style="stop-color:#D14A43"/>
        </linearGradient>
        <path id="line1_11-line9_12" fill="url(#line1_11-line9_12_00000004509187378812167130000017922280919009221013_)" d="M747.3,994.4  c-6.8,1.8-14.3,1.1-20.8-2.7c-6.5-3.7-10.8-9.8-12.7-16.6c-1.8,0.3-3.6,0.5-5.5,0.8c2.1,8.4,7.4,15.9,15.4,20.5s17.3,5.4,25.7,3  C748.7,997.8,748,996.1,747.3,994.4z"/>
        <path id="white_line1_11-line9_12" fill="#FFFFFF" d="M751.5,994.6c-3.5,1.5-7.3,2.3-11.4,2.3c-14.7,0-26.9-11.1-28.8-25.3  c-0.8,0-1.7,0.1-2.5,0.1c1.9,15.5,15.3,27.6,31.3,27.6c4.4,0,8.6-0.9,12.4-2.6C752.2,996,751.9,995.3,751.5,994.6z"/>
        <linearGradient id="line3_13-line9_12_00000023274829189756510940000006995741761394885770_" gradientUnits="userSpaceOnUse" x1="-8470.7041" y1="12895.9863" x2="-8440.3115" y2="13009.4141" gradientTransform="matrix(0.866 0.5 0.5 -0.866 1599.2433 16366.7822)">
            <stop offset="0.1356" style="stop-color:#ADACAC"/>
            <stop offset="0.298" style="stop-color:#0572B9"/>
        </linearGradient>
        <path id="line3_13-line9_12" fill="url(#line3_13-line9_12_00000023274829189756510940000006995741761394885770_)" d="M711.6,951.5  c-1.6,2.8-2.7,5.7-3.4,8.6c1.8,0.2,3.7,0.5,5.5,0.7c0.6-2.2,1.5-4.4,2.7-6.5c6.3-10.9,19.1-15.8,30.8-12.8c0.7-1.7,1.4-3.4,2.1-5.2  C735,932.3,719.3,938.2,711.6,951.5z"/>
        <path id="white_line3_13-line9_12" fill="#FFFFFF" d="M711.4,964.2c1.9-14.2,14.1-25.2,28.8-25.2c4,0,7.9,0.8,11.4,2.4  c0.3-0.8,0.7-1.5,1-2.3c-3.8-1.6-8-2.5-12.3-2.5c-16,0-29.3,12.1-31.2,27.6C709.9,964.2,710.7,964.2,711.4,964.2z"/>
        <linearGradient id="line1_13-line5_7_00000093169857739713677670000010619604266264276907_" gradientUnits="userSpaceOnUse" x1="90904.0547" y1="14373.9004" x2="90917.5859" y2="14373.9004" gradientTransform="matrix(-0.5831 0 0 -0.5831 53609.3164 9416.1719)">
            <stop offset="0.2068" style="stop-color:#925233"/>
            <stop offset="0.8728" style="stop-color:#D14A43"/>
        </linearGradient>
        <rect id="line1_13-line5_7" x="594.9" y="1031.5" fill="url(#line1_13-line5_7_00000093169857739713677670000010619604266264276907_)" width="8" height="6.5"/>
        <rect id="white_line1_13-line5_7" x="587.5" y="1033.8" fill="#FFFFFF" width="22.8" height="2"/>
        <linearGradient id="line1_15-line14_16_00000099627681142147257110000011732877260707876243_" gradientUnits="userSpaceOnUse" x1="33631.3281" y1="-14492.5615" x2="33620.3828" y2="-14490.6592" gradientTransform="matrix(0.2593 -1.5026 1.492 0.2575 13389.7031 55409.2227)">
            <stop offset="0" style="stop-color:#D14A43"/>
            <stop offset="1" style="stop-color:#D14A43"/>
        </linearGradient>
        <path id="line1_15-line14_16" fill="url(#line1_15-line14_16_00000099627681142147257110000011732877260707876243_)" d="M488.9,1152  c0,0.8-0.7,1.4-1.5,1.4s-1.5-0.6-1.5-1.4s0.6-1.5,1.5-1.5C488.3,1150.4,489,1151.2,488.9,1152z M488.9,1157c0,0.8-0.7,1.4-1.5,1.4  s-1.5-0.6-1.5-1.4s0.6-1.5,1.5-1.5C488.3,1155.4,489,1156.1,488.9,1157z M488.9,1147c0,0.8-0.7,1.4-1.5,1.4s-1.5-0.6-1.5-1.4  s0.6-1.5,1.5-1.5S489,1146.2,488.9,1147z"/>
        <linearGradient id="line2_5-line14_24_00000178892715862074662990000009370259981495910551_" gradientUnits="userSpaceOnUse" x1="40263.6875" y1="3848.8491" x2="40283.3477" y2="3845.4329" gradientTransform="matrix(-1.1716 -0.9759 0.969 -1.1634 43944.1367 44241.0703)">
            <stop offset="0.2272" style="stop-color:#D14A43"/>
            <stop offset="1" style="stop-color:#4BAF4F"/>
        </linearGradient>
        <path id="line2_5-line14_24" fill="url(#line2_5-line14_24_00000178892715862074662990000009370259981495910551_)" d="M496,465.5  c0.7,0.4,1,1.3,0.6,2.1c-0.4,0.7-1.4,1-2.1,0.5c-0.7-0.4-0.9-1.3-0.5-2S495.3,465.1,496,465.5z M491.6,463c0.7,0.4,1,1.3,0.6,2.1  c-0.4,0.7-1.4,1-2.1,0.5c-0.7-0.4-0.9-1.3-0.5-2S490.9,462.6,491.6,463z M487.3,460.5c0.7,0.4,1,1.3,0.6,2.1c-0.4,0.7-1.4,1-2.1,0.5  c-0.7-0.4-0.9-1.3-0.5-2C485.7,460.4,486.6,460.1,487.3,460.5z M483,458c0.7,0.4,1,1.3,0.6,2.1c-0.4,0.7-1.4,1-2.1,0.5  c-0.7-0.4-0.9-1.3-0.5-2S482.3,457.6,483,458z M478.7,455.5c0.7,0.4,1,1.3,0.6,2.1c-0.4,0.7-1.4,1-2.1,0.5c-0.7-0.4-0.9-1.3-0.5-2  S478,455.1,478.7,455.5z"/>
        <linearGradient id="line2_9-line5_10_00000053536658112528160000000000094944067524806844_" gradientUnits="userSpaceOnUse" x1="101239.7578" y1="-54726.6836" x2="101250.3047" y2="-54726.6836" gradientTransform="matrix(0 -0.5831 0.5831 0 32546.7793 59753.5312)">
            <stop offset="0.2068" style="stop-color:#925233"/>
            <stop offset="0.8728" style="stop-color:#4BAF4F"/>
        </linearGradient>
        <rect id="line2_9-line5_10" x="632.4" y="714.3" fill="url(#line2_9-line5_10_00000053536658112528160000000000094944067524806844_)" width="6.5" height="6.2"/>
        <rect id="white_line2_9-line5_10" x="634.6" y="706.2" fill="#FFFFFF" width="2" height="20.9"/>
        <linearGradient id="line2_11-line7_11_00000127006632540968909330000009424479708720795054_" gradientUnits="userSpaceOnUse" x1="35481.1758" y1="-21113.9297" x2="35502.1445" y2="-21068.791" gradientTransform="matrix(-1 0 0 1 36254.6172 21893.3652)">
            <stop offset="0.7127" style="stop-color:#943F90"/>
            <stop offset="0.8717" style="stop-color:#4BAF4F"/>
        </linearGradient>
        <path id="line2_11-line7_11" fill="url(#line2_11-line7_11_00000127006632540968909330000009424479708720795054_)" d="M762,812.2  c-0.6-1.8-1.1-3.6-1.7-5.4c-0.7,0.5-2,1.3-3.4,2.6c-2.5,2.4-3.5,5-3.7,5.6c-1,2.6-1.2,4.9-1.1,6.3c0.9-0.3,1.8-0.6,2.8-0.8  s1.9-0.4,2.8-0.5c0.1-1,0.4-2.6,1.4-4.3C760.1,813.9,761.3,812.8,762,812.2z"/>
        <path id="white_line2_11-line7_11" fill="#FFFFFF" d="M765,809c-0.1-0.8-0.2-1.7-0.3-2.5c-6.4,1.7-11.2,7.6-11.2,14.5  c0,1.4,0.2,2.8,0.6,4.1c0.8-0.3,1.6-0.6,2.3-0.9c-0.3-1-0.4-2-0.4-3.1C756,815.3,759.8,810.5,765,809z"/>
        <linearGradient id="line7_11-line9_11_00000093856958724127291870000015532709589143307651_" gradientUnits="userSpaceOnUse" x1="35477.6016" y1="-21084.8086" x2="35471.5508" y2="-21072.5215" gradientTransform="matrix(-1 0 0 1 36254.6172 21893.3652)">
            <stop offset="0.1758" style="stop-color:#943F90"/>
            <stop offset="0.8105" style="stop-color:#ADACAC"/>
        </linearGradient>
        <path id="line7_11-line9_11" fill="url(#line7_11-line9_11_00000093856958724127291870000015532709589143307651_)" d="M775,812.2  c0.7,0.5,1.9,1.5,2.9,3.1c1.2,1.9,1.4,3.7,1.5,4.6c0.8,0.1,1.7,0.2,2.8,0.5s2,0.7,2.8,1c0-0.9,0-2.1-0.3-3.4c0,0-0.4-2.1-1.2-4  c-2.1-4.6-5.8-6.9-7.2-7.6C775.8,808.5,775.4,810.3,775,812.2z"/>
        <path id="white_line7_11-line9_11" fill="#FFFFFF" d="M781,821c0,1.1-0.2,2.1-0.4,3.1c0.8,0.3,1.5,0.7,2.3,1  c0.4-1.3,0.6-2.7,0.6-4.1c0-6.9-4.8-12.8-11.2-14.5c-0.1,0.8-0.2,1.7-0.3,2.5C777.1,810.5,781,815.3,781,821z"/>
        <linearGradient id="line2_11-line9_11_00000079471831637320051240000013267365582854606747_" gradientUnits="userSpaceOnUse" x1="35471.8594" y1="-21063.0059" x2="35500.5312" y2="-21055.3242" gradientTransform="matrix(-1 0 0 1 36254.6172 21893.3652)">
            <stop offset="0.3417" style="stop-color:#ADACAC"/>
            <stop offset="0.3459" style="stop-color:#ABACAA"/>
            <stop offset="0.577" style="stop-color:#4BAF4F"/>
        </linearGradient>
        <path id="line2_11-line9_11" fill="url(#line2_11-line9_11_00000079471831637320051240000013267365582854606747_)" d="M772.6,831.2  c-0.8,0.4-2.3,0.9-4.2,0.9s-3.4-0.5-4.2-0.8c-1.3,1.4-2.6,2.8-3.9,4.2c1.2,0.7,3.1,1.6,5.5,2c0.3,0.1,1.3,0.2,2.6,0.2  c3.4,0,6.3-1.2,8.2-2.2c-0.6-0.7-1.3-1.4-2-2.2C773.9,832.6,773.3,831.9,772.6,831.2z"/>
        <path id="white_line2_11-line9_11" fill="#FFFFFF" d="M776.9,830.1c-2.2,2.1-5.2,3.3-8.4,3.3c-3.3,0-6.2-1.3-8.5-3.4  c-0.6,0.6-1.3,1.1-1.9,1.7c2.7,2.6,6.3,4.2,10.3,4.2s7.7-1.6,10.4-4.2C778.2,831.2,777.5,830.7,776.9,830.1z"/>
        <linearGradient id="line2_13-line6_12_00000080205277483139925500000002728085580737822897_" gradientUnits="userSpaceOnUse" x1="1000.4946" y1="24990.2168" x2="1031.1106" y2="24990.2168" gradientTransform="matrix(0.9998 -1.750000e-02 -1.750000e-02 -0.9998 348.3227 26033.291)">
            <stop offset="0.4106" style="stop-color:#EF7E24"/>
            <stop offset="0.6438" style="stop-color:#4BAF4F"/>
        </linearGradient>
        <path id="line2_13-line6_12" fill="url(#line2_13-line6_12_00000080205277483139925500000002728085580737822897_)" d="M922.8,1033.5  c0.8-0.4,2.3-0.9,4.2-0.9s3.4,0.4,4.2,0.8c1.3-1.4,2.6-2.8,3.9-4.2c-1.2-0.7-3.1-1.5-5.5-1.9c-0.4-0.1-1.4-0.2-2.6-0.2  c-3.4,0.1-6.3,1.3-8.1,2.3C920.2,1030.8,921.5,1032.2,922.8,1033.5z"/>
        <path id="white_line2_13-line6_12" fill="#FFFFFF" d="M937.3,1032.7c-2.7-2.5-6.3-4.1-10.2-4.1c-4.1,0-7.9,1.7-10.6,4.4  c0.7,0.5,1.4,1,2,1.5c2.2-2.1,5.2-3.4,8.5-3.4c3.2,0,6.1,1.3,8.4,3.3C936.1,1033.8,936.7,1033.3,937.3,1032.7z"/>
        <linearGradient id="line2_13-line8_8_00000035517017790037750180000012823947357442164881_" gradientUnits="userSpaceOnUse" x1="1011.2454" y1="24935.4258" x2="1032.0983" y2="24980.3164" gradientTransform="matrix(0.9998 -1.750000e-02 -1.750000e-02 -0.9998 348.3227 26033.291)">
            <stop offset="0.7157" style="stop-color:#FFCD1E"/>
            <stop offset="0.8582" style="stop-color:#4BAF4F"/>
        </linearGradient>
        <path id="line2_13-line8_8" fill="url(#line2_13-line8_8_00000035517017790037750180000012823947357442164881_)" d="M933.8,1052.3  c0.6,1.8,1.2,3.6,1.8,5.4c1.4-0.9,5.1-3.5,7-8.3c0.9-2.5,1.1-4.7,1-6.2c-1.8,0.5-3.7,1-5.5,1.5c-0.1,0.9-0.4,2.5-1.3,4.3  C935.7,1050.6,934.5,1051.7,933.8,1052.3z"/>
        <path id="white_line2_13-line8_8" fill="#FFFFFF" d="M939.2,1040.3c0.3,1.1,0.5,2.2,0.5,3.3c0,5.5-3.7,10.3-8.7,11.9  c0.1,0.8,0.2,1.7,0.4,2.5c6.3-1.8,10.9-7.6,10.9-14.4c0-1.5-0.2-2.9-0.6-4.3C940.7,1039.7,939.9,1040,939.2,1040.3z"/>
        <linearGradient id="line6_12-line8_8_00000000184117503493078120000016883244766501100479_" gradientUnits="userSpaceOnUse" x1="1007.9595" y1="24965.8691" x2="1001.5784" y2="24974.9824" gradientTransform="matrix(0.9998 -1.750000e-02 -1.750000e-02 -0.9998 348.3227 26033.291)">
            <stop offset="0.1719" style="stop-color:#FFCD1E"/>
            <stop offset="0.7854" style="stop-color:#EF7E24"/>
        </linearGradient>
        <path id="line6_12-line8_8" fill="url(#line6_12-line8_8_00000000184117503493078120000016883244766501100479_)" d="M920.8,1052.5  c-0.8-0.5-1.9-1.5-2.9-3.1c-1.1-1.8-1.5-3.4-1.6-4.4c-1.9-0.4-3.7-0.9-5.6-1.3c0,1.5,0.2,4.2,1.6,7c2.1,4.3,5.5,6.5,6.9,7.2  C919.8,1056.1,920.3,1054.3,920.8,1052.5z"/>
        <path id="white_line6_12-line8_8" fill="#FFFFFF" d="M914.6,1043.6c0-1,0.1-1.9,0.3-2.8c-0.8-0.3-1.6-0.7-2.3-1  c-0.3,1.2-0.5,2.5-0.5,3.8c0,7,4.9,13,11.5,14.6c0.1-0.8,0.2-1.7,0.4-2.5C918.6,1054.3,914.6,1049.4,914.6,1043.6z"/>
        <linearGradient id="line2_14-line5_4_00000116229709229066071190000016642398617336808372_" gradientUnits="userSpaceOnUse" x1="13998.8154" y1="-9551.8604" x2="13998.8154" y2="-9537.4131" gradientTransform="matrix(0.4776 0.3344 0.3344 -0.4776 -2548.4004 -8075.4609)">
            <stop offset="0" style="stop-color:#4BAF4F"/>
            <stop offset="0.8608" style="stop-color:#925233"/>
        </linearGradient>
        <polygon id="line2_14-line5_4" fill="url(#line2_14-line5_4_00000116229709229066071190000016642398617336808372_)" points="  940.8,1166 945.8,1159 950.6,1162.5 945.8,1169.4 "/>
        <path id="white_line2_14-line5_4" fill="#FFFFFF" d="M940.4,1170c0.6,0.4,1.1,0.8,1.6,1.2l9-12.9c-0.6-0.4-1-0.7-1.6-1.1L940.4,1170  z"/>
        <linearGradient id="line2_15-line14_11_00000031918828551266086820000014120798479009656722_" gradientUnits="userSpaceOnUse" x1="39668.7266" y1="3631.7415" x2="39705.4805" y2="3625.3547" gradientTransform="matrix(-1.1716 -0.9759 0.969 -1.1634 43949.5117 44241.9062)">
            <stop offset="0.2272" style="stop-color:#D14A43"/>
            <stop offset="1" style="stop-color:#4BAF4F"/>
        </linearGradient>
        <path id="line2_15-line14_11" fill="url(#line2_15-line14_11_00000031918828551266086820000014120798479009656722_)" d="M971.5,1290  c0.7,0.4,1,1.3,0.6,2.1c-0.4,0.7-1.4,1-2.1,0.5c-0.7-0.4-0.9-1.3-0.5-2S970.8,1289.6,971.5,1290z M980.2,1295c0.7,0.4,1,1.3,0.6,2.1  c-0.4,0.7-1.4,1-2.1,0.5c-0.7-0.4-0.9-1.3-0.5-2C978.6,1294.9,979.5,1294.6,980.2,1295z M975.8,1292.5c0.7,0.4,1,1.3,0.6,2.1  c-0.4,0.7-1.4,1-2.1,0.5c-0.7-0.4-0.9-1.3-0.5-2S975.1,1292.1,975.8,1292.5z M967.2,1287.5c0.7,0.4,1,1.3,0.6,2.1  c-0.4,0.7-1.4,1-2.1,0.5c-0.7-0.4-0.9-1.3-0.5-2C965.6,1287.4,966.5,1287.1,967.2,1287.5z M962.8,1285c0.7,0.4,1,1.3,0.6,2.1  c-0.4,0.7-1.4,1-2.1,0.5c-0.7-0.4-0.9-1.3-0.5-2S962.1,1284.6,962.8,1285z M958.5,1282.5c0.7,0.4,1,1.3,0.6,2.1  c-0.4,0.7-1.4,1-2.1,0.5c-0.7-0.4-0.9-1.3-0.5-2S957.8,1282.1,958.5,1282.5z M954.2,1280c0.7,0.4,1,1.3,0.6,2.1  c-0.4,0.7-1.4,1-2.1,0.5c-0.7-0.4-0.9-1.3-0.5-2C952.6,1279.9,953.5,1279.6,954.2,1280z M949.9,1277.5c0.7,0.4,1,1.3,0.6,2.1  c-0.4,0.7-1.4,1-2.1,0.5c-0.7-0.4-0.9-1.3-0.5-2C948.3,1277.4,949.2,1277.1,949.9,1277.5z M984.5,1297.5c0.7,0.4,1,1.3,0.6,2.1  c-0.4,0.7-1.4,1-2.1,0.5c-0.7-0.4-0.9-1.3-0.5-2S983.8,1297.1,984.5,1297.5z"/>
        <linearGradient id="line2_20-lineD2_29_00000028311929015926339930000003225354352618253741_" gradientUnits="userSpaceOnUse" x1="33429.8086" y1="-14106.7373" x2="33418.8633" y2="-14104.835" gradientTransform="matrix(0.2593 -1.5026 1.492 0.2575 13389.7031 55409.2227)">
            <stop offset="0" style="stop-color:#E94282"/>
            <stop offset="1" style="stop-color:#4BAF4F"/>
        </linearGradient>
        <path id="line2_20-lineD2_29" fill="url(#line2_20-lineD2_29_00000028311929015926339930000003225354352618253741_)" d="  M1012.3,1554.1c0,0.8-0.7,1.4-1.5,1.4s-1.5-0.6-1.5-1.4s0.6-1.5,1.5-1.5S1012.3,1553.3,1012.3,1554.1z M1012.3,1559.1  c0,0.8-0.7,1.4-1.5,1.4s-1.5-0.6-1.5-1.4s0.6-1.5,1.5-1.5C1011.7,1557.5,1012.3,1558.3,1012.3,1559.1z M1012.3,1549.2  c0,0.8-0.7,1.4-1.5,1.4s-1.5-0.6-1.5-1.4s0.6-1.5,1.5-1.5C1011.7,1547.6,1012.3,1548.4,1012.3,1549.2z"/>
        <linearGradient id="line2_23-line10_22_00000130609823556376914940000004199523243909675953_" gradientUnits="userSpaceOnUse" x1="91852.6953" y1="13373.4727" x2="91862.6797" y2="13373.4727" gradientTransform="matrix(-0.5831 0 0 -0.5831 54660.5625 9467.0225)">
            <stop offset="0.2068" style="stop-color:#4BAF4F"/>
            <stop offset="0.8728" style="stop-color:#BED12E"/>
        </linearGradient>
        <rect id="line2_23-line10_22" x="1095.2" y="1665.7" fill="url(#line2_23-line10_22_00000130609823556376914940000004199523243909675953_)" width="5.9" height="6.5"/>
        <rect id="white_line2_23-line10_22" x="1087.7" y="1668" fill="#FFFFFF" width="20.9" height="2"/>
        <linearGradient id="line3_3-lineD2_7_00000121239741981272825960000012449160960755282347_" gradientUnits="userSpaceOnUse" x1="-9256.9951" y1="12091.4229" x2="-9260.6387" y2="12083.7637" gradientTransform="matrix(0.2588 0.9659 -0.9659 0.2588 14268.4629 6158.2544)">
            <stop offset="0" style="stop-color:#0A72B9"/>
            <stop offset="1" style="stop-color:#E94282"/>
        </linearGradient>
        <path id="line3_3-lineD2_7" fill="url(#line3_3-lineD2_7_00000121239741981272825960000012449160960755282347_)" d="M198.7,344  c-0.6,0.6-1.5,0.5-2.1-0.1s-0.6-1.5-0.1-2.1c0.6-0.6,1.5-0.6,2.1,0S199.2,343.4,198.7,344z M195.1,347.5c-0.6,0.6-1.5,0.5-2.1-0.1  s-0.6-1.5-0.1-2.1c0.6-0.6,1.5-0.6,2.1,0C195.8,345.9,195.7,346.9,195.1,347.5z M202.1,340.5c-0.6,0.6-1.5,0.5-2.1-0.1  s-0.6-1.5-0.1-2.1c0.6-0.6,1.5-0.6,2.1,0C202.8,338.9,202.6,340,202.1,340.5z"/>
        <linearGradient id="line3_8-line4_13_1_00000006681454672976140270000014252588431538174377_" gradientUnits="userSpaceOnUse" x1="148.5144" y1="-21311.2422" x2="189.0283" y2="-21339.6094" gradientTransform="matrix(1 0 0 1 0.946 22176.2031)">
            <stop offset="0.3059" style="stop-color:#24BCEF"/>
            <stop offset="0.7601" style="stop-color:#0572B9"/>
        </linearGradient>
        <path id="line3_8-line4_13_1" fill="url(#line3_8-line4_13_1_00000006681454672976140270000014252588431538174377_)" d="  M183.1,841.2c-0.5-0.1-1-0.2-1.5-0.2c-0.4,0.9-0.8,1.8-1.3,2.7c-4.1,7.1-12.2,10.6-19.9,9.3c-0.2,0.5-0.3,1-0.5,1.5  c1.2,0.2,2.5,0.4,3.8,0.4C172.5,854.8,180.1,849.1,183.1,841.2z"/>
        <linearGradient id="line3_8-line4_13_2_00000103980656409174380290000011649112751060021918_" gradientUnits="userSpaceOnUse" x1="150.2865" y1="-21308.7109" x2="190.8003" y2="-21337.0801" gradientTransform="matrix(1 0 0 1 0.946 22176.2031)">
            <stop offset="0.3059" style="stop-color:#24BCEF"/>
            <stop offset="0.7601" style="stop-color:#0572B9"/>
        </linearGradient>
        <path id="line3_8-line4_13_2" fill="url(#line3_8-line4_13_2_00000103980656409174380290000011649112751060021918_)" d="  M185.6,841.6c-3.2,9-11.8,15.5-21.9,15.5c-1.5,0-3-0.2-4.5-0.5c-0.2,0.5-0.3,1-0.5,1.5c10.2,2.1,21-2.4,26.4-11.9  c0.8-1.4,1.5-2.9,2-4.3C186.6,841.8,186.1,841.7,185.6,841.6z"/>
        <linearGradient id="line4_13-lineD1_22_00000119830716776482809290000012186672387206334857_" gradientUnits="userSpaceOnUse" x1="21236.2109" y1="-19963.2812" x2="21272.9629" y2="-19969.668" gradientTransform="matrix(1.2459 -0.8791 0.8729 1.2371 -8922.9199 44261.7969)">
            <stop offset="0.4064" style="stop-color:#F7A600"/>
            <stop offset="0.451" style="stop-color:#CBAB32"/>
            <stop offset="0.5155" style="stop-color:#90B175"/>
            <stop offset="0.574" style="stop-color:#61B6A9"/>
            <stop offset="0.6244" style="stop-color:#40B9CF"/>
            <stop offset="0.6648" style="stop-color:#2CBBE6"/>
            <stop offset="0.6901" style="stop-color:#24BCEF"/>
        </linearGradient>
        <path id="line4_13-lineD1_22" fill="url(#line4_13-lineD1_22_00000119830716776482809290000012186672387206334857_)" d="  M131.8,876.1c-0.6,0.6-1.6,0.6-2.2,0c-0.6-0.6-0.6-1.6,0-2.1c0.6-0.6,1.5-0.6,2.1,0C132.3,874.6,132.4,875.6,131.8,876.1z   M124.7,883.2c-0.6,0.6-1.6,0.6-2.2,0s-0.6-1.6,0-2.1c0.6-0.6,1.5-0.6,2.1,0C125.3,881.7,125.3,882.6,124.7,883.2z M128.3,879.7  c-0.6,0.6-1.6,0.6-2.2,0s-0.6-1.6,0-2.1c0.6-0.6,1.5-0.6,2.1,0C128.8,878.2,128.8,879.1,128.3,879.7z M135.3,872.6  c-0.6,0.6-1.6,0.6-2.2,0c-0.6-0.6-0.6-1.6,0-2.1c0.6-0.6,1.5-0.6,2.1,0C135.9,871.1,135.9,872,135.3,872.6z M138.9,869.1  c-0.6,0.6-1.6,0.6-2.2,0c-0.6-0.6-0.6-1.6,0-2.1c0.6-0.6,1.5-0.6,2.1,0C139.4,867.6,139.4,868.5,138.9,869.1z M142.4,865.5  c-0.6,0.6-1.6,0.6-2.2,0c-0.6-0.6-0.6-1.6,0-2.1c0.6-0.6,1.5-0.6,2.1,0C143,864,143,865,142.4,865.5z M145.9,862  c-0.6,0.6-1.6,0.6-2.2,0c-0.6-0.6-0.6-1.6,0-2.1c0.6-0.6,1.5-0.6,2.1,0C146.5,860.5,146.5,861.4,145.9,862z M121.2,886.8  c-0.6,0.6-1.6,0.6-2.2,0s-0.6-1.6,0-2.1c0.6-0.6,1.5-0.6,2.1,0C121.7,885.2,121.7,886.2,121.2,886.8z M117.7,890.3  c-0.6,0.6-1.6,0.6-2.2,0s-0.6-1.6,0-2.1c0.6-0.6,1.5-0.6,2.1,0S118.2,889.7,117.7,890.3z"/>
        <linearGradient id="line4_9-lineD1_20_00000119083203082591504010000010398194768647499183_" gradientUnits="userSpaceOnUse" x1="33700.6602" y1="-14634.5068" x2="33689.7148" y2="-14632.6045" gradientTransform="matrix(0.2593 -1.5026 1.492 0.2575 13389.7031 55409.2227)">
            <stop offset="0.242" style="stop-color:#24BCEF"/>
            <stop offset="0.8193" style="stop-color:#F7A600"/>
        </linearGradient>
        <path id="line4_9-lineD1_20" fill="url(#line4_9-lineD1_20_00000119083203082591504010000010398194768647499183_)" d="M295.1,1011.2  c0,0.8-0.7,1.4-1.5,1.4s-1.5-0.6-1.5-1.4c0-0.8,0.6-1.5,1.5-1.5S295.1,1010.4,295.1,1011.2z M295.1,1016.2c0,0.8-0.7,1.4-1.5,1.4  s-1.5-0.6-1.5-1.4c0-0.8,0.6-1.5,1.5-1.5C294.5,1014.6,295.1,1015.4,295.1,1016.2z M295.1,1006.3c0,0.8-0.7,1.4-1.5,1.4  s-1.5-0.6-1.5-1.4c0-0.8,0.6-1.5,1.5-1.5C294.5,1004.7,295.1,1005.6,295.1,1006.3z"/>
        <linearGradient id="line11_5-lineD1_19_00000156551977039929847400000005475971786779803057_" gradientUnits="userSpaceOnUse" x1="40605.9844" y1="347.3719" x2="40676.9219" y2="335.0433" gradientTransform="matrix(-0.9844 -1.1645 1.1563 -0.9774 40025.1992 48504.1367)">
            <stop offset="0.4064" style="stop-color:#F7A600"/>
            <stop offset="0.4249" style="stop-color:#EDA912"/>
            <stop offset="0.4964" style="stop-color:#CAB655"/>
            <stop offset="0.5613" style="stop-color:#AEC089"/>
            <stop offset="0.6172" style="stop-color:#9AC7AF"/>
            <stop offset="0.662" style="stop-color:#8ECBC6"/>
            <stop offset="0.6901" style="stop-color:#89CDCF"/>
        </linearGradient>
        <path id="line11_5-lineD1_19" fill="url(#line11_5-lineD1_19_00000156551977039929847400000005475971786779803057_)" d="  M402.9,833.8c0.7,0.5,0.8,1.5,0.2,2.1c-0.5,0.6-1.5,0.7-2.1,0.2s-0.7-1.5-0.2-2.1S402.3,833.3,402.9,833.8z M410.6,840.3  c0.7,0.5,0.8,1.5,0.2,2.1c-0.5,0.6-1.5,0.7-2.1,0.2s-0.7-1.5-0.2-2.1S409.9,839.8,410.6,840.3z M406.7,837c0.7,0.5,0.8,1.5,0.2,2.1  c-0.5,0.6-1.5,0.7-2.1,0.2s-0.7-1.5-0.2-2.1C405.2,836.6,406.1,836.6,406.7,837z M399.1,830.6c0.7,0.5,0.8,1.5,0.2,2.1  c-0.5,0.6-1.5,0.7-2.1,0.2s-0.7-1.5-0.2-2.1S398.5,830.1,399.1,830.6z M395.2,827.4c0.7,0.5,0.8,1.5,0.2,2.1  c-0.5,0.6-1.5,0.7-2.1,0.2s-0.7-1.5-0.2-2.1C393.7,827,394.6,826.9,395.2,827.4z M391.4,824.2c0.7,0.5,0.8,1.5,0.2,2.1  c-0.5,0.6-1.5,0.7-2.1,0.2s-0.7-1.5-0.2-2.1C389.9,823.8,390.8,823.7,391.4,824.2z M387.6,821c0.7,0.5,0.8,1.5,0.2,2.1  c-0.5,0.6-1.5,0.7-2.1,0.2s-0.7-1.5-0.2-2.1C386,820.6,387,820.5,387.6,821z M383.8,817.8c0.7,0.5,0.8,1.5,0.2,2.1  c-0.5,0.6-1.5,0.7-2.1,0.2s-0.7-1.5-0.2-2.1C382.2,817.4,383.1,817.3,383.8,817.8z M414.4,843.5c0.7,0.5,0.8,1.5,0.2,2.1  c-0.5,0.6-1.5,0.7-2.1,0.2s-0.7-1.5-0.2-2.1C412.8,843.1,413.8,843,414.4,843.5z M418.2,846.7c0.7,0.5,0.8,1.5,0.2,2.1  c-0.5,0.6-1.5,0.7-2.1,0.2s-0.7-1.5-0.2-2.1C416.7,846.3,417.6,846.2,418.2,846.7z M422.1,849.9c0.7,0.5,0.8,1.5,0.2,2.1  c-0.5,0.6-1.5,0.7-2.1,0.2s-0.7-1.5-0.2-2.1C420.5,849.5,421.4,849.4,422.1,849.9z M425.9,853.1c0.7,0.5,0.8,1.5,0.2,2.1  c-0.5,0.6-1.5,0.7-2.1,0.2s-0.7-1.5-0.2-2.1S425.3,852.6,425.9,853.1z M429.7,856.3c0.7,0.5,0.8,1.5,0.2,2.1  c-0.5,0.6-1.5,0.7-2.1,0.2s-0.7-1.5-0.2-2.1C428.2,855.9,429.1,855.8,429.7,856.3z M379.9,814.6c0.7,0.5,0.8,1.5,0.2,2.1  c-0.5,0.6-1.5,0.7-2.1,0.2s-0.7-1.5-0.2-2.1C378.4,814.1,379.3,814.1,379.9,814.6z M433.5,859.5c0.7,0.5,0.8,1.5,0.2,2.1  c-0.5,0.6-1.5,0.7-2.1,0.2s-0.7-1.5-0.2-2.1C432,859.1,432.9,859.1,433.5,859.5z M437.4,862.8c0.7,0.5,0.8,1.5,0.2,2.1  c-0.5,0.6-1.5,0.7-2.1,0.2s-0.7-1.5-0.2-2.1S436.8,862.3,437.4,862.8z M441.2,866c0.7,0.5,0.8,1.5,0.2,2.1c-0.5,0.6-1.5,0.7-2.1,0.2  s-0.7-1.5-0.2-2.1C439.7,865.6,440.6,865.5,441.2,866z"/>
        <linearGradient id="line4_6-line14_18_00000039818069731133675520000018045821715598205595_" gradientUnits="userSpaceOnUse" x1="31930.498" y1="14599.9336" x2="31940.6426" y2="14599.9336" gradientTransform="matrix(0.5831 0 0 -0.5831 -18252.7363 9416.1719)">
            <stop offset="0.119" style="stop-color:#D14A43"/>
            <stop offset="0.9067" style="stop-color:#24BCEF"/>
        </linearGradient>
        <rect id="line4_6-line14_18" x="365.4" y="899.7" fill="url(#line4_6-line14_18_00000039818069731133675520000018045821715598205595_)" width="6.9" height="6.5"/>
        <rect id="white_line4_6-line14_18" x="356.9" y="902" fill="#FFFFFF" width="22.8" height="2"/>
        <linearGradient id="line3_10-line8A_6_00000088824194732380790300000011773911195005616573_" gradientUnits="userSpaceOnUse" x1="67957.3906" y1="-74113.9922" x2="67966.1094" y2="-74113.9922" gradientTransform="matrix(0.4123 -0.4123 0.4123 0.4123 2871.0691 59662.7305)">
            <stop offset="0" style="stop-color:#FFCD1E"/>
            <stop offset="1" style="stop-color:#0572B9"/>
        </linearGradient>
        <polygon id="line3_10-line8A_6" fill="url(#line3_10-line8A_6_00000088824194732380790300000011773911195005616573_)" points="  334.4,1080.3 339,1085.1 334.8,1089.3 330.2,1084.5 "/>
        <rect id="white_line3_10-line8A_6" x="324.7" y="1083.3" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -668.5463 554.5656)" fill="#FFFFFF" width="20.9" height="2"/>
        <linearGradient id="line3_11-line4_4_00000065032198417009704980000010899795550328348335_" gradientUnits="userSpaceOnUse" x1="45653.3164" y1="-9135.8643" x2="45678.0703" y2="-9178.7363" gradientTransform="matrix(-0.866 -0.5 -0.5 0.866 35501.457 31681.2676)">
            <stop offset="0.2698" style="stop-color:#0572B9"/>
            <stop offset="0.5973" style="stop-color:#24BCEF"/>
        </linearGradient>
        <path id="line3_11-line4_4" fill="url(#line3_11-line4_4_00000065032198417009704980000010899795550328348335_)" d="M538.5,934.4  c-4.8-6-5.7-14.7-1.7-21.6c0.5-0.9,1.1-1.7,1.7-2.4c-1.2-1.5-2.3-3-3.5-4.5c-1.1,1.2-2.1,2.6-3,4.1c-5.4,9.4-3.9,21.1,3,28.9  C536.2,937.3,537.3,935.8,538.5,934.4z"/>
        <path id="white_line3_11-line4_4" fill="#FFFFFF" d="M532.8,922.3c0-6.2,2.8-11.9,7.2-15.7c-0.4-0.7-0.9-1.4-1.3-2.1  c-5.1,4.3-8.4,10.7-8.4,17.8c0,7.2,3.3,13.6,8.5,17.9c0.5-0.7,0.9-1.4,1.4-2C535.6,934.3,532.8,928.6,532.8,922.3z"/>
        <linearGradient id="line3_11-line5_8_00000043415557029551162400000013152069940379444375_" gradientUnits="userSpaceOnUse" x1="45641.6953" y1="-9131.5693" x2="45617.9805" y2="-9175.0234" gradientTransform="matrix(-0.866 -0.5 -0.5 0.866 35501.457 31681.2676)">
            <stop offset="0.3514" style="stop-color:#0572B9"/>
            <stop offset="0.6415" style="stop-color:#925233"/>
        </linearGradient>
        <path id="line3_11-line5_8" fill="url(#line3_11-line5_8_00000043415557029551162400000013152069940379444375_)" d="M571.4,929.3  c-0.4,0.9-0.8,1.8-1.3,2.7c-4.1,7.1-12.3,10.6-20.1,9.3c-0.5,1.7-1.1,3.5-1.6,5.2c10.2,2.1,21-2.4,26.5-11.9c0.8-1.4,1.5-2.9,2-4.4  C575.1,929.9,573.2,929.6,571.4,929.3z"/>
        <path id="white_line3_11-line5_8" fill="#FFFFFF" d="M573.8,925.9c-1.7,9.8-10.2,17.3-20.4,17.3c-2.6,0-5-0.5-7.3-1.4  c-0.3,0.7-0.6,1.5-0.9,2.2c2.5,1,5.3,1.5,8.1,1.5c11.4,0,21.1-8.4,22.9-19.4C575.5,926.1,574.7,926,573.8,925.9z"/>
        <linearGradient id="line4_4-line5_8_00000154401107451378512590000003885332549512209588_" gradientUnits="userSpaceOnUse" x1="45621.6289" y1="-9183.4092" x2="45671.1328" y2="-9183.4092" gradientTransform="matrix(-0.866 -0.5 -0.5 0.866 35501.457 31681.2676)">
            <stop offset="0.3612" style="stop-color:#925233"/>
            <stop offset="0.6115" style="stop-color:#24BCEF"/>
        </linearGradient>
        <path id="line4_4-line5_8" fill="url(#line4_4-line5_8_00000154401107451378512590000003885332549512209588_)" d="M563.1,905.7  c3.9,2.3,6.7,5.7,8.2,9.7c1.9-0.3,3.7-0.6,5.6-1c-1.8-5.6-5.7-10.5-11.1-13.6c-5.5-3.1-11.6-4-17.4-2.8c0.6,1.8,1.1,3.6,1.7,5.4  C554.4,902.7,559.1,903.4,563.1,905.7z"/>
        <path id="white_line4_4-line5_8" fill="#FFFFFF" d="M553.5,901.4c10.1,0,18.6,7.5,20.4,17.2c0.8-0.1,1.7-0.2,2.5-0.2  c-1.9-10.9-11.5-19.3-22.9-19.3c-2.9,0-5.7,0.5-8.2,1.5c0.3,0.7,0.6,1.5,0.9,2.2C548.4,901.9,550.9,901.4,553.5,901.4z"/>
        <linearGradient id="line3_15-line10_10_00000093856994491626737950000003425671551171314877_" gradientUnits="userSpaceOnUse" x1="-8168.0332" y1="13589.4355" x2="-8174.4814" y2="13598.6436" gradientTransform="matrix(0.8746 0.4848 0.4848 -0.8746 1651.6996 16722.207)">
            <stop offset="0.1719" style="stop-color:#BED12E"/>
            <stop offset="0.7854" style="stop-color:#0572B9"/>
        </linearGradient>
        <path id="line3_15-line10_10" fill="url(#line3_15-line10_10_00000093856994491626737950000003425671551171314877_)" d="  M1098.7,875.8c-0.4-0.8-0.9-2.3-1-4.1c-0.1-2.2,0.5-3.8,0.8-4.7c-1.4-1.3-2.7-2.6-4.1-3.9c-0.8,1.3-2,3.8-2.2,7.1  c-0.4,4.8,1.5,8.3,2.3,9.7C1095.9,878.5,1097.3,877.1,1098.7,875.8z"/>
        <path id="white_line3_15-line10_10" fill="#FFFFFF" d="M1099.5,862.8c-0.5-0.7-0.9-1.4-1.4-2.2c-2.8,2.7-4.5,6.5-4.5,10.7  s1.8,8.1,4.7,10.8c0.5-0.7,1-1.4,1.5-2c-2.3-2.3-3.7-5.4-3.7-8.8C1096.1,868.1,1097.4,865.1,1099.5,862.8z"/>
        <linearGradient id="line3_15-line5_2_00000018941812630886824260000010433822661115180215_" gradientUnits="userSpaceOnUse" x1="-8175.3613" y1="13613.9355" x2="-8144.7451" y2="13613.9355" gradientTransform="matrix(0.8746 0.4848 0.4848 -0.8746 1651.6996 16722.207)">
            <stop offset="0.4059" style="stop-color:#0572B9"/>
            <stop offset="0.5808" style="stop-color:#925233"/>
        </linearGradient>
        <path id="line3_15-line5_2" fill="url(#line3_15-line5_2_00000018941812630886824260000010433822661115180215_)" d="M1110,860.3  c0.9,0.1,2.4,0.4,4.1,1.3c1.7,0.9,2.7,2.1,3.2,2.8c1.8-0.6,3.6-1.2,5.5-1.7c-0.7-1.2-1.9-2.8-3.9-4.4c-0.3-0.2-1.1-0.9-2.2-1.5  c-3-1.7-6.1-2-8.1-2C1109,856.6,1109.5,858.5,1110,860.3z"/>
        <path id="white_line3_15-line5_2" fill="#FFFFFF" d="M1108.6,858.8c5.4,0,10.1,3.6,11.8,8.5c0.8-0.1,1.7-0.3,2.5-0.4  c-1.9-6.1-7.6-10.6-14.3-10.6c-1.3,0-2.6,0.2-3.8,0.5c0.3,0.8,0.6,1.6,0.9,2.3C1106.6,859,1107.6,858.8,1108.6,858.8z"/>
        <linearGradient id="line5_2-line10_10_00000171710084918521328950000003544523971979851152_" gradientUnits="userSpaceOnUse" x1="-8164.813" y1="13558.8721" x2="-8143.7944" y2="13604.1172" gradientTransform="matrix(0.8746 0.4848 0.4848 -0.8746 1651.6996 16722.207)">
            <stop offset="0.7157" style="stop-color:#BED12E"/>
            <stop offset="0.8582" style="stop-color:#925233"/>
        </linearGradient>
        <path id="line5_2-line10_10" fill="url(#line5_2-line10_10_00000171710084918521328950000003544523971979851152_)" d="M1110.1,882.1  c-0.4,1.9-0.8,3.7-1.1,5.6c0.8,0,2.4-0.2,4.2-0.7c3.3-0.9,5.4-2.6,6-3c2.2-1.8,3.4-3.8,4.1-5c-0.9-0.2-1.9-0.3-2.9-0.6  c-1-0.2-1.9-0.5-2.7-0.8c-0.5,0.8-1.6,2.1-3.4,3.1C1112.6,881.7,1111,882,1110.1,882.1z"/>
        <path id="white_line5_2-line10_10" fill="#FFFFFF" d="M1120.7,874.5c-1.4,5.3-6.3,9.3-12.1,9.3c-1,0-1.9-0.1-2.8-0.3  c-0.2,0.8-0.5,1.6-0.7,2.4c1.1,0.3,2.3,0.4,3.5,0.4c7.1,0,13-5,14.6-11.6C1122.4,874.7,1121.5,874.6,1120.7,874.5z"/>
        <linearGradient id="line3_19-line14_3_00000013885669579239403660000004940414646609301173_" gradientUnits="userSpaceOnUse" x1="34907.4883" y1="12772.249" x2="34918.4336" y2="12770.3457" gradientTransform="matrix(-1.5026 -0.2593 0.2575 -1.492 50491.5586 28732.6055)">
            <stop offset="0" style="stop-color:#0572B9"/>
            <stop offset="1" style="stop-color:#D14A43"/>
        </linearGradient>
        <path id="line3_19-line14_3" fill="url(#line3_19-line14_3_00000013885669579239403660000004940414646609301173_)" d="M1319.4,623.4  c0.8,0,1.4,0.7,1.4,1.5s-0.6,1.5-1.4,1.5s-1.5-0.6-1.5-1.5S1318.6,623.4,1319.4,623.4z M1324.4,623.4c0.8,0,1.4,0.7,1.4,1.5  s-0.6,1.5-1.4,1.5s-1.5-0.6-1.5-1.5C1322.8,624,1323.6,623.4,1324.4,623.4z M1314.5,623.4c0.8,0,1.4,0.7,1.4,1.5s-0.6,1.5-1.4,1.5  s-1.5-0.6-1.5-1.5C1312.9,624,1313.7,623.4,1314.5,623.4z"/>
        <linearGradient id="line5_2-lineD2_18_00000077322455403343882890000018163425248411094412_" gradientUnits="userSpaceOnUse" x1="91279.0547" y1="15249.6514" x2="91289.0391" y2="15249.6514" gradientTransform="matrix(-0.5831 0 0 -0.5831 54360.6641 9762.9219)">
            <stop offset="0.2068" style="stop-color:#E94282"/>
            <stop offset="0.8728" style="stop-color:#925233"/>
        </linearGradient>
        <rect id="line5_2-lineD2_18" x="1129.8" y="867.6" fill="url(#line5_2-lineD2_18_00000077322455403343882890000018163425248411094412_)" width="5.9" height="6.5"/>
        <rect id="white_line5_2-lineD2_18" x="1121.5" y="869.9" fill="#FFFFFF" width="20.9" height="2"/>
        <linearGradient id="line5_3-line7_14_00000080920532990487837320000014689124842980814763_" gradientUnits="userSpaceOnUse" x1="7329.1875" y1="28396.7871" x2="7360.1396" y2="28396.7871" gradientTransform="matrix(0.9659 -0.2588 -0.2588 -0.9659 1359.7937 30341.2773)">
            <stop offset="0.4097" style="stop-color:#925233"/>
            <stop offset="0.621" style="stop-color:#943F90"/>
        </linearGradient>
        <path id="line5_3-line7_14" fill="url(#line5_3-line7_14_00000080920532990487837320000014689124842980814763_)" d="M1102,1016.2  c0.7-0.6,2-1.4,3.8-2c1.8-0.5,3.4-0.4,4.3-0.3c0.9-1.7,1.8-3.4,2.7-5.1c-1.3-0.4-3.4-0.8-5.9-0.5c-0.3,0-1.3,0.1-2.6,0.5  c-3.3,0.9-5.8,2.8-7.4,4.3c0.8,0.5,1.7,1,2.6,1.6C1100.3,1015.2,1101.2,1015.7,1102,1016.2z"/>
        <path id="white_line5_3-line7_14" fill="#FFFFFF" d="M1115.9,1012c-2.2-1.2-4.7-2-7.3-2c-5.4,0-10.2,2.9-12.8,7.3  c0.8,0.3,1.6,0.6,2.4,0.9c2.2-3.4,6.1-5.7,10.5-5.7c2.2,0,4.2,0.6,6,1.6C1115,1013.4,1115.5,1012.7,1115.9,1012z"/>
        <linearGradient id="line5_3-line8_7_00000143592066089976831550000009340103510543966858_" gradientUnits="userSpaceOnUse" x1="7336.8115" y1="28372.1836" x2="7330.3433" y2="28381.4199" gradientTransform="matrix(0.9659 -0.2588 -0.2588 -0.9659 1359.7937 30341.2773)">
            <stop offset="0.1719" style="stop-color:#FFCD1E"/>
            <stop offset="0.7839" style="stop-color:#925233"/>
        </linearGradient>
        <path id="line5_3-line8_7" fill="url(#line5_3-line8_7_00000143592066089976831550000009340103510543966858_)" d="M1104.7,1035.2  c-0.9-0.3-2.3-1-3.6-2.2c-1.6-1.5-2.3-3.2-2.7-4.1c-0.8,0.1-1.7,0.2-2.8,0.2c-1.1,0-2.1-0.1-2.9-0.2c0.2,0.9,0.5,1.9,1.1,3.1  c0,0,0.9,1.9,2.2,3.5c3.1,3.7,6.9,5,8.5,5.4C1104.5,1038.9,1104.5,1037.1,1104.7,1035.2z"/>
        <path id="white_line5_3-line8_7" fill="#FFFFFF" d="M1108.5,1037.5c-6.8,0-12.3-5.5-12.5-12.3c-0.8-0.2-1.7-0.3-2.5-0.5  c0,0.1,0,0.1,0,0.2c0,8.2,6.8,15,15,15c0.1,0,0.1,0,0.2,0C1108.7,1039.2,1108.6,1038.3,1108.5,1037.5z"/>
        <linearGradient id="line7_14-line8_7_00000098191143241700826210000000563152137528353922_" gradientUnits="userSpaceOnUse" x1="7339.9009" y1="28341.6074" x2="7360.8862" y2="28386.7793" gradientTransform="matrix(0.9659 -0.2588 -0.2588 -0.9659 1359.7937 30341.2773)">
            <stop offset="0.7157" style="stop-color:#FFCD1E"/>
            <stop offset="0.8582" style="stop-color:#943F90"/>
        </linearGradient>
        <path id="line7_14-line8_7" fill="url(#line7_14-line8_7_00000098191143241700826210000000563152137528353922_)" d="M1117.2,1031.8  c1,1.6,2,3.2,3,4.8c0.6-0.6,1.6-1.8,2.6-3.4c1.8-3,2.1-5.8,2.2-6.3c0.3-2.8-0.2-5-0.6-6.4c-0.7,0.5-1.5,1-2.5,1.6  c-0.9,0.5-1.8,0.9-2.5,1.2c0.1,1,0.2,2.6-0.3,4.6C1118.6,1029.7,1117.8,1031,1117.2,1031.8z"/>
        <path id="white_line7_14-line8_7" fill="#FFFFFF" d="M1121.5,1017.5c-0.7,0.5-1.3,1-2,1.5c1,1.8,1.6,3.8,1.6,6  c0,4.5-2.4,8.4-5.9,10.6c0.3,0.8,0.7,1.5,1,2.3c4.4-2.6,7.4-7.4,7.4-12.9C1123.6,1022.3,1122.8,1019.7,1121.5,1017.5z"/>
        <linearGradient id="line5_5-line9_14_00000137130141272087363340000000109847295404563860_" gradientUnits="userSpaceOnUse" x1="54105.9727" y1="24098.4824" x2="54105.9727" y2="24112.9297" gradientTransform="matrix(-0.4123 0.4123 -0.4123 -0.4123 33018.3438 -11199.9883)">
            <stop offset="0.2068" style="stop-color:#ADACAC"/>
            <stop offset="0.7979" style="stop-color:#925233"/>
        </linearGradient>
        <polygon id="line5_5-line9_14" fill="url(#line5_5-line9_14_00000137130141272087363340000000109847295404563860_)" points="  772.7,1174.4 766.7,1168.4 770.9,1164.2 777,1170.2 "/>
        <path id="white_line5_5-line9_14" fill="#FFFFFF" d="M767,1163.1c-0.5,0.5-0.9,0.9-1.4,1.4l11.1,11.1c0.5-0.5,0.9-1,1.4-1.5  L767,1163.1z"/>
        <linearGradient id="line5_6-line6_13_00000146469273290886795450000003543190597411709111_" gradientUnits="userSpaceOnUse" x1="100545.2969" y1="-54658.9414" x2="100555.2812" y2="-54658.9414" gradientTransform="matrix(0 -0.5831 0.5831 0 32546.7793 59753.5312)">
            <stop offset="0.2068" style="stop-color:#EF7E24"/>
            <stop offset="0.8728" style="stop-color:#925233"/>
        </linearGradient>
        <rect id="line5_6-line6_13" x="671.9" y="1119.5" fill="url(#line5_6-line6_13_00000146469273290886795450000003543190597411709111_)" width="6.5" height="5.9"/>
        <rect id="white_line5_6-line6_13" x="674.1" y="1111.1" fill="#FFFFFF" width="2" height="20.9"/>
        <linearGradient id="line5_9-line7_10_00000175286602682852359650000008795308764762434222_" gradientUnits="userSpaceOnUse" x1="109702.8516" y1="-17283.9297" x2="109702.8516" y2="-17266.8828" gradientTransform="matrix(-0.4123 -0.4123 0.4123 -0.4123 52947.1875 38923.4336)">
            <stop offset="0.2068" style="stop-color:#925233"/>
            <stop offset="0.7979" style="stop-color:#943F90"/>
        </linearGradient>
        <polygon id="line5_9-line7_10" fill="url(#line5_9-line7_10_00000175286602682852359650000008795308764762434222_)" points="  587.8,816.8 594.9,809.7 599.9,814.7 592.9,821.8 "/>
        <path id="white_line5_9-line7_10" fill="#FFFFFF" d="M604.7,806.3c-0.5-0.5-1-0.9-1.4-1.4l-21.2,21.2c0.5,0.4,1,0.9,1.5,1.3  L604.7,806.3z"/>
        <linearGradient id="line5_11-line9_9_00000168089258545789694900000010442200083703805851_" gradientUnits="userSpaceOnUse" x1="53473.3008" y1="24731.4004" x2="53473.3008" y2="24745.8477" gradientTransform="matrix(-0.4123 0.4123 -0.4123 -0.4123 33018.3438 -11199.9883)">
            <stop offset="0.2068" style="stop-color:#ADACAC"/>
            <stop offset="0.7979" style="stop-color:#925233"/>
        </linearGradient>
        <polygon id="line5_11-line9_9" fill="url(#line5_11-line9_9_00000168089258545789694900000010442200083703805851_)" points="  772.6,652.6 766.6,646.6 770.8,642.4 776.9,648.4 "/>
        <path id="white_line5_11-line9_9" fill="#FFFFFF" d="M766.9,641.3c-0.5,0.5-0.9,0.9-1.4,1.4l11.1,11.1c0.5-0.5,0.9-1,1.4-1.5  L766.9,641.3z"/>
        <linearGradient id="line5_12-line6_8_00000142858535910058907620000006526716690944516527_" gradientUnits="userSpaceOnUse" x1="101360.0781" y1="-54225.7383" x2="101370.0625" y2="-54225.7383" gradientTransform="matrix(0 -0.5831 0.5831 0 32546.7793 59753.5312)">
            <stop offset="0.2068" style="stop-color:#EF7E24"/>
            <stop offset="0.8728" style="stop-color:#925233"/>
        </linearGradient>
        <rect id="line5_12-line6_8" x="924.5" y="644.4" fill="url(#line5_12-line6_8_00000142858535910058907620000006526716690944516527_)" width="6.5" height="5.9"/>
        <rect id="white_line5_12-line6_8" x="926.7" y="636" fill="#FFFFFF" width="2" height="20.9"/>
        <linearGradient id="line6_4-line14_29_00000039118132922282165700000018209472267906472862_" gradientUnits="userSpaceOnUse" x1="-2673.6284" y1="-18451.5586" x2="-2680.616" y2="-18460.6621" gradientTransform="matrix(0.9848 0.1736 -0.1736 0.9848 485.0381 19004.8008)">
            <stop offset="0" style="stop-color:#D14A43"/>
            <stop offset="0.4998" style="stop-color:#EF7E24"/>
        </linearGradient>
        <path id="line6_4-line14_29" fill="url(#line6_4-line14_29_00000039118132922282165700000018209472267906472862_)" d="M1055.2,366.3  c0.5,0.7,0.2,1.5-0.4,2c-0.7,0.5-1.6,0.4-2-0.3s-0.4-1.6,0.4-2.1C1053.8,365.4,1054.7,365.6,1055.2,366.3z M1058,370.4  c0.5,0.7,0.2,1.5-0.4,2c-0.7,0.5-1.6,0.4-2-0.3s-0.4-1.6,0.4-2.1C1056.6,369.4,1057.6,369.7,1058,370.4z M1052.4,362.3  c0.5,0.7,0.2,1.5-0.4,2c-0.7,0.5-1.6,0.4-2-0.3s-0.4-1.6,0.4-2.1C1051,361.3,1052,361.7,1052.4,362.3z"/>
        <linearGradient id="line6_5-line13_1_00000167391714063653566200000002393781414923841439_" gradientUnits="userSpaceOnUse" x1="34910.3633" y1="12665.2539" x2="34899.418" y2="12667.1553" gradientTransform="matrix(-1.5026 -0.2593 0.2575 -1.492 50214.4531 28378.8145)">
            <stop offset="0.1826" style="stop-color:#0A72B9"/>
            <stop offset="0.3716" style="stop-color:#63777F"/>
            <stop offset="0.5939" style="stop-color:#C77C3E"/>
            <stop offset="0.6938" style="stop-color:#EF7E24"/>
        </linearGradient>
        <path id="line6_5-line13_1" fill="url(#line6_5-line13_1_00000167391714063653566200000002393781414923841439_)" d="M1028.4,428.5  c0.8,0,1.4,0.7,1.4,1.5s-0.6,1.5-1.4,1.5s-1.5-0.6-1.5-1.5S1027.6,428.5,1028.4,428.5z M1033.4,428.5c0.8,0,1.4,0.7,1.4,1.5  s-0.6,1.5-1.4,1.5s-1.5-0.6-1.5-1.5C1031.8,429.1,1032.6,428.5,1033.4,428.5z M1023.5,428.5c0.8,0,1.4,0.7,1.4,1.5s-0.6,1.5-1.4,1.5  c-0.8,0-1.5-0.6-1.5-1.5C1021.9,429.1,1022.8,428.5,1023.5,428.5z"/>
        <linearGradient id="line6_7-lineD2_16_00000060731992963645777350000003231739596854716853_" gradientUnits="userSpaceOnUse" x1="34047.668" y1="-14217.6699" x2="34036.7227" y2="-14215.7676" gradientTransform="matrix(0.2593 -1.5026 1.492 0.2575 13389.7031 55409.2227)">
            <stop offset="0" style="stop-color:#EF7E24"/>
            <stop offset="1" style="stop-color:#E94282"/>
        </linearGradient>
        <path id="line6_7-lineD2_16" fill="url(#line6_7-lineD2_16_00000060731992963645777350000003231739596854716853_)" d="M1007,597.1  c0,0.8-0.7,1.4-1.5,1.4s-1.5-0.6-1.5-1.4c0-0.8,0.6-1.5,1.5-1.5S1007,596.3,1007,597.1z M1007,602.1c0,0.8-0.7,1.4-1.5,1.4  s-1.5-0.6-1.5-1.4c0-0.8,0.6-1.5,1.5-1.5C1006.4,600.5,1007,601.3,1007,602.1z M1007,592.2c0,0.8-0.7,1.4-1.5,1.4s-1.5-0.6-1.5-1.4  c0-0.8,0.6-1.5,1.5-1.5C1006.4,590.6,1007,591.5,1007,592.2z"/>
        <linearGradient id="line6_11-line7_13_00000061468737566626411290000008093010035243762589_" gradientUnits="userSpaceOnUse" x1="21051.6426" y1="-54310.1445" x2="21051.6426" y2="-54295.6992" gradientTransform="matrix(-2.020111e-07 0.5831 0.5831 2.020111e-07 32648.541 -11381.9111)">
            <stop offset="0.2068" style="stop-color:#EF7E24"/>
            <stop offset="0.7979" style="stop-color:#943F90"/>
        </linearGradient>
        <polygon id="line6_11-line7_13" fill="url(#line6_11-line7_13_00000061468737566626411290000008093010035243762589_)" points="  980.5,890.3 989,890.4 989,896.3 980.5,896.3 "/>
        <path id="white_line6_11-line7_13" fill="#FFFFFF" d="M976.9,892.3c0,0.7-0.1,1.3-0.1,2.1h15.7c0-0.7,0-1.3,0-2L976.9,892.3z"/>
        <rect id="white_line6_15-line14_15" x="597.7" y="1251.9" transform="matrix(0.9152 -0.403 0.403 0.9152 -453.267 351.7133)" fill="#FFFFFF" width="22.8" height="2"/>
        <linearGradient id="line6_24-line12_1_00000079444433009914709470000018023487643191498118_" gradientUnits="userSpaceOnUse" x1="99613.6016" y1="-54713.4766" x2="99623.5859" y2="-54713.4766" gradientTransform="matrix(0 -0.5831 0.5831 0 32546.7793 59753.5312)">
            <stop offset="0.2082" style="stop-color:#BAC8E8"/>
            <stop offset="0.8728" style="stop-color:#EF7E24"/>
        </linearGradient>
        <rect id="line6_24-line12_1" x="640.1" y="1662.8" fill="url(#line6_24-line12_1_00000079444433009914709470000018023487643191498118_)" width="6.5" height="5.9"/>
        <rect id="white_line6_24-line12_1" x="642.3" y="1654.5" fill="#FFFFFF" width="2" height="20.9"/>
        <linearGradient id="line7_5-lineD2_10_00000024002159256352462140000017330494285210416301_" gradientUnits="userSpaceOnUse" x1="-10814.1748" y1="69.8152" x2="-10815.8906" y2="66.2083" gradientTransform="matrix(-0.6018 0.7986 -0.7986 -0.6018 -6117.9849 9201.7832)">
            <stop offset="0" style="stop-color:#943F90"/>
            <stop offset="1" style="stop-color:#E94282"/>
        </linearGradient>
        <path id="line7_5-lineD2_10" fill="url(#line7_5-lineD2_10_00000024002159256352462140000017330494285210416301_)" d="M338,522.4  c-0.7-0.5-0.7-1.4-0.3-2.1s1.4-0.7,2.1-0.3c0.7,0.5,0.8,1.4,0.4,2.1C339.6,522.9,338.6,523,338,522.4z M333.8,528.1  c-0.7-0.5-0.7-1.4-0.3-2.1c0.4-0.7,1.4-0.7,2.1-0.3c0.7,0.5,0.8,1.4,0.4,2.1C335.3,528.6,334.3,528.6,333.8,528.1z"/>
        <linearGradient id="line7_6-line14_22_00000054229003943335934220000005733842479266588062_" gradientUnits="userSpaceOnUse" x1="39198.1094" y1="6905.2661" x2="39226.3125" y2="6900.3647" gradientTransform="matrix(-1.3233 -0.7576 0.7523 -1.314 47073.0586 39384.8555)">
            <stop offset="0.4064" style="stop-color:#D14A43"/>
            <stop offset="0.4275" style="stop-color:#CB494B"/>
            <stop offset="0.5411" style="stop-color:#AD4470"/>
            <stop offset="0.6327" style="stop-color:#9B4088"/>
            <stop offset="0.6901" style="stop-color:#943F90"/>
        </linearGradient>
        <path id="line7_6-line14_22" fill="url(#line7_6-line14_22_00000054229003943335934220000005733842479266588062_)" d="M375.7,605.5  c0.8,0.3,1.2,1.1,0.9,1.9c-0.3,0.8-1.2,1.2-1.9,0.9c-0.8-0.3-1.2-1.2-0.9-1.9C374.1,605.7,374.9,605.3,375.7,605.5z M385.1,608.9  c0.8,0.3,1.2,1.1,0.9,1.9c-0.3,0.8-1.2,1.2-1.9,0.9c-0.8-0.3-1.2-1.2-0.9-1.9C383.5,609.1,384.3,608.7,385.1,608.9z M380.4,607.2  c0.8,0.3,1.2,1.1,0.9,1.9c-0.3,0.8-1.2,1.2-1.9,0.9c-0.8-0.3-1.2-1.2-0.9-1.9C378.8,607.4,379.6,607,380.4,607.2z M371,603.8  c0.8,0.3,1.2,1.1,0.9,1.9c-0.3,0.8-1.2,1.2-1.9,0.9c-0.8-0.3-1.2-1.2-0.9-1.9C369.4,604,370.2,603.6,371,603.8z M366.3,602.1  c0.8,0.3,1.2,1.1,0.9,1.9c-0.3,0.8-1.2,1.2-1.9,0.9c-0.8-0.3-1.2-1.2-0.9-1.9C364.7,602.2,365.5,601.8,366.3,602.1z M361.6,600.4  c0.8,0.3,1.2,1.1,0.9,1.9c-0.3,0.8-1.2,1.2-1.9,0.9c-0.8-0.3-1.2-1.2-0.9-1.9C360,600.5,360.8,600.1,361.6,600.4z M389.8,610.6  c0.8,0.3,1.2,1.1,0.9,1.9c-0.3,0.8-1.2,1.2-1.9,0.9c-0.8-0.3-1.2-1.2-0.9-1.9S389,610.4,389.8,610.6z"/>
        <linearGradient id="line7_7-line8A_4_00000052804506440980745100000011409073230263065989_" gradientUnits="userSpaceOnUse" x1="22166.209" y1="5265.104" x2="22179.7441" y2="5265.104" gradientTransform="matrix(9.527705e-08 0.5831 -0.5831 9.527705e-08 3524.3301 -12215.7041)">
            <stop offset="0.2068" style="stop-color:#943F90"/>
            <stop offset="0.8728" style="stop-color:#89CDCF"/>
        </linearGradient>
        <rect id="line7_7-line8A_4" x="451" y="709.6" fill="url(#line7_7-line8A_4_00000052804506440980745100000011409073230263065989_)" width="6.5" height="8"/>
        <linearGradient id="line11_4-line14_20_00000165221466545483924990000010713967189477409423_" gradientUnits="userSpaceOnUse" x1="35554.9141" y1="12359.3135" x2="35613.0352" y2="12349.2129" gradientTransform="matrix(-1.5026 -0.2593 0.2575 -1.492 50698.8906 28384.9844)">
            <stop offset="0.4064" style="stop-color:#89CDCF"/>
            <stop offset="0.4341" style="stop-color:#93BCBD"/>
            <stop offset="0.5193" style="stop-color:#AD8B89"/>
            <stop offset="0.5934" style="stop-color:#C16863"/>
            <stop offset="0.6528" style="stop-color:#CD524B"/>
            <stop offset="0.6901" style="stop-color:#D14A43"/>
        </linearGradient>
        <path id="line11_4-line14_20" fill="url(#line11_4-line14_20_00000165221466545483924990000010713967189477409423_)" d="M406.2,724  c0.8,0,1.5,0.7,1.5,1.5s-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5S405.4,724,406.2,724z M416.2,724c0.8,0,1.5,0.7,1.5,1.5s-0.7,1.5-1.5,1.5  s-1.5-0.7-1.5-1.5S415.4,724,416.2,724z M411.2,724c0.8,0,1.5,0.7,1.5,1.5s-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5S410.4,724,411.2,724z   M401.2,724c0.8,0,1.5,0.7,1.5,1.5s-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5S400.4,724,401.2,724z M396.2,724c0.8,0,1.5,0.7,1.5,1.5  s-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5S395.4,724,396.2,724z M391.2,724c0.8,0,1.5,0.7,1.5,1.5s-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5  S390.4,724,391.2,724z M386.2,724c0.8,0,1.5,0.7,1.5,1.5s-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5S385.4,724,386.2,724z M381.2,724  c0.8,0,1.5,0.7,1.5,1.5s-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5S380.4,724,381.2,724z M421.2,724c0.8,0,1.5,0.7,1.5,1.5s-0.7,1.5-1.5,1.5  s-1.5-0.7-1.5-1.5S420.4,724,421.2,724z M426.2,724c0.8,0,1.5,0.7,1.5,1.5s-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5S425.4,724,426.2,724z   M431.2,724c0.8,0,1.5,0.7,1.5,1.5s-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5S430.4,724,431.2,724z M436.2,724c0.8,0,1.5,0.7,1.5,1.5  s-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5S435.4,724,436.2,724z M441.2,724c0.8,0,1.5,0.7,1.5,1.5s-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5  S440.4,724,441.2,724z M376.2,724c0.8,0,1.5,0.7,1.5,1.5s-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5S375.4,724,376.2,724z"/>
        <linearGradient id="line7_8-lineD1_18_00000057871078599277439370000016066212096093745049_" gradientUnits="userSpaceOnUse" x1="91010.3359" y1="14822.0225" x2="91023.8672" y2="14822.0225" gradientTransform="matrix(-0.5831 0 0 -0.5831 53609.3164 9416.1719)">
            <stop offset="0.2068" style="stop-color:#F7A600"/>
            <stop offset="0.8728" style="stop-color:#943F90"/>
        </linearGradient>
        <rect id="line7_8-lineD1_18" x="532.9" y="770.2" fill="url(#line7_8-lineD1_18_00000057871078599277439370000016066212096093745049_)" width="8" height="6.5"/>
        <rect id="white_line7_8-lineD1_18" x="525.6" y="772.5" fill="#FFFFFF" width="22.8" height="2"/>
        <linearGradient id="line7_15-line10_12_00000039098206863385526310000004882409137343806647_" gradientUnits="userSpaceOnUse" x1="55167.7773" y1="23857.5059" x2="55182.1562" y2="23857.5059" gradientTransform="matrix(-0.4123 0.4123 -0.4123 -0.4123 33737.3438 -11848.2441)">
            <stop offset="0.2053" style="stop-color:#943F90"/>
            <stop offset="0.8728" style="stop-color:#BED12E"/>
        </linearGradient>
        <polygon id="line7_15-line10_12" fill="url(#line7_15-line10_12_00000039098206863385526310000004882409137343806647_)" points="  1150.8,1070 1146.2,1065.4 1152.2,1059.4 1156.8,1064 "/>
        <rect id="white_line7_15-line10_12" x="1139.6" y="1065.2" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -417.0714 1125.4801)" fill="#FFFFFF" width="20.9" height="2"/>
        <linearGradient id="line7_16-line14_9_00000034805728225605479360000008514949922525707654_" gradientUnits="userSpaceOnUse" x1="-10300.9209" y1="5258.9478" x2="-10280.1143" y2="5270.5781" gradientTransform="matrix(0.5 0.866 -0.866 0.5 10924.3545 7417.519)">
            <stop offset="4.900000e-02" style="stop-color:#943F90"/>
            <stop offset="0.88" style="stop-color:#D14A43"/>
        </linearGradient>
        <path id="line7_16-line14_9" fill="url(#line7_16-line14_9_00000034805728225605479360000008514949922525707654_)" d="  M1221.3,1142.5c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5C1220.6,1141,1221.2,1141.7,1221.3,1142.5z M1221.3,1147.5  c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5C1220.6,1146,1221.2,1146.7,1221.3,1147.5z M1221.3,1137.5  c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5C1220.6,1136,1221.2,1136.7,1221.3,1137.5z M1221.3,1132.5  c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5C1220.6,1131,1221.2,1131.7,1221.3,1132.5z M1221.3,1127.5  c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5C1220.6,1126,1221.2,1126.7,1221.3,1127.5z"/>
        <g id="line7_17-line11_24">
            <g>

                <linearGradient id="SVGID_00000029005883052516680060000016518187785447654296_" gradientUnits="userSpaceOnUse" x1="1275.1743" y1="-20963.0723" x2="1308.3541" y2="-20963.0723" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3146" style="stop-color:#89CDCF"/>
                    <stop offset="0.6691" style="stop-color:#943F90"/>
                </linearGradient>
                <path fill="none" stroke="url(#SVGID_00000029005883052516680060000016518187785447654296_)" stroke-miterlimit="10" d="    M1280.6,1212.8c0.2,0.1,0.3,0.1,0.5,0.2c0.1-0.1,0.2-0.3,0.3-0.4"/>

                <linearGradient id="SVGID_00000035491484089110828190000018203700703872678296_" gradientUnits="userSpaceOnUse" x1="1275.1743" y1="-20967.623" x2="1308.3541" y2="-20967.623" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3146" style="stop-color:#89CDCF"/>
                    <stop offset="0.6691" style="stop-color:#943F90"/>
                </linearGradient>

                <path fill="none" stroke="url(#SVGID_00000035491484089110828190000018203700703872678296_)" stroke-miterlimit="10" stroke-dasharray="1.0146,1.0146" d="    M1282,1211.8c5.3-6.1,14.1-8.4,21.7-5.3"/>

                <linearGradient id="SVGID_00000149360886737112602470000012660133245215116177_" gradientUnits="userSpaceOnUse" x1="1275.1743" y1="-20969.1719" x2="1308.3541" y2="-20969.1719" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3146" style="stop-color:#89CDCF"/>
                    <stop offset="0.6691" style="stop-color:#943F90"/>
                </linearGradient>
                <path fill="none" stroke="url(#SVGID_00000149360886737112602470000012660133245215116177_)" stroke-miterlimit="10" d="    M1304.2,1206.7c0.2,0.1,0.3,0.1,0.5,0.2c0.1-0.1,0.2-0.3,0.3-0.4"/>

                <linearGradient id="SVGID_00000081645540026425113210000007062325979102046870_" gradientUnits="userSpaceOnUse" x1="1275.1743" y1="-20971.6328" x2="1308.3541" y2="-20971.6328" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3146" style="stop-color:#89CDCF"/>
                    <stop offset="0.6691" style="stop-color:#943F90"/>
                </linearGradient>

                <path fill="none" stroke="url(#SVGID_00000081645540026425113210000007062325979102046870_)" stroke-miterlimit="10" stroke-dasharray="0.926,0.926" d="    M1305.4,1205.7c0.6-0.9,1.2-1.8,1.7-2.7"/>

                <linearGradient id="SVGID_00000029766161638536231560000008408630141079772322_" gradientUnits="userSpaceOnUse" x1="1275.1743" y1="-20973.8008" x2="1308.3541" y2="-20973.8008" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3146" style="stop-color:#89CDCF"/>
                    <stop offset="0.6691" style="stop-color:#943F90"/>
                </linearGradient>
                <path fill="none" stroke="url(#SVGID_00000029766161638536231560000008408630141079772322_)" stroke-miterlimit="10" d="    M1307.4,1202.5c0.1-0.1,0.2-0.3,0.3-0.4c-0.1-0.1-0.3-0.1-0.4-0.2"/>

                <linearGradient id="SVGID_00000174587123609621203110000006748752995345926048_" gradientUnits="userSpaceOnUse" x1="1275.1743" y1="-20971.4395" x2="1308.3541" y2="-20971.4395" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3146" style="stop-color:#89CDCF"/>
                    <stop offset="0.6691" style="stop-color:#943F90"/>
                </linearGradient>

                <path fill="none" stroke="url(#SVGID_00000174587123609621203110000006748752995345926048_)" stroke-miterlimit="10" stroke-dasharray="0.9966,0.9966" d="    M1306.3,1201.5c-10.6-4.5-23.1-1.1-29.8,8.3"/>

                <linearGradient id="SVGID_00000121991243898051838880000002199857587489179265_" gradientUnits="userSpaceOnUse" x1="1275.1747" y1="-20965.4531" x2="1308.3544" y2="-20965.4531" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3146" style="stop-color:#89CDCF"/>
                    <stop offset="0.6691" style="stop-color:#943F90"/>
                </linearGradient>
                <path fill="none" stroke="url(#SVGID_00000121991243898051838880000002199857587489179265_)" stroke-miterlimit="10" d="    M1276.2,1210.2c-0.1,0.1-0.2,0.3-0.3,0.4c0.2,0.1,0.3,0.1,0.5,0.2"/>

                <linearGradient id="SVGID_00000075865886428637833930000007252224883745416103_" gradientUnits="userSpaceOnUse" x1="1275.1743" y1="-20964.1055" x2="1308.3541" y2="-20964.1055" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3146" style="stop-color:#89CDCF"/>
                    <stop offset="0.6691" style="stop-color:#943F90"/>
                </linearGradient>

                <path fill="none" stroke="url(#SVGID_00000075865886428637833930000007252224883745416103_)" stroke-miterlimit="10" stroke-dasharray="0.9294,0.9294" d="    M1277.2,1211.2c1,0.5,2,0.9,2.9,1.4"/>
            </g>
        </g>
        <linearGradient id="line7_17-lineD2_22_00000053540188152301987500000017398970192699069869_" gradientUnits="userSpaceOnUse" x1="1297.4347" y1="-20923.5195" x2="1297.4347" y2="-20954.6973" gradientTransform="matrix(1 0 0 1 17.1549 22170.457)">
            <stop offset="0.3165" style="stop-color:#E94282"/>
            <stop offset="0.8453" style="stop-color:#943F90"/>
        </linearGradient>
        <path id="line7_17-lineD2_22" fill="url(#line7_17-lineD2_22_00000053540188152301987500000017398970192699069869_)" d="  M1318.7,1213.2c-1.5,1.1-3.1,2.2-4.6,3.3c2.4,5.5,2.3,12-0.9,17.4c-1.4,2.3-3.2,4.3-5.3,5.8c0.7,1.7,1.4,3.5,2.1,5.2  c3.2-2.1,6-4.9,8-8.4C1322.3,1229.2,1322.2,1220.4,1318.7,1213.2z"/>
        <g id="line11_24-lineD2_22">
            <g>

                <linearGradient id="SVGID_00000096020056273844209690000006747975560801256127_" gradientUnits="userSpaceOnUse" x1="1271.3435" y1="-20932.5" x2="1295.8285" y2="-20932.5" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3146" style="stop-color:#89CDCF"/>
                    <stop offset="0.6691" style="stop-color:#E94282"/>
                </linearGradient>
                <path fill="none" stroke="url(#SVGID_00000096020056273844209690000006747975560801256127_)" stroke-miterlimit="10" d="    M1294.9,1244c0-0.2,0-0.3,0-0.5c-0.2,0-0.3,0-0.5,0"/>

                <linearGradient id="SVGID_00000111182061760060925110000008220604339007684238_" gradientUnits="userSpaceOnUse" x1="1271.3435" y1="-20940.4941" x2="1295.8285" y2="-20940.4941" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3146" style="stop-color:#89CDCF"/>
                    <stop offset="0.6691" style="stop-color:#E94282"/>
                </linearGradient>

                <path fill="none" stroke="url(#SVGID_00000111182061760060925110000008220604339007684238_)" stroke-miterlimit="10" stroke-dasharray="1.0184,1.0184" d="    M1293.3,1243.3c-2.2-0.4-4.4-1.1-6.4-2.3c-5.2-3-8.4-8.1-9.3-13.7"/>

                <linearGradient id="SVGID_00000077289139995104276110000008710713950831114924_" gradientUnits="userSpaceOnUse" x1="1271.3435" y1="-20949.6992" x2="1295.8285" y2="-20949.6992" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3146" style="stop-color:#89CDCF"/>
                    <stop offset="0.6691" style="stop-color:#E94282"/>
                </linearGradient>
                <path fill="none" stroke="url(#SVGID_00000077289139995104276110000008710713950831114924_)" stroke-miterlimit="10" d="    M1277.5,1226.8c0-0.2,0-0.3-0.1-0.5c-0.2,0-0.3,0-0.5,0"/>

                <linearGradient id="SVGID_00000098180089119260868700000006466041773361023400_" gradientUnits="userSpaceOnUse" x1="1271.3435" y1="-20949.9004" x2="1295.8285" y2="-20949.9004" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3146" style="stop-color:#89CDCF"/>
                    <stop offset="0.6691" style="stop-color:#E94282"/>
                </linearGradient>

                <path fill="none" stroke="url(#SVGID_00000098180089119260868700000006466041773361023400_)" stroke-miterlimit="10" stroke-dasharray="0.9223,0.9223" d="    M1276.1,1226.2c-1.1-0.1-2.1-0.2-3.2-0.2"/>

                <linearGradient id="SVGID_00000175312097620425978000000006483713729866536859_" gradientUnits="userSpaceOnUse" x1="1271.3441" y1="-20950.0996" x2="1295.8292" y2="-20950.0996" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3146" style="stop-color:#89CDCF"/>
                    <stop offset="0.6691" style="stop-color:#E94282"/>
                </linearGradient>
                <path fill="none" stroke="url(#SVGID_00000175312097620425978000000006483713729866536859_)" stroke-miterlimit="10" d="    M1272.4,1225.9c-0.2,0-0.3,0-0.5,0c0,0.2,0,0.3,0,0.5"/>

                <linearGradient id="SVGID_00000140698039499009655980000013620311682424647562_" gradientUnits="userSpaceOnUse" x1="1271.3435" y1="-20937.6309" x2="1295.8285" y2="-20937.6309" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3146" style="stop-color:#89CDCF"/>
                    <stop offset="0.6691" style="stop-color:#E94282"/>
                </linearGradient>

                <path fill="none" stroke="url(#SVGID_00000140698039499009655980000013620311682424647562_)" stroke-miterlimit="10" stroke-dasharray="0.9986,0.9986" d="    M1272,1227.4c0.9,7.4,5.2,14.4,12.2,18.3c3.2,1.8,6.6,2.9,10.1,3.2"/>

                <linearGradient id="SVGID_00000106135080854291932190000012860822871871984032_" gradientUnits="userSpaceOnUse" x1="1271.3435" y1="-20927.0996" x2="1295.8285" y2="-20927.0996" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3146" style="stop-color:#89CDCF"/>
                    <stop offset="0.6691" style="stop-color:#E94282"/>
                </linearGradient>
                <path fill="none" stroke="url(#SVGID_00000106135080854291932190000012860822871871984032_)" stroke-miterlimit="10" d="    M1294.8,1248.9c0.2,0,0.3,0,0.5,0c0-0.2,0-0.3,0-0.5"/>

                <linearGradient id="SVGID_00000173855587094741314370000016153013002213337006_" gradientUnits="userSpaceOnUse" x1="1271.3435" y1="-20929.9492" x2="1295.8285" y2="-20929.9492" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3146" style="stop-color:#89CDCF"/>
                    <stop offset="0.6691" style="stop-color:#E94282"/>
                </linearGradient>

                <path fill="none" stroke="url(#SVGID_00000173855587094741314370000016153013002213337006_)" stroke-miterlimit="10" stroke-dasharray="0.8991,0.8991" d="    M1295.2,1247.6c-0.1-1-0.2-2.1-0.3-3.1"/>
            </g>
        </g>
        <linearGradient id="line7_21-line15_7_00000100370683634204120490000001634014914714116487_" gradientUnits="userSpaceOnUse" x1="91293.6406" y1="13704.4629" x2="91303.625" y2="13704.4629" gradientTransform="matrix(-0.5831 0 0 -0.5831 54660.5625 9467.0225)">
            <stop offset="0.2068" style="stop-color:#943F90"/>
            <stop offset="0.8728" style="stop-color:#D68AB1"/>
        </linearGradient>
        <rect id="line7_21-line15_7" x="1421.2" y="1472.7" fill="url(#line7_21-line15_7_00000100370683634204120490000001634014914714116487_)" width="5.9" height="6.5"/>
        <rect id="white_line7_21-line15_7" x="1412.9" y="1474.9" fill="#FFFFFF" width="20.9" height="2"/>
        <linearGradient id="line8_4-line14_5_00000028305649098693938850000017082296654272585099_" gradientUnits="userSpaceOnUse" x1="7367.0205" y1="-13427.375" x2="7377.9673" y2="-13429.2773" gradientTransform="matrix(1.5026 0.2593 -0.2575 1.492 -13206.7832 18961.2754)">
            <stop offset="0" style="stop-color:#FFCD1E"/>
            <stop offset="1" style="stop-color:#D14A43"/>
        </linearGradient>
        <path id="line8_4-line14_5" fill="url(#line8_4-line14_5_00000028305649098693938850000017082296654272585099_)" d="M1329.5,839.4  c-0.8,0-1.4-0.7-1.4-1.5s0.6-1.5,1.4-1.5s1.5,0.6,1.5,1.5S1330.3,839.4,1329.5,839.4z M1324.5,839.4c-0.8,0-1.4-0.7-1.4-1.5  s0.6-1.5,1.4-1.5s1.5,0.6,1.5,1.5C1326.1,838.8,1325.3,839.4,1324.5,839.4z M1334.4,839.4c-0.8,0-1.4-0.7-1.4-1.5s0.6-1.5,1.4-1.5  s1.5,0.6,1.5,1.5C1336,838.8,1335.2,839.4,1334.4,839.4z"/>
        <linearGradient id="line8_6-line10_11_00000096761931697138206730000008638856067588033982_" gradientUnits="userSpaceOnUse" x1="91757.4453" y1="14544.1123" x2="91767.4219" y2="14544.1123" gradientTransform="matrix(-0.5831 0 0 -0.5831 54660.5625 9467.0225)">
            <stop offset="0.2068" style="stop-color:#FFCD1E"/>
            <stop offset="0.8728" style="stop-color:#BED12E"/>
        </linearGradient>
        <rect id="line8_6-line10_11" x="1150.8" y="983.1" fill="url(#line8_6-line10_11_00000096761931697138206730000008638856067588033982_)" width="5.9" height="6.5"/>
        <rect id="white_line8_6-line10_11" x="1142.5" y="985.4" fill="#FFFFFF" width="20.9" height="2"/>
        <linearGradient id="line10_12-lineD2_19_00000049944402197246569980000013981103604005455744_" gradientUnits="userSpaceOnUse" x1="36137.3945" y1="-21027.1836" x2="36176.293" y2="-21005.4395" gradientTransform="matrix(0.2588 -0.9659 0.9659 0.2588 12109.7373 41324.3203)">
            <stop offset="0.2272" style="stop-color:#BED12E"/>
            <stop offset="1" style="stop-color:#E94282"/>
        </linearGradient>
        <path id="line10_12-lineD2_19" fill="url(#line10_12-lineD2_19_00000049944402197246569980000013981103604005455744_)" d="  M1168.8,957.9c0.6-0.6,1.6-0.6,2.2,0s0.6,1.6,0,2.1c-0.6,0.6-1.5,0.6-2.1,0S1168.3,958.5,1168.8,957.9z M1175.9,950.9  c0.6-0.6,1.6-0.6,2.2,0s0.6,1.6,0,2.1c-0.6,0.6-1.5,0.6-2.1,0S1175.4,951.4,1175.9,950.9z M1172.4,954.4c0.6-0.6,1.6-0.6,2.2,0  s0.6,1.6,0,2.1c-0.6,0.6-1.5,0.6-2.1,0C1171.8,955.9,1171.8,955,1172.4,954.4z M1165.3,961.5c0.6-0.6,1.6-0.6,2.2,0s0.6,1.6,0,2.1  c-0.6,0.6-1.5,0.6-2.1,0S1164.8,962,1165.3,961.5z M1161.8,965c0.6-0.6,1.6-0.6,2.2,0s0.6,1.6,0,2.1c-0.6,0.6-1.5,0.6-2.1,0  C1161.2,966.5,1161.2,965.6,1161.8,965z M1158.2,968.5c0.6-0.6,1.6-0.6,2.2,0s0.6,1.6,0,2.1c-0.6,0.6-1.5,0.6-2.1,0  C1157.7,970.1,1157.7,969.1,1158.2,968.5z M1154.7,972.1c0.6-0.6,1.6-0.6,2.2,0s0.6,1.6,0,2.1c-0.6,0.6-1.5,0.6-2.1,0  S1154.1,972.7,1154.7,972.1z M1151.2,975.6c0.6-0.6,1.6-0.6,2.2,0s0.6,1.6,0,2.1c-0.6,0.6-1.5,0.6-2.1,0  C1150.6,977.1,1150.6,976.2,1151.2,975.6z M1179.4,947.3c0.6-0.6,1.6-0.6,2.2,0s0.6,1.6,0,2.1c-0.6,0.6-1.5,0.6-2.1,0  S1178.9,947.9,1179.4,947.3z"/>
        <linearGradient id="line9_8-line11_1_00000073701795273320465080000007309790913237057184_" gradientUnits="userSpaceOnUse" x1="55146.7891" y1="-73689.7422" x2="55156.7695" y2="-73689.7422" gradientTransform="matrix(-0.4123 0.4123 0.4123 0.4123 53909.5859 8208.8223)">
            <stop offset="0.2068" style="stop-color:#89CDCF"/>
            <stop offset="0.8728" style="stop-color:#ADACAC"/>
        </linearGradient>
        <polygon id="line9_8-line11_1" fill="url(#line9_8-line11_1_00000073701795273320465080000007309790913237057184_)" points="  787.3,562 791.9,566.6 787.7,570.7 783.1,566.1 "/>
        <rect id="white_line9_8-line11_1" x="776.4" y="565.9" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -170.3941 722.4211)" fill="#FFFFFF" width="20.9" height="2"/>
        <linearGradient id="line11_1-lineD1_16_00000174580996149904452900000000389843450637628293_" gradientUnits="userSpaceOnUse" x1="39981.0234" y1="3843.1809" x2="40000.6797" y2="3839.7644" gradientTransform="matrix(-1.1716 -0.9759 0.969 -1.1634 43907.9102 44042.5234)">
            <stop offset="0.4064" style="stop-color:#89CDCF"/>
            <stop offset="0.4249" style="stop-color:#93CABD"/>
            <stop offset="0.4964" style="stop-color:#B6BD7A"/>
            <stop offset="0.5613" style="stop-color:#D2B346"/>
            <stop offset="0.6172" style="stop-color:#E6AC20"/>
            <stop offset="0.662" style="stop-color:#F2A808"/>
            <stop offset="0.6901" style="stop-color:#F7A600"/>
        </linearGradient>
        <path id="line11_1-lineD1_16" fill="url(#line11_1-lineD1_16_00000174580996149904452900000000389843450637628293_)" d="  M776.8,544.4c0.7,0.4,1,1.3,0.6,2.1c-0.4,0.7-1.4,1-2.1,0.5c-0.7-0.4-0.9-1.3-0.5-2S776.1,544,776.8,544.4z M785.4,549.4  c0.7,0.4,1,1.3,0.6,2.1c-0.4,0.7-1.4,1-2.1,0.5c-0.7-0.4-0.9-1.3-0.5-2C783.8,549.3,784.7,549,785.4,549.4z M781.1,546.9  c0.7,0.4,1,1.3,0.6,2.1c-0.4,0.7-1.4,1-2.1,0.5c-0.7-0.4-0.9-1.3-0.5-2S780.4,546.5,781.1,546.9z M772.4,541.9  c0.7,0.4,1,1.3,0.6,2.1c-0.4,0.7-1.4,1-2.1,0.5c-0.7-0.4-0.9-1.3-0.5-2C770.8,541.8,771.7,541.5,772.4,541.9z M768.1,539.4  c0.7,0.4,1,1.3,0.6,2.1c-0.4,0.7-1.4,1-2.1,0.5c-0.7-0.4-0.9-1.3-0.5-2S767.4,539,768.1,539.4z"/>
        <rect id="white_line9_4-line14_28" x="817.3" y="311.2" transform="matrix(0.866 -0.5 0.5 0.866 -51.6658 452.3713)" fill="#FFFFFF" width="2" height="22.8"/>
        <linearGradient id="line9_5-line10_4_00000056391525015053370790000009335866943826104196_" gradientUnits="userSpaceOnUse" x1="864.2321" y1="25609.0469" x2="885.2174" y2="25654.2207" gradientTransform="matrix(0.9998 -1.750000e-02 -1.750000e-02 -0.9998 348.3227 26033.291)">
            <stop offset="0.7157" style="stop-color:#BED12E"/>
            <stop offset="0.8565" style="stop-color:#ADACAC"/>
        </linearGradient>
        <path id="line9_5-line10_4" fill="url(#line9_5-line10_4_00000056391525015053370790000009335866943826104196_)" d="M775.1,381.2  c0.6,1.8,1.2,3.6,1.8,5.4c1.4-0.8,5.2-3.4,7-8.3c1-2.5,1.1-4.8,1-6.3c-0.9,0.3-1.8,0.6-2.8,0.9c-0.9,0.3-1.9,0.5-2.8,0.8  c-0.1,0.9-0.4,2.5-1.3,4.3C777,379.5,775.8,380.6,775.1,381.2z"/>
        <linearGradient id="line9_10-line10_8_00000104703235378302710760000016554102839319925122_" gradientUnits="userSpaceOnUse" x1="91865.875" y1="15518.5596" x2="91875.8516" y2="15518.5596" gradientTransform="matrix(-0.5831 0 0 -0.5831 54360.6641 9762.9219)">
            <stop offset="0.2068" style="stop-color:#BED12E"/>
            <stop offset="0.8728" style="stop-color:#ADACAC"/>
        </linearGradient>
        <rect id="line9_10-line10_8" x="787.6" y="710.8" fill="url(#line9_10-line10_8_00000104703235378302710760000016554102839319925122_)" width="5.9" height="6.5"/>
        <rect id="white_line9_10-line10_8" x="779.3" y="713.1" fill="#FFFFFF" width="20.9" height="2"/>
        <linearGradient id="line9_16-line14_13_00000029043101590598652420000015420871056039315854_" gradientUnits="userSpaceOnUse" x1="24555.6973" y1="17932.043" x2="24579.6289" y2="17927.8828" gradientTransform="matrix(-1.3561 0.6972 -0.6923 -1.3465 46531.1602 8353.7383)">
            <stop offset="0.2041" style="stop-color:#D14A43"/>
            <stop offset="0.8671" style="stop-color:#ADACAC"/>
        </linearGradient>
        <path id="line9_16-line14_13" fill="url(#line9_16-line14_13_00000029043101590598652420000015420871056039315854_)" d="  M806.1,1334.7c0.6-0.5,1.6-0.4,2.1,0.3c0.5,0.7,0.4,1.6-0.3,2.1s-1.6,0.3-2.1-0.3C805.4,1336.1,805.5,1335.2,806.1,1334.7z   M810.1,1331.7c0.6-0.5,1.6-0.4,2.1,0.3c0.5,0.7,0.4,1.6-0.3,2.1s-1.6,0.3-2.1-0.3C809.4,1333.1,809.5,1332.2,810.1,1331.7z   M802.1,1337.7c0.6-0.5,1.6-0.4,2.1,0.3c0.5,0.7,0.4,1.6-0.3,2.1s-1.6,0.3-2.1-0.3C801.4,1339.1,801.5,1338.2,802.1,1337.7z   M798.1,1340.7c0.6-0.5,1.6-0.4,2.1,0.3c0.5,0.7,0.4,1.6-0.3,2.1s-1.6,0.3-2.1-0.3C797.4,1342.1,797.5,1341.2,798.1,1340.7z   M794.1,1343.7c0.6-0.5,1.6-0.4,2.1,0.3c0.5,0.7,0.4,1.6-0.3,2.1s-1.6,0.3-2.1-0.3C793.4,1345.1,793.5,1344.2,794.1,1343.7z   M790.1,1346.7c0.6-0.5,1.6-0.4,2.1,0.3c0.5,0.7,0.4,1.6-0.3,2.1s-1.6,0.3-2.1-0.3C789.4,1348.1,789.5,1347.2,790.1,1346.7z"/>
        <linearGradient id="line9_25-line12_3_00000034084514350870695100000010260240798849020290_" gradientUnits="userSpaceOnUse" x1="92416.0391" y1="13245.5361" x2="92426.0156" y2="13245.5361" gradientTransform="matrix(-0.5831 0 0 -0.5831 54660.5625 9467.0225)">
            <stop offset="0.2068" style="stop-color:#ADACAC"/>
            <stop offset="0.8728" style="stop-color:#BAC8E8"/>
        </linearGradient>
        <rect id="line9_25-line12_3" x="766.7" y="1740.3" fill="url(#line9_25-line12_3_00000034084514350870695100000010260240798849020290_)" width="5.9" height="6.5"/>
        <rect id="white_line9_25-line12_3" x="759.2" y="1742.5" fill="#FFFFFF" width="20.9" height="2"/>
        <linearGradient id="line9_6-line13_6_00000161603528570583422440000008482220260717688234_" gradientUnits="userSpaceOnUse" x1="7337.9897" y1="-25439.7324" x2="7334.3516" y2="-25447.3809" gradientTransform="matrix(0.9659 -0.2588 0.2588 0.9659 291.0516 26932.1973)">
            <stop offset="0" style="stop-color:#0A72B9"/>
            <stop offset="1" style="stop-color:#ADACAC"/>
        </linearGradient>
        <path id="line9_6-line13_6" fill="url(#line9_6-line13_6_00000161603528570583422440000008482220260717688234_)" d="M792.8,455.9  c0.6,0.6,0.5,1.5-0.1,2.1s-1.5,0.6-2.1,0.1c-0.6-0.6-0.6-1.5,0-2.1S792.2,455.3,792.8,455.9z M796.3,459.4c0.6,0.6,0.5,1.5-0.1,2.1  s-1.5,0.6-2.1,0.1c-0.6-0.6-0.6-1.5,0-2.1C794.8,458.7,795.8,458.8,796.3,459.4z M789.3,452.4c0.6,0.6,0.5,1.5-0.1,2.1  s-1.5,0.6-2.1,0.1c-0.6-0.6-0.6-1.5,0-2.1C787.8,451.7,788.8,451.9,789.3,452.4z"/>
        <linearGradient id="line10_3-lineD1_12_00000111873464912294220960000002424998697383915658_" gradientUnits="userSpaceOnUse" x1="36570.6641" y1="11451.8916" x2="36598.8672" y2="11446.9902" gradientTransform="matrix(-1.4743 -0.3893 0.3866 -1.4639 50242.1328 31323.7988)">
            <stop offset="0.4064" style="stop-color:#F7A600"/>
            <stop offset="0.5053" style="stop-color:#DEB915"/>
            <stop offset="0.6187" style="stop-color:#C6CB27"/>
            <stop offset="0.6901" style="stop-color:#BED12E"/>
        </linearGradient>
        <path id="line10_3-lineD1_12" fill="url(#line10_3-lineD1_12_00000111873464912294220960000002424998697383915658_)" d="  M730.4,318.9c0.8,0,1.5,0.8,1.4,1.6c-0.1,0.8-0.8,1.4-1.6,1.4c-0.8-0.1-1.4-0.8-1.3-1.6C728.9,319.5,729.6,318.9,730.4,318.9z   M740.3,319.8c0.8,0,1.5,0.8,1.4,1.6c-0.1,0.8-0.8,1.4-1.6,1.4c-0.8-0.1-1.4-0.8-1.3-1.6C738.8,320.3,739.5,319.7,740.3,319.8z   M735.3,319.3c0.8,0,1.5,0.8,1.4,1.6c-0.1,0.8-0.8,1.4-1.6,1.4c-0.8-0.1-1.4-0.8-1.3-1.6C733.8,319.9,734.5,319.3,735.3,319.3z   M725.4,318.5c0.8,0,1.5,0.8,1.4,1.6c-0.1,0.8-0.8,1.4-1.6,1.4c-0.8-0.1-1.4-0.8-1.3-1.6C723.9,319,724.6,318.4,725.4,318.5z   M720.4,318c0.8,0,1.5,0.8,1.4,1.6c-0.1,0.8-0.8,1.4-1.6,1.4c-0.8-0.1-1.4-0.8-1.3-1.6C718.9,318.6,719.6,318,720.4,318z   M715.4,317.6c0.8,0,1.5,0.8,1.4,1.6c-0.1,0.8-0.8,1.4-1.6,1.4c-0.8-0.1-1.4-0.8-1.3-1.6C713.9,318.2,714.6,317.5,715.4,317.6z   M745.3,320.2c0.8,0,1.5,0.8,1.4,1.6c-0.1,0.8-0.8,1.4-1.6,1.4c-0.8-0.1-1.4-0.8-1.3-1.6C743.8,320.8,744.5,320.2,745.3,320.2z"/>
        <linearGradient id="line10_5-line13_5_00000165946571811426522210000004028037727059817656_" gradientUnits="userSpaceOnUse" x1="18666.1094" y1="-27516.1797" x2="18662.4707" y2="-27523.8281" gradientTransform="matrix(0.788 -0.6157 0.6157 0.788 3073.9968 33617.3398)">
            <stop offset="0" style="stop-color:#0A72B9"/>
            <stop offset="1" style="stop-color:#BED12E"/>
        </linearGradient>
        <path id="line10_5-line13_5" fill="url(#line10_5-line13_5_00000165946571811426522210000004028037727059817656_)" d="M837.1,438.1  c0.7,0.3,1,1.2,0.7,1.9s-1.1,1.2-1.9,0.9s-1.2-1.1-0.8-2C835.5,438.1,836.4,437.8,837.1,438.1z M841.7,440c0.7,0.3,1,1.2,0.7,1.9  s-1.1,1.2-1.9,0.9s-1.2-1.1-0.8-2C840,439.9,841,439.7,841.7,440z M832.6,436.3c0.7,0.3,1,1.2,0.7,1.9s-1.1,1.2-1.9,0.9  s-1.2-1.1-0.8-2C830.9,436.2,831.9,436,832.6,436.3z"/>
        <linearGradient id="line10_7-lineD2_15_00000005227183962556853570000010027770057650512264_" gradientUnits="userSpaceOnUse" x1="39211.707" y1="-5952.021" x2="39200.7617" y2="-5950.1187" gradientTransform="matrix(-0.5267 -1.4309 1.4209 -0.523 29978.3164 53513.7227)">
            <stop offset="0" style="stop-color:#E94282"/>
            <stop offset="1" style="stop-color:#BED12E"/>
        </linearGradient>
        <path id="line10_7-lineD2_15" opacity="0.25" fill="url(#line10_7-lineD2_15_00000005227183962556853570000010027770057650512264_)" d="  M874,525.5c0.4,0.7,0.1,1.6-0.6,2c-0.7,0.4-1.6,0.2-2-0.5s-0.2-1.6,0.5-2C872.7,524.5,873.6,524.8,874,525.5z M876.5,529.8  c0.4,0.7,0.1,1.6-0.6,2c-0.7,0.4-1.6,0.2-2-0.5s-0.2-1.6,0.5-2C875.1,528.7,876.1,529.1,876.5,529.8z M871.5,521.2  c0.4,0.7,0.1,1.6-0.6,2c-0.7,0.4-1.6,0.2-2-0.5s-0.2-1.6,0.5-2C870.2,520.1,871.2,520.6,871.5,521.2z"/>
        <rect id="white_line10_7-line11_31" x="885" y="538.8" transform="matrix(0.866 -0.5 0.5 0.866 -155.9205 516.5874)" fill="#FFFFFF" width="2" height="20.9"/>
        <linearGradient id="line10_13-line14_10_00000175281658037337154560000016543538266910179519_" gradientUnits="userSpaceOnUse" x1="-3928.7183" y1="20248.623" x2="-3886.0833" y2="20241.2129" gradientTransform="matrix(-3.940000e-02 0.9992 -0.9992 -3.940000e-02 21202.207 5920.2515)">
            <stop offset="0.1828" style="stop-color:#BED12E"/>
            <stop offset="0.8876" style="stop-color:#D14A43"/>
        </linearGradient>
        <path id="line10_13-line14_10" fill="url(#line10_13-line14_10_00000175281658037337154560000016543538266910179519_)" d="  M1128,1222.6c-0.3,0.8-1.2,1.1-2,0.8c-0.8-0.3-1.1-1.3-0.7-2c0.3-0.7,1.2-1.1,2-0.7C1128,1220.9,1128.3,1221.8,1128,1222.6z   M1123.9,1231.7c-0.3,0.8-1.2,1.1-2,0.8c-0.8-0.3-1.1-1.3-0.7-2c0.3-0.7,1.2-1.1,2-0.7C1123.9,1230.1,1124.2,1230.9,1123.9,1231.7z   M1125.9,1227.1c-0.3,0.8-1.2,1.1-2,0.8c-0.8-0.3-1.1-1.3-0.7-2c0.3-0.7,1.2-1.1,2-0.7C1125.9,1225.5,1126.2,1226.4,1125.9,1227.1z   M1130.1,1218c-0.3,0.8-1.2,1.1-2,0.8c-0.8-0.3-1.1-1.3-0.7-2c0.3-0.7,1.2-1.1,2-0.7C1130,1216.4,1130.4,1217.3,1130.1,1218z   M1132.1,1213.4c-0.3,0.8-1.2,1.1-2,0.8c-0.8-0.3-1.1-1.3-0.7-2c0.3-0.7,1.2-1.1,2-0.7C1132.1,1211.8,1132.4,1212.7,1132.1,1213.4z   M1134.2,1208.9c-0.3,0.8-1.2,1.1-2,0.8c-0.8-0.3-1.1-1.3-0.7-2c0.3-0.7,1.2-1.1,2-0.7C1134.1,1207.3,1134.5,1208.1,1134.2,1208.9z   M1136.2,1204.3c-0.3,0.8-1.2,1.1-2,0.8c-0.8-0.3-1.1-1.3-0.7-2c0.3-0.7,1.2-1.1,2-0.7C1136.2,1202.7,1136.5,1203.6,1136.2,1204.3z   M1121.8,1236.2c-0.3,0.8-1.2,1.1-2,0.8c-0.8-0.3-1.1-1.3-0.7-2c0.3-0.7,1.2-1.1,2-0.7C1121.8,1234.6,1122.1,1235.5,1121.8,1236.2z"/>
        <linearGradient id="line10_14-line14_10_00000005971849663141909250000016601859890621276852_" gradientUnits="userSpaceOnUse" x1="38811.1562" y1="6256.4429" x2="38847.9062" y2="6250.0557" gradientTransform="matrix(-1.2961 -0.8033 0.7977 -1.2869 46484.3945 40498.8281)">
            <stop offset="0.1828" style="stop-color:#BED12E"/>
            <stop offset="0.8876" style="stop-color:#D14A43"/>
        </linearGradient>
        <path id="line10_14-line14_10" fill="url(#line10_14-line14_10_00000005971849663141909250000016601859890621276852_)" d="  M1149.3,1259.6c0.8,0.3,1.2,1.2,0.9,2c-0.3,0.8-1.2,1.1-2,0.8c-0.7-0.3-1.1-1.2-0.8-1.9C1147.7,1259.7,1148.6,1259.3,1149.3,1259.6z   M1158.6,1263.4c0.8,0.3,1.2,1.2,0.9,2c-0.3,0.8-1.2,1.1-2,0.8c-0.7-0.3-1.1-1.2-0.8-1.9C1157,1263.5,1157.8,1263.1,1158.6,1263.4z   M1154,1261.5c0.8,0.3,1.2,1.2,0.9,2c-0.3,0.8-1.2,1.1-2,0.8c-0.7-0.3-1.1-1.2-0.8-1.9C1152.3,1261.6,1153.2,1261.2,1154,1261.5z   M1144.7,1257.7c0.8,0.3,1.2,1.2,0.9,2c-0.3,0.8-1.2,1.1-2,0.8c-0.7-0.3-1.1-1.2-0.8-1.9C1143.1,1257.8,1143.9,1257.5,1144.7,1257.7  z M1140,1255.9c0.8,0.3,1.2,1.2,0.9,2c-0.3,0.8-1.2,1.1-2,0.8c-0.7-0.3-1.1-1.2-0.8-1.9C1138.4,1256,1139.3,1255.6,1140,1255.9z   M1135.4,1254c0.8,0.3,1.2,1.2,0.9,2c-0.3,0.8-1.2,1.1-2,0.8c-0.7-0.3-1.1-1.2-0.8-1.9C1133.8,1254.1,1134.7,1253.7,1135.4,1254z   M1130.8,1252.1c0.8,0.3,1.2,1.2,0.9,2c-0.3,0.8-1.2,1.1-2,0.8c-0.7-0.3-1.1-1.2-0.8-1.9C1129.2,1252.2,1130,1251.8,1130.8,1252.1z   M1126.1,1250.2c0.8,0.3,1.2,1.2,0.9,2c-0.3,0.8-1.2,1.1-2,0.8c-0.7-0.3-1.1-1.2-0.8-1.9C1124.5,1250.3,1125.4,1250,1126.1,1250.2z   M1163.2,1265.2c0.8,0.3,1.2,1.2,0.9,2c-0.3,0.8-1.2,1.1-2,0.8c-0.7-0.3-1.1-1.2-0.8-1.9C1161.6,1265.3,1162.5,1265,1163.2,1265.2z"/>
        <linearGradient id="line10_15-lineD2_24_00000067238669492806820560000014788507598451488659_" gradientUnits="userSpaceOnUse" x1="-3813.1628" y1="20161.5039" x2="-3773.3103" y2="20178.3691" gradientTransform="matrix(-3.940000e-02 0.9992 -0.9992 -3.940000e-02 21202.207 5920.2515)">
            <stop offset="5.040000e-02" style="stop-color:#BED12E"/>
            <stop offset="0.8486" style="stop-color:#E94282"/>
        </linearGradient>
        <path id="line10_15-lineD2_24" fill="url(#line10_15-lineD2_24_00000067238669492806820560000014788507598451488659_)" d="  M1199.2,1336.2c-0.3,0.8-1.2,1.1-2,0.8c-0.8-0.3-1.1-1.3-0.7-2c0.3-0.7,1.2-1.1,2-0.7C1199.1,1334.6,1199.5,1335.4,1199.2,1336.2z   M1195,1345.3c-0.3,0.8-1.2,1.1-2,0.8c-0.8-0.3-1.1-1.3-0.7-2c0.3-0.7,1.2-1.1,2-0.7C1195,1343.7,1195.4,1344.6,1195,1345.3z   M1197.1,1340.7c-0.3,0.8-1.2,1.1-2,0.8c-0.8-0.3-1.1-1.3-0.7-2c0.3-0.7,1.2-1.1,2-0.7C1197.1,1339.1,1197.4,1340,1197.1,1340.7z   M1201.2,1331.6c-0.3,0.8-1.2,1.1-2,0.8c-0.8-0.3-1.1-1.3-0.7-2c0.3-0.7,1.2-1.1,2-0.7C1201.2,1330,1201.5,1330.9,1201.2,1331.6z   M1203.3,1327.1c-0.3,0.8-1.2,1.1-2,0.8c-0.8-0.3-1.1-1.3-0.7-2c0.3-0.7,1.2-1.1,2-0.7C1203.2,1325.4,1203.6,1326.3,1203.3,1327.1z   M1205.3,1322.5c-0.3,0.8-1.2,1.1-2,0.8c-0.8-0.3-1.1-1.3-0.7-2c0.3-0.7,1.2-1.1,2-0.7C1205.3,1320.9,1205.6,1321.8,1205.3,1322.5z   M1207.4,1317.9c-0.3,0.8-1.2,1.1-2,0.8c-0.8-0.3-1.1-1.3-0.7-2c0.3-0.7,1.2-1.1,2-0.7C1207.3,1316.3,1207.7,1317.2,1207.4,1317.9z   M1193,1349.8c-0.3,0.8-1.2,1.1-2,0.8c-0.8-0.3-1.1-1.3-0.7-2c0.3-0.7,1.2-1.1,2-0.7C1193,1348.2,1193.3,1349.1,1193,1349.8z"/>
        <g id="line11_25-line14_7">
            <g>

                <linearGradient id="SVGID_00000097498351863463414750000003232442577595462275_" gradientUnits="userSpaceOnUse" x1="1348.5669" y1="-21216.7793" x2="1360.4137" y2="-21196.2598" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3712" style="stop-color:#D14A43"/>
                    <stop offset="0.7011" style="stop-color:#89CDCF"/>
                </linearGradient>
                <path fill="none" stroke="url(#SVGID_00000097498351863463414750000003232442577595462275_)" stroke-miterlimit="10" d="    M1357.7,974.9c-0.1-0.1-0.2-0.3-0.3-0.4c-0.2,0.1-0.3,0.1-0.5,0.2"/>

                <linearGradient id="SVGID_00000071517227045813909240000017847066338890105729_" gradientUnits="userSpaceOnUse" x1="1340.2573" y1="-21211.9824" x2="1352.1041" y2="-21191.4629" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3712" style="stop-color:#D14A43"/>
                    <stop offset="0.7011" style="stop-color:#89CDCF"/>
                </linearGradient>

                <path fill="none" stroke="url(#SVGID_00000071517227045813909240000017847066338890105729_)" stroke-miterlimit="10" stroke-dasharray="1.0127,1.0127" d="    M1356,975.1c-5.2,2-11.3,1.7-16.4-1.3c-2-1.2-3.7-2.7-5.1-4.4"/>

                <linearGradient id="SVGID_00000119103542562540956530000008039995367654953658_" gradientUnits="userSpaceOnUse" x1="1333.3636" y1="-21208.002" x2="1345.2104" y2="-21187.4824" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3712" style="stop-color:#D14A43"/>
                    <stop offset="0.7011" style="stop-color:#89CDCF"/>
                </linearGradient>
                <path fill="none" stroke="url(#SVGID_00000119103542562540956530000008039995367654953658_)" stroke-miterlimit="10" d="    M1334.1,969c-0.1-0.1-0.2-0.3-0.3-0.4c-0.1,0.1-0.3,0.2-0.4,0.2"/>

                <linearGradient id="SVGID_00000093168965542581174710000011958921564471733900_" gradientUnits="userSpaceOnUse" x1="1330.8519" y1="-21206.5527" x2="1342.6987" y2="-21186.0332" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3712" style="stop-color:#D14A43"/>
                    <stop offset="0.7011" style="stop-color:#89CDCF"/>
                </linearGradient>

                <path fill="none" stroke="url(#SVGID_00000093168965542581174710000011958921564471733900_)" stroke-miterlimit="10" stroke-dasharray="0.911,0.911" d="    M1332.6,969.3c-0.9,0.5-1.9,1-2.8,1.5"/>

                <linearGradient id="SVGID_00000093174523371623437450000011218057192619508623_" gradientUnits="userSpaceOnUse" x1="1328.5779" y1="-21205.2383" x2="1340.4247" y2="-21184.7188" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3712" style="stop-color:#D14A43"/>
                    <stop offset="0.7011" style="stop-color:#89CDCF"/>
                </linearGradient>
                <path fill="none" stroke="url(#SVGID_00000093174523371623437450000011218057192619508623_)" stroke-miterlimit="10" d="    M1329.3,970.9c-0.1,0.1-0.3,0.2-0.4,0.2c0.1,0.1,0.2,0.3,0.3,0.4"/>

                <linearGradient id="SVGID_00000062166326574797083590000013601014952985371305_" gradientUnits="userSpaceOnUse" x1="1338.1906" y1="-21210.791" x2="1350.0374" y2="-21190.2715" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3712" style="stop-color:#D14A43"/>
                    <stop offset="0.7011" style="stop-color:#89CDCF"/>
                </linearGradient>

                <path fill="none" stroke="url(#SVGID_00000062166326574797083590000013601014952985371305_)" stroke-miterlimit="10" stroke-dasharray="0.984,0.984" d="    M1329.8,972.4c1.9,2.4,4.3,4.5,7.1,6.1c7.2,4.1,15.6,4.2,22.6,1"/>

                <linearGradient id="SVGID_00000017511464153125445530000007172356206323372188_" gradientUnits="userSpaceOnUse" x1="1348.8636" y1="-21216.9512" x2="1360.7106" y2="-21196.4316" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3712" style="stop-color:#D14A43"/>
                    <stop offset="0.7011" style="stop-color:#89CDCF"/>
                </linearGradient>
                <path fill="none" stroke="url(#SVGID_00000017511464153125445530000007172356206323372188_)" stroke-miterlimit="10" d="    M1360,979.3c0.2-0.1,0.3-0.1,0.4-0.2c-0.1-0.1-0.2-0.3-0.3-0.4"/>

                <linearGradient id="SVGID_00000132078772562240341800000015555013656818347678_" gradientUnits="userSpaceOnUse" x1="1348.7095" y1="-21216.8633" x2="1360.5563" y2="-21196.3438" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.3712" style="stop-color:#D14A43"/>
                    <stop offset="0.7011" style="stop-color:#89CDCF"/>
                </linearGradient>

                <path fill="none" stroke="url(#SVGID_00000132078772562240341800000015555013656818347678_)" stroke-miterlimit="10" stroke-dasharray="0.8986,0.8986" d="    M1359.7,978c-0.6-0.9-1.2-1.8-1.7-2.6"/>
            </g>
        </g>
        <g id="line11_25-line15_1_2_">
            <g>

                <linearGradient id="SVGID_00000072977816530867898450000001028195122764978304_" gradientUnits="userSpaceOnUse" x1="1361.9166" y1="-21240.6445" x2="1378.8109" y2="-21211.3828" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.2087" style="stop-color:#D68AB1"/>
                    <stop offset="0.8228" style="stop-color:#89CDCF"/>
                </linearGradient>
                <path fill="none" stroke="url(#SVGID_00000072977816530867898450000001028195122764978304_)" stroke-miterlimit="10" d="    M1362.7,936.3c-0.1-0.1-0.3-0.2-0.4-0.3c-0.1,0.2-0.1,0.3-0.2,0.5"/>

                <linearGradient id="SVGID_00000124127968699883083780000018090947379833274756_" gradientUnits="userSpaceOnUse" x1="1359.8228" y1="-21239.4355" x2="1376.7172" y2="-21210.1738" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.2087" style="stop-color:#D68AB1"/>
                    <stop offset="0.8228" style="stop-color:#89CDCF"/>
                </linearGradient>

                <path fill="none" stroke="url(#SVGID_00000124127968699883083780000018090947379833274756_)" stroke-miterlimit="10" stroke-dasharray="0.9464,0.9464" d="    M1361.8,937.4c-0.4,1-0.8,2.1-1.2,3.1"/>

                <linearGradient id="SVGID_00000107579279069889214120000018360663993176054966_" gradientUnits="userSpaceOnUse" x1="1358.0642" y1="-21238.4219" x2="1374.9586" y2="-21209.1602" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.2087" style="stop-color:#D68AB1"/>
                    <stop offset="0.8228" style="stop-color:#89CDCF"/>
                </linearGradient>
                <path fill="none" stroke="url(#SVGID_00000107579279069889214120000018360663993176054966_)" stroke-miterlimit="10" d="    M1360.4,940.9c-0.1,0.2-0.1,0.3-0.2,0.5c0.1,0.1,0.3,0.2,0.4,0.3"/>

                <linearGradient id="SVGID_00000144336003204485183080000018400278931228844704_" gradientUnits="userSpaceOnUse" x1="1356.759" y1="-21237.666" x2="1373.6534" y2="-21208.4043" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.2087" style="stop-color:#D68AB1"/>
                    <stop offset="0.8228" style="stop-color:#89CDCF"/>
                </linearGradient>

                <path fill="none" stroke="url(#SVGID_00000144336003204485183080000018400278931228844704_)" stroke-miterlimit="10" stroke-dasharray="1.0067,1.0067" d="    M1361.5,942.3c6.2,5.2,8.6,13.9,5.9,21.4"/>

                <linearGradient id="SVGID_00000021077738062216634340000011056257783188629655_" gradientUnits="userSpaceOnUse" x1="1353.001" y1="-21235.4961" x2="1369.8954" y2="-21206.2344" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.2087" style="stop-color:#D68AB1"/>
                    <stop offset="0.8228" style="stop-color:#89CDCF"/>
                </linearGradient>
                <path fill="none" stroke="url(#SVGID_00000021077738062216634340000011056257783188629655_)" stroke-miterlimit="10" d="    M1367.1,964.2c-0.1,0.2-0.1,0.3-0.2,0.5c0.1,0.1,0.3,0.2,0.4,0.3"/>

                <linearGradient id="SVGID_00000078039064095241752510000004806456305076145577_" gradientUnits="userSpaceOnUse" x1="1354.0646" y1="-21236.1133" x2="1370.959" y2="-21206.8496" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.2087" style="stop-color:#D68AB1"/>
                    <stop offset="0.8228" style="stop-color:#89CDCF"/>
                </linearGradient>

                <path fill="none" stroke="url(#SVGID_00000078039064095241752510000004806456305076145577_)" stroke-miterlimit="10" stroke-dasharray="0.9183,0.9183" d="    M1368.1,965.5c0.9,0.6,1.7,1.3,2.6,1.9"/>

                <linearGradient id="SVGID_00000079469313933333352750000017991606390473638828_" gradientUnits="userSpaceOnUse" x1="1354.9023" y1="-21236.5938" x2="1371.7968" y2="-21207.332" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.2087" style="stop-color:#D68AB1"/>
                    <stop offset="0.8228" style="stop-color:#89CDCF"/>
                </linearGradient>
                <path fill="none" stroke="url(#SVGID_00000079469313933333352750000017991606390473638828_)" stroke-miterlimit="10" d="    M1371,967.7c0.1,0.1,0.3,0.2,0.4,0.3c0.1-0.2,0.1-0.3,0.2-0.5"/>

                <linearGradient id="SVGID_00000014594535833283507620000006669694040168849057_" gradientUnits="userSpaceOnUse" x1="1360.3258" y1="-21239.7266" x2="1377.2202" y2="-21210.4648" gradientTransform="matrix(1 0 0 1 0 22176)">
                    <stop offset="0.2087" style="stop-color:#D68AB1"/>
                    <stop offset="0.8228" style="stop-color:#89CDCF"/>
                </linearGradient>

                <path fill="none" stroke="url(#SVGID_00000014594535833283507620000006669694040168849057_)" stroke-miterlimit="10" stroke-dasharray="1.0126,1.0126" d="    M1372.1,966.6c4.5-10.8,0.8-23.4-8.9-30"/>
            </g>
        </g>
        <rect id="white_line14_8-lineD2_21" x="1288.6" y="1059.7" fill="#FFFFFF" width="22.8" height="2"/>
        <path id="line7_17" fill="#943F90" d="M1308,1215.9c3.9,2.3,9,0.9,11.3-3s0.9-9-3-11.3s-9-0.9-11.3,3  C1302.8,1208.5,1304.1,1213.6,1308,1215.9z M1308.5,1206.5c1.1-2,3.8-2.7,5.8-1.6c2.1,1.2,2.6,3.8,1.5,5.8s-3.7,2.8-5.7,1.7  C1308,1211.3,1307.3,1208.5,1308.5,1206.5z"/>
        <rect id="line7_16-line7_17" x="1263.2" y="1105" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -451.3606 1235.6969)" fill="#943F90" width="5.5" height="115.4"/>
        <path id="line10_16" fill="#BED12E" d="M1208,1315.7c3.9,2.3,9,0.9,11.3-3s0.9-9-3-11.3s-9-0.9-11.3,3  C1202.8,1308.3,1204.1,1313.4,1208,1315.7z M1208.5,1306.4c1.1-2,3.8-2.7,5.8-1.6c2.1,1.2,2.6,3.8,1.5,5.8s-3.7,2.8-5.7,1.7  C1208,1311.1,1207.3,1308.3,1208.5,1306.4z"/>
        <path id="line10_16-line10_17" fill="#BED12E" d="M1242.6,1357.6c1.8,0,3.7,0,5.5,0v-3.7c0-8.5-3.3-16.6-9.3-22.6l-19.5-19.5  c-1.2,1.4-2.5,2.7-3.7,4.1l19,19c5.2,5.3,8.1,12.3,8.1,19.7L1242.6,1357.6L1242.6,1357.6z"/>
        <path id="line10_15-line10_16" fill="#BED12E" d="M1208.8,1301.3c-9.5-9.5-19-19-28.5-28.5c-1.3,1.3-2.6,2.6-3.9,3.8l28.6,28.6  C1206.2,1303.9,1207.5,1302.6,1208.8,1301.3z"/>
        <rect id="line3_7-line3_8" x="182.9" y="696.7" fill="#0072BA" width="5.5" height="130"/>
        <path id="line3_8" fill="#0572B9" d="M181.6,841.1c3.9,2.3,9,0.9,11.3-3s0.9-9-3-11.3s-9-0.9-11.3,3S177.6,838.8,181.6,841.1z   M182.1,831.8c1.1-2,3.8-2.7,5.8-1.6c2.1,1.2,2.6,3.8,1.5,5.8s-3.7,2.8-5.7,1.7C181.6,836.5,180.8,833.7,182.1,831.8z"/>
        <path id="line4_13" fill="#24BCEF" d="M148.6,860.1c3.9,2.3,9,0.9,11.3-3s0.9-9-3-11.3s-9-0.9-11.3,3  C143.3,852.8,144.7,857.8,148.6,860.1z M148.9,850.9c1.2-2,3.9-2.7,5.9-1.5c2.1,1.2,2.6,3.8,1.5,5.7c-1.1,2.1-3.7,2.7-5.8,1.6  C148.5,855.6,147.8,852.9,148.9,850.9z"/>
        <path id="white_line3_8-line4_13" fill="#FFFFFF" d="M185.6,841.6c0.4-1.2,0.8-2.5,1-3.8c-0.8-0.1-1.7-0.1-2.5-0.2  c-0.2,1.2-0.6,2.4-1,3.6c-3,7.9-10.6,13.6-19.4,13.6c-1.3,0-2.5-0.1-3.8-0.4c-1.2-0.2-2.4-0.6-3.5-1c-0.3,0.7-0.6,1.5-0.8,2.2  c1.2,0.4,2.4,0.8,3.6,1c1.5,0.3,3,0.5,4.5,0.5C173.7,857.1,182.4,850.6,185.6,841.6z"/>
        <path id="line8_5" fill="#FFCD1E" d="M1282,860.4c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2S1286.6,860.4,1282,860.4z   M1286.3,868.7c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3C1284.4,864.5,1286.3,866.4,1286.3,868.7z"/>
        <path id="line14_6-line14_7" fill="#FFFFFF" stroke="#D14A43" stroke-width="0.9" stroke-miterlimit="10" d="M1339.6,894.3  c-2.8,20.7-6.9,41.1-12.2,61c1.8,0.5,3.5,1,5.3,1.5c5.4-20.1,9.5-40.7,12.3-61.7C1343.2,894.7,1341.4,894.5,1339.6,894.3z"/>
        <path id="line14_7" fill="#FFFFFF" stroke="#D14A43" stroke-miterlimit="10" d="M1328.1,971.1c4.4,0,8-3.6,8-8s-3.6-8-8-8  s-8,3.6-8,8S1323.7,971.1,1328.1,971.1z M1324,963.1c0-2.1,1.8-4,4.1-4c2.2,0,3.9,1.9,3.9,4s-1.7,4-3.9,4  C1325.8,967.1,1324,965.2,1324,963.1z"/>
        <circle id="line14_6" fill="#FFFFFF" stroke="#D14A43" stroke-miterlimit="10" cx="1342.7" cy="890.4" r="5"/>
        <path id="line3_17" fill="#0572B9" d="M1214,739c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2S1218.5,739,1214,739z   M1218.3,747.3c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3C1216.3,743.1,1218.3,745,1218.3,747.3z"/>
        <path id="line1_4" fill="#D14A43" d="M1146.3,594.8c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  S1150.8,594.8,1146.3,594.8z M1150.6,603c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C1148.7,598.8,1150.6,600.8,1150.6,603z"/>
        <path id="line10_7" fill="#BED12E" d="M881.1,532.6c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  C889.4,536.3,885.6,532.6,881.1,532.6z M885.3,541c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C883.5,536.7,885.4,538.7,885.3,541z"/>
        <path id="line9_19" fill="#ADACAC" d="M780.2,1494.8c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  S784.7,1494.8,780.2,1494.8z M784.5,1503.1c0,2.3-1.9,4.2-4.3,4.2c-2.4,0-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C782.5,1498.8,784.5,1500.8,784.5,1503.1z"/>
        <path id="line1_18" fill="#D14A43" d="M458.8,1349.2c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  S463.3,1349.2,458.8,1349.2z M463.1,1357.5c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C461.1,1353.2,463.1,1355.2,463.1,1357.5z"/>
        <path id="line8A_10" fill="#FFCD1E" d="M319.2,1306.4c0,4.5,3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2s-3.7-8.2-8.2-8.2  C322.9,1298.1,319.2,1301.8,319.2,1306.4z M327.5,1302.1c2.4,0.1,4.2,2,4.2,4.3c-0.1,2.2-1.8,4.2-4.2,4.2c-2.4,0-4.3-1.9-4.3-4.2  C323.2,1304.1,325.1,1302.1,327.5,1302.1z"/>
        <path id="lineD1_22" fill="#F7A600" d="M108.2,889.4c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  S112.7,889.4,108.2,889.4z M112.3,897.8c0,2.2-1.9,4.1-4.2,4.1c-2.3,0-4-2-4.1-4.1c0-2.2,1.8-4.1,4.1-4.2  C110.5,893.5,112.4,895.5,112.3,897.8z"/>
        <path id="line14_19-line14_20" fill="#FFFFFF" stroke="#D14A43" stroke-width="0.9" stroke-miterlimit="10" d="M359,732  c-3.5,17.4-6,35.1-7.6,53.1c1.8,0.1,3.7,0.3,5.5,0.4c1.6-17.8,4.1-35.2,7.6-52.4C362.6,732.7,360.8,732.4,359,732z"/>
        <path id="line14_20" fill="#FFFFFF" stroke="#D14A43" stroke-miterlimit="10" d="M363.2,717.1c-4.4,0-8,3.6-8,8s3.6,8,8,8s8-3.6,8-8  S367.6,717.1,363.2,717.1z M367.2,725.1c0,2.1-1.8,4-4.1,4c-2.2,0-3.9-1.9-3.9-4s1.7-4,3.9-4C365.4,721,367.3,722.9,367.2,725.1z"/>
        <path id="line14_19" fill="#FFFFFF" stroke="#D14A43" stroke-miterlimit="10" d="M353.5,784.8c-4.4,0-8,3.6-8,8s3.6,8,8,8s8-3.6,8-8  S357.9,784.8,353.5,784.8z M357.5,792.8c0,2.1-1.8,4-4.1,4c-2.2,0-3.9-1.9-3.9-4s1.7-4,3.9-4C355.7,788.7,357.6,790.6,357.5,792.8z"/>
        <path id="line10_4" fill="#BED12E" d="M774.4,380.4c-3.3-3.1-8.5-3.1-11.7,0.2c-3.1,3.3-3.1,8.5,0.2,11.7c3.3,3.1,8.5,3.1,11.7-0.2  C777.7,388.8,777.6,383.6,774.4,380.4z M771.7,389.3c-1.5,1.6-4.2,1.7-5.9,0c-1.6-1.6-1.5-4.2-0.1-5.8c1.5-1.6,4.1-1.7,5.8-0.2  C773.2,385,773.2,387.7,771.7,389.3z"/>
        <path id="white_line9_5-line10_4" fill="#FFFFFF" d="M782.8,368.3c-0.8,0.3-1.5,0.7-2.3,1c0.3,1,0.4,2.1,0.4,3.2  c0,5.6-3.7,10.3-8.8,11.9c0.1,0.8,0.3,1.7,0.4,2.5c6.2-1.8,10.9-7.6,10.9-14.4C783.4,371,783.2,369.6,782.8,368.3z"/>
        <path id="line9_6" fill="#ADACAC" d="M780.2,437.7c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2S784.7,437.7,780.2,437.7  z M784.4,445.9c0,2.2-1.9,4.1-4.2,4.1s-4-2-4.1-4.1c0-2.2,1.8-4.1,4.1-4.2C782.5,441.8,784.4,443.7,784.4,445.9z"/>
        <path id="lineD1_16" fill="#F7A600" d="M756.3,528.3c-4.5,0.1-8.2,3.9-8.1,8.4s3.9,8.2,8.4,8.1s8.2-3.9,8.1-8.4  S760.8,528.2,756.3,528.3z M760.6,536.5c0,2.2-1.8,4.2-4.1,4.2s-4.1-1.9-4.1-4c-0.1-2.2,1.7-4.2,4-4.2  C758.7,532.3,760.6,534.2,760.6,536.5z"/>
        <path id="line10_4-line10_5" fill="#BED12E" d="M776.1,389.9c12.7,12.7,25.4,25.4,38,38l-3.9,3.9c-12.7-12.7-25.4-25.4-38-38  C773.5,392.5,774.8,391.2,776.1,389.9z"/>
        <path id="lineD2_14-lineD2_16" fill="#FFFFFF" stroke="#E94282" stroke-width="1.5" stroke-miterlimit="10" d="M912.7,518.5  c-5.8-5.8-13.7-9.1-21.9-9.1h-17.1l0,0h-98.1v4H871l0,0h19.8c7.2,0,14.1,2.8,19.1,7.9c29.7,29.7,59.4,59.4,89.1,89.1  c1-0.9,2-1.8,3-2.6C972.2,578,942.4,548.2,912.7,518.5z"/>
        <path id="lineD2_22" fill="#E94282" d="M1298.1,1252.7c3.9,2.3,9,0.9,11.3-3s0.9-9-3-11.3s-9-0.9-11.3,3  C1292.8,1245.4,1294.2,1250.4,1298.1,1252.7z M1298.5,1243.4c1.2-2,3.9-2.7,5.9-1.5c2.1,1.2,2.6,3.8,1.5,5.7  c-1.1,2.1-3.7,2.7-5.8,1.6C1298.1,1248.1,1297.3,1245.5,1298.5,1243.4z"/>
        <path id="white_line7_17-lineD2_22" fill="#FFFFFF" d="M1315.4,1210.9c-0.6,0.5-1.3,1.1-1.9,1.6c2.3,3.4,3.7,7.5,3.7,11.9  c0,8.3-4.9,15.5-11.9,18.8c0.2,0.8,0.4,1.6,0.7,2.3c8.1-3.7,13.7-11.8,13.7-21.2C1319.8,1219.3,1318.2,1214.7,1315.4,1210.9z"/>
        <path id="lineD2_30" fill="none" stroke="#E94282" stroke-miterlimit="10" stroke-dasharray="1" d="M945.9,1589.3  c2.6,2.6,5.2,5.2,7.8,7.8l3.9-3.9c-2.6-2.6-5.2-5.2-7.8-7.8C948.5,1586.7,947.2,1588,945.9,1589.3z"/>
        <path id="lineD2_29-lineD2_31" fill="#FFFFFF" stroke="#E94282" stroke-width="1.5" stroke-miterlimit="10" d="M940.9,1638.9v-17.8  c0-7.2,2.8-14.1,7.9-19.1l58.6-58.6l-2.9-2.7c-19.5,19.5-39,39-58.5,58.5c-5.8,5.8-9.1,13.7-9.1,21.9v17.8  C938.2,1638.9,939.5,1638.9,940.9,1638.9z"/>
        <circle id="lineD2_31" fill="#FFFFFF" stroke="#E94282" stroke-miterlimit="10" cx="938.9" cy="1641.3" r="3"/>
        <path id="lineD2_10-lineD2_11" fill="#FFFFFF" stroke="#E94282" stroke-width="1.5" stroke-miterlimit="10" d="M350.9,513.3  c31.2,0,62.5,0,93.7,0l-0.1-3.9c-31.2,0-62.4,0-93.6,0C350.9,510.7,350.9,512,350.9,513.3z"/>
        <path id="lineD2_9-lineD2_10" fill="#FFFFFF" stroke="#E94282" stroke-width="1.5" stroke-miterlimit="10" d="M332,509.4  c-10.5,0-19-8.5-19-19v-1V385.6h-4v103.8v0.9v0.3l0,0c0.2,12.6,10.4,22.7,23,22.7c2.3,0,4.7,0,7,0c0-1.3,0-2.6,0-3.9  C336.7,509.4,334.3,509.4,332,509.4z"/>
        <path id="lineD2_11" fill="#E94282" d="M451.9,503.1c-4.5,0-8.2,3.7-8.2,8.2c0,4.5,3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  S456.4,503.1,451.9,503.1z M456,511.4c0,2.2-1.9,4.1-4.2,4.1c-2.3,0-4-2-4.1-4.1c0-2.2,1.8-4.1,4.1-4.2  C454.2,507.2,456.1,509.2,456,511.4z"/>
        <path id="lineD2_14" fill="#E94282" d="M774.3,505.4c-3.3-3.1-8.5-3.1-11.7,0.2c-3.1,3.3-3.1,8.5,0.2,11.7c3.3,3.1,8.5,3.1,11.7-0.2  C777.6,513.8,777.5,508.6,774.3,505.4z M771.6,514.3c-1.5,1.6-4.2,1.7-5.9,0c-1.6-1.6-1.5-4.2-0.1-5.8c1.5-1.6,4.1-1.7,5.8-0.2  C773.1,510,773.1,512.7,771.6,514.3z"/>
        <path id="lineD2_16" fill="#E94282" d="M1005.5,605.8c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  S1010,605.8,1005.5,605.8z M1009.8,614c0,2.3-1.9,4.2-4.3,4.2c-2.4,0-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C1007.9,609.7,1009.8,611.8,1009.8,614z"/>
        <linearGradient id="line7_7-line14_20_00000141415619377885895280000009693074955397360518_" gradientUnits="userSpaceOnUse" x1="32625.6523" y1="-11538.1982" x2="32688.0469" y2="-11527.3555" gradientTransform="matrix(-1.5236 6.080000e-02 6.030000e-02 1.5129 50864.3789 16175.2383)">
            <stop offset="0.4064" style="stop-color:#943F90"/>
            <stop offset="0.4275" style="stop-color:#9A4088"/>
            <stop offset="0.5411" style="stop-color:#B84563"/>
            <stop offset="0.6327" style="stop-color:#CA494B"/>
            <stop offset="0.6901" style="stop-color:#D14A43"/>
        </linearGradient>
        <path id="line7_7-line14_20_1_" fill="url(#line7_7-line14_20_00000141415619377885895280000009693074955397360518_)" d="  M404.7,713.1c0.8-0.2,1.6,0.3,1.8,1.1c0.2,0.8-0.4,1.6-1.2,1.8c-0.8,0.2-1.6-0.4-1.8-1.2C403.4,714.1,403.9,713.3,404.7,713.1z   M414.5,711c0.8-0.2,1.6,0.3,1.8,1.1c0.2,0.8-0.4,1.6-1.2,1.8c-0.8,0.2-1.6-0.4-1.8-1.2C413.2,712,413.7,711.2,414.5,711z   M409.6,712c0.8-0.2,1.6,0.3,1.8,1.1c0.2,0.8-0.4,1.6-1.2,1.8c-0.8,0.2-1.6-0.4-1.8-1.2C408.3,713,408.8,712.2,409.6,712z   M399.8,714.1c0.8-0.2,1.6,0.3,1.8,1.1c0.2,0.8-0.4,1.6-1.2,1.8c-0.8,0.2-1.6-0.4-1.8-1.2C398.5,715.1,399,714.3,399.8,714.1z   M394.9,715.2c0.8-0.2,1.6,0.3,1.8,1.1c0.2,0.8-0.4,1.6-1.2,1.8c-0.8,0.2-1.6-0.4-1.8-1.2C393.7,716.2,394.2,715.4,394.9,715.2z   M390,716.2c0.8-0.2,1.6,0.3,1.8,1.1c0.2,0.8-0.4,1.6-1.2,1.8c-0.8,0.2-1.6-0.4-1.8-1.2C388.8,717.2,389.3,716.4,390,716.2z   M385.2,717.3c0.8-0.2,1.6,0.3,1.8,1.1c0.2,0.8-0.4,1.6-1.2,1.8c-0.8,0.2-1.6-0.4-1.8-1.2C383.9,718.2,384.4,717.5,385.2,717.3z   M380.3,718.3c0.8-0.2,1.6,0.3,1.8,1.1c0.2,0.8-0.4,1.6-1.2,1.8c-0.8,0.2-1.6-0.4-1.8-1.2C379,719.3,379.5,718.5,380.3,718.3z   M419.4,709.9c0.8-0.2,1.6,0.3,1.8,1.1c0.2,0.8-0.4,1.6-1.2,1.8c-0.8,0.2-1.6-0.4-1.8-1.2C418.1,710.9,418.6,710.1,419.4,709.9z   M424.3,708.9c0.8-0.2,1.6,0.3,1.8,1.1c0.2,0.8-0.4,1.6-1.2,1.8c-0.8,0.2-1.6-0.4-1.8-1.2C423,709.9,423.5,709.1,424.3,708.9z   M429.2,707.9c0.8-0.2,1.6,0.3,1.8,1.1c0.2,0.8-0.4,1.6-1.2,1.8c-0.8,0.2-1.6-0.4-1.8-1.2C427.9,708.8,428.4,708,429.2,707.9z   M434,706.8c0.8-0.2,1.6,0.3,1.8,1.1c0.2,0.8-0.4,1.6-1.2,1.8c-0.8,0.2-1.6-0.4-1.8-1.2C432.8,707.8,433.3,707,434,706.8z   M438.9,705.8c0.8-0.2,1.6,0.3,1.8,1.1c0.2,0.8-0.4,1.6-1.2,1.8c-0.8,0.2-1.6-0.4-1.8-1.2C437.7,706.7,438.2,706,438.9,705.8z   M375.4,719.4c0.8-0.2,1.6,0.3,1.8,1.1c0.2,0.8-0.4,1.6-1.2,1.8c-0.8,0.2-1.6-0.4-1.8-1.2C374.1,720.3,374.6,719.5,375.4,719.4z   M443.8,704.7c0.8-0.2,1.6,0.3,1.8,1.1c0.2,0.8-0.4,1.6-1.2,1.8c-0.8,0.2-1.6-0.4-1.8-1.2C442.5,705.7,443,704.9,443.8,704.7z"/>
        <rect id="white_line14_23-lineD2_11" x="450.8" y="510.5" fill="#FFFFFF" width="2" height="20.9"/>
        <linearGradient id="line10_3-line14_27_00000092431282082798696090000004071790834860897701_" gradientUnits="userSpaceOnUse" x1="39693.4219" y1="5572.2085" x2="39717.3555" y2="5568.0493" gradientTransform="matrix(-1.2496 -0.8739 0.8677 -1.2407 45507.0703 41938.2539)">
            <stop offset="0.4064" style="stop-color:#D14A43"/>
            <stop offset="0.4272" style="stop-color:#CF5741"/>
            <stop offset="0.5147" style="stop-color:#C88B39"/>
            <stop offset="0.5908" style="stop-color:#C2B133"/>
            <stop offset="0.6518" style="stop-color:#BFC82F"/>
            <stop offset="0.6901" style="stop-color:#BED12E"/>
        </linearGradient>
        <path id="line10_3-line14_27_1_" fill="url(#line10_3-line14_27_00000092431282082798696090000004071790834860897701_)" d="  M726.4,328.2c0.8,0.3,1.1,1.3,0.8,2c-0.4,0.8-1.3,1.1-2,0.7s-1-1.2-0.7-2C724.8,328.2,725.7,327.8,726.4,328.2z M735.4,332.4  c0.8,0.3,1.1,1.3,0.8,2c-0.4,0.8-1.3,1.1-2,0.7s-1-1.2-0.7-2C733.8,332.4,734.7,332.1,735.4,332.4z M730.9,330.3  c0.8,0.3,1.1,1.3,0.8,2c-0.4,0.8-1.3,1.1-2,0.7s-1-1.2-0.7-2C729.3,330.3,730.2,330,730.9,330.3z M721.9,326c0.8,0.3,1.1,1.3,0.8,2  c-0.4,0.8-1.3,1.1-2,0.7s-1-1.2-0.7-2C720.3,326,721.1,325.7,721.9,326z M717.3,323.9c0.8,0.3,1.1,1.3,0.8,2c-0.4,0.8-1.3,1.1-2,0.7  s-1-1.2-0.7-2C715.7,323.9,716.6,323.6,717.3,323.9z M712.8,321.8c0.8,0.3,1.1,1.3,0.8,2c-0.4,0.8-1.3,1.1-2,0.7s-1-1.2-0.7-2  C711.2,321.8,712.1,321.5,712.8,321.8z"/>
        <linearGradient id="line2_5-lineD2_11_00000096770881778579111140000013694668713018583730_" gradientUnits="userSpaceOnUse" x1="35023.0117" y1="18081.791" x2="35064.0273" y2="18088.918" gradientTransform="matrix(0.2593 -1.5026 -1.492 -0.2575 18351.3633 57793.043)">
            <stop offset="0.4064" style="stop-color:#E94282"/>
            <stop offset="0.4555" style="stop-color:#C55B76"/>
            <stop offset="0.5335" style="stop-color:#917F65"/>
            <stop offset="0.6015" style="stop-color:#6B9959"/>
            <stop offset="0.6559" style="stop-color:#54A952"/>
            <stop offset="0.6901" style="stop-color:#4BAF4F"/>
        </linearGradient>
        <path id="line2_5-lineD2_11" fill="url(#line2_5-lineD2_11_00000096770881778579111140000013694668713018583730_)" d="M453.3,490.1  c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5C452.6,488.6,453.3,489.3,453.3,490.1z M453.3,500.1c0,0.8-0.7,1.5-1.5,1.5  s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5C452.6,498.6,453.3,499.3,453.3,500.1z M453.3,495.1c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5  s0.7-1.5,1.5-1.5C452.6,493.6,453.3,494.3,453.3,495.1z M453.3,485.1c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5  C452.6,483.6,453.3,484.3,453.3,485.1z M453.3,480.1c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5  C452.6,478.6,453.3,479.3,453.3,480.1z M453.3,475.1c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5  C452.6,473.6,453.3,474.3,453.3,475.1z M453.3,470.1c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5  C452.6,468.6,453.3,469.3,453.3,470.1z M454.3,465.1c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5  C453.6,463.6,454.3,464.3,454.3,465.1z M456.3,460.1c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5  C455.6,458.6,456.3,459.3,456.3,460.1z M459.3,455.1c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5  C458.6,453.6,459.3,454.3,459.3,455.1z"/>
        <rect id="white-base-28" x="1264" y="568.6" opacity="0.65" fill="#FFFFFF" width="22.9" height="10.9"/>
        <rect id="white-base-28_1_" x="1085.6" y="702.4" opacity="0.65" fill="#FFFFFF" width="22.9" height="10.9"/>
        <rect id="white-base-28_2_" x="997.5" y="783" opacity="0.65" fill="#FFFFFF" width="22.9" height="12"/>
        <rect id="white-base-28_3_" x="926.7" y="806.7" opacity="0.65" fill="#FFFFFF" width="117.7" height="12"/>
        <rect id="white-base-28_4_" x="939.5" y="731.4" opacity="0.65" fill="#FFFFFF" width="25.7" height="12"/>
        <rect id="white-base-28_5_" x="1026.2" y="640.7" opacity="0.65" fill="#FFFFFF" width="22.9" height="12"/>
        <rect id="white-base-28_6_" x="912.6" y="844" opacity="0.65" fill="#FFFFFF" width="56.8" height="12"/>
        <rect id="white-base-28_7_" x="952.9" y="903" opacity="0.65" fill="#FFFFFF" width="78.3" height="12"/>
        <rect id="white-base-28_8_" x="1059.1" y="878" opacity="0.65" fill="#FFFFFF" width="29.5" height="12"/>
        <rect id="white-base-28_9_" x="1128.4" y="848" opacity="0.65" fill="#FFFFFF" width="29.5" height="12"/>
        <rect id="white-base-28_11_" x="1312.2" y="817" opacity="0.65" fill="#FFFFFF" width="48.8" height="12"/>
        <rect id="white-base-28_12_" x="803" y="881" opacity="0.65" fill="#FFFFFF" width="29.5" height="12"/>
        <rect id="white-base-28_13_" x="870.7" y="951" opacity="0.65" fill="#FFFFFF" width="29.5" height="12"/>
        <rect id="white-base-28_14_" x="758.1" y="968" opacity="0.65" fill="#FFFFFF" width="29.5" height="12"/>
        <rect id="white-base-28_15_" x="716.6" y="898" opacity="0.65" fill="#FFFFFF" width="29.5" height="12"/>
        <rect id="white-base-28_16_" x="717.1" y="1026" opacity="0.65" fill="#FFFFFF" width="29.5" height="12"/>
        <rect id="white-base-28_17_" x="607.1" y="1046" opacity="0.65" fill="#FFFFFF" width="29.5" height="12"/>
        <rect id="white-base-28_18_" x="528" y="1212.3" opacity="0.65" fill="#FFFFFF" width="29.5" height="12"/>
        <rect id="white-base-28_19_" x="436.7" y="1014" opacity="0.65" fill="#FFFFFF" width="29.5" height="12"/>
        <linearGradient id="line4_8-line14_17_00000177469072056169161400000014240387582793173675_" gradientUnits="userSpaceOnUse" x1="103201.7891" y1="-5759.311" x2="103212.5156" y2="-5759.311" gradientTransform="matrix(-0.551 -0.3181 0.2916 -0.505 58936.8125 30957.0605)">
            <stop offset="0.1176" style="stop-color:#D14A43"/>
            <stop offset="0.141" style="stop-color:#CB4E49"/>
            <stop offset="0.4931" style="stop-color:#7289A2"/>
            <stop offset="0.7404" style="stop-color:#3AAED9"/>
            <stop offset="0.8592" style="stop-color:#24BCEF"/>
        </linearGradient>
        <polygon id="line4_8-line14_17" fill="url(#line4_8-line14_17_00000177469072056169161400000014240387582793173675_)" points="  388.5,1030.5 396,1034.9 392.8,1040.5 385.2,1036.2 "/>
        <rect id="white-base-28_21_" x="496.6" y="917" opacity="0.65" fill="#FFFFFF" width="41.5" height="12"/>
        <rect id="white-base-28_23_" x="190.8" y="1021" opacity="0.65" fill="#FFFFFF" width="28.8" height="12"/>
        <rect id="white-base-28_25_" x="321.6" y="913" opacity="0.65" fill="#FFFFFF" width="12" height="12"/>
        <rect id="white-base-28_27_" x="321.5" y="1039" opacity="0.65" fill="#FFFFFF" width="12" height="12"/>
        <rect id="white-base-28_28_" x="679.4" y="1305" opacity="0.65" fill="#FFFFFF" width="52.5" height="12"/>
        <rect id="white-base-28_29_" x="1113" y="1679" opacity="0.65" fill="#FFFFFF" width="23.1" height="12"/>
        <rect id="white-base-28_30_" x="1112.2" y="1608" opacity="0.65" fill="#FFFFFF" width="22.4" height="12"/>
        <rect id="white-base-28_31_" x="1032.6" y="1499" opacity="0.65" fill="#FFFFFF" width="20.9" height="12"/>
        <rect id="white-base-28_32_" x="1198.3" y="1273.6" opacity="0.65" fill="#FFFFFF" width="84.3" height="12"/>
        <rect id="white-base-28_33_" x="1306.5" y="1221" opacity="0.65" fill="#FFFFFF" width="39.8" height="12"/>
        <rect id="white-base-28_34_" x="1264.4" y="1166" opacity="0.65" fill="#FFFFFF" width="23" height="12"/>
        <rect id="white-base-28_35_" x="1240.2" y="1111" opacity="0.65" fill="#FFFFFF" width="103.6" height="12"/>
        <rect id="white-base-28_36_" x="1299.6" y="1072" opacity="0.65" fill="#FFFFFF" width="41.7" height="12"/>
        <rect id="white-base-28_37_" x="1079.9" y="973" opacity="0.65" fill="#FFFFFF" width="47.7" height="12"/>
        <rect id="white-base-28_38_" x="1214" y="919" opacity="0.65" fill="#FFFFFF" width="23" height="12"/>
        <rect id="white-base-28_39_" x="1010.6" y="1043" opacity="0.65" fill="#FFFFFF" width="94.6" height="12"/>
        <rect id="white-base-28_40_" x="1076.8" y="999" opacity="0.65" fill="#FFFFFF" width="29.6" height="12"/>
        <rect id="white-base-28_41_" x="1033.3" y="1066" opacity="0.65" fill="#FFFFFF" width="74.9" height="24"/>
        <rect id="white-base-28_42_" x="888.1" y="1046" opacity="0.65" fill="#FFFFFF" width="22.6" height="12"/>
        <rect id="white-base-28_43_" x="413.5" y="851" opacity="0.65" fill="#FFFFFF" width="40.7" height="12"/>
        <rect id="white-base-28_44_" x="367.1" y="789" opacity="0.65" fill="#FFFFFF" width="33.7" height="12"/>
        <rect id="white-base-28_45_" x="473.4" y="729" opacity="0.65" fill="#FFFFFF" width="26.7" height="12"/>
        <rect id="white-base-28_46_" x="465" y="697" opacity="0.65" fill="#FFFFFF" width="27.1" height="12"/>
        <rect id="white-base-28_47_" x="774.3" y="787" opacity="0.65" fill="#FFFFFF" width="12" height="12"/>
        <rect id="white-base-28_48_" x="775.3" y="749" opacity="0.65" fill="#FFFFFF" width="9" height="12"/>
        <rect id="white-base-28_49_" x="647.1" y="691" opacity="0.65" fill="#FFFFFF" width="30.7" height="23.6"/>
        <rect id="white-base-28_51_" x="576.1" y="601" opacity="0.65" fill="#FFFFFF" width="9.6" height="12"/>
        <rect id="white-base-28_52_" x="665.7" y="649" opacity="0.65" fill="#FFFFFF" width="79.2" height="14"/>
        <rect id="white-base-28_54_" x="911.8" y="528" opacity="0.65" fill="#FFFFFF" width="25.7" height="12"/>
        <rect id="white-base-28_56_" x="408.8" y="576" opacity="0.65" fill="#FFFFFF" width="21.1" height="12"/>
        <rect id="white-base-28_58_" x="518.4" y="441" opacity="0.65" fill="#FFFFFF" width="30.5" height="12"/>
        <rect id="white-base-28_59_" x="742.8" y="492" opacity="0.65" fill="#FFFFFF" width="20.9" height="12"/>
        <rect id="white-base-28_61_" x="736.7" y="303" opacity="0.65" fill="#FFFFFF" width="25" height="12"/>
        <rect id="white-base-28_62_" x="319.2" y="314" opacity="0.65" fill="#FFFFFF" width="15.4" height="12"/>
        <rect id="white-base-28_63_" x="1319.8" y="688" opacity="0.65" fill="#FFFFFF" width="14.2" height="12"/>
        <rect id="lineD1_12-lineD1_14" x="754.5" y="331.7" fill="#FFFFFF" stroke="#F7A600" stroke-width="1.5" stroke-miterlimit="10" width="4" height="107.8"/>
        <path id="lineD1_14" fill="#F7A600" d="M748.3,445.9c0,4.5,3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2s-3.7-8.2-8.2-8.2  C752,437.6,748.3,441.3,748.3,445.9z M756.6,441.7c2.2,0,4.1,1.9,4.1,4.2c0,2.3-2,4-4.1,4.1c-2.2,0-4.1-1.8-4.2-4.1  C752.4,443.6,754.4,441.6,756.6,441.7z"/>
        <path id="lineD1_12" fill="#F7A600" d="M756.5,316.3c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2S761,316.3,756.5,316.3  z M760.8,324.6c0,2.3-1.9,4.2-4.3,4.2c-2.4,0-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3C758.9,320.3,760.8,322.3,760.8,324.6z"/>
        <path id="line10_3-line10_4" fill="#BED12E" d="M761.2,382.8c-18.9-18.9-37.9-37.9-56.8-56.8l3.9-3.9c18.9,18.9,37.9,37.9,56.8,56.8  C763.8,380.2,762.5,381.5,761.2,382.8z"/>
        <rect id="white-base-28_60_" x="750.6" y="425" opacity="0.65" fill="#FFFFFF" width="12" height="12"/>
        <linearGradient id="line8_6-lineD2_19_00000010291165787923546400000002824196042685725099_" gradientUnits="userSpaceOnUse" x1="6752.2031" y1="-24315.3145" x2="6768.1748" y2="-24330.8848" gradientTransform="matrix(0.9742 -0.2256 0.2256 0.9742 77.6663 26183.3184)">
            <stop offset="0" style="stop-color:#FFCD1E"/>
            <stop offset="1" style="stop-color:#E94282"/>
        </linearGradient>
        <path id="line8_6-lineD2_19" fill="url(#line8_6-lineD2_19_00000010291165787923546400000002824196042685725099_)" d="M1179.8,953.8  c0.4-0.7,1.4-0.9,2.1-0.5s0.9,1.4,0.5,2c-0.4,0.7-1.3,0.9-2,0.5C1179.7,955.4,1179.5,954.5,1179.8,953.8z M1182.6,949.6  c0.4-0.7,1.4-0.9,2.1-0.5s0.9,1.4,0.5,2c-0.4,0.7-1.3,0.9-2,0.5C1182.3,951.2,1182.1,950.3,1182.6,949.6z M1177.2,958.1  c0.4-0.7,1.4-0.9,2.1-0.5s0.9,1.4,0.5,2c-0.4,0.7-1.3,0.9-2,0.5C1177.1,959.7,1176.9,958.7,1177.2,958.1z M1174.6,962.3  c0.4-0.7,1.4-0.9,2.1-0.5s0.9,1.4,0.5,2c-0.4,0.7-1.3,0.9-2,0.5C1174.4,963.9,1174.2,963,1174.6,962.3z M1171.9,966.5  c0.4-0.7,1.4-0.9,2.1-0.5s0.9,1.4,0.5,2c-0.4,0.7-1.3,0.9-2,0.5C1171.8,968.2,1171.6,967.2,1171.9,966.5z M1169.3,970.8  c0.4-0.7,1.4-0.9,2.1-0.5s0.9,1.4,0.5,2c-0.4,0.7-1.3,0.9-2,0.5S1168.9,971.5,1169.3,970.8z M1166.7,975c0.4-0.7,1.4-0.9,2.1-0.5  s0.9,1.4,0.5,2c-0.4,0.7-1.3,0.9-2,0.5C1166.4,976.6,1166.2,975.7,1166.7,975z"/>
        <g id="zoneD1_1">
            <polygon fill="#93C8BA" points="660.7,88.5 659.3,88.5 659.3,82 655.6,82 655.6,88.5 654.2,88.5 654.2,80.8 660.7,80.8  "/>
            <path fill="#93C8BA" d="M662.4,83h1.3v0.7l0,0c0.3-0.4,0.9-0.8,1.7-0.8c1.5,0,2.5,1.2,2.5,2.9c0,1.7-1.1,2.9-2.5,2.9   c-0.8,0-1.4-0.4-1.7-0.8l0,0v2.8h-1.3V83z M665.2,87.4c0.9,0,1.5-0.7,1.5-1.7s-0.6-1.7-1.5-1.7s-1.5,0.7-1.5,1.7   C663.7,86.7,664.3,87.4,665.2,87.4"/>
            <polygon fill="#93C8BA" points="670.6,86.4 670.6,86.4 673,83 674.1,83 674.1,88.5 672.8,88.5 672.8,85.1 672.7,85.1 670.4,88.5    669.2,88.5 669.2,83 670.6,83  "/>
            <polygon fill="#93C8BA" points="679,84.1 677,84.1 677,88.5 675.7,88.5 675.7,83 679.4,83  "/>
            <path fill="#93C8BA" d="M679.9,85.7c0-1.7,1.2-2.9,2.8-2.9s2.8,1.2,2.8,2.9c0,1.7-1.2,2.9-2.8,2.9S679.9,87.4,679.9,85.7    M684.1,85.7c0-1-0.6-1.7-1.4-1.7s-1.4,0.7-1.4,1.7s0.6,1.7,1.4,1.7S684.1,86.7,684.1,85.7"/>
            <path fill="#93C8BA" d="M686.6,83h1.3v0.7l0,0c0.3-0.4,0.9-0.8,1.7-0.8c1.5,0,2.5,1.2,2.5,2.9c0,1.7-1.1,2.9-2.5,2.9   c-0.8,0-1.4-0.4-1.7-0.8l0,0v2.8h-1.3V83z M689.4,87.4c0.9,0,1.5-0.7,1.5-1.7s-0.6-1.7-1.5-1.7s-1.5,0.7-1.5,1.7   C687.9,86.7,688.5,87.4,689.4,87.4"/>
            <path fill="#93C8BA" d="M693,85.7c0-1.7,1.2-2.9,2.8-2.9s2.8,1.2,2.8,2.9c0,1.7-1.2,2.9-2.8,2.9S693,87.4,693,85.7 M697.2,85.7   c0-1-0.6-1.7-1.4-1.7s-1.4,0.7-1.4,1.7s0.6,1.7,1.4,1.7S697.2,86.7,697.2,85.7"/>
            <path fill="#93C8BA" d="M700.3,85.9c0.2-1.1,0.3-2.9,0.3-2.9h4v4.4h0.7v2.5H704v-1.4h-3.6v1.4h-1.2v-2.5h0.6   C700.1,87.2,700.2,86.5,700.3,85.9 M703.2,84.1h-1.5c0,0.5-0.1,1.3-0.2,1.8c-0.1,0.5-0.2,1-0.4,1.4l0,0h2.1L703.2,84.1L703.2,84.1z   "/>
            <polygon fill="#93C8BA" points="664.3,93.2 666.8,93.2 666.6,93.7 665.8,93.7 665.8,96.2 665.2,96.2 665.2,93.7 664.3,93.7  "/>
            <path fill="#93C8BA" d="M667,95.3c0-0.5,0.4-1,1.3-1c0.2,0,0.4,0,0.6,0.1v-0.1c0-0.4-0.3-0.6-0.6-0.6c-0.4,0-0.6,0.1-0.8,0.3   l-0.4-0.4c0.3-0.2,0.7-0.4,1.2-0.4c0.8,0,1.2,0.4,1.2,1.1v1.9h-0.6v-0.3l0,0c-0.2,0.2-0.5,0.4-0.9,0.4   C667.5,96.3,667,95.9,667,95.3 M668.9,95L668.9,95c-0.2-0.1-0.4-0.1-0.5-0.1c-0.5,0-0.8,0.2-0.8,0.5s0.2,0.5,0.6,0.5   C668.6,95.8,668.9,95.5,668.9,95"/>
            <path fill="#93C8BA" d="M670.4,93.2h0.6v0.4l0,0c0.2-0.3,0.5-0.5,1-0.5c0.8,0,1.4,0.6,1.4,1.6c0,0.9-0.6,1.6-1.4,1.6   c-0.4,0-0.8-0.2-1-0.5l0,0v1.6h-0.6V93.2z M671.9,95.8c0.5,0,0.9-0.4,0.9-1s-0.4-1-0.9-1s-0.9,0.4-0.9,1   C671,95.3,671.3,95.8,671.9,95.8"/>
            <polygon fill="#93C8BA" points="674.7,95.3 674.7,95.3 676,93.2 676.6,93.2 676.6,96.2 676,96.2 676,94.2 676,94.2 674.6,96.2    674.1,96.2 674.1,93.2 674.7,93.2  "/>
            <path fill="#93C8BA" d="M677.3,94.7c0-0.9,0.7-1.5,1.5-1.6v-1.4h0.6v1.4c0.9,0,1.5,0.7,1.5,1.6s-0.7,1.5-1.5,1.6v1h-0.6v-1   C678,96.2,677.3,95.6,677.3,94.7 M677.9,94.7c0,0.6,0.4,1,0.9,1.1v-2.1C678.3,93.7,677.9,94.1,677.9,94.7 M680.4,94.7   c0-0.6-0.4-1-0.9-1.1v2.1C680,95.8,680.4,95.3,680.4,94.7"/>
            <polygon fill="#93C8BA" points="682.2,94.4 683.5,94.4 683.5,93.2 684.1,93.2 684.1,96.2 683.5,96.2 683.5,94.9 682.2,94.9    682.2,96.2 681.7,96.2 681.7,93.2 682.2,93.2  "/>
            <path fill="#93C8BA" d="M684.8,95.3c0-0.5,0.4-1,1.3-1c0.2,0,0.4,0,0.6,0.1v-0.1c0-0.4-0.3-0.6-0.6-0.6c-0.4,0-0.6,0.1-0.8,0.3   l-0.4-0.4c0.3-0.2,0.7-0.4,1.2-0.4c0.8,0,1.2,0.4,1.2,1.1v1.9h-0.6v-0.3l0,0c-0.2,0.2-0.5,0.4-0.9,0.4   C685.2,96.3,684.8,95.9,684.8,95.3 M686.7,95L686.7,95c-0.2-0.1-0.4-0.1-0.5-0.1c-0.5,0-0.8,0.2-0.8,0.5s0.2,0.5,0.6,0.5   C686.4,95.8,686.7,95.5,686.7,95"/>
            <path fill="#93C8BA" d="M688.1,94.2c0-0.6,0.5-1,1-1h1.3v3h-0.6v-1.1h-0.6l-0.7,1.1h-0.7l0.8-1.2C688.3,94.9,688.1,94.6,688.1,94.2    M688.7,94.2c0,0.3,0.3,0.5,0.5,0.5h0.6v-0.9h-0.6C688.9,93.7,688.7,93.9,688.7,94.2"/>
            <path fill="#93C8BA" d="M692.5,95.9l0.4-0.4c0.1,0.1,0.4,0.3,0.8,0.3c0.4,0,0.6-0.2,0.6-0.4c0-0.2-0.2-0.4-0.6-0.4h-0.4v-0.5h0.4   c0.3,0,0.5-0.1,0.5-0.4s-0.2-0.4-0.5-0.4c-0.4,0-0.6,0.2-0.7,0.3l-0.4-0.4c0.2-0.2,0.6-0.4,1.2-0.4c0.6,0,1.1,0.3,1.1,0.8   c0,0.3-0.2,0.6-0.5,0.7l0,0c0.3,0.1,0.5,0.4,0.5,0.7c0,0.6-0.5,1-1.2,1C693.1,96.3,692.8,96.1,692.5,95.9"/>
            <path fill="#93C8BA" d="M695.4,94.7c0-0.9,0.7-1.6,1.5-1.6s1.5,0.6,1.5,1.6c0,0.9-0.7,1.6-1.5,1.6   C696.1,96.3,695.4,95.6,695.4,94.7 M697.8,94.7c0-0.6-0.4-1-0.9-1s-0.9,0.4-0.9,1s0.4,1,0.9,1C697.4,95.8,697.8,95.3,697.8,94.7"/>
            <polygon fill="#93C8BA" points="699.7,94.4 701,94.4 701,93.2 701.5,93.2 701.5,96.2 701,96.2 701,94.9 699.7,94.9 699.7,96.2    699.1,96.2 699.1,93.2 699.7,93.2  "/>
            <path fill="#93C8BA" d="M702.2,95.3c0-0.5,0.4-1,1.3-1c0.2,0,0.4,0,0.6,0.1v-0.1c0-0.4-0.3-0.6-0.6-0.6c-0.4,0-0.6,0.1-0.8,0.3   l-0.4-0.4c0.3-0.2,0.7-0.4,1.2-0.4c0.8,0,1.2,0.4,1.2,1.1v1.9h-0.6v-0.3l0,0c-0.2,0.2-0.5,0.4-0.9,0.4   C702.7,96.3,702.2,95.9,702.2,95.3 M704.1,95L704.1,95c-0.2-0.1-0.4-0.1-0.5-0.1c-0.5,0-0.8,0.2-0.8,0.5s0.2,0.5,0.6,0.5   C703.8,95.8,704.1,95.5,704.1,95"/>
            <polygon fill="#93C8BA" points="774.3,86.9 775.7,86.9 775.7,93.3 779.4,93.3 779.4,86.9 780.8,86.9 780.8,93.3 781.9,93.3    781.9,96.2 780.6,96.2 780.6,94.6 774.3,94.6  "/>
            <path fill="#93C8BA" d="M782.6,91.8c0-1.7,1.2-2.9,2.7-2.9s2.7,0.9,2.7,3v0.3h-3.9c0.1,0.9,0.8,1.3,1.5,1.3c0.5,0,1-0.2,1.3-0.5   l0.8,0.8c-0.6,0.6-1.4,0.9-2.3,0.9C783.9,94.7,782.6,93.6,782.6,91.8 M785.3,90c-0.7,0-1.2,0.6-1.3,1.2h2.5   C786.5,90.6,786,90,785.3,90"/>
            <polygon fill="#93C8BA" points="790.5,91.2 792.6,91.2 792.6,89.1 793.9,89.1 793.9,94.6 792.6,94.6 792.6,92.3 790.5,92.3    790.5,94.6 789.1,94.6 789.1,89.1 790.5,89.1  "/>
            <polygon fill="#93C8BA" points="794.9,89.1 799.6,89.1 799.2,90.2 797.8,90.2 797.8,94.6 796.5,94.6 796.5,90.2 794.9,90.2  "/>
            <path fill="#93C8BA" d="M800.4,89.1h1.3v0.7l0,0c0.3-0.4,0.9-0.8,1.7-0.8c1.5,0,2.5,1.2,2.5,2.9c0,1.7-1.1,2.9-2.5,2.9   c-0.8,0-1.4-0.4-1.7-0.8l0,0v2.8h-1.3V89.1z M803.2,93.5c0.9,0,1.5-0.7,1.5-1.7s-0.6-1.7-1.5-1.7s-1.5,0.7-1.5,1.7   S802.3,93.5,803.2,93.5"/>
            <path fill="#93C8BA" d="M806.8,92.9c0-0.9,0.7-1.8,2.4-1.8c0.3,0,0.7,0,1,0.1V91c0-0.6-0.5-0.9-1-0.9c-0.4,0-1,0.2-1.3,0.5   l-0.8-0.8c0.6-0.5,1.5-0.8,2.2-0.8c1.4,0,2.3,0.8,2.3,2.1v3.5h-1.3V94l0,0c-0.3,0.4-0.8,0.7-1.5,0.7   C807.6,94.7,806.8,93.9,806.8,92.9 M810.2,92.4v-0.2c-0.3,0-0.6-0.1-0.9-0.1c-0.7,0-1.1,0.3-1.1,0.8c0,0.4,0.3,0.7,0.9,0.7   C809.8,93.6,810.2,93.1,810.2,92.4"/>
            <path fill="#93C8BA" d="M812.5,94.6v-1.1c0,0,0.2,0.1,0.3,0.1c0.5,0,0.6-0.4,0.7-1.5c0.2-1.8,0.2-3,0.2-3h4.2v5.5h-1.3v-4.4h-1.7   c0,0.5-0.1,1.2-0.1,1.8c-0.1,1.8-0.5,2.7-1.7,2.7C812.8,94.7,812.6,94.6,812.5,94.6"/>
            <path fill="#93C8BA" d="M822.1,91c1.2,0,2.1,0.7,2.1,1.8c0,1.1-0.9,1.8-2.1,1.8h-2.7v-5.5h1.3V91H822.1z M822.9,92.8   c0-0.5-0.4-0.8-0.9-0.8h-1.2v1.6h1.2C822.5,93.6,822.9,93.3,822.9,92.8"/>
            <polygon fill="#93C8BA" points="826.6,91.2 828.7,91.2 828.7,89.1 830,89.1 830,94.6 828.7,94.6 828.7,92.3 826.6,92.3 826.6,94.6    825.3,94.6 825.3,89.1 826.6,89.1  "/>
            <path fill="#93C8BA" d="M831.2,92.9c0-0.9,0.7-1.8,2.4-1.8c0.3,0,0.7,0,1,0.1V91c0-0.6-0.5-0.9-1-0.9c-0.4,0-1,0.2-1.3,0.5   l-0.8-0.8c0.6-0.5,1.5-0.8,2.2-0.8c1.4,0,2.3,0.8,2.3,2.1v3.5h-1.3V94l0,0c-0.3,0.4-0.8,0.7-1.5,0.7   C832,94.7,831.2,93.9,831.2,92.9 M834.6,92.4v-0.2c-0.3,0-0.6-0.1-0.9-0.1c-0.7,0-1.1,0.3-1.1,0.8c0,0.4,0.3,0.7,0.9,0.7   C834.2,93.6,834.6,93.1,834.6,92.4"/>
            <path fill="#93C8BA" d="M837.2,90.9c0-1.1,0.9-1.8,2.1-1.8h2.5v5.5h-1.3v-1.9h-0.7l-1.3,1.9H837l1.5-2.1   C837.6,92.3,837.2,91.5,837.2,90.9 M838.7,90.9c0,0.5,0.4,0.8,0.9,0.8h0.9v-1.6h-0.9C839,90.1,838.7,90.4,838.7,90.9"/>
            <polygon fill="#93C8BA" points="773.8,99.1 776.3,99.1 776.1,99.6 775.3,99.6 775.3,102.1 774.7,102.1 774.7,99.6 773.8,99.6  "/>
            <path fill="#93C8BA" d="M776.6,101.2c0-0.5,0.4-1,1.3-1c0.2,0,0.4,0,0.6,0.1v-0.1c0-0.4-0.3-0.6-0.6-0.6c-0.4,0-0.6,0.1-0.8,0.3   l-0.4-0.4c0.3-0.2,0.7-0.4,1.2-0.4c0.7,0,1.2,0.4,1.2,1.1v1.9h-0.6v-0.3l0,0c-0.2,0.2-0.5,0.4-0.9,0.4   C777,102.2,776.6,101.8,776.6,101.2 M778.5,100.9L778.5,100.9c-0.2-0.1-0.4-0.1-0.5-0.1c-0.5,0-0.8,0.2-0.8,0.5s0.2,0.5,0.6,0.5   C778.1,101.7,778.5,101.4,778.5,100.9"/>
            <path fill="#93C8BA" d="M779.9,99.1h0.6v0.4l0,0c0.2-0.3,0.5-0.5,1-0.5c0.8,0,1.4,0.6,1.4,1.6c0,0.9-0.6,1.6-1.4,1.6   c-0.4,0-0.8-0.2-1-0.5l0,0v1.6h-0.6V99.1z M781.4,101.7c0.5,0,0.9-0.4,0.9-1s-0.4-1-0.9-1s-0.9,0.4-0.9,1   C780.5,101.2,780.9,101.7,781.4,101.7"/>
            <polygon fill="#93C8BA" points="784.2,101.2 784.2,101.2 785.6,99.1 786.1,99.1 786.1,102.1 785.5,102.1 785.5,100.1 785.5,100.1    784.1,102.1 783.6,102.1 783.6,99.1 784.2,99.1  "/>
            <path fill="#93C8BA" d="M786.8,100.6c0-0.9,0.7-1.5,1.5-1.6v-1.4h0.6V99c0.9,0,1.5,0.7,1.5,1.6s-0.7,1.5-1.5,1.6v1h-0.6v-1   C787.5,102.2,786.8,101.5,786.8,100.6 M787.4,100.6c0,0.6,0.4,1,0.9,1.1v-2.1C787.8,99.6,787.4,100,787.4,100.6 M789.9,100.6   c0-0.6-0.4-1-0.9-1.1v2.1C789.5,101.7,789.9,101.2,789.9,100.6"/>
            <polygon fill="#93C8BA" points="791.8,100.3 793.1,100.3 793.1,99.2 793.6,99.2 793.6,102.1 793.1,102.1 793.1,100.8 791.8,100.8    791.8,102.1 791.2,102.1 791.2,99.2 791.8,99.2  "/>
            <path fill="#93C8BA" d="M794.3,101.2c0-0.5,0.4-1,1.3-1c0.2,0,0.4,0,0.6,0.1v-0.1c0-0.4-0.3-0.6-0.6-0.6c-0.4,0-0.6,0.1-0.8,0.3   l-0.4-0.4c0.3-0.2,0.7-0.4,1.2-0.4c0.7,0,1.2,0.4,1.2,1.1v1.9h-0.6v-0.3l0,0c-0.2,0.2-0.5,0.4-0.9,0.4   C794.8,102.2,794.3,101.8,794.3,101.2 M796.2,100.9L796.2,100.9c-0.2-0.1-0.4-0.1-0.5-0.1c-0.5,0-0.8,0.2-0.8,0.5s0.2,0.5,0.6,0.5   C795.9,101.7,796.2,101.4,796.2,100.9"/>
            <path fill="#93C8BA" d="M797.6,100.1c0-0.6,0.5-1,1-1h1.3v3h-0.6V101h-0.6l-0.7,1.1h-0.7l0.8-1.2   C797.8,100.8,797.6,100.5,797.6,100.1 M798.2,100.1c0,0.3,0.3,0.5,0.5,0.5h0.6v-0.9h-0.6C798.5,99.6,798.2,99.8,798.2,100.1"/>
            <path fill="#93C8BA" d="M802.1,101.8l0.4-0.4c0.1,0.1,0.4,0.3,0.8,0.3c0.4,0,0.6-0.2,0.6-0.4c0-0.2-0.2-0.4-0.6-0.4h-0.5v-0.5h0.5   c0.3,0,0.5-0.1,0.5-0.4s-0.2-0.4-0.5-0.4c-0.4,0-0.6,0.2-0.7,0.3l-0.4-0.4c0.2-0.2,0.6-0.4,1.2-0.4c0.6,0,1.1,0.3,1.1,0.8   c0,0.3-0.2,0.6-0.5,0.7l0,0c0.3,0.1,0.5,0.4,0.5,0.7c0,0.6-0.5,1-1.2,1C802.7,102.2,802.3,102,802.1,101.8"/>
            <path fill="#93C8BA" d="M805,100.6c0-0.9,0.7-1.6,1.5-1.6s1.5,0.6,1.5,1.6c0,0.9-0.7,1.6-1.5,1.6C805.6,102.2,805,101.5,805,100.6    M807.3,100.6c0-0.6-0.4-1-0.9-1s-0.9,0.4-0.9,1s0.4,1,0.9,1C807,101.7,807.3,101.2,807.3,100.6"/>
            <polygon fill="#93C8BA" points="809.2,100.3 810.5,100.3 810.5,99.2 811.1,99.2 811.1,102.1 810.5,102.1 810.5,100.8 809.2,100.8    809.2,102.1 808.6,102.1 808.6,99.2 809.2,99.2  "/>
            <path fill="#93C8BA" d="M811.8,101.2c0-0.5,0.4-1,1.3-1c0.2,0,0.4,0,0.6,0.1v-0.1c0-0.4-0.3-0.6-0.6-0.6c-0.4,0-0.6,0.1-0.8,0.3   l-0.4-0.4c0.3-0.2,0.7-0.4,1.2-0.4c0.7,0,1.2,0.4,1.2,1.1v1.9h-0.6v-0.3l0,0c-0.2,0.2-0.5,0.4-0.9,0.4   C812.2,102.2,811.8,101.8,811.8,101.2 M813.7,100.9L813.7,100.9c-0.2-0.1-0.4-0.1-0.5-0.1c-0.5,0-0.8,0.2-0.8,0.5s0.2,0.5,0.6,0.5   C813.3,101.7,813.7,101.4,813.7,100.9"/>
            <path fill="none" stroke="#93C8BA" stroke-miterlimit="10" d="M664.3,99.2h68.8c2.4,0,3.8-0.6,5.5-2.3l9.7-9.7   c1.7-1.7,3.1-2.3,5.5-2.3h88"/>
        </g>
        <g id="zoneD2_2">
            <polygon fill="#93C8BA" points="925,1882 925,1883.4 918.6,1883.4 918.6,1887.1 925,1887.1 925,1888.4 917.3,1888.4 917.3,1882     "/>
            <path fill="#93C8BA" d="M919.5,1880.2v-1.3h0.7l0,0c-0.4-0.3-0.8-0.9-0.8-1.7c0-1.5,1.2-2.5,2.9-2.5s2.9,1.1,2.9,2.5   c0,0.8-0.4,1.4-0.8,1.7l0,0h2.8v1.3H919.5z M924,1877.5c0-0.9-0.7-1.5-1.7-1.5s-1.7,0.6-1.7,1.5s0.7,1.5,1.7,1.5   C923.2,1878.9,924,1878.3,924,1877.5"/>
            <polygon fill="#93C8BA" points="923,1872.1 923,1872 919.5,1869.7 919.5,1868.5 925,1868.5 925,1869.9 921.6,1869.9 921.6,1869.9    925,1872.3 925,1873.4 919.5,1873.4 919.5,1872.1  "/>
            <polygon fill="#93C8BA" points="920.7,1863.6 920.7,1865.6 925,1865.6 925,1867 919.5,1867 919.5,1863.2  "/>
            <path fill="#93C8BA" d="M922.3,1862.8c-1.7,0-2.9-1.2-2.9-2.8c0-1.6,1.2-2.8,2.9-2.8s2.9,1.2,2.9,2.8   C925.2,1861.6,924,1862.8,922.3,1862.8 M922.3,1858.6c-1,0-1.7,0.6-1.7,1.4s0.7,1.4,1.7,1.4s1.7-0.6,1.7-1.4   C924,1859.1,923.3,1858.6,922.3,1858.6"/>
            <path fill="#93C8BA" d="M919.5,1856v-1.3h0.7l0,0c-0.4-0.3-0.8-0.9-0.8-1.7c0-1.5,1.2-2.5,2.9-2.5s2.9,1.1,2.9,2.5   c0,0.8-0.4,1.4-0.8,1.7l0,0h2.8v1.3H919.5z M924,1853.3c0-0.9-0.7-1.5-1.7-1.5s-1.7,0.6-1.7,1.5s0.7,1.5,1.7,1.5   C923.2,1854.7,924,1854.1,924,1853.3"/>
            <path fill="#93C8BA" d="M922.3,1849.6c-1.7,0-2.9-1.2-2.9-2.8c0-1.6,1.2-2.8,2.9-2.8s2.9,1.2,2.9,2.8S924,1849.6,922.3,1849.6    M922.3,1845.4c-1,0-1.7,0.6-1.7,1.4s0.7,1.4,1.7,1.4s1.7-0.6,1.7-1.4S923.3,1845.4,922.3,1845.4"/>
            <path fill="#93C8BA" d="M922.4,1842.3c-1.1-0.2-2.9-0.3-2.9-0.3v-4h4.4v-0.7h2.5v1.2H925v3.6h1.4v1.2h-2.5v-0.6   C923.7,1842.6,923.1,1842.4,922.4,1842.3 M920.7,1839.4v1.5c0.5,0,1.3,0.1,1.8,0.2s1,0.2,1.4,0.4l0,0v-2.1H920.7z"/>
            <polygon fill="#93C8BA" points="929,1878.1 929,1875.6 929.5,1875.8 929.5,1876.6 932,1876.6 932,1877.2 929.5,1877.2    929.5,1878.1  "/>
            <path fill="#93C8BA" d="M931.1,1875.4c-0.5,0-1-0.4-1-1.3c0-0.2,0-0.4,0.1-0.6h-0.1c-0.4,0-0.6,0.3-0.6,0.6c0,0.4,0.1,0.6,0.3,0.8   l-0.4,0.4c-0.2-0.3-0.4-0.7-0.4-1.2c0-0.7,0.4-1.2,1.1-1.2h1.9v0.6h-0.3l0,0c0.2,0.2,0.4,0.5,0.4,0.9   C932.1,1875,931.7,1875.4,931.1,1875.4 M930.8,1873.5L930.8,1873.5c-0.1,0.2-0.1,0.4-0.1,0.5c0,0.5,0.2,0.8,0.5,0.8   s0.5-0.2,0.5-0.6C931.6,1873.8,931.3,1873.5,930.8,1873.5"/>
            <path fill="#93C8BA" d="M929,1872v-0.6h0.4l0,0c-0.3-0.2-0.5-0.5-0.5-1c0-0.8,0.6-1.4,1.6-1.4c0.9,0,1.6,0.6,1.6,1.4   c0,0.4-0.2,0.8-0.5,1l0,0h1.6v0.6H929z M931.6,1870.6c0-0.5-0.4-0.9-1-0.9s-1,0.4-1,0.9s0.4,0.9,1,0.9S931.6,1871.1,931.6,1870.6"/>
            <polygon fill="#93C8BA" points="931.1,1867.8 931.1,1867.7 929,1866.4 929,1865.8 932,1865.8 932,1866.4 930,1866.4 930,1866.4    932,1867.8 932,1868.3 929,1868.3 929,1867.8  "/>
            <path fill="#93C8BA" d="M930.5,1865.1c-0.9,0-1.5-0.7-1.6-1.5h-1.4v-0.6h1.4c0-0.9,0.7-1.5,1.6-1.5c0.9,0,1.5,0.7,1.6,1.5h1v0.6h-1   C932,1864.4,931.4,1865.1,930.5,1865.1 M930.5,1862.1c-0.6,0-1,0.4-1.1,0.9h2.1C931.6,1862.4,931.1,1862.1,930.5,1862.1    M930.5,1864.5c0.6,0,1-0.4,1.1-0.9h-2.1C929.5,1864.1,929.9,1864.5,930.5,1864.5"/>
            <polygon fill="#93C8BA" points="930.2,1860.2 930.2,1858.9 929,1858.9 929,1858.3 932,1858.3 932,1858.9 930.7,1858.9    930.7,1860.2 932,1860.2 932,1860.8 929,1860.8 929,1860.2  "/>
            <path fill="#93C8BA" d="M931.1,1857.6c-0.5,0-1-0.4-1-1.3c0-0.2,0-0.4,0.1-0.6h-0.1c-0.4,0-0.6,0.3-0.6,0.6c0,0.4,0.1,0.6,0.3,0.8   l-0.4,0.4c-0.2-0.3-0.4-0.7-0.4-1.2c0-0.7,0.4-1.2,1.1-1.2h1.9v0.6h-0.3l0,0c0.2,0.2,0.4,0.5,0.4,0.9   C932.1,1857.2,931.7,1857.6,931.1,1857.6 M930.8,1855.7L930.8,1855.7c-0.1,0.2-0.1,0.4-0.1,0.5c0,0.5,0.2,0.8,0.5,0.8   s0.5-0.2,0.5-0.6C931.6,1856.1,931.3,1855.7,930.8,1855.7"/>
            <path fill="#93C8BA" d="M930,1854.3c-0.6,0-1-0.5-1-1v-1.3h3v0.6h-1.1v0.6l1.1,0.7v0.7l-1.2-0.8   C930.7,1854.1,930.4,1854.3,930,1854.3 M930,1853.7c0.3,0,0.5-0.3,0.5-0.5v-0.6h-0.9v0.6C929.5,1853.5,929.7,1853.7,930,1853.7"/>
            <path fill="#93C8BA" d="M931.7,1849.9l-0.4-0.4c0.1-0.1,0.3-0.4,0.3-0.8s-0.2-0.6-0.4-0.6s-0.4,0.2-0.4,0.6v0.5h-0.5v-0.5   c0-0.3-0.1-0.5-0.4-0.5c-0.3,0-0.4,0.2-0.4,0.5c0,0.4,0.1,0.6,0.3,0.7l-0.4,0.4c-0.2-0.2-0.4-0.6-0.4-1.2s0.3-1.1,0.8-1.1   c0.3,0,0.6,0.2,0.7,0.5l0,0c0.1-0.3,0.4-0.5,0.7-0.5c0.6,0,1,0.5,1,1.2C932.1,1849.3,931.9,1849.7,931.7,1849.9"/>
            <path fill="#93C8BA" d="M930.5,1847c-0.9,0-1.6-0.7-1.6-1.5s0.6-1.5,1.6-1.5c0.9,0,1.6,0.7,1.6,1.5S931.4,1847,930.5,1847    M930.5,1844.6c-0.6,0-1,0.4-1,0.9s0.4,0.9,1,0.9s1-0.4,1-0.9C931.6,1845,931.1,1844.6,930.5,1844.6"/>
            <polygon fill="#93C8BA" points="930.2,1842.7 930.2,1841.5 929,1841.5 929,1840.9 932,1840.9 932,1841.5 930.7,1841.5    930.7,1842.7 932,1842.7 932,1843.3 929,1843.3 929,1842.7  "/>
            <path fill="#93C8BA" d="M931.1,1840.2c-0.5,0-1-0.4-1-1.3c0-0.2,0-0.4,0.1-0.6h-0.1c-0.4,0-0.6,0.3-0.6,0.6c0,0.4,0.1,0.6,0.3,0.8   l-0.4,0.4c-0.2-0.3-0.4-0.7-0.4-1.2c0-0.7,0.4-1.2,1.1-1.2h1.9v0.6h-0.3l0,0c0.2,0.2,0.4,0.5,0.4,0.9   C932.1,1839.8,931.7,1840.2,931.1,1840.2 M930.8,1838.3L930.8,1838.3c-0.1,0.2-0.1,0.4-0.1,0.5c0,0.5,0.2,0.8,0.5,0.8   s0.5-0.2,0.5-0.6C931.6,1838.6,931.3,1838.3,930.8,1838.3"/>
            <polygon fill="#93C8BA" points="917.3,1823 917.3,1821.6 923.8,1821.6 923.8,1818 917.3,1818 917.3,1816.6 923.8,1816.6    923.8,1815.5 926.6,1815.5 926.6,1816.7 925,1816.7 925,1823  "/>
            <path fill="#93C8BA" d="M922.3,1814.7c-1.7,0-2.9-1.2-2.9-2.7s0.9-2.7,3-2.7h0.3v3.9c0.9-0.1,1.3-0.8,1.3-1.5c0-0.5-0.2-1-0.5-1.3   l0.8-0.8c0.6,0.6,0.9,1.4,0.9,2.3C925.2,1813.4,924.1,1814.7,922.3,1814.7 M920.5,1812c0,0.7,0.6,1.2,1.2,1.3v-2.5   C921.1,1810.9,920.5,1811.3,920.5,1812"/>
            <polygon fill="#93C8BA" points="921.6,1806.9 921.6,1804.8 919.5,1804.8 919.5,1803.5 925,1803.5 925,1804.8 922.8,1804.8    922.8,1806.9 925,1806.9 925,1808.2 919.5,1808.2 919.5,1806.9  "/>
            <polygon fill="#93C8BA" points="919.5,1802.5 919.5,1797.8 920.7,1798.2 920.7,1799.5 925,1799.5 925,1800.9 920.7,1800.9    920.7,1802.5  "/>
            <path fill="#93C8BA" d="M919.5,1796.9v-1.3h0.7l0,0c-0.4-0.3-0.8-0.9-0.8-1.7c0-1.5,1.2-2.5,2.9-2.5s2.9,1.1,2.9,2.5   c0,0.8-0.4,1.4-0.8,1.7l0,0h2.8v1.3H919.5z M924,1794.2c0-0.9-0.7-1.5-1.7-1.5s-1.7,0.6-1.7,1.5s0.7,1.5,1.7,1.5   C923.2,1795.7,924,1795.1,924,1794.2"/>
            <path fill="#93C8BA" d="M923.4,1790.6c-0.9,0-1.8-0.7-1.8-2.4c0-0.3,0-0.7,0.1-1h-0.2c-0.6,0-0.9,0.5-0.9,1c0,0.4,0.2,1,0.5,1.3   l-0.8,0.8c-0.5-0.6-0.8-1.5-0.8-2.2c0-1.4,0.8-2.3,2.1-2.3h3.5v1.3h-0.6l0,0c0.4,0.3,0.7,0.8,0.7,1.5   C925.2,1789.7,924.4,1790.6,923.4,1790.6 M922.9,1787.1h-0.2c0,0.3-0.1,0.6-0.1,0.9c0,0.7,0.3,1.1,0.8,1.1c0.4,0,0.7-0.3,0.7-0.9   C924.1,1787.6,923.5,1787.1,922.9,1787.1"/>
            <path fill="#93C8BA" d="M925,1784.9h-1.1c0,0,0.1-0.2,0.1-0.3c0-0.5-0.4-0.6-1.5-0.7c-1.8-0.2-3-0.2-3-0.2v-4.2h5.5v1.3h-4.4v1.7   c0.5,0,1.2,0.1,1.8,0.1c1.8,0.1,2.7,0.5,2.7,1.7C925.1,1784.5,925.1,1784.8,925,1784.9"/>
            <path fill="#93C8BA" d="M921.5,1775.2c0-1.2,0.7-2.1,1.8-2.1s1.8,0.9,1.8,2.1v2.7h-5.5v-1.3h1.9V1775.2z M923.2,1774.5   c-0.5,0-0.8,0.4-0.8,0.9v1.2h1.6v-1.2C924,1774.9,923.8,1774.5,923.2,1774.5"/>
            <polygon fill="#93C8BA" points="921.6,1770.8 921.6,1768.7 919.5,1768.7 919.5,1767.3 925,1767.3 925,1768.7 922.8,1768.7    922.8,1770.8 925,1770.8 925,1772.1 919.5,1772.1 919.5,1770.8  "/>
            <path fill="#93C8BA" d="M923.4,1766.2c-0.9,0-1.8-0.7-1.8-2.4c0-0.3,0-0.7,0.1-1h-0.2c-0.6,0-0.9,0.4-0.9,1c0,0.4,0.2,1,0.5,1.3   l-0.8,0.8c-0.5-0.6-0.8-1.5-0.8-2.2c0-1.4,0.8-2.3,2.1-2.3h3.5v1.3h-0.6l0,0c0.4,0.3,0.7,0.8,0.7,1.5   C925.2,1765.3,924.4,1766.2,923.4,1766.2 M922.9,1762.7h-0.2c0,0.3-0.1,0.6-0.1,0.9c0,0.7,0.3,1.1,0.8,1.1c0.4,0,0.7-0.3,0.7-0.9   C924.1,1763.2,923.5,1762.7,922.9,1762.7"/>
            <path fill="#93C8BA" d="M921.3,1760.1c-1.1,0-1.8-0.9-1.8-2.1v-2.5h5.5v1.3h-1.9v0.7l1.9,1.3v1.5l-2.1-1.5   C922.7,1759.7,922,1760.1,921.3,1760.1 M921.3,1758.7c0.4,0,0.8-0.4,0.8-0.9v-0.9h-1.6v0.9C920.6,1758.3,920.9,1758.7,921.3,1758.7   "/>
            <polygon fill="#93C8BA" points="929,1823.4 929,1820.9 929.5,1821.1 929.5,1821.9 932,1821.9 932,1822.5 929.5,1822.5    929.5,1823.4  "/>
            <path fill="#93C8BA" d="M931.1,1820.7c-0.5,0-1-0.4-1-1.3c0-0.2,0-0.4,0.1-0.6h-0.1c-0.4,0-0.6,0.3-0.6,0.6c0,0.4,0.1,0.6,0.3,0.8   l-0.4,0.4c-0.2-0.3-0.4-0.7-0.4-1.2c0-0.7,0.4-1.2,1.1-1.2h1.9v0.6h-0.3l0,0c0.2,0.2,0.4,0.5,0.4,0.9   C932.1,1820.3,931.7,1820.7,931.1,1820.7 M930.8,1818.8h-0.2c0,0.2,0,0.4,0,0.5c0,0.5,0.2,0.8,0.5,0.8s0.5-0.2,0.5-0.6   C931.6,1819.1,931.3,1818.8,930.8,1818.8"/>
            <path fill="#93C8BA" d="M929,1817.3v-0.6h0.4l0,0c-0.3-0.2-0.5-0.5-0.5-1c0-0.8,0.6-1.4,1.6-1.4c0.9,0,1.6,0.6,1.6,1.4   c0,0.4-0.2,0.8-0.5,1l0,0h1.6v0.6H929z M931.6,1815.9c0-0.5-0.4-0.9-1-0.9s-1,0.4-1,0.9s0.4,0.9,1,0.9S931.6,1816.4,931.6,1815.9"/>
            <polygon fill="#93C8BA" points="931.1,1813.1 931.1,1813 929,1811.7 929,1811.1 932,1811.1 932,1811.7 930,1811.7 930,1811.7    932,1813.1 932,1813.6 929,1813.6 929,1813.1  "/>
            <path fill="#93C8BA" d="M930.5,1810.4c-0.9,0-1.5-0.7-1.6-1.5h-1.4v-0.6h1.4c0-0.9,0.7-1.5,1.6-1.5c0.9,0,1.5,0.7,1.6,1.5h1v0.6h-1   C932,1809.7,931.4,1810.4,930.5,1810.4 M930.5,1807.4c-0.6,0-1,0.4-1.1,0.9h2.1C931.6,1807.7,931.1,1807.4,930.5,1807.4    M930.5,1809.8c0.6,0,1-0.4,1.1-0.9h-2.1C929.5,1809.4,929.9,1809.8,930.5,1809.8"/>
            <polygon fill="#93C8BA" points="930.2,1805.5 930.2,1804.2 929,1804.2 929,1803.6 932,1803.6 932,1804.2 930.7,1804.2    930.7,1805.5 932,1805.5 932,1806.1 929,1806.1 929,1805.5  "/>
            <path fill="#93C8BA" d="M931.1,1802.9c-0.5,0-1-0.4-1-1.3c0-0.2,0-0.4,0.1-0.6h-0.1c-0.4,0-0.6,0.3-0.6,0.6c0,0.4,0.1,0.6,0.3,0.8   l-0.4,0.4c-0.2-0.3-0.4-0.7-0.4-1.2c0-0.7,0.4-1.2,1.1-1.2h1.9v0.6h-0.3l0,0c0.2,0.2,0.4,0.5,0.4,0.9   C932.1,1802.5,931.7,1802.9,931.1,1802.9 M930.8,1801h-0.2c0,0.2,0,0.4,0,0.5c0,0.5,0.2,0.8,0.5,0.8s0.5-0.2,0.5-0.6   C931.6,1801.4,931.3,1801,930.8,1801"/>
            <path fill="#93C8BA" d="M930,1799.6c-0.6,0-1-0.5-1-1v-1.3h3v0.6h-1.1v0.6l1.1,0.7v0.7l-1.2-0.8   C930.7,1799.4,930.4,1799.6,930,1799.6 M930,1799c0.3,0,0.5-0.3,0.5-0.5v-0.6h-0.9v0.6C929.5,1798.8,929.7,1799,930,1799"/>
            <path fill="#93C8BA" d="M931.7,1795.2l-0.4-0.4c0.1-0.1,0.3-0.4,0.3-0.8s-0.2-0.6-0.4-0.6s-0.4,0.2-0.4,0.6v0.4h-0.5v-0.4   c0-0.3-0.1-0.5-0.4-0.5c-0.3,0-0.4,0.2-0.4,0.5c0,0.4,0.1,0.6,0.3,0.7l-0.4,0.4c-0.2-0.2-0.4-0.6-0.4-1.2s0.3-1.1,0.8-1.1   c0.3,0,0.6,0.2,0.7,0.4l0,0c0.1-0.3,0.4-0.5,0.7-0.5c0.6,0,1,0.5,1,1.2C932.1,1794.6,931.9,1795,931.7,1795.2"/>
            <path fill="#93C8BA" d="M930.5,1792.3c-0.9,0-1.6-0.7-1.6-1.5s0.6-1.5,1.6-1.5c0.9,0,1.6,0.7,1.6,1.5   C932.1,1791.6,931.4,1792.3,930.5,1792.3 M930.5,1789.9c-0.6,0-1,0.4-1,0.9s0.4,0.9,1,0.9s1-0.4,1-0.9   C931.6,1790.3,931.1,1789.9,930.5,1789.9"/>
            <polygon fill="#93C8BA" points="930.2,1788 930.2,1786.8 929,1786.8 929,1786.2 932,1786.2 932,1786.8 930.7,1786.8 930.7,1788    932,1788 932,1788.6 929,1788.6 929,1788  "/>
            <path fill="#93C8BA" d="M931.1,1785.5c-0.5,0-1-0.4-1-1.3c0-0.2,0-0.4,0.1-0.6h-0.1c-0.4,0-0.6,0.3-0.6,0.6c0,0.4,0.1,0.6,0.3,0.8   l-0.4,0.4c-0.2-0.3-0.4-0.7-0.4-1.2c0-0.7,0.4-1.2,1.1-1.2h1.9v0.6h-0.3l0,0c0.2,0.2,0.4,0.5,0.4,0.9   C932.1,1785.1,931.7,1785.5,931.1,1785.5 M930.8,1783.6h-0.2c0,0.2,0,0.4,0,0.5c0,0.5,0.2,0.8,0.5,0.8s0.5-0.2,0.5-0.6   S931.3,1783.6,930.8,1783.6"/>
            <line fill="none" stroke="#93C8BA" stroke-miterlimit="10" x1="917.3" y1="1831" x2="1037.8" y2="1831"/>
        </g>
        <g id="zoneD1_2">
            <line fill="none" stroke="#93C8BA" stroke-miterlimit="10" x1="12.9" y1="692" x2="139.1" y2="692"/>
            <polygon fill="#93C8BA" points="12.9,766.6 12.9,765.2 19.4,765.2 19.4,761.5 12.9,761.5 12.9,760.1 19.4,760.1 19.4,759.1    22.2,759.1 22.2,760.3 20.6,760.3 20.6,766.6  "/>
            <path fill="#93C8BA" d="M17.9,758.3c-1.7,0-2.9-1.2-2.9-2.7s0.9-2.7,3-2.7h0.3v3.9c0.9-0.1,1.3-0.8,1.3-1.5c0-0.5-0.2-1-0.5-1.3   l0.8-0.8c0.6,0.6,0.9,1.4,0.9,2.3C20.7,757,19.7,758.3,17.9,758.3 M16.1,755.6c0,0.7,0.6,1.2,1.2,1.3v-2.5   C16.6,754.4,16.1,754.9,16.1,755.6"/>
            <polygon fill="#93C8BA" points="17.2,750.4 17.2,748.4 15.1,748.4 15.1,747 20.6,747 20.6,748.4 18.4,748.4 18.4,750.4 20.6,750.4    20.6,751.8 15.1,751.8 15.1,750.4  "/>
            <polygon fill="#93C8BA" points="15.1,746.1 15.1,741.3 16.2,741.7 16.2,743.1 20.6,743.1 20.6,744.4 16.2,744.4 16.2,746.1  "/>
            <path fill="#93C8BA" d="M15.1,740.5v-1.3h0.7l0,0c-0.4-0.3-0.8-0.9-0.8-1.7c0-1.5,1.2-2.5,2.9-2.5c1.7,0,2.9,1.1,2.9,2.5   c0,0.8-0.4,1.4-0.8,1.7l0,0h2.8v1.3H15.1z M19.5,737.8c0-0.9-0.7-1.5-1.7-1.5s-1.7,0.6-1.7,1.5s0.7,1.5,1.7,1.5   C18.8,739.2,19.5,738.6,19.5,737.8"/>
            <path fill="#93C8BA" d="M18.9,734.1c-0.9,0-1.8-0.7-1.8-2.4c0-0.3,0-0.7,0.1-1H17c-0.6,0-0.9,0.5-0.9,1c0,0.4,0.2,1,0.5,1.3   l-0.8,0.8c-0.5-0.6-0.8-1.5-0.8-2.2c0-1.4,0.8-2.3,2.1-2.3h3.5v1.3H20l0,0c0.4,0.3,0.7,0.8,0.7,1.5C20.7,733.3,20,734.1,18.9,734.1    M18.5,730.7h-0.2c0,0.3-0.1,0.6-0.1,0.9c0,0.7,0.3,1.1,0.8,1.1c0.4,0,0.7-0.3,0.7-0.9C19.7,731.1,19.1,730.7,18.5,730.7"/>
            <path fill="#93C8BA" d="M20.6,728.4h-1.1c0,0,0.1-0.2,0.1-0.3c0-0.5-0.4-0.6-1.5-0.7c-1.8-0.2-3-0.2-3-0.2V723h5.5v1.3h-4.4v1.7   c0.5,0,1.2,0.1,1.8,0.1c1.8,0.1,2.7,0.5,2.7,1.7C20.7,728.1,20.6,728.3,20.6,728.4"/>
            <path fill="#93C8BA" d="M17,718.8c0-1.2,0.7-2.1,1.8-2.1s1.8,0.9,1.8,2.1v2.7h-5.5v-1.3H17V718.8z M18.8,718.1   c-0.5,0-0.8,0.4-0.8,0.9v1.2h1.6V719C19.6,718.5,19.4,718.1,18.8,718.1"/>
            <polygon fill="#93C8BA" points="17.2,714.3 17.2,712.2 15.1,712.2 15.1,710.9 20.6,710.9 20.6,712.2 18.4,712.2 18.4,714.3    20.6,714.3 20.6,715.6 15.1,715.6 15.1,714.3  "/>
            <path fill="#93C8BA" d="M18.9,709.7c-0.9,0-1.8-0.7-1.8-2.4c0-0.3,0-0.7,0.1-1H17c-0.6,0-0.9,0.5-0.9,1c0,0.4,0.2,1,0.5,1.3   l-0.8,0.8c-0.5-0.6-0.8-1.5-0.8-2.2c0-1.4,0.8-2.3,2.1-2.3h3.5v1.3H20l0,0c0.4,0.3,0.7,0.8,0.7,1.5C20.7,708.9,20,709.7,18.9,709.7    M18.5,706.3h-0.2c0,0.3-0.1,0.6-0.1,0.9c0,0.7,0.3,1.1,0.8,1.1c0.4,0,0.7-0.3,0.7-0.9C19.7,706.7,19.1,706.3,18.5,706.3"/>
            <path fill="#93C8BA" d="M16.9,703.7c-1.1,0-1.8-0.9-1.8-2.1v-2.5h5.5v1.3h-1.9v0.7l1.9,1.3v1.5l-2.1-1.5   C18.3,703.3,17.6,703.7,16.9,703.7 M16.9,702.3c0.5,0,0.8-0.4,0.8-0.9v-0.9h-1.6v0.9C16.1,701.9,16.4,702.3,16.9,702.3"/>
            <polygon fill="#93C8BA" points="24.6,739.5 24.6,737.1 25.1,737.2 25.1,738 27.6,738 27.6,738.6 25.1,738.6 25.1,739.5  "/>
            <path fill="#93C8BA" d="M26.7,736.8c-0.5,0-1-0.4-1-1.3c0-0.2,0-0.4,0.1-0.6h-0.1c-0.4,0-0.6,0.3-0.6,0.6c0,0.4,0.1,0.6,0.3,0.8   l-0.4,0.4c-0.2-0.3-0.4-0.7-0.4-1.2c0-0.7,0.4-1.2,1.1-1.2h1.9v0.6h-0.3l0,0c0.2,0.2,0.4,0.5,0.4,0.9   C27.7,736.4,27.2,736.8,26.7,736.8 M26.4,734.9h-0.2c0,0.2,0,0.4,0,0.5c0,0.5,0.2,0.8,0.5,0.8s0.5-0.2,0.5-0.6   C27.2,735.2,26.9,734.9,26.4,734.9"/>
            <path fill="#93C8BA" d="M24.6,733.4v-0.6H25l0,0c-0.3-0.2-0.5-0.5-0.5-1c0-0.8,0.6-1.4,1.6-1.4c0.9,0,1.6,0.6,1.6,1.4   c0,0.4-0.2,0.8-0.5,1l0,0h1.6v0.6H24.6z M27.1,732c0-0.5-0.4-0.9-1-0.9s-1,0.4-1,0.9s0.4,0.9,1,0.9S27.1,732.5,27.1,732"/>
            <polygon fill="#93C8BA" points="26.6,729.2 26.6,729.2 24.6,727.8 24.6,727.3 27.6,727.3 27.6,727.8 25.6,727.8 25.6,727.9    27.6,729.2 27.6,729.8 24.6,729.8 24.6,729.2  "/>
            <path fill="#93C8BA" d="M26.1,726.5c-0.9,0-1.5-0.7-1.6-1.5h-1.4v-0.6h1.4c0-0.9,0.7-1.5,1.6-1.5s1.5,0.7,1.6,1.5h1v0.6h-1   C27.6,725.9,27,726.5,26.1,726.5 M26.1,723.5c-0.6,0-1,0.4-1.1,0.9h2.1C27.1,723.9,26.7,723.5,26.1,723.5 M26.1,725.9   c0.6,0,1-0.4,1.1-0.9h-2.1C25.1,725.6,25.5,725.9,26.1,725.9"/>
            <polygon fill="#93C8BA" points="25.8,721.6 25.8,720.3 24.6,720.3 24.6,719.7 27.6,719.7 27.6,720.3 26.3,720.3 26.3,721.6    27.6,721.6 27.6,722.2 24.6,722.2 24.6,721.6  "/>
            <path fill="#93C8BA" d="M26.7,719c-0.5,0-1-0.4-1-1.3c0-0.2,0-0.4,0.1-0.6h-0.1c-0.4,0-0.6,0.3-0.6,0.6c0,0.4,0.1,0.6,0.3,0.8   l-0.4,0.4c-0.2-0.3-0.4-0.7-0.4-1.2c0-0.7,0.4-1.2,1.1-1.2h1.9v0.6h-0.3l0,0c0.2,0.2,0.4,0.5,0.4,0.9C27.7,718.6,27.2,719,26.7,719    M26.4,717.1h-0.2c0,0.2,0,0.4,0,0.5c0,0.5,0.2,0.8,0.5,0.8s0.5-0.2,0.5-0.6C27.2,717.5,26.9,717.1,26.4,717.1"/>
            <path fill="#93C8BA" d="M25.6,715.8c-0.6,0-1-0.5-1-1v-1.3h3v0.6h-1.1v0.6l1.1,0.7v0.7l-1.2-0.8C26.3,715.5,26,715.8,25.6,715.8    M25.6,715.2c0.3,0,0.5-0.3,0.5-0.5V714h-0.9v0.6C25.1,714.9,25.3,715.2,25.6,715.2"/>
            <path fill="#93C8BA" d="M27.2,711.3l-0.4-0.4c0.1-0.1,0.3-0.4,0.3-0.8c0-0.4-0.2-0.6-0.4-0.6s-0.4,0.2-0.4,0.6v0.5h-0.5v-0.5   c0-0.3-0.1-0.5-0.4-0.5s-0.4,0.2-0.4,0.5c0,0.4,0.2,0.6,0.3,0.7l-0.4,0.4c-0.2-0.2-0.4-0.6-0.4-1.2c0-0.6,0.3-1.1,0.8-1.1   c0.3,0,0.6,0.2,0.7,0.5l0,0c0.1-0.3,0.4-0.5,0.7-0.5c0.6,0,1,0.5,1,1.2C27.6,710.7,27.5,711.1,27.2,711.3"/>
            <path fill="#93C8BA" d="M26.1,708.4c-0.9,0-1.6-0.7-1.6-1.5s0.6-1.5,1.6-1.5c0.9,0,1.6,0.7,1.6,1.5C27.6,707.7,27,708.4,26.1,708.4    M26.1,706c-0.6,0-1,0.4-1,0.9s0.4,0.9,1,0.9s1-0.4,1-0.9S26.7,706,26.1,706"/>
            <polygon fill="#93C8BA" points="25.8,704.2 25.8,702.9 24.6,702.9 24.6,702.3 27.6,702.3 27.6,702.9 26.3,702.9 26.3,704.2    27.6,704.2 27.6,704.7 24.6,704.7 24.6,704.2  "/>
            <path fill="#93C8BA" d="M26.7,701.6c-0.5,0-1-0.4-1-1.3c0-0.2,0-0.4,0.1-0.6h-0.1c-0.4,0-0.6,0.3-0.6,0.6c0,0.4,0.1,0.6,0.3,0.8   l-0.4,0.4c-0.2-0.3-0.4-0.7-0.4-1.2c0-0.7,0.4-1.2,1.1-1.2h1.9v0.6h-0.3l0,0c0.2,0.2,0.4,0.5,0.4,0.9   C27.7,701.2,27.2,701.6,26.7,701.6 M26.4,699.7h-0.2c0,0.2,0,0.4,0,0.5c0,0.5,0.2,0.8,0.5,0.8s0.5-0.2,0.5-0.6   C27.2,700,26.9,699.7,26.4,699.7"/>
            <polygon fill="#93C8BA" points="20.6,678 20.6,679.4 14.1,679.4 14.1,683.1 20.6,683.1 20.6,684.5 12.9,684.5 12.9,678  "/>
            <path fill="#93C8BA" d="M15.1,676.2v-1.3h0.7l0,0c-0.4-0.3-0.8-0.9-0.8-1.7c0-1.5,1.2-2.5,2.9-2.5c1.7,0,2.9,1.1,2.9,2.5   c0,0.8-0.4,1.4-0.8,1.7l0,0h2.8v1.3H15.1z M19.5,673.5c0-0.9-0.7-1.5-1.7-1.5s-1.7,0.6-1.7,1.5s0.7,1.5,1.7,1.5   C18.8,674.9,19.5,674.3,19.5,673.5"/>
            <polygon fill="#93C8BA" points="18.5,668.1 18.5,668.1 15.1,665.7 15.1,664.6 20.6,664.6 20.6,665.9 17.2,665.9 17.2,665.9    20.6,668.3 20.6,669.4 15.1,669.4 15.1,668.1  "/>
            <polygon fill="#93C8BA" points="16.2,659.7 16.2,661.6 20.6,661.6 20.6,663 15.1,663 15.1,659.3  "/>
            <path fill="#93C8BA" d="M17.9,658.8c-1.7,0-2.9-1.2-2.9-2.8s1.2-2.8,2.9-2.8c1.7,0,2.9,1.2,2.9,2.8S19.5,658.8,17.9,658.8    M17.9,654.6c-1,0-1.7,0.6-1.7,1.4c0,0.8,0.7,1.4,1.7,1.4s1.7-0.6,1.7-1.4C19.6,655.2,18.8,654.6,17.9,654.6"/>
            <path fill="#93C8BA" d="M15.1,652v-1.3h0.7l0,0c-0.4-0.3-0.8-0.9-0.8-1.7c0-1.5,1.2-2.5,2.9-2.5c1.7,0,2.9,1.1,2.9,2.5   c0,0.8-0.4,1.4-0.8,1.7l0,0h2.8v1.3H15.1z M19.5,649.3c0-0.9-0.7-1.5-1.7-1.5s-1.7,0.6-1.7,1.5s0.7,1.5,1.7,1.5   S19.5,650.1,19.5,649.3"/>
            <path fill="#93C8BA" d="M17.9,645.6c-1.7,0-2.9-1.2-2.9-2.8s1.2-2.8,2.9-2.8c1.7,0,2.9,1.2,2.9,2.8S19.5,645.6,17.9,645.6    M17.9,641.4c-1,0-1.7,0.6-1.7,1.4c0,0.8,0.7,1.4,1.7,1.4s1.7-0.6,1.7-1.4S18.8,641.4,17.9,641.4"/>
            <path fill="#93C8BA" d="M18,638.3c-1.1-0.2-2.9-0.3-2.9-0.3v-4h4.4v-0.7H22v1.2h-1.4v3.6H22v1.2h-2.5v-0.6   C19.3,638.6,18.7,638.4,18,638.3 M16.2,635.4v1.5c0.5,0,1.3,0.1,1.8,0.2c0.5,0.1,1,0.2,1.4,0.4l0,0v-2.1L16.2,635.4L16.2,635.4z"/>
            <polygon fill="#93C8BA" points="24.6,684.8 24.6,682.4 25.1,682.5 25.1,683.3 27.6,683.3 27.6,683.9 25.1,683.9 25.1,684.8  "/>
            <path fill="#93C8BA" d="M26.7,682.1c-0.5,0-1-0.4-1-1.3c0-0.2,0-0.4,0.1-0.6h-0.1c-0.4,0-0.6,0.3-0.6,0.6c0,0.4,0.1,0.6,0.3,0.8   L25,682c-0.2-0.3-0.4-0.7-0.4-1.2c0-0.7,0.4-1.2,1.1-1.2h1.9v0.6h-0.3l0,0c0.2,0.2,0.4,0.5,0.4,0.9   C27.7,681.7,27.2,682.1,26.7,682.1 M26.4,680.2h-0.2c0,0.2,0,0.4,0,0.5c0,0.5,0.2,0.8,0.5,0.8s0.5-0.2,0.5-0.6   C27.2,680.6,26.9,680.2,26.4,680.2"/>
            <path fill="#93C8BA" d="M24.6,678.7v-0.6H25l0,0c-0.3-0.2-0.5-0.5-0.5-1c0-0.8,0.6-1.4,1.6-1.4c0.9,0,1.6,0.6,1.6,1.4   c0,0.4-0.2,0.8-0.5,1l0,0h1.6v0.6H24.6z M27.1,677.3c0-0.5-0.4-0.9-1-0.9s-1,0.4-1,0.9s0.4,0.9,1,0.9S27.1,677.8,27.1,677.3"/>
            <polygon fill="#93C8BA" points="26.6,674.5 26.6,674.5 24.6,673.1 24.6,672.6 27.6,672.6 27.6,673.1 25.6,673.1 25.6,673.2    27.6,674.5 27.6,675.1 24.6,675.1 24.6,674.5  "/>
            <path fill="#93C8BA" d="M26.1,671.8c-0.9,0-1.5-0.7-1.6-1.5h-1.4v-0.6h1.4c0-0.9,0.7-1.5,1.6-1.5s1.5,0.7,1.6,1.5h1v0.6h-1   C27.6,671.2,27,671.8,26.1,671.8 M26.1,668.8c-0.6,0-1,0.4-1.1,0.9h2.1C27.1,669.2,26.7,668.8,26.1,668.8 M26.1,671.3   c0.6,0,1-0.4,1.1-0.9h-2.1C25.1,670.9,25.5,671.3,26.1,671.3"/>
            <polygon fill="#93C8BA" points="25.8,666.9 25.8,665.6 24.6,665.6 24.6,665 27.6,665 27.6,665.6 26.3,665.6 26.3,666.9 27.6,666.9    27.6,667.5 24.6,667.5 24.6,666.9  "/>
            <path fill="#93C8BA" d="M26.7,664.3c-0.5,0-1-0.4-1-1.3c0-0.2,0-0.4,0.1-0.6h-0.1c-0.4,0-0.6,0.3-0.6,0.6c0,0.4,0.1,0.6,0.3,0.8   l-0.4,0.4c-0.2-0.3-0.4-0.7-0.4-1.2c0-0.7,0.4-1.2,1.1-1.2h1.9v0.6h-0.3l0,0c0.2,0.2,0.4,0.5,0.4,0.9   C27.7,663.9,27.2,664.3,26.7,664.3 M26.4,662.4h-0.2c0,0.2,0,0.4,0,0.5c0,0.5,0.2,0.8,0.5,0.8s0.5-0.2,0.5-0.6   C27.2,662.8,26.9,662.4,26.4,662.4"/>
            <path fill="#93C8BA" d="M25.6,661.1c-0.6,0-1-0.5-1-1v-1.3h3v0.6h-1.1v0.6l1.1,0.7v0.7l-1.2-0.8C26.3,660.8,26,661.1,25.6,661.1    M25.6,660.5c0.3,0,0.5-0.3,0.5-0.5v-0.6h-0.9v0.6C25.1,660.2,25.3,660.5,25.6,660.5"/>
            <path fill="#93C8BA" d="M27.2,656.6l-0.4-0.4c0.1-0.1,0.3-0.4,0.3-0.8c0-0.4-0.2-0.6-0.4-0.6s-0.4,0.2-0.4,0.6v0.5h-0.5v-0.5   c0-0.3-0.1-0.5-0.4-0.5s-0.4,0.2-0.4,0.5c0,0.4,0.2,0.6,0.3,0.7l-0.4,0.4c-0.2-0.2-0.4-0.6-0.4-1.2c0-0.6,0.3-1.1,0.8-1.1   c0.3,0,0.6,0.2,0.7,0.5l0,0c0.1-0.3,0.4-0.5,0.7-0.5c0.6,0,1,0.5,1,1.2C27.6,656,27.5,656.4,27.2,656.6"/>
            <path fill="#93C8BA" d="M26.1,653.7c-0.9,0-1.6-0.7-1.6-1.5s0.6-1.5,1.6-1.5c0.9,0,1.6,0.7,1.6,1.5C27.6,653,27,653.7,26.1,653.7    M26.1,651.3c-0.6,0-1,0.4-1,0.9s0.4,0.9,1,0.9s1-0.4,1-0.9S26.7,651.3,26.1,651.3"/>
            <polygon fill="#93C8BA" points="25.8,649.5 25.8,648.2 24.6,648.2 24.6,647.6 27.6,647.6 27.6,648.2 26.3,648.2 26.3,649.5    27.6,649.5 27.6,650 24.6,650 24.6,649.5  "/>
            <path fill="#93C8BA" d="M26.7,646.9c-0.5,0-1-0.4-1-1.3c0-0.2,0-0.4,0.1-0.6h-0.1c-0.4,0-0.6,0.3-0.6,0.6c0,0.4,0.1,0.6,0.3,0.8   l-0.4,0.4c-0.2-0.3-0.4-0.7-0.4-1.2c0-0.7,0.4-1.2,1.1-1.2h1.9v0.6h-0.3l0,0c0.2,0.2,0.4,0.5,0.4,0.9   C27.7,646.5,27.2,646.9,26.7,646.9 M26.4,645h-0.2c0,0.2,0,0.4,0,0.5c0,0.5,0.2,0.8,0.5,0.8s0.5-0.2,0.5-0.6   C27.2,645.3,26.9,645,26.4,645"/>
        </g>
        <circle id="lineD2_1" fill="#FFFFFF" stroke="#E94282" stroke-width="1.5" stroke-miterlimit="10" cx="43.9" cy="37.5" r="3.5"/>
        <g id="zoneD2_1">
            <polygon fill="#93C8BA" points="48,349 46.6,349 46.6,342.5 42.9,342.5 42.9,349 41.6,349 41.6,341.3 48,341.3  "/>
            <path fill="#93C8BA" d="M49.8,343.5h1.3v0.7l0,0c0.3-0.4,0.9-0.8,1.7-0.8c1.5,0,2.5,1.2,2.5,2.9c0,1.7-1.1,2.9-2.5,2.9   c-0.8,0-1.4-0.4-1.7-0.8l0,0v2.8h-1.3V343.5z M52.5,347.9c0.9,0,1.5-0.7,1.5-1.7s-0.6-1.7-1.5-1.7s-1.5,0.7-1.5,1.7   C51.1,347.2,51.7,347.9,52.5,347.9"/>
            <polygon fill="#93C8BA" points="57.9,346.9 58,346.9 60.3,343.5 61.5,343.5 61.5,349 60.1,349 60.1,345.6 60.1,345.6 57.7,349    56.6,349 56.6,343.5 57.9,343.5  "/>
            <polygon fill="#93C8BA" points="66.4,344.6 64.4,344.6 64.4,349 63,349 63,343.5 66.8,343.5  "/>
            <path fill="#93C8BA" d="M67.2,346.2c0-1.7,1.2-2.9,2.8-2.9s2.8,1.2,2.8,2.9c0,1.7-1.2,2.9-2.8,2.9S67.2,347.9,67.2,346.2    M71.4,346.2c0-1-0.6-1.7-1.4-1.7s-1.4,0.7-1.4,1.7s0.6,1.7,1.4,1.7S71.4,347.2,71.4,346.2"/>
            <path fill="#93C8BA" d="M74,343.5h1.3v0.7l0,0c0.3-0.4,0.9-0.8,1.7-0.8c1.5,0,2.5,1.2,2.5,2.9c0,1.7-1.1,2.9-2.5,2.9   c-0.8,0-1.4-0.4-1.7-0.8l0,0v2.8H74V343.5z M76.7,347.9c0.9,0,1.5-0.7,1.5-1.7s-0.6-1.7-1.5-1.7s-1.5,0.7-1.5,1.7   C75.3,347.2,75.9,347.9,76.7,347.9"/>
            <path fill="#93C8BA" d="M80.4,346.2c0-1.7,1.2-2.9,2.8-2.9s2.8,1.2,2.8,2.9c0,1.7-1.2,2.9-2.8,2.9S80.4,347.9,80.4,346.2    M84.6,346.2c0-1-0.6-1.7-1.4-1.7s-1.4,0.7-1.4,1.7s0.6,1.7,1.4,1.7S84.6,347.2,84.6,346.2"/>
            <path fill="#93C8BA" d="M87.7,346.4c0.2-1.1,0.3-2.9,0.3-2.9h4v4.4h0.7v2.5h-1.2V349h-3.6v1.4h-1.2v-2.5h0.6   C87.4,347.7,87.6,347,87.7,346.4 M90.6,344.6h-1.5c0,0.5-0.1,1.3-0.2,1.8s-0.2,1-0.4,1.4l0,0h2.1V344.6z"/>
            <polygon fill="#93C8BA" points="51.9,353 54.3,353 54.2,353.4 53.4,353.4 53.4,355.9 52.8,355.9 52.8,353.4 51.9,353.4  "/>
            <path fill="#93C8BA" d="M54.6,355c0-0.5,0.4-1,1.3-1c0.2,0,0.4,0,0.6,0.1V354c0-0.4-0.3-0.6-0.6-0.6c-0.4,0-0.6,0.1-0.8,0.3   l-0.4-0.4c0.3-0.2,0.7-0.4,1.2-0.4c0.8,0,1.2,0.4,1.2,1.1v1.9h-0.6v-0.3l0,0c-0.2,0.2-0.5,0.4-0.9,0.4C55,356,54.6,355.6,54.6,355    M56.5,354.7v-0.1c-0.2,0-0.4,0-0.5,0c-0.5,0-0.8,0.2-0.8,0.5s0.2,0.5,0.6,0.5C56.2,355.5,56.5,355.2,56.5,354.7"/>
            <path fill="#93C8BA" d="M58,353h0.6v0.4l0,0c0.2-0.3,0.5-0.5,1-0.5c0.8,0,1.4,0.6,1.4,1.6c0,0.9-0.6,1.6-1.4,1.6   c-0.4,0-0.8-0.2-1-0.5l0,0v1.6H58V353z M59.4,355.5c0.5,0,0.9-0.4,0.9-1s-0.4-1-0.9-1s-0.9,0.4-0.9,1   C58.5,355,58.9,355.5,59.4,355.5"/>
            <polygon fill="#93C8BA" points="62.2,355 62.2,355 63.6,353 64.2,353 64.2,355.9 63.6,355.9 63.6,353.9 63.6,353.9 62.2,355.9    61.6,355.9 61.6,353 62.2,353  "/>
            <path fill="#93C8BA" d="M64.9,354.4c0-0.9,0.7-1.5,1.5-1.6v-1.4H67v1.4c0.9,0,1.5,0.7,1.5,1.6s-0.7,1.5-1.5,1.6v1h-0.6v-1   C65.5,356,64.9,355.3,64.9,354.4 M65.5,354.4c0,0.6,0.4,1,0.9,1.1v-2.1C65.8,353.4,65.5,353.8,65.5,354.4 M67.9,354.4   c0-0.6-0.4-1-0.9-1.1v2.1C67.5,355.5,67.9,355,67.9,354.4"/>
            <polygon fill="#93C8BA" points="69.8,354.1 71.1,354.1 71.1,353 71.7,353 71.7,355.9 71.1,355.9 71.1,354.6 69.8,354.6 69.8,355.9    69.2,355.9 69.2,353 69.8,353  "/>
            <path fill="#93C8BA" d="M72.4,355c0-0.5,0.4-1,1.3-1c0.2,0,0.4,0,0.6,0.1V354c0-0.4-0.3-0.6-0.6-0.6c-0.4,0-0.6,0.1-0.8,0.3   l-0.4-0.4c0.3-0.2,0.7-0.4,1.2-0.4c0.8,0,1.2,0.4,1.2,1.1v1.9h-0.6v-0.3l0,0c-0.2,0.2-0.5,0.4-0.9,0.4   C72.8,356,72.4,355.6,72.4,355 M74.3,354.7v-0.1c-0.2,0-0.4,0-0.5,0c-0.5,0-0.8,0.2-0.8,0.5s0.2,0.5,0.6,0.5   C73.9,355.5,74.3,355.2,74.3,354.7"/>
            <path fill="#93C8BA" d="M75.7,353.9c0-0.6,0.5-1,1-1H78v3h-0.6v-1.1h-0.6l-0.7,1.1h-0.7l0.8-1.2C75.9,354.7,75.7,354.3,75.7,353.9    M76.3,353.9c0,0.3,0.3,0.5,0.5,0.5h0.6v-0.9h-0.6C76.5,353.4,76.3,353.6,76.3,353.9"/>
            <path fill="#93C8BA" d="M80.1,355.6l0.4-0.4c0.1,0.1,0.4,0.3,0.8,0.3s0.6-0.2,0.6-0.4c0-0.2-0.2-0.4-0.6-0.4h-0.4v-0.5h0.4   c0.3,0,0.5-0.1,0.5-0.4s-0.2-0.4-0.5-0.4c-0.4,0-0.6,0.2-0.7,0.3l-0.4-0.4c0.2-0.2,0.6-0.4,1.2-0.4s1.1,0.3,1.1,0.8   c0,0.3-0.2,0.6-0.4,0.7l0,0c0.3,0.1,0.5,0.4,0.5,0.7c0,0.6-0.5,1-1.2,1C80.7,356,80.3,355.8,80.1,355.6"/>
            <path fill="#93C8BA" d="M83,354.4c0-0.9,0.7-1.6,1.5-1.6s1.5,0.6,1.5,1.6c0,0.9-0.7,1.6-1.5,1.6S83,355.3,83,354.4 M85.4,354.4   c0-0.6-0.4-1-0.9-1s-0.9,0.4-0.9,1s0.4,1,0.9,1C85,355.5,85.4,355,85.4,354.4"/>
            <polygon fill="#93C8BA" points="87.3,354.1 88.5,354.1 88.5,353 89.1,353 89.1,355.9 88.5,355.9 88.5,354.6 87.3,354.6 87.3,355.9    86.7,355.9 86.7,353 87.3,353  "/>
            <path fill="#93C8BA" d="M89.8,355c0-0.5,0.4-1,1.3-1c0.2,0,0.4,0,0.6,0.1V354c0-0.4-0.3-0.6-0.6-0.6c-0.4,0-0.6,0.1-0.8,0.3   l-0.4-0.4c0.3-0.2,0.7-0.4,1.2-0.4c0.8,0,1.2,0.4,1.2,1.1v1.9h-0.6v-0.3l0,0c-0.2,0.2-0.5,0.4-0.9,0.4   C90.2,356,89.8,355.6,89.8,355 M91.7,354.7v-0.1c-0.2,0-0.4,0-0.5,0c-0.5,0-0.8,0.2-0.8,0.5s0.2,0.5,0.6,0.5   C91.4,355.5,91.7,355.2,91.7,354.7"/>
            <polygon fill="#93C8BA" points="107,303 108.4,303 108.4,309.4 112,309.4 112,303 113.4,303 113.4,309.4 114.5,309.4 114.5,312.3    113.3,312.3 113.3,310.7 107,310.7  "/>
            <path fill="#93C8BA" d="M115.3,307.9c0-1.7,1.2-2.9,2.7-2.9s2.7,0.9,2.7,3v0.3h-3.9c0.1,0.9,0.8,1.3,1.5,1.3c0.5,0,1-0.2,1.3-0.5   l0.8,0.8c-0.6,0.6-1.4,0.9-2.3,0.9C116.6,310.8,115.3,309.7,115.3,307.9 M118,306.1c-0.7,0-1.2,0.6-1.3,1.2h2.5   C119.1,306.7,118.7,306.1,118,306.1"/>
            <polygon fill="#93C8BA" points="123.1,307.3 125.2,307.3 125.2,305.2 126.5,305.2 126.5,310.7 125.2,310.7 125.2,308.4    123.1,308.4 123.1,310.7 121.8,310.7 121.8,305.2 123.1,305.2  "/>
            <polygon fill="#93C8BA" points="127.5,305.2 132.2,305.2 131.8,306.3 130.5,306.3 130.5,310.7 129.1,310.7 129.1,306.3    127.5,306.3  "/>
            <path fill="#93C8BA" d="M133.1,305.2h1.3v0.7l0,0c0.3-0.4,0.9-0.8,1.7-0.8c1.5,0,2.5,1.2,2.5,2.9c0,1.7-1.1,2.9-2.5,2.9   c-0.8,0-1.4-0.4-1.7-0.8l0,0v2.8h-1.3V305.2z M135.8,309.6c0.9,0,1.5-0.7,1.5-1.7s-0.6-1.7-1.5-1.7s-1.5,0.7-1.5,1.7   S134.9,309.6,135.8,309.6"/>
            <path fill="#93C8BA" d="M139.4,309c0-0.9,0.7-1.8,2.4-1.8c0.3,0,0.7,0,1,0.1v-0.2c0-0.6-0.5-0.9-1-0.9c-0.4,0-1,0.2-1.3,0.5   l-0.8-0.8c0.6-0.5,1.5-0.8,2.2-0.8c1.4,0,2.3,0.8,2.3,2.1v3.5h-1.3v-0.5l0,0c-0.3,0.4-0.8,0.7-1.5,0.7   C140.3,310.8,139.4,310,139.4,309 M142.9,308.5v-0.2c-0.3,0-0.6-0.1-0.9-0.1c-0.7,0-1.1,0.3-1.1,0.8c0,0.4,0.3,0.7,0.9,0.7   C142.4,309.7,142.9,309.1,142.9,308.5"/>
            <path fill="#93C8BA" d="M145.1,310.7v-1.1c0,0,0.2,0.1,0.3,0.1c0.5,0,0.6-0.4,0.7-1.5c0.2-1.8,0.2-3,0.2-3h4.2v5.5h-1.3v-4.4h-1.7   c0,0.5-0.1,1.2-0.1,1.8c-0.1,1.8-0.5,2.7-1.7,2.7C145.5,310.8,145.2,310.7,145.1,310.7"/>
            <path fill="#93C8BA" d="M154.8,307.1c1.2,0,2.1,0.7,2.1,1.8c0,1.1-0.9,1.8-2.1,1.8h-2.7v-5.5h1.3v1.9L154.8,307.1L154.8,307.1z    M155.5,308.9c0-0.5-0.4-0.8-0.9-0.8h-1.2v1.6h1.2C155.1,309.7,155.5,309.4,155.5,308.9"/>
            <polygon fill="#93C8BA" points="159.2,307.3 161.3,307.3 161.3,305.2 162.7,305.2 162.7,310.7 161.3,310.7 161.3,308.4    159.2,308.4 159.2,310.7 157.9,310.7 157.9,305.2 159.2,305.2  "/>
            <path fill="#93C8BA" d="M163.8,309c0-0.9,0.7-1.8,2.4-1.8c0.3,0,0.7,0,1,0.1v-0.2c0-0.6-0.5-0.9-1-0.9c-0.4,0-1,0.2-1.3,0.5   l-0.8-0.8c0.6-0.5,1.5-0.8,2.2-0.8c1.4,0,2.3,0.8,2.3,2.1v3.5h-1.3v-0.5l0,0c-0.3,0.4-0.8,0.7-1.5,0.7   C164.7,310.8,163.8,310,163.8,309 M167.3,308.5v-0.2c-0.3,0-0.6-0.1-0.9-0.1c-0.7,0-1.1,0.3-1.1,0.8c0,0.4,0.3,0.7,0.9,0.7   C166.8,309.7,167.3,309.1,167.3,308.5"/>
            <path fill="#93C8BA" d="M169.9,307c0-1.1,0.9-1.8,2.1-1.8h2.5v5.5h-1.3v-1.9h-0.7l-1.3,1.9h-1.5l1.5-2.1   C170.3,308.4,169.9,307.6,169.9,307 M171.3,307c0,0.5,0.4,0.8,0.9,0.8h0.9v-1.6h-0.9C171.7,306.2,171.3,306.5,171.3,307"/>
            <polygon fill="#93C8BA" points="106.6,314.7 109.1,314.7 108.9,315.2 108.1,315.2 108.1,317.6 107.5,317.6 107.5,315.2    106.6,315.2  "/>
            <path fill="#93C8BA" d="M109.3,316.7c0-0.5,0.4-1,1.3-1c0.2,0,0.4,0,0.6,0.1v-0.1c0-0.4-0.3-0.6-0.6-0.6c-0.4,0-0.6,0.1-0.8,0.3   l-0.4-0.4c0.3-0.2,0.7-0.4,1.2-0.4c0.7,0,1.2,0.4,1.2,1.1v1.9h-0.6v-0.3l0,0c-0.2,0.2-0.5,0.4-0.9,0.4   C109.7,317.7,109.3,317.3,109.3,316.7 M111.2,316.4v-0.1c-0.2,0-0.4,0-0.5,0c-0.5,0-0.8,0.2-0.8,0.5s0.2,0.5,0.6,0.5   C110.9,317.2,111.2,316.9,111.2,316.4"/>
            <path fill="#93C8BA" d="M112.7,314.7h0.6v0.4l0,0c0.2-0.3,0.5-0.5,1-0.5c0.8,0,1.4,0.6,1.4,1.6c0,0.9-0.6,1.6-1.4,1.6   c-0.4,0-0.8-0.2-1-0.5l0,0v1.6h-0.6V314.7z M114.1,317.2c0.5,0,0.9-0.4,0.9-1s-0.4-1-0.9-1s-0.9,0.4-0.9,1   C113.2,316.7,113.6,317.2,114.1,317.2"/>
            <polygon fill="#93C8BA" points="116.9,316.7 117,316.7 118.3,314.7 118.9,314.7 118.9,317.6 118.3,317.6 118.3,315.6 118.3,315.6    116.9,317.6 116.4,317.6 116.4,314.7 116.9,314.7  "/>
            <path fill="#93C8BA" d="M119.6,316.2c0-0.9,0.7-1.5,1.5-1.6v-1.4h0.6v1.4c0.9,0,1.5,0.7,1.5,1.6s-0.7,1.5-1.5,1.6v1h-0.6v-1   C120.3,317.7,119.6,317,119.6,316.2 M120.2,316.2c0,0.6,0.4,1,0.9,1.1v-2.1C120.6,315.1,120.2,315.6,120.2,316.2 M122.6,316.2   c0-0.6-0.4-1-0.9-1.1v2.1C122.3,317.2,122.6,316.7,122.6,316.2"/>
            <polygon fill="#93C8BA" points="124.5,315.9 125.8,315.9 125.8,314.7 126.4,314.7 126.4,317.6 125.8,317.6 125.8,316.3    124.5,316.3 124.5,317.6 123.9,317.6 123.9,314.7 124.5,314.7  "/>
            <path fill="#93C8BA" d="M127.1,316.7c0-0.5,0.4-1,1.3-1c0.2,0,0.4,0,0.6,0.1v-0.1c0-0.4-0.3-0.6-0.6-0.6c-0.4,0-0.6,0.1-0.8,0.3   l-0.4-0.4c0.3-0.2,0.7-0.4,1.2-0.4c0.7,0,1.2,0.4,1.2,1.1v1.9H129v-0.3l0,0c-0.2,0.2-0.5,0.4-0.9,0.4   C127.5,317.7,127.1,317.3,127.1,316.7 M129,316.4v-0.1c-0.2,0-0.4,0-0.5,0c-0.5,0-0.8,0.2-0.8,0.5s0.2,0.5,0.6,0.5   C128.6,317.2,129,316.9,129,316.4"/>
            <path fill="#93C8BA" d="M130.4,315.6c0-0.6,0.5-1,1-1h1.3v3h-0.6v-1.1h-0.6l-0.7,1.1h-0.7l0.8-1.2   C130.6,316.4,130.4,316,130.4,315.6 M131,315.6c0,0.3,0.3,0.5,0.5,0.5h0.6v-0.9h-0.6C131.2,315.2,131,315.3,131,315.6"/>
            <path fill="#93C8BA" d="M134.8,317.3l0.4-0.4c0.1,0.1,0.4,0.3,0.8,0.3c0.4,0,0.6-0.2,0.6-0.4c0-0.2-0.2-0.4-0.6-0.4h-0.4v-0.5h0.4   c0.3,0,0.5-0.1,0.5-0.4s-0.2-0.4-0.5-0.4c-0.4,0-0.6,0.2-0.7,0.3l-0.4-0.4c0.2-0.2,0.6-0.4,1.2-0.4c0.6,0,1.1,0.3,1.1,0.8   c0,0.3-0.2,0.6-0.4,0.7l0,0c0.3,0.1,0.5,0.4,0.5,0.7c0,0.6-0.5,1-1.2,1C135.4,317.7,135,317.5,134.8,317.3"/>
            <path fill="#93C8BA" d="M137.7,316.2c0-0.9,0.7-1.6,1.5-1.6s1.5,0.6,1.5,1.6c0,0.9-0.7,1.6-1.5,1.6   C138.4,317.7,137.7,317.1,137.7,316.2 M140.1,316.2c0-0.6-0.4-1-0.9-1s-0.9,0.4-0.9,1s0.4,1,0.9,1   C139.7,317.2,140.1,316.8,140.1,316.2"/>
            <polygon fill="#93C8BA" points="142,315.9 143.2,315.9 143.2,314.7 143.8,314.7 143.8,317.6 143.2,317.6 143.2,316.3 142,316.3    142,317.6 141.4,317.6 141.4,314.7 142,314.7  "/>
            <path fill="#93C8BA" d="M144.5,316.7c0-0.5,0.4-1,1.3-1c0.2,0,0.4,0,0.6,0.1v-0.1c0-0.4-0.3-0.6-0.6-0.6c-0.4,0-0.6,0.1-0.8,0.3   l-0.4-0.4c0.3-0.2,0.7-0.4,1.2-0.4c0.7,0,1.2,0.4,1.2,1.1v1.9h-0.6v-0.3l0,0c-0.2,0.2-0.5,0.4-0.9,0.4   C144.9,317.7,144.5,317.3,144.5,316.7 M146.4,316.4v-0.1c-0.2,0-0.4,0-0.5,0c-0.5,0-0.8,0.2-0.8,0.5s0.2,0.5,0.6,0.5   C146.1,317.2,146.4,316.9,146.4,316.4"/>
            <line fill="none" stroke="#93C8BA" stroke-miterlimit="10" x1="100" y1="355.9" x2="100" y2="303"/>
        </g>
        <circle id="lineD1_1" fill="#FFFFFF" stroke="#F7A600" stroke-width="1.5" stroke-miterlimit="10" cx="347" cy="37" r="3.5"/>
        <linearGradient id="line9_6-lineD1_14_00000138571364164965593090000002661671652547086480_" gradientUnits="userSpaceOnUse" x1="35287.125" y1="12826.3105" x2="35291.3984" y2="12825.5674" gradientTransform="matrix(-1.5026 -0.2593 0.2575 -1.492 50491.5586 28732.6055)">
            <stop offset="0" style="stop-color:#ADACAC"/>
            <stop offset="1" style="stop-color:#F7A600"/>
        </linearGradient>
        <path id="line9_6-lineD1_14" fill="url(#line9_6-lineD1_14_00000138571364164965593090000002661671652547086480_)" d="M766.9,444.8  c0.6,0,1,0.5,1,1s-0.4,1-1,1s-1-0.4-1-1C765.9,445.2,766.4,444.8,766.9,444.8z M769.9,444.8c0.6,0,1,0.5,1,1s-0.4,1-1,1s-1-0.4-1-1  C768.8,445.2,769.4,444.8,769.9,444.8z"/>
        <circle id="lineD1_28" fill="#FFFFFF" stroke="#F7A600" stroke-width="1.5" stroke-miterlimit="10" cx="43.9" cy="515" r="3.5"/>
        <rect id="white-base-28_93_" x="503.3" y="799.6" opacity="0.65" fill="#FFFFFF" width="36.8" height="27.7"/>
        <linearGradient id="line7_3-lineD2_9_00000026883337932108950540000015465487290524601741_" gradientUnits="userSpaceOnUse" x1="-1442.838" y1="-16905.7578" x2="-1444.3895" y2="-16909.0176" gradientTransform="matrix(-0.2588 0.9659 0.9659 0.2588 16276.0996 6158.0894)">
            <stop offset="0" style="stop-color:#E94282"/>
            <stop offset="1" style="stop-color:#943F90"/>
        </linearGradient>
        <path id="line7_3-lineD2_9" fill="url(#line7_3-lineD2_9_00000026883337932108950540000015465487290524601741_)" d="M319.6,388.8  c0.3-0.3,0.8-0.3,1.1,0c0.2,0.3,0.2,0.7-0.1,1c-0.3,0.2-0.8,0.3-1.1,0C319.3,389.5,319.3,389,319.6,388.8z M318.1,387.4  c0.3-0.3,0.7-0.3,1,0s0.3,0.8,0,1s-0.7,0.3-1,0C317.9,388.1,317.8,387.6,318.1,387.4z M316.7,385.9c0.3-0.3,0.7-0.3,1,0s0.3,0.8,0,1  s-0.7,0.3-1,0C316.5,386.7,316.4,386.2,316.7,385.9z"/>
        <path id="lineD2_10" fill="#E94282" d="M345.5,503.1c-4.5,0-8.2,3.7-8.2,8.2c0,4.5,3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  S350,503.1,345.5,503.1z M349.7,511.4c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C347.8,507.1,349.8,509.2,349.7,511.4z"/>
        <linearGradient id="line7_6-line14_21_00000149375798144961847360000009633938605672852113_" gradientUnits="userSpaceOnUse" x1="20388.4004" y1="-24252.582" x2="20431.0723" y2="-24259.998" gradientTransform="matrix(0.6876 -0.7261 0.7261 0.6876 3939.9536 32131.2637)">
            <stop offset="0.4064" style="stop-color:#D14A43"/>
            <stop offset="0.4275" style="stop-color:#CB494B"/>
            <stop offset="0.5411" style="stop-color:#AD4470"/>
            <stop offset="0.6327" style="stop-color:#9B4088"/>
            <stop offset="0.6901" style="stop-color:#943F90"/>
        </linearGradient>
        <path id="line7_6-line14_21" fill="url(#line7_6-line14_21_00000149375798144961847360000009633938605672852113_)" d="M357.4,625.2  c0-0.9,0.5-1.5,1.4-1.6c0.9,0,1.6,0.6,1.6,1.4c0,0.9-0.6,1.6-1.4,1.6C358.3,626.6,357.6,626,357.4,625.2z M351.4,611.5  c0-0.9,0.5-1.5,1.4-1.6c0.9,0,1.6,0.6,1.6,1.4c0,0.9-0.6,1.6-1.4,1.6C352.3,612.9,351.6,612.3,351.4,611.5z M353.4,616.1  c0-0.9,0.5-1.5,1.4-1.6c0.9,0,1.6,0.6,1.6,1.4c0,0.9-0.6,1.6-1.4,1.6S353.6,616.9,353.4,616.1z M355.4,620.7c0-0.9,0.5-1.5,1.4-1.6  c0.9,0,1.6,0.6,1.6,1.4c0,0.9-0.6,1.6-1.4,1.6C356.3,622,355.6,621.5,355.4,620.7z M359.5,629.8c0-0.9,0.5-1.5,1.4-1.6  c0.9,0,1.6,0.6,1.6,1.4c0,0.9-0.6,1.6-1.4,1.6C360.2,631.2,359.5,630.7,359.5,629.8z M361.5,634.4c0-0.9,0.5-1.5,1.4-1.6  c0.9,0,1.6,0.6,1.6,1.4c0,0.9-0.6,1.6-1.4,1.6C362.2,635.8,361.5,635.2,361.5,634.4z M349.4,606.9c0-0.9,0.5-1.5,1.4-1.6  c0.9,0,1.6,0.6,1.6,1.4c0,0.9-0.6,1.6-1.4,1.6C350.2,608.3,349.6,607.7,349.4,606.9z M365.4,643.6c0-0.9,0.5-1.5,1.4-1.6  c0.9,0,1.6,0.6,1.6,1.4c0,0.9-0.6,1.6-1.4,1.6C366.3,644.9,365.6,644.4,365.4,643.6z M363.4,639c0-0.9,0.5-1.5,1.4-1.6  c0.9,0,1.6,0.6,1.6,1.4c0,0.9-0.6,1.6-1.4,1.6C364.3,640.4,363.6,639.8,363.4,639z M367.5,648.1c0-0.9,0.5-1.5,1.4-1.6  c0.9,0,1.6,0.6,1.6,1.4c0,0.9-0.6,1.6-1.4,1.6C368.2,649.6,367.5,649,367.5,648.1z M369.5,652.7c0-0.9,0.5-1.5,1.4-1.6  c0.9,0,1.6,0.6,1.6,1.4c0,0.9-0.6,1.6-1.4,1.6C370.2,654.1,369.5,653.6,369.5,652.7z M371.5,657.3c0-0.9,0.5-1.5,1.4-1.6  c0.9,0,1.6,0.6,1.6,1.4c0,0.9-0.6,1.6-1.4,1.6C372.3,658.7,371.6,658.1,371.5,657.3z"/>
        <g id="railway_belorus">
            <path fill="#201600" d="M665.5,707.7c0,0.8-0.6,1.5-1.7,1.5h-1.7v-4.9h3l-0.2,0.6h-2.1v1.3h0.9C664.9,706.3,665.5,707,665.5,707.7    M663.7,706.9h-0.9v1.7h0.9c0.6,0,1-0.3,1-0.8C664.7,707.2,664.3,706.9,663.7,706.9"/>
            <path fill="#201600" d="M666.2,707.5c0-1.1,0.8-1.8,1.7-1.8s1.7,0.6,1.7,1.9v0.1H667c0.1,0.6,0.6,1,1.1,1c0.3,0,0.6-0.1,0.9-0.3   l0.4,0.4c-0.4,0.3-0.8,0.5-1.4,0.5C667,709.3,666.2,708.6,666.2,707.5 M667.8,706.3c-0.5,0-0.9,0.4-1,0.9h1.9   C668.7,706.7,668.4,706.3,667.8,706.3"/>
            <path fill="#201600" d="M670,709.2v-0.6c0,0,0.1,0,0.2,0c0.3,0,0.4-0.3,0.5-1c0.1-1,0.1-1.9,0.1-1.9h2.5v3.5h-0.7v-2.9h-1.3   c0,0.3,0,0.8-0.1,1.3c-0.1,1.1-0.3,1.6-1,1.6C670.1,709.3,670,709.2,670,709.2"/>
            <path fill="#201600" d="M674.3,707.5c0-1.1,0.8-1.8,1.7-1.8c1,0,1.7,0.8,1.7,1.8c0,1.1-0.8,1.8-1.7,1.8   C675,709.3,674.3,708.5,674.3,707.5 M677,707.5c0-0.7-0.4-1.2-1-1.2s-1,0.5-1,1.2s0.4,1.2,1,1.2S677,708.2,677,707.5"/>
            <path fill="#201600" d="M678.7,705.8h0.7v0.5l0,0c0.2-0.3,0.6-0.6,1.1-0.6c0.9,0,1.6,0.8,1.6,1.8c0,1.1-0.7,1.8-1.6,1.8   c-0.5,0-0.9-0.3-1.1-0.6l0,0v1.8h-0.7V705.8z M680.4,708.7c0.6,0,1-0.5,1-1.2s-0.4-1.2-1-1.2s-1,0.5-1,1.2   C679.3,708.2,679.8,708.7,680.4,708.7"/>
            <path fill="#201600" d="M682.5,710.3l0.5-0.5c0.1,0.1,0.2,0.1,0.4,0.1c0.3,0,0.5-0.1,0.7-0.7l-1.4-3.6h0.8l1,2.7l0,0l0.9-2.7h0.7   l-1.3,3.7c-0.2,0.6-0.6,1.1-1.3,1.1C683,710.6,682.7,710.5,682.5,710.3"/>
            <path fill="#201600" d="M686.4,707.5c0-1.1,0.7-1.8,1.7-1.8c0.5,0,1,0.2,1.2,0.5l-0.4,0.4c-0.2-0.1-0.4-0.3-0.8-0.3   c-0.6,0-1,0.5-1,1.2s0.4,1.2,1,1.2c0.4,0,0.6-0.2,0.8-0.3l0.4,0.4c-0.3,0.3-0.7,0.5-1.2,0.5C687.2,709.3,686.4,708.5,686.4,707.5"/>
            <path fill="#201600" d="M689.9,707.5c0-1.1,0.7-1.8,1.7-1.8c0.5,0,1,0.2,1.2,0.5l-0.4,0.4c-0.2-0.1-0.4-0.3-0.8-0.3   c-0.6,0-1,0.5-1,1.2s0.4,1.2,1,1.2c0.4,0,0.6-0.2,0.8-0.3l0.4,0.4c-0.3,0.3-0.7,0.5-1.2,0.5C690.7,709.3,689.9,708.5,689.9,707.5"/>
            <polygon fill="#201600" points="694.4,707.2 694.8,707.2 695.9,705.8 696.7,705.8 695.4,707.4 696.9,709.2 696.1,709.2    694.9,707.7 694.4,707.7 694.4,709.2 693.7,709.2 693.7,705.8 694.4,705.8  "/>
            <polygon fill="#201600" points="698.3,708.1 698.3,708.1 699.9,705.8 700.5,705.8 700.5,709.2 699.8,709.2 699.8,706.9    699.8,706.9 698.2,709.2 697.6,709.2 697.6,705.8 698.3,705.8  "/>
            <path fill="#201600" d="M702.4,708.1L702.4,708.1l1.6-2.4h0.6v3.5H704v-2.4l0,0l-1.6,2.4h-0.6v-3.5h0.7v2.4H702.4z M702.1,704.8   l0.4-0.4c0.1,0.1,0.4,0.3,0.7,0.3s0.6-0.2,0.7-0.3l0.4,0.4c-0.1,0.2-0.5,0.5-1.1,0.5C702.6,705.3,702.2,705,702.1,704.8"/>
            <path fill="#201600" d="M663.8,712.4c0.6,0,1,0.4,1,0.9c0,0.3-0.2,0.6-0.5,0.7l0,0c0.4,0.1,0.6,0.5,0.6,0.8c0,0.6-0.5,1-1.1,1H662   v-3.5L663.8,712.4L663.8,712.4z M664.1,713.4c0-0.3-0.2-0.4-0.5-0.4h-0.9v0.8h0.9C663.9,713.8,664.1,713.6,664.1,713.4    M664.3,714.8c0-0.3-0.3-0.5-0.6-0.5h-0.9v1h0.9C664,715.3,664.3,715.2,664.3,714.8"/>
            <path fill="#201600" d="M665.7,714.1c0-1.1,0.8-1.8,1.7-1.8c1,0,1.7,0.8,1.7,1.8c0,1.1-0.8,1.8-1.7,1.8   C666.5,716,665.7,715.2,665.7,714.1 M668.5,714.1c0-0.7-0.4-1.2-1-1.2s-1,0.5-1,1.2s0.4,1.2,1,1.2   C668.1,715.4,668.5,714.8,668.5,714.1"/>
            <polygon fill="#201600" points="670.8,713.8 671.3,713.8 672.3,712.4 673.1,712.4 671.9,714 673.3,715.9 672.5,715.9 671.3,714.4    670.8,714.4 670.8,715.9 670.1,715.9 670.1,712.4 670.8,712.4  "/>
            <path fill="#201600" d="M673.6,715.5l0.4-0.4c0.2,0.2,0.4,0.3,0.9,0.3s0.7-0.2,0.7-0.5s-0.2-0.5-0.7-0.5h-0.5v-0.5h0.5   c0.4,0,0.6-0.2,0.6-0.5s-0.3-0.4-0.6-0.4c-0.4,0-0.7,0.2-0.9,0.3l-0.4-0.4c0.3-0.2,0.7-0.5,1.4-0.5s1.2,0.4,1.2,0.9   c0,0.3-0.2,0.6-0.5,0.8l0,0c0.4,0.1,0.6,0.4,0.6,0.8c0,0.7-0.6,1.1-1.4,1.1C674.3,716,673.9,715.7,673.6,715.5"/>
            <path fill="#201600" d="M677.1,714.8c0-0.6,0.4-1.1,1.5-1.1c0.2,0,0.5,0,0.7,0.1v-0.2c0-0.4-0.3-0.7-0.7-0.7s-0.7,0.2-0.9,0.3   l-0.4-0.4c0.3-0.3,0.8-0.5,1.4-0.5c0.9,0,1.4,0.5,1.4,1.3v2.3h-0.7v-0.4l0,0c-0.2,0.3-0.6,0.5-1,0.5   C677.6,716,677.1,715.5,677.1,714.8 M679.4,714.5v-0.2c-0.2,0-0.4,0-0.6,0c-0.6,0-0.9,0.2-0.9,0.6c0,0.3,0.2,0.5,0.7,0.5   C679,715.4,679.4,715.1,679.4,714.5"/>
            <path fill="#201600" d="M680.8,715.9v-0.6c0,0,0.1,0,0.2,0c0.3,0,0.4-0.3,0.5-1c0.1-1,0.1-1.9,0.1-1.9h2.5v3.5h-0.7V713h-1.3   c0,0.3,0,0.8-0.1,1.3c-0.1,1.1-0.3,1.6-1,1.6C681,715.9,680.8,715.9,680.8,715.9"/>
            <rect x="648.4" y="704.3" fill="#484B4E" width="9.8" height="9.8"/>
            <path fill="#FFFFFF" d="M651.1,708.6h2.5v1.5h-2.5V708.6z M648.4,708.6h2.2v1.5h-2.2V708.6z M656,711h-2v-2.4h1L656,711z    M656.9,712l-1.8-4.4h-6.8v5.4h8.6V712z"/>
            <rect x="648.4" y="713.6" fill="#C2524D" width="9.8" height="0.5"/>
        </g>
        <rect id="white-base-28_53_" x="676.4" y="621" opacity="0.65" fill="#FFFFFF" width="46" height="12"/>
        <linearGradient id="line2_9-lineD1_17_00000000182784994637709150000017500154015015034506_" gradientUnits="userSpaceOnUse" x1="8141.5718" y1="-23245.0547" x2="8136.7549" y2="-23244.5918" gradientTransform="matrix(0.9471 -0.321 0.321 0.9471 373.3769 25340.8418)">
            <stop offset="0" style="stop-color:#4BAF4F"/>
            <stop offset="1" style="stop-color:#F7A600"/>
        </linearGradient>
        <path id="line2_9-lineD1_17" fill="url(#line2_9-lineD1_17_00000000182784994637709150000017500154015015034506_)" d="M620,711.5  c0.8-0.3,1.6,0.2,1.8,1s-0.1,1.6-0.8,1.9c-0.8,0.3-1.6-0.1-1.9-0.9S619.2,711.8,620,711.5z M624.7,709.9c0.8-0.3,1.6,0.2,1.8,1  c0.3,0.8-0.1,1.6-0.8,1.9c-0.8,0.3-1.6-0.1-1.9-0.9C623.4,711,623.9,710.1,624.7,709.9z M615.3,713.1c0.8-0.3,1.6,0.2,1.8,1  c0.3,0.8-0.1,1.6-0.8,1.9c-0.8,0.3-1.6-0.1-1.9-0.9C614,714.2,614.7,713.3,615.3,713.1z"/>
        <linearGradient id="line5_10-lineD1_17_00000057837227481306064080000017050391110917607091_" gradientUnits="userSpaceOnUse" x1="10379.5137" y1="-23863.6914" x2="10373.5771" y2="-23869.248" gradientTransform="matrix(0.9148 -0.404 0.404 0.9148 770.0222 26748.5898)">
            <stop offset="0" style="stop-color:#925233"/>
            <stop offset="1" style="stop-color:#F7A600"/>
        </linearGradient>
        <path id="line5_10-lineD1_17" fill="url(#line5_10-lineD1_17_00000057837227481306064080000017050391110917607091_)" d="  M620.5,721.8c0.8,0.3,1.1,1.2,0.8,2s-1.1,1.2-1.9,0.9c-0.8-0.3-1.2-1.1-0.8-1.9C618.8,722,619.7,721.5,620.5,721.8z M625.1,723.6  c0.8,0.3,1.1,1.2,0.8,2s-1.1,1.2-1.9,0.9c-0.8-0.3-1.2-1.1-0.8-1.9C623.4,723.6,624.4,723.2,625.1,723.6z M615.9,720  c0.8,0.3,1.1,1.2,0.8,2s-1.1,1.2-1.9,0.9c-0.8-0.3-1.2-1.1-0.8-1.9C614.2,720,615.2,719.8,615.9,720z"/>
        <rect id="white-base-28_96_" x="711.3" y="567.7" opacity="0.65" fill="#FFFFFF" width="59.2" height="12"/>
        <g id="railway_sav">
            <path fill="#201600" d="M711.4,571.2c0-1.5,1-2.5,2.4-2.5c0.7,0,1.2,0.2,1.7,0.7l-0.5,0.5c-0.3-0.3-0.7-0.5-1.2-0.5   c-1,0-1.6,0.8-1.6,1.9c0,1.1,0.7,1.9,1.6,1.9c0.5,0,0.9-0.2,1.2-0.5l0.5,0.5c-0.4,0.4-1,0.7-1.7,0.7   C712.4,573.7,711.4,572.6,711.4,571.2"/>
            <path fill="#201600" d="M716,572.6c0-0.6,0.4-1.1,1.5-1.1c0.2,0,0.5,0,0.7,0.1v-0.2c0-0.4-0.3-0.7-0.7-0.7s-0.7,0.2-0.9,0.3   l-0.4-0.4c0.3-0.3,0.8-0.5,1.4-0.5c0.9,0,1.4,0.5,1.4,1.3v2.3h-0.7v-0.4l0,0c-0.2,0.3-0.6,0.5-1,0.5   C716.6,573.7,716,573.2,716,572.6 M718.3,572.2V572c-0.2,0-0.4,0-0.6,0c-0.6,0-0.9,0.2-0.9,0.6c0,0.3,0.2,0.5,0.7,0.5   C717.9,573.1,718.3,572.8,718.3,572.2"/>
            <path fill="#201600" d="M721.8,570.2c0.6,0,1.1,0.4,1.1,0.9c0,0.3-0.2,0.6-0.5,0.7l0,0c0.4,0.1,0.6,0.5,0.6,0.8c0,0.6-0.5,1-1.1,1   h-1.8v-3.5L721.8,570.2L721.8,570.2z M722.2,571.1c0-0.3-0.2-0.4-0.5-0.4h-0.9v0.8h0.9C722,571.5,722.2,571.4,722.2,571.1    M722.3,572.6c0-0.3-0.3-0.5-0.6-0.5h-0.9v1h0.9C722.1,573.1,722.3,572.9,722.3,572.6"/>
            <path fill="#201600" d="M723.7,571.9c0-1.1,0.8-1.8,1.7-1.8s1.7,0.6,1.7,1.9v0.1h-2.6c0.1,0.6,0.6,1,1.1,1c0.3,0,0.6-0.1,0.9-0.3   l0.4,0.4c-0.3,0.3-0.8,0.5-1.4,0.5C724.5,573.7,723.7,573,723.7,571.9 M725.1,569.7h-0.8v-0.9h0.8V569.7z M725.4,570.7   c-0.5,0-0.9,0.4-1,0.9h1.9C726.3,571.1,726,570.7,725.4,570.7 M726.5,569.7h-0.8v-0.9h0.8V569.7z"/>
            <path fill="#201600" d="M727.5,573.6V573c0,0,0.1,0,0.2,0c0.3,0,0.4-0.3,0.5-1c0.1-1,0.1-1.9,0.1-1.9h2.5v3.5h-0.7v-2.9h-1.3   c0,0.3,0,0.8-0.1,1.3c-0.1,1.1-0.3,1.6-1,1.6C727.7,573.7,727.6,573.6,727.5,573.6"/>
            <path fill="#201600" d="M731.9,571.9c0-1.1,0.8-1.8,1.7-1.8c1,0,1.7,0.8,1.7,1.8c0,1.1-0.8,1.8-1.7,1.8   C732.6,573.7,731.9,572.9,731.9,571.9 M734.6,571.9c0-0.7-0.4-1.2-1-1.2s-1,0.5-1,1.2s0.4,1.2,1,1.2   C734.2,573.1,734.6,572.6,734.6,571.9"/>
            <path fill="#201600" d="M737.9,570.2c0.6,0,1,0.4,1,0.9c0,0.3-0.2,0.6-0.5,0.7l0,0c0.4,0.1,0.6,0.5,0.6,0.8c0,0.6-0.5,1-1.1,1h-1.8   v-3.5L737.9,570.2L737.9,570.2z M738.3,571.1c0-0.3-0.2-0.4-0.5-0.4H737v0.8h0.9C738.1,571.5,738.3,571.4,738.3,571.1 M738.5,572.6   c0-0.3-0.3-0.5-0.6-0.5H737v1h0.9C738.2,573.1,738.5,572.9,738.5,572.6"/>
            <path fill="#201600" d="M739.9,571.9c0-1.1,0.7-1.8,1.7-1.8c0.5,0,1,0.2,1.2,0.5l-0.4,0.4c-0.2-0.1-0.4-0.3-0.8-0.3   c-0.6,0-1,0.5-1,1.2s0.4,1.2,1,1.2c0.4,0,0.6-0.2,0.8-0.3l0.4,0.4c-0.3,0.3-0.7,0.5-1.2,0.5C740.6,573.7,739.9,572.9,739.9,571.9"/>
            <polygon fill="#201600" points="744.4,571.6 744.8,571.6 745.9,570.2 746.7,570.2 745.4,571.7 746.9,573.6 746,573.6 744.9,572.1    744.4,572.1 744.4,573.6 743.7,573.6 743.7,570.2 744.4,570.2  "/>
            <polygon fill="#201600" points="748.2,572.5 748.2,572.5 749.8,570.2 750.5,570.2 750.5,573.6 749.8,573.6 749.8,571.2    749.8,571.2 748.2,573.6 747.5,573.6 747.5,570.2 748.2,570.2  "/>
            <path fill="#201600" d="M752.4,572.5L752.4,572.5l1.6-2.4h0.6v3.5h-0.7v-2.4l0,0l-1.6,2.4h-0.6v-3.5h0.7V572.5z M752,569.2l0.4-0.4   c0.1,0.1,0.4,0.3,0.7,0.3s0.6-0.2,0.7-0.3l0.4,0.4c-0.1,0.2-0.5,0.5-1.1,0.5C752.6,569.7,752.2,569.4,752,569.2"/>
            <path fill="#201600" d="M734.3,574.7c0.6,0,1,0.4,1,0.9c0,0.3-0.2,0.6-0.5,0.7l0,0c0.4,0.1,0.6,0.5,0.6,0.8c0,0.6-0.5,1-1.1,1h-1.8   v-3.5L734.3,574.7L734.3,574.7z M734.6,575.7c0-0.3-0.2-0.4-0.5-0.4h-0.9v0.8h0.9C734.4,576.1,734.6,575.9,734.6,575.7    M734.8,577.1c0-0.3-0.3-0.5-0.6-0.5h-0.9v1h0.9C734.5,577.6,734.8,577.4,734.8,577.1"/>
            <path fill="#201600" d="M736.2,576.4c0-1.1,0.8-1.8,1.7-1.8c1,0,1.7,0.8,1.7,1.8c0,1.1-0.8,1.8-1.7,1.8S736.2,577.5,736.2,576.4    M739,576.4c0-0.7-0.4-1.2-1-1.2s-1,0.5-1,1.2s0.4,1.2,1,1.2C738.5,577.6,739,577.1,739,576.4"/>
            <polygon fill="#201600" points="741.3,576.1 741.7,576.1 742.8,574.7 743.6,574.7 742.3,576.3 743.8,578.2 742.9,578.2    741.8,576.7 741.3,576.7 741.3,578.2 740.6,578.2 740.6,574.7 741.3,574.7  "/>
            <path fill="#201600" d="M744.1,577.8l0.4-0.4c0.2,0.2,0.4,0.3,0.9,0.3s0.7-0.2,0.7-0.5s-0.2-0.5-0.7-0.5H745v-0.5h0.5   c0.4,0,0.6-0.2,0.6-0.5s-0.3-0.4-0.6-0.4c-0.4,0-0.7,0.2-0.9,0.3l-0.4-0.4c0.3-0.2,0.7-0.5,1.4-0.5s1.2,0.4,1.2,0.9   c0,0.3-0.2,0.6-0.5,0.8l0,0c0.4,0.1,0.6,0.4,0.6,0.8c0,0.7-0.6,1.1-1.4,1.1C744.8,578.2,744.4,578,744.1,577.8"/>
            <path fill="#201600" d="M747.6,577.1c0-0.6,0.4-1.1,1.5-1.1c0.2,0,0.5,0,0.7,0.1v-0.2c0-0.4-0.3-0.7-0.7-0.7s-0.7,0.2-0.9,0.3   l-0.4-0.4c0.3-0.3,0.8-0.5,1.4-0.5c0.9,0,1.4,0.5,1.4,1.3v2.3h-0.7v-0.4l0,0c-0.2,0.3-0.6,0.5-1,0.5   C748.1,578.2,747.6,577.7,747.6,577.1 M749.8,576.8v-0.2c-0.2,0-0.4,0-0.6,0c-0.6,0-0.9,0.2-0.9,0.6c0,0.3,0.2,0.5,0.7,0.5   C749.4,577.7,749.8,577.3,749.8,576.8"/>
            <path fill="#201600" d="M751.3,578.2v-0.6c0,0,0.1,0,0.2,0c0.3,0,0.4-0.3,0.5-1c0.1-1,0.1-1.9,0.1-1.9h2.5v3.5h-0.7v-2.9h-1.3   c0,0.3,0,0.8-0.1,1.3c-0.1,1.1-0.3,1.6-1,1.6C751.5,578.2,751.3,578.2,751.3,578.2"/>
            <rect x="757.7" y="568.9" fill="#484B4E" width="9.8" height="9.8"/>
            <path fill="#FFFFFF" d="M760.4,573.2h2.5v1.5h-2.5V573.2z M757.7,573.2h2.2v1.5h-2.2V573.2z M765.3,575.7h-2v-2.4h1L765.3,575.7z    M766.3,576.6l-1.8-4.4h-6.8v5.4h8.6V576.6z"/>
            <rect x="757.7" y="578.3" fill="#C2524D" width="9.8" height="0.5"/>
        </g>
        <g id="railway_riga">
            <path fill="#201600" d="M1005.5,540c0,0.8-0.6,1.5-1.7,1.5h-1v1.9h-0.7v-4.9h1.7C1005,538.5,1005.5,539.2,1005.5,540 M1004.8,540   c0-0.5-0.4-0.9-0.9-0.9h-1v1.7h1C1004.4,540.9,1004.8,540.6,1004.8,540"/>
            <polygon fill="#201600" points="1007.1,542.3 1007.1,542.3 1008.7,540 1009.3,540 1009.3,543.4 1008.6,543.4 1008.6,541.1    1008.6,541.1 1007,543.4 1006.4,543.4 1006.4,540 1007.1,540  "/>
            <polygon fill="#201600" points="1011,540 1012,541.4 1012.3,541.4 1012.3,540 1013,540 1013,541.4 1013.4,541.4 1014.4,540    1015.1,540 1014,541.6 1015.3,543.4 1014.5,543.4 1013.4,542 1013,542 1013,543.4 1012.3,543.4 1012.3,542 1012,542 1010.8,543.4    1010,543.4 1011.4,541.6 1010.2,540  "/>
            <path fill="#201600" d="M1015.7,541.7c0-1.1,0.7-1.8,1.7-1.8c0.5,0,1,0.2,1.2,0.5l-0.4,0.4c-0.2-0.1-0.4-0.3-0.8-0.3   c-0.6,0-1,0.5-1,1.2s0.4,1.2,1,1.2c0.4,0,0.6-0.2,0.8-0.3l0.4,0.4c-0.3,0.3-0.7,0.5-1.2,0.5   C1016.4,543.5,1015.7,542.8,1015.7,541.7"/>
            <polygon fill="#201600" points="1020.2,541.4 1020.6,541.4 1021.7,540 1022.4,540 1021.2,541.6 1022.6,543.4 1021.8,543.4    1020.6,542 1020.2,542 1020.2,543.4 1019.5,543.4 1019.5,540 1020.2,540  "/>
            <polygon fill="#201600" points="1024,542.3 1024,542.3 1025.6,540 1026.2,540 1026.2,543.4 1025.6,543.4 1025.6,541.1    1025.5,541.1 1023.9,543.4 1023.3,543.4 1023.3,540 1024,540  "/>
            <path fill="#201600" d="M1028.1,542.3L1028.1,542.3l1.6-2.4h0.6v3.5h-0.7V541l0,0l-1.6,2.4h-0.6V540h0.7V542.3z M1027.8,539   l0.4-0.4c0.1,0.1,0.4,0.3,0.7,0.3c0.3,0,0.6-0.2,0.7-0.3l0.4,0.4c-0.1,0.2-0.5,0.5-1.1,0.5S1027.9,539.2,1027.8,539"/>
            <path fill="#201600" d="M1003.8,544.6c0.6,0,1.1,0.4,1.1,0.9c0,0.3-0.2,0.6-0.5,0.7l0,0c0.4,0.1,0.6,0.5,0.6,0.8c0,0.6-0.5,1-1.1,1   h-1.8v-3.5L1003.8,544.6L1003.8,544.6z M1004.2,545.6c0-0.3-0.2-0.4-0.5-0.4h-0.9v0.8h0.9C1004,546,1004.2,545.8,1004.2,545.6    M1004.3,547c0-0.3-0.3-0.5-0.6-0.5h-0.9v1h0.9C1004.1,547.5,1004.3,547.4,1004.3,547"/>
            <path fill="#201600" d="M1005.8,546.3c0-1.1,0.8-1.8,1.7-1.8c1,0,1.7,0.8,1.7,1.8c0,1.1-0.8,1.8-1.7,1.8   C1006.5,548.1,1005.8,547.4,1005.8,546.3 M1008.5,546.3c0-0.7-0.4-1.2-1-1.2s-1,0.5-1,1.2s0.4,1.2,1,1.2S1008.5,547,1008.5,546.3"/>
            <polygon fill="#201600" points="1010.9,546 1011.3,546 1012.4,544.6 1013.1,544.6 1011.9,546.2 1013.4,548.1 1012.5,548.1    1011.3,546.6 1010.9,546.6 1010.9,548.1 1010.2,548.1 1010.2,544.6 1010.9,544.6  "/>
            <path fill="#201600" d="M1013.7,547.7l0.4-0.4c0.2,0.2,0.4,0.3,0.9,0.3s0.7-0.2,0.7-0.5s-0.2-0.5-0.7-0.5h-0.5V546h0.5   c0.4,0,0.6-0.2,0.6-0.5s-0.3-0.4-0.6-0.4c-0.4,0-0.7,0.2-0.9,0.3l-0.4-0.4c0.3-0.2,0.7-0.5,1.4-0.5s1.2,0.4,1.2,0.9   c0,0.3-0.2,0.6-0.5,0.8l0,0c0.4,0.1,0.6,0.4,0.6,0.8c0,0.7-0.6,1.1-1.4,1.1C1014.4,548.1,1013.9,547.9,1013.7,547.7"/>
            <path fill="#201600" d="M1017.2,547c0-0.6,0.4-1.1,1.5-1.1c0.2,0,0.5,0,0.7,0.1v-0.2c0-0.4-0.3-0.7-0.7-0.7s-0.7,0.2-0.9,0.3   l-0.4-0.4c0.3-0.3,0.8-0.5,1.4-0.5c0.9,0,1.4,0.5,1.4,1.3v2.3h-0.7v-0.4l0,0c-0.2,0.3-0.6,0.5-1,0.5   C1017.7,548.1,1017.2,547.7,1017.2,547 M1019.4,546.7v-0.2c-0.2,0-0.4,0-0.6,0c-0.6,0-0.9,0.2-0.9,0.6c0,0.3,0.2,0.5,0.7,0.5   C1019,547.6,1019.4,547.2,1019.4,546.7"/>
            <path fill="#201600" d="M1020.8,548.1v-0.6c0,0,0.1,0,0.2,0c0.3,0,0.4-0.3,0.5-1c0.1-1,0.1-1.9,0.1-1.9h2.6v3.5h-0.7v-2.9h-1.3   c0,0.3,0,0.8-0.1,1.3c-0.1,1.1-0.3,1.6-1,1.6C1021,548.1,1020.9,548.1,1020.8,548.1"/>
            <rect x="988.5" y="538.5" fill="#484B4E" width="9.8" height="9.8"/>
            <path fill="#FFFFFF" d="M991.2,542.8h2.5v1.5h-2.5V542.8z M988.5,542.8h2.2v1.5h-2.2V542.8z M996.1,545.2h-2v-2.4h1L996.1,545.2z    M997.1,546.2l-1.8-4.4h-6.8v5.4h8.6V546.2z"/>
            <rect x="988.5" y="547.9" fill="#C2524D" width="9.8" height="0.5"/>
        </g>
        <rect id="white-base-28_97_" x="1099.3" y="713.3" opacity="0.65" fill="#FFFFFF" width="37.8" height="21.1"/>
        <g id="line-14-1">
            <path fill="none" d="M970.2,326.2c-0.6-0.6-1.2-1-2-1.3s-1.6-0.5-2.4-0.5s-1.6,0.2-2.4,0.5c-0.7,0.3-1.4,0.8-2,1.3   c-0.6,0.6-1,1.2-1.3,2s-0.5,1.6-0.5,2.4s0.2,1.6,0.5,2.4c0.3,0.7,0.8,1.4,1.3,2c0.6,0.6,1.2,1,2,1.3s1.6,0.5,2.4,0.5   c0.8,0,1.6-0.2,2.4-0.5c0.7-0.3,1.4-0.8,2-1.3c0.6-0.6,1-1.2,1.3-2s0.5-1.6,0.5-2.4s-0.2-1.6-0.5-2.4   C971.2,327.5,970.7,326.8,970.2,326.2z M963.8,334h-1.3v-5.8h-1.3l0.5-1.2h2.1V334z M970.3,332.4h-0.7v1.6h-1.3v-1.6H965v-1   l1.9-4.4h1.4l-1.9,4.3h1.9v-1.8h1.3v1.8h1.1L970.3,332.4z"/>
            <path fill="none" d="M971.4,325c-0.7-0.7-1.6-1.3-2.5-1.7c-1-0.4-2.1-0.6-3.1-0.6c-1.1,0-2.1,0.2-3.1,0.6c-0.9,0.4-1.8,1-2.5,1.7   s-1.3,1.6-1.7,2.5c-0.4,1-0.6,2-0.6,3.1s0.2,2.1,0.6,3.1c0.4,0.9,1,1.8,1.7,2.5s1.6,1.3,2.5,1.7c1,0.4,2,0.6,3.1,0.6   s2.1-0.2,3.1-0.6c0.9-0.4,1.8-1,2.5-1.7s1.3-1.6,1.7-2.5c0.4-1,0.6-2,0.6-3.1s-0.2-2.1-0.6-3.1C972.7,326.6,972.1,325.7,971.4,325z    M972.2,333.3c-0.3,0.8-0.8,1.6-1.5,2.2c-0.6,0.6-1.4,1.1-2.2,1.5c-0.9,0.3-1.8,0.5-2.7,0.5s-1.8-0.2-2.7-0.5   c-0.8-0.3-1.6-0.8-2.2-1.5c-0.6-0.6-1.1-1.4-1.5-2.2c-0.4-0.8-0.5-1.8-0.5-2.7s0.2-1.8,0.5-2.7c0.3-0.8,0.8-1.6,1.5-2.2   c0.6-0.6,1.4-1.1,2.2-1.5s1.8-0.5,2.7-0.5s1.8,0.2,2.7,0.5c0.8,0.3,1.6,0.8,2.2,1.5c0.6,0.6,1.1,1.4,1.5,2.2   c0.4,0.8,0.5,1.8,0.5,2.7S972.5,332.4,972.2,333.3z"/>
            <path fill="#E32213" d="M973.7,327.3c-0.4-1-1-1.9-1.8-2.7c-0.8-0.7-1.7-1.4-2.7-1.8c-1.1-0.5-2.2-0.7-3.4-0.7   c-1.1,0-2.2,0.3-3.3,0.7c-1,0.4-1.9,1-2.7,1.8c-0.7,0.8-1.4,1.7-1.8,2.7c-0.5,1-0.7,2.1-0.7,3.3c0,1.2,0.3,2.3,0.7,3.4   c0.4,1,1,1.9,1.8,2.7c0.8,0.7,1.7,1.4,2.7,1.8c1,0.5,2.1,0.7,3.3,0.7c1.1,0,2.3-0.2,3.4-0.7c1-0.4,1.9-1,2.7-1.8   c0.7-0.8,1.4-1.7,1.8-2.7c0.5-1.1,0.7-2.2,0.7-3.4C974.4,329.5,974.1,328.4,973.7,327.3z M973.1,333.7c-0.4,0.9-1,1.8-1.7,2.5   s-1.6,1.3-2.5,1.7c-1,0.4-2,0.6-3.1,0.6s-2.1-0.2-3.1-0.6c-0.9-0.4-1.8-1-2.5-1.7s-1.3-1.6-1.7-2.5c-0.4-1-0.6-2-0.6-3.1   s0.2-2.1,0.6-3.1c0.4-0.9,1-1.8,1.7-2.5s1.6-1.3,2.5-1.7c1-0.4,2-0.6,3.1-0.6c1,0,2.1,0.2,3.1,0.6c0.9,0.4,1.8,1,2.5,1.7   s1.3,1.6,1.7,2.5c0.4,1,0.6,2,0.6,3.1S973.5,332.7,973.1,333.7z"/>
            <path fill="#E32213" d="M970.7,325.7c-0.6-0.7-1.4-1.2-2.2-1.5c-0.9-0.3-1.8-0.5-2.7-0.5s-1.9,0.1-2.7,0.5s-1.6,0.9-2.2,1.5   c-0.7,0.6-1.2,1.4-1.5,2.2c-0.3,0.9-0.5,1.8-0.5,2.7s0.1,1.9,0.5,2.7c0.4,0.8,0.9,1.6,1.5,2.2c0.6,0.7,1.4,1.2,2.2,1.5   c0.9,0.3,1.8,0.5,2.7,0.5s1.8-0.2,2.7-0.5c0.8-0.4,1.6-0.9,2.2-1.5c0.7-0.6,1.2-1.4,1.5-2.2c0.3-0.9,0.5-1.8,0.5-2.7   s-0.1-1.9-0.5-2.7S971.3,326.3,970.7,325.7z M971.5,333c-0.3,0.8-0.7,1.4-1.3,2c-0.6,0.5-1.3,1-2,1.3c-0.8,0.3-1.6,0.5-2.4,0.5   c-0.8,0-1.6-0.2-2.4-0.5s-1.4-0.7-2-1.3c-0.5-0.6-1-1.3-1.3-2c-0.3-0.8-0.5-1.6-0.5-2.4s0.2-1.6,0.5-2.4s0.7-1.4,1.3-2   c0.6-0.5,1.3-1,2-1.3c0.8-0.3,1.6-0.5,2.4-0.5s1.6,0.2,2.4,0.5c0.8,0.3,1.4,0.7,2,1.3c0.5,0.6,1,1.3,1.3,2c0.3,0.8,0.5,1.6,0.5,2.4   S971.8,332.2,971.5,333z"/>
            <polygon fill="#1D1D1B" points="961.2,328.2 962.5,328.2 962.5,334 963.8,334 963.8,327 961.7,327  "/>
            <polygon fill="#1D1D1B" points="969.6,329.5 968.3,329.5 968.3,331.3 966.4,331.3 968.3,327 966.9,327 965,331.4 965,332.4    968.3,332.4 968.3,334 969.6,334 969.6,332.4 970.3,332.4 970.7,331.3 969.6,331.3  "/>
            <polygon fill="#D25043" points="979.3,326.7 980.9,331.5 981,331.5 982.6,326.7 983.5,326.7 985.7,333.3 984.4,333.3 983,328.8    983,328.8 981.5,333.3 980.4,333.3 978.9,328.8 978.9,328.8 977.5,333.3 976.2,333.3 978.4,326.7  "/>
            <polygon fill="#D25043" points="986.8,326.7 988,326.7 988,332.3 991.2,332.3 991.2,326.7 992.4,326.7 992.4,332.3 993.3,332.3    993.3,334.7 992.3,334.7 992.3,333.3 986.8,333.3  "/>
            <polygon fill="#D25043" points="995.9,329.4 996.7,329.4 998.7,326.7 1000,326.7 997.7,329.8 1000.4,333.3 998.9,333.3    996.7,330.4 995.9,330.4 995.9,333.3 994.7,333.3 994.7,326.7 995.9,326.7  "/>
        </g>
        <g id="line-14-2">
            <path fill="none" d="M414.6,1083.2c-0.6-0.6-1.2-1-2-1.3s-1.6-0.5-2.4-0.5s-1.6,0.2-2.4,0.5c-0.7,0.3-1.4,0.8-2,1.3   c-0.6,0.6-1,1.2-1.3,2s-0.5,1.6-0.5,2.4s0.2,1.6,0.5,2.4c0.3,0.7,0.8,1.4,1.3,2c0.6,0.6,1.2,1,2,1.3s1.6,0.5,2.4,0.5   s1.6-0.2,2.4-0.5c0.7-0.3,1.4-0.8,2-1.3c0.6-0.6,1-1.2,1.3-2s0.5-1.6,0.5-2.4s-0.2-1.6-0.5-2.4   C415.6,1084.5,415.1,1083.8,414.6,1083.2z M408.2,1091h-1.3v-5.8h-1.3l0.5-1.2h2.1L408.2,1091L408.2,1091z M414.7,1089.4H414v1.6   h-1.3v-1.6h-3.3v-1l1.9-4.4h1.4l-1.9,4.3h1.9v-1.8h1.3v1.8h1.1L414.7,1089.4z"/>
            <path fill="none" d="M415.8,1082c-0.7-0.7-1.6-1.3-2.5-1.7c-1-0.4-2.1-0.6-3.1-0.6c-1.1,0-2.1,0.2-3.1,0.6c-0.9,0.4-1.8,1-2.5,1.7   s-1.3,1.6-1.7,2.5c-0.4,1-0.6,2-0.6,3.1s0.2,2.1,0.6,3.1c0.4,0.9,1,1.8,1.7,2.5s1.6,1.3,2.5,1.7c1,0.4,2,0.6,3.1,0.6   s2.1-0.2,3.1-0.6c0.9-0.4,1.8-1,2.5-1.7s1.3-1.6,1.7-2.5c0.4-1,0.6-2,0.6-3.1s-0.2-2.1-0.6-3.1   C417.1,1083.6,416.5,1082.7,415.8,1082z M416.6,1090.3c-0.3,0.8-0.8,1.6-1.5,2.2c-0.6,0.6-1.4,1.1-2.2,1.5   c-0.9,0.3-1.8,0.5-2.7,0.5c-0.9,0-1.8-0.2-2.7-0.5c-0.8-0.3-1.6-0.8-2.2-1.5c-0.6-0.6-1.1-1.4-1.5-2.2c-0.4-0.8-0.5-1.8-0.5-2.7   s0.2-1.8,0.5-2.7c0.3-0.8,0.8-1.6,1.5-2.2c0.6-0.6,1.4-1.1,2.2-1.5c0.8-0.4,1.8-0.5,2.7-0.5s1.8,0.2,2.7,0.5   c0.8,0.3,1.6,0.8,2.2,1.5c0.6,0.6,1.1,1.4,1.5,2.2c0.4,0.8,0.5,1.8,0.5,2.7S416.9,1089.4,416.6,1090.3z"/>
            <path fill="#E32213" d="M418.1,1084.3c-0.4-1-1-1.9-1.8-2.7c-0.8-0.7-1.7-1.4-2.7-1.8c-1.1-0.5-2.2-0.7-3.4-0.7   c-1.1,0-2.2,0.3-3.3,0.7c-1,0.4-1.9,1-2.7,1.8c-0.7,0.8-1.4,1.7-1.8,2.7c-0.5,1-0.7,2.1-0.7,3.3c0,1.2,0.3,2.3,0.7,3.4   c0.4,1,1,1.9,1.8,2.7c0.8,0.7,1.7,1.4,2.7,1.8c1,0.5,2.1,0.7,3.3,0.7c1.1,0,2.3-0.2,3.4-0.7c1-0.4,1.9-1,2.7-1.8   c0.7-0.8,1.4-1.7,1.8-2.7c0.5-1.1,0.7-2.2,0.7-3.4C418.8,1086.5,418.5,1085.4,418.1,1084.3z M417.5,1090.7c-0.4,0.9-1,1.8-1.7,2.5   s-1.6,1.3-2.5,1.7c-1,0.4-2,0.6-3.1,0.6s-2.1-0.2-3.1-0.6c-0.9-0.4-1.8-1-2.5-1.7s-1.3-1.6-1.7-2.5c-0.4-1-0.6-2-0.6-3.1   s0.2-2.1,0.6-3.1c0.4-0.9,1-1.8,1.7-2.5s1.6-1.3,2.5-1.7c1-0.4,2-0.6,3.1-0.6c1,0,2.1,0.2,3.1,0.6c0.9,0.4,1.8,1,2.5,1.7   s1.3,1.6,1.7,2.5c0.4,1,0.6,2,0.6,3.1S417.9,1089.7,417.5,1090.7z"/>
            <path fill="#E32213" d="M415.1,1082.7c-0.6-0.7-1.4-1.2-2.2-1.5c-0.9-0.3-1.8-0.5-2.7-0.5s-1.9,0.1-2.7,0.5   c-0.8,0.4-1.6,0.9-2.2,1.5c-0.7,0.6-1.2,1.4-1.5,2.2c-0.3,0.9-0.5,1.8-0.5,2.7s0.1,1.9,0.5,2.7c0.4,0.8,0.9,1.6,1.5,2.2   c0.6,0.7,1.4,1.2,2.2,1.5c0.9,0.3,1.8,0.5,2.7,0.5c0.9,0,1.8-0.2,2.7-0.5c0.8-0.4,1.6-0.9,2.2-1.5c0.7-0.6,1.2-1.4,1.5-2.2   c0.3-0.9,0.5-1.8,0.5-2.7s-0.1-1.9-0.5-2.7S415.7,1083.3,415.1,1082.7z M415.9,1090c-0.3,0.8-0.7,1.4-1.3,2c-0.6,0.5-1.3,1-2,1.3   c-0.8,0.3-1.6,0.5-2.4,0.5s-1.6-0.2-2.4-0.5s-1.4-0.7-2-1.3c-0.5-0.6-1-1.3-1.3-2c-0.3-0.8-0.5-1.6-0.5-2.4s0.2-1.6,0.5-2.4   s0.7-1.4,1.3-2c0.6-0.5,1.3-1,2-1.3c0.8-0.3,1.6-0.5,2.4-0.5s1.6,0.2,2.4,0.5s1.4,0.7,2,1.3c0.5,0.6,1,1.3,1.3,2   c0.3,0.8,0.5,1.6,0.5,2.4S416.2,1089.2,415.9,1090z"/>
            <polygon fill="#1D1D1B" points="405.6,1085.2 406.9,1085.2 406.9,1091 408.2,1091 408.2,1084 406.1,1084  "/>
            <polygon fill="#1D1D1B" points="414,1086.5 412.7,1086.5 412.7,1088.3 410.8,1088.3 412.7,1084 411.3,1084 409.4,1088.4    409.4,1089.4 412.7,1089.4 412.7,1091 414,1091 414,1089.4 414.7,1089.4 415.1,1088.3 414,1088.3  "/>
            <polygon fill="#D25043" points="400.5,1097.6 402.1,1102.4 402.1,1102.4 403.7,1097.6 404.7,1097.6 406.8,1104.2 405.5,1104.2    404.1,1099.8 404.1,1099.8 402.6,1104.2 401.5,1104.2 400,1099.8 400,1099.8 398.7,1104.2 397.3,1104.2 399.5,1097.6  "/>
            <polygon fill="#D25043" points="408,1097.6 409.2,1097.6 409.2,1103.2 412.3,1103.2 412.3,1097.6 413.5,1097.6 413.5,1103.2    414.4,1103.2 414.4,1105.6 413.4,1105.6 413.4,1104.2 408,1104.2  "/>
            <polygon fill="#D25043" points="417,1100.3 417.8,1100.3 419.8,1097.6 421.2,1097.6 418.8,1100.7 421.5,1104.2 420,1104.2    417.9,1101.3 417,1101.3 417,1104.2 415.8,1104.2 415.8,1097.6 417,1097.6  "/>
        </g>
        <g id="railway_LYK">
            <path fill="#201600" d="M1079,719.3v-0.7c0,0,0.1,0,0.3,0c0.3,0,0.4-0.4,0.5-1c0.1-0.9,0.3-3.3,0.3-3.3h3.3v4.9h-0.7v-4.3h-1.9   c0,0.6-0.1,1.9-0.2,2.7c-0.1,1-0.4,1.6-1.2,1.6C1079.2,719.4,1079.1,719.3,1079,719.3"/>
            <path fill="#201600" d="M1084.4,717.6c0-1.1,0.8-1.8,1.7-1.8c0.9,0,1.7,0.6,1.7,1.9v0.1h-2.6c0.1,0.6,0.6,1,1.1,1   c0.3,0,0.6-0.1,0.9-0.3l0.4,0.4c-0.3,0.3-0.8,0.5-1.4,0.5C1085.2,719.4,1084.4,718.7,1084.4,717.6 M1086.1,716.4   c-0.5,0-0.9,0.4-1,0.9h1.9C1087,716.8,1086.6,716.4,1086.1,716.4"/>
            <polygon fill="#201600" points="1089.4,717.3 1090.9,717.3 1090.9,715.9 1091.5,715.9 1091.5,719.3 1090.9,719.3 1090.9,717.8    1089.4,717.8 1089.4,719.3 1088.7,719.3 1088.7,715.9 1089.4,715.9  "/>
            <polygon fill="#201600" points="1093.4,718.2 1093.4,718.2 1095.1,715.9 1095.7,715.9 1095.7,719.3 1095,719.3 1095,717 1095,717    1093.4,719.3 1092.7,719.3 1092.7,715.9 1093.4,715.9  "/>
            <polygon fill="#201600" points="1097.6,717.3 1099.1,717.3 1099.1,715.9 1099.8,715.9 1099.8,719.3 1099.1,719.3 1099.1,717.8    1097.6,717.8 1097.6,719.3 1096.9,719.3 1096.9,715.9 1097.6,715.9  "/>
            <polygon fill="#201600" points="1103,716.4 1101.6,716.4 1101.6,719.3 1101,719.3 1101,715.9 1103.2,715.9  "/>
            <path fill="#201600" d="M1104,715.9h0.7v0.5l0,0c0.2-0.3,0.6-0.6,1.1-0.6c0.9,0,1.6,0.8,1.6,1.8c0,1.1-0.7,1.8-1.6,1.8   c-0.5,0-0.9-0.3-1.1-0.6l0,0v1.8h-0.7V715.9z M1105.7,718.8c0.6,0,1-0.5,1-1.2s-0.4-1.2-1-1.2s-1,0.5-1,1.2   C1104.6,718.3,1105,718.8,1105.7,718.8"/>
            <path fill="#201600" d="M1108.1,718.3c0-0.6,0.4-1.1,1.5-1.1c0.2,0,0.5,0,0.7,0.1v-0.2c0-0.4-0.3-0.7-0.7-0.7   c-0.4,0-0.7,0.2-0.9,0.3l-0.4-0.4c0.3-0.3,0.8-0.5,1.4-0.5c0.9,0,1.4,0.5,1.4,1.3v2.3h-0.7V719l0,0c-0.2,0.3-0.6,0.5-1,0.5   C1108.6,719.4,1108.1,718.9,1108.1,718.3 M1110.3,717.9v-0.2c-0.2,0-0.4,0-0.6,0c-0.6,0-0.9,0.2-0.9,0.6c0,0.3,0.2,0.5,0.7,0.5   C1109.9,718.8,1110.3,718.5,1110.3,717.9"/>
            <path fill="#201600" d="M1112.4,717.6c0.1-1.1,0.2-1.8,0.2-1.8h2.3v2.9h0.5v1.4h-0.6v-0.8h-2.4v0.8h-0.6v-1.4h0.3   C1112.3,718.6,1112.4,718.2,1112.4,717.6 M1114.2,716.4h-1c0,0.3-0.1,0.8-0.1,1.3c0,0.4-0.1,0.8-0.3,1l0,0h1.5L1114.2,716.4   L1114.2,716.4z"/>
            <path fill="#201600" d="M1116,717.6c0-1.1,0.7-1.8,1.7-1.8c0.5,0,1,0.2,1.2,0.5l-0.4,0.4c-0.2-0.1-0.4-0.3-0.8-0.3   c-0.6,0-1,0.5-1,1.2s0.4,1.2,1,1.2c0.4,0,0.6-0.2,0.8-0.3l0.4,0.4c-0.3,0.3-0.7,0.5-1.2,0.5C1116.8,719.4,1116,718.7,1116,717.6"/>
            <polygon fill="#201600" points="1120.5,717.3 1120.9,717.3 1122,715.9 1122.8,715.9 1121.5,717.5 1123,719.3 1122.1,719.3    1121,717.8 1120.5,717.8 1120.5,719.3 1119.8,719.3 1119.8,715.9 1120.5,715.9  "/>
            <polygon fill="#201600" points="1124.3,718.2 1124.3,718.2 1126,715.9 1126.6,715.9 1126.6,719.3 1125.9,719.3 1125.9,717    1125.9,717 1124.3,719.3 1123.6,719.3 1123.6,715.9 1124.3,715.9  "/>
            <path fill="#201600" d="M1128.5,718.2L1128.5,718.2l1.6-2.4h0.6v3.5h-0.7V717l0,0l-1.6,2.4h-0.6v-3.5h0.7V718.2z M1128.1,714.9   l0.4-0.4c0.1,0.1,0.4,0.3,0.7,0.3c0.3,0,0.6-0.2,0.7-0.3l0.4,0.4c-0.1,0.2-0.5,0.5-1.1,0.5C1128.7,715.4,1128.3,715.1,1128.1,714.9   "/>
            <polygon fill="#201600" points="1131.9,718.3 1132.7,718.3 1132.7,719.3 1132.3,720.3 1131.9,720.3 1132.2,719.3 1131.9,719.3  "/>
            <path fill="#201600" d="M1079.3,722.6c0-0.8,0.6-1.5,1.7-1.5h1.9v4.9h-0.7v-2h-1l-1.4,2h-0.9l1.5-2.1l0,0   C1079.7,723.7,1079.3,723.2,1079.3,722.6 M1081,721.7c-0.5,0-1,0.3-1,0.8c0,0.6,0.4,0.9,1,0.9h1.1v-1.7H1081z"/>
            <path fill="#201600" d="M1084.2,722.5h0.7v0.5l0,0c0.2-0.3,0.6-0.6,1.1-0.6c0.9,0,1.6,0.8,1.6,1.8c0,1.1-0.7,1.8-1.6,1.8   c-0.5,0-0.9-0.3-1.1-0.6l0,0v1.8h-0.7V722.5z M1085.9,725.5c0.6,0,1-0.5,1-1.2s-0.4-1.2-1-1.2s-1,0.5-1,1.2   C1084.9,724.9,1085.3,725.5,1085.9,725.5"/>
            <path fill="#201600" d="M1088.4,724.3c0-1.1,0.8-1.8,1.7-1.8c1,0,1.7,0.8,1.7,1.8c0,1.1-0.8,1.8-1.7,1.8   C1089.2,726.1,1088.4,725.3,1088.4,724.3 M1091.2,724.3c0-0.7-0.4-1.2-1-1.2s-1,0.5-1,1.2s0.4,1.2,1,1.2S1091.2,725,1091.2,724.3"/>
            <path fill="#201600" d="M1092.6,724.3c0-1.1,0.7-1.8,1.7-1.8c0.5,0,1,0.2,1.2,0.5l-0.4,0.4c-0.2-0.1-0.4-0.3-0.8-0.3   c-0.6,0-1,0.5-1,1.2s0.4,1.2,1,1.2c0.4,0,0.6-0.2,0.8-0.3l0.4,0.4c-0.3,0.3-0.7,0.5-1.2,0.5   C1093.3,726.1,1092.6,725.3,1092.6,724.3"/>
            <path fill="#201600" d="M1096,726v-0.6c0,0,0.1,0,0.2,0c0.3,0,0.4-0.3,0.5-1c0.1-1,0.1-1.9,0.1-1.9h2.6v3.5h-0.7v-2.9h-1.3   c0,0.3,0,0.8-0.1,1.3c-0.1,1.1-0.3,1.6-1,1.6C1096.2,726.1,1096,726,1096,726"/>
            <path fill="#201600" d="M1100.3,725c0-0.6,0.4-1.1,1.5-1.1c0.2,0,0.5,0,0.7,0.1v-0.2c0-0.4-0.3-0.7-0.7-0.7c-0.4,0-0.7,0.2-0.9,0.3   l-0.4-0.4c0.3-0.3,0.8-0.5,1.4-0.5c0.9,0,1.4,0.5,1.4,1.3v2.3h-0.7v-0.4l0,0c-0.2,0.3-0.6,0.5-1,0.5   C1100.8,726.1,1100.3,725.6,1100.3,725 M1102.5,724.6v-0.2c-0.2,0-0.4,0-0.6,0c-0.6,0-0.9,0.2-0.9,0.6c0,0.3,0.2,0.5,0.7,0.5   C1102.1,725.5,1102.5,725.2,1102.5,724.6"/>
            <path fill="#201600" d="M1106,722.5c0.6,0,1.1,0.4,1.1,0.9c0,0.3-0.2,0.6-0.5,0.7l0,0c0.4,0.1,0.6,0.5,0.6,0.8c0,0.6-0.5,1-1.1,1   h-1.8v-3.5L1106,722.5L1106,722.5z M1106.4,723.5c0-0.3-0.2-0.4-0.5-0.4h-0.9v0.8h0.9C1106.2,723.9,1106.4,723.8,1106.4,723.5    M1106.5,725c0-0.3-0.3-0.5-0.6-0.5h-0.9v1h0.9C1106.3,725.4,1106.5,725.3,1106.5,725"/>
            <path fill="#201600" d="M1108,724.3c0-1.1,0.7-1.8,1.7-1.8c0.5,0,1,0.2,1.2,0.5l-0.4,0.4c-0.2-0.1-0.4-0.3-0.8-0.3   c-0.6,0-1,0.5-1,1.2s0.4,1.2,1,1.2c0.4,0,0.6-0.2,0.8-0.3l0.4,0.4c-0.3,0.3-0.7,0.5-1.2,0.5C1108.7,726.1,1108,725.3,1108,724.3"/>
            <polygon fill="#201600" points="1112.5,723.9 1112.9,723.9 1114,722.5 1114.7,722.5 1113.5,724.1 1114.9,726 1114.1,726    1112.9,724.5 1112.5,724.5 1112.5,726 1111.8,726 1111.8,722.5 1112.5,722.5  "/>
            <polygon fill="#201600" points="1116.3,724.9 1116.3,724.9 1117.9,722.5 1118.5,722.5 1118.5,726 1117.9,726 1117.9,723.6    1117.8,723.6 1116.2,726 1115.6,726 1115.6,722.5 1116.3,722.5  "/>
            <path fill="#201600" d="M1120.4,724.9L1120.4,724.9l1.6-2.4h0.6v3.5h-0.7v-2.4l0,0l-1.6,2.4h-0.6v-3.5h0.7V724.9z M1120.1,721.5   l0.4-0.4c0.1,0.1,0.4,0.3,0.7,0.3c0.3,0,0.6-0.2,0.7-0.3l0.4,0.4c-0.1,0.2-0.5,0.5-1.1,0.5C1120.6,722.1,1120.2,721.7,1120.1,721.5   "/>
            <polygon fill="#201600" points="1080,731.6 1080,731.6 1081.6,729.2 1082.2,729.2 1082.2,732.6 1081.6,732.6 1081.6,730.3    1081.5,730.3 1079.9,732.6 1079.3,732.6 1079.3,729.2 1080,729.2  "/>
            <polygon fill="#201600" points="1086.2,729.8 1086.9,729.8 1088.4,727.7 1089.3,727.7 1087.5,730 1089.5,732.6 1088.6,732.6    1086.9,730.4 1086.2,730.4 1086.2,732.6 1085.5,732.6 1085.5,727.7 1086.2,727.7  "/>
            <path fill="#201600" d="M1089.9,731.6c0-0.6,0.4-1.1,1.5-1.1c0.2,0,0.5,0,0.7,0.1v-0.2c0-0.4-0.3-0.7-0.7-0.7   c-0.4,0-0.7,0.2-0.9,0.3l-0.4-0.4c0.3-0.3,0.8-0.5,1.4-0.5c0.9,0,1.4,0.5,1.4,1.3v2.3h-0.7v-0.4l0,0c-0.2,0.3-0.6,0.5-1,0.5   C1090.4,732.7,1089.9,732.2,1089.9,731.6 M1092.1,731.3v-0.2c-0.2,0-0.4,0-0.6,0c-0.6,0-0.9,0.2-0.9,0.6c0,0.3,0.2,0.5,0.7,0.5   C1091.7,732.2,1092.1,731.8,1092.1,731.3"/>
            <path fill="#201600" d="M1093.6,732.2l0.4-0.4c0.2,0.2,0.4,0.3,0.9,0.3s0.7-0.2,0.7-0.5s-0.2-0.5-0.7-0.5h-0.5v-0.5h0.5   c0.4,0,0.6-0.2,0.6-0.5s-0.3-0.4-0.6-0.4c-0.4,0-0.7,0.2-0.9,0.3l-0.4-0.4c0.3-0.2,0.7-0.5,1.4-0.5c0.7,0,1.2,0.4,1.2,0.9   c0,0.3-0.2,0.6-0.5,0.8l0,0c0.4,0.1,0.6,0.4,0.6,0.8c0,0.7-0.6,1.1-1.4,1.1C1094.3,732.7,1093.9,732.5,1093.6,732.2"/>
            <path fill="#201600" d="M1097.1,731.6c0-0.6,0.4-1.1,1.5-1.1c0.2,0,0.5,0,0.7,0.1v-0.2c0-0.4-0.3-0.7-0.7-0.7   c-0.4,0-0.7,0.2-0.9,0.3l-0.4-0.4c0.3-0.3,0.8-0.5,1.4-0.5c0.9,0,1.4,0.5,1.4,1.3v2.3h-0.7v-0.4l0,0c-0.2,0.3-0.6,0.5-1,0.5   C1097.6,732.7,1097.1,732.2,1097.1,731.6 M1099.4,731.3v-0.2c-0.2,0-0.4,0-0.6,0c-0.6,0-0.9,0.2-0.9,0.6c0,0.3,0.2,0.5,0.7,0.5   C1099,732.2,1099.4,731.8,1099.4,731.3"/>
            <polygon fill="#201600" points="1101.9,730.6 1103.4,730.6 1103.4,729.2 1104.1,729.2 1104.1,732.6 1103.4,732.6 1103.4,731.1    1101.9,731.1 1101.9,732.6 1101.2,732.6 1101.2,729.2 1101.9,729.2  "/>
            <path fill="#201600" d="M1105.1,730.9c0-1.1,0.7-1.8,1.7-1.8c0.5,0,1,0.2,1.2,0.5l-0.4,0.4c-0.2-0.1-0.4-0.3-0.8-0.3   c-0.6,0-1,0.5-1,1.2s0.4,1.2,1,1.2c0.4,0,0.6-0.2,0.8-0.3l0.4,0.4c-0.3,0.3-0.7,0.5-1.2,0.5C1105.8,732.7,1105.1,732,1105.1,730.9"/>
            <polygon fill="#201600" points="1109.5,730.6 1110,730.6 1111,729.2 1111.8,729.2 1110.6,730.8 1112,732.6 1111.2,732.6    1110,731.2 1109.5,731.2 1109.5,732.6 1108.9,732.6 1108.9,729.2 1109.5,729.2  "/>
            <polygon fill="#201600" points="1113.4,731.6 1113.4,731.6 1115,729.2 1115.6,729.2 1115.6,732.6 1114.9,732.6 1114.9,730.3    1114.9,730.3 1113.3,732.6 1112.7,732.6 1112.7,729.2 1113.4,729.2  "/>
            <path fill="#201600" d="M1117.5,731.6L1117.5,731.6l1.6-2.4h0.6v3.5h-0.7v-2.4l0,0l-1.6,2.4h-0.6v-3.5h0.7V731.6z M1117.2,728.2   l0.4-0.4c0.1,0.1,0.4,0.3,0.7,0.3c0.3,0,0.6-0.2,0.7-0.3l0.4,0.4c-0.1,0.2-0.5,0.5-1.1,0.5S1117.3,728.4,1117.2,728.2"/>
            <path fill="#201600" d="M1124.5,729.2c0.6,0,1.1,0.4,1.1,0.9c0,0.3-0.2,0.6-0.5,0.7l0,0c0.4,0.1,0.6,0.5,0.6,0.8c0,0.6-0.5,1-1.1,1   h-1.8v-3.5L1124.5,729.2L1124.5,729.2z M1124.9,730.2c0-0.3-0.2-0.4-0.5-0.4h-0.9v0.8h0.9C1124.7,730.6,1124.9,730.4,1124.9,730.2    M1125,731.6c0-0.3-0.3-0.5-0.6-0.5h-0.9v1h0.9C1124.8,732.1,1125,731.9,1125,731.6"/>
            <path fill="#201600" d="M1126.5,730.9c0-1.1,0.8-1.8,1.7-1.8c1,0,1.7,0.8,1.7,1.8c0,1.1-0.8,1.8-1.7,1.8   C1127.2,732.7,1126.5,732,1126.5,730.9 M1129.2,730.9c0-0.7-0.4-1.2-1-1.2s-1,0.5-1,1.2s0.4,1.2,1,1.2   C1128.8,732.1,1129.2,731.6,1129.2,730.9"/>
            <polygon fill="#201600" points="1131.6,730.6 1132,730.6 1133.1,729.2 1133.8,729.2 1132.6,730.8 1134.1,732.6 1133.2,732.6    1132,731.2 1131.6,731.2 1131.6,732.6 1130.9,732.6 1130.9,729.2 1131.6,729.2  "/>
            <path fill="#201600" d="M1134.4,732.2l0.4-0.4c0.2,0.2,0.4,0.3,0.9,0.3s0.7-0.2,0.7-0.5s-0.2-0.5-0.7-0.5h-0.5v-0.5h0.5   c0.4,0,0.6-0.2,0.6-0.5s-0.3-0.4-0.6-0.4c-0.4,0-0.7,0.2-0.9,0.3l-0.4-0.4c0.3-0.2,0.7-0.5,1.4-0.5c0.7,0,1.2,0.4,1.2,0.9   c0,0.3-0.2,0.6-0.5,0.8l0,0c0.4,0.1,0.6,0.4,0.6,0.8c0,0.7-0.6,1.1-1.4,1.1C1135.1,732.7,1134.6,732.5,1134.4,732.2"/>
            <path fill="#201600" d="M1137.9,731.6c0-0.6,0.4-1.1,1.5-1.1c0.2,0,0.5,0,0.7,0.1v-0.2c0-0.4-0.3-0.7-0.7-0.7   c-0.4,0-0.7,0.2-0.9,0.3l-0.4-0.4c0.3-0.3,0.8-0.5,1.4-0.5c0.9,0,1.4,0.5,1.4,1.3v2.3h-0.7v-0.4l0,0c-0.2,0.3-0.6,0.5-1,0.5   C1138.4,732.7,1137.9,732.2,1137.9,731.6 M1140.1,731.3v-0.2c-0.2,0-0.4,0-0.6,0c-0.6,0-0.9,0.2-0.9,0.6c0,0.3,0.2,0.5,0.7,0.5   C1139.7,732.2,1140.1,731.8,1140.1,731.3"/>
            <path fill="#201600" d="M1141.5,732.7v-0.6c0,0,0.1,0,0.2,0c0.3,0,0.4-0.3,0.5-1c0.1-1,0.1-1.9,0.1-1.9h2.6v3.5h-0.7v-2.9h-1.3   c0,0.3,0,0.8-0.1,1.3c-0.1,1.1-0.3,1.6-1,1.6C1141.7,732.7,1141.6,732.7,1141.5,732.7"/>
            <path fill="#201600" d="M1147.5,730.3c0.8,0,1.3,0.4,1.3,1.2c0,0.7-0.5,1.2-1.3,1.2h-1.5v-3.5h0.7v1.1H1147.5z M1148.1,731.5   c0-0.4-0.3-0.6-0.7-0.6h-0.6v1.2h0.6C1147.8,732.1,1148.1,731.9,1148.1,731.5 M1150,732.6h-0.7v-3.5h0.7V732.6z"/>
            <rect x="1065.6" y="714.5" fill="#484B4E" width="9.8" height="9.8"/>
            <path fill="#FFFFFF" d="M1068.3,718.7h2.5v1.5h-2.5V718.7z M1065.6,718.8h2.2v1.5h-2.2V718.8z M1073.2,721.2h-2v-2.4h1   L1073.2,721.2z M1074.2,722.2l-1.8-4.4h-6.8v5.4h8.6L1074.2,722.2L1074.2,722.2z"/>
            <rect x="1065.6" y="723.8" fill="#C2524D" width="9.8" height="0.5"/>
        </g>
        <g id="railway_kursk">
            <polygon fill="#201600" points="1166.2,868.3 1166.9,868.3 1168.4,866.3 1169.3,866.3 1167.5,868.6 1169.6,871.2 1168.6,871.2    1166.9,869 1166.2,869 1166.2,871.2 1165.5,871.2 1165.5,866.3 1166.2,866.3  "/>
            <path fill="#201600" d="M1169.3,872.2l0.5-0.5c0.1,0.1,0.2,0.1,0.4,0.1c0.3,0,0.5-0.1,0.7-0.7l-1.4-3.6h0.8l1,2.7l0,0l0.9-2.7h0.7   l-1.3,3.7c-0.2,0.6-0.6,1.1-1.3,1.1C1169.9,872.5,1169.6,872.5,1169.3,872.2"/>
            <path fill="#201600" d="M1173.6,867.7h0.7v0.5l0,0c0.2-0.3,0.6-0.6,1.1-0.6c0.9,0,1.6,0.8,1.6,1.8c0,1.1-0.7,1.8-1.6,1.8   c-0.5,0-0.9-0.3-1.1-0.6l0,0v1.8h-0.7V867.7z M1175.3,870.6c0.6,0,1-0.5,1-1.2s-0.4-1.2-1-1.2s-1,0.5-1,1.2   S1174.7,870.6,1175.3,870.6"/>
            <path fill="#201600" d="M1177.8,869.4c0-1.1,0.7-1.8,1.7-1.8c0.5,0,1,0.2,1.2,0.5l-0.4,0.4c-0.2-0.1-0.4-0.3-0.8-0.3   c-0.6,0-1,0.5-1,1.2s0.4,1.2,1,1.2c0.4,0,0.6-0.2,0.8-0.3l0.4,0.4c-0.3,0.3-0.7,0.5-1.2,0.5   C1178.6,871.2,1177.8,870.5,1177.8,869.4"/>
            <polygon fill="#201600" points="1182.3,869.1 1182.7,869.1 1183.8,867.7 1184.6,867.7 1183.3,869.3 1184.8,871.1 1183.9,871.1    1182.8,869.6 1182.3,869.7 1182.3,871.1 1181.6,871.1 1181.6,867.7 1182.3,867.7  "/>
            <polygon fill="#201600" points="1186.1,870 1186.1,870 1187.8,867.7 1188.4,867.7 1188.4,871.1 1187.7,871.1 1187.7,868.8    1187.7,868.8 1186.1,871.1 1185.4,871.1 1185.4,867.7 1186.1,867.7  "/>
            <path fill="#201600" d="M1190.3,870L1190.3,870l1.6-2.4h0.6v3.5h-0.7v-2.4l0,0l-1.6,2.4h-0.6v-3.5h0.7V870z M1189.9,866.7l0.4-0.4   c0.1,0.1,0.4,0.4,0.7,0.3c0.3,0,0.6-0.2,0.7-0.4l0.4,0.4c-0.1,0.2-0.5,0.5-1.1,0.5C1190.5,867.2,1190.1,866.9,1189.9,866.7"/>
            <path fill="#201600" d="M1167.2,873.5c0.6,0,1.1,0.4,1.1,0.9c0,0.3-0.2,0.6-0.5,0.7l0,0c0.4,0.1,0.6,0.5,0.6,0.8c0,0.6-0.5,1-1.1,1   h-1.8v-3.5L1167.2,873.5z M1167.5,874.5c0-0.3-0.2-0.4-0.5-0.4h-0.9v0.8h0.9C1167.3,874.9,1167.5,874.7,1167.5,874.5 M1167.7,875.9   c0-0.3-0.3-0.5-0.6-0.5h-0.9v1h0.9C1167.4,876.4,1167.7,876.2,1167.7,875.9"/>
            <path fill="#201600" d="M1169.1,875.2c0-1.1,0.8-1.8,1.7-1.8c1,0,1.7,0.8,1.7,1.8c0,1.1-0.8,1.8-1.7,1.8S1169.1,876.3,1169.1,875.2    M1171.9,875.2c0-0.7-0.4-1.2-1-1.2s-1,0.5-1,1.2s0.4,1.2,1,1.2C1171.4,876.4,1171.9,875.9,1171.9,875.2"/>
            <polygon fill="#201600" points="1174.2,874.9 1174.6,874.9 1175.7,873.5 1176.5,873.5 1175.2,875.1 1176.7,876.9 1175.9,876.9    1174.7,875.4 1174.2,875.4 1174.2,876.9 1173.5,876.9 1173.5,873.5 1174.2,873.5  "/>
            <path fill="#201600" d="M1177,876.5l0.4-0.4c0.2,0.2,0.4,0.3,0.9,0.3s0.7-0.2,0.7-0.5s-0.2-0.5-0.7-0.5h-0.5v-0.5h0.5   c0.3,0,0.6-0.2,0.6-0.5s-0.3-0.4-0.6-0.4c-0.4,0-0.7,0.2-0.9,0.3l-0.4-0.4c0.3-0.2,0.7-0.5,1.4-0.5c0.7,0,1.2,0.4,1.2,0.9   c0,0.3-0.2,0.6-0.5,0.8l0,0c0.4,0.1,0.6,0.4,0.6,0.8c0,0.7-0.6,1.1-1.4,1.1C1177.7,877,1177.3,876.8,1177,876.5"/>
            <path fill="#201600" d="M1180.5,875.9c0-0.6,0.4-1.1,1.5-1.1c0.2,0,0.5,0,0.7,0.1v-0.2c0-0.4-0.3-0.7-0.7-0.7   c-0.4,0-0.7,0.2-0.9,0.3l-0.4-0.4c0.3-0.3,0.8-0.5,1.4-0.5c0.9,0,1.4,0.5,1.4,1.3v2.3h-0.7v-0.4l0,0c-0.2,0.3-0.6,0.5-1,0.5   C1181,877,1180.5,876.5,1180.5,875.9 M1182.7,875.5v-0.2c-0.2,0-0.4,0-0.6,0c-0.6,0-0.9,0.2-0.9,0.6c0,0.3,0.2,0.5,0.7,0.5   C1182.3,876.4,1182.7,876.1,1182.7,875.5"/>
            <path fill="#201600" d="M1184.2,876.9v-0.6c0,0,0.1,0,0.2,0c0.3,0,0.4-0.3,0.5-1c0.1-1,0.1-1.9,0.1-1.9h2.6v3.5h-0.7V874h-1.3   c0,0.3,0,0.8-0.1,1.3c-0.1,1.1-0.3,1.6-1,1.6C1184.4,877,1184.2,876.9,1184.2,876.9"/>
            <rect x="1152.5" y="866.7" fill="#484B4E" width="9.8" height="9.8"/>
            <path fill="#FFFFFF" d="M1155.1,871h2.5v1.5h-2.5V871z M1152.5,871h2.2v1.5h-2.2V871z M1160.1,873.4h-2V871h1L1160.1,873.4z    M1161,874.4l-1.8-4.4h-6.8v5.4h8.6L1161,874.4L1161,874.4z"/>
            <rect x="1152.5" y="876" fill="#C2524D" width="9.8" height="0.5"/>
        </g>
        <g id="railway_DME">
            <polygon fill="#201600" points="964.2,1184.2 963.5,1184.2 963.5,1179.9 960.9,1179.9 960.9,1184.2 960.2,1184.2 960.2,1179.3    964.2,1179.3  "/>
            <path fill="#201600" d="M965.2,1183.2c0-0.6,0.4-1.1,1.5-1.1c0.2,0,0.5,0,0.7,0.1v-0.2c0-0.4-0.3-0.7-0.7-0.7s-0.7,0.2-0.9,0.3   l-0.4-0.4c0.3-0.3,0.8-0.5,1.4-0.5c0.9,0,1.4,0.5,1.4,1.3v2.3h-0.7v-0.4l0,0c-0.2,0.3-0.6,0.5-1,0.5   C965.7,1184.3,965.2,1183.8,965.2,1183.2 M967.5,1182.8v-0.2c-0.2,0-0.4,0-0.6,0c-0.6,0-0.9,0.2-0.9,0.6c0,0.3,0.2,0.5,0.7,0.5   C967.1,1183.7,967.5,1183.4,967.5,1182.8"/>
            <path fill="#201600" d="M971,1180.7c0.6,0,1.1,0.4,1.1,0.9c0,0.3-0.2,0.6-0.5,0.7l0,0c0.4,0.1,0.6,0.5,0.6,0.8c0,0.6-0.5,1-1.1,1   h-1.8v-3.5L971,1180.7L971,1180.7z M971.4,1181.7c0-0.3-0.2-0.4-0.5-0.4H970v0.8h0.9C971.2,1182.1,971.4,1182,971.4,1181.7    M971.5,1183.2c0-0.3-0.3-0.5-0.6-0.5H970v1h0.9C971.3,1183.7,971.5,1183.5,971.5,1183.2"/>
            <path fill="#201600" d="M972.9,1182.5c0-1.1,0.8-1.8,1.7-1.8s1.7,0.6,1.7,1.9v0.1h-2.6c0.1,0.6,0.6,1,1.1,1c0.3,0,0.6-0.1,0.9-0.3   l0.4,0.4c-0.3,0.3-0.8,0.5-1.4,0.5C973.7,1184.3,972.9,1183.6,972.9,1182.5 M974.6,1181.3c-0.5,0-0.9,0.4-1,0.9h1.9   C975.5,1181.7,975.2,1181.3,974.6,1181.3"/>
            <path fill="#201600" d="M976.7,1184.2v-0.6c0,0,0.1,0,0.2,0c0.3,0,0.4-0.3,0.5-1c0.1-1,0.1-1.9,0.1-1.9h2.5v3.5h-0.7v-2.9H978   c0,0.3,0,0.8-0.1,1.3c-0.1,1.1-0.3,1.6-1,1.6C976.9,1184.3,976.8,1184.2,976.7,1184.2"/>
            <path fill="#201600" d="M981,1182.5c0-1.1,0.8-1.8,1.7-1.8s1.7,0.6,1.7,1.9v0.1h-2.6c0.1,0.6,0.6,1,1.1,1c0.3,0,0.6-0.1,0.9-0.3   l0.4,0.4c-0.3,0.3-0.8,0.5-1.4,0.5C981.8,1184.3,981,1183.6,981,1182.5 M982.7,1181.3c-0.5,0-0.9,0.4-1,0.9h1.9   C983.6,1181.7,983.3,1181.3,982.7,1181.3"/>
            <polygon fill="#201600" points="985.3,1180.7 986,1180.7 986,1183.6 987.4,1183.6 987.4,1180.7 988.1,1180.7 988.1,1183.6    988.6,1183.6 988.6,1185 987.9,1185 987.9,1184.2 985.3,1184.2  "/>
            <polygon fill="#201600" points="990.2,1182.2 990.6,1182.2 991.7,1180.7 992.5,1180.7 991.2,1182.3 992.7,1184.2 991.8,1184.2    990.7,1182.7 990.2,1182.7 990.2,1184.2 989.5,1184.2 989.5,1180.7 990.2,1180.7  "/>
            <polygon fill="#201600" points="994,1183.1 994,1183.1 995.7,1180.7 996.3,1180.7 996.3,1184.2 995.6,1184.2 995.6,1181.8    995.6,1181.8 994,1184.2 993.3,1184.2 993.3,1180.7 994,1180.7  "/>
            <path fill="#201600" d="M998.2,1183.1L998.2,1183.1l1.6-2.4h0.6v3.5h-0.7v-2.4l0,0l-1.6,2.4h-0.6v-3.5h0.7V1183.1z M997.8,1179.8   l0.4-0.4c0.1,0.1,0.4,0.4,0.7,0.4s0.6-0.2,0.7-0.4l0.4,0.4c-0.1,0.2-0.5,0.5-1.1,0.5C998.4,1180.3,998,1179.9,997.8,1179.8"/>
            <path fill="#201600" d="M1005.2,1180.7c0.6,0,1.1,0.4,1.1,0.9c0,0.3-0.2,0.6-0.5,0.7l0,0c0.4,0.1,0.6,0.5,0.6,0.8   c0,0.6-0.5,1-1.1,1h-1.8v-3.5L1005.2,1180.7L1005.2,1180.7z M1005.5,1181.7c0-0.3-0.2-0.4-0.5-0.4h-0.9v0.8h0.9   C1005.3,1182.1,1005.5,1182,1005.5,1181.7 M1005.7,1183.2c0-0.3-0.3-0.5-0.6-0.5h-0.9v1h0.9   C1005.4,1183.7,1005.7,1183.5,1005.7,1183.2"/>
            <path fill="#201600" d="M1007.1,1182.5c0-1.1,0.8-1.8,1.7-1.8c1,0,1.7,0.8,1.7,1.8s-0.8,1.8-1.7,1.8   C1007.9,1184.3,1007.1,1183.5,1007.1,1182.5 M1009.9,1182.5c0-0.7-0.4-1.2-1-1.2s-1,0.5-1,1.2s0.4,1.2,1,1.2   C1009.4,1183.7,1009.9,1183.2,1009.9,1182.5"/>
            <polygon fill="#201600" points="1012.2,1182.2 1012.6,1182.2 1013.7,1180.7 1014.5,1180.7 1013.2,1182.3 1014.7,1184.2    1013.9,1184.2 1012.7,1182.7 1012.2,1182.7 1012.2,1184.2 1011.5,1184.2 1011.5,1180.7 1012.2,1180.7  "/>
            <path fill="#201600" d="M1015,1183.8l0.4-0.4c0.2,0.2,0.4,0.3,0.9,0.3s0.7-0.2,0.7-0.5s-0.2-0.5-0.7-0.5h-0.5v-0.5h0.5   c0.4,0,0.6-0.2,0.6-0.5s-0.3-0.4-0.6-0.4c-0.4,0-0.7,0.2-0.9,0.3l-0.4-0.4c0.3-0.2,0.7-0.5,1.4-0.5s1.2,0.4,1.2,0.9   c0,0.4-0.2,0.6-0.5,0.8l0,0c0.4,0.1,0.6,0.4,0.6,0.8c0,0.7-0.6,1.1-1.4,1.1C1015.7,1184.3,1015.3,1184.1,1015,1183.8"/>
            <path fill="#201600" d="M1018.5,1183.2c0-0.6,0.4-1.1,1.5-1.1c0.2,0,0.5,0,0.7,0.1v-0.2c0-0.4-0.3-0.7-0.7-0.7s-0.7,0.2-0.9,0.3   l-0.4-0.4c0.3-0.3,0.8-0.5,1.4-0.5c0.9,0,1.4,0.5,1.4,1.3v2.3h-0.7v-0.4l0,0c-0.2,0.3-0.6,0.5-1,0.5   C1019,1184.3,1018.5,1183.8,1018.5,1183.2 M1020.7,1182.8v-0.2c-0.2,0-0.4,0-0.6,0c-0.6,0-0.9,0.2-0.9,0.6c0,0.3,0.2,0.5,0.7,0.5   C1020.3,1183.7,1020.7,1183.4,1020.7,1182.8"/>
            <path fill="#201600" d="M1022.2,1184.2v-0.6c0,0,0.1,0,0.2,0c0.3,0,0.4-0.3,0.5-1c0.1-1,0.1-1.9,0.1-1.9h2.5v3.5h-0.7v-2.9h-1.3   c0,0.3,0,0.8-0.1,1.3c-0.1,1.1-0.3,1.6-1,1.6C1022.4,1184.3,1022.2,1184.2,1022.2,1184.2"/>
            <polygon fill="#201600" points="1026.7,1183.2 1027.5,1183.2 1027.5,1184.2 1027.1,1185.2 1026.7,1185.2 1027,1184.2    1026.7,1184.2  "/>
            <path fill="#201600" d="M959.8,1189.8c0-0.6,0.4-1.1,1.5-1.1c0.2,0,0.5,0,0.7,0.1v-0.2c0-0.4-0.3-0.7-0.7-0.7s-0.7,0.2-0.9,0.3   l-0.4-0.4c0.3-0.3,0.8-0.5,1.4-0.5c0.9,0,1.4,0.5,1.4,1.3v2.3h-0.7v-0.4l0,0c-0.2,0.3-0.6,0.5-1,0.5   C960.3,1190.9,959.8,1190.5,959.8,1189.8 M962,1189.5v-0.2c-0.2,0-0.4,0-0.6,0c-0.6,0-0.9,0.2-0.9,0.6c0,0.3,0.2,0.5,0.7,0.5   C961.6,1190.4,962,1190,962,1189.5"/>
            <path fill="#201600" d="M963.6,1190.5l0.4-0.4c0.2,0.2,0.4,0.3,0.8,0.3c0.6,0,0.9-0.4,1-1h-1.3v-0.6h1.3c-0.1-0.5-0.5-0.9-1-0.9   c-0.4,0-0.6,0.2-0.8,0.3l-0.4-0.4c0.3-0.3,0.7-0.5,1.2-0.5c1,0,1.7,0.8,1.7,1.8s-0.7,1.8-1.7,1.8   C964.2,1190.9,963.8,1190.7,963.6,1190.5"/>
            <path fill="#201600" d="M967.5,1187.4h0.7v0.5l0,0c0.2-0.3,0.6-0.6,1.1-0.6c0.9,0,1.6,0.8,1.6,1.8s-0.7,1.8-1.6,1.8   c-0.5,0-0.9-0.3-1.1-0.6l0,0v1.8h-0.7V1187.4z M969.2,1190.3c0.6,0,1-0.5,1-1.2s-0.4-1.2-1-1.2s-1,0.5-1,1.2   C968.1,1189.8,968.6,1190.3,969.2,1190.3"/>
            <path fill="#201600" d="M971.7,1189.1c0-1.1,0.8-1.8,1.7-1.8c1,0,1.7,0.8,1.7,1.8s-0.8,1.8-1.7,1.8   C972.4,1190.9,971.7,1190.2,971.7,1189.1 M974.4,1189.1c0-0.7-0.4-1.2-1-1.2s-1,0.5-1,1.2s0.4,1.2,1,1.2   C974,1190.3,974.4,1189.8,974.4,1189.1"/>
            <path fill="#201600" d="M975.7,1190.5l0.4-0.4c0.2,0.2,0.4,0.3,0.8,0.3c0.6,0,0.9-0.4,1-1h-1.3v-0.6h1.3c-0.1-0.5-0.5-0.9-1-0.9   c-0.4,0-0.6,0.2-0.8,0.3l-0.4-0.4c0.3-0.3,0.7-0.5,1.2-0.5c1,0,1.7,0.8,1.7,1.8s-0.7,1.8-1.7,1.8   C976.4,1190.9,975.9,1190.7,975.7,1190.5"/>
            <polygon fill="#201600" points="980.3,1188.8 980.7,1188.8 981.8,1187.4 982.5,1187.4 981.3,1189 982.8,1190.9 981.9,1190.9    980.7,1189.4 980.3,1189.4 980.3,1190.9 979.6,1190.9 979.6,1187.4 980.3,1187.4  "/>
            <path fill="#201600" d="M983.1,1189.1c0-1.1,0.7-1.8,1.7-1.8c0.5,0,1,0.2,1.2,0.5l-0.4,0.4c-0.2-0.1-0.4-0.3-0.8-0.3   c-0.6,0-1,0.5-1,1.2s0.4,1.2,1,1.2c0.4,0,0.6-0.2,0.8-0.3l0.4,0.4c-0.3,0.3-0.7,0.5-1.2,0.5   C983.8,1190.9,983.1,1190.2,983.1,1189.1"/>
            <polygon fill="#201600" points="989.7,1190.9 989,1190.9 989,1188 987.5,1188 987.5,1190.9 986.9,1190.9 986.9,1187.4    989.7,1187.4  "/>
            <path fill="#201600" d="M990.9,1187.4h0.7v0.5l0,0c0.2-0.3,0.6-0.6,1.1-0.6c0.9,0,1.6,0.8,1.6,1.8s-0.7,1.8-1.6,1.8   c-0.5,0-0.9-0.3-1.1-0.6l0,0v1.8h-0.7V1187.4z M992.6,1190.3c0.6,0,1-0.5,1-1.2s-0.4-1.2-1-1.2s-1,0.5-1,1.2   S992,1190.3,992.6,1190.3"/>
            <path fill="#201600" d="M995.1,1189.1c0-1.1,0.8-1.8,1.7-1.8s1.7,0.6,1.7,1.9v0.1h-2.6c0.1,0.6,0.6,1,1.1,1c0.3,0,0.6-0.1,0.9-0.3   l0.4,0.4c-0.3,0.3-0.8,0.5-1.4,0.5C995.9,1190.9,995.1,1190.2,995.1,1189.1 M996.8,1187.9c-0.5,0-0.9,0.4-1,0.9h1.9   C997.7,1188.4,997.3,1187.9,996.8,1187.9"/>
            <path fill="#201600" d="M999.2,1189.1c0-1.1,0.7-1.8,1.7-1.8c0.5,0,1,0.2,1.2,0.5l-0.4,0.4c-0.2-0.1-0.4-0.3-0.8-0.3   c-0.6,0-1,0.5-1,1.2s0.4,1.2,1,1.2c0.4,0,0.6-0.2,0.8-0.3l0.4,0.4c-0.3,0.3-0.7,0.5-1.2,0.5   C999.9,1190.9,999.2,1190.2,999.2,1189.1"/>
            <path fill="#201600" d="M1002.7,1189.1c0-1.1,0.7-1.8,1.7-1.8c0.5,0,1,0.2,1.2,0.5l-0.4,0.4c-0.2-0.1-0.4-0.3-0.8-0.3   c-0.6,0-1,0.5-1,1.2s0.4,1.2,1,1.2c0.4,0,0.6-0.2,0.8-0.3l0.4,0.4c-0.3,0.3-0.7,0.5-1.2,0.5   C1003.4,1190.9,1002.7,1190.2,1002.7,1189.1"/>
            <path fill="#201600" d="M1010,1187.4c0.6,0,1.1,0.4,1.1,0.9c0,0.3-0.2,0.6-0.5,0.7l0,0c0.4,0.1,0.6,0.5,0.6,0.8c0,0.6-0.5,1-1.1,1   h-1.8v-3.5L1010,1187.4L1010,1187.4z M1010.4,1188.4c0-0.3-0.2-0.4-0.5-0.4h-0.9v0.8h0.9   C1010.2,1188.8,1010.4,1188.6,1010.4,1188.4 M1010.5,1189.8c0-0.3-0.3-0.5-0.6-0.5h-0.9v1h0.9   C1010.3,1190.3,1010.5,1190.1,1010.5,1189.8"/>
            <path fill="#201600" d="M1014.3,1189.1c0.1-0.7,0.3-3.1,0.3-3.1h3.2v4.3h0.6v1.7h-0.7v-1h-3.5v1h-0.7v-1.7h0.3   C1014.1,1190.1,1014.2,1189.7,1014.3,1189.1 M1017,1186.6h-1.8c0,0.6-0.1,2-0.2,2.6c-0.1,0.5-0.2,0.8-0.4,1.1l0,0h2.4V1186.6z"/>
            <path fill="#201600" d="M1019,1189.1c0-1.1,0.8-1.8,1.7-1.8c1,0,1.7,0.8,1.7,1.8s-0.8,1.8-1.7,1.8   C1019.7,1190.9,1019,1190.2,1019,1189.1 M1021.7,1189.1c0-0.7-0.4-1.2-1-1.2s-1,0.5-1,1.2s0.4,1.2,1,1.2   C1021.3,1190.3,1021.7,1189.8,1021.7,1189.1"/>
            <polygon fill="#201600" points="1025.4,1190 1025.5,1190 1026.4,1187.4 1027.1,1187.4 1027.9,1190.9 1027.2,1190.9 1026.6,1188.4    1026.6,1188.4 1025.8,1190.9 1025.1,1190.9 1024.3,1188.4 1024.3,1188.4 1023.7,1190.9 1023,1190.9 1023.8,1187.4 1024.6,1187.4     "/>
            <path fill="#201600" d="M1028.5,1189.1c0-1.1,0.8-1.8,1.7-1.8c1,0,1.7,0.8,1.7,1.8s-0.8,1.8-1.7,1.8S1028.5,1190.2,1028.5,1189.1    M1031.3,1189.1c0-0.7-0.4-1.2-1-1.2s-1,0.5-1,1.2s0.4,1.2,1,1.2C1030.9,1190.3,1031.3,1189.8,1031.3,1189.1"/>
            <path fill="#201600" d="M1033.1,1189.2c0.1-1.1,0.2-1.8,0.2-1.8h2.3v2.9h0.5v1.4h-0.6v-0.8h-2.4v0.8h-0.6v-1.4h0.3   C1032.9,1190.1,1033,1189.7,1033.1,1189.2 M1034.9,1188h-1c0,0.3-0.1,0.8-0.1,1.3c0,0.4-0.1,0.8-0.3,1l0,0h1.5L1034.9,1188   L1034.9,1188z"/>
            <path fill="#201600" d="M1036.7,1189.1c0-1.1,0.8-1.8,1.7-1.8c0.9,0,1.7,0.6,1.7,1.9v0.1h-2.6c0.1,0.6,0.6,1,1.1,1   c0.3,0,0.6-0.1,0.9-0.3l0.4,0.4c-0.3,0.3-0.8,0.5-1.4,0.5C1037.5,1190.9,1036.7,1190.2,1036.7,1189.1 M1038.4,1187.9   c-0.5,0-0.9,0.4-1,0.9h1.9C1039.2,1188.4,1038.9,1187.9,1038.4,1187.9"/>
            <path fill="#201600" d="M1041.1,1189.2c0.1-1.1,0.2-1.8,0.2-1.8h2.3v2.9h0.5v1.4h-0.6v-0.8h-2.4v0.8h-0.6v-1.4h0.3   C1041,1190.1,1041.1,1189.7,1041.1,1189.2 M1042.9,1188h-1c0,0.3-0.1,0.8-0.1,1.3c0,0.4-0.1,0.8-0.3,1l0,0h1.5L1042.9,1188   L1042.9,1188z"/>
            <path fill="#201600" d="M1044.7,1189.1c0-1.1,0.8-1.8,1.7-1.8c1,0,1.7,0.8,1.7,1.8s-0.8,1.8-1.7,1.8S1044.7,1190.2,1044.7,1189.1    M1047.5,1189.1c0-0.7-0.4-1.2-1-1.2s-1,0.5-1,1.2s0.4,1.2,1,1.2S1047.5,1189.8,1047.5,1189.1"/>
            <path fill="#201600" d="M1050.8,1187.4c0.6,0,1.1,0.4,1.1,0.9c0,0.3-0.2,0.6-0.5,0.7l0,0c0.4,0.1,0.6,0.5,0.6,0.8   c0,0.6-0.5,1-1.1,1h-1.8v-3.5L1050.8,1187.4L1050.8,1187.4z M1051.2,1188.4c0-0.3-0.2-0.4-0.5-0.4h-0.9v0.8h0.9   C1051,1188.8,1051.2,1188.6,1051.2,1188.4 M1051.3,1189.8c0-0.3-0.3-0.5-0.6-0.5h-0.9v1h0.9   C1051,1190.3,1051.3,1190.1,1051.3,1189.8"/>
            <path fill="#201600" d="M1052.7,1189.1c0-1.1,0.8-1.8,1.7-1.8c1,0,1.7,0.8,1.7,1.8s-0.8,1.8-1.7,1.8S1052.7,1190.2,1052.7,1189.1    M1055.5,1189.1c0-0.7-0.4-1.2-1-1.2s-1,0.5-1,1.2s0.4,1.2,1,1.2S1055.5,1189.8,1055.5,1189.1"/>
            <rect x="947.6" y="1180.3" fill="#484B4E" width="9.8" height="9.8"/>
            <path fill="#FFFFFF" d="M950.3,1184.6h2.5v1.5h-2.5V1184.6z M947.6,1184.6h2.2v1.5h-2.2V1184.6z M955.2,1187h-2v-2.4h1L955.2,1187z    M956.2,1188l-1.8-4.4h-6.8v5.4h8.6V1188z"/>
            <rect x="947.6" y="1189.6" fill="#C2524D" width="9.8" height="0.5"/>
        </g>
        <circle id="lineD2_38" fill="#FFFFFF" stroke="#E94282" stroke-width="1.5" stroke-miterlimit="10" cx="938.9" cy="1885.4" r="3"/>
        <g id="railway_kiev">
            <polygon fill="#201600" points="533.5,953.4 534.2,953.4 535.8,951.3 536.6,951.3 534.9,953.7 536.9,956.3 536,956.3 534.3,954    533.5,954 533.5,956.3 532.8,956.3 532.8,951.3 533.5,951.3  "/>
            <polygon fill="#201600" points="538.2,955.2 538.2,955.2 539.8,952.8 540.5,952.8 540.5,956.3 539.8,956.3 539.8,953.9    539.8,953.9 538.1,956.3 537.5,956.3 537.5,952.8 538.2,952.8  "/>
            <path fill="#201600" d="M541.4,954.5c0-1.1,0.8-1.8,1.7-1.8s1.7,0.6,1.7,1.9v0.1h-2.6c0.1,0.6,0.6,1,1.1,1c0.3,0,0.6-0.1,0.9-0.3   l0.4,0.4c-0.4,0.3-0.8,0.5-1.4,0.5C542.2,956.3,541.4,955.6,541.4,954.5 M543.1,953.3c-0.5,0-0.9,0.4-1,0.9h1.9   C544,953.8,543.6,953.3,543.1,953.3"/>
            <path fill="#201600" d="M547.4,952.8c0.6,0,1,0.4,1,0.9c0,0.3-0.2,0.6-0.5,0.7l0,0c0.4,0.1,0.6,0.5,0.6,0.8c0,0.6-0.5,1-1.1,1h-1.8   v-3.5L547.4,952.8L547.4,952.8z M547.7,953.8c0-0.3-0.2-0.4-0.5-0.4h-0.9v0.8h0.9C547.5,954.2,547.7,954,547.7,953.8 M547.9,955.2   c0-0.3-0.3-0.5-0.6-0.5h-0.9v1h0.9C547.6,955.7,547.9,955.5,547.9,955.2"/>
            <path fill="#201600" d="M549.3,954.5c0-1.1,0.7-1.8,1.7-1.8c0.5,0,1,0.2,1.2,0.5l-0.4,0.4c-0.2-0.1-0.4-0.3-0.8-0.3   c-0.6,0-1,0.5-1,1.2s0.4,1.2,1,1.2c0.4,0,0.6-0.2,0.8-0.3l0.4,0.4c-0.3,0.3-0.7,0.5-1.2,0.5C550.1,956.3,549.3,955.6,549.3,954.5"/>
            <polygon fill="#201600" points="553.8,954.2 554.2,954.2 555.3,952.8 556.1,952.8 554.8,954.4 556.3,956.3 555.5,956.3    554.3,954.8 553.8,954.8 553.8,956.3 553.1,956.3 553.1,952.8 553.8,952.8  "/>
            <polygon fill="#201600" points="557.7,955.2 557.7,955.2 559.3,952.8 559.9,952.8 559.9,956.3 559.2,956.3 559.2,953.9    559.2,953.9 557.6,956.3 557,956.3 557,952.8 557.7,952.8  "/>
            <path fill="#201600" d="M561.8,955.2L561.8,955.2l1.6-2.4h0.6v3.5h-0.7v-2.4l0,0l-1.6,2.4h-0.6v-3.5h0.7V955.2z M561.5,951.8   l0.4-0.4c0.1,0.1,0.4,0.3,0.7,0.3s0.6-0.2,0.7-0.3l0.4,0.4c-0.1,0.2-0.5,0.5-1.1,0.5C562,952.3,561.6,952,561.5,951.8"/>
            <path fill="#201600" d="M543.2,959.4c0.6,0,1,0.4,1,0.9c0,0.3-0.2,0.6-0.5,0.7l0,0c0.4,0.1,0.6,0.5,0.6,0.8c0,0.6-0.5,1-1.1,1h-1.8   v-3.5L543.2,959.4L543.2,959.4z M543.5,960.4c0-0.3-0.2-0.4-0.5-0.4h-0.9v0.8h0.9C543.3,960.8,543.5,960.7,543.5,960.4    M543.7,961.9c0-0.3-0.3-0.5-0.6-0.5h-0.9v1h0.9C543.4,962.4,543.7,962.2,543.7,961.9"/>
            <path fill="#201600" d="M545.1,961.2c0-1.1,0.8-1.8,1.7-1.8c1,0,1.7,0.8,1.7,1.8c0,1.1-0.8,1.8-1.7,1.8   C545.9,963,545.1,962.2,545.1,961.2 M547.9,961.2c0-0.7-0.4-1.2-1-1.2s-1,0.5-1,1.2s0.4,1.2,1,1.2   C547.4,962.4,547.9,961.9,547.9,961.2"/>
            <polygon fill="#201600" points="550.2,960.9 550.6,960.9 551.7,959.4 552.5,959.4 551.2,961 552.7,962.9 551.8,962.9 550.7,961.4    550.2,961.4 550.2,962.9 549.5,962.9 549.5,959.4 550.2,959.4  "/>
            <path fill="#201600" d="M553,962.5l0.4-0.4c0.2,0.2,0.4,0.3,0.9,0.3s0.7-0.2,0.7-0.5s-0.2-0.5-0.7-0.5h-0.5v-0.5h0.5   c0.4,0,0.6-0.2,0.6-0.5s-0.3-0.4-0.6-0.4c-0.4,0-0.7,0.2-0.9,0.3l-0.4-0.4c0.3-0.2,0.7-0.5,1.4-0.5s1.2,0.4,1.2,0.9   c0,0.3-0.2,0.6-0.5,0.8l0,0c0.4,0.1,0.6,0.4,0.6,0.8c0,0.7-0.6,1.1-1.4,1.1C553.7,963,553.3,962.8,553,962.5"/>
            <path fill="#201600" d="M556.5,961.9c0-0.6,0.4-1.1,1.5-1.1c0.2,0,0.5,0,0.7,0.1v-0.2c0-0.4-0.3-0.7-0.7-0.7s-0.7,0.2-0.9,0.3   l-0.4-0.4c0.3-0.3,0.8-0.5,1.4-0.5c0.9,0,1.4,0.5,1.4,1.3v2.3h-0.7v-0.4l0,0c-0.2,0.3-0.6,0.5-1,0.5   C557,963,556.5,962.5,556.5,961.9 M558.7,961.5v-0.2c-0.2,0-0.4,0-0.6,0c-0.6,0-0.9,0.2-0.9,0.6c0,0.3,0.2,0.5,0.7,0.5   C558.3,962.4,558.7,962.1,558.7,961.5"/>
            <path fill="#201600" d="M560.2,962.9v-0.6c0,0,0.1,0,0.2,0c0.3,0,0.4-0.3,0.5-1c0.1-1,0.1-1.9,0.1-1.9h2.5v3.5h-0.7V960h-1.3   c0,0.3,0,0.8-0.1,1.3c-0.1,1.1-0.3,1.6-1,1.6C560.4,963,560.2,962.9,560.2,962.9"/>
            <polygon fill="#201600" points="564.3,961.9 565.2,961.9 565.2,962.9 564.8,963.9 564.3,963.9 564.6,962.9 564.3,962.9  "/>
            <path fill="#201600" d="M518.6,968.5c0-0.6,0.4-1.1,1.5-1.1c0.2,0,0.5,0,0.7,0.1v-0.2c0-0.4-0.3-0.7-0.7-0.7s-0.7,0.2-0.9,0.3   l-0.4-0.4c0.3-0.3,0.8-0.5,1.4-0.5c0.9,0,1.4,0.5,1.4,1.3v2.3h-0.7v-0.4l0,0c-0.2,0.3-0.6,0.5-1,0.5   C519.1,969.7,518.6,969.2,518.6,968.5 M520.8,968.2V968c-0.2,0-0.4,0-0.6,0c-0.6,0-0.9,0.2-0.9,0.6c0,0.3,0.2,0.5,0.7,0.5   C520.4,969.1,520.8,968.7,520.8,968.2"/>
            <path fill="#201600" d="M522.4,969.2l0.4-0.4c0.2,0.2,0.4,0.3,0.8,0.3c0.6,0,0.9-0.4,1-1h-1.3v-0.6h1.3c-0.1-0.5-0.5-0.9-1-0.9   c-0.4,0-0.6,0.2-0.8,0.3l-0.4-0.4c0.3-0.3,0.7-0.5,1.2-0.5c1,0,1.7,0.8,1.7,1.8c0,1.1-0.7,1.8-1.7,1.8   C523,969.7,522.6,969.4,522.4,969.2"/>
            <path fill="#201600" d="M526.3,966.1h0.7v0.5l0,0c0.2-0.3,0.6-0.6,1.1-0.6c0.9,0,1.6,0.8,1.6,1.8c0,1.1-0.7,1.8-1.6,1.8   c-0.5,0-0.9-0.3-1.1-0.6l0,0v1.8h-0.7V966.1z M528,969c0.6,0,1-0.5,1-1.2s-0.4-1.2-1-1.2s-1,0.5-1,1.2   C526.9,968.5,527.4,969,528,969"/>
            <path fill="#201600" d="M530.5,967.8c0-1.1,0.8-1.8,1.7-1.8c1,0,1.7,0.8,1.7,1.8c0,1.1-0.8,1.8-1.7,1.8   C531.2,969.7,530.5,968.9,530.5,967.8 M533.2,967.8c0-0.7-0.4-1.2-1-1.2s-1,0.5-1,1.2s0.4,1.2,1,1.2S533.2,968.5,533.2,967.8"/>
            <path fill="#201600" d="M534.5,969.2l0.4-0.4c0.2,0.2,0.4,0.3,0.8,0.3c0.6,0,0.9-0.4,1-1h-1.3v-0.6h1.3c-0.1-0.5-0.5-0.9-1-0.9   c-0.4,0-0.6,0.2-0.8,0.3l-0.4-0.4c0.3-0.3,0.7-0.5,1.2-0.5c1,0,1.7,0.8,1.7,1.8c0,1.1-0.7,1.8-1.7,1.8   C535.2,969.7,534.7,969.4,534.5,969.2"/>
            <polygon fill="#201600" points="539.1,967.5 539.5,967.5 540.6,966.1 541.3,966.1 540.1,967.7 541.6,969.6 540.7,969.6    539.5,968.1 539.1,968.1 539.1,969.6 538.4,969.6 538.4,966.1 539.1,966.1  "/>
            <path fill="#201600" d="M541.9,967.8c0-1.1,0.7-1.8,1.7-1.8c0.5,0,1,0.2,1.2,0.5l-0.4,0.4c-0.2-0.1-0.4-0.3-0.8-0.3   c-0.6,0-1,0.5-1,1.2s0.4,1.2,1,1.2c0.4,0,0.6-0.2,0.8-0.3l0.4,0.4c-0.3,0.3-0.7,0.5-1.2,0.5C542.6,969.7,541.9,968.9,541.9,967.8"/>
            <polygon fill="#201600" points="548.5,969.6 547.8,969.6 547.8,966.7 546.3,966.7 546.3,969.6 545.7,969.6 545.7,966.1    548.5,966.1  "/>
            <path fill="#201600" d="M549.7,966.1h0.7v0.5l0,0c0.2-0.3,0.6-0.6,1.1-0.6c0.9,0,1.6,0.8,1.6,1.8c0,1.1-0.7,1.8-1.6,1.8   c-0.5,0-0.9-0.3-1.1-0.6l0,0v1.8h-0.7V966.1z M551.4,969c0.6,0,1-0.5,1-1.2s-0.4-1.2-1-1.2s-1,0.5-1,1.2S550.8,969,551.4,969"/>
            <path fill="#201600" d="M553.9,967.8c0-1.1,0.8-1.8,1.7-1.8s1.7,0.6,1.7,1.9v0.1h-2.6c0.1,0.6,0.6,1,1.1,1c0.3,0,0.6-0.1,0.9-0.3   l0.4,0.4c-0.4,0.3-0.8,0.5-1.4,0.5C554.7,969.7,553.9,968.9,553.9,967.8 M555.6,966.6c-0.5,0-0.9,0.4-1,0.9h1.9   C556.5,967.1,556.1,966.6,555.6,966.6"/>
            <path fill="#201600" d="M558,967.8c0-1.1,0.7-1.8,1.7-1.8c0.5,0,1,0.2,1.2,0.5l-0.4,0.4c-0.2-0.1-0.4-0.3-0.8-0.3   c-0.6,0-1,0.5-1,1.2s0.4,1.2,1,1.2c0.4,0,0.6-0.2,0.8-0.3l0.4,0.4c-0.3,0.3-0.7,0.5-1.2,0.5C558.7,969.7,558,968.9,558,967.8"/>
            <path fill="#201600" d="M561.5,967.8c0-1.1,0.7-1.8,1.7-1.8c0.5,0,1,0.2,1.2,0.5l-0.4,0.4c-0.2-0.1-0.4-0.3-0.8-0.3   c-0.6,0-1,0.5-1,1.2s0.4,1.2,1,1.2c0.4,0,0.6-0.2,0.8-0.3l0.4,0.4c-0.3,0.3-0.7,0.5-1.2,0.5C562.2,969.7,561.5,968.9,561.5,967.8"/>
            <path fill="#201600" d="M528.7,972.8c0.6,0,1,0.4,1,0.9c0,0.3-0.2,0.6-0.5,0.7l0,0c0.4,0.1,0.6,0.5,0.6,0.8c0,0.6-0.5,1-1.1,1H527   v-3.5L528.7,972.8L528.7,972.8z M529,973.7c0-0.3-0.2-0.4-0.5-0.4h-0.9v0.8h0.9C528.8,974.2,529,974,529,973.7 M529.2,975.2   c0-0.3-0.3-0.5-0.6-0.5h-0.9v1h0.9C528.9,975.7,529.2,975.5,529.2,975.2"/>
            <path fill="#201600" d="M530.6,974.5c0-1.1,0.8-1.8,1.7-1.8c1,0,1.7,0.8,1.7,1.8c0,1.1-0.8,1.8-1.7,1.8   C531.4,976.3,530.6,975.6,530.6,974.5 M533.4,974.5c0-0.7-0.4-1.2-1-1.2s-1,0.5-1,1.2s0.4,1.2,1,1.2   C532.9,975.7,533.4,975.2,533.4,974.5"/>
            <path fill="#201600" d="M540.1,972.5c0,0.4-0.2,0.8-0.5,1l0,0c0.6,0.2,1,0.6,1,1.3c0,0.8-0.6,1.4-1.6,1.4h-2v-4.9h1.7   C539.6,971.3,540.1,972,540.1,972.5 M539.4,972.7c0-0.4-0.4-0.7-0.8-0.7h-0.8v1.4h0.8C539,973.4,539.4,973.1,539.4,972.7    M539.8,974.8c0-0.5-0.4-0.8-0.9-0.8h-1.1v1.6h1.1C539.4,975.6,539.8,975.3,539.8,974.8"/>
            <polygon fill="#201600" points="542.3,974.1 543.7,974.1 543.7,972.8 544.4,972.8 544.4,976.2 543.7,976.2 543.7,974.7    542.3,974.7 542.3,976.2 541.6,976.2 541.6,972.8 542.3,972.8  "/>
            <path fill="#201600" d="M545.1,977.3l0.5-0.5c0.1,0.1,0.2,0.1,0.4,0.1c0.3,0,0.5-0.1,0.7-0.7l-1.4-3.6h0.8l1,2.7l0,0l0.9-2.7h0.7   l-1.3,3.7c-0.2,0.6-0.6,1.1-1.3,1.1C545.6,977.6,545.3,977.5,545.1,977.3"/>
            <polygon fill="#201600" points="550,974.2 550.4,974.2 551.5,972.8 552.3,972.8 551,974.4 552.5,976.2 551.7,976.2 550.5,974.7    550,974.7 550,976.2 549.3,976.2 549.3,972.8 550,972.8  "/>
            <path fill="#201600" d="M552.8,974.5c0-1.1,0.8-1.8,1.7-1.8c1,0,1.7,0.8,1.7,1.8c0,1.1-0.8,1.8-1.7,1.8S552.8,975.6,552.8,974.5    M555.6,974.5c0-0.7-0.4-1.2-1-1.2s-1,0.5-1,1.2s0.4,1.2,1,1.2C555.1,975.7,555.6,975.2,555.6,974.5"/>
            <path fill="#201600" d="M558.9,972.8c0.6,0,1,0.4,1,0.9c0,0.3-0.2,0.6-0.5,0.7l0,0c0.4,0.1,0.6,0.5,0.6,0.8c0,0.6-0.5,1-1.1,1h-1.8   v-3.5L558.9,972.8L558.9,972.8z M559.3,973.7c0-0.3-0.2-0.4-0.5-0.4h-0.9v0.8h0.9C559.1,974.2,559.3,974,559.3,973.7 M559.4,975.2   c0-0.3-0.3-0.5-0.6-0.5h-0.9v1h0.9C559.2,975.7,559.4,975.5,559.4,975.2"/>
            <path fill="#201600" d="M560.8,974.5c0-1.1,0.8-1.8,1.7-1.8c1,0,1.7,0.8,1.7,1.8c0,1.1-0.8,1.8-1.7,1.8S560.8,975.6,560.8,974.5    M563.6,974.5c0-0.7-0.4-1.2-1-1.2s-1,0.5-1,1.2s0.4,1.2,1,1.2C563.2,975.7,563.6,975.2,563.6,974.5"/>
            <rect x="566" y="952.7" fill="#484B4E" width="9.8" height="9.8"/>
            <path fill="#FFFFFF" d="M568.7,957h2.5v1.5h-2.5V957z M566,957h2.2v1.5H566V957z M573.6,959.4h-2V957h1L573.6,959.4z M574.6,960.4   l-1.8-4.4H566v5.4h8.6V960.4z"/>
            <rect x="566" y="962" fill="#C2524D" width="9.8" height="0.5"/>
        </g>
        <linearGradient id="line9_7-lineD2_14_00000064337096390454582300000003202157781931095173_" gradientUnits="userSpaceOnUse" x1="8458.9639" y1="-23510.9004" x2="8461.3896" y2="-23513.2559" gradientTransform="matrix(0.9449 -0.3274 0.3274 0.9449 477.6768 25487.0859)">
            <stop offset="0" style="stop-color:#E94282"/>
            <stop offset="1" style="stop-color:#ADACAC"/>
        </linearGradient>
        <path id="line9_7-lineD2_14" fill="url(#line9_7-lineD2_14_00000064337096390454582300000003202157781931095173_)" d="M773.7,502.8  c-0.2,0.4-0.6,0.5-1,0.3s-0.5-0.6-0.4-1c0.2-0.4,0.6-0.5,1-0.4C773.7,501.9,773.8,502.4,773.7,502.8z M774.5,501  c-0.2,0.4-0.6,0.5-1,0.3s-0.5-0.6-0.4-1c0.2-0.4,0.6-0.5,1-0.3C774.6,500.1,774.7,500.7,774.5,501z M775.4,499.2  c-0.2,0.4-0.6,0.5-1,0.3s-0.5-0.6-0.4-1c0.2-0.4,0.6-0.5,1-0.3C775.5,498.3,775.6,498.9,775.4,499.2z"/>
        <linearGradient id="line14_27-lineD1_12_00000150793813285476803230000002083770018052404917_" gradientUnits="userSpaceOnUse" x1="25291.8672" y1="-23420.4434" x2="25298.3281" y2="-23421.5664" gradientTransform="matrix(0.5477 -0.8367 0.8367 0.5477 6492.2305 34325.8242)">
            <stop offset="0.312" style="stop-color:#D14A43"/>
            <stop offset="0.7453" style="stop-color:#F7A600"/>
        </linearGradient>
        <path id="line14_27-lineD1_12" fill="url(#line14_27-lineD1_12_00000150793813285476803230000002083770018052404917_)" d="  M748.4,334.2c0.3-0.5,0.9-0.6,1.4-0.3s0.6,0.9,0.3,1.4s-0.9,0.6-1.4,0.3S748.1,334.7,748.4,334.2z M750.1,331.7  c0.3-0.5,0.9-0.5,1.4-0.3s0.6,0.9,0.3,1.4s-0.9,0.6-1.4,0.3C749.8,332.8,749.8,332.2,750.1,331.7z"/>
        <circle id="l10_4" fill="#BED12E" cx="780.2" cy="365.3" r="1.8"/>
        <circle id="l9_5" fill="#ADACAC" cx="768.7" cy="386.4" r="1.8"/>
        <path id="lineD2_7" fill="#E94282" d="M209.2,322.3c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  S213.7,322.3,209.2,322.3z M213.4,330.7c0,2.3-1.9,4.2-4.3,4.2s-4.1-2.1-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C211.5,326.4,213.5,328.4,213.4,330.7z"/>
        <rect id="white-base-28_131_" x="320.8" y="372.3" opacity="0.65" fill="#FFFFFF" width="15.4" height="14.8"/>
        <circle id="l3_10" fill="#0572B9" cx="327.4" cy="1092.2" r="1.8"/>
        <circle id="l8A_6" fill="#FFCD1E" cx="342" cy="1077.5" r="1.8"/>
        <path id="line14_21" fill="#FFFFFF" stroke="#D14A43" stroke-miterlimit="10" d="M378.9,659.7c-4.4,0-8,3.6-8,8s3.6,8,8,8s8-3.6,8-8  S383.3,659.7,378.9,659.7z M382.9,667.7c0,2.1-1.8,4-4.1,4c-2.2,0-3.9-1.9-3.9-4s1.7-4,3.9-4C381.1,663.6,383,665.5,382.9,667.7z"/>
        <path id="line4_8" fill="#24BCEF" d="M380.4,1021.4c-4.5,0-8.3,3.7-8.3,8.3s3.7,8.3,8.3,8.3s8.3-3.7,8.3-8.3  C388.7,1025.2,385,1021.4,380.4,1021.4z M384.6,1029.7c0,2.3-2,4.2-4.3,4.2c-2.4,0-4.1-2.1-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C382.8,1025.4,384.7,1027.4,384.6,1029.7z"/>
        <path id="line14_17" fill="#FFFFFF" stroke="#D14A43" stroke-miterlimit="10" d="M400.2,1033c-4.4,0-8,3.6-8,8s3.6,8,8,8s8-3.6,8-8  S404.6,1033,400.2,1033z M404.2,1041c0,2.1-1.8,4-4.1,4c-2.2,0-3.9-1.9-3.9-4s1.7-4,3.9-4C402.4,1036.9,404.3,1038.8,404.2,1041z"/>
        <rect id="white_line4_8-line14_17" x="387.7" y="1023.8" transform="matrix(0.5 -0.866 0.866 0.5 -702.1407 854.2433)" fill="#FFFFFF" width="2" height="22.8"/>
        <path id="line15_6-line15_7" fill="#D68AB1" d="M1416.4,1468.2v-87.1h-5.5v87.1C1412.8,1468.2,1414.6,1468.2,1416.4,1468.2z"/>
        <path id="line15_5-line15_6" fill="#D68AB1" d="M1410.9,1375.6c0-72.5,0-145,0-217.5h5.5c0,72.5,0,145,0,217.5  C1414.6,1375.6,1412.8,1375.6,1410.9,1375.6z"/>
        <path id="line15_6" fill="#D68AB1" d="M1405.4,1381.1c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0  C1405.4,1377.5,1405.4,1379.3,1405.4,1381.1z"/>
        <path id="line15_4-line15_5" fill="#D68AB1" d="M1410.9,1152.6c0-26.3,0-52.6,0-78.9h5.5c0,26.3,0,52.6,0,78.9  C1414.6,1152.6,1412.8,1152.6,1410.9,1152.6z"/>
        <path id="line15_5" fill="#D68AB1" d="M1410.9,1158.1c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0  C1410.9,1154.5,1410.9,1156.3,1410.9,1158.1z"/>
        <path id="line15_3-line15_4" fill="#D68AB1" d="M1410.9,1068.2c1.8,0,3.7,0,5.5,0v-61.1c0-8.5-3.3-16.6-9.3-22.6l-45.4-45.4  c-1.2,1.4-2.5,2.7-3.7,4.1c14.9,14.9,29.9,29.9,44.9,44.9c5.2,5.3,8.1,12.3,8.1,19.7L1410.9,1068.2L1410.9,1068.2z"/>
        <path id="line15_4" fill="#D68AB1" d="M1410.9,1073.7c3.7,0,7.3,0,11,0v-5.5c-3.7,0-7.3,0-11,0  C1410.9,1070.1,1410.9,1071.9,1410.9,1073.7z"/>
        <linearGradient id="line14_7-line15_3_00000005255325270021625400000004029357677015888821_" gradientUnits="userSpaceOnUse" x1="7819.855" y1="21477.1758" x2="7865.3823" y2="21496.5156" gradientTransform="matrix(0.9387 -0.3447 -0.3447 -0.9387 1381.6981 23814.8145)">
            <stop offset="0.2534" style="stop-color:#D14A43"/>
            <stop offset="0.6702" style="stop-color:#D68AB1"/>
        </linearGradient>
        <path id="line14_7-line15_3" fill="url(#line14_7-line15_3_00000005255325270021625400000004029357677015888821_)" d="M1347.5,932.4  c-7.9,0.6-15.5,4.9-19.7,12.3c-2,3.5-3.1,7.4-3.3,11.2c1.9-0.2,3.7-0.3,5.6-0.4c0.2-2.7,1-5.5,2.5-8c3.2-5.4,8.7-8.7,14.5-9.4  C1347.3,936.2,1347.4,934.3,1347.5,932.4z"/>
        <rect id="line15_1-line15_2" x="1234.1" y="817.8" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -234.8137 1121.8932)" fill="#D68AB1" width="5.5" height="53.2"/>
        <linearGradient id="line8_5-line15_2_00000127723017834238763430000011937543437894393497_" gradientUnits="userSpaceOnUse" x1="7337.4194" y1="-13401.6543" x2="7339.8984" y2="-13402.085" gradientTransform="matrix(1.5026 0.2593 -0.2575 1.492 -13206.7832 18961.2754)">
            <stop offset="0" style="stop-color:#D68AB1"/>
            <stop offset="1" style="stop-color:#FFCD1E"/>
        </linearGradient>
        <path id="line8_5-line15_2" fill="url(#line8_5-line15_2_00000127723017834238763430000011937543437894393497_)" d="M1271.3,870.1  c-0.8,0-1.4-0.7-1.4-1.5s0.6-1.5,1.4-1.5s1.5,0.6,1.5,1.5S1272.2,870.1,1271.3,870.1z"/>
        <path id="line15_2-line15_3" fill="#D68AB1" d="M1263.3,874.8c6.9,6.9,13.7,13.7,20.6,20.6c6,6,14.1,9.4,22.6,9.4c0.4,0,1,0,1.7,0  c2.4,0.1,8.1,0.5,13.6,3.6c2.2,1.2,4.2,2.8,6,4.6c6.6,6.6,13.2,13.2,19.8,19.8c1.3-1.3,2.6-2.5,4-3.8c-6.8-6.8-13.5-13.5-20.3-20.3  c-6-6-14.1-9.4-22.6-9.4c-0.4,0-1,0-1.7,0c-2.4-0.1-8.1-0.5-13.7-3.6c-2.2-1.2-4.2-2.8-6-4.6c-6.7-6.7-13.4-13.4-20.1-20.1  C1266,872.2,1264.7,873.5,1263.3,874.8z"/>
        <rect id="white-base-28_10_" x="1228.3" y="848" opacity="0.65" fill="#FFFFFF" width="83.9" height="12"/>
        <path id="lineD1_20-lineD1_21" fill="#FFFFFF" stroke="#F7A600" stroke-width="1.5" stroke-miterlimit="10" d="M287.1,1031.9  l-7.8,7.8c-7.4,7.4-19.5,7.4-26.9,0l-9.3-9.3c-0.9,1-1.9,1.9-2.9,2.7l9.4,9.4c9,9,23.5,9,32.5,0l7.8-7.8  C289,1033.8,288,1032.9,287.1,1031.9z"/>
        <rect id="lineD1_21-lineD1_22" x="170.2" y="878" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -629.9359 403.5818)" fill="#FFFFFF" stroke="#F7A600" stroke-width="1.5" stroke-miterlimit="9.9977" width="4" height="168.4"/>
        <path id="lineD1_21" fill="#F7A600" d="M236.8,1018.5c-4.5,0-8.2,3.7-8.2,8.2c0,4.5,3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  C245.1,1022.2,241.3,1018.5,236.8,1018.5z M240.9,1026.8c0,2.2-1.9,4.1-4.2,4.1s-4-2-4.1-4.1c0-2.2,1.8-4.1,4.1-4.2  C239.1,1022.6,241,1024.6,240.9,1026.8z"/>
        <linearGradient id="line3_9-lineD1_21_00000103248334621171415540000005550216806910149541_" gradientUnits="userSpaceOnUse" x1="59579.3945" y1="58803.9609" x2="59589.3789" y2="58803.9609" gradientTransform="matrix(0.4123 -0.4123 -0.4123 -0.4123 -93.1439 49846.3398)">
            <stop offset="0.2068" style="stop-color:#0572B9"/>
            <stop offset="0.8728" style="stop-color:#F7A600"/>
        </linearGradient>
        <polygon id="line3_9-lineD1_21" fill="url(#line3_9-lineD1_21_00000103248334621171415540000005550216806910149541_)" points="  229.1,1029.7 233.7,1034.3 229.6,1038.5 225,1033.9 "/>
        <rect id="white_line3_9-lineD1_21" x="219.4" y="1032.4" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -663.3962 465.2)" fill="#FFFFFF" width="20.9" height="2"/>
        <rect id="white-base-28_24_" x="130.7" y="971" opacity="0.65" fill="#FFFFFF" width="91.5" height="12"/>
        <circle id="lineD2_26" fill="#FFFFFF" stroke="#E94282" stroke-miterlimit="10" cx="1130.5" cy="1417.4" r="3"/>
        <circle id="lineD2_28" fill="#FFFFFF" stroke="#E94282" stroke-miterlimit="10" cx="1067.2" cy="1480.8" r="3"/>
        <circle id="lineD2_27" fill="#FFFFFF" stroke="#E94282" stroke-miterlimit="10" cx="1098.2" cy="1449.7" r="3"/>
        <path id="line4_5-line4_6" fill="#24BCEF" d="M385.9,906c19,0,37.9,0,56.9,0c0-1.8,0-3.7,0-5.5c-18.9,0-37.9,0-56.8,0  C385.9,902.4,385.9,904.2,385.9,906z"/>
        <path id="line8A_5" fill="#FFCD1E" d="M460.4,932.5c4.5,0,8.2-3.7,8.2-8.2s-3.7-8.2-8.2-8.2s-8.2,3.7-8.2,8.2  S455.9,932.5,460.4,932.5z M456.3,924.1c0-2.2,1.9-4.1,4.2-4.1s4,2,4.1,4.1c0,2.2-1.8,4.1-4.1,4.2  C458.1,928.4,456.2,926.3,456.3,924.1z"/>
        <linearGradient id="line4_5-line8A_5_00000050655704884271093410000007016675960434055612_" gradientUnits="userSpaceOnUse" x1="35797.4141" y1="-20988.7344" x2="35791.3633" y2="-20976.4473" gradientTransform="matrix(-1 0 0 1 36254.6172 21893.3652)">
            <stop offset="0.1758" style="stop-color:#24BCEF"/>
            <stop offset="0.8118" style="stop-color:#FFCD1E"/>
        </linearGradient>
        <path id="line4_5-line8A_5" fill="url(#line4_5-line8A_5_00000050655704884271093410000007016675960434055612_)" d="M455.2,908.3  c0.7,0.5,1.9,1.5,2.9,3.1c1.2,1.9,1.4,3.7,1.5,4.6c0.8,0.1,1.7,0.2,2.8,0.5s2,0.7,2.8,1c0-0.9,0-2.1-0.3-3.4c0,0-0.4-2.1-1.2-4  c-2.1-4.6-5.8-6.9-7.2-7.6C456,904.6,455.6,906.4,455.2,908.3z"/>
        <path id="white_line4_5-line8A_5" fill="#FFFFFF" d="M461.2,917.1c0,1.1-0.2,2.1-0.4,3.1c0.8,0.3,1.5,0.7,2.3,1  c0.4-1.3,0.6-2.7,0.6-4.1c0-6.9-4.8-12.8-11.2-14.5c-0.1,0.8-0.2,1.7-0.3,2.5C457.3,906.6,461.2,911.4,461.2,917.1z"/>
        <linearGradient id="line4_5-line11_6_00000034060272245923620810000002864958446390202497_" gradientUnits="userSpaceOnUse" x1="35800.9805" y1="-21017.8223" x2="35821.9492" y2="-20972.6836" gradientTransform="matrix(-1 0 0 1 36254.6172 21893.3652)">
            <stop offset="0.7127" style="stop-color:#24BCEF"/>
            <stop offset="0.8717" style="stop-color:#89CDCF"/>
        </linearGradient>
        <path id="line4_5-line11_6" fill="url(#line4_5-line11_6_00000034060272245923620810000002864958446390202497_)" d="M442.2,908.3  c-0.6-1.8-1.1-3.6-1.7-5.4c-0.7,0.5-2,1.3-3.4,2.6c-2.5,2.4-3.5,5-3.7,5.6c-1,2.6-1.2,4.9-1.1,6.3c0.9-0.3,1.8-0.6,2.8-0.8  s1.9-0.4,2.8-0.5c0.1-1,0.4-2.6,1.4-4.3C440.3,910,441.5,908.9,442.2,908.3z"/>
        <path id="line8A_5-line8A_6" fill="#FFCD1E" d="M455,925.8c-31.4,31.4-63,63-94.4,94.4c-8.7,8.7-17.4,17.4-26.1,26.1  c-6.3,6.3-9.8,14.7-9.8,23.6v2.4v13.7c1.7,0,3.8,0,5.5,0c0-5.3,0-10.7,0-16c0-7.6,3-14.7,8.2-19.9c8.7-8.7,17.4-17.3,26.1-26  c31.5-31.5,63.1-63.1,94.7-94.7C457.8,928.2,456.4,927,455,925.8z"/>
        <linearGradient id="line11_6-line8A_5_00000033332649731128652040000018256883374942215089_" gradientUnits="userSpaceOnUse" x1="35791.6992" y1="-20966.8965" x2="35820.3711" y2="-20959.2148" gradientTransform="matrix(-1 0 0 1 36254.6172 21893.3652)">
            <stop offset="0.3417" style="stop-color:#FFCD1E"/>
            <stop offset="0.3459" style="stop-color:#FFCD1E"/>
            <stop offset="0.577" style="stop-color:#89CDCF"/>
        </linearGradient>
        <path id="line11_6-line8A_5" fill="url(#line11_6-line8A_5_00000033332649731128652040000018256883374942215089_)" d="M452.8,927.3  c-0.8,0.4-2.3,0.9-4.2,0.9s-3.4-0.5-4.2-0.8c-1.3,1.4-2.6,2.8-3.9,4.2c1.2,0.7,3.1,1.6,5.5,2c0.3,0.1,1.3,0.2,2.6,0.2  c3.4,0,6.3-1.2,8.2-2.2c-0.6-0.7-1.3-1.4-2-2.2C454.1,928.7,453.5,928,452.8,927.3z"/>
        <linearGradient id="line4_5-lineD1_19_00000014635560404605632250000015439148719677889447_" gradientUnits="userSpaceOnUse" x1="15875.4463" y1="-26960.4844" x2="15871.583" y2="-26964.9824" gradientTransform="matrix(-0.7586 0.6516 0.6516 0.7586 30059.2188 10998.0352)">
            <stop offset="0" style="stop-color:#24BCEF"/>
            <stop offset="1" style="stop-color:#F7A600"/>
        </linearGradient>
        <path id="line4_5-lineD1_19" fill="url(#line4_5-lineD1_19_00000014635560404605632250000015439148719677889447_)" d="M448.3,893.9  c-0.8-0.2-1.3-1-1.1-1.9c0.2-0.8,1.1-1.3,1.9-1.1s1.2,1,1,1.8C449.9,893.6,449.1,894,448.3,893.9z M448.3,889.7  c-0.8-0.2-1.3-1-1.1-1.9c0.2-0.8,1.1-1.3,1.9-1.1s1.2,1,1,1.8C449.9,889.5,449.1,889.9,448.3,889.7z M448.3,885.4  c-0.8-0.2-1.3-1-1.1-1.9c0.2-0.8,1.1-1.3,1.9-1.1s1.2,1,1,1.8C449.9,885.2,449.1,885.6,448.3,885.4z"/>
        <linearGradient id="line4_6-lineD1_19_00000106833406597187369800000012690634019899604387_" gradientUnits="userSpaceOnUse" x1="34723.8203" y1="-14595.9717" x2="34743.4492" y2="-14599.3818" gradientTransform="matrix(0.2593 -1.5026 1.492 0.2575 13182.3027 56833.0898)">
            <stop offset="0.4064" style="stop-color:#24BCEF"/>
            <stop offset="0.451" style="stop-color:#50B7BD"/>
            <stop offset="0.5155" style="stop-color:#8BB17A"/>
            <stop offset="0.574" style="stop-color:#BAAC46"/>
            <stop offset="0.6244" style="stop-color:#DBA920"/>
            <stop offset="0.6648" style="stop-color:#EFA709"/>
            <stop offset="0.6901" style="stop-color:#F7A600"/>
        </linearGradient>
        <path id="line4_6-lineD1_19" fill="url(#line4_6-lineD1_19_00000106833406597187369800000012690634019899604387_)" d="M430.3,872.5  c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5C429.6,871,430.3,871.7,430.3,872.5z M425.8,872.5c0,0.8-0.7,1.5-1.5,1.5  s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5C425.1,871,425.8,871.7,425.8,872.5z M435.2,872.5c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5  s0.7-1.5,1.5-1.5S435.2,871.7,435.2,872.5z M439.8,872.5c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5  C439.1,871,439.8,871.7,439.8,872.5z M381.2,892.5c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5S381.2,891.7,381.2,892.5  z M382.2,887.5c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5S382.2,886.7,382.2,887.5z M384.2,882.5  c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5S384.2,881.7,384.2,882.5z M387.2,877.5c0,0.8-0.7,1.5-1.5,1.5  s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5S387.2,876.7,387.2,877.5z M421.2,872.5c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5  S421.2,871.7,421.2,872.5z M416.2,872.5c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5S416.2,871.7,416.2,872.5z   M411.2,872.5c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5S411.2,871.7,411.2,872.5z M406.2,872.5  c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5S406.2,871.7,406.2,872.5z M401.2,872.5c0,0.8-0.7,1.5-1.5,1.5  s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5S401.2,871.7,401.2,872.5z M396.2,872.5c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5  S396.2,871.7,396.2,872.5z M391.2,873.5c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5S391.2,872.7,391.2,873.5z"/>
        <linearGradient id="line14_18-lineD1_19_00000038408242503955550990000000030930373518265226_" gradientUnits="userSpaceOnUse" x1="34787.3477" y1="18153.7148" x2="34806.9766" y2="18157.125" gradientTransform="matrix(0.2593 -1.5026 -1.492 -0.2575 18463.9824 57844.6406)">
            <stop offset="0.4064" style="stop-color:#D14A43"/>
            <stop offset="0.6901" style="stop-color:#F7A600"/>
        </linearGradient>
        <path id="line14_18-lineD1_19" fill="url(#line14_18-lineD1_19_00000038408242503955550990000000030930373518265226_)" d="  M425.8,872.5c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5C425.1,871,425.8,871.7,425.8,872.5z M430.3,872.5  c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5C429.6,871,430.3,871.7,430.3,872.5z M435.2,872.5c0,0.8-0.7,1.5-1.5,1.5  s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5S435.2,871.7,435.2,872.5z M361.2,892.5c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5  S361.2,891.7,361.2,892.5z M362.2,887.5c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5S362.2,886.7,362.2,887.5z   M364.2,882.5c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5S364.2,881.7,364.2,882.5z M367.2,877.5  c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5S367.2,876.7,367.2,877.5z M401.2,872.5c0,0.8-0.7,1.5-1.5,1.5  s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5S401.2,871.7,401.2,872.5z M396.2,872.5c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5  S396.2,871.7,396.2,872.5z M391.2,872.5c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5S391.2,871.7,391.2,872.5z   M386.2,872.5c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5S386.2,871.7,386.2,872.5z M381.2,872.5  c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5S381.2,871.7,381.2,872.5z M376.2,872.5c0,0.8-0.7,1.5-1.5,1.5  s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5S376.2,871.7,376.2,872.5z M371.2,873.5c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5  S371.2,872.7,371.2,873.5z M421.2,872.5c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5S421.2,871.7,421.2,872.5z   M416.2,872.5c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5S416.2,871.7,416.2,872.5z M411.2,872.5  c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5S411.2,871.7,411.2,872.5z M406.2,872.5c0,0.8-0.7,1.5-1.5,1.5  s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5S406.2,871.7,406.2,872.5z M439.8,872.5c0,0.8-0.7,1.5-1.5,1.5s-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5  C439.1,871,439.8,871.7,439.8,872.5z"/>
        <rect id="white-base-28_22_" x="399.4" y="936.5" opacity="0.65" fill="#FFFFFF" width="71.6" height="18.7"/>
        <path id="line11_6" fill="#8ACDCF" d="M436.8,915.9c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  C445,919.6,441.3,915.9,436.8,915.9z M440.9,924.2c0,2.2-1.9,4.1-4.2,4.1c-2.3,0-4-2-4.1-4.1c0-2.2,1.8-4.1,4.1-4.2  C439.1,920,441,922,440.9,924.2z"/>
        <path id="white_line4_5-line11_6" fill="#FFFFFF" d="M445.2,905.1c-0.1-0.8-0.2-1.7-0.3-2.5c-6.4,1.7-11.2,7.6-11.2,14.5  c0,1.4,0.2,2.8,0.6,4.1c0.8-0.3,1.6-0.6,2.3-0.9c-0.3-1-0.4-2-0.4-3.1C436.2,911.4,440,906.6,445.2,905.1z"/>
        <path id="white_line8A_5-line11_6" fill="#FFFFFF" d="M457.1,926.2c-2.2,2.1-5.2,3.3-8.4,3.3c-3.3,0-6.2-1.3-8.5-3.4  c-0.6,0.6-1.3,1.1-1.9,1.7c2.7,2.6,6.3,4.2,10.3,4.2s7.7-1.6,10.4-4.2C458.4,927.3,457.7,926.8,457.1,926.2z"/>
        <path id="line11_5" fill="#8ACDCF" d="M375.9,815.2c3.2-3.2,3.2-8.5,0-11.7s-8.5-3.2-11.7,0s-3.2,8.5,0,11.7  S372.7,818.4,375.9,815.2z M367,812.3c-1.6-1.7-1.5-4.4,0.1-6c1.6-1.4,4.3-1.7,5.9,0c1.7,1.7,1.7,4.4,0.1,6  C371.6,813.9,368.7,814,367,812.3z"/>
        <rect id="white_line8A_5-line14_19" x="360.3" y="789.2" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -460.283 489.9633)" fill="#FFFFFF" width="2" height="22.8"/>
        <path id="line11_4" fill="#8ACDCF" d="M460.1,730.9c3.2-3.2,3.2-8.5,0-11.7s-8.5-3.2-11.7,0s-3.2,8.5,0,11.7  S456.9,734.1,460.1,730.9z M451.2,728c-1.6-1.7-1.5-4.4,0.1-6c1.6-1.4,4.3-1.7,5.9,0c1.7,1.7,1.7,4.4,0.1,6  C455.8,729.6,452.9,729.7,451.2,728z"/>
        <rect id="white_line7_7-line8A_4" x="453.2" y="702.2" fill="#FFFFFF" width="2" height="22.8"/>
        <path id="line15_2" fill="#D68AB1" d="M1252.7,868.6c0,4.5,3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2s-3.7-8.2-8.2-8.2  S1252.7,864.1,1252.7,868.6z M1261.1,864.4c2.3,0,4.2,1.9,4.2,4.3s-2,4.1-4.2,4.2c-2.3,0-4.2-1.8-4.3-4.2  C1256.8,866.2,1258.8,864.3,1261.1,864.4z"/>
        <path id="line15_3" fill="#D68AB1" d="M1350.4,943c3.9,2.3,9,0.9,11.3-3s0.9-9-3-11.3s-9-0.9-11.3,3  C1345.2,935.6,1346.6,940.8,1350.4,943z M1350.8,933.7c1.2-2,3.9-2.7,5.9-1.5c2.1,1.2,2.6,3.8,1.5,5.7c-1.1,2.1-3.7,2.7-5.8,1.6  C1350.4,938.4,1349.6,935.8,1350.8,933.7z"/>
        <path id="white_line14_7-line15_3" fill="#FFFFFF" d="M1351.1,934.1c-0.6,0-1.2-0.1-1.8-0.1c-12.8,0-23.2,10.5-23.2,23.2  c0,1.1,0.1,2.2,0.2,3.2c0.8-0.1,1.7-0.3,2.5-0.4c-0.1-0.9-0.2-1.8-0.2-2.8c0-11.5,9.4-20.9,20.7-20.9c0.5,0,1,0,1.5,0.1  C1350.9,935.6,1351,934.8,1351.1,934.1z"/>
        <rect id="white-base-28_20_" x="128.7" y="929.7" opacity="0.65" fill="#FFFFFF" width="70.7" height="13"/>
        <linearGradient id="line2_8-line11_2_00000072985641158465239120000017844279091623344042_" gradientUnits="userSpaceOnUse" x1="101397.8672" y1="-54849.3047" x2="101408.4141" y2="-54849.3047" gradientTransform="matrix(0 -0.5831 0.5831 0 32546.7793 59753.5312)">
            <stop offset="0.2068" style="stop-color:#4BAF4F"/>
            <stop offset="0.8728" style="stop-color:#89CDCF"/>
        </linearGradient>
        <rect id="line2_8-line11_2" x="560.9" y="622.1" fill="url(#line2_8-line11_2_00000072985641158465239120000017844279091623344042_)" width="6.5" height="6.2"/>
        <path id="line11_1-line11_2" fill="#89CDCF" d="M631.9,556c-2.4,0-6.3,0.4-10.7,2.2c-5.3,2.2-8.7,5.4-10.4,7.3  c-14.3,14.2-28.5,28.5-42.8,42.7c-0.3,0.3-0.7,0.7-1,1c1.4,1.2,2.8,2.4,4.2,3.6c0.3-0.3,0.6-0.6,0.9-0.9  c14.6-14.6,29.2-29.2,43.8-43.8c4.2-4.2,9.9-6.6,15.9-6.6h156.9c0-1.8,0-3.7,0-5.5H631.9z"/>
        <path id="line15_0" fill="#D68AB1" d="M1184.8,747.2c0,4.5,3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2s-3.7-8.2-8.2-8.2  S1184.8,742.7,1184.8,747.2z M1193.2,743c2.3,0,4.2,1.9,4.2,4.3s-2,4.1-4.2,4.2c-2.3,0-4.2-1.8-4.3-4.2  C1188.9,744.9,1190.9,742.9,1193.2,743z"/>
        <path id="line15_1" fill="#D68AB1" d="M1216.3,827.7c2.6-2.6,5.2-5.2,7.8-7.8l-3.9-3.9c-2.6,2.6-5.2,5.2-7.8,7.8  C1213.7,825.1,1215,826.4,1216.3,827.7z"/>
        <linearGradient id="line3_17-line15_0_00000062876476826880378820000018198976792789462716_" gradientUnits="userSpaceOnUse" x1="7279.9971" y1="-13473.042" x2="7282.4761" y2="-13473.4727" gradientTransform="matrix(1.5026 0.2593 -0.2575 1.492 -13206.7832 18961.2754)">
            <stop offset="0" style="stop-color:#D68AB1"/>
            <stop offset="1" style="stop-color:#0572B9"/>
        </linearGradient>
        <path id="line3_17-line15_0" fill="url(#line3_17-line15_0_00000062876476826880378820000018198976792789462716_)" d="M1203.4,748.7  c-0.8,0-1.4-0.7-1.4-1.5s0.6-1.5,1.4-1.5s1.5,0.6,1.5,1.5S1204.3,748.7,1203.4,748.7z"/>
        <g>
            <path fill="#89CDCF" d="M824.8,1480v-5.6h1.9c0.5,0,0.9,0.1,1.2,0.4s0.4,0.6,0.4,1c0,0.2-0.1,0.4-0.2,0.6c-0.1,0.2-0.3,0.3-0.4,0.4   l0,0c0.3,0.1,0.6,0.3,0.8,0.5c0.2,0.3,0.3,0.6,0.3,1s-0.2,0.8-0.5,1.1c-0.3,0.3-0.8,0.5-1.3,0.5L824.8,1480L824.8,1480z    M825.6,1476.7h1c0.3,0,0.5-0.1,0.6-0.2c0.2-0.1,0.3-0.3,0.3-0.6s-0.1-0.5-0.3-0.6s-0.4-0.2-0.6-0.2h-1V1476.7z M825.6,1479.3h1.3   c0.3,0,0.6-0.1,0.8-0.3c0.2-0.2,0.3-0.4,0.3-0.7c0-0.3-0.1-0.5-0.3-0.7s-0.5-0.3-0.8-0.3h-1.3V1479.3z"/>
            <path fill="#89CDCF" d="M831,1480.1c-0.4,0-0.7-0.1-1-0.4c-0.3-0.2-0.4-0.5-0.4-0.9c0-0.3,0.1-0.6,0.4-0.9c0.3-0.3,0.7-0.4,1.3-0.4   c0.1,0,0.2,0,0.4,0c0.1,0,0.3,0,0.4,0.1v-0.2c0-0.2-0.1-0.4-0.2-0.6s-0.4-0.2-0.6-0.2c-0.2,0-0.4,0-0.6,0.1   c-0.2,0.1-0.3,0.2-0.5,0.2l-0.5-0.5c0.2-0.2,0.4-0.3,0.7-0.4s0.6-0.1,0.9-0.1c0.5,0,0.9,0.1,1.2,0.4s0.4,0.6,0.4,1.1v2.6h-0.8v-0.4   l0,0c-0.1,0.2-0.3,0.3-0.5,0.4C831.5,1480,831.3,1480.1,831,1480.1z M831.2,1479.4c0.3,0,0.5-0.1,0.7-0.3s0.3-0.4,0.3-0.8v-0.2   c-0.1,0-0.2,0-0.4,0c-0.1,0-0.2,0-0.3,0c-0.3,0-0.6,0.1-0.8,0.2s-0.3,0.3-0.3,0.5s0.1,0.3,0.2,0.4   C830.7,1479.4,830.9,1479.4,831.2,1479.4z"/>
            <path fill="#89CDCF" d="M834.8,1479.4v2.1H834v-5.4h0.8v0.6l0,0c0.1-0.2,0.3-0.4,0.5-0.5s0.5-0.2,0.8-0.2c0.5,0,1,0.2,1.3,0.6   c0.4,0.4,0.5,0.9,0.5,1.5s-0.2,1.1-0.5,1.5c-0.4,0.4-0.8,0.6-1.3,0.6c-0.3,0-0.5-0.1-0.8-0.2C835.2,1479.8,835,1479.6,834.8,1479.4   L834.8,1479.4z M834.8,1478c0,0.4,0.1,0.7,0.3,1s0.5,0.4,0.9,0.4s0.6-0.1,0.9-0.4s0.3-0.6,0.3-1s-0.1-0.7-0.3-1s-0.5-0.4-0.9-0.4   s-0.6,0.1-0.9,0.4C834.9,1477.3,834.8,1477.6,834.8,1478z"/>
            <path fill="#89CDCF" d="M839,1480v-4h0.8v3.3h1.3v-3.3h0.8v3.3h1.3v-3.3h0.8v4H839z"/>
            <path fill="#89CDCF" d="M846.2,1480.1c-0.4,0-0.7-0.1-1-0.4c-0.3-0.2-0.4-0.5-0.4-0.9c0-0.3,0.1-0.6,0.4-0.9   c0.3-0.3,0.7-0.4,1.3-0.4c0.1,0,0.2,0,0.4,0c0.1,0,0.3,0,0.4,0.1v-0.2c0-0.2-0.1-0.4-0.2-0.6s-0.4-0.2-0.6-0.2   c-0.2,0-0.4,0-0.6,0.1c-0.2,0.1-0.3,0.2-0.5,0.2l-0.5-0.5c0.2-0.2,0.4-0.3,0.7-0.4s0.6-0.1,0.9-0.1c0.5,0,0.9,0.1,1.2,0.4   s0.4,0.6,0.4,1.1v2.6h-0.8v-0.4l0,0c-0.1,0.2-0.3,0.3-0.5,0.4C846.7,1480,846.4,1480.1,846.2,1480.1z M846.4,1479.4   c0.3,0,0.5-0.1,0.7-0.3s0.3-0.4,0.3-0.8v-0.2c-0.1,0-0.2,0-0.4,0c-0.1,0-0.2,0-0.3,0c-0.3,0-0.6,0.1-0.8,0.2s-0.3,0.3-0.3,0.5   s0.1,0.3,0.2,0.4C845.9,1479.4,846.1,1479.4,846.4,1479.4z"/>
            <path fill="#89CDCF" d="M850.9,1480h-1.6v-4h1.7c0.4,0,0.7,0.1,0.9,0.3s0.3,0.4,0.3,0.7c0,0.2,0,0.3-0.1,0.5s-0.2,0.3-0.4,0.3l0,0   c0.2,0.1,0.4,0.2,0.5,0.4c0.1,0.2,0.2,0.4,0.2,0.6c0,0.4-0.1,0.6-0.4,0.9S851.3,1480,850.9,1480z M850,1477.6h0.7   c0.1,0,0.3,0,0.4-0.1s0.2-0.2,0.2-0.4s-0.1-0.3-0.2-0.4c-0.1-0.1-0.3-0.1-0.4-0.1H850V1477.6z M850,1479.4h0.7c0.2,0,0.4,0,0.5-0.1   s0.2-0.2,0.2-0.4s-0.1-0.3-0.2-0.4s-0.3-0.1-0.5-0.1H850V1479.4z"/>
            <path fill="#89CDCF" d="M855,1480.1c-0.5,0-1-0.2-1.4-0.6s-0.6-0.9-0.6-1.5s0.2-1.1,0.6-1.5c0.4-0.4,0.8-0.6,1.4-0.6   c0.3,0,0.6,0.1,0.8,0.2s0.4,0.2,0.6,0.4l-0.5,0.5c-0.1-0.1-0.2-0.2-0.4-0.2c-0.1-0.1-0.3-0.1-0.5-0.1c-0.4,0-0.6,0.1-0.9,0.4   s-0.3,0.6-0.3,1s0.1,0.7,0.3,1s0.5,0.4,0.9,0.4c0.2,0,0.4,0,0.5-0.1s0.3-0.2,0.4-0.2l0.5,0.5c-0.1,0.1-0.3,0.3-0.6,0.4   C855.5,1480,855.3,1480.1,855,1480.1z"/>
            <path fill="#89CDCF" d="M857.2,1480v-4h0.8v1.6h0.6l1.1-1.6h0.9l-1.3,1.8l1.5,2.1h-1l-1.2-1.7H858v1.7L857.2,1480L857.2,1480z"/>
            <path fill="#89CDCF" d="M862.5,1480.1c-0.4,0-0.7-0.1-1-0.4c-0.3-0.2-0.4-0.5-0.4-0.9c0-0.3,0.1-0.6,0.4-0.9   c0.3-0.3,0.7-0.4,1.3-0.4c0.1,0,0.2,0,0.4,0c0.1,0,0.3,0,0.4,0.1v-0.2c0-0.2-0.1-0.4-0.2-0.6s-0.4-0.2-0.6-0.2   c-0.2,0-0.4,0-0.6,0.1c-0.2,0.1-0.3,0.2-0.5,0.2l-0.5-0.5c0.2-0.2,0.4-0.3,0.7-0.4s0.6-0.1,0.9-0.1c0.5,0,0.9,0.1,1.2,0.4   s0.4,0.6,0.4,1.1v2.6h-0.8v-0.4l0,0c-0.1,0.2-0.3,0.3-0.5,0.4C863,1480,862.8,1480.1,862.5,1480.1z M862.7,1479.4   c0.3,0,0.5-0.1,0.7-0.3s0.3-0.4,0.3-0.8v-0.2c-0.1,0-0.2,0-0.4,0c-0.1,0-0.2,0-0.3,0c-0.3,0-0.6,0.1-0.8,0.2s-0.3,0.3-0.3,0.5   s0.1,0.3,0.2,0.4C862.3,1479.4,862.4,1479.4,862.7,1479.4z"/>
            <path fill="#89CDCF" d="M865.2,1480l1.1-1.5l0,0c-0.2-0.1-0.4-0.2-0.6-0.4c-0.1-0.2-0.2-0.4-0.2-0.7c0-0.4,0.1-0.7,0.4-0.9   c0.3-0.2,0.6-0.3,1-0.3h1.5v4h-0.8v-1.4h-0.5l-1,1.4h-0.9V1480z M867,1477.9h0.6v-1.2H867c-0.2,0-0.4,0.1-0.5,0.2s-0.2,0.3-0.2,0.5   s0.1,0.4,0.2,0.5C866.6,1477.9,866.8,1477.9,867,1477.9z"/>
        </g>
        <rect id="line6_18-line6_19" x="616.8" y="1394.9" fill="#EF7E24" width="5.5" height="35"/>
        <path id="line6_19" fill="#EF7E24" d="M619.6,1429.2c-4.5,0-8.3,3.7-8.3,8.3s3.7,8.3,8.3,8.3s8.3-3.7,8.3-8.3  S624.1,1429.2,619.6,1429.2z M623.8,1437.4c0,2.3-2,4.2-4.3,4.2c-2.4,0-4.1-2.1-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C622,1433.1,623.9,1435.2,623.8,1437.4z"/>
        <rect id="line6_19-line6_20" x="616.8" y="1445.2" fill="#EF7E24" width="5.5" height="51.5"/>
        <path id="line11_4-line11_7" fill="#89CDCF" d="M447.6,727.7c-7.6,7.6-15.3,15.3-22.9,22.9c-4.2,4.2-9.9,6.6-15.9,6.6h-85.1  c0,1.8,0.1,3.7,0.1,5.5h84.9c2.4,0,6.3-0.4,10.7-2.2c5.3-2.2,8.7-5.4,10.4-7.3c7.3-7.2,14.5-14.5,21.8-21.7  C450.3,730.2,448.9,729,447.6,727.7z"/>
        <path id="line11_7-line11_8" fill="#89CDCF" d="M275.9,762.7c14.3,0,28.6,0,42.9,0c0-1.8-0.1-3.7-0.1-5.5c-14.3,0-28.5,0-42.8,0  C275.9,759.1,275.9,760.9,275.9,762.7z"/>
        <path id="line11_7" fill="#89CDCF" d="M318.3,757.2c0,3.7,0,7.3,0,11h5.5c0-3.7,0-7.3,0-11C321.9,757.2,320.1,757.2,318.3,757.2z"/>
        <path id="line11_8" fill="#89CDCF" d="M271.8,751.7c0,3.7,0,7.3,0,11h5.5c0-3.7,0-7.3,0-11C275.4,751.7,273.6,751.7,271.8,751.7z"/>
        <path id="line11_17-line11_18" fill="#89CDCF" d="M686.2,1472.6c-0.4,1.8-0.8,3.6-1.2,5.4c23.8,5.3,48.1,9.3,72.7,12.2  c0.2-1.8,0.4-3.7,0.6-5.5C733.9,1481.9,709.8,1477.8,686.2,1472.6z"/>
        <path id="line11_18" fill="#89CDCF" d="M765.3,1480c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2S769.8,1480,765.3,1480z   M769.6,1488.4c0,2.3-1.9,4.2-4.3,4.2c-2.4,0-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3C767.6,1484.1,769.6,1486,769.6,1488.4z"/>
        <path id="line11_17" fill="#89CDCF" d="M685.2,1478.1c0.8-3.6,1.6-7.1,2.4-10.7l-5.4-1.2c-0.8,3.6-1.6,7.1-2.4,10.7  C681.6,1477.3,683.4,1477.7,685.2,1478.1z"/>
        <path id="line11_15-line11_16" fill="#89CDCF" d="M507.7,1407.1c-0.9,1.7-1.8,3.3-2.7,5c29.5,15.6,60.2,29.1,92,40.5  c0.5-1.8,1.1-3.6,1.6-5.3C567.3,1436,536.9,1422.5,507.7,1407.1z"/>
        <path id="line11_16" fill="#89CDCF" d="M604.8,1444.1c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  C613,1447.9,609.3,1444.1,604.8,1444.1z M609.1,1452.5c0,2.3-1.9,4.2-4.3,4.2c-2.4,0-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C607.1,1448.2,609.1,1450.1,609.1,1452.5z"/>
        <path id="line11_15" fill="#89CDCF" d="M505.1,1412.1c1.7-3.3,3.4-6.4,5.2-9.7l-4.9-2.6c-1.7,3.3-3.4,6.4-5.2,9.7  C502,1410.5,503.5,1411.3,505.1,1412.1z"/>
        <path id="line11_13-line11_14" fill="#89CDCF" d="M349.5,1294.5c-1.2,1.4-2.5,2.9-3.7,4.3c28.2,26.3,58.4,50.5,90.5,72.2  c0.9-1.7,1.8-3.3,2.7-5C407.3,1344.5,377.4,1320.6,349.5,1294.5z"/>
        <path id="line11_14" fill="#89CDCF" d="M443.9,1364.1c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  S448.5,1364.1,443.9,1364.1z M448.2,1372.4c0,2.3-1.9,4.2-4.3,4.2s-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C446.3,1368.1,448.2,1370.1,448.2,1372.4z"/>
        <path id="line11_13" fill="#89CDCF" d="M334.1,1291.6c0,4.5,3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2s-3.7-8.2-8.2-8.2  S334.1,1287,334.1,1291.6z M342.3,1287.4c2.4,0.1,4.2,2,4.2,4.3c-0.1,2.2-1.8,4.2-4.2,4.2c-2.4,0-4.3-1.9-4.3-4.2  C338,1289.3,340,1287.4,342.3,1287.4z"/>
        <path id="line11_11-line11_12" fill="#89CDCF" d="M253.8,1185.1c-16.5-23.1-31.7-47.2-45.4-72.2c-1.7,0.9-3.4,1.8-5.1,2.7  c13.8,25.2,29.2,49.5,45.8,72.9C250.8,1187.3,252.3,1186.2,253.8,1185.1z"/>
        <path id="line11_12" fill="#89CDCF" d="M248,1195.9c3-2.1,6-4.3,9-6.4l-3.2-4.5c-3,2.1-6,4.3-9,6.4  C245.9,1192.9,247,1194.4,248,1195.9z"/>
        <path id="line11_11" fill="#89CDCF" d="M198.8,1118.2c3.2-1.8,6.5-3.5,9.7-5.3l-2.6-4.8c-3.2,1.8-6.5,3.5-9.7,5.3  C197,1115,197.9,1116.6,198.8,1118.2z"/>
        <path id="line11_9-line11_10" fill="#89CDCF" d="M225.4,757.2h-5.7c-8.5,0-16.6,3.4-22.6,9.4l-41,41c1.2,1.4,2.5,2.7,3.7,4.1  l40.8-40.8c5.3-5.3,12.3-8.2,19.7-8.2h5.2C225.5,760.9,225.4,759,225.4,757.2z"/>
        <path id="line11_10" fill="#89CDCF" d="M148.6,822c3.9,2.3,9,0.9,11.3-3s0.9-9-3-11.3s-9-0.9-11.3,3S144.7,819.8,148.6,822z   M148.9,812.8c1.2-2,3.9-2.7,5.9-1.5c2.1,1.2,2.6,3.8,1.5,5.7c-1.1,2.1-3.7,2.7-5.8,1.6C148.5,817.5,147.8,814.8,148.9,812.8z"/>
        <rect id="line11_8-line11_9" x="230.8" y="757.2" fill="#89CDCF" width="41" height="5.5"/>
        <path id="line11_9" fill="#89CDCF" d="M230.8,768.2c0-3.7,0-7.3,0-11h-5.5c0,3.7,0,7.3,0,11C227.2,768.2,229,768.2,230.8,768.2z"/>
        <linearGradient id="line1_18-line11_14_00000064346752497298985600000018099976997523638144_" gradientUnits="userSpaceOnUse" x1="39718.8281" y1="-24224.7227" x2="39728.8125" y2="-24224.7227" gradientTransform="matrix(-0.4123 0.4123 -0.4123 -0.4123 6842.4219 -25001.8281)">
            <stop offset="0.2068" style="stop-color:#D14A43"/>
            <stop offset="0.8728" style="stop-color:#89CDCF"/>
        </linearGradient>
        <polygon id="line1_18-line11_14" fill="url(#line1_18-line11_14_00000064346752497298985600000018099976997523638144_)" points="  451.6,1369.3 447,1364.7 451.2,1360.5 455.8,1365.1 "/>
        <rect id="white_line1_18-line11_14" x="440.1" y="1364.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -833.7142 718.5889)" fill="#FFFFFF" width="20.9" height="2"/>
        <linearGradient id="line3_8-line11_10_1_00000135650516603596551750000014745099083635717566_" gradientUnits="userSpaceOnUse" x1="147.4515" y1="-1036.8466" x2="189.0431" y2="-1010.0612" gradientTransform="matrix(1 0 0 1 0.946 1840.2036)">
            <stop offset="0.3101" style="stop-color:#89CDCF"/>
            <stop offset="0.8265" style="stop-color:#0572B9"/>
        </linearGradient>
        <path id="line3_8-line11_10_1" fill="url(#line3_8-line11_10_1_00000135650516603596551750000014745099083635717566_)" d="  M163.7,813c-1.3,0-2.6,0.1-3.9,0.4c0.2,0.6,0.4,1.1,0.5,1.7c4.3-0.8,8.9-0.1,13,2.2c3.9,2.3,6.7,5.8,8.2,9.7c0.5-0.1,1-0.2,1.6-0.3  C180.3,818.8,172.6,813,163.7,813z"/>
        <linearGradient id="line3_8-line11_10_2_00000010992934130991998390000008806096762200593549_" gradientUnits="userSpaceOnUse" x1="149.2607" y1="-1039.6561" x2="190.8522" y2="-1012.8705" gradientTransform="matrix(1 0 0 1 0.946 1840.2036)">
            <stop offset="0.3101" style="stop-color:#89CDCF"/>
            <stop offset="0.8265" style="stop-color:#0572B9"/>
        </linearGradient>
        <path id="line3_8-line11_10_2" fill="url(#line3_8-line11_10_2_00000010992934130991998390000008806096762200593549_)" d="  M185.7,826.4c0.5-0.1,1-0.2,1.5-0.2c-1.8-5.6-5.7-10.6-11.1-13.7c-5.5-3.1-11.6-4-17.4-2.8c0.2,0.5,0.3,1,0.5,1.4  c1.5-0.3,3-0.5,4.6-0.5C173.9,810.6,182.5,817.3,185.7,826.4z"/>
        <path id="white_line3_8-line11_10" fill="#FFFFFF" d="M163.7,810.6c-1.6,0-3.1,0.2-4.6,0.5c-1.3,0.3-2.5,0.6-3.7,1.1  c0.3,0.7,0.6,1.5,1,2.2c1.1-0.4,2.2-0.8,3.4-1s2.5-0.4,3.9-0.4c8.9,0,16.6,5.8,19.5,13.8c0.4,1.1,0.7,2.2,0.9,3.4  c0.8-0.1,1.7-0.1,2.5-0.2c-0.2-1.2-0.5-2.5-0.9-3.6C182.5,817.3,173.9,810.6,163.7,810.6z"/>
        <linearGradient id="line4_13-line11_10_1_00000147215461154625357020000014045860469457425571_" gradientUnits="userSpaceOnUse" x1="145.029" y1="-981.4934" x2="144.9081" y2="-1030.9636" gradientTransform="matrix(1 0 0 1 0.946 1840.2036)">
            <stop offset="0.2993" style="stop-color:#24BCEF"/>
            <stop offset="0.6292" style="stop-color:#89CDCF"/>
        </linearGradient>
        <path id="line4_13-line11_10_1" fill="url(#line4_13-line11_10_1_00000147215461154625357020000014045860469457425571_)" d="  M147.8,847.2c0.3-0.4,0.6-0.8,0.9-1.2c-4.8-6-5.7-14.6-1.6-21.6c0.5-0.9,1.1-1.7,1.7-2.4c-0.3-0.4-0.7-0.9-1-1.3  c-3,3.6-4.8,8.2-4.8,13.3C143,838.9,144.8,843.5,147.8,847.2z"/>
        <linearGradient id="line4_13-line11_10_2_00000131341278627751266050000004034116384686759837_" gradientUnits="userSpaceOnUse" x1="141.6953" y1="-981.4854" x2="141.5744" y2="-1030.9556" gradientTransform="matrix(1 0 0 1 0.946 1840.2036)">
            <stop offset="0.2993" style="stop-color:#24BCEF"/>
            <stop offset="0.6292" style="stop-color:#89CDCF"/>
        </linearGradient>
        <path id="line4_13-line11_10_2" fill="url(#line4_13-line11_10_2_00000131341278627751266050000004034116384686759837_)" d="  M146.2,818.6c-0.3-0.4-0.6-0.8-1-1.3c-1.1,1.3-2.2,2.7-3,4.2c-5.5,9.5-3.9,21.2,3.1,28.9c0.3-0.4,0.6-0.9,1-1.3  c-3.6-4.1-5.8-9.5-5.8-15.3C140.5,828.1,142.7,822.7,146.2,818.6z"/>
        <path id="white_line4_13-line11_10" fill="#FFFFFF" d="M147.8,847.2c-3-3.6-4.8-8.3-4.8-13.3s1.8-9.6,4.8-13.3  c0.7-0.9,1.5-1.7,2.4-2.5c-0.4-0.7-0.9-1.4-1.3-2.1c-0.9,0.8-1.8,1.7-2.6,2.6c-3.6,4.1-5.8,9.4-5.8,15.3c0,5.8,2.2,11.2,5.8,15.3  c0.8,0.9,1.7,1.8,2.7,2.6c0.5-0.7,0.9-1.3,1.4-2C149.4,849,148.6,848.1,147.8,847.2z"/>
        <linearGradient id="line6_19-line11_16_00000105419299502250105800000007142519509900546442_" gradientUnits="userSpaceOnUse" x1="39620.8242" y1="-24516.9258" x2="39630.8086" y2="-24516.9258" gradientTransform="matrix(-0.4123 0.4123 -0.4123 -0.4123 6842.4219 -25001.8281)">
            <stop offset="0.2068" style="stop-color:#EF7E24"/>
            <stop offset="0.8728" style="stop-color:#89CDCF"/>
        </linearGradient>
        <polygon id="line6_19-line11_16" fill="url(#line6_19-line11_16_00000105419299502250105800000007142519509900546442_)" points="  612.5,1449.3 607.9,1444.7 612.1,1440.6 616.7,1445.2 "/>
        <rect id="white_line6_19-line11_16" x="600.9" y="1444.8" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -843.2754 855.7307)" fill="#FFFFFF" width="20.9" height="2"/>
        <linearGradient id="line8A_10-line11_13_00000107577597380271868150000005887338121116245657_" gradientUnits="userSpaceOnUse" x1="46212.207" y1="-25055.9023" x2="46222.1914" y2="-25055.9023" gradientTransform="matrix(0.4123 -0.4123 -0.4123 -0.4123 -29051.416 10024.2705)">
            <stop offset="0.2068" style="stop-color:#FFCD1E"/>
            <stop offset="0.8728" style="stop-color:#89CDCF"/>
        </linearGradient>
        <polygon id="line8A_10-line11_13" fill="url(#line8A_10-line11_13_00000107577597380271868150000005887338121116245657_)" points="  339.3,1299.2 334.7,1294.6 330.6,1298.8 335.2,1303.4 "/>
        <rect id="white_line8A_10-line11_13" x="325.3" y="1297.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -819.5416 617.6003)" fill="#FFFFFF" width="20.9" height="2"/>
        <linearGradient id="line9_19-line11_18_00000172425082309596827750000018151281788187250074_" gradientUnits="userSpaceOnUse" x1="43674.2891" y1="25491.7988" x2="43684.2734" y2="25491.7988" gradientTransform="matrix(-0.4123 -0.4123 -0.4123 0.4123 29292.3711 8994.8838)">
            <stop offset="0.2068" style="stop-color:#ADACAC"/>
            <stop offset="0.8728" style="stop-color:#89CDCF"/>
        </linearGradient>
        <polygon id="line9_19-line11_18" fill="url(#line9_19-line11_18_00000172425082309596827750000018151281788187250074_)" points="  768.3,1496 772.9,1491.4 777.1,1495.5 772.5,1500.1 "/>
        <rect id="white_line9_19-line11_18" x="770.7" y="1484.4" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -830.9643 983.5339)" fill="#FFFFFF" width="2" height="20.9"/>
        <path id="line6_7-line6_8" fill="#EF7E24" d="M1002,587.5c-22.2,22.2-44.5,44.5-66.7,66.7c-1.3-1.3-2.6-2.6-3.9-3.9  c22.2-22.2,44.5-44.5,66.7-66.7C999.4,584.9,1000.7,586.2,1002,587.5z"/>
        <path id="line6_6-line6_7" fill="#EF7E24" d="M1042.4,504.4v23.4c0,7.4-2.9,14.4-8.2,19.7l-25.2,25.2c1.2,1.4,2.5,2.7,3.7,4.1  l25.8-25.8c6-6,9.4-14.1,9.4-22.6v-23.9C1046,504.5,1044.2,504.5,1042.4,504.4z"/>
        <path id="line6_7" fill="#EF7E24" d="M1005.5,571.8c-4.5,0-8.2,3.7-8.2,8.2s3.7,8.2,8.2,8.2s8.2-3.7,8.2-8.2  S1010,571.8,1005.5,571.8z M1009.8,580c0,2.3-1.9,4.2-4.3,4.2c-2.4,0-4.1-2-4.2-4.2c0-2.3,1.8-4.2,4.2-4.3  C1007.9,575.7,1009.8,577.8,1009.8,580z"/>
        <path id="lineD2_23" fill="#E94282" d="M1244.9,1305.9c3.9,2.3,9,0.9,11.3-3s0.9-9-3-11.3s-9-0.9-11.3,3  C1239.6,1298.6,1241,1303.6,1244.9,1305.9z M1245.3,1296.6c1.2-2,3.9-2.7,5.9-1.5c2.1,1.2,2.6,3.8,1.5,5.7c-1.1,2.1-3.7,2.7-5.8,1.6  C1244.9,1301.3,1244.1,1298.7,1245.3,1296.6z"/>
        <linearGradient id="line10_16-lineD2_23_00000138541585845100257800000005555173759310099350_" gradientUnits="userSpaceOnUse" x1="1219.4326" y1="1304.4346" x2="1238.3497" y2="1301.1465" gradientTransform="matrix(0.6923 -0.7216 0.7216 0.6923 -561.2716 1288.8046)">
            <stop offset="0.4064" style="stop-color:#BED12E"/>
            <stop offset="0.6901" style="stop-color:#E94282"/>
        </linearGradient>
        <path id="line10_16-lineD2_23" fill="url(#line10_16-lineD2_23_00000138541585845100257800000005555173759310099350_)" d="  M1227.2,1302.5c0.8-0.2,1.6,0.2,1.9,1c0.2,0.8-0.2,1.7-1.1,1.9c-0.8,0.2-1.6-0.3-1.8-1C1226,1303.6,1226.4,1302.7,1227.2,1302.5z   M1236.7,1299.8c0.8-0.2,1.6,0.2,1.9,1c0.2,0.8-0.2,1.7-1.1,1.9c-0.8,0.2-1.6-0.3-1.8-1C1235.5,1300.9,1235.9,1300,1236.7,1299.8z   M1231.9,1301.1c0.8-0.2,1.6,0.2,1.9,1c0.2,0.8-0.2,1.7-1.1,1.9c-0.8,0.2-1.6-0.3-1.8-1C1230.8,1302.2,1231.2,1301.4,1231.9,1301.1z   M1222.3,1304c0.8-0.2,1.6,0.2,1.9,1c0.2,0.8-0.2,1.7-1.1,1.9c-0.8,0.2-1.6-0.3-1.8-1C1221.1,1305,1221.5,1304.2,1222.3,1304z"/>
</svg>
@endsection
