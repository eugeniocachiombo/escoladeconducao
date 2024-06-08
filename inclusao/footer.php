<style>
footer {
    background-color: #222;
    min-height: 20vh;
    color: #fff;
    padding: 20px;
    text-align: center;
}

.footer-container {
    display: flex;
    justify-content: space-around;
    align-items: center;
}

.footer-logo img {
    width: 100px; /* Ajuste o tamanho da footer-logo conforme necessário */
}

.info {
    flex: 1;
    padding: 0 20px;
}

.info h2 {
    font-size: 18px;
    margin-bottom: 10px;
}

.info p {
    margin-bottom: 5px;
}

.info p i {
    margin-right: 5px;
}
</style>

<footer>
    <div class="footer-container">
        <div class="footer-logo">
            <a href="#" class="logotipo">
                <?php include "../inclusao/logo.php"; ?>
            </a>
        </div>
        <div class="info">
            <h2>Informações da Escola</h2>
            <p><i class="fas fa-map-marker-alt"></i> Endereço: Kimbango, Luanda, Angola</p>
            <p><i class="fas fa-phone"></i> Telefone: (+244) 922-222-222</p>
            <p><i class="far fa-envelope"></i> Email: escoladeconducao@gmail.com</p>
        </div>
        <div class="mapa" >
           <h4 style="font-family: TH Charmonman; font-weight: bold;">Mapa da Escola de condução</h4>
        </div>
    </div>
</footer>



