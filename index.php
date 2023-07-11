<?php

if( isset($_GET['res']) ){
    $res = $_GET['res'];
 
    $arr = ["%2B", "%2F", "%25"];
    $arrr = ["+", "/", "%"];


    $has = str_replace($arr, $arrr, $res);
} else {
    $has = '2*2';
}

?>

<!DOCTYPE html>
<html lang="in">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Judul halaman</title>
<style>
.key{
    dispay: flex;
    display: block;
}
.row{
    text-align: center;
    margin-top: 20vh;;
}
button{
    width: 6vh;
    height: 6vh;
    margin: 2vh;
    border-radius: 50%;
    box-shadow: 3px 3px 2px grey;
}
.dNone{
    display: none;
}
form{
    text-align: center;
}
.container{
    text-align: center;
}
body{
    background-color: black;
}
label, input{
    color: white;
}
input{
    padding: 1vh;
    border: 2px solid white;
    background-color: black;
}
span{
    font-weight: bold;
}
.info{
    position: fixed;
    width: 3vh;
    height: 3vh;
}
.warm{
    top: 5vh;
    position: fixed;
    background-color: #ffbd6a;
    color: black;
    pading: 2vh;
}
.warm li{
    margin-left: 0;
}
</style>
</head>
<body>
    <button class="info"><b>!</b></button>
    <ul class="warm dNone">
        <li>% = Modulus</li>
        <li>/ = Bagi</li>
        <li>* = Kali</li>
    </ul>
    <div class="container">
        <form action="" method="get">
            <input type="" class="int" name="res" size="10" readonly>
            <button id="cetak" type="submit">=</button>
        </form>
        <label>Hasil : </label><input class="has" size="10" readonly>
        
        <div class="row">
            <div class="key">
                 <button class="dNone"></button>
                <div>
                    <button><span>1</span></button> 
                    <button><span>2</span></button> 
                    <button><span>3</span></button> 
                </div>
                <div>
                    <button><span>4</span></button> 
                    <button><span>5</span></button> 
                    <button><span>6</span></button>
                </div>
                <div>
                    <button><span>7</span></button> 
                    <button><span>8</span></button> 
                    <button><span>9</span></button>
                </div>
            </div>
            <div class="op">
                <button id="reset">C</button>
                <button><span>0</span></button>   
                <button><span>+</span></button> 
                <br>
                <button><span>-</span></button> 
                <button><span>*</span></button>
                <button><span>/</span></button>
                <button><span>%</span></button>
                
            </div>
        </div>
    </div>
    
<script >
const input = document.querySelector('.int');
const cetak = document.querySelector('#cetak');
const btnN = document.querySelectorAll('.key button'); 
const btno = document.querySelectorAll('.op button');
const reset = document.querySelector('#reset');
const has = document.querySelector('.has');
const info = document.querySelector('.info');

for (let i = 0; i < 10; i++) { 
    btnN[i].addEventListener('click', function(){ 
        console.log(i);
        input.value += i;
        
    })
}

let op = ['','0','+', '-', '*', '/', '%']
for (let i=1; i < 7; i++) { 
    btno[i].addEventListener('click', function(){ 
        console.log(i) 
        input.value += op[i] 
    })
}

reset.addEventListener('click', function(){ 
    input.value = null
    has.value = null;
})

has.value = <?= $has; ?>;

info.addEventListener('click', function(){ 
    warm.classList.remove('dNone');
})

</script>
</body>
</html>
