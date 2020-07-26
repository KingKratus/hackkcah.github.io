function CriaRequest() {  try{ request = new XMLHttpRequest(); }catch (IEAtual){ try{  request = new ActiveXObject("Msxml2.XMLHTTP"); }catch(IEAntigo){ try{ request = new ActiveXObject("Microsoft.XMLHTTP"); }catch(falha){ request = false; } } }  if (!request) alert("Seu Navegador não suporta Ajax!"); else return request; }

function getlogin() {
    var login  = document.getElementById("login").value;
    var salvalogin = document.getElementById("salvalogin");
    var xmlreq = CriaRequest();
    var end = "/php/recuperando.php?login=" + login + "&tipo=1";
    xmlreq.open("GET", end, true);
    xmlreq.onreadystatechange = function(){
        if (xmlreq.readyState == 4) {
            if (xmlreq.status == 200) {
              if (xmlreq.responseText == "1"){
                document.getElementById("recuperandologin").style.display = "none";
                document.getElementById("recuperandoemail").style.display = "block";
                salvalogin.innerHTML = login;
                }else{
                alert("Nenhuma conta com esse login encontrada.");
              }
            }else{
              alert(xmlreq.statusText);
            }
        }
    };
    xmlreq.send(null);
}


function getemail() {
    var login  = document.getElementById('salvalogin').innerHTML;
    var email  = document.getElementById("email").value;
    var xmlreq = CriaRequest();
    var end = "/php/recuperando.php?login=" + login + "&email=" + email + "&tipo=2";
    xmlreq.open("GET", end, true);
    xmlreq.onreadystatechange = function(){
        if (xmlreq.readyState == 4) {
            if (xmlreq.status == 200) {
              alert(xmlreq.responseText);

              if (xmlreq.responseText == "falha"){
                alert("Falha ao tentar enviar email, contate algum administrador.");
              }
              if (xmlreq.responseText == "enviado"){
                alert("Se os dados estiver corretos um email foi enviado para você, verifique sua caixa de entrada e a caixa de spam.");
              }
              if (xmlreq.responseText == "nada"){
                alert("Se os dados estiver corretos um email foi enviado para você, verifique sua caixa de entrada e a caixa de spam.");
              }


            }else{
              alert(xmlreq.statusText);
            }
        }
    };
    xmlreq.send(null);
}
