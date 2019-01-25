<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            window.Echo.channel('status')
            .listen('.NewLogin', (event) => {
                console.log("event", event);
                console.log(window.location.hostname)
                console.log(event.message);
            })
        }
    }
</script>
