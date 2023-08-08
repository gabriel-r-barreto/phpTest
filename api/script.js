var scanner = new Instascan.Scanner({ video: document.getElementById('preview'), scanPeriod: 5, mirror: false });
var labelElement = document.getElementById('myLabel');
var labelElement2 = document.getElementById('myLabel2');
var teste = '';

scanner.addListener('scan', function (content) {
    //alert(content);
    teste = content;
    /* labelElement.textContent = teste; */
    labelElement2.value = teste;
    //window.location.href=content;
});
Instascan.Camera.getCameras().then(function (cameras) {
    /* alert(cameras.length); */

    alert(cameras.length);

    if (cameras.length > 0) {
        scanner.start(cameras[1]);
         $('[name="options"]').on('change', function () {
            if ($(this).val() == 1) {
                if (cameras[0] != "") {
                    scanner.start(cameras[0]);
                } else {
                    alert('No Front camera found!');
                }
            } else if ($(this).val() == 2) {
                if (cameras[1] != "") {
                    scanner.start(cameras[1]);
                } else {
                    alert('No Back camera found!');
                }
            } else if ($(this).val() == 3) {
                if (cameras[2] != "") {
                    scanner.start(cameras[2]);
                } else {
                    alert('No Back camera found!');
                }
            } else if ($(this).val() == 4) {
                if (cameras[3] != "") {
                    scanner.start(cameras[3]);
                } else {
                    alert('No Back camera found!');
                }
            } else if ($(this).val() == 5) {
                if (cameras[4] != "") {
                    scanner.start(cameras[4]);
                } else {
                    alert('No Back camera found!');
                }
            }
        
        });
    } else {
        console.error('No cameras found.');
        alert('No cameras found.');
    } 
}).catch(function (e) {
    console.error(e);
    alert(e);
});



/* registro de entrada e saída do veículo */

function func_reg(){

    var reg = window.confirm("Salvar Placa?");

    if (reg) {
        labelElement.textContent = teste;
        labelElement2.value = '';
        
    } else {
        alert("Você escolher cancelar.")
        labelElement2.value = '';
    }

}

function updateLabelForSmallScreens() {
    const cam1Label = document.getElementById('cam1');
    const cam2Label = document.getElementById('cam2');
    const cam3Label = document.getElementById('cam3');
    const cam4Label = document.getElementById('cam4');
    const cam5Label = document.getElementById('cam5');

    if (window.matchMedia('(max-width: 900px)').matches) {
        cam1Label.textContent = '01';
        cam2Label.textContent = '02';
        cam3Label.textContent = '03';
        cam4Label.textContent = '04';
        cam5Label.textContent = '05';

    } else {
        cam1Label.textContent = 'Câmera 1';
        cam2Label.textContent = 'Câmera 2';
        cam3Label.textContent = 'Câmera 3';
        cam4Label.textContent = 'Câmera 4';
        cam5Label.textContent = 'Câmera 5';
    }
}

// Execute a função quando a página carregar e quando a janela for redimensionada
updateLabelForSmallScreens();
window.addEventListener('resize', updateLabelForSmallScreens);