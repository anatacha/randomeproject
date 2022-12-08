@extends('layouts/app')

<style>

.container-random{
    margin:0 auto;
    /* border: 1px solid red; */
    max-width: 960px;
    display:flex;
    flex-direction:column;
    justify-content: center;
    align-items:center;
}
.container-items{
    margin:0 auto;
    /* border: 1px solid red; */
    max-width: 960px;
    height: 100vh;
    display:flex;
    flex-direction:column;
    justify-content: center;
    align-items:center;
    padding: 10px;
}
.container-items p{
    background-color: #fff;
    border-radius: 27%;
}
/* ======2======== */
.container-random2{
    margin:0 auto;
    background-color: #fff;
    max-width: 960px;
    display:flex;
    flex-direction:column;
    justify-content: center;
    align-items:center;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid #ffffff4d;
}
.caption{
    position:relative;
    background-color:#FFE15D;
    padding: 5px;
    transform: translate(0,-50%);

}
/* ======3===== */
.container-random3{
    margin:0 auto;
    background-color: #fff;
    max-width: 960px;
    display: grid;
    grid-template-columns: repeat(2,auto);
    justify-content: center;
    align-items:center;
    padding:15px;
    grid-gap:1rem;
    box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid #ffffff4d;
}

.card {
            flex-direction: row;
            align-items: center;
        }

        .card-title {
            font-weight: bold;
        }

        h4 {
            margin-top: -15px;
        }

        .card-img {
            width: 50%;
            height: 12vw;
            object-fit:cover;

        }

        .card-body {
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }

        .input-unum{
            border-radius: 25px;
            background: #FBFCFF;
            stroke:#4A4A4A;
            padding: 20px;
            width: 200px;
            height: 10px;
        }
        .check-reward{
            border-radius: 25px;
            background: #FBFCFF;
            stroke:#4A4A4A;
            padding: 20px;
            width: 40px;
            height: 10px;
            text-decoration: none;
        }
/* ====media===== */
@media only screen and (max-width: 768px) {
            .card-body {
                padding: 0.5em 1.2em;
            }

            .card-body{
                margin: 0;
            }

            .card-img {
                width: 35%;
                height: 19vw;
                object-fit: cover;
            }


        }

        @media only screen and (max-width: 1200px) {
            .card-img {
                width: 50%;
                height: 22vw;
                object-fit: cover;
            }
        }

</style>
@section('content')
    <div class="container-random">
        <div class="container-items card" style="background-color:#FF8A00">
            <a role="button"id="random" style="color:#fff">คลิ๊กเพื่อดำเนินการสุ่มเลข</a>
             <p id="unum"></p>
             <p id="unum2"></p>


        </div>
    </div>

    <br/>
    <div class="container-random2">

        <div class="caption">ตารางผลรางวัล</div>
    <table class="datatables-basic table justify-content-lg-center align-items:center" style="width:200px;">
        <thead>

            <tr>
                <th scope="col">รอบที่</th>
                <th scope="col"></th>
                <th scope="col">เลขที่สุ่ม</th>
              </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <th scope="row"></th>
                <td id="table"></td>
              </tr>

        </tbody>

    </table>
    </div>
    <br/>

    <div class="container-random3">
            <h1 style="font-size:15px">ใส่หมายเลข</h1>
            <input type="text" id="inputunum" class="input-unum">
            <a role="button" id="btn-get" class="check-reward" onclick=getit()>ตรวจรางวัล</a>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="https://images.unsplash.com/photo-1518688248740-7c31f1a945c4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        {{-- <div class="card-body"> --}}
                            <h1 id="result"> <h1 id="reward" class="reward"></h1></h1>
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
    </div>



@endsection

@section('scripts')
<script>
    $(document).ready(function (){
        $(document).on('click','#random',
        function(e){
            let ranNum =Math.floor(Math.random()*1000)
            let lotto = ranNum.toString();
            let lenglot = lotto.length

            var click = 0;
                click += 1;
            if (click >0 && lotto >0){
                var torandom=document.getElementById("unum").innerHTML = lotto
                var toshow=document.getElementById("table").innerHTML = lotto
            }

            }

        )

    })

    function getit(){
        let btnGet = document.querySelector('#btn-get');
        let inputunum =document.querySelector('#inputunum');
        let result =document.querySelector('#result')
        let reward =document.querySelector('#reward')
        let unum2 =document.querySelector("#unum")
        //==================btn==========================
        btnGet.addEventListener('click',()=>{
            result.innerText = inputunum.value;
            // alert(unum2.innerText)
            if(result.innerText === unum2.innerText){
                reward=document.getElementById("reward").innerHTML = '<div style="background-color:#29A76A">ถูกรางวัลที่1!</div>'
            }
            else{
                reward=document.getElementById("reward").innerHTML = '<div style="background-color:#D74646;">ไม่ถูกรางวัลใดเลย</div>'

            }

        });


    }


</script>
@endsection
