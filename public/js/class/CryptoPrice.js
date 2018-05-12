class CryptoPrice {
    constructor() {
        this.currency = 'EUR';
        this.limit    = '10';
    }

    // Récupère les données de l'api coinmarketcap
    async getData() {
        const resp = await fetch(`https://api.coinmarketcap.com/v2/ticker/?convert=${this.currency}&limit=${this.limit}`);
        const respData = await resp.json();

        return respData;
    }
}