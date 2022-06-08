require('./bootstrap');


ymaps.ready(init);

function init() {
    var myMapD = new ymaps.Map('mapd', {
        center: [55.75, 37.61],
        zoom: 9
    });

    var mkad = [
        [37.842762, 55.774558],
        [37.842789, 55.76522],
        [37.842627, 55.755723],
        [37.841828, 55.747399],
        [37.841217, 55.739103],
        [37.840175, 55.730482],
        [37.83916, 55.721939],
        [37.837121, 55.712203],
        [37.83262, 55.703048],
        [37.829512, 55.694287],
        [37.831353, 55.68529],
        [37.834605, 55.675945],
        [37.837597, 55.667752],
        [37.839348, 55.658667],
        [37.833842, 55.650053],
        [37.824787, 55.643713],
        [37.814564, 55.637347],
        [37.802473, 55.62913],
        [37.794235, 55.623758],
        [37.781928, 55.617713],
        [37.771139, 55.611755],
        [37.758725, 55.604956],
        [37.747945, 55.599677],
        [37.734785, 55.594143],
        [37.723062, 55.589234],
        [37.709425, 55.583983],
        [37.696256, 55.578834],
        [37.683167, 55.574019],
        [37.668911, 55.571999],
        [37.647765, 55.573093],
        [37.633419, 55.573928],
        [37.616719, 55.574732],
        [37.60107, 55.575816],
        [37.586536, 55.5778],
        [37.571938, 55.581271],
        [37.555732, 55.585143],
        [37.545132, 55.587509],
        [37.526366, 55.5922],
        [37.516108, 55.594728],
        [37.502274, 55.60249],
        [37.49391, 55.609685],
        [37.484846, 55.617424],
        [37.474668, 55.625801],
        [37.469925, 55.630207],
        [37.456864, 55.641041],
        [37.448195, 55.648794],
        [37.441125, 55.654675],
        [37.434424, 55.660424],
        [37.42598, 55.670701],
        [37.418712, 55.67994],
        [37.414868, 55.686873],
        [37.407528, 55.695697],
        [37.397952, 55.702805],
        [37.388969, 55.709657],
        [37.383283, 55.718273],
        [37.378369, 55.728581],
        [37.374991, 55.735201],
        [37.370248, 55.744789],
        [37.369188, 55.75435],
        [37.369053, 55.762936],
        [37.369619, 55.771444],
        [37.369853, 55.779722],
        [37.372943, 55.789542],
        [37.379824, 55.79723],
        [37.386876, 55.805796],
        [37.390397, 55.814629],
        [37.393236, 55.823606],
        [37.395275, 55.83251],
        [37.394709, 55.840376],
        [37.393056, 55.850141],
        [37.397314, 55.858801],
        [37.405588, 55.867051],
        [37.416601, 55.872703],
        [37.429429, 55.877041],
        [37.443596, 55.881091],
        [37.459065, 55.882828],
        [37.473096, 55.884625],
        [37.48861, 55.888897],
        [37.5016, 55.894232],
        [37.513206, 55.899578],
        [37.527597, 55.90526],
        [37.543443, 55.907687],
        [37.559577, 55.909388],
        [37.575531, 55.910907],
        [37.590344, 55.909257],
        [37.604637, 55.905472],
        [37.619603, 55.901637],
        [37.635961, 55.898533],
        [37.647648, 55.896973],
        [37.667878, 55.895449],
        [37.681721, 55.894868],
        [37.698807, 55.893884],
        [37.712363, 55.889094],
        [37.723636, 55.883555],
        [37.735791, 55.877501],
        [37.741261, 55.874698],
        [37.764519, 55.862464],
        [37.765992, 55.861979],
        [37.788216, 55.850257],
        [37.788522, 55.850383],
        [37.800586, 55.844167],
        [37.822819, 55.832707],
        [37.829754, 55.828789],
        [37.837148, 55.821072],
        [37.838926, 55.811599],
        [37.840004, 55.802781],
        [37.840965, 55.793991],
        [37.841576, 55.785017]
    ];

    var betonka = [
        [36.99910812390202, 55.63550344126771],
        [36.98656611454847, 55.652978117961716],
        [36.91317551148297, 55.67073601340212],
        [36.88403331053617, 55.688922187392116],
        [36.883881765726805, 55.69995099478617],
        [36.87137060177692, 55.71097667770084],
        [36.879650581005905, 55.72313765259547],
        [36.876944232109906, 55.73374511841486],
        [36.92097001088044, 55.79288069423784],
        [36.917536783341326, 55.822076483294914],
        [36.922343301896056, 55.83946748924945],
        [36.92689232838529, 55.85163654731075],
        [36.939681100968286, 55.8614848876819],
        [36.943285989884316, 55.877314219292536],
        [36.94706254017727, 55.9224501100401],
        [37.02465348256013, 55.99486575192449],
        [37.02190690052888, 56.017948495856515],
        [37.18120865834138, 56.073290599195055],
        [37.25536637318514, 56.10860633091805],
        [37.31579117787264, 56.12855301501806],
        [37.370722818497626, 56.171479842747004],
        [37.433894205216376, 56.19292520353285],
        [37.48607926381014, 56.19445655462931],
        [37.53551774037264, 56.19292520353285],
        [37.58220963490389, 56.19139379105732],
        [37.61516861927888, 56.183735807944934],
        [37.67834000599763, 56.168415237489874],
        [37.73601822865389, 56.154621474306545],
        [37.79918961537264, 56.14848931619226],
        [37.87334733021637, 56.13468836726546],
        [37.91454606068513, 56.1270190233661],
        [37.95849137318513, 56.110141059927365],
        [38.00243668568514, 56.085578020348024],
        [38.043635416153876, 56.079434801625624],
        [38.134272623185126, 56.05485208876929],
        [38.20293717396639, 56.03486704135304],
        [38.29357438099762, 56.00102250438312],
        [38.30730729115385, 55.97773710484787],
        [38.356059122208535, 55.96570400582944],
        [38.37837510121247, 55.955785907601246],
        [38.408415842179224, 55.949140317031244],
        [38.423264551285676, 55.94543177219188],
        [38.43399338734524, 55.94133750981751],
        [38.458755540970685, 55.92283565959031],
        [38.47969822895897, 55.9205223044404],
        [38.498924303177716, 55.927172826790446],
        [38.51128392231835, 55.9299676318397],
        [38.52209858906641, 55.92852206828727],
        [38.5301666737832, 55.92437781932278],
        [38.53668980610742, 55.90490353028039],
        [38.54218297016991, 55.88705954754558],
        [38.55042271626367, 55.8769282151079],
        [38.55522923481835, 55.86872471526108],
        [38.55316929829492, 55.86013330309872],
        [38.54304127705467, 55.847870342902766],
        [38.540466356400394, 55.83637632558662],
        [38.54784779560937, 55.82497552660091],
        [38.55840497029199, 55.818114106538545],
        [38.56484227192774, 55.810864807737055],
        [38.56415562641982, 55.79365437615411],
        [38.554542589310465, 55.77237249819663],
        [38.52433018696671, 55.75998494221354],
        [38.502357530716694, 55.747980727723444],
        [38.49755101216201, 55.73403569317988],
        [38.48313145649795, 55.7262862892346],
        [38.47832493794327, 55.712333468920285],
        [38.46184544575577, 55.70535518142458],
        [38.4364395619667, 55.69760006057531],
        [38.35678868306043, 55.64482424327708],
        [38.365028429154165, 55.62423783369289],
        [38.365028429154215, 55.60597287192908],
        [38.38768773091202, 55.58030977517306],
        [38.40142064106827, 55.54217286266036],
        [38.40588383686906, 55.517052256338175],
        [38.397987413529215, 55.491915535149346],
        [38.38494114888077, 55.48567757421861],
        [38.36159520161513, 55.47943862123195],
        [38.346489000443256, 55.470468388106546],
        [38.33618931782609, 55.46149610456012],
        [38.33344273579484, 55.453302228640936],
        [38.33344273579484, 55.436518957342464],
        [38.34030919087296, 55.411525926473125],
        [38.34099583638077, 55.39042569784419],
        [38.3265762807167, 55.37869845964068],
        [38.301857042435465, 55.37087836041312],
        [38.28949742329484, 55.356407083851394],
        [38.25928502095108, 55.35445109834026],
        [38.18856053364639, 55.35914530051934],
        [38.13500218403702, 55.35132131964675],
        [38.106163072708895, 55.35093007983962],
        [38.08556370747453, 55.34427840909559],
        [38.03887181294328, 55.34388709940226],
        [38.0072861195839, 55.33762561623899],
        [37.96265416157609, 55.341930492693706],
        [37.9530411244667, 55.34799565752767],
        [37.93999485981826, 55.35132131964675],
        [37.90634922993545, 55.352886240051795],
        [37.867897081497965, 55.34388709940226],
        [37.81502537739639, 55.33997378891349],
        [37.78206639302136, 55.33645147747157],
        [37.7511673451698, 55.333907390264834],
        [37.71511845600964, 55.33214600300975],
        [37.6770096303261, 55.332146003012625],
        [37.60731511128313, 55.33136313899197],
        [37.576072740677645, 55.326274144222204],
        [37.55581669819715, 55.3299930895778],
        [37.536247301224535, 55.334885904765116],
        [37.50466160786516, 55.3410499879909],
        [37.471015977982326, 55.34251748488707],
        [37.45865635884167, 55.345550138766484],
        [37.4469833852089, 55.35093007982797],
        [37.412651109818285, 55.375961601495526],
        [37.39891819966198, 55.381826064644855],
        [37.374885606888554, 55.387298775800865],
        [37.332313585404194, 55.39198906572635],
        [37.29386143696666, 55.39277072638025],
        [37.25540928852922, 55.39628800729892],
        [37.18708806050187, 55.42724605355815],
        [37.16545872700578, 55.43163875434113],
        [37.10228734028703, 55.45876500253983],
        [37.045639085892454, 55.48509271450864],
        [36.98899083149795, 55.520363645617834],
        [36.97422795307986, 55.52659608976266],
        [36.99036412251342, 55.538279250253495],
        [36.98547177327021, 55.54377886485511],
        [36.9888191701208, 55.55628396145944],
        [37.001007127884485, 55.58439366799096],
        [37.01988987934936, 55.63045374349976],
        [36.99910812390202, 55.63550344126771]
    ];


    var newMkad = [];
    for (i = 0; i < i < mkad.length; i++) {
        newMkad.push([mkad[i][1], mkad[i][0]]);
    }

    var newBetonka = [];
    for (i = 0; i < betonka.length; i++) {
        newBetonka.push([betonka[i][1], betonka[i][0]]);
    }


    var mkadPolygon = new ymaps.Polygon([
        newMkad
    ], {
        hintContent: "МКАД"
    }, {
        fillColor: '#56db4066',
        strokeWidth: 1
    });


    var betonkaPolygon = new ymaps.Polygon([
        newBetonka
    ], {
        hintContent: "A107"
    }, {
        fillColor: '#ffd21e66',
        strokeWidth: 1
    });
    // Добавляем многоугольник на карту.
    myMapD.geoObjects.add(betonkaPolygon);
    myMapD.geoObjects.add(mkadPolygon);
}
