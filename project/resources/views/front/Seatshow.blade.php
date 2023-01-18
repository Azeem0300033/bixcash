@extends('layouts.front')
@section('content')

<style>
    ul {
        list-style-type: none;
    }

    li {
        display: inline-block;
    }

    input[type="checkbox"][id^="myCheckbox"] {
        display: none;
    }

    label {
        border: 1px solid #fff;
        padding: 10px;
        display: block;
        position: relative;
        margin: 10px;
        cursor: pointer;
    }

    label:before {
        background-color: white;
        color: white;
        content: " ";
        display: block;
        border-radius: 50%;
        border: 1px solid grey;
        position: absolute;
        top: -5px;
        left: -5px;
        width: 25px;
        height: 25px;
        text-align: center;
        line-height: 28px;
        transition-duration: 0.4s;
        transform: scale(0);
    }

    label img {
        height: 100px;
        width: 100px;
        transition-duration: 0.2s;
        transform-origin: 50% 50%;
    }

    :checked+label {
        border-color: #ddd;
    }

    :checked+label:before {
        content: "✓";
        background-color: grey;
        transform: scale(1);
    }

    :checked+label img {
        transform: scale(0.9);
        /* box-shadow: 0 0 5px #333; */
        z-index: -1;
    }

    .right-box {
        border: 1px solid gray;
        height: 263px;
        width: 100%;
        padding: 6%;
    }

    .right-box p {
        font-size: 20px;
        font-weight: 600;
    }

    .right-box span {
        float: right;
    }

    .right-box span img {
        width: 130px;
        border-radius: 6px;
    }

    .next-btn {
        width: 100%;
        height: 46px;
        background: #191970;
        border: none;
    }

    .next-btn a {
        color: white;
        font-weight: 600;
    }

    .main-div {
        margin-top: 5%;
        margin-bottom: 4%;
    }
    
    .centered {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        font-size: 13px;
    }
    
    .label-img{
        position: relative;
        text-align: center;
        color: white;
        padding: 0px;
    }
    
    .seat-img{
        width: 40px;
        height: 40px;
    }
    
    @media(max-width:991px) {
        #yyy{
            display: flex;
        }
    }
</style>

<div class="main-div">
    <form action="/BusChecout" method="POST">
      {{csrf_field()}}
        <div style="width: 75%;margin: auto;" class="row">
            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                <div id="yyy">
                    <input type="hidden" value="{{$bus->id}}" name="bus_id" />
                    <ul>
                        <li>
                            <img class="seat-img" src="{{asset('images/handle.png')}}" />
                        </li>
                        <li>
                            <input type="checkbox" id="myCheckbox1" value="1" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" style="" for="myCheckbox1"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">1</p></label>
                        </li>
                        <li>
                            <input type="checkbox" id="myCheckbox5" value="5" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox5"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">5</p></label>
                        </li>
                        <li>
                            <input type="checkbox" id="myCheckbox9" value="9" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox9"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">9</p></label>
                        </li>
                        <li>
                            <input type="checkbox" id="myCheckbox13" value="13" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox13"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">13</p></label>
                        </li>
                        <li>
                            <input type="checkbox" id="myCheckbox17" value="17" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox17"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">17</p></label>
                        </li>
                        <li>
                            <input type="checkbox" id="myCheckbox21" value="21" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox21"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">21</p></label>
                        </li>
                        <li>
                            <input type="checkbox" id="myCheckbox25" value="25" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox25"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">25</p></label>
                        </li>
                        <li>
                            <input type="checkbox" id="myCheckbox29" value="29" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox29"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">29</p></label>
                        </li>
                        <li>
                            <input type="checkbox" id="myCheckbox33" value="33" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox33"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">33</p></label>
                        </li>
                        <li>
                            <input type="checkbox" id="myCheckbox37" value="37" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox37"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">37</p></label>
                        </li>

                    </ul>
                    <ul>
                        <li>
                            <img class="seat-img" src="{{asset('images/download.jpg')}}" />
                        </li>
                        <li>
                            <input type="checkbox" id="myCheckbox2" value="2" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox2"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">2</p></label>
                        </li>
                         <li>
                            <input type="checkbox" id="myCheckbox6" value="6" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox6"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">6</p></label>
                        </li>
                        <li>
                            <input type="checkbox" id="myCheckbox10" value="10" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox10"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">10</p></label>
                        </li>
                        <li>
                            <input type="checkbox" id="myCheckbox14" value="14" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox14"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">14</p></label>
                        </li>
                        <li>
                            <input type="checkbox" id="myCheckbox18" value="18" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox18"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">18</p></label>
                        </li>
                        <li>
                            <input type="checkbox" id="myCheckbox22" value="22" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox22"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">22</p></label>
                        </li>
                        <li>
                            <input type="checkbox" id="myCheckbox26" value="26" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox26"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">26</p></label>
                        </li>
                        <li>
                            <input type="checkbox" id="myCheckbox30" value="30" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox30"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">30</p></label>
                        </li>
                         <li>
                            <input type="checkbox" id="myCheckbox34" value="34" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox34"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">34</p></label>
                        </li>
                        <li>
                            <input type="checkbox" id="myCheckbox38" value="38" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox38"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">38</p></label>
                        </li>

                    </ul>
                    <br><br>
                    <ul>
                        <li>
                            <img class="seat-img" src="{{asset('images/download.jpg')}}" />
                        </li>
                        <li>
                            <input type="checkbox" id="myCheckbox3" value="3" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox3"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">3</p></label>
                        </li>
                        <li>
                            <input type="checkbox" id="myCheckbox7" value="7" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox7"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">7</p></label>
                        </li>
                        <li>
                            <input type="checkbox" id="myCheckbox11" value="11" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox11"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">11</p></label>
                        </li>
                         <li>
                            <input type="checkbox" id="myCheckbox15" value="15" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox15"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">15</p></label>
                        </li>
                        <li>
                            <input type="checkbox" id="myCheckbox19" value="19" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox19"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">19</p></label>
                        </li>
                        <li>
                            <input type="checkbox" id="myCheckbox23" value="23" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox23"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">23</p></label>
                        </li>
                        <li>
                            <input type="checkbox" id="myCheckbox27" value="27" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox27"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">27</p></label>
                        </li>
                        <li>
                            <input type="checkbox" id="myCheckbox31" value="31" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox31"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">31</p></label>
                        </li>
                        <li>
                            <input type="checkbox" id="myCheckbox35" value="35" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox35"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">35</p></label>
                        </li>
                        <li>
                            <input type="checkbox" id="myCheckbox39" value="39" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox39"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">39</p></label>
                        </li>

                    </ul>
                    <ul>
                        <li>
                            <img class="seat-img" src="{{asset('images/download.jpg')}}" />
                        </li>
                        <li>
                            <input type="checkbox" id="myCheckbox4" value="4" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox4"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">4</p></label>
                        </li>
                        <li>
                            <input type="checkbox" id="myCheckbox8" value="8" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox8"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">8</p></label>
                        </li>
                        <li>
                            <input type="checkbox" id="myCheckbox12" value="12" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox12"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">12</p></label>
                        </li>
                        <li>
                            <input type="checkbox" id="myCheckbox16" value="16" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox16"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">16</p></label>
                        </li>
                        <li>
                            <input type="checkbox" id="myCheckbox20" value="20" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox20"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">20</p></label>
                        </li>
                        <li>
                            <input type="checkbox" id="myCheckbox24" value="24" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox24"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">24</p></label>
                        </li>
                        <li>
                            <input type="checkbox" id="myCheckbox28" value="28" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox28"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">28</p></label>
                        </li>
                        <li>
                            <input type="checkbox" id="myCheckbox32" value="32" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox32"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">32</p></label>
                        </li>
                        <li>
                            <input type="checkbox" id="myCheckbox36" value="36" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox36"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">36</p></label>
                        </li>
                        <li>
                            <input type="checkbox" id="myCheckbox40" value="40" name="seats[]" onclick="checkTotalCheckedBoxes()" />
                            <label class="label-img" for="myCheckbox40"><img class="seat-img" src="{{asset('images/seat.png')}}" /><p class="centered">40</p></label>
                        </li>


                    </ul>
                </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                <div class="right-box">
                    <p>{{$bus->b_name}}<span><img src="{{asset('images/Bus/'.$bus->b_logo)}}" width="50"></span></p>
                    <p style="padding-top: 21%;">Seat Selected <span id="demo">0</span></p>
                    <button class="next-btn"><a href="/Bus-Checkout/{{$bus->id}}">Next</a></button>
                </div>
            </div>
        </div>
    </form>
</div>
<script>
    function checkTotalCheckedBoxes() {
        var checkLength = 0;
        var boxes = document.getElementById("yyy").getElementsByTagName("input");
        for (var i = 0; i < boxes.length; i++) {
            boxes[i].checked ? checkLength++ : null;
        }
        document.getElementById("demo").innerHTML = checkLength;
        //  alert (checkLength + " boxes are checked." );
    }
</script>
@endsection