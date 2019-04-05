# Name: Cw & Jpeezy
# Project: User inputs a string and flips it in reverse and more...?
# Project Definitions: Reverse: Backwards string
#		               Alternate: Alternates between lowercase and uppercase characters
##########
# GLOBAL #
##########

# Hopefully we don't have to use this section, but if you need some temp globals - declare them here

###########
# CLASSES #
###########

class __MODULE_NAME: # I like to use the "__" & "_" prefix to distinguish classes & modules, do you like this naming convention?

	class _TEXT_MANAGER: 

		# INIT #

		textOutput = ""

		# FUNCTIONS #

		def reverseText(self, string):
			r = ""

			# Create a decrementing for loop that starts from the full length - 1
			for i in range((int(len(string) - 1) ),-1 ,-1): # Iterate in reverse through string
				r += string[i] # textrev = previous characters + new character

			#text

			# Return the backwards text
			self.textOutput = r
			return r

		def alternateText(self, string):
			r = ""
			c = 0

			# Loop through letters & alternate them
			for i in string:
				if c % 2 == 0: # We could do this without a counter, and probably should be, but im lazy right now so - !!FIX ME LATER!!
					r += i.upper()
				else:
					r += i.lower()

				c += 1

			# Return the alternated text
			self.textOutput = r
			return r

	########
	# INIT #
	########

	_TEXT_MANAGER = _TEXT_MANAGER() # Create the text manager object

	#############
	# FUNCTIONS #
	#############

	pass # Placeholder

	##########
	# EVENTS #
	##########

	if __name__ == "__main__": # Only run events when script ran directly (we can just access objects if we need to)

		# Temp Comment Block, Testing Classes
		#
		# text = input('What would you like to reverse: ') # This is the string to be reversed
		# type(text) # User inputs a string to be reversed

		# # Let's reverse THIS

		# print(_TEXT_MANAGER.reverseText(text)) # Print the reversed string in the terminal

		# text = "" # RESET

		# text = input('What would you like to alternate: ') # This is the string to be alternated 
		# type(text) # User inputs a string to be alternated

		# # Let's alternate THIS

		# textAlternate = _TEXT_MANAGER.alternateText(text) # Alternated string variable (We technically don't need the variable unless we are using it)

		# print(_TEXT_MANAGER.alternateText(text)) # Print the alternated string in the terminal

		text = input('What would you like to reverse: ')
		type(text)

		_TEXT_MANAGER.reverseText(text)
		print(_TEXT_MANAGER.textOutput)