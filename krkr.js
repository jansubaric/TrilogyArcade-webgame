const statusDisplay = document.querySelector('.game--status');

let igraAktivna = true;
let trenutni = "X";
let stanjeIgre = ["", "", "", "", "", "", "", "", ""];

const porukaP = () => `Pobjednik je igrač ${trenutni}!`;
const porukaN = () => `Neriješeno!`;
const trenutniRed = () => `Na redu je igrač ${trenutni}.`;

statusDisplay.innerHTML = trenutniRed();

const uvjetiPobjede = [
    [0, 1, 2],
    [3, 4, 5],
    [6, 7, 8],
    [0, 3, 6],
    [1, 4, 7],
    [2, 5, 8],
    [0, 4, 8],
    [2, 4, 6]
];

function odigranaCelija(kliknuta, kliknutaIndex) {
    stanjeIgre[kliknutaIndex] = trenutni;
    kliknuta.innerHTML = trenutni;
}

function promjenaIgraca() {
    trenutni = trenutni === "X" ? "O" : "X";
    statusDisplay.innerHTML = trenutniRed();
}

function provjeraRez() {
    let pobijedjeno = false;
    for (let i = 0; i <= 7; i++) {
        const zaPobjedu = uvjetiPobjede[i];
        let a = stanjeIgre[zaPobjedu[0]];
        let b = stanjeIgre[zaPobjedu[1]];
        let c = stanjeIgre[zaPobjedu[2]];
        if (a === '' || b === '' || c === '') {
            continue;
        }
        if (a === b && b === c) {
            pobijedjeno = true;
            break
        }
    }

    if (pobijedjeno) {
        statusDisplay.innerHTML = porukaP();
        igraAktivna = false;
        return;
    }

    let roundDraw = !stanjeIgre.includes("");
    if (roundDraw) {
        statusDisplay.innerHTML = porukaN();
        igraAktivna = false;
        return;
    }

    promjenaIgraca();
}

function handleCellClick(kliknutaEvent) {
    const kliknuta = kliknutaEvent.target;
    const kliknutaIndex = parseInt(kliknuta.getAttribute('data-cell-index'));

    if (stanjeIgre[kliknutaIndex] !== "" || !igraAktivna) {
        return;
    }

    odigranaCelija(kliknuta, kliknutaIndex);
    provjeraRez();
}

function handleRestartGame() {
    igraAktivna = true;
    trenutni = "X";
    stanjeIgre = ["", "", "", "", "", "", "", "", ""];
    statusDisplay.innerHTML = trenutniRed();
    document.querySelectorAll('.cell').forEach(cell => cell.innerHTML = "");
}

document.querySelectorAll('.cell').forEach(cell => cell.addEventListener('click', handleCellClick));
document.querySelector('.game--restart').addEventListener('click', handleRestartGame);