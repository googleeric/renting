<template>
  <transition name="fade">
		<div v-if="show" class="preloader">
			<div class="logopre">
                <img src="/img/footer-logo.png" class="logo-pre" alt="">
                <img src="/img/30.gif" class="logo-gif">
            </div>
		</div>
	</transition>
</template>

<script>
export default {
	name: 'preloader',
	data(){
		return {
			show: true
		}
	},
	mounted(){
		if(Boolean(this.show)) this.showToggle()
	},
	methods: {
		showToggle(){
			setTimeout(() => {
				this.show = false
			}, 1500)
		}
	}
}
</script>

<style>
.preloader{
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	position: fixed;
	width: 100%;
	height: 100%;
	background: white;
	z-index: 9;
}
.logopre{
    position: relative;
}
	.logopre .logo-gif{
        z-index: 10;
        background-repeat: no-repeat;
        position: absolute;
        bottom: -2rem;
        left: 4.3rem;
    }
    .logopre .logo-pre{
        z-index: 11;
        background-repeat: no-repeat;
        width: 20rem;
    }
</style>