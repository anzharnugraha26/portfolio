<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('htmlcssjs/jokes/style.css') }}" />
    <title>Jokes Bapack-bapack</title>
</head>

<body>
    <div class="container">
        <h3>Don't Laugh Challenge</h3>
        <div id="joke" class="joke">// Joke goes here</div>
        <button id="jokeBtn" class="btn">Jokes Lain </button>
    </div>
    <script>
        const jokeEl = document.getElementById('joke')
        const jokeBtn = document.getElementById('jokeBtn')

        const jokes = [{
                jk: "Hewan apa yang deket sama teman-temannya? A crab",
            },
            {
                jk: "Sabun, sabun apa yang paling genit ? Sabun colek dong",
            },
            {
                jk: "Uang 100 ribu kalau dilempar jadi apa hayo ? Jadi rebutan pak!",
            },
            {
                jk: "Hewan apa yang ternyata bersaudara? Katak beradik",
            },
            {
                jk: "Siapa pemain bola yang beratnya 3 kg, pak?  Bambang tabung gas",
            },
            {
                jk: "Hewan apa yang kalau diinjek nggak marah? Kera mik ",
            },
            {
                jk: "Kesenian apa yang selalu dilakukan oleh nasabah bank, hayo? Tari tunai",
            },
            {
                jk: "Pak, tahu nggak kenapa kucing nggak di penjara pas jadi maling? Soalnya kucing ga wrong.",
            },
            {
                jk: "Hantu apa yang bisa dilihat setiap hari pak?  Burung hantu",
            },
            {
                jk: "Pocong apa yang paling jadi favorit ibu-ibu? Pocongan harga pak, sudah pasti itu!",
            },
            {
                jk: "Apa persamaan cokelat dan kuburan pak? Sama-sama band terkenal, lah!",
            },
            {
                jk: "Hewan apa yang hobi telat ke sekolah? Kaki seribu. Soalnya kelamaan pakai sepatunya",
            },
            {
                jk: "Hewan apa yang cuma terdiri dari dua huruf? U dan G (udang)",
            },
            {
                jk: "Kota apa yang banyak bapak-bapaknya? Purwodaddy",
            },
            {
                jk: "Gendang apa yang nggak bisa dipukul? Gendang telinga pak",
            },
            {
                jk: "Warna apa yang paling nggak peduli? Biru don't care",
            },
            {
                jk: "Kenapa kita harus berdoa sebelum minum air? Karena di dalam air ada 3 jin. 2 hidroJin dan 1 oksiJin.",
            },
            {
                jk: "Apa bedanya kamu sama kuburan? Kalau kuburan nyeremin. Kalau kamu ngeselin.",
            },
            {
                jk: "Apa yang kalau dipotong malah semakin tinggi?  Celana",
            },
            {
                jk: "Kalau ditutup kelihatan, tapi kalau dibuka malah nggak ada. Apa hayo? Pintu rel kereta api",
            },
        ];

        let currentQuiz = 0
        jokeBtn.addEventListener('click', () => {
            currentQuiz++
            if (currentQuiz < jokes.length) {
                generateJoke()
            } else {
                location.reload()
            }
        })

        generateJoke()

        // USING ASYNC/AWAIT
        function generateJoke() {
            const currentjokeData = jokes[currentQuiz]
            jokeEl.innerText = currentjokeData.jk
        }

    </script>
</body>

</html>
