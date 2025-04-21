# Annoto LTI Source Plugin for Moodle

This plugin provides LTI (Learning Tools Interoperability) integration between Moodle and Annoto, enabling seamless embedding of Annoto's interactive video collaboration features into Moodle courses.

## Custom Substitution Parameters

This plugin is specifically designed to add custom substitution parameters to the LTI request.

The plugin automatically includes the following custom parameters in the LTI request:
- Course context (course category)

These parameters are necessary for the proper functioning of Annoto's features within the Moodle environment and cannot be configured through the standard LTI tool settings.

## Installation

1. Download the plugin package
2. Extract the contents to your Moodle's `mod/lti/source/annoto` directory
