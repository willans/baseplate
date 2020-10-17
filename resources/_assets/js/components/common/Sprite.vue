<template>
	<svg>
		<use :xlink:href="`${$props.url}#${$props.name}`" />
	</svg>
</template>

<script>
	export default {
		props: {
			name: {
				type: String,
				required: true,
			},

			url: {
				type: String,
				default: '/assets/static/img/sprite.svg',
			},
		},
	};
</script>
