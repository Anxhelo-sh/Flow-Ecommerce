<template>
    <div class="feature">
        <div class="container">
            <div class="find-your-modal-wrap">
                <h2 class="text-lg  mb-5 text-transparent sm:text-5xl bg-clip-text bg-white">Find your model. Shop your
                    match.</h2>
                <div class="middle-container flex justify-content-between align-items-center">
                    <div class="grid_item">
                        <div class="find-your-model__step">
                            <span class="step bg-white ">1</span>
                            <p class="paragraph--small color-white">Go to "Settings" and select "General".</p>
                        </div>
                    </div>
                    <div class="grid_item">
                        <div class="find-your-model__step">
                            <span class="step bg-white color-black">2</span>
                            <p class="paragraph--small color-white">Then tap on "About".</p>
                        </div>
                    </div>
                    <div class="grid_item">
                        <div class="find-your-model__step">
                            <span class="step bg-white color-black">3</span>
                            <p class="paragraph--small color-white">Tap on the "M" model number. It'll transform into the
                                "A" model number you need to get the right case fit.</p>
                        </div>
                    </div>
                </div>
                <div class="find-your-model-form">
                    <form action="/search" method="get" role="search" class="aada search-bara" style="position: relative;">
                        <div class="form-group">
                            <input type="search" name="q" placeholder="A1895" autocomplete="off">
                        </div>
                        <ul class="search-results" style="position: absolute; left: 0px; top: 52px; display: none;"></ul>
                    </form>
                </div>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: "FindModel"
}
</script>

<style scoped>
.feature{
    padding-bottom: 45px;
}
.find-your-modal-wrap {
    background: #444;
    height: 680px;
    padding: 54px 32px;
    text-align: center;
    background-size: auto 200px;
    background-position: center bottom;
    background-repeat: no-repeat;
    border-radius: 30px;
}

.middle-container {
    display: flex;
    max-width: 1000px;
    margin: 64px auto 28px;
    justify-content: space-between;
}

.find-your-model__step .step {
    flex-shrink: 0;
    width: 36px;
    height: 36px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    margin: 0 auto 20px;
}

.find-your-model__step {
    width: 100%;
    display: flex;
    flex-flow: column wrap;
}

p paragraph-small {
    font-size: 16px;
    line-height: 22px;
}

.grid_item {
    width: 33.33%;
    padding: 0 12px;
}

.color-white {
    color: white;
}

.color-black {
    color: black;
}

input {
    width: 40%;
    position: relative;
    border: none;
    border-radius: 25px;
    padding: 12px 90px 12px 24px;
}

svg {
    overflow: hidden;
    vertical-align: middle
}

p {
    display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
}

@media screen and (max-width: 1024px){
    .find-your-modal-wrap {
        padding: 32px 16px;
        text-align: center;
        height: auto;
        background: #444;
    }
    .find-your-modal-wrap h2, .help_wrap h2 {
        font-size: 36px;
        line-height: 38px;
        text-align: center;
        letter-spacing: -.72px;
    }
    .middle-container {
        margin: 48px auto;
        flex-wrap: wrap;
    }
    .grid_item {
        width: 50%;
        padding: 0 12px;
    }

    .find-your-model__step p {
        max-width: 100%;
        width: 100%;
        text-align: left;
        line-height: 18px;
        letter-spacing: -.44px;
        margin: 0;
        opacity: .5;
    }

    .find-your-model__step {
        flex-flow: row nowrap;
    }
    .find-your-model__step .step {
        margin-right: 50px !important;
    }
    .find-your-model-form {
        margin: 0 auto;
    }
}

@media screen and (max-width: 768px){
.grid_item{
    width: 100%;
    height: auto;
}
    .middle-container {
        flex-direction: column;
        align-content: center;
    }
input{
    width:100%;
}
}


</style>
