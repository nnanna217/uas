$(function() {

    //Morris.Area({
    //    element: 'morris-area-chart',
    //    data: [{
    //        period: '2010 Q1',
    //        banks: 2666,
    //        capMark: null,
    //        insurance: 2647,
    //        telecoms: 2647
    //        }, {
    //        period: '2010 Q1',
    //        banks: 2666,
    //        capMark: null,
    //        insurance: 2647,
    //        telecoms: 2647
    //        }, {
    //        period: '2010 Q2',
    //        banks: 2778,
    //        capMark: 2294,
    //        insurance: 2441,
    //        telecoms: 2789
    //        }, {
    //        period: '2010 Q3',
    //        banks: 4912,
    //        capMark: 1969,
    //        insurance: 2501,
    //        telecoms: 1567
    //        }, {
    //        period: '2010 Q4',
    //        banks: 3767,
    //        capMark: 3597,
    //        insurance: 5689,
    //        telecoms: 1890
    //        }, {
    //        period: '2011 Q1',
    //        banks: 6810,
    //        capMark: 1914,
    //        insurance: 2293,
    //        telecoms: 1909
    //        }, {
    //        period: '2011 Q2',
    //        banks: 5670,
    //        capMark: 4293,
    //        insurance: 1881,
    //        telecoms: 2000
    //        }, {
    //        period: '2011 Q3',
    //        banks: 4820,
    //        capMark: 3795,
    //        insurance: 1588,
    //        telecoms: 2100
    //        }, {
    //        period: '2011 Q4',
    //        banks: 15073,
    //        capMark: 5967,
    //        insurance: 5175,
    //        telecoms: 2200
    //        }, {
    //        period: '2012 Q1',
    //        banks: 10687,
    //        capMark: 4460,
    //        insurance: 2028,
    //        telecoms: 2300
    //        }],
    //    xkey: 'period',
    //    ykeys: ['banks', 'capMark', 'insurance', 'telecoms'],
    //    labels: ['Banks', 'Capital Markets', 'Insurance', 'Telecommunications'],
    //    pointSize: 2,
    //    hideHover: 'auto',
    //    resize: true
    //});

    //Morris.Donut({
    //    element: 'morris-donut-chart',
    //    data: [
    //    {
    //        label: "FCMB",
    //        value: 12.7
    //    }, {
    //        label: "First Bank",
    //        value: 30.6
    //    }, {
    //        label: "Diamond Bank",
    //        value: 20.8
    //    }, {
    //        label: "Fidelity Bank",
    //        value: 13.9
    //    }, {
    //        label: "GTBank PLC",
    //        value: 30
    //    }, {
    //        label: "KeyStone Bank",
    //        value: 20.2
    //    },  {
    //        label: "Skye Bank",
    //        value: 13.1
    //    }, {
    //        label: "Wema Bank",
    //        value: 32.4
    //    }, {
    //        label: "Access Bank",
    //        value: 21.5
    //    }],
    //    resize: true
    //});

    Morris.Donut({
        element: 'morris-donut-chart-2',
        data: [
            {
                label: "Cyber Terrorism",
                value: 26
            }, {
                label: "Malicious Code",
                value: 25
            }, {
                label: "Denial of Service",
                value: 2
            }, {
                label: "Access or Credentials Abuse",
                value: 14
            }, {
                label: "Suspicious Activity",
                value: 11
            }, {
                label: "Unauthorized access",
                value: 22
            }],
        resize: true
    });

    Morris.Bar({
        element: 'morris-bar-chart',
        data: [{
            y: '2006',
            a: 100
        }, {
            y: '2007',
            a: 500
        }, {
            y: '2008',
            a: 2000
        }, {
            y: '2009',
            a: 3000
        }, {
            y: '2010',
            a: 4000
        }, {
            y: '2011',
            a: 10000
        }, {
            y: '2012',
            a: 33210
        }, {
            y: '2013',
            a: 20000
        }, {
            y: '2014',
            a: 70000
        }, {
            y: '2015',
            a: 100000
        }],
        xkey: 'y',
        ykeys: ['a'],
        labels: ['Incidences'],
        hideHover: 'auto',
        resize: true
    });
    
    

});
