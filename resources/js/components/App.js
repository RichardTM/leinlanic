import React from 'react';
import ReactDOM from 'react-dom';
import Tarjeta from './Tarjeta'
import Tabla from './Tabla';

const App = () => {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <Tarjeta titulo={'Tarjeta de ejemplo'}>
                        <Tabla />
                    </Tarjeta>
                </div>
            </div>
        </div>
    )
}

if (document.getElementById('app')) {
    ReactDOM.render(<App />, document.getElementById('app'));
}