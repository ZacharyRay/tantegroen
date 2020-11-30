// Import all the files used in utils
import {testExp} from "./utils/utils.js";
import {headerExp} from "./utils/header";

//export to index
export const exp = function exports() {
    testExp();
    headerExp();
}
