<template>
    <div class="container">
        <div class="row">
            <table class="table table-hover table-condensed table-bordered">
                <thead>
                    <tr>
                        <th>Sender</th>
                        <th>Suject</th>
                        <th>Email</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="message in Messages" :key="message.id">
                        <td>{{message.Name}}</td>
                        <td>{{message.Subject}}</td>
                        <td>{{message.Email}}</td>
                        <td>{{message.Message}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    export default{
        data(){
            return{
                Messages:[]
            }
        },
        methods:{
            getMessages(){
                axios.get('/Get/AllMessages').then((response)=>{
                    this.Messages=response.data
                })
            }
        },
        created(){
            this.getMessages()
        }
    }
</script>
