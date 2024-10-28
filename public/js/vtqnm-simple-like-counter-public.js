(function() {
	'use strict';

	if (!window.hasOwnProperty('Vtqnm')) {
		window.Vtqnm = {};
	}

	window.Vtqnm.PostLikes = class {
		constructor(settings) {
			this.settings = settings;
		}

		bindEvents() {
			const posts = this.getLikedPosts();
			console.log('sdarova')

			console.log(posts)
			document.querySelectorAll('[data-post-like][data-post-id]').forEach((node) => {
				const postId = node.dataset.postId;
				if (posts.includes(postId)) {
					node.classList.add('liked');
					return true;
				}

				node.addEventListener('click', async (event) => {
					event.preventDefault();

					if (posts.includes(postId)) {
						return true;
					}

					if(!await this.markLike(postId)) {
						return false;
					}

					node.classList.add('liked');
					posts.push(postId);
					console.log(posts)
					const counter = document.querySelector('[data-like-counter]');
					if (counter) {
						counter.textContent = parseInt(counter.textContent) + 1;
					}

				}, {once: true})
			});
		}

		async markLike(id) {
			const form = new FormData();
			form.append('nonce', this.settings.nonce);
			form.append('action', 'like_post');
			form.append('post_id', id);

			return await fetch(this.settings.url, {
				method: 'post',
				body: form
			}).then(result => {
				this.addPostLike(id);
				return true;
			}).catch(result => {
				return false;
			})
		}

		getLikedPosts() {
			try {
				const data = JSON.parse(localStorage.getItem("likedPosts"));
				console.log(data)
				return Array.isArray(data) ? data : [];

			} catch (error) {
				return [];
			}
		}

		addPostLike(id) {
			const posts = this.getLikedPosts();
			posts.push(id);
			console.log(posts)
			localStorage.setItem('likedPosts', JSON.stringify(posts));
		}
	}

})( jQuery );
