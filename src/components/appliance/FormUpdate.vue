<template>
    <div :class="{ hidden: noAlert }" class="alert mb-3">
        <div v-if="hasError" class="mt-7 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Error! </strong>
        <span class="block sm:inline">{{ status }}</span>
        </div>
    
        <div v-else class="mt-7 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Success! </strong>
        <span class="block sm:inline">{{ status }}</span>
        </div>
    </div>

    <form class="flex flex-wrap gap-1 justify-between">
        <div class="relative z-0 md:w-[33%] w-full mb-6 group">
            <input type="text" name="name" v-model="name" id="name"
                class="block py-2.5 px-4 bg-slate-900 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required />
            <label for="name"
                class="z-10 left-4 peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Appliance Name</label>
        </div>

        <div class="relative z-0 md:w-[33%] w-full mb-6 group">
            <select name="category" v-model="category" id="category" class="px-4 bg-slate-900 block py-2.5 px-4 bg-slate-900 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required>
                <option value="" disabled selected hidden>Select an Category</option>
                <option value="Adega">Adega</option>
                <option value="Bebedouro e Purificador">Bebedouro e Purificador</option>
                <option value="Centrífuga de Roupas">Centrífuga de Roupas</option>
                <option value="Cervejeira Residencial">Cervejeira Residencial</option>
                <option value="Coifa e Depurador de Ar">Coifa e Depurador de Ar</option>
                <option value="Cooktop">Cooktop</option>
                <option value="Fogão">Fogão</option>
                <option value="Forno">Forno</option>
                <option value="Freezer">Freezer</option>
                <option value="Frigobar">Frigobar</option>
                <option value="Geladeira / Refrigerador">Geladeira / Refrigerador</option>
                <option value="Lava e Seca">Lava e Seca</option>
                <option value="Lava-Louças">Lava-Louças</option>
                <option value="Máquina de Costura">Máquina de Costura</option>
                <option value="Máquina de Lavar">Máquina de Lavar</option>
                <option value="Micro-ondas">Micro-ondas</option>
                <option value="Secadora de Roupas">Secadora de Roupas</option>
                <option value="Tanquinho">Tanquinho</option>
            </select>
        </div>

        <div class="relative z-0 md:w-[33%] w-full mb-6 group">
            <select name="brand" v-model="brand" id="brand" class="px-4 bg-slate-900 block py-2.5 px-4 bg-slate-900 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required>
                <option value="" disabled selected hidden>Select an Brand</option>
                <option value="A PARTS">A PARTS</option>
                <option value="Agratto">Agratto</option>
                <option value="Alado">Alado</option>
                <option value="Aliança">Aliança</option>
                <option value="ARNO">ARNO</option>
                <option value="Atlas">Atlas</option>
                <option value="Benter">Benter</option>
                <option value="Brasforma">Brasforma</option>
                <option value="Brastemp">Brastemp</option>
                <option value="Brastemp">Brastemp</option>
                <option value="Consul">Consul</option>
                <option value="Burdog">Burdog</option>
                <option value="Chamalar">Chamalar</option>
                <option value="CHAMALUX">CHAMALUX</option>
                <option value="Clean Capas">Clean Capas</option>
                <option value="Colormaq">Colormaq</option>
                <option value="CONSUL">CONSUL</option>
                <option value="Consul/Brastemp">Consul/Brastemp</option>
                <option value="Continental">Continental</option>
                <option value="CONTUFLEX">CONTUFLEX</option>
                <option value="Covitech">Covitech</option>
                <option value="CP PLACAS">CP PLACAS</option>
                <option value="CP Placas Eletrônicas">CP Placas Eletrônicas</option>
                <option value="Dako">Dako</option>
                <option value="DISMAR">DISMAR</option>
                <option value="Electrolux">Electrolux</option>
                <option value="emicol">emicol</option>
                <option value="Emmeti">Emmeti</option>
                <option value="Esmaltec">Esmaltec</option>
                <option value="FISCHER">FISCHER</option>
                <option value="Fogatti">Fogatti</option>
                <option value="Formalivre">Formalivre</option>
                <option value="Galvocalhas">Galvocalhas</option>
                <option value="GDN CAPAS">GDN CAPAS</option>
                <option value="ILPEA">ILPEA</option>
                <option value="Itatiaia">Itatiaia</option>
                <option value="LG">LG</option>
                <option value="MIDEA">MIDEA</option>
                <option value="Mold">Mold</option>
                <option value="mondial">mondial</option>
                <option value="Mueller">Mueller</option>
                <option value="Nardelli">Nardelli</option>
                <option value="NAÇÃO DETAIL">NAÇÃO DETAIL</option>
                <option value="OU">OU</option>
                <option value="PANASONIC">PANASONIC</option>
                <option value="PEÇAS BRASTEMP / CONSUL">PEÇAS BRASTEMP / CONSUL</option>
                <option value="PHILCO">PHILCO</option>
                <option value="Progás">Progás</option>
                <option value="Samsung">Samsung</option>
                <option value="SEMELHANTE ">SEMELHANTE </option>
                <option value="Suggar">Suggar</option>
                <option value="TND">TND</option>
                <option value="Tramontina">Tramontina</option>
                <option value="Valtec Shop">Valtec Shop</option>
                <option value="VENAX">VENAX</option>
                <option value="Venâncio">Venâncio</option>
                <option value="Viag Capas">Viag Capas</option>
                <option value="Vida Pratika">Vida Pratika</option>
                <option value="VIP CAPAS">VIP CAPAS</option>
                <option value="Wanke">Wanke</option>
                <option value="WHIRLPOOL">WHIRLPOOL</option>
            </select>
        </div>

        <div class="relative z-0 md:w-[49.6%] w-full mb-6 group">
            <select name="color" v-model="color" id="color" class="px-4 bg-slate-900 block py-2.5 px-4 bg-slate-900 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required>
                <option value="" disabled selected hidden>Select an Color</option>
                <option value="Branco">Branco</option>
                <option value="Preto">Preto</option>
                <option value="Cinza">Cinza</option>
                <option value="Vermelho">Vermelho</option>
            </select>
        </div>

        <div class="relative z-0 md:w-[49.6%] w-full mb-6 group">
            <select name="voltage" v-model="voltage" id="voltage" class="px-4 bg-slate-900 block py-2.5 px-4 bg-slate-900 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required>
                <option value="" disabled selected hidden>Select an Voltage</option>
                <option value="110v">110v</option>
                <option value="220v">220v</option>
                <option value="Bivolt">Bivolt</option>
            </select>
        </div>

        <div class="relative z-0 md:w-[33%] w-full mb-6 group">
            <input type="text" v-model="weight" name="weight" id="weight"
                class="block py-2.5 px-4 bg-slate-900 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required />
            <label for="weight"
                class="z-10 left-4 peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Weight</label>
        </div>

        <div class="relative z-0 md:w-[33%] w-full mb-6 group">
            <input type="number" v-model="height" name="height" id="height"
                class="block py-2.5 px-4 bg-slate-900 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required />
            <label for="height"
                class="z-10 left-4 peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Height</label>
        </div>

        <div class="relative z-0 md:w-[33%] w-full mb-6 group">
            <input type="number" v-model="depth" name="depth" id="depth"
                class="block py-2.5 px-4 bg-slate-900 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required />
            <label for="depth"
                class="z-10 left-4 peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Depth</label>
        </div>

        <div class="relative z-0 w-full mb-6 group">
            <textarea type="number" v-model="description" name="description" id="description"
                class="resize-none h-20 block py-2.5 px-4 bg-slate-900 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                placeholder=" " required ></textarea>
            <label for="description"
                class="z-10 left-4 peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Description</label>
        </div>

        <div  @click="updateAppliances()"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</div>
    </form>
</template>

<script lang="ts">
    import { defineComponent } from 'vue'
    import axios from 'axios'

    export default defineComponent({
        name: 'FormView',
        data(){
            return {
                appliance: {},
                noAlert: true,
                hasError: false,
                status: '',
                alert: '',

                //data
                name: '',
                description: '',
                category: '',
                brand: '',
                color: '',
                voltage: '',
                weight: '',
                height: 0,
                width: 0,
                depth: 0    
            }
        },
        mounted() {
            this.findAppliances()
        },
        methods: {
            findAppliances: function(){
                axios.get(`/appliances/${this.$route.params.id}`)
                .then((response) => {
                    this.appliance = response.data

                    this.name = response.data.name
                    this.description = response.data.description
                    this.category = response.data.category
                    this.brand = response.data.brand
                    this.color = response.data.color
                    this.voltage = response.data.voltage
                    this.weight = response.data.weight
                    this.height = response.data.height
                    this.width = response.data.width
                    this.depth = response.data.depth
                })
                .catch((error) => {
                    console.log(error)
                })
            },
            updateAppliances: function(){
                const current = this

                axios.put(`/appliances/${this.$route.params.id}`,{
                    name: this.name, 
                    description: this.description, 
                    category: this.category, 
                    brand: this.brand, 
                    color: this.color, 
                    voltage: this.voltage, 
                    weight: this.weight, 
                    height: this.height, 
                    width: this.width, 
                    depth: this.depth 
                })
                .then((response) => {
                    console.log(response)
                    current.showAlert(false, response.data)
                    current.resetForm()
                })
                .catch((error) => {
                    console.log(error)
                    current.showAlert(true, error.response.data.message)
                })
            },
            resetForm: function(){
                this.name = ''
                this.description = ''
                this.category = ''
                this.brand = ''
                this.color = ''
                this.voltage = ''
                this.weight = ''
                this.height = 0
                this.width = 0
                this.depth = 0 
            },
            showAlert: function(error: boolean, status: string){
                this.noAlert = false
                const current = this
        
                if(error){
                    this.hasError = true
                } else {
                    this.hasError = false
        
                    setTimeout(function(){
                        current.noAlert = true
                    }, 3000)
                }   
        
                this.status = status
            }
        }
    })
</script>