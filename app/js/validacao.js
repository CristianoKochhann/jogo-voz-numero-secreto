function verificaSeOChutePossuiValorValido(chute) {
    const numero = +chute;

    if (chuteForInvalido(numero)) {
        elementoChute.innerHTML +='<div>Valor Inválido</div>';
        return
    }

    if (numeroForMaiorOuMenorQueOValorPermitido(numero)) { 
        elementoChute.innerHTML += `<div>Valor inválido, o Número precisa estar entre ${menorValor} e ${maiorValor}</div>`;
        return
    }

    if (numero === numeroSecreto) {
        document.body.innerHTML = `
            <h2>Você acertou!</h2>
            <h3>O número Secreto era ${numeroSecreto}</h3>

            <button id="jogar-novamente" class="btn-jogar">Jogar Novamente</button>`;

    } else if (numero > numeroSecreto) {
        elementoChute.innerHTML += `
            <div>O Número Secreto é Menor <i class="fa-sharp fa-solid fa-arrow-down fa-bounce"></i></div>
        `;
    } else {
        elementoChute.innerHTML += `
            <div>O Número Secreto é Maior <i class="fa-sharp fa-solid fa-arrow-up fa-bounce"></i></div>
        `;
    }
}

function numeroForMaiorOuMenorQueOValorPermitido(numero) {
    return numero < menorValor || numero > maiorValor;
}

function chuteForInvalido(numero) {
    return Number.isNaN(numero);
}

document.body.addEventListener('click', evento => {
    if(evento.target.id == 'jogar-novamente'){
        window.location.reload();
    }
})
