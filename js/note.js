
// script for faq

function faq() {
    var close = document.getElementById("cls");

    if (close.style.display=="block") {
        document.getElementById('cls').style.display="none";
        
    }

    else{
       document.getElementById('cls').style.display="block";
       
    }
}


function faq2() {
    var close = document.getElementById("clt");

    if (close.style.display=="block") {
        document.getElementById('clt').style.display="none";
        
    }

    else{
       document.getElementById('clt').style.display="block";
    }
}


function faq3() {
    var close = document.getElementById("clsf");

    if (close.style.display=="block") {
        document.getElementById('clsf').style.display="none";
    }

    else{
       document.getElementById('clsf').style.display="block";
    }
}

function faq4() {
    var close = document.getElementById("clsdd");

    if (close.style.display=="block") {
        document.getElementById('clsdd').style.display="none";
    }

    else{
       document.getElementById('clsdd').style.display="block";
    }
}


//    script for dashboard
function openclosex() {
    var jee = document.getElementById('menu');
    var dee = document.getElementById('xbodyx');
    
    if (dee.style.width != "75%") {
        dee.style.marginLeft="25%";
        jee.style.width="25%";
        dee.style.width="75%";
    }
    
    else{
        dee.style.marginLeft="0%";
        jee.style.width="0%";
        dee.style.width="100%";

    }
}
// end for dashboard 


// script for copy
function poppyx(){
    var copytext = document.getElementById('add');
    copytext.select();
    document.execCommand('copy');
    alert('copied to clipboard');
}


// script for deposit page
function paymentcoinx(){
    var cryptocoinx = document.base_wallet.crypto.value;
    switch(cryptocoinx){
    
    case 'btc':
    document.base_wallet.reciver_wallet.value="bc1q48dmdtlgcc3x8wzqrqgpds5rjz5qze3dmfjzrk";
    document.base_wallet.network.value="btc";
    document.getElementById('address').innerHTML='<img src="pix/btc.png" alt="Bitcoin QR Code Generator" height="200" width="200" border="0" /></a><input type="text" id="add" value="bc1q48dmdtlgcc3x8wzqrqgpds5rjz5qze3dmfjzrk"><input type="submit" value="Copy" onclick="poppyx()" id="btn-cpy">';
    break;
    
    case "dodge":
 document.base_wallet.reciver_wallet.value="DDBaYyXTGAQ8vW1RjVq7ERerKSpJDDzVQc";
 document.base_wallet.network.value="doge";
 document.getElementById('address').innerHTML='<img src="pix/doge.png" alt="dogecoin" height="200" width="200" border="0" /></a><input type="text" id="add" value="DDBaYyXTGAQ8vW1RjVq7ERerKSpJDDzVQc"><input type="submit" value="Copy" name="depositxx" onclick="poppyx()" id="btn-cpy">';
    break;
    
    case "bnb":
document.base_wallet.reciver_wallet.value="bnb1gf0ktlawy6jqnxkx5jp955ym0ecrs6vm04ujhp";
document.base_wallet.network.value="bnb bep20";
document.getElementById('address').innerHTML='<img src="pix/bnb.png" alt="file format not supported" height="200" width="200" border="0" ><input type="text" id="add" value="bnb1gf0ktlawy6jqnxkx5jp955ym0ecrs6vm04ujhp"><input type="submit" value="Copy" name="depositxx" onclick="poppyx()" id="btn-cpy">';
    break;
    
    case "usdt":
document.base_wallet.reciver_wallet.value="TGhyzUZTriwUZYKobG9MSmo6h1oaf5oLss";
document.base_wallet.network.value="usdt Trc20";
document.getElementById('address').innerHTML='<img src="pix/usdt.png" alt="file format not supported" height="200" width="200" border="0" ><input type="text" id="add" value="TGhyzUZTriwUZYKobG9MSmo6h1oaf5oLss"><input type="submit" value="Copy" name="depositxx" onclick="poppyx()" id="btn-cpy">';
    break;
    
    
    }
        }
        // end


    // script for investment
    function selectcoinx(){
        var plan = document.investment_form.investment_plan.value;
        switch(plan){
        case 'Select A Plan':
        document.myforms.percentage_name.value="0";
        break;
        
        case 'basic_plan':
            document.getElementById('txtx').innerHTML='<input type="number" name="amount" id="amt" placeholder="please enter amount you wish to invest eg $1000" required onkeyup="get_total()" min="50" max="1000">';
        document.myforms.percentage_name.value="125";
        break;
        
        case "silver_plan":
            document.getElementById('txtx').innerHTML='<input type="number" name="amount" id="amt" placeholder="please enter amount you wish to invest eg $1000" required onkeyup="get_total()" min="500" max="3000">';
        document.myforms.percentage_name.value="140";
        break;
        
        case "gold_plan":
            document.getElementById('txtx').innerHTML='<input type="number" name="amount" id="amt" placeholder="please enter amount you wish to invest eg $1000" required onkeyup="get_total()" min="1500" max="1000000">'
        document.myforms.percentage_name.value="12";
        break;
             
        
        }
        }


// script for confirm box
function showAlert() {
    a = confirm('are you sure you want to proceed ?');
    if (a==true) {
        alert('successful');
    }
    else{}
    return a;
}
// end


// script for 
$(document).ready(function(){
    $("#spa").click(function(){
        $(".demmo").slidetoggle(2000);
    });
});



// function openclose(){
//     var m=document.getElementById('memo');
    
//     if (m.style.display=="block") {
//     document.getElementById('memo').style.display="none";
                    
//     }
//     else{
//     document.getElementById('memo').style.display="block";	
//         }
//         }	
//     function faq() {
// alert('hi');
//     }