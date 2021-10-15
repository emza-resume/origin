
@extends('admin.home')
@section('style')

.pagination
{
  direction: rtl !important;
  padding-right: 0px;
  margin-top: 30px;
    margin-right: -4px;
}

ul.pagination li {
    display: inline;
    font-size: 14px;
    font-weight: bold;

}

ul.pagination li a {

    color: black;
    padding: 8px 8px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #ddd;
    margin: 4px;
    padding-left: 15px;
    padding-right: 15px;
    border-radius: 5px;

}

ul.pagination li a.active {
    background-color: #4CAF50;
    padding: 8px 8px;
    margin: 4px;
    color: white;
    border: 1px solid #4CAF50;

}

ul.pagination li.active {
    /*background-color: #4CAF50;*/
    background-color: #6435c9;
    padding: 8px 8px;
    margin: 4px;
    color: white;
    border: 1px solid #4CAF50;
    padding-left: 15px;
    padding-right: 15px;
    border-radius: 5px;
}

/*ul.pagination li a:hover:not(.active) {background-color: #ddd;}*/
ul.pagination li a:hover {background-color: #eee;}

ul.pagination li.disabled {
    /*background-color: #cccccc;*/
    color: #ddd;
    padding: 8px 8px;
    border: 1px solid #ddd;
    margin: 4px;
    padding-left: 15px;
    padding-right: 15px;
    border-radius: 5px;
}
@endsection

@section('body')
<table style="direction: rtl;margin: 0 auto;" cellspacing="20">
    <tr>
        <td align="right"><div class="p-4" style="text-align:right;font-size:15px;">
تعداد بازدید از صفحه‌اصلی: <span style="font-size:17px;font-weight:bold;color:blue">{{@$ci}}</span>
</div></td>
        <td>
        <div class="p-4" style="text-align:right;font-size:15px;">
تعداد بازدید از ورود: <span style="font-size:17px;font-weight:bold;color:blue">{{@$cl}}</span>
</div>
        </td>
        <td>
        <div class="p-4" style="text-align:right;font-size:15px;">
تعداد بازدید از صفحه ساخت رزومه: <span style="font-size:17px;font-weight:bold;color:red">{{@$cc}}</span>
</div>
        </td>
    </tr>
    <tr>
        <td>
        <div class="p-4" style="text-align:right;font-size:15px;">
تعداد بازدیدکننده از صفحه‌اصلی: <span style="font-size:17px;font-weight:bold;color:blue">{{@$cind}}</span> نفر
</div></td>
        <td>
        <div class="p-4" style="text-align:right;font-size:15px;">
تعداد بازدیدکننده از ورود: <span style="font-size:17px;font-weight:bold;color:blue">{{@$clnd}}</span> نفر
</div>
        </td>
        <td>
        
<div class="p-4" style="text-align:right;font-size:15px;">
تعداد بازدیدکننده از ساخت رزومه: <span style="font-size:17px;font-weight:bold;color:red">{{@$ccnd}}</span> نفر
</div>
        </td>
    </tr>
</table>






<div class="container">
     <canvas id="myChart" width="600" height="240"></canvas>
</div>

<script>
// Vertical bar chart
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {

        labels: ['تعداد بازدیدکننده از ورود', 'تعداد بازدید از ساخت رزومه', 'تعداد بازدیدکننده از ساخت رزوم']
        datasets: [{
            label: 'تعداد',
            data: [{{$cind}}, {{$clnd}}, {{$ccnd}}],
            backgroundColor: [
                'rgba(216, 27, 96, 0.6)',
                'rgba(216, 27, 96, 0.6)',
                'rgba(255, 152, 0, 0.6)',

            ],
            borderColor: [
                'rgba(216, 27, 96, 1)',
                'rgba(216, 27, 96, 1)',
                'rgba(255, 152, 0, 1)',


            ],
            borderWidth: 2
        }]
    },
    options: {
        legend: {
            display: false
        },
        scales: {
            yAxes: [{
                ticks: {
                    min: 0
                }
            }]
        }
    }
});
</script>
@endsection