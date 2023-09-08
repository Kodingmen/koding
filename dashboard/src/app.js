import './bootstrap.js';

import {createApp} from "vue";
import Router from '@/router';
import AppLayout from "@/views/home/layouts/AppLayout.vue";

const app = createApp(AppLayout);

app.use(Router);

window.app = app;