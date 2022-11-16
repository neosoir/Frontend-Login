import { registerBlockType } from "@wordpress/blocks";

import meta from "../blocks.json";

import edit from "./edit";

registerBlockType( meta, {

    edit,
    save: () => null,

} );