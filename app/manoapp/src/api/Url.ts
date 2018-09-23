export default class Url{

    constructor(){}
    
    baseUrl = 'http://manocamera.com/api/'

    test(){
        return this.baseUrl + 'test.php'
    }

    listAllProduct(){
        return this.baseUrl + 'list_all_product.php'
    }
}