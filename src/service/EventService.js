import axios from 'axios';

export default class EventService {

	getEvents() {
		return axios.get('assets/demo/data/scheduleevents.json').then(res => res.data.data);
	}
}