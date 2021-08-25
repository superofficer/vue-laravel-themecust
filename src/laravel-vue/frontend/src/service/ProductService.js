import axios from 'axios';

export default class ProductService {

    getProductsSmall() {
		return axios.get('assets/demo/data/products-small.json').then(res => res.data.data);
	}

	getProducts() {
		return axios
		  .get("http://localhost:8000/api/products")
		  .then(res => res.data)
		  .catch(err => console.error(err));
    }

    getProductsWithOrdersSmall() {
		return axios.get('assets/demo/data/products-orders-small.json').then(res => res.data.data);
	}
}
