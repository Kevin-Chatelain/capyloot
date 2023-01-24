function loot() {

    /* CHANCE DE CHAQUE RANG EN % */
    const probabilities = {
        "legendary": 1,
        "superrare": 5,
        "rare": 20,
        "uncommon": 50,
        "common": 100
    }

    const starsNumber = {
        "legendary": 5,
        "superrare": 4,
        "rare": 3,
        "uncommon": 2,
        "common": 1
    }

    let lootedRank = null;
    document.querySelector('.result-stars').innerHTML = "";


    /* CHAQUE RANG EST SE FAIT TESTER EN PARTANT DU PLUS HAUT*/
    for (const [rank, probability] of Object.entries(probabilities)) {
        let probabilityLimit = Math.floor(100 / probability);
        let targetedNumber = Math.floor(probabilityLimit * Math.random());
        let lootNumber = Math.floor(probabilityLimit * Math.random());

        if (lootNumber == targetedNumber) {
            lootedRank = rank;
            break;
        }
    }

    /* RECUPERATION D'UN CAPY AU HASARD DANS LE RANG OBTENU */
    fetch("../js/capybara.json")
        .then(function (reponse) {
            return reponse.json();
        })
        .then(function (data) {
            let capyInRank = data.capydata[0][lootedRank].length;
            let randomInRank = Math.floor(capyInRank * Math.random());

            console.log("You've got " + data.capydata[0][lootedRank][randomInRank].name);
            document.querySelector('.result-name').value = data.capydata[0][lootedRank][randomInRank].name;
            document.querySelector('.result-rarity').value = lootedRank;
            document.querySelector('.result-image').value = data.capydata[0][lootedRank][randomInRank].image;

            for(let i = 0; i < starsNumber[lootedRank]; i++) {
                document.querySelector('.result-stars').innerHTML += `<svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 24 24" stroke="none" fill="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>`;
            }

            let dataName = data.capydata[0][lootedRank][randomInRank].name;
            let dataRank = lootedRank;
            let dataImage = data.capydata[0][lootedRank][randomInRank].image;

            fetch('../../includes/transfer.php', {
                method: 'POST',
                body: JSON.stringify({ name: dataName, rank: dataRank, image: dataImage })
            }).then(res => res.json())
            .then(res => console.log(res));
        });
}

