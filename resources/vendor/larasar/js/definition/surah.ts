import { TableDef, TableApi } from "../lib/type";
import { route } from "../lib/ziggy";

const definitions: TableDef[] = [
    {
        name: 'number',
        label: 'Number',
        field: 'number',
        input: "number",
        align: 'center',
    },
    {
        name: 'name_arab',
        label: 'Name arab',
        field: 'name_arab',
        input: "text",
    },
    {
        name: 'name_latin',
        label: 'Name latin',
        field: 'name_latin',
        input: "text",
    },
    {
        name: 'name_id',
        label: 'Name Id',
        field: 'name_id',
        input: "text",
    },
    {
        name: 'ayat_count',
        label: 'Ayat count',
        field: 'ayat_count',
        input: "number",
        align: 'center',
    },
    {
        name: 'place',
        label: 'Place',
        field: 'place',
        input: "text",
    },
    {
        name: 'description',
        label: 'Description',
        field: 'description',
        input: "textarea",
        align: 'left',
    },

];
const api: TableApi = {
    create: route("api.surah.create"),
    update: (id) => route("api.surah.update", { surah: id }),
    delete: (ids) => route("api.surah.delete", { "id": ids }),
}

export { definitions, api };
