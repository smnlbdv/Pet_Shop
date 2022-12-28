class LocalStorage {
    constructor(){
        this.keyName = 'products';
    }

    getProducts()
    {
        const productsLocalStorage = localStorage.getItem(this.keyName);
        if (productsLocalStorage !== null)
        {
            return JSON.parse(productsLocalStorage)
        }
        return [];
    }
    putProducts(id)
    {
        let products = this.getProducts();
        products.push(id);
        localStorage.getItem(this.keyName,JSON.stringify(products));
    }

}

const localStorageI = new LocalStorage();
localStorageI.putProducts('el1');
localStorageI.putProducts('el2');
