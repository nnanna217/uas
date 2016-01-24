$(function(){
//    Morris.Bar({
//  element: 'bar-example',
//  data: [
//    { y: '2006', a: 100, b: 90 },
//    { y: '2007', a: 75,  b: 65 },
//    { y: '2008', a: 50,  b: 40 },
//    { y: '2009', a: 75,  b: 65 },
//    { y: '2010', a: 50,  b: 40 },
//    { y: '2011', a: 75,  b: 65 },
//    { y: '2012', a: 100, b: 90 }
//  ],
//  xkey: 'y',
//  ykeys: ['a', 'b'],
//  labels: ['Series A', 'Series B']
//});

    Morris.Bar({
        element: 'bar-ex',
        data: [
            {
                y: 'FCMB',
                a: 127000000
            }, {
                y: 'FirstBank',
                a: 306000000
            }, {
                y: 'DiamondBank',
                a: 208000000
            }, {
                y: 'FidelityBank',
                a: 139000000
            }, {
                y: 'GTBankPLC',
                a: 30000000
            }, {
                y: 'KeyStoneBank',
                a: 202000000
            }, {
                y: 'SkyeBank',
                a: 13100000
            }, {
                y: 'Access',
                a: 20000000
            }, {
                y: 'WemaBank',
                a: 324000000
            }],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Amount Processed'],
//        hideHover: 'auto',
        resize: true
    });

});