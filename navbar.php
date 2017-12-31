<header>
    <img id="logo" src="img/x.png">
    <span id="nome-revista">TRUSS</span>
    <span id="descricao"> A DESIGN AND SCIENCE MAGAZINE</span>
</header>

<nav class="menu">
    <ul>
        <li>ARQUIVO</li>
        <li>DIVULGAÇÕES</li>
        <li><a href="loja.php">LOJA</a></li>
    </ul>
</nav>

<style>
    header {
        font-family: "PT Mono";
        grid-area: h;
        background-color: white;
        color: black;
        display: grid;
        grid-template-columns: repeat(12, 1fr);
        grid-template-rows: 10vh;
        position: fixed;
        top:0;
        left:0;
        border-bottom: 2px solid black;
        z-index: 99999;
    }

    #logo {
        width: 3.5em;
        position: absolute;
        padding-top: 1em;
        padding-left: 1em;
    }

    #nome-revista {
        grid-column: 1/2;
        align-self: center;
        font-size: 2.5rem;
        padding-left: 2.2em;
    }

    #descricao {
        grid-column: 5/8;
        align-self: center;
        justify-self: center;
        padding-left: 4em;
        font-size: 1rem;
    }

    .menu {
        grid-area: m;
        background-color: transparent;
        font-size: 1.2rem;
        position: fixed;
        top: 10%;
        padding-left: 0.5em;
        padding-top: 0.8em;
    }

    .menu ul {
        font-family: "PT Mono";
        font-size: 1rem;
        list-style-type: none;
        padding: 0;
    }

    .menu li {
        padding-bottom: 0.5em;
    }

    .menu a {
        text-decoration: none;
        color: #000;
    }

    .menu a:hover {
        text-decoration: underline;
    }
</style>