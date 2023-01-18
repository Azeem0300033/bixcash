@extends('layouts.front')
@section('content')

<style>
    .container {
        max-width: 1140px;
    }

    .container {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }

    .boarding-details_web {
        color: #333;
        padding: 40px 0;
    }

    .boarding-details_web .custom-row-grid {
    }

    .boarding-details_web .custom-row-grid .boarding-left-sctn {
        width: 70%;
    }

    .boarding-head {
        background-color: #fff;
        padding: 20px 20px 30px;
    }

    .boarding-head h1 {
        font-size: 20px;
        color: #4c4c4c;
    }

    .boarding-head .list-time {
        float: left;
        display: flex;
        margin-top: 25px;
    }

    .boarding-head .list-time li {
        margin-right: 15px;
        font-size: 18px;
        font-weight: 600;
    }

    .boarding-head .list-time .dotted {
        border: 0;
        border-top-style: none;
        border-right-style: none;
        border-bottom-color: currentcolor;
        border-bottom-style: none;
        border-bottom-width: 0px;
        border-bottom: 2px dashed #000;
        border-right-style: dashed;
        border-top-style: dashed;
        width: 50px;
        height: 12px;
    }

    .boarding-head .bus-operator {
        float: right;
    }

    .boarding-head .bus-operator img {
        max-width: 80px;
    }

    .clear {
        clear: both !important;
    }

    .boarding-details_web .custom-row-grid .boarding-left-sctn .boarding-content {
        background-color: #fff;
        padding: 20px 20px 30px;
        margin-top: 10px;
    }

    .boarding-details_web .custom-row-grid .boarding-left-sctn .boarding-content table tr td {
        padding: 10px 30px 10px 0;
    }

    .boarding-details_web .custom-row-grid .boarding-right-sctn {
        width: 30%;
        padding-left: 10px;
    }

    .boarding-details_web .custom-row-grid .boarding-right-sctn .brdng-passenger-details {
        background-color: #fff;
        padding: 20px;
    }

    .boarding-details_web .custom-row-grid .boarding-right-sctn .brdng-passenger-details h1 {
        font-size: 20px;
        color: #4c4c4c;
    }

    .boarding-details_web .custom-row-grid .boarding-right-sctn .brdng-passenger-details .detail-box-passenger {
        padding: 20px 0;
        border-bottom: 1px solid #d6d6d6;
        line-height: 0.5;
    }

    .boarding-details_web .custom-row-grid .boarding-right-sctn .brdng-passenger-details .detail-box-passenger h2 {
        font-size: 14px;
        margin-top: 10px;
    }

    .boarding-details_web .custom-row-grid .boarding-right-sctn .brdng-passenger-details .detail-box-passenger h3 {
        font-size: 14px;
        font-weight: 400;
        margin-top: 10px;
    }

    .float_right {
        float: right;
    }

    .float_left {
        float: left;
    }

    .boarding-details_web .custom-row-grid .boarding-right-sctn .brdng-passenger-details .order-summary-box {
        padding: 20px 0;
        line-height: 0.5;
    }

    .boarding-details_web .custom-row-grid .boarding-right-sctn .brdng-passenger-details .order-summary-box h2 {
        font-size: 16px;
        margin-top: 15px;
        color: #3a3a3a;
    }

    .boarding-details_web .custom-row-grid .boarding-right-sctn .brdng-passenger-details .order-summary-box h3 {
        font-size: 16px;
        font-weight: 600;
        margin-top: 15px;
        color: #656464;
    }

    .boarding-details_web .custom-row-grid .boarding-right-sctn .brdng-passenger-details .order-summary-box .voucher-form {
        width: 100%;
        display: flex;
        margin-top: 25px;
    }

    .boarding-details_web .custom-row-grid .boarding-right-sctn .brdng-passenger-details .order-summary-box .voucher-form .relative-form {
        width: 70%;
        position: relative;
        overflow: hidden;
        margin-right: 5px;
    }

    .boarding-details_web .custom-row-grid .boarding-right-sctn .brdng-passenger-details .order-summary-box .voucher-form input {
        border: 1px solid #d0cfcd;
        border-radius: 3px;
        padding: 10px;
        width: 88%;
    }

    .boarding-details_web .custom-row-grid .boarding-right-sctn .brdng-passenger-details .order-summary-box .voucher-form .button_notactive {
        background-color: #ebebeb;
        color: #fff;
        padding: 6px 20px;
        border: 0;
        border-radius: 3px;
        width: 30%;
        height: 38px;
    }

    .boarding-details_web .custom-row-grid .boarding-right-sctn .brdng-passenger-details .order-summary-box .checkout-dtls {
        margin-top: 20px;
    }

    .boarding-details_web .custom-row-grid .boarding-right-sctn .brdng-passenger-details .proceed-btn {
        background-color: #f26b21;
        color: #fff;
        border: 0;
        width: 100%;
        padding: 8px;
        font-size: 18px;
        margin-top: 15px;
    }

    .boarding-details_web .custom-row-grid .boarding-left-sctn .boarding-content table tr td .arrow-cls {
        margin: 0 10px;
        max-width: 18px;
    }

    .grey-background_web {
        background-color: #eee;
    }
    
    .boarding-details_web .custom-row-grid .boarding-right-sctn .brdng-passenger-details .proceed-btn {
    background-color: #191970;
    color: #fff;
    border: 0;
    width: 100%;
    padding: 8px;
    font-size: 18px;
    margin-top: 15px;
}
</style>


<style>
    .daraz_wrapper {
        width: 100%;
    }

    .checkout_wrapper {
        height: calc(100vh - 90px);
        padding-bottom: 90px;
        overflow: scroll;
    }

    .checkout_wrapper .checkout_wrapper_inner {
        padding: 15pt;
    }

    .checkout_wrapper .checkout_wrapper_inner .profile_icon {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAiCAYAAABMfblJAAAAAXNSR0IArs4c6QAAAz9JREFUSA21lj9W20AQxrGcIl1c5tFEOUEUOEBEmQrnBHFu4JwA5wSYEyBOgDkBoksDT9xAqWhNmQLI71t2eCt7JfHA2fekmZ39Zr6d2T/SYOuZbWdnZwL0C08+GAxSpFr58PBQ3d/fH1VVVTtLz2vQM76V0ZIkOQ1Ioi4QzyH+BfEyCvDGTkKf1SFkIwtC4Av6S6RsKfoHG0NWd3d3e12kbwJwQ1VmGEKyE4JNV4MBy6nAHOJP4LPhcHiK3GsECzqtGZJdbbMnmx9XV1dF4NdQIR1BWnrSrS580vD0HZXSyDCddJHJRVmzfjnqrfq0w0ex/o4SQpYbVGU0vUuKlMwKYfAfkbWWZK1FCXF0YOT16pqtRQgMZLmwLiUemx7KKKGtBcBlCO7TmVzZh4kS4mRr0effGKeKacMQ6UQJKWXlseEZi7g3TRyJLLDUgf6kRgkZLYWgtCmzzqU/pzHRqeHC9TSbZJQQcGEgFv8Y0pH126Q/SrprdQ4v2jZblBBwjdORnJUlpTrvIrUrUHg1JjxxSuTVetMIS6DKdiwTWGIqkAuea3RNRNfZhCfncY2xzlupk1BZEbQg0v5juO53H5m8OwktvC/ZjGzbdu2Zv9hr82mTzyI0ZzLWt3FsfWSt3di2QQLc61R405dG6M1QwVlHbXdlFmbnOFm3GqX0mZ45Y8erlRAifeMOWLdph39jSOTgZ5eXlyeNgaATJdzd3R3jfIzzKMC6A02/NBvjKbgMqeMRtpJN9C22tmuE7EjtxgPzJuAf+lNmvTDbqlTZqcZEOMbeaVzZUmaRViG+QQjZFKdDA+D0k6/93Pp90hMXxLArTn8Cn+GszfeJUGXEeOoHbilJvjo7c+qTxCrAfPe4xp/cUEZtEGZ1zvNWfci+QvZb+kvazc3NYnt7+yO+Gc974v7FViqWu7ypv0o5koEy6me2lP6apptH668YxD5QuaU7QgxTdQRgzWbSX9uY9JIYM4ujpKQnfu3czqI/N8AmpH4vLUvi7SumMhxLUdNt8aht9O1iUkX9PWQJM0gVHqlfwlr6JluYBGXNEpgzT7DcJFEQK4ybqqRu/SCuA9DGVKpWhcHcLpWBktbhwP/S/wF3wIHN2jkFzgAAAABJRU5ErkJggg==);
        background-size: 16px;
    }

    .checkout_wrapper .checkout_wrapper_inner .sub_header {
        font-size: 14pt;
        line-height: 17.5pt;
        font-weight: 700;
        color: #4c4c4c;
        padding-left: 35px;
        background-repeat: no-repeat;
    }

    .checkout_wrapper .checkout_wrapper_inner {
        padding: 15pt;
    }

    .checkout_wrapper .checkout_wrapper_inner .checkout_section {
        flex-direction: row;
        box-sizing: border-box;
        display: flex;
        place-content: flex-start space-between;
        align-items: flex-start;
    }

    .checkout_wrapper .checkout_wrapper_inner h4 {
        margin: 0;
        font-size: 12pt;
        line-height: 17.5pt;
        font-weight: 700;
        color: #4c4c4c;
        padding: 0 0 5px;
    }

    .checkout_wrapper .checkout_wrapper_inner p {
        margin: 0;
        padding: 0;
        font-size: 12pt;
        line-height: 17.5pt;
        font-weight: 400;
        color: #4c4c4c;
    }

    .checkout_wrapper .line_section {
        width: 100%;
        height: 4.1pt;
        background-image: url(data:image/png;base64,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);
        background-size: 100%;
        background-repeat: no-repeat;
    }

    .checkout_wrapper .checkout_wrapper_inner .bus_icon {
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACUAAAAkCAYAAAAOwvOmAAAAAXNSR0IArs4c6QAAAqpJREFUWAntl/txGjEQxsPj/+AKTAccuABIB3QQUkFIBYEK7A6CO6ADQwEwuIKcO8AFAPl9RMvojnsZ+87OTDRzs9I+P+2uhKh98kav11vUarW+x6pkejgcpuv1emLB6jb5SLSZBGa3233ZbDaLJNlb8tIq8+9kqtFoPNzc3LxlUl7k60NmqkZGHmwbnIKA09equqeIGxI3NBxq9IEtENi0UkrcNgH1HcepfMoOiB9NUDG9V3yLeQLlroCtCaqkKp9/BZ1AVQkiL9Z/UHkZMnmTei5t8d7UsDT5dR7EwNz7TReTlbo0LPGemq1Wq1GpkQs4j4AC6ayATekqEVClRysY4AxUEAQtvnZB+1LUIo88AdKzhVOw4QEWlhIx6vQ6uvy7ioAC0Ay2XgpBknJVvAgoMtTSSwGqH+bSfwfd5j/HNxsBZcL9fj/WXaVy1uv1n/BHOGgBdobsB7LCgNWfVOAWH0PsZXfHKZ8q1kVvdABNADMWIDmBjgjwS/OiAx9zdIfSlx++CWAmWqeNs9PnK+Lgu9a8dbr6nGyoDPp6aXP0BvjokKEn7K+g35zu1zQb8TNBeYYh89ClX+xCoKToxkElp/Sh1gC9cvxEkthTpgmIJQ76lOA3vC1z9dUjAULTyaEb5M/YtSmZfBw3g49Zll1mptjZSCAERo41Fy/LoS9TdijbALsn2csP8yU+Jr5efJ6ZKZcRWiMIZMhaO3/RcDZt52PLOsxzkAhKt3rSn9EkXl6AuLyIj8zyxR1Wta6lBbKLjR6Y0gML06PpA3rjFv6WSzD1FL3GPrF8BkBUgOiDhfHUXpT3eBEaL4teYp8LCgCdbrd7sMBkquPmz8bLopfYZ4HSSevz3QEkKe48ienxLrZPBaW7xIEZ0kPXXjBlaM79M/Z4Z9PX2P8BzHI39njI8S4AAAAASUVORK5CYII=);
        background-size: 22px;
    }

    .checkout_wrapper .checkout_wrapper_inner .sub_header {
        font-size: 14pt;
        line-height: 17.5pt;
        font-weight: 700;
        color: #4c4c4c;
        padding-left: 35px;
        background-repeat: no-repeat;
    }

    .checkout_wrapper .checkout_wrapper_inner ul {
        margin: 0;
        padding: 0 0 15px;
        border-bottom: 1px solid #d4d4d4;
    }

    .checkout_wrapper .checkout_wrapper_inner {
        padding: 15pt;
        padding-top: 15pt;
    }

    .pt0 {
        padding-top: 0 !important;
    }

    .checkout_wrapper .checkout_wrapper_inner ul li {
        flex-direction: row;
        box-sizing: border-box;
        display: flex;
        padding-bottom: 5px;
    }

    .checkout_wrapper .checkout_wrapper_inner ul li .section_one {
        flex: 1 1 100%;
        box-sizing: border-box;
        max-width: 40%;
        font-size: 12pt;
        line-height: 21pt;
        color: #4c4c4c;
        font-weight: 500;
    }

    .checkout_wrapper .checkout_wrapper_inner ul li .section_break {
        flex: 1 1 100%;
        box-sizing: border-box;
        max-width: 10%;
        font-size: 12pt;
        line-height: 21pt;
        color: #4c4c4c;
        font-weight: 500;
    }

    .checkout_wrapper .checkout_wrapper_inner ul li .section_two {
        flex: 1 1;
        box-sizing: border-box;
        max-width: 50%;
        font-size: 12pt;
        line-height: 21pt;
        color: #4c4c4c;
        font-weight: 500;
    }

    .checkout_wrapper .checkout_wrapper_inner ul li .section_two span img {
        width: 17px;
        margin-right: 10px;
        margin-left: 10px;
    }

    .checkout_wrapper .checkout_wrapper_inner .boarding_detail_footer {
        padding-top: 15pt;
    }

    .checkout_wrapper .checkout_wrapper_inner .boarding_detail_footer h5 {
        text-align: right;
        color: #4c4c4c;
        font-size: 12pt;
        line-height: 17pt;
    }

    .checkout_wrapper .checkout_wrapper_inner .boarding_detail_footer h5 strong {
        margin-left: 10px;
        font-size: 14pt;
        line-height: 17pt;
        color: #ec3a1c;
    }

    .voucher_code {
        border-top: 5px solid #d5d5d5;
    }

    .voucher_code .amount-container {
        display: flex;
        justify-content: space-between;
    }

    .voucher_code .amount-container p {
        margin-bottom: 10px;
    }

    .voucher_code .amount-container p {
        margin-bottom: 10px;
    }

    .textRight {
        text-align: right !important;
    }

    .voucher_code .promo-form-container {
        display: flex;
        justify-content: space-between;
    }

    .voucher_code .promo-form-container .input-container {
        width: 76%;
    }

    .relative {
        position: relative !important;
    }

    .voucher_code .promo-form-container input {
        padding: 7pt;
        border-radius: 2pt;
        border: 1px solid #d0cfcd;
        line-height: 25pt;
        font-size: 14pt;
        width: 100%;
    }

    .voucher_code .promo-form-container .apply_btn_muted {
        background-color: #d1d1d1;
    }

    .voucher_code .promo-form-container .apply_btn,
    .voucher_code .promo-form-container .apply_btn_muted {
        color: #fff;
        padding: 7pt;
        font-size: 12pt;
        line-height: 25pt;
        width: 20%;
        border: none;
        border-radius: 2pt;
        font-weight: 600;
    }

    .bottom_footer_checkout {
        position: fixed;
        bottom: 0;
        width: 100%;
        height: 60.5pt;
        padding: 15px;
        background-color: #fff;
        flex-direction: row;
        box-sizing: border-box;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 -6px 6px 0 rgba(0, 0, 0, .2);
    }

    .bottom_footer_checkout h5 {
        font-weight: 400;
        font-size: 14pt;
        margin-top: 13px;
    }

    .bottom_footer_checkout h5 strong {
        font-size: 16pt;
        line-height: 17pt;
        color: #ec3a1c;
    }

    .bottom_footer_checkout p {
        font-size: 10pt;
        opacity: .3;
    }

    .checkout_btn {
        cursor: pointer;
        background-color: #f26b21;
        color: #fff;
        line-height: 15pt;
        font-size: 15pt;
        font-weight: 800;
        padding: 10.5pt;
        width: 155px;
        text-align: center;
        border-radius: 5.5pt;
    }

    .mob-view {
        display: none;
    }

    @media (max-width:991px) {
        .mob-view {
            display: block;
        }

        .grey-background_web {
            display: none;
        }
    }
</style>

<?php
$item = App\Models\Bus_Checkout::orderBy('created_at','DESC')->first();

$seatsdata = App\Models\Seat_Checkout::where('checkout_id',$item->id)->get();

$busdata = App\Models\Bus::where('b_name',$item->bus_id)->first();


?>



<div class="grey-background_web">
    <div class="boarding-details_web">
        <div class="container">
            <div class="custom-row-grid">
                <div class="boarding-left-sctn">
                    <div class="boarding-head">
                        <h1>Boarding Details</h1>
                        <ul class="list-time" type="none">
                            <li><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAXCAYAAADgKtSgAAAAAXNSR0IArs4c6QAAAlRJREFUSA2tVa1yIkEQnt0VKOpOIACTKIi7PXiAcAqZRIIJEdTh4QV4AMRpxLECcBR5guM8UHsSVKLApsAC931T21tDWFJFoKtgpv++6e2e7rHUB5TP5+93u92tZVkuzAqG6Qhyf7vdjnzffzbke1trjwsY13ULtm3/Buh1lN6U4ZAXHPKEQ0amnPsDcETbgfyRSqFkMqmy2azKZDJqPp+r2WymlsulqPWKQzrT6fTJFO6BA3gI5Z0YVKtVVS6XVTweF1G4rlYr1ev1VLvdDmXYDCeTyYMIQnAzYkbaarV0tGJ4bOVX1Ov18EvML9DgzLHjOH8IQOB+vx8Z7bED+BWlUik8YLPZ/GANbDqgeB1xZMRRaRB91Ep7+gnxMnDv8LrhVvwkwxwXi0VuT6ZEIqGQEoWiKuB9TafT/2wICoLE4p1Dpj9xmRY2iM71qel4Hwj9WbOAXBufcEuG9/gSZOB80wUlKBvkEiQ4zHsIzs67BBk4byzoX4IawrPOYFORgOszcp/MYrFQbIZziP7GzPFZ0JEAclacQ6Y/cXX753K5FzBXBO52u5+6OePxWNVqNR0bUvKKZrrWBcU8rmgp/hqNxsnpYTqazaZAKMHT4MGg96hl7tlpUpjQ48iGEdOefiRE/UseDkd8oBxiHnwHf7Ner9VgMNAq3ttYLCZm4cpoPc/TEdM+oGekoyKMzrkwXM25LvJUKnXwEkmkYoPVw0NRMfjDZ47K4A3tSJFNh/d7Fo85llSY+oPITSXHMZwLkLk4iAPuC35vkLE3fF43RDvEPpL+A+/vD6GdTR2EAAAAAElFTkSuQmCC" alt=""></li>
                            <li>{{$busdata->b_station}}<br><span> {{$busdata->b_time}}</span></li>
                            <li class="dotted"></li>
                            <li><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABEAAAAaCAYAAABRqrc5AAAAAXNSR0IArs4c6QAAAkBJREFUOBGdlDloFUEchzcabxsPEiQqCCKCihLBKhgICGkCmtYT0UIQC4tY2BgEr5jKMqQIFqnENLEw0YcHRhADQYxHo3ZGETQe2On37ZsJ8+KuQX/wvf1fszvzn5lXl/2pJkL7oRUaYDl8hzdwA4bgJ5Sqk8xL+BWIg6PvswLboVBXiX4FC+9BFzTDFmiBazAJ5t+C8RqdwvsC09ANC0HNg9VQp4PWgzPxRa9gDeRay68BEyfzSHXwOew78ADsQztE3caw3h7lOsOvgSewDBbATTCW8g3/OCiXMgUfYCtkd8HiI6AugP4zOAS7IPbLgW3g8h6CdachmwiOzVsJj4PfwTNVP46DekKwN/i9Ns7pu5WfoRFc0nNwJ1K9Do5LUW6EWuVLXKsDnYXT/QEWboNUm4PjB9Sm6iObqsf4FJwNPO/DKNiHHvDFL+AAdMJHuAUeAXdVmc8PkWsd1EHzoWh33ImjFqCd4KzfQT6j3Ri+ZBwaIOoERgVGwJfugaizGI4ZjgEHPg3BwzGYPFcktuZiGANfEs8NZpZdAoOembm0l4Jp8KKuS4vdDdf8HnakiQK7QswPXinIZddD0h6Uyb54092luOU1td4BZ2NRe02m6njU4ywGCvIzIZNO1eLZ2kfAXkzCxtnJ1DdpkcUHk8QS7EfgBy4m8VLzfCi2+/FUdoWYH5j5I8Iu1SIy8Zr3YcfZOYtjpaMKEm3EPNY22ftU1idSf9dl0g4Wd60Z/lneVE+w/zX+hf63ljKyda7RvwEy15h3RHZAJQAAAABJRU5ErkJggg==" alt=""></li>
                            <li>{{$busdata->b_drop}}<span></span></li>
                        </ul>
                        <div class="bus-operator"><img src="https://bookmepk.s3.eu-central-1.amazonaws.com/static/custom/upload/transport/daewoo-express.jpg" alt=""></div>
                        <div class="clear"></div>
                    </div>
                    <div class="boarding-content">
                        <table>
                            <tbody>
                                <tr>
                                    <td>Bus Route</td>
                                    <td>:</td>
                                    <td>{{$busdata->b_station}}<span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAASCAYAAACnxdXaAAAAAXNSR0IArs4c6QAAAURJREFUSA1jYKAi8PHx6fL19RUhZCQTIQXEynt7e5/4//9/NhBfJaSHKpZCfSfPyMjIBbRQDOjjl/gsZsQnSaoc0LffgRZzgPQBffx669atYtjMoKqlIAuIsZjqlqJbDOS/3rJlC4qPaWIpIYsZvby8mpmYmGxBCmkAzIBmckLNfQP0sSiIzQhMaf+hglSngImJAZiw4OYC+Xt+//4dzfLv3793QJ/+hctQkQG08B/QOHGoke+Blm7etWvXKxYgAxS0WlS0C2ZUONBsJ6hPQRaWbNu2bR5IEuF3mFIq0MBs0wg0Jh1oIciXYAuBeRZsIch4qltKyEKQpVQpBkEGgQAwUTYAKZw+BKkBAar5FGQhMN4ycAUpxDoISRWfAvN6EdDCSGIsBFnLjOwCctm3b98+rqamZgXULwfEBcBEs4Bcs2imDwBjFY9i7ubyIwAAAABJRU5ErkJggg==" alt="" class="arrow-cls">{{$busdata->b_drop}}</span></td>
                                </tr>
                                <tr>
                                    <td>Service Provider</td>
                                    <td>:</td>
                                    <td>{{$busdata->b_name}}</td>
                                </tr>
                                <tr>
                                    <td>Boarding Point</td>
                                    <td>:</td>
                                    <td>{{$busdata->b_station}}</td>
                                </tr>
                                <tr>
                                    <td>Bus Type</td>
                                    <td>:</td>
                                    <td>{{$busdata->b_type}}</td>
                                </tr>
                                <tr>
                                    <td>Departure Date</td>
                                    <td>:</td>
                                    <td>{{$busdata->b_date}}</td>
                                </tr>
                                <tr>
                                    <td>Departure time</td>
                                    <td>:</td>
                                    <td>{{$busdata->b_time}}</td>
                                </tr>
                                <tr>
                                    <td>Seat No</td>
                                    <td>:</td>
                                    <td>
                                    @foreach($seatsdata as $seatItem)
                                    {{$seatItem->seats}},
                                    @endforeach
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="boarding-right-sctn">
                    <div class="brdng-passenger-details">
                        <h1>Passenger Details</h1>
                        <div class="detail-box-passenger">
                            <h2 class="float_left">Name</h2>
                            <h3 class="float_right">{{$item->name}}</h3>
                            <div class="clear"></div>
                            <h2 class="float_left">Age</h2>
                            <h3 class="float_right">{{$item->birth}}</h3>
                            <div class="clear"></div>
                            <h2 class="float_left">Gender</h2>
                            <h3 class="float_right">{{$item->gender}}</h3>
                            <div class="clear"></div>
                            <h2 class="float_left">Phone Number</h2>
                            <h3 class="float_right">{{$item->phone}}</h3>
                            <div class="clear"></div>
                            <h2 class="float_left">Email ID</h2>
                            <h3 class="float_right">{{$item->email}}</h3>
                            <div class="clear"></div>
                        </div>
                        <div class="order-summary-box">
                            <h1>Order Summary</h1>
                            <h2 class="float_left">2 Item(s), Total.</h2>
                            <h3 class="float_right">Rs. {{$item->total}}</h3>
                            <div class="clear"></div>
                            <div class="voucher-form">
                                <div class="relative-form"><input type="text" placeholder="Vouchercode" value=""></div><button class="button_notactive">APPLY</button>
                            </div>
                            <div class="checkout-dtls">
                                <div class="for-voucher">
                                    <div class="clear"></div>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div><button class="proceed-btn">Proceed to Pay</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="mob-view">
    <div class="daraz_wrapper">
        <div class="checkout_wrapper">
            <div class="checkout_wrapper_inner">
                <div class="sub_header profile_icon">Passenger Details</div>
            </div>
            <div class="checkout_wrapper_inner ">
                <div class="checkout_section">
                    <div>
                        <h4>Name</h4>
                        <p>{{$item->name}}</p>
                    </div>
                    <div>
                        <h4>Age</h4>
                        
                     <h3 class="float_right">{{$item->birth}}</h3>
                    </div>
                    <div>
                        <h4>Phone Number</h4>
                 <h3 class="float_right">{{$item->phone}}</h3>
                    </div>
                </div>
            </div>
            <div class="line_section"></div>
            <div class="checkout_wrapper_inner">
                <div class="sub_header bus_icon">Boarding Details</div>
            </div>
            <div class="checkout_wrapper_inner pt0">
                <ul>
                    <li>
                        <div class="section_one">Bus Route</div>
                        <div class="section_break">:</div>
                        <div class="section_two">{{$busdata->b_station}}<span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAASCAYAAACnxdXaAAAAAXNSR0IArs4c6QAAAURJREFUSA1jYKAi8PHx6fL19RUhZCQTIQXEynt7e5/4//9/NhBfJaSHKpZCfSfPyMjIBbRQDOjjl/gsZsQnSaoc0LffgRZzgPQBffx669atYtjMoKqlIAuIsZjqlqJbDOS/3rJlC4qPaWIpIYsZvby8mpmYmGxBCmkAzIBmckLNfQP0sSiIzQhMaf+hglSngImJAZiw4OYC+Xt+//4dzfLv3793QJ/+hctQkQG08B/QOHGoke+Blm7etWvXKxYgAxS0WlS0C2ZUONBsJ6hPQRaWbNu2bR5IEuF3mFIq0MBs0wg0Jh1oIciXYAuBeRZsIch4qltKyEKQpVQpBkEGgQAwUTYAKZw+BKkBAar5FGQhMN4ycAUpxDoISRWfAvN6EdDCSGIsBFnLjOwCctm3b98+rqamZgXULwfEBcBEs4Bcs2imDwBjFY9i7ubyIwAAAABJRU5ErkJggg==" alt=""></span>{{$busdata->b_drop}}</div>
                    </li>
                    <li>
                        <div class="section_one">Service Provider</div>
                        <div class="section_break">:</div>
                        <div class="section_two">{{$busdata->b_name}}</div>
                    </li>
                    <li>
                        <div class="section_one">Departure Date</div>
                        <div class="section_break">:</div>
                        <div class="section_two">{{$busdata->b_date}}</div>
                    </li>
                    <li>
                        <div class="section_one">Departure time</div>
                        <div class="section_break">:</div>
                        <div class="section_two">{{$busdata->b_time}}</div>
                    </li>
                    <li>
                        <div class="section_one">Seat No</div>
                        <div class="section_break">:</div>
                        <div class="section_two">
                            @foreach($seatsdata as $seatItem)
                                    {{$seatItem->seats}},
                                    @endforeach
                                    </div>
                    </li>
                    <li>
                        <div class="section_one">Boarding Point</div>
                        <div class="section_break">:</div>
                        <div class="section_two">{{$busdata->b_station}}</div>
                    </li>
                    <li>
                        <div class="section_one">Bus Type</div>
                        <div class="section_break">:</div>
                        <div class="section_two">{{$busdata->b_type}}</div>
                    </li>
                </ul>
                <div class="boarding_detail_footer">
                    <h5>2 Item(s), Total:<strong style="color:#191970;">Rs. {{$item->total}}</strong></h5>
                </div>
            </div>
            <div class="voucher_code undefined">
                <div style="padding: 10px;">
                    <div class="amount-container">
                        <div>
                            <p>Total</p>
                        </div>
                        <div>
                            <p class="textRight"><strong>Rs {{$item->total}}</strong></p>
                        </div>
                    </div>
                    <div class="promo-form-container">
                        <div class="relative input-container"><input class="" placeholder="Voucher Code" value=""></div><button type="button" class="apply_btn_muted">APPLY</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom_footer_checkout">
            <div>
                <h5>Total: <strong style="color:#191970;">Rs. {{$item->total}}</strong></h5>
                <!--<p>VAT included, where applicable</p>-->
            </div>
            <div style="background:#191970;" class="checkout_btn ">Proceed to Pay</div>
        </div>
    </div>
</div>


@endsection