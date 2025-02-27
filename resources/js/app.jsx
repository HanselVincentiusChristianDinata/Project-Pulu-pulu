import { BrowserRouter } from "react-router-dom";
import ReactDOM from "react-dom/client";
import App from "./page/App";

ReactDOM.createRoot(document.getElementById('app')).render(
    <BrowserRouter>
    <App/>
    </BrowserRouter>
)