<template>
    <div class="todos">
        <div class="todos-sidebar">
            <div class="todos-sidebar__header">
                <button class="todos-sidebar__add-task">Add Task</button>
                <a href="#" class="todos-sidebar__all-filters">
                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M2.6 1.22797H15.4C16.28 1.22797 17 1.9517 17 2.83626V12.486C17 13.3706 16.28 14.0943 15.4 14.0943H2.6C1.72 14.0943 1 13.3706 1 12.486V2.83626C1 1.9517 1.72 1.22797 2.6 1.22797Z"
                              stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M17 2.83624L9 7.30372L1 2.83624" stroke="white" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                    <span>All</span>
                </a>
            </div>
            <div class="todos-sidebar__filters">
                <div class="todos-sidebar__filters-list">
                    <a href="#" class="todos-sidebar__filters-item">
                        <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M10 0.5L12.781 5.76604L19 6.61567L14.5 10.7124L15.562 16.5L10 13.766L4.438 16.5L5.5 10.7124L1 6.61567L7.219 5.76604L10 0.5V0.5Z"
                                  stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <span>Starred</span>
                    </a>
                    <a href="#" class="todos-sidebar__filters-item">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z"
                                  stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9.5 13V9" stroke="white" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                        <span>Important</span>
                    </a>
                    <a href="#" class="todos-sidebar__filters-item">
                        <svg width="15" height="11" viewBox="0 0 15 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M14 1L5.0625 10L1 5.90909" stroke="white" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                        </svg>
                        <span>Done</span>
                    </a>
                    <a href="#" class="todos-sidebar__filters-item">
                        <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 4.5H2.55556H15" stroke="white" stroke-width="2" stroke-linecap="round"
                                  stroke-linejoin="round"/>
                            <path
                                d="M14 4.2C14 3.64772 13.5523 3.2 13 3.2C12.4477 3.2 12 3.64772 12 4.2H14ZM3 4.2C3 3.64772 2.55228 3.2 2 3.2C1.44772 3.2 1 3.64772 1 4.2H3ZM3.35714 4.2C3.35714 4.75228 3.80486 5.2 4.35714 5.2C4.90943 5.2 5.35714 4.75228 5.35714 4.2H3.35714ZM9.64286 4.2C9.64286 4.75228 10.0906 5.2 10.6429 5.2C11.1951 5.2 11.6429 4.75228 11.6429 4.2H9.64286ZM12 4.2V15.4H14V4.2H12ZM12 15.4C12 15.7484 11.7273 16 11.4286 16V18C12.8656 18 14 16.8189 14 15.4H12ZM11.4286 16H3.57143V18H11.4286V16ZM3.57143 16C3.27275 16 3 15.7484 3 15.4H1C1 16.8189 2.13436 18 3.57143 18V16ZM3 15.4V4.2H1V15.4H3ZM5.35714 4.2V2.6H3.35714V4.2H5.35714ZM5.35714 2.6C5.35714 2.25157 5.62989 2 5.92857 2V0C4.4915 0 3.35714 1.18112 3.35714 2.6H5.35714ZM5.92857 2H9.07143V0H5.92857V2ZM9.07143 2C9.37011 2 9.64286 2.25157 9.64286 2.6H11.6429C11.6429 1.18112 10.5085 0 9.07143 0V2ZM9.64286 2.6V4.2H11.6429V2.6H9.64286Z"
                                fill="white"/>
                        </svg>
                        <span>Trashed</span>
                    </a>
                </div>
                <div class="todos-sidebar__filters-list">
                    <div class="todos-sidebar__filters-title">Labels</div>
                    <a href="#" class="todos-sidebar__filters-item">
                        <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M6.5 13C10.0899 13 13 10.0899 13 6.5C13 2.91015 10.0899 0 6.5 0C2.91015 0 0 2.91015 0 6.5C0 10.0899 2.91015 13 6.5 13Z"
                                  fill="#2DCD7A"/>
                        </svg>
                        <span>Personal</span>
                    </a>
                    <a href="#" class="todos-sidebar__filters-item">
                        <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M6.5 13C10.0899 13 13 10.0899 13 6.5C13 2.91015 10.0899 0 6.5 0C2.91015 0 0 2.91015 0 6.5C0 10.0899 2.91015 13 6.5 13Z"
                                  fill="#7E72F2"/>
                        </svg>
                        <span>Frontend</span>
                    </a>
                    <a href="#" class="todos-sidebar__filters-item">
                        <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M6.5 13C10.0899 13 13 10.0899 13 6.5C13 2.91015 10.0899 0 6.5 0C2.91015 0 0 2.91015 0 6.5C0 10.0899 2.91015 13 6.5 13Z"
                                  fill="#FFA84C"/>
                        </svg>
                        <span>Backend</span>
                    </a>
                    <a href="#" class="todos-sidebar__filters-item">
                        <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M6.5 13C10.0899 13 13 10.0899 13 6.5C13 2.91015 10.0899 0 6.5 0C2.91015 0 0 2.91015 0 6.5C0 10.0899 2.91015 13 6.5 13Z"
                                  fill="#ED5F5F"/>
                        </svg>
                        <span>Bug</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="todos-content">
            <div class="todos-content__search">
                <label for="todos-search">
                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M7.5 14C11.0899 14 14 11.0899 14 7.5C14 3.91015 11.0899 1 7.5 1C3.91015 1 1 3.91015 1 7.5C1 11.0899 3.91015 14 7.5 14Z"
                              stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16 16L12 12" stroke="white" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </label>
                <input id="todos-search" placeholder="Search">
            </div>
            <div class="todos-content__select">
                <div class="todos-content__checkbox">
                    <input id="check-all" type="checkbox" class="todos-content__checkbox">
                    <label for="check-all"></label>
                </div>
                Select All
            </div>
            <ul class="todos-content__list">
                <li class="todos-content__item" v-for="todo in allTodos" :key="todo.id">
                    <div class="todos-content__checkbox">
                        <input :id="'check' + todo.id" type="checkbox" class="todos-content__checkbox"
                               :checked="todo.completed">
                        <label :for="'check' + todo.id"></label>
                    </div>
                    <div class="todos-content__item-title">{{todo.title}}</div>
                    <div class="todos-content__item-labels">
                        <span style="--color: red">Frontend</span>
                    </div>
                    <div class="todos-content__item-description">{{todo.title}}</div>
                    <div class="todos-content__item-control">
                        <button class="to-important">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z" stroke="#2DCD7A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M9.5 13V9" stroke="#2DCD7A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <button class="to-starred">
                            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10 0.5L12.781 5.76604L19 6.61567L14.5 10.7124L15.562 16.5L10 13.766L4.438 16.5L5.5 10.7124L1 6.61567L7.219 5.76604L10 0.5V0.5Z" stroke="#FFA84C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </button>
                        <button class="to-remove">
                            <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 4.5H2.55556H15" stroke="#606060" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14 4.2C14 3.64772 13.5523 3.2 13 3.2C12.4477 3.2 12 3.64772 12 4.2H14ZM3 4.2C3 3.64772 2.55228 3.2 2 3.2C1.44772 3.2 1 3.64772 1 4.2H3ZM3.35714 4.2C3.35714 4.75228 3.80486 5.2 4.35714 5.2C4.90943 5.2 5.35714 4.75228 5.35714 4.2H3.35714ZM9.64286 4.2C9.64286 4.75228 10.0906 5.2 10.6429 5.2C11.1951 5.2 11.6429 4.75228 11.6429 4.2H9.64286ZM12 4.2V15.4H14V4.2H12ZM12 15.4C12 15.7484 11.7273 16 11.4286 16V18C12.8656 18 14 16.8189 14 15.4H12ZM11.4286 16H3.57143V18H11.4286V16ZM3.57143 16C3.27275 16 3 15.7484 3 15.4H1C1 16.8189 2.13436 18 3.57143 18V16ZM3 15.4V4.2H1V15.4H3ZM5.35714 4.2V2.6H3.35714V4.2H5.35714ZM5.35714 2.6C5.35714 2.25157 5.62989 2 5.92857 2V0C4.4915 0 3.35714 1.18112 3.35714 2.6H5.35714ZM5.92857 2H9.07143V0H5.92857V2ZM9.07143 2C9.37011 2 9.64286 2.25157 9.64286 2.6H11.6429C11.6429 1.18112 10.5085 0 9.07143 0V2ZM9.64286 2.6V4.2H11.6429V2.6H9.64286Z" fill="white"/>
                            </svg>
                        </button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    import {mapGetters, mapActions} from 'vuex';

    export default {
        computed: mapGetters(['allTodos']),
        methods: mapActions(['getTodos']),
        async mounted() {
            this.getTodos();
        }
    }

</script>
