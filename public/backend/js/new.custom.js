<script>

   var PaymentLastSix    = $('#Tigist');

    if (PaymentLastSix.length > 0) {
         //var authorized_balance =  PaymentLastSix.data(['{{$row->authorized_amount}}']);
        //var authorized_balance =  PaymentLastSix.data(['{{$row->authorized_amount}}']);
       // var barColors = PaymentLastSix.data('color');

        var authorized_balance = PaymentLastSix.data('authorized_balance');
        var label1 = PaymentLastSix.data('label1');
        var Tigist = new Chart(PaymentLastSix, {
            type: 'bar',
            data: {
                labels: PaymentLastSix.data('months') ,
                datasets: [
                    {
                        label: label1,
                        backgroundColor: [
                            'rgba(137, 196, 244, 1)',
                            'rgba(137, 196, 244, 1)',
                            'rgba(137, 196, 244, 1)',
                            'rgba(137, 196, 244, 1)',
                            'rgba(137, 196, 244, 1)',
                            'rgba(137, 196, 244, 1)',
                            'rgba(137, 196, 244, 1)',
                            'rgba(137, 196, 244, 1)',
                            'rgba(137, 196, 244, 1)',
                            'rgba(137, 196, 244, 1)',
                            'rgba(137, 196, 244, 1)',
                            'rgba(137, 196, 244, 1)',
                        ],
                        borderColor: [
                            'rgba(34, 49, 63, 1)',
                            'rgba(34, 49, 63, 1)',
                            'rgba(34, 49, 63, 1)',
                            'rgba(34, 49, 63, 1)',
                            'rgba(34, 49, 63, 1)',
                            'rgba(34, 49, 63, 1)',
                            'rgba(34, 49, 63, 1)',
                            'rgba(34, 49, 63, 1)',
                            'rgba(34, 49, 63, 1)',
                            'rgba(34, 49, 63, 1)',
                            'rgba(34, 49, 63, 1)',
                            'rgba(34, 49, 63, 1)',
                        ],
                        borderWidth: 2,
                        data: [ authorized_balance[0], authorized_balance[1],
                            authorized_balance[2], authorized_balance[3],
                            authorized_balance[4], authorized_balance[5], authorized_balance[6], authorized_balance[7]
                            ]
                    },
                ]
            }
        });
    }; 

var xValues = ["Subscribed", "Unsubscribed", "PaidUp", "Unpaid", "Canceled"];
var yValues = [55, 49, 44, 24, 15];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
  "#1e7145"
];

new Chart("myChart", {
  type: "doughnut",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "Company Share Stastics"
    }
  }
});

@foreach($authorizemores as $row) 
var xValues =  ['{{ \Carbon\Carbon::parse($row->authorized_date)->format('Y') }}','{{ \Carbon\Carbon::parse($row->authorized_date)->format('Y') }}','{{ \Carbon\Carbon::parse($row->authorized_date)->format('Y') }}','{{ \Carbon\Carbon::parse($row->authorized_date)->format('Y') }}'];
var yValues = ['{{$row->authorized_amount}}','{{$row->authorized_amount}}','{{$row->authorized_amount}}','{{$row->authorized_amount}}','{{$row->authorized_amount}}'];
var barColors = ["red", "green","blue","orange","brown"];

@endforeach
new Chart("Nigus", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Company Share Growth"
    }
  }
}); 


var xValues = [];
var yValues = [];
generateData("x * 2 + 7", 0, 10, 0.5);
//single line
new Chart("guest", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      pointRadius: 1,
      borderColor: "rgba(255,0,0,0.5)",
      data: yValues
    }]
  },    
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "y = x * 2 + 7",
      fontSize: 16
    }
  }
});

//multiple line
var xValues = [2014,2015,2016,2017,2018,2019,2020,2021,2022,2023];

new Chart("multi", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{ 
      data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
      borderColor: "red",
      fill: false
    }, { 
      data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
      borderColor: "green",
      fill: false
    }, { 
      data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
      borderColor: "blue",
      fill: false
    }]
  },
  options: {
    legend: {display: false}
  }
});
function generateData(value, i1, i2, step = 1) {
  for (let x = i1; x <= i2; x += step) {
    yValues.push(eval(value));
    xValues.push(x);
  }
}
</script>