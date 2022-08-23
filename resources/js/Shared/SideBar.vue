<template>
    <aside :class="`${is_expanded ? 'is-expanded' : ''}`">
        <div class="logo">
            <img class="image-logo" src="https://elanta.app/nazar/app_ollo.1.2/images/logo-md.png" alt="logo">
        </div>

        <div class="menu-toggle-wrap">
            <button class="menu-toggle" @click="is_expanded = !is_expanded">
                <span class="material-icons">keyboard_double_arrow_right</span>
            </button>
        </div>

        <div class="menu">
            <Link href="/admin" class="button" :class="{ 'active': $page.url === '/admin' }">
                <span class="material-icons">home</span>
                <span class="text">Home</span>
            </Link>
            <h3>Services</h3>
            <div>
                <Link href="/admin/add-product" class="button" :class="{ 'active': $page.component === 'Admin/CreateProduct' }">
                    <div class="button-body">
                        <span class="material-icons">inventory</span>
                        <span class="text">Create Product</span>
                    </div>

                    <div class="button button-arrow">
                        <span class="material-icons"> add </span>
                    </div>
                </Link>

            </div>


        </div>

        <div class="flex"></div>

        <div class="sidebar-footer">
            <Link href="/settings" class="button">
                <span class="material-icons">settings</span>
            </Link>
            <Link href="/logout" method="post" as="button" class="button" exact>
                <span class="material-icons ">power_settings_new</span>
            </Link>
        </div>
    </aside>
</template>

<script>

import {Link} from '@inertiajs/inertia-vue3' ;


export default {
    components: {
        Link,
    },
    data() {
        return {
            omsDropdown: false,
            is_expanded: true,
            applications: [],
        }
    },
    methods: {}
}
</script>
<style lang="scss" scoped>
aside {
    display: flex;
    flex-direction: column;
    background-color: var(--dark);
    color: var(--light);
    width: calc(2rem + 32px);
    overflow: hidden;
    min-height: 93vh;
    padding: 1rem;
    transition: 0.2s ease-in-out;

    .flex {
        flex: 1 1 0;
    }

    .logo {
        margin-bottom: 1rem;

        img {
            width: 2rem;
        }
    }
    .active{
        border-right: 4px solid var(--primary);
    }

    .menu-toggle-wrap {
        display: flex;
        justify-content: flex-end;
        margin-bottom: 1rem;
        position: relative;
        top: 0;
        transition: 0.2s ease-in-out;

        .menu-toggle {
            transition: 0.2s ease-in-out;

            .material-icons {
                font-size: 2rem;
                color: var(--light);
                transition: 0.2s ease-out;
            }

            &:hover {
                .material-icons {
                    color: var(--primary);
                    transform: translateX(0.5rem);
                }
            }
        }
    }

    h3, .button .text {
        opacity: 0;
        transition: opacity 0.3s ease-in-out;
    }

    .sidebar-footer {
        transition: opacity 0.3s ease-in-out;
        margin: 0.5rem;
        gap: 3rem;

        a {
            color: white;
        }

    }

    h3 {
        color: var(--grey);
        font-size: 0.875rem;
        margin: 1rem 0 1rem 1rem;
        text-transform: uppercase;
    }

    .menu {
        margin: 0 -1rem;

        .button {
            display: flex;
            width: 100%;
            align-items: center;
            text-decoration: none;
            transition: 0.2s ease-in-out;
            padding: 0.7rem 1rem;

            .button-body {
                display: flex;
                width: 100%;
                align-items: center;
                text-decoration: none;
                transition: 0.2s ease-in-out;
            }

            .button-arrow {
                justify-content: flex-end;
                padding-left: 1.3rem;
            }

            .material-icons {
                font-size: 2rem;
                color: var(--light);
                transition: 0.2s ease-in-out;
            }

            .text {
                color: var(--light);
                transition: 0.2s ease-in-out;
            }

            &:hover {
                background-color: var(--dark-alt);

                .material-icons, .text {
                    color: var(--primary);
                }
            }

            &.router-link-exact-active {
                background-color: var(--dark-alt);
                border-right: 5px solid var(--primary);

                .material-icons, .text {
                    color: var(--primary);
                }
            }
        }
    }

    .footer {
        opacity: 0;
        transition: opacity 0.3s ease-in-out;

        p {
            font-size: 0.875rem;
            color: var(--grey);
        }
    }

    &.is-expanded {
        width: var(--sidebar-width);

        .menu-toggle-wrap {
            top: -3rem;

            .menu-toggle {
                transform: rotate(-180deg);
            }
        }

        h3, .button .text {
            opacity: 1;
        }

        .button {
            .material-icons {
                margin-right: 1rem;
            }
        }

        .footer {
            opacity: 0;
        }

        .sidebar-footer {
            display: flex;
            justify-content: space-around;
            transition: opacity 0.3s ease-in-out;
            margin: 0.5rem;

        }
    }

    @media (max-width: 1024px) {
        position: absolute;
        z-index: 99;
    }
}
</style>
