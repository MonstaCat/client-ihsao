const BASE_URL			= "http://localhost/ihsao";
const BASE_API 			= "http://localhost:3000/api";
const API_ORIGIN		= `http://localhost:3000`;
var API_ADMIN 			= `${BASE_API}/admin`;
var API_PESERTA 		= `${BASE_API}/peserta`;
var API_ADMIN 			= `${BASE_API}/admin`;
var API_LOMBA 			= `${BASE_API}/lomba`;
var API_TIM 			= `${BASE_API}/tim`;
var API_SEKOLAH 		= `${BASE_API}/sekolah`;
var API_SOAL_MULTIPLE 	= `${BASE_API}/soal/multiple`;
var API_SOAL_KASUS 		= `${BASE_API}/soal/kasus`;

var API_KEY = localStorage.getItem( `token` ) ?? null;