<template>
    <div class="sidebar">
        <ul class="sidebar-list">
            
            <li><img src="/images/profile.png"/></li>
            <div class="power-options">
                <li><b-icon icon="bell"></b-icon></li>
                <li><b-icon icon="person"></b-icon></li>
                <li><b-icon icon="tree"></b-icon></li>
                <li><b-icon icon="pie-chart"></b-icon></li>
            </div>
            <div class="logout">
                <li><b-icon icon="power"></b-icon></li>
            </div>
        </ul>
    </div>

</template>

<script>
export default {
    
}
</script>

<style scoped>
    .sidebar{
        position: absolute;
        background-color: #1a202c;
        height: 100vh;
    }

    .sidebar-list{
        list-style: none;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        width: 100%;
        justify-content: space-between;
        padding-left: 3px;
        padding-right: 3px;
        padding-top: 30px;
    }
    

    

    .sidebar-list img{
        border-radius: 50%;
        width: 60px;
        height: 60px;
        border: 2px #fff solid;
    }
    .sidebar-list svg {
        fill: white;
        width: 20px;
        height: 20px;
    }

    .power-options{
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    .power-options li {
        padding-top: 1rem;
        padding-bottom: 1rem;
    }
    .logout{
        padding-bottom: 1rem;
    }
    .sidebar-list li:hover svg{
        fill: #FF00FF;
    }

</style>