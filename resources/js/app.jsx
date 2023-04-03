
import './bootstrap';

import '../css/app.css'

import ReactDOM from 'react-dom/client';
import Home from './Page/Home';
import Paper from './Page/Paper';


if (document.getElementById('paper_component')) {
     // console.log(document.getElementById('paper_component').id)
     ReactDOM.createRoot(document.getElementById('paper_component')).render(
          <Paper />
     );
} else {
     ReactDOM.createRoot(document.getElementById('app')).render(
          <Home />
     );
}
