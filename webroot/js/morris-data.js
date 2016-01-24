$(function() {


    Morris.Area({
        element: 'morris-area-chart',
        data: [{
                period: '2010 Q1',
                banks: 2666,
                capMark: null,
                insurance: 2647,
                telecoms: 2647
            }, {
                period: '2010 Q1',
                banks: 2666,
                capMark: null,
                insurance: 2647,
                telecoms: 2647
            }, {
                period: '2010 Q2',
                banks: 2778,
                capMark: 2294,
                insurance: 2441,
                telecoms: 2789
            }, {
                period: '2010 Q3',
                banks: 4912,
                capMark: 1969,
                insurance: 2501,
                telecoms: 1567
            }, {
                period: '2010 Q4',
                banks: 3767,
                capMark: 3597,
                insurance: 5689,
                telecoms: 1890
            }, {
                period: '2011 Q1',
                banks: 6810,
                capMark: 1914,
                insurance: 2293,
                telecoms: 1909
            }, {
                period: '2011 Q2',
                banks: 5670,
                capMark: 4293,
                insurance: 1881,
                telecoms: 2000
            }, {
                period: '2011 Q3',
                banks: 4820,
                capMark: 3795,
                insurance: 1588,
                telecoms: 2100
            }, {
                period: '2011 Q4',
                banks: 15073,
                capMark: 5967,
                insurance: 5175,
                telecoms: 2200
            }, {
                period: '2012 Q1',
                banks: 10687,
                capMark: 4460,
                insurance: 2028,
                telecoms: 2300
            }],
        xkey: 'period',
        ykeys: ['banks', 'capMark', 'insurance', 'telecoms'],
        labels: ['Banks', 'Capital Markets', 'Insurance', 'Telecommunications'],
        pointSize: 2,
        hideHover: 'auto',
        resize: true
    });

    Morris.Donut({
        element: 'morris-donut-chart',
        data: [
            {
                label: "FCMB",
                value: 12.7
            }, {
                label: "First Bank",
                value: 30.6
            }, {
                label: "Diamond Bank",
                value: 20.8
            }, {
                label: "Fidelity Bank",
                value: 13.9
            }, {
                label: "GTBank PLC",
                value: 30
            }, {
                label: "KeyStone Bank",
                value: 20.2
            }, {
                label: "Skye Bank",
                value: 13.1
            }, {
                label: "Wema Bank",
                value: 32.4
            }, {
                label: "Access Bank",
                value: 21.5
            }],
        colors: [
            '#0b62a4', '#D58665', '#37619d', '#5CB85C', '#A87D8E', '#2D619C', '#2D9C2F', "#089767"
        ],
        resize: true
    });

    Morris.Donut({
        element: 'morris-donut-chart-3',
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
                label: "Unauthorised access",
                value: 22
            }],
        colors: [
            '#0b62a4', '#D58665', '#37619d', '#fefefe', '#A87D8E', '#2D619C', '#2D9C2F'
        ],
        resize: true
    });
   
   });
