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

// USING .then()
// function generateJoke() {
//   const config = {
//     headers: {
//       Accept: 'application/json',
//     },
//   }

//   fetch('https://icanhazdadjoke.com', config)
//     .then((res) => res.json())
//     .then((data) => {
//       jokeEl.innerHTML = data.joke
//     })
// }